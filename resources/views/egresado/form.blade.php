<div class="box box-info padding-1">
    <div class="box-body">
        
    {!! Form::open() !!}

        <div class="form-group">
            {{ Form::label('Nombre(s)') }}
            {{ Form::text('name', $egresado->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre(s)']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('lastname', $egresado->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('lastname2', $egresado->lastname2, ['class' => 'form-control' . ($errors->has('lastname2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
            {!! $errors->first('lastname2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nivel de estudios') }}
            {{ Form::text('level', $egresado->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Nivel de estudios']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carerra') }}
            {{ Form::text('career', $egresado->career, ['class' => 'form-control' . ($errors->has('career') ? ' is-invalid' : ''), 'placeholder' => 'Carerra']) }}
            {!! $errors->first('career', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Matricula') }}
            {{ Form::text('enrollment', $egresado->enrollment, ['class' => 'form-control' . ($errors->has('enrollment') ? ' is-invalid' : ''), 'placeholder' => 'Matricula']) }}
            {!! $errors->first('enrollment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('División / clave de carrera') }}
            {{ Form::text('division', $egresado->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'División/Clave de carrera']) }}
            {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Generación') }}
            {{ Form::text('gen', $egresado->gen, ['class' => 'form-control' . ($errors->has('gen') ? ' is-invalid' : ''), 'placeholder' => 'Generación']) }}
            {!! $errors->first('gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Datos personales</h5>
            {{ Form::label('Domicilio y N°') }}
            {{ Form::text('address', $egresado->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio y N°']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('suburb', $egresado->suburb, ['class' => 'form-control' . ($errors->has('suburb') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('suburb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('state', $egresado->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('mun', $egresado->mun, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('mun', '<div class="invalid-feedback">:message</div>') !!}   
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::text('tel', $egresado->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('cel', $egresado->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('email', $egresado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Datos de acceso y vigilancia</h5>
            {{ Form::label('Usuario') }}
            {{ Form::text('user', $egresado->user, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('pass', $egresado->pass, ['class' => 'form-control' . ($errors->has('pass') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('pass', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha alta') }}
            {{ Form::text('reg_date', $egresado->reg_date, ['class' => 'form-control' . ($errors->has('reg_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha alta']) }}
            {!! $errors->first('reg_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia') }}
            {{ Form::text('validity', $egresado->validity, ['class' => 'form-control' . ($errors->has('validity') ? ' is-invalid' : ''), 'placeholder' => 'Vigencia']) }}
            {!! $errors->first('validity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Competencias laborales, conocimientos y habilidades</h5>
            {{ Form::label('N° 1') }}
            {{ Form::text('skills', $egresado->skills, ['class' => 'form-control' . ($errors->has('skills') ? ' is-invalid' : ''), 'placeholder' => 'N° 1']) }}
            {!! $errors->first('skills', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 2') }}
            {{ Form::text('skills1', $egresado->skills1, ['class' => 'form-control' . ($errors->has('skills1') ? ' is-invalid' : ''), 'placeholder' => 'N° 2']) }}
            {!! $errors->first('skills1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 3') }}
            {{ Form::text('skills2', $egresado->skills2, ['class' => 'form-control' . ($errors->has('skills2') ? ' is-invalid' : ''), 'placeholder' => 'N° 3']) }}
            {!! $errors->first('skills2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 4') }}
            {{ Form::text('skills3', $egresado->skills3, ['class' => 'form-control' . ($errors->has('skills3') ? ' is-invalid' : ''), 'placeholder' => 'N° 4']) }}
            {!! $errors->first('skills3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 5') }}
            {{ Form::text('skills4', $egresado->skills4, ['class' => 'form-control' . ($errors->has('skills4') ? ' is-invalid' : ''), 'placeholder' => 'N° 5']) }}
            {!! $errors->first('skills4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 6') }}
            {{ Form::text('skills5', $egresado->skills5, ['class' => 'form-control' . ($errors->has('skills5') ? ' is-invalid' : ''), 'placeholder' => 'N° 6']) }}
            {!! $errors->first('skills5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 7') }}
            {{ Form::text('skills6', $egresado->skills6, ['class' => 'form-control' . ($errors->has('skills6') ? ' is-invalid' : ''), 'placeholder' => 'N° 7']) }}
            {!! $errors->first('skills6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 8') }}
            {{ Form::text('skills7', $egresado->skills7, ['class' => 'form-control' . ($errors->has('skills7') ? ' is-invalid' : ''), 'placeholder' => 'N° 8']) }}
            {!! $errors->first('skills7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 9') }}
            {{ Form::text('skills8', $egresado->skills8, ['class' => 'form-control' . ($errors->has('skills8') ? ' is-invalid' : ''), 'placeholder' => 'N° 9']) }}
            {!! $errors->first('skills8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 10') }}
            {{ Form::text('skills9', $egresado->skills9, ['class' => 'form-control' . ($errors->has('skills9') ? ' is-invalid' : ''), 'placeholder' => 'N° 10']) }}
            {!! $errors->first('skills9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Área de especialización</h5>
            <select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
			<option>TICS - Desarrollo de Software Multiplataforma</option>
			<option>TICS - Entornos Virtuales y Negocios Digitales</option>
			<option>TICS - Redes Inteligentes y Ciberseguridad</option>
			<option>Mecatrontrónica - Robótica</option>
            <option>Mecatrontrónica - Instalaciones Eléctricas Eficientes</option>
            <option>Procesos Industriales - Alimentos Gourmet</option>
            <option>Procesos Industriales - Automotriz</option>
			</select>
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('Cargar CV') }}
            <br>
            {{ Form::file('cv', $egresado->cv, ['class' => 'form-control' . ($errors->has('cv') ? ' is-invalid' : ''), 'placeholder' => 'CV']) }}
            {!! $errors->first('cv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Folio') }}
            {{ Form::text('invoice', $egresado->invoice, ['class' => 'form-control' . ($errors->has('invoice') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('invoice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('remark', $egresado->remark, ['class' => 'form-control' . ($errors->has('remark') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('remark', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

    {!! Form::close() !!}

</div>