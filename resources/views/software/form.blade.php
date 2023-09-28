<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $software->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('versión') }}
            {{ Form::text('version', $software->version, ['class' => 'form-control' . ($errors->has('version') ? ' is-invalid' : ''), 'placeholder' => 'Versión']) }}
            {!! $errors->first('version', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expira') }}
            {{ Form::date('expira', $software->expira, ['class' => 'form-control' . ($errors->has('expira') ? ' is-invalid' : ''), 'placeholder' => 'Expira']) }}
            {!! $errors->first('expira', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-2">{{ __('Guardar') }}</button>
    </div>
</div>