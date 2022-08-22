@extends('adminlte::page')

@section('title', 'Mostrar egresado')

@section('template_title')
    {{ $egresado->name ?? 'Show Egresado' }}
@endsection

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
                            <a class="btn btn-primary" href="{{ route('egresados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $egresado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $egresado->apellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $egresado->apellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Id:</strong>
                            {{ $egresado->nivel_id }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera Id:</strong>
                            {{ $egresado->carrera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $egresado->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Division:</strong>
                            {{ $egresado->division }}
                        </div>
                        <div class="form-group">
                            <strong>Generacion Id:</strong>
                            {{ $egresado->generacion_id }}
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
                            <strong>Estado Id:</strong>
                            {{ $egresado->estado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $egresado->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $egresado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $egresado->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
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
                            <strong>Fecha Alta:</strong>
                            {{ $egresado->fecha_alta }}
                        </div>
                        <div class="form-group">
                            <strong>Vigencia:</strong>
                            {{ $egresado->vigencia }}
                        </div>
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
                            <strong>Area Id:</strong>
                            {{ $egresado->area_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cv:</strong>
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
