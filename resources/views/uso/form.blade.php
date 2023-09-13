<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('uso_mensual') }}
            {{ Form::text('uso_mensual', $uso->uso_mensual, ['class' => 'form-control' . ($errors->has('uso_mensual') ? ' is-invalid' : ''), 'placeholder' => 'Uso Mensual']) }}
            {!! $errors->first('uso_mensual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_semestral') }}
            {{ Form::text('uso_semestral', $uso->uso_semestral, ['class' => 'form-control' . ($errors->has('uso_semestral') ? ' is-invalid' : ''), 'placeholder' => 'Uso Semestral']) }}
            {!! $errors->first('uso_semestral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_anual') }}
            {{ Form::text('uso_anual', $uso->uso_anual, ['class' => 'form-control' . ($errors->has('uso_anual') ? ' is-invalid' : ''), 'placeholder' => 'Uso Anual']) }}
            {!! $errors->first('uso_anual', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>