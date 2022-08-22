@extends('adminlte::page')

@section('title', 'Consultar egresado')

@section('template_title')
    Egresado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h5>{{ __('Consultar Egresado') }}</h5>
                            </span>

                             <div class="float-right">
								<form action="{{route('admin.egresados.index')}}" method="get">
									<div class="form row">
										<div class="col-sm-11">
											<input type="text" class="form-control" name="texto" placeholder="Matrícula o Folio" value="{{$texto}}">
										</div>
										<div class="col-auto my-1">
											<input type="submit" class="btn btn-outline-primary" value="Buscar">
										</div>
									</div>
								</form>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Apellidopaterno</th>
										<th>Apellidomaterno</th>
										<th>Carrera Id</th>
										<th>Matricula</th>
										<th>Folio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($egresados)<=0)
                                        <tr>
                                            <td colspan="8">No hay resultados</td>
                                        </tr>
                                    @else
                                    @foreach ($egresados as $egresado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $egresado->nombre }}</td>
											<td>{{ $egresado->apellidoPaterno }}</td>
											<td>{{ $egresado->apellidoMaterno }}</td>
											<td>{{ $egresado->carrera->nombre }}</td>
											<td>{{ $egresado->matricula }}</td>
											<td>{{ $egresado->folio }}</td>

                                            <td>
                                                <form action="{{ route('admin.egresados.destroy',$egresado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('admin.egresados.show',$egresado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('admin.egresados.edit',$egresado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $egresados->links() !!}
            </div>
        </div>
    </div>
@endsection
