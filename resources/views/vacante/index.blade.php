@extends('adminlte::page')

@section('title', 'Consultar vacante')

@section('template_title')
    Vacante
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
                                <h5>{{ __('Vacantes') }}</h5>
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
                                    <label for="folio">Folio de Vacante</label>
                                        <input type="text" class="form-control" id="folio">
                                </div>
                            <div class="form-group col-md-6">
                                <label for="carrera">Nivel de Estudios</label>
                                    <select id="carrera" class="form-control">
                                        <option selected>Elija una Opción</option>
                                        <option value="tsu">TSU</option>
                                        <option value="ing">Ingeniería</option>
                                        <option value="mtria">Maestría</option>
                                    </select>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Folio</th>
                                        <th>Puesto</th>
										<th>Empresa</th>
										<th>Nivel académico</th>
										<th>Sueldo</th>
										<th>Horario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacantes as $vacante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $vacante->folio }}</td>
											<td>{{ $vacante->puesto }}</td>
                                            <td>{{ $vacante->empresa->nombre }}</td>
											<td>{{ $vacante->nivele->nombre }}</td>
											<td>{{ $vacante->sueldo }}</td>
											<td>{{ $vacante->horario }}</td>

                                            <td>
                                                <form action="" method="">
                                                    <a class="btn btn-sm btn-outline-primary " href=""><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-outline-success" href=""><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $vacantes->links() !!}
            </div>
        </div>
    </div>
@endsection
