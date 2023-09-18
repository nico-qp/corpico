<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_computadora') }}
            {{ Form::text('id_computadora', $computadorasImpresora->id_computadora, ['class' => 'form-control' . ($errors->has('id_computadora') ? ' is-invalid' : ''), 'placeholder' => 'Id Computadora']) }}
            {!! $errors->first('id_computadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_impresora') }}
            {{ Form::text('id_impresora', $computadorasImpresora->id_impresora, ['class' => 'form-control' . ($errors->has('id_impresora') ? ' is-invalid' : ''), 'placeholder' => 'Id Impresora']) }}
            {!! $errors->first('id_impresora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>