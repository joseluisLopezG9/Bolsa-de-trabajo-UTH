@extends('adminlte::page')

@section('title', 'Datos de acceso')

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
                                {{ __('Formato "Datos de acceso"') }}
							</h4>
                        </div>
                    </div>
                        <br>
                        <div>
                        <h6>Folio de egresado</h6>
                        <div class="form-group w-25">
                        <input type="text" class="form-control" id="">
                        </div>
                        <br>
                        <center><button type="submit" class="btn  btn-success">Consultar</button></center>
					    </div>

                        
                        <div>
                        <h6>Nombre (s)</h6>
                        <div class="form-group w-50">
                        <input type="text" class="form-control" id="">
                        </div>
                        
                        <br>
                    
                        <div>
                        <h6>Apellido Paterno</h6>
                        <div class="form-group w-25">
                        <input type="text" class="form-control" id="">
                        </div>

                        <br>

                        <div>
                        <h6>Apellido Materno</h6>
                        <div class="form-group w-25">
                        <input type="text" class="form-control" id="">
                        </div>

                        <br>
                        
                        <div class="form-group">
                            <h6>Nivel de estudios</h6>
                            <select class="selectpicker" title="Pick One">
                            <option data-hidden="true">
                            Elija una opción												
                            </option>
                            <option>- Técnico Superior Universitario</option>
                            <option>- Ingeniería</option>
                            <option>- Maestría</option>
                            </select>
                        </div>

                        <br>
                        <div>
                        <h6>Carrera</h6>
                        <select class="selectpicker" title="Pick One">
                        <option data-hidden="true">
                        Elija una opción												
                        </option>
                        <option>TICS - Desarrollo de Software Multiplataforma</option>
                        <option>TICS - Entornos Virtuales y Negocios Digitales</option>
                        <option>TICS - Redes Inteligentes y Ciberseguridad</option>
                        <option>Mecatrontrónica - Robótica</option>
                        <option>Mecatrontrónica - Instalaciones Eléctricas Eficientes</option>
                        <option>Procesos Industriales - Alimentos Gourmet</option>
                        <option>Procesos Industriales - Automotriz</option>
                        </select>
                        </div>

                        <br>
                        <div>
                        <h6>Usuario</h6>
                        <div class="form-group w-25">
                        <input type="text" class="form-control" id="">
                        </div>
					   

                        <br>
                        <div>
                        <h6>Contraseña</h6>
                        <div class="form-group w-25">
                        <input type="password" class="form-control" id="">
                        </div>
                        <br>
                        <center><button type="submit" class="btn  btn-success">Consultar</button></center>
                        <br>

                    </div>
                </div>
        </div>
    </div>
@endsection