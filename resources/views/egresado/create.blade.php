@extends('adminlte::page')

@section('title', 'Nuevo egresado')

@section('template_title')
    Create Egresado
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

            <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                    <h4 id="card_title">
                                {{ __('Nuevo Egresado') }}
					</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('egresados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('egresado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
