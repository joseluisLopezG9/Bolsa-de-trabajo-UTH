@extends('adminlte::page')

@section('title', 'Consultar empresa')

@section('template_title')
    Empresa
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
                                <h5>{{ __('Empresas') }}</h5>
                            </span>

                             <div class="float-right">
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-sm-4">
                                <label for="nombre">Nombre de la Empresa</label>
                                    <select id="nombre" class="form-control">
                                        <option selected>Elija una Opción</option>
                                        <option value="..">...</option>
                                    </select>
                            </div><br>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-primary my-1">Consultar</button>
                            </div>
                        </div>
                    </form><br>
                    <h6>Nota: Si elimina una empresa, los registros que tengan relación con esta se eliminarán también.</h6>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Teléfono</th>
										<th>Giro</th>
										<th>Estado</th>
										<th>Actividad</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empresa->nombre }}</td>
											<td>{{ $empresa->telefono }}</td>
											<td>{{ $empresa->giro->descripcion }}</td>
											<td>{{ $empresa->estado->nombre }}</td>
											<td>{{ $empresa->actividade->nombre }}</td>
											<td>{{ $empresa->observaciones }}</td>

                                            <td>
                                                <form action="" method="">
                                                    <a class="btn btn-sm btn-outline-primary " href=""><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-outline-success" href=""><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
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
                {!! $empresas->links() !!}
            </div>
        </div>
    </div>
@endsection
