<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-row">
            <div class="form-group col-md-6">
                {{ Form::label('descripción') }}
                {{ Form::text('descripcion', $generacione->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'ej. 2020-2022']) }}
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-outline-primary">Aceptar</button>
    </div>
</div>