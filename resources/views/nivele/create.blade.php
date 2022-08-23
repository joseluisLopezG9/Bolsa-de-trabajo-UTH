@extends('adminlte::page')

@section('title', 'Nuevo nivel')

@section('template_title')
    Create Nivele
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Crear Nivel Académico</h5></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.niveles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('nivele.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
