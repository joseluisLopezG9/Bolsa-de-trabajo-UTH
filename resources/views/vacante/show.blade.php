@extends('layouts.app')

@section('template_title')
    {{ $vacante->name ?? 'Show Vacante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vacante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vacantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $vacante->empresa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $vacante->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel Id:</strong>
                            {{ $vacante->nivel_id }}
                        </div>
                        <div class="form-group">
                            <strong>Num Candidatos:</strong>
                            {{ $vacante->num_candidatos }}
                        </div>
                        <div class="form-group">
                            <strong>Num Vacantes:</strong>
                            {{ $vacante->num_vacantes }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $vacante->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $vacante->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $vacante->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civil:</strong>
                            {{ $vacante->estado_civil }}
                        </div>
                        <div class="form-group">
                            <strong>Experiencia:</strong>
                            {{ $vacante->experiencia }}
                        </div>
                        <div class="form-group">
                            <strong>Conocimientos:</strong>
                            {{ $vacante->conocimientos }}
                        </div>
                        <div class="form-group">
                            <strong>Habilidades:</strong>
                            {{ $vacante->habilidades }}
                        </div>
                        <div class="form-group">
                            <strong>Sueldo:</strong>
                            {{ $vacante->sueldo }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $vacante->horario }}
                        </div>
                        <div class="form-group">
                            <strong>Entrevistador:</strong>
                            {{ $vacante->entrevistador }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto:</strong>
                            {{ $vacante->contacto }}
                        </div>
                        <div class="form-group">
                            <strong>Confidencial:</strong>
                            {{ $vacante->confidencial }}
                        </div>
                        <div class="form-group">
                            <strong>Otros:</strong>
                            {{ $vacante->otros }}
                        </div>
                        <div class="form-group">
                            <strong>Beneficios:</strong>
                            {{ $vacante->beneficios }}
                        </div>
                        <div class="form-group">
                            <strong>Folio:</strong>
                            {{ $vacante->folio }}
                        </div>
                        <div class="form-group">
                            <strong>Area Id:</strong>
                            {{ $vacante->area_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
