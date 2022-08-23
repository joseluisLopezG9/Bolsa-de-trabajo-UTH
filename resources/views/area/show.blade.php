@extends('adminlte::page')

@section('title', 'Mostrar area')

@section('template_title')
    {{ $area->name ?? 'Show Area' }}
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
                            <span class="card-title"><h5>Mostrar Área</h5></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('admin.areas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $area->carrera->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $area->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
