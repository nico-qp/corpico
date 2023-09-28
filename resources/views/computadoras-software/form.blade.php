<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('software') }}
            {{ Form::select('id_software',$software, $computadorasSoftware->id_software, ['class' => 'form-control' . ($errors->has('id_software') ? ' is-invalid' : ''), 'placeholder' => 'Software']) }}
            {!! $errors->first('id_software', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('computadora') }}
            {{ Form::select('id_computadora',$computadora, $computadorasSoftware->id_computadora, ['class' => 'form-control' . ($errors->has('id_computadora') ? ' is-invalid' : ''), 'placeholder' => 'Computadora']) }}
            {!! $errors->first('id_computadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>