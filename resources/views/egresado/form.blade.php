<div class="box box-info padding-1">
    <div class="box-body">

        <br><h5>Datos del Egresado</h5><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('nombre(s)') }}
                {{ Form::text('nombre', $egresado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre(s)']) }}
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('apellido paterno') }}
                {{ Form::text('apellidoPaterno', $egresado->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
                {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('apellido materno') }}
                {{ Form::text('apellidoMaterno', $egresado->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
                {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('nivel académico') }}
                {{ Form::select('nivel_id', $niveles, $egresado->nivel_id, ['class' => 'form-control' . ($errors->has('nivel_id') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Académico']) }}
                {!! $errors->first('nivel_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('carrera') }}
                {{ Form::select('carrera_id', $carreras, $egresado->carrera_id, ['class' => 'form-control' . ($errors->has('carrera_id') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
                {!! $errors->first('carrera_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('matrícula') }}
                {{ Form::text('matricula', $egresado->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'ej. 3520110384']) }}
                {!! $errors->first('matricula', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('división/Clave de carrera') }}
                {{ Form::text('division', $egresado->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'División o Clave de Carrera']) }}
                {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('generación') }}
                {{ Form::select('generacion_id', $generaciones, $egresado->generacion_id, ['class' => 'form-control' . ($errors->has('generacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Generación']) }}
                {!! $errors->first('generacion_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><h5>Datos Personales</h5><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('domicilio') }}
                {{ Form::text('domicilio', $egresado->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
                {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('colonia') }}
                {{ Form::text('colonia', $egresado->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
                {!! $errors->first('colonia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('estado') }}
                {{ Form::select('estado_id', $estados, $egresado->estado_id, ['class' => 'form-control' . ($errors->has('estado_id') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                {!! $errors->first('estado_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('municipio') }}
                {{ Form::text('municipio', $egresado->municipio, ['class' => 'form-control' . ($errors->has('municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
                {!! $errors->first('municipio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('número de teléfono') }}
                {{ Form::text('telefono', $egresado->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'ej. 2273850511']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('número de celular') }}
                {{ Form::text('celular', $egresado->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'ej. 2271530042']) }}
                {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('E-mail') }}
                {{ Form::email('email', $egresado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'ej. 3520110384@uth.edu.mx']) }}
                {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><h5>Datos de acceso y vigencia</h5><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('usuario') }}
                {{ Form::text('usuario', $egresado->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de Usuario']) }}
                {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('contraseña') }}
                {{ Form::text('contraseña', $egresado->contraseña, ['class' => 'form-control' . ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
                {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('fecha de alta') }}
                {{ Form::date('fecha_alta', $egresado->fecha_alta, ['class' => 'form-control' . ($errors->has('fecha_alta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Alta']) }}
                {!! $errors->first('fecha_alta', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('vigencia') }}
                {{ Form::date('vigencia', $egresado->vigencia, ['class' => 'form-control' . ($errors->has('vigencia') ? ' is-invalid' : ''), 'placeholder' => 'Vigencia']) }}
                {!! $errors->first('vigencia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><h5>Competencias laborales, conocimientos y habilidades</h5><br>

        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('n°1') }}
                {{ Form::text('n1', $egresado->n1, ['class' => 'form-control' . ($errors->has('n1') ? ' is-invalid' : ''), 'placeholder' => 'N1']) }}
                {!! $errors->first('n1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('n°2') }}
                {{ Form::text('n2', $egresado->n2, ['class' => 'form-control' . ($errors->has('n2') ? ' is-invalid' : ''), 'placeholder' => 'N2']) }}
                {!! $errors->first('n2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('n°3') }}
                {{ Form::text('n3', $egresado->n3, ['class' => 'form-control' . ($errors->has('n3') ? ' is-invalid' : ''), 'placeholder' => 'N3']) }}
                {!! $errors->first('n3', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('n°4') }}
                {{ Form::text('n4', $egresado->n4, ['class' => 'form-control' . ($errors->has('n4') ? ' is-invalid' : ''), 'placeholder' => 'N4']) }}
                {!! $errors->first('n4', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('n°5') }}
                {{ Form::text('n5', $egresado->n5, ['class' => 'form-control' . ($errors->has('n5') ? ' is-invalid' : ''), 'placeholder' => 'N5']) }}
                {!! $errors->first('n5', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('n°6') }}
                {{ Form::text('n6', $egresado->n6, ['class' => 'form-control' . ($errors->has('n6') ? ' is-invalid' : ''), 'placeholder' => 'N6']) }}
                {!! $errors->first('n6', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('n°7') }}
                {{ Form::text('n7', $egresado->n7, ['class' => 'form-control' . ($errors->has('n7') ? ' is-invalid' : ''), 'placeholder' => 'N7']) }}
                {!! $errors->first('n7', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('n°8') }}
                {{ Form::text('n8', $egresado->n8, ['class' => 'form-control' . ($errors->has('n8') ? ' is-invalid' : ''), 'placeholder' => 'N8']) }}
                {!! $errors->first('n8', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('n°9') }}
                {{ Form::text('n9', $egresado->n9, ['class' => 'form-control' . ($errors->has('n9') ? ' is-invalid' : ''), 'placeholder' => 'N9']) }}
                {!! $errors->first('n9', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('n°10') }}
                {{ Form::text('n10', $egresado->n10, ['class' => 'form-control' . ($errors->has('n10') ? ' is-invalid' : ''), 'placeholder' => 'N10']) }}
                {!! $errors->first('n10', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('area de especialización') }}
                {{ Form::select('area_id', $areas, $egresado->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Area de Especialización']) }}
                {!! $errors->first('area_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('curriculum vitae') }}
                {{ Form::file('cv', $egresado->cv, ['class' => 'form-control' . ($errors->has('cv') ? ' is-invalid' : ''), 'placeholder' => 'Cv']) }}
                {!! $errors->first('cv', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('folio') }}
                {{ Form::text('folio', $egresado->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
                {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('observaciones') }}
                {{ Form::text('observaciones', $egresado->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
                {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-primary">Aceptar</button>
    </div>
</div>