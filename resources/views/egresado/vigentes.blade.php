@extends('adminlte::page')

@section('title', 'Consultar egresado')

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
@endsection

@section('content_header')
    <center><h3 style="color: green;font-size: 35px;"> Bolsa de trabajo institucional</h3></center>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h4 id="card_title">
                                {{ __('Egresados Vigentes en Bolsa de Trabajo Institucional') }}
							</h4>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
					<br>
				<div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="usuarios_vigentes">
                                <thead class="thead">
                                    <tr>
                                        <th>Folio</th>
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Matricula</th>
										<th>Carrera</th>
                                        <th>Vigencia</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($egresados as $egresado)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $egresado->name }}</td>
											<td>{{ $egresado->lastname }}</td>
											<td>{{ $egresado->lastname2 }}</td>
											<td>{{ $egresado->enrollment }}</td>
											<td>{{ $egresado->career }}</td>
                                            <td>{{ $egresado->validity }}</td>
                                            <td>
                                                <form action="{{ route('egresados.destroy',$egresado->id) }}" method="POST">
                                                    <a class="btn btn btn-success" href="{{ route('#',$egresado->id) }}">Notificar</a>
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
		$('#usuarios_vigentes').DataTable({
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