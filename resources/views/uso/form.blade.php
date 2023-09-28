<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mensual') }}
            {{ Form::text('mensual', $uso->mensual, ['class' => 'form-control' . ($errors->has('mensual') ? ' is-invalid' : ''), 'placeholder' => 'Mensual']) }}
            {!! $errors->first('mensual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('semestral') }}
            {{ Form::text('semestral', $uso->semestral, ['class' => 'form-control' . ($errors->has('semestral') ? ' is-invalid' : ''), 'placeholder' => 'Semestral']) }}
            {!! $errors->first('semestral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anual') }}
            {{ Form::text('anual', $uso->anual, ['class' => 'form-control' . ($errors->has('anual') ? ' is-invalid' : ''), 'placeholder' => 'Anual']) }}
            {!! $errors->first('anual', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-2">{{ __('Guardar') }}</button>
    </div>
</div>