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
    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('computadoras-softwares.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>