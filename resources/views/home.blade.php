@extends('adminlte::page')

@section('title', 'index')

@section('content_header')
    <center><h3 style="color: blue;font-size: 35px;"> Bolsa de trabajo institucional</h3></center>
@stop

@section('content_header')
    <h1 style="color: green;font-size: 35px;"> Bienvenido (a)</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">

        <br>


        <center><img class="img-fluid" src="vendor/adminlte/dist/img/logoUTH.png" alt=""></center>
        <h2 class="card-title" style="color: green"> Bienvenido (a) </h2>
        </div>

        <div class="card-body">
        Este es un sistema desarrollado por la Universidad Tecnólogica de Huejotzingo, dicho sistema va dirigido para empresas, estudiantes y egresados.

        </div>

    </div>


@stop



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
