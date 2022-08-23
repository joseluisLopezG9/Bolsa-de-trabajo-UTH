@extends('adminlte::page')

@section('title', 'Mostrar empresa')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
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
                            <span class="card-title"><h5>Mostrar Empresa</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('admin.empresas.index') }}"> Regresar</a>
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
                            <strong>Giro:</strong>
                            {{ $empresa->giro->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empresa->estado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $empresa->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Actividad:</strong>
                            {{ $empresa->actividade->nombre }}
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
