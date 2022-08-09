@extends('adminlte::page')

@section('title', 'Ver empresa')

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
                            <span class="card-title">Mostrar Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('empresas.index') }}"> Regresar</a>
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
                            <strong>Teléfono:</strong>
                            {{ $empresa->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Giro de la empresa:</strong>
                            {{ $empresa->giro }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empresa->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Población o Ciudad:</strong>
                            {{ $empresa->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad de la empresa:</strong>
                            {{ $empresa->actividad }}
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
