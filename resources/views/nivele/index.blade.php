@extends('adminlte::page')

@section('title', 'Niveles academicos')

@section('template_title')
    Nivele
@endsection

@section('content_header')
    <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h5>{{ __('Niveles Académicos') }}</h5>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('admin.niveles.create') }}" class="btn btn-outline-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                    <h6>Nota: Si elimina un nivel académico, los registros que tengan relación con este se eliminarán también.</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($niveles as $nivele)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $nivele->nombre }}</td>

                                            <td>
                                                <form action="{{ route('admin.niveles.destroy',$nivele->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-outline-primary " href="{{ route('admin.niveles.show',$nivele->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-outline-success" href="{{ route('admin.niveles.edit',$nivele->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $niveles->links() !!}
            </div>
        </div>
    </div>
@endsection
