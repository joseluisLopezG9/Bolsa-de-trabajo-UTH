@extends('adminlte::page')

@section('title', 'Consultar egresado')


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

                            <span id="card_title">
                                {{ __('Bienvenido (a)') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">

                                        <div class="form-group">
                                        <h6>Nombre de la empresa</h6>
                                        <select class="selectpicker" title="Pick One">
			                            <option data-hidden="true">
			                            Elija una opción												
			                            </option>
			                            </select>
                             {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
                                        
        
                                    @foreach ($empresas as $empresa)
                    <a class="btn btn-sm btn-success " href="{{ route('empresas.show',$empresa->id) }}"></i>Consultar</a>
                                    @endforeach
                            
        </div>                
                        </div>
                    

    <div class="box box-info padding-1">
    <div class="box-body">
        

        <h6>Domicilio</h6>
        <div class="form-group w-50">
            <input type="text" class="form-control" id="">
			<br>
        </div>	
        <h6>Teléfono</h6>
        <div class="form-group w-50">
            <input type="text" class="form-control" id="">
			<br>
        </div>	
        <h6>Giro de la empresa</h6>
        <div class="form-group w-50">
            <input type="text" class="form-control" id="">
			<br>
        </div>
        <h6>Estado</h6>
			<div class="input-group">
			<select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
		    <option>Puebla</option>
			<option>Tlaxcala</option>
			</select>
		</div>
        <br>
        <h6>Giro de la empresa</h6>
			<div class="input-group">
			<select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
			</select>
		</div>
        <br>
        <h6>Actividad de la empresa</h6>
			<div class="input-group">
			<select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
			</select>
		</div>
        <br>
        <h6>Población o Ciudad</h6>
			<div class="input-group">
			<select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
			</select>
		</div>
        <br>
        <h6>Observaciones</h6>
        <div class="form-group w-50">
            <input type="text" class="form-control" id="">
			<br>
        </div>

       </div>
       <div class="box-footer mt20">
       @foreach ($empresas as $empresa)
       <center><a class="btn btn-sm btn-success " href="{{ route('empresas.show',$empresa->id) }}"></i>Consultar</a></center>
       @endforeach
      </div>
  </div>   
</div>
@endsection
