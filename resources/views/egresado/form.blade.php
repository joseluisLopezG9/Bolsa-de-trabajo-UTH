<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $egresado->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname') }}
            {{ Form::text('lastname', $egresado->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname2') }}
            {{ Form::text('lastname2', $egresado->lastname2, ['class' => 'form-control' . ($errors->has('lastname2') ? ' is-invalid' : ''), 'placeholder' => 'Lastname2']) }}
            {!! $errors->first('lastname2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('level') }}
            {{ Form::text('level', $egresado->level, ['class' => 'form-control' . ($errors->has('level') ? ' is-invalid' : ''), 'placeholder' => 'Level']) }}
            {!! $errors->first('level', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('career') }}
            {{ Form::text('career', $egresado->career, ['class' => 'form-control' . ($errors->has('career') ? ' is-invalid' : ''), 'placeholder' => 'Career']) }}
            {!! $errors->first('career', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enrollment') }}
            {{ Form::text('enrollment', $egresado->enrollment, ['class' => 'form-control' . ($errors->has('enrollment') ? ' is-invalid' : ''), 'placeholder' => 'Enrollment']) }}
            {!! $errors->first('enrollment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('division') }}
            {{ Form::text('division', $egresado->division, ['class' => 'form-control' . ($errors->has('division') ? ' is-invalid' : ''), 'placeholder' => 'Division']) }}
            {!! $errors->first('division', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gen') }}
            {{ Form::text('gen', $egresado->gen, ['class' => 'form-control' . ($errors->has('gen') ? ' is-invalid' : ''), 'placeholder' => 'Gen']) }}
            {!! $errors->first('gen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $egresado->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suburb') }}
            {{ Form::text('suburb', $egresado->suburb, ['class' => 'form-control' . ($errors->has('suburb') ? ' is-invalid' : ''), 'placeholder' => 'Suburb']) }}
            {!! $errors->first('suburb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $egresado->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mun') }}
            {{ Form::text('mun', $egresado->mun, ['class' => 'form-control' . ($errors->has('mun') ? ' is-invalid' : ''), 'placeholder' => 'Mun']) }}
            {!! $errors->first('mun', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel') }}
            {{ Form::text('tel', $egresado->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Tel']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cel') }}
            {{ Form::text('cel', $egresado->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Cel']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $egresado->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user') }}
            {{ Form::text('user', $egresado->user, ['class' => 'form-control' . ($errors->has('user') ? ' is-invalid' : ''), 'placeholder' => 'User']) }}
            {!! $errors->first('user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pass') }}
            {{ Form::text('pass', $egresado->pass, ['class' => 'form-control' . ($errors->has('pass') ? ' is-invalid' : ''), 'placeholder' => 'Pass']) }}
            {!! $errors->first('pass', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reg_date') }}
            {{ Form::text('reg_date', $egresado->reg_date, ['class' => 'form-control' . ($errors->has('reg_date') ? ' is-invalid' : ''), 'placeholder' => 'Reg Date']) }}
            {!! $errors->first('reg_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('validity') }}
            {{ Form::text('validity', $egresado->validity, ['class' => 'form-control' . ($errors->has('validity') ? ' is-invalid' : ''), 'placeholder' => 'Validity']) }}
            {!! $errors->first('validity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills') }}
            {{ Form::text('skills', $egresado->skills, ['class' => 'form-control' . ($errors->has('skills') ? ' is-invalid' : ''), 'placeholder' => 'Skills']) }}
            {!! $errors->first('skills', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills1') }}
            {{ Form::text('skills1', $egresado->skills1, ['class' => 'form-control' . ($errors->has('skills1') ? ' is-invalid' : ''), 'placeholder' => 'Skills1']) }}
            {!! $errors->first('skills1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills2') }}
            {{ Form::text('skills2', $egresado->skills2, ['class' => 'form-control' . ($errors->has('skills2') ? ' is-invalid' : ''), 'placeholder' => 'Skills2']) }}
            {!! $errors->first('skills2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills3') }}
            {{ Form::text('skills3', $egresado->skills3, ['class' => 'form-control' . ($errors->has('skills3') ? ' is-invalid' : ''), 'placeholder' => 'Skills3']) }}
            {!! $errors->first('skills3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills4') }}
            {{ Form::text('skills4', $egresado->skills4, ['class' => 'form-control' . ($errors->has('skills4') ? ' is-invalid' : ''), 'placeholder' => 'Skills4']) }}
            {!! $errors->first('skills4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills5') }}
            {{ Form::text('skills5', $egresado->skills5, ['class' => 'form-control' . ($errors->has('skills5') ? ' is-invalid' : ''), 'placeholder' => 'Skills5']) }}
            {!! $errors->first('skills5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills6') }}
            {{ Form::text('skills6', $egresado->skills6, ['class' => 'form-control' . ($errors->has('skills6') ? ' is-invalid' : ''), 'placeholder' => 'Skills6']) }}
            {!! $errors->first('skills6', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills7') }}
            {{ Form::text('skills7', $egresado->skills7, ['class' => 'form-control' . ($errors->has('skills7') ? ' is-invalid' : ''), 'placeholder' => 'Skills7']) }}
            {!! $errors->first('skills7', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills8') }}
            {{ Form::text('skills8', $egresado->skills8, ['class' => 'form-control' . ($errors->has('skills8') ? ' is-invalid' : ''), 'placeholder' => 'Skills8']) }}
            {!! $errors->first('skills8', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('skills9') }}
            {{ Form::text('skills9', $egresado->skills9, ['class' => 'form-control' . ($errors->has('skills9') ? ' is-invalid' : ''), 'placeholder' => 'Skills9']) }}
            {!! $errors->first('skills9', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('area') }}
            {{ Form::text('area', $egresado->area, ['class' => 'form-control' . ($errors->has('area') ? ' is-invalid' : ''), 'placeholder' => 'Area']) }}
            {!! $errors->first('area', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cv') }}
            {{ Form::text('cv', $egresado->cv, ['class' => 'form-control' . ($errors->has('cv') ? ' is-invalid' : ''), 'placeholder' => 'Cv']) }}
            {!! $errors->first('cv', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('invoice') }}
            {{ Form::text('invoice', $egresado->invoice, ['class' => 'form-control' . ($errors->has('invoice') ? ' is-invalid' : ''), 'placeholder' => 'Invoice']) }}
            {!! $errors->first('invoice', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('remark') }}
            {{ Form::text('remark', $egresado->remark, ['class' => 'form-control' . ($errors->has('remark') ? ' is-invalid' : ''), 'placeholder' => 'Remark']) }}
            {!! $errors->first('remark', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>