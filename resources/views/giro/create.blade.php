@extends('adminlte::page')

@section('title', 'Nuevo giro')

@section('template_title')
    Create Giro
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
                        <span class="card-title"><h5>Nuevo Giro</h5></span>
                        <div class="float-right">
                            <a class="btn btn-outline-primary" href="{{ route('admin.giros.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.giros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('giro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
