@extends('adminlte::page')

@section('title', 'Nva Actividad')

@section('content_header')
    <center><h3 style="color: green;font-size: 30px;">Bolsa de Trabajo Institucional</h3></center>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h4 id="card_title">
                                {{ __('Nueva actividad de empresa') }}
							</h4>
                        </div>
                    </div>
                    <br>
                        <div>
                        <h6>Escriba una nueva Actividad de Empresa</h6>
                        <div class="form-group w-50">
                        <input type="text" class="form-control" id="">
                        </div>
                        <center><button type="submit" class="btn  btn-success">Guardar</button></center>
                        <br>
                    </div>
                </div>
        </div>
    </div>
@endsection