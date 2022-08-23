@extends('adminlte::page')

@section('title', 'Mostrar egresado')

@section('template_title')
    {{ $egresado->name ?? 'Show Egresado' }}
@endsection

@section('content_header')
    <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h5>Mostrar Egresado</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('admin.egresados.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $egresado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $egresado->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $egresado->apellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Académico:</strong>
                            {{ $egresado->nivele->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $egresado->carrera->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Matrícula:</strong>
                            {{ $egresado->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>División/Clave de Carrera:</strong>
                            {{ $egresado->division }}
                        </div>
                        <div class="form-group">
                            <strong>Generación:</strong>
                            {{ $egresado->generacione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $egresado->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $egresado->colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $egresado->estado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $egresado->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $egresado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $egresado->celular }}
                        </div>
                        <div class="form-group">
                            <strong>E-mail:</strong>
                            {{ $egresado->email }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $egresado->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $egresado->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Alta:</strong>
                            {{ $egresado->fecha_alta }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia:</strong>
                            {{ $egresado->vigencia }}
                        </div><br>
                        <h6>Competencias laborales, conocimientos y habilidades</h6><br>
                        <div class="form-group">
                            <strong>N1:</strong>
                            {{ $egresado->n1 }}
                        </div>
                        <div class="form-group">
                            <strong>N2:</strong>
                            {{ $egresado->n2 }}
                        </div>
                        <div class="form-group">
                            <strong>N3:</strong>
                            {{ $egresado->n3 }}
                        </div>
                        <div class="form-group">
                            <strong>N4:</strong>
                            {{ $egresado->n4 }}
                        </div>
                        <div class="form-group">
                            <strong>N5:</strong>
                            {{ $egresado->n5 }}
                        </div>
                        <div class="form-group">
                            <strong>N6:</strong>
                            {{ $egresado->n6 }}
                        </div>
                        <div class="form-group">
                            <strong>N7:</strong>
                            {{ $egresado->n7 }}
                        </div>
                        <div class="form-group">
                            <strong>N8:</strong>
                            {{ $egresado->n8 }}
                        </div>
                        <div class="form-group">
                            <strong>N9:</strong>
                            {{ $egresado->n9 }}
                        </div>
                        <div class="form-group">
                            <strong>N10:</strong>
                            {{ $egresado->n10 }}
                        </div>
                        <div class="form-group">
                            <strong>Area de Especialización:</strong>
                            {{ $egresado->area->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>CV:</strong>
                            {{ $egresado->cv }}
                        </div>
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $egresado->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $egresado->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
