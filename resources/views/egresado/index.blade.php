@extends('adminlte::page')

@section('title', 'Consultar egresado')

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
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

                            <h4 id="card_title">
                                {{ __('Consultar Egresado') }}
							</h4>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
					<br>

				<div>
                    <h6>Buscar egresado por Folio</h6>
                    <div class="form-group w-25">
                    <input type="text" class="form-control" id="">
					<br>
                    <center><button type="button" class="btn btn-outline-success">Buscar</button></center>
					</div>
					
					<br>

					<h6>Buscar egresado por Apellido Paterno</h6>
                    <div class="form-group w-25">
                    <input type="text" class="form-control" id="">
					<br>
                    <center><button type="button" class="btn btn-outline-success">Buscar</button></center>
					</div>

					<br>

					<h6>Buscar egresado Matricula</h6>
                    <div class="form-group w-25">
                    <input type="text" class="form-control" id="">
					<br>
                    <center><button type="button" class="btn btn-outline-success">Buscar</button></center>
					</div>

					<br>

					<h6>Buscar egresado por carrera</h6>
					<div class="input-group">
					<select class="selectpicker" title="Pick One">
					<option data-hidden="true">
					Elija una opción												
					</option>
					<option>TSU Tecnologías de la Información</option>
					<option>TSU Desarrollo de Negocios</option>
					<option>Ing Metalmecánica</option>
					<option>Ing Procesos industriales</option>
					</select>
					</div>

					<br>
					<br>

					<h6>Buscar egresado Fecha</h6>
                    <div class="form-group w-25">
                    <input type="date" class="form-control" id="">
					<br>
                    <center><button type="button" class="btn btn-outline-success">Buscar</button></center>
					</div>
				</div>	

				<center><h4 id="card_title">
                 {{ __('Resultados') }}
				</h4></center>
				<div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="usuarios">
                                <thead class="thead">
                                    <tr>
                                        <th>Folio</th>
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Matricula</th>
										<th>Carrera</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($egresados as $egresado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $egresado->nombre }}</td>
											<td>{{ $egresado->apellidoPaterno }}</td>
											<td>{{ $egresado->apellidoMaterno }}</td>
											<td>{{ $egresado->matricula }}</td>
											<td>{{ $egresado->carrera }}</td>
                                            <td>
                                                <form action="{{ route('egresados.destroy',$egresado->id) }}" method="POST">
                                                    <a class="btn btn btn-primary " href="{{ route('egresados.show',$egresado->id) }}"><i class="fa fa-fw fa-eye"></i>Mostrar</a>
                                                    <a class="btn btn btn-success" href="{{ route('egresados.edit',$egresado->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
					</div>
                </div>
            </div>
                {!! $egresados->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
	<script>
		$('#usuarios').DataTable({
			responsive: true,
			autoWidth: false,
		
		"language": {
            "lengthMenu": "Mostrar " + 
						  `<select class="custom-select custom-select-sm form-control form-control-sm">
						  <option value = '10'>10</option>
						  <option value = '20'>20</option>
						  <option value = '50'>50</option>
						  <option value = '-1'>Todos</option>
						  </select>` + 
						  "registros por página",
            "zeroRecords": "No se encontraron resultados en la búsqueda",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No se encontraron registros",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
			'search': 'Buscar:',
			'paginate': {
				'next': 'Siguiente',
				'previous': 'Anterior'
			}
        }
		});	
	</script>
@endsection
