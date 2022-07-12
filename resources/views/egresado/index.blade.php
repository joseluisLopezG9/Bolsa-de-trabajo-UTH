@extends('layouts.app')

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
                                {{ __('Egresado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('egresados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Lastname</th>
										<th>Lastname2</th>
										<th>Level</th>
										<th>Career</th>
										<th>Enrollment</th>
										<th>Division</th>
										<th>Gen</th>
										<th>Address</th>
										<th>Suburb</th>
										<th>State</th>
										<th>Mun</th>
										<th>Tel</th>
										<th>Cel</th>
										<th>Email</th>
										<th>User</th>
										<th>Pass</th>
										<th>Reg Date</th>
										<th>Validity</th>
										<th>Skills</th>
										<th>Skills1</th>
										<th>Skills2</th>
										<th>Skills3</th>
										<th>Skills4</th>
										<th>Skills5</th>
										<th>Skills6</th>
										<th>Skills7</th>
										<th>Skills8</th>
										<th>Skills9</th>
										<th>Area</th>
										<th>Cv</th>
										<th>Invoice</th>
										<th>Remark</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($egresados as $egresado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $egresado->name }}</td>
											<td>{{ $egresado->lastname }}</td>
											<td>{{ $egresado->lastname2 }}</td>
											<td>{{ $egresado->level }}</td>
											<td>{{ $egresado->career }}</td>
											<td>{{ $egresado->enrollment }}</td>
											<td>{{ $egresado->division }}</td>
											<td>{{ $egresado->gen }}</td>
											<td>{{ $egresado->address }}</td>
											<td>{{ $egresado->suburb }}</td>
											<td>{{ $egresado->state }}</td>
											<td>{{ $egresado->mun }}</td>
											<td>{{ $egresado->tel }}</td>
											<td>{{ $egresado->cel }}</td>
											<td>{{ $egresado->email }}</td>
											<td>{{ $egresado->user }}</td>
											<td>{{ $egresado->pass }}</td>
											<td>{{ $egresado->reg_date }}</td>
											<td>{{ $egresado->validity }}</td>
											<td>{{ $egresado->skills }}</td>
											<td>{{ $egresado->skills1 }}</td>
											<td>{{ $egresado->skills2 }}</td>
											<td>{{ $egresado->skills3 }}</td>
											<td>{{ $egresado->skills4 }}</td>
											<td>{{ $egresado->skills5 }}</td>
											<td>{{ $egresado->skills6 }}</td>
											<td>{{ $egresado->skills7 }}</td>
											<td>{{ $egresado->skills8 }}</td>
											<td>{{ $egresado->skills9 }}</td>
											<td>{{ $egresado->area }}</td>
											<td>{{ $egresado->cv }}</td>
											<td>{{ $egresado->invoice }}</td>
											<td>{{ $egresado->remark }}</td>

                                            <td>
                                                <form action="{{ route('egresados.destroy',$egresado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('egresados.show',$egresado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('egresados.edit',$egresado->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $egresados->links() !!}
            </div>
        </div>
    </div>
@endsection
