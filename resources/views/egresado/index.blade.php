@extends('adminlte::page')

@section('title', 'Consultar egresado')

@section('template_title')
    Egresado
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
                                <h5>{{ __('Consultar Egresado') }}</h5>
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="folio">Buscar Egresado por Folio</label>
                                    <input type="text" class="form-control" id="folio">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nombre">Buscar Egresado por Nombre</label>
                                    <input type="text" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="aPaterno">Buscar Egresado por Apellido Paterno</label>
                                    <input type="text" class="form-control" id="aPaterno">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="aMaterno">Buscar Egresado por Apellido Materno</label>
                                    <input type="text" class="form-control" id="aMaterno">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="matricula">Buscar Egresado por Matrícula</label>
                                    <input type="text" class="form-control" id="matricula">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha">Buscar Egresado por Fecha</label>
                                    <input type="date" class="form-control" id="fecha">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="carrera">Buscar Egresado por Carrera</label>
                                    <select id="carrera" class="form-control">
                                        <option selected>Buscar Egresado por Carrera</option>
                                        <option value="ti">Tecnologías de la Información</option>
                                    </select>
                            </div>
                    </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Folio</th>
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Carrera</th>
										<th>Matrícula</th>

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

                                            <td>{{ $egresado->folio }}</td>
											<td>{{ $egresado->nombre }}</td>
											<td>{{ $egresado->apellidoPaterno }}</td>
											<td>{{ $egresado->apellidoMaterno }}</td>
											<td>{{ $egresado->carrera->nombre }}</td>
											<td>{{ $egresado->matricula }}</td>
                                             
                                            <td>
                                                <form action="{{ route('admin.egresados.destroy',$egresado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-outline-primary " href="{{ route('admin.egresados.show',$egresado->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-outline-success" href="{{ route('admin.egresados.edit',$egresado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
