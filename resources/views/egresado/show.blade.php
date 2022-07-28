@extends('adminlte::page')

@section('title', 'Ver egresado')

@section('template_title')
    {{ $egresado->name ?? 'Show Egresado' }}
@endsection

@section('content')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3>Mostrar egresado </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('egresados.index') }}">Regresar</a>
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
                            <strong>Nivel de Estudios:</strong>
                            {{ $egresado->nivelEstudios }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $egresado->carrera }}
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
                            <strong>Generación:</strong>
                            {{ $egresado->gen }}
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
                            {{ $egresado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $egresado->mun }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $egresado->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $egresado->cel }}
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
                            <strong>Competencia °1</strong>
                            {{ $egresado->n1 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °2:</strong>
                            {{ $egresado->n3 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °3:</strong>
                            {{ $egresado->n3 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °4:</strong>
                            {{ $egresado->n4 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °5:</strong>
                            {{ $egresado->n5 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °6:</strong>
                            {{ $egresado->n6 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °7:</strong>
                            {{ $egresado->n7 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °8:</strong>
                            {{ $egresado->n8 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °9:</strong>
                            {{ $egresado->n9 }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia °10:</strong>
                            {{ $egresado->n10 }}
                        </div>
                        <div class="form-group">
                            <strong>Área:</strong>
                            {{ $egresado->area }}
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
@stop
