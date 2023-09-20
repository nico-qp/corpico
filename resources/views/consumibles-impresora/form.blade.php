<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Codigo Consumible') }}
            {{ Form::select('id_consumible', $consumible, $consumiblesImpresora->id_consumible, ['class' => 'form-control' . ($errors->has('id_consumible') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Consumible']) }}
            {!! $errors->first('id_consumible', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('IP impresora') }}
            {{ Form::select('id_impresora', $impresora, $consumiblesImpresora->id_impresora, ['class' => 'form-control' . ($errors->has('id_impresora') ? ' is-invalid' : ''), 'placeholder' => 'IP impresora']) }}
            {!! $errors->first('id_impresora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>