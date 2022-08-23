@extends('adminlte::page')

@section('title', 'Nueva vacante')

@section('template_title')
    Create Vacante
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
                        <span class="card-title"><h5>Nueva Vacante</h5></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.vacantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vacante.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
