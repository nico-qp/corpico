<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('geasys_user') }}
            {{ Form::text('geasys_user', $geasysUser->geasys_user, ['class' => 'form-control' . ($errors->has('geasys_user') ? ' is-invalid' : ''), 'placeholder' => 'Geasys User']) }}
            {!! $errors->first('geasys_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_completo') }}
            {{ Form::text('nombre_completo', $geasysUser->nombre_completo, ['class' => 'form-control' . ($errors->has('nombre_completo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo']) }}
            {!! $errors->first('nombre_completo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>