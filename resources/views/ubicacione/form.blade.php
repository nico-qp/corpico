<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('edificio') }}
            {{ Form::text('edificio', $ubicacione->edificio, ['class' => 'form-control' . ($errors->has('edificio') ? ' is-invalid' : ''), 'placeholder' => 'Edificio']) }}
            {!! $errors->first('edificio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::text('piso', $ubicacione->piso, ['class' => 'form-control' . ($errors->has('piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-2">{{ __('Cargar') }}</button>
    </div>
</div>