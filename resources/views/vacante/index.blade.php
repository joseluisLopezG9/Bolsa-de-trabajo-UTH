@extends('adminlte::page')

@section('title', 'Ver vacante')

@section('template_title')
    Ver Vacante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
                @includeif('partials.errors')

                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <h4 id="card_title">
                            {{ __('Consultar Empresa') }}
                        </h4>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <br>

                    <center><h4 id="card_title">
                        {{ __('Resultados') }}
                       </h4></center>
                       <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="usuarios">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>ID Empresa</th>
										<th>Puesto</th>
										<th>Nivel</th>
										<th>Num Candidatos</th>
										<th>Num Vacantes</th>
										<th>Edad</th>
										<th>Genero</th>
										<th>Idioma</th>
										<th>Estado Civil</th>
										<th>Exp</th>
										<th>Conocimientos</th>
										<th>Habilidades</th>
										<th>Sueldo</th>
										<th>Horario</th>
										<th>Entrevistador</th>
										<th>Contacto</th>
										<th>Confidencial</th>
										<th>Otros</th>
										<th>Beneficios</th>
										<th>Folio</th>
                                        <th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacantes as $vacante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vacante->empresa_id }}</td>
											<td>{{ $vacante->puesto }}</td>
											<td>{{ $vacante->nivel }}</td>
											<td>{{ $vacante->num_candidatos }}</td>
											<td>{{ $vacante->num_vacantes }}</td>
											<td>{{ $vacante->edad }}</td>
											<td>{{ $vacante->genero }}</td>
											<td>{{ $vacante->idioma }}</td>
											<td>{{ $vacante->estado_civil }}</td>
											<td>{{ $vacante->exp }}</td>
											<td>{{ $vacante->conocimientos }}</td>
											<td>{{ $vacante->habilidades }}</td>
											<td>{{ $vacante->sueldo }}</td>
											<td>{{ $vacante->horario }}</td>
											<td>{{ $vacante->entrevistador }}</td>
											<td>{{ $vacante->contacto }}</td>
											<td>{{ $vacante->confidencial }}</td>
											<td>{{ $vacante->otros }}</td>
											<td>{{ $vacante->beneficios }}</td>
											<td>{{ $vacante->folio }}</td>

                                            <td>
                                                <form action="{{ route('vacantes.destroy',$vacante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vacantes.show',$vacante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vacantes.edit',$vacante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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

