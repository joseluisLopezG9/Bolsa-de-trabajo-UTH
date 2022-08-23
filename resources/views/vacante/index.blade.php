@extends('layouts.app')

@section('template_title')
    Vacante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vacante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vacantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Empresa Id</th>
										<th>Puesto</th>
										<th>Nivel Id</th>
										<th>Num Candidatos</th>
										<th>Num Vacantes</th>
										<th>Edad</th>
										<th>Genero</th>
										<th>Idioma</th>
										<th>Estado Civil</th>
										<th>Experiencia</th>
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
										<th>Area Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vacantes as $vacante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vacante->empresa_id }}</td>
											<td>{{ $vacante->puesto }}</td>
											<td>{{ $vacante->nivel_id }}</td>
											<td>{{ $vacante->num_candidatos }}</td>
											<td>{{ $vacante->num_vacantes }}</td>
											<td>{{ $vacante->edad }}</td>
											<td>{{ $vacante->genero }}</td>
											<td>{{ $vacante->idioma }}</td>
											<td>{{ $vacante->estado_civil }}</td>
											<td>{{ $vacante->experiencia }}</td>
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
											<td>{{ $vacante->area_id }}</td>

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
