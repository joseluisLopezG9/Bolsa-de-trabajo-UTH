@extends('adminlte::page')

@section('title', 'Editar egresado')

@section('template_title')
    Update Egresado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h5>Editar Egresado</h5></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('egresados.update', $egresado->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('egresado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
