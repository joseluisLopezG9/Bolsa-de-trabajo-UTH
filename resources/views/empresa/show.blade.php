@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empresa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Domicilio:</strong>
                            {{ $empresa->domicilio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Giro Id:</strong>
                            {{ $empresa->giro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $empresa->estado_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $empresa->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad Id:</strong>
                            {{ $empresa->actividad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $empresa->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
