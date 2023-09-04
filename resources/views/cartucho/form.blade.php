<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $cartucho->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $cartucho->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_mensual') }}
            {{ Form::text('uso_mensual', $cartucho->uso_mensual, ['class' => 'form-control' . ($errors->has('uso_mensual') ? ' is-invalid' : ''), 'placeholder' => 'Uso Mensual']) }}
            {!! $errors->first('uso_mensual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_semestral') }}
            {{ Form::text('uso_semestral', $cartucho->uso_semestral, ['class' => 'form-control' . ($errors->has('uso_semestral') ? ' is-invalid' : ''), 'placeholder' => 'Uso Semestral']) }}
            {!! $errors->first('uso_semestral', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_anual') }}
            {{ Form::text('uso_anual', $cartucho->uso_anual, ['class' => 'form-control' . ($errors->has('uso_anual') ? ' is-invalid' : ''), 'placeholder' => 'Uso Anual']) }}
            {!! $errors->first('uso_anual', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca_impresora') }}
            {{ Form::text('marca_impresora', $cartucho->marca_impresora, ['class' => 'form-control' . ($errors->has('marca_impresora') ? ' is-invalid' : ''), 'placeholder' => 'Marca Impresora']) }}
            {!! $errors->first('marca_impresora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo_impresora') }}
            {{ Form::text('modelo_impresora', $cartucho->modelo_impresora, ['class' => 'form-control' . ($errors->has('modelo_impresora') ? ' is-invalid' : ''), 'placeholder' => 'Modelo Impresora']) }}
            {!! $errors->first('modelo_impresora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>