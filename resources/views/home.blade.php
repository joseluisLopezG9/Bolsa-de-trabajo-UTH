@extends('adminlte::page')

@section('title', 'index')


@section('content_header')
<div class="info-box">
            <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Usted tiene:</span>
            <span class="info-box-number">| 30 mensajes sin leer |</span>
</div>
            <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Documentos sin subir</span>
            <span class="info-box-number">| 14 |</span>
            </div>

            <span class="info-box-icon bg-success"><i class="far fa-calendar-alt"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Eventos pendientes</span>
            <span class="info-box-number">| 7 |</span>
            <span class="progress-description">
            </span>
            </div>
</div>

<br>
<center><h3 style="color: green;font-size: 35px;"> Bolsa de trabajo institucional</h3></center>
@stop

@section('content')

        <div class="card-header">

        <br>
        <center><img class="img-fluid" src="vendor/adminlte/dist/img/logoUTH.png" alt=""></center>
        <br>

        <br>
        <h3 class="card-title" style="color: green"> Bienvenido (a) </h3>
        </div>

        <div class="card-body">
        <p align="justify">
        El entorno laboral al cual se incorporan los alumnos y egresados está inmerso en el uso intensivo de tecnologías para eficientar los procesos de reclutamiento en nuestra localidad. En virtud de ello, se considera de suma importancia que la operación de la bolsa de trabajo sea amigable y de fácil acceso para la promoción del talento de la Institución, por lo tanto se cuenta con la vinculación directa entre algunas empresas.</p>

        <h4 align="center" style="color: green">¡ Te invitamos a hacer uso del sistema !</h4> 

        </div>

    </div>


@stop


