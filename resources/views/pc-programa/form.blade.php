<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pc') }}
            {{ Form::select('id_pc', $pc, $pcPrograma->id_pc, ['class' => 'form-control' . ($errors->has('id_pc') ? ' is-invalid' : ''), 'placeholder' => 'Id Pc']) }}
            {!! $errors->first('id_pc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_programa') }}
            {{ Form::select('id_programa', $programa, $pcPrograma->id_programa, ['class' => 'form-control' . ($errors->has('id_programa') ? ' is-invalid' : ''), 'placeholder' => 'Id Programa']) }}
            {!! $errors->first('id_programa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>