@extends('adminlte::page')

@section('title', 'Nuevo egresado')

@section('template_title')
    Create Egresado
@endsection

@section('content_header')
    <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Nuevo Egresado</h5></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.egresados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('egresado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
