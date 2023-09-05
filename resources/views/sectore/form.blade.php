<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('edificio') }}
            {{ Form::text('edificio', $sectore->edificio, ['class' => 'form-control' . ($errors->has('edificio') ? ' is-invalid' : ''), 'placeholder' => 'Edificio']) }}
            {!! $errors->first('edificio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('piso') }}
            {{ Form::text('piso', $sectore->piso, ['class' => 'form-control' . ($errors->has('piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('piso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sector') }}
            {{ Form::text('sector', $sectore->sector, ['class' => 'form-control' . ($errors->has('sector') ? ' is-invalid' : ''), 'placeholder' => 'Sector']) }}
            {!! $errors->first('sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>