<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::select('empresa_id', $empresas, $vacante->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre de la Empresa']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puesto') }}
            {{ Form::text('puesto', $vacante->puesto, ['class' => 'form-control' . ($errors->has('puesto') ? ' is-invalid' : ''), 'placeholder' => 'Puesto ofrecido']) }}
            {!! $errors->first('puesto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nivel académico') }}
            {{ Form::select('nivel_id', $niveles, $vacante->nivel_id, ['class' => 'form-control' . ($errors->has('nivel_id') ? ' is-invalid' : ''), 'placeholder' => 'Nivel académico requerido']) }}
            {!! $errors->first('nivel_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('número de candidatos') }}
            {{ Form::number('num_candidatos', $vacante->num_candidatos, ['class' => 'form-control' . ($errors->has('num_candidatos') ? ' is-invalid' : ''), 'placeholder' => 'Número de candidatos que la empresa busca']) }}
            {!! $errors->first('num_candidatos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('número de vacantes') }}
            {{ Form::number('num_vacantes', $vacante->num_vacantes, ['class' => 'form-control' . ($errors->has('num_vacantes') ? ' is-invalid' : ''), 'placeholder' => 'Número de vacantes ofrecidas']) }}
            {!! $errors->first('num_vacantes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edad solicitada') }}
            {{ Form::text('edad', $vacante->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'ej. 19-30']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $vacante->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'ej. Femenino (separe por comas si es más de uno)']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('idioma', $vacante->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Idioma requerido (separe por comas si es más de uno)']) }}
            {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado civil') }}
            {{ Form::text('estado_civil', $vacante->estado_civil, ['class' => 'form-control' . ($errors->has('estado_civil') ? ' is-invalid' : ''), 'placeholder' => 'Estado civil requerido (si más de uno es posible separe por comas)']) }}
            {!! $errors->first('estado_civil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('experiencia') }}
            {{ Form::text('experiencia', $vacante->experiencia, ['class' => 'form-control' . ($errors->has('experiencia') ? ' is-invalid' : ''), 'placeholder' => 'Experiencia requerida']) }}
            {!! $errors->first('experiencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conocimientos') }}
            {{ Form::text('conocimientos', $vacante->conocimientos, ['class' => 'form-control' . ($errors->has('conocimientos') ? ' is-invalid' : ''), 'placeholder' => '(Separe por comas si requiere más de uno)']) }}
            {!! $errors->first('conocimientos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habilidades') }}
            {{ Form::text('habilidades', $vacante->habilidades, ['class' => 'form-control' . ($errors->has('habilidades') ? ' is-invalid' : ''), 'placeholder' => '(Separe por comas si se requieren más de una)']) }}
            {!! $errors->first('habilidades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sueldo') }}
            {{ Form::number('sueldo', $vacante->sueldo, ['class' => 'form-control' . ($errors->has('sueldo') ? ' is-invalid' : ''), 'placeholder' => 'Sueldo']) }}
            {!! $errors->first('sueldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario') }}
            {{ Form::text('horario', $vacante->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'ej. 9:00 a 15:00']) }}
            {!! $errors->first('horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrevistador') }}
            {{ Form::text('entrevistador', $vacante->entrevistador, ['class' => 'form-control' . ($errors->has('entrevistador') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Entrevistador']) }}
            {!! $errors->first('entrevistador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $vacante->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => '(E-mail, teléfonos, redes sociales, etc)']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vacante confidencial') }}
            {{ Form::text('confidencial', $vacante->confidencial, ['class' => 'form-control' . ($errors->has('confidencial') ? ' is-invalid' : ''), 'placeholder' => 'La vacante es confidencial (si,no)']) }}
            {!! $errors->first('confidencial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('otros requerimientos') }}
            {{ Form::text('otros', $vacante->otros, ['class' => 'form-control' . ($errors->has('otros') ? ' is-invalid' : ''), 'placeholder' => 'Otros']) }}
            {!! $errors->first('otros', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('beneficios') }}
            {{ Form::text('beneficios', $vacante->beneficios, ['class' => 'form-control' . ($errors->has('beneficios') ? ' is-invalid' : ''), 'placeholder' => '(Separe por comas si hay más de uno)']) }}
            {!! $errors->first('beneficios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $vacante->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area de especialización de la vacante') }}
            {{ Form::select('area_id', $areas_vacantes, $vacante->area_id, ['class' => 'form-control' . ($errors->has('area_id') ? ' is-invalid' : ''), 'placeholder' => 'Área de especialización']) }}
            {!! $errors->first('area_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-primary">Aceptar</button>
    </div>
</div>