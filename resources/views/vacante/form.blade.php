<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empresa_id') }}
            {{ Form::text('empresa_id', $vacante->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puesto') }}
            {{ Form::text('puesto', $vacante->puesto, ['class' => 'form-control' . ($errors->has('puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto']) }}
            {!! $errors->first('puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel_id') }}
            {{ Form::text('nivel_id', $vacante->nivel_id, ['class' => 'form-control' . ($errors->has('nivel_id') ? ' is-invalid' : ''), 'placeholder' => 'Nivel Id']) }}
            {!! $errors->first('nivel_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_candidatos') }}
            {{ Form::text('num_candidatos', $vacante->num_candidatos, ['class' => 'form-control' . ($errors->has('num_candidatos') ? ' is-invalid' : ''), 'placeholder' => 'Num Candidatos']) }}
            {!! $errors->first('num_candidatos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_vacantes') }}
            {{ Form::text('num_vacantes', $vacante->num_vacantes, ['class' => 'form-control' . ($errors->has('num_vacantes') ? ' is-invalid' : ''), 'placeholder' => 'Num Vacantes']) }}
            {!! $errors->first('num_vacantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad') }}
            {{ Form::text('edad', $vacante->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $vacante->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('idioma', $vacante->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Idioma']) }}
            {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_civil') }}
            {{ Form::text('estado_civil', $vacante->estado_civil, ['class' => 'form-control' . ($errors->has('estado_civil') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civil']) }}
            {!! $errors->first('estado_civil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia') }}
            {{ Form::text('experiencia', $vacante->experiencia, ['class' => 'form-control' . ($errors->has('experiencia') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia']) }}
            {!! $errors->first('experiencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conocimientos') }}
            {{ Form::text('conocimientos', $vacante->conocimientos, ['class' => 'form-control' . ($errors->has('conocimientos') ? ' is-invalid' : ''), 'placeholder' => 'Conocimientos']) }}
            {!! $errors->first('conocimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habilidades') }}
            {{ Form::text('habilidades', $vacante->habilidades, ['class' => 'form-control' . ($errors->has('habilidades') ? ' is-invalid' : ''), 'placeholder' => 'Habilidades']) }}
            {!! $errors->first('habilidades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sueldo') }}
            {{ Form::text('sueldo', $vacante->sueldo, ['class' => 'form-control' . ($errors->has('sueldo') ? ' is-invalid' : ''), 'placeholder' => 'Sueldo']) }}
            {!! $errors->first('sueldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario') }}
            {{ Form::text('horario', $vacante->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrevistador') }}
            {{ Form::text('entrevistador', $vacante->entrevistador, ['class' => 'form-control' . ($errors->has('entrevistador') ? ' is-invalid' : ''), 'placeholder' => 'Entrevistador']) }}
            {!! $errors->first('entrevistador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $vacante->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('confidencial') }}
            {{ Form::text('confidencial', $vacante->confidencial, ['class' => 'form-control' . ($errors->has('confidencial') ? ' is-invalid' : ''), 'placeholder' => 'Confidencial']) }}
            {!! $errors->first('confidencial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('otros') }}
            {{ Form::text('otros', $vacante->otros, ['class' => 'form-control' . ($errors->has('otros') ? ' is-invalid' : ''), 'placeholder' => 'Otros']) }}
            {!! $errors->first('otros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('beneficios') }}
            {{ Form::text('beneficios', $vacante->beneficios, ['class' => 'form-control' . ($errors->has('beneficios') ? ' is-invalid' : ''), 'placeholder' => 'Beneficios']) }}
            {!! $errors->first('beneficios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $vacante->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area_id') }}
            {{ Form::text('area_id', $vacante->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Area Id']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>