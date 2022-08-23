@extends('adminlte::page')

@section('title', 'Editar nivel')

@section('template_title')
    Update Nivele
@endsection

@section('content_header')
    <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Editar Nivel Académico</h5></span>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('admin.niveles.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.niveles.update', $nivele->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('nivele.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
