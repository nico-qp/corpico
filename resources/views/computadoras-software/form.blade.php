<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_software') }}
            {{ Form::select('id_software',$software, $computadorasSoftware->id_software, ['class' => 'form-control' . ($errors->has('id_software') ? ' is-invalid' : ''), 'placeholder' => 'Id Software']) }}
            {!! $errors->first('id_software', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_computadora') }}
            {{ Form::select('id_computadora',$computadora, $computadorasSoftware->id_computadora, ['class' => 'form-control' . ($errors->has('id_computadora') ? ' is-invalid' : ''), 'placeholder' => 'Id Computadora']) }}
            {!! $errors->first('id_computadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>