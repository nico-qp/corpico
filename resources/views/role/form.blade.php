<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rol') }}
            {{ Form::text('rol', $role->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3 position-relative">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('roles.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>