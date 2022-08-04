<div class="box box-info padding-1">
    <div class="box-body">
        
    {!! Form::open() !!}

        <div class="form-group">
            {{ Form::label('Nombre(s)') }}
            {{ Form::text('nombre', $egresado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre(s)']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('apellidoPaterno', $egresado->apellidoPaterno, ['class' => 'form-control' . ($errors->has('apellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
            {!! $errors->first('apellidoPaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('apellidoMaterno', $egresado->apellidoMaterno, ['class' => 'form-control' . ($errors->has('apellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
            {!! $errors->first('apellidoMaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <h5>Nivel de estudios</h5>
            <select class="selectpicker" title="Pick One">
			<option data-hidden="true">
			Elija una opción												
			</option>
			<option>- Técnico Superior Universitario</option>
			<option>- Ingeniería</option>
            <option>- Maestría</option>
			</select>
            {!! $errors->first('nivelEstudios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carerra') }}
            {{ Form::text('carrera', $egresado->carrera, ['class' => 'form-control' . ($errors->has('carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carerra']) }}
            {!! $errors->first('carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Matricula') }}
            {{ Form::number('matricula', $egresado->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 3530110410']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('División / clave de carrera') }}
            {{ Form::text('division', $egresado->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'División/Clave de carrera']) }}
            {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Generación') }}
            {{ Form::number('gen', $egresado->gen, ['class' => 'form-control' . ($errors->has('gen') ? ' is-invalid' : ''), 'placeholder' => 'Generación']) }}
            {!! $errors->first('gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Datos personales</h5>
            {{ Form::label('Domicilio y N°') }}
            {{ Form::text('domicilio', $egresado->domicilio, ['class' => 'form-control' . ($errors->has('domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio y N°']) }}
            {!! $errors->first('domicilio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('colonia', $egresado->colonia, ['class' => 'form-control' . ($errors->has('colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('colonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estado', $egresado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('mun', $egresado->mun, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('mun', '<div class="invalid-feedback">:message</div>') !!}   
        </div>
        <div class="form-group">
            {{ Form::label('Teléfono') }}
            {{ Form::number('tel', $egresado->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::number('cel', $egresado->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::Email('email', $egresado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Datos de acceso y vigilancia</h5>
            {{ Form::label('Usuario') }}
            {{ Form::text('usuario', $egresado->usuario, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::password('contraseña', $egresado->contraseña, ['class' => 'form-control' . ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha alta') }}
            {{ Form::date('fecha_alta', $egresado->fecha_alta, ['class' => 'form-control' . ($errors->has('fecha_alta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha alta']) }}
            {!! $errors->first('fecha_alta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Vigencia') }}
            {{ Form::date('vigencia', $egresado->vigencia, ['class' => 'form-control' . ($errors->has('vigencia') ? ' is-invalid' : ''), 'placeholder' => 'Vigencia']) }}
            {!! $errors->first('vigencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <h5>Competencias laborales, conocimientos y habilidades</h5>
            {{ Form::label('N° 1') }}
            {{ Form::text('n1', $egresado->n1, ['class' => 'form-control' . ($errors->has('n1') ? ' is-invalid' : ''), 'placeholder' => 'N° 1']) }}
            {!! $errors->first('n1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 2') }}
            {{ Form::text('n2', $egresado->n2, ['class' => 'form-control' . ($errors->has('n2') ? ' is-invalid' : ''), 'placeholder' => 'N° 2']) }}
            {!! $errors->first('n2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 3') }}
            {{ Form::text('n3', $egresado->n3, ['class' => 'form-control' . ($errors->has('n3') ? ' is-invalid' : ''), 'placeholder' => 'N° 3']) }}
            {!! $errors->first('n3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 4') }}
            {{ Form::text('n4', $egresado->n4, ['class' => 'form-control' . ($errors->has('n4') ? ' is-invalid' : ''), 'placeholder' => 'N° 4']) }}
            {!! $errors->first('n4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 5') }}
            {{ Form::text('n5', $egresado->n5, ['class' => 'form-control' . ($errors->has('n5') ? ' is-invalid' : ''), 'placeholder' => 'N° 5']) }}
            {!! $errors->first('n5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 6') }}
            {{ Form::text('n6', $egresado->n6, ['class' => 'form-control' . ($errors->has('n6') ? ' is-invalid' : ''), 'placeholder' => 'N° 6']) }}
            {!! $errors->first('n6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 7') }}
            {{ Form::text('n7', $egresado->n7, ['class' => 'form-control' . ($errors->has('n7') ? ' is-invalid' : ''), 'placeholder' => 'N° 7']) }}
            {!! $errors->first('n7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 8') }}
            {{ Form::text('n8', $egresado->n8, ['class' => 'form-control' . ($errors->has('n8') ? ' is-invalid' : ''), 'placeholder' => 'N° 8']) }}
            {!! $errors->first('n8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 9') }}
            {{ Form::text('n9', $egresado->n9, ['class' => 'form-control' . ($errors->has('n9') ? ' is-invalid' : ''), 'placeholder' => 'N° 9']) }}
            {!! $errors->first('n9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N° 10') }}
            {{ Form::text('n10', $egresado->n10, ['class' => 'form-control' . ($errors->has('n10') ? ' is-invalid' : ''), 'placeholder' => 'N° 10']) }}
            {!! $errors->first('n10', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::number('folio', $egresado->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $egresado->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="reset" class="btn btn-success">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
    <br>

    {!! Form::close() !!}

</div>