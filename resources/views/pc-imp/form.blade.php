<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pc') }}
            {{ Form::select('id_pc', $pc,$pcImp->id_pc, ['class' => 'form-control' . ($errors->has('id_pc') ? ' is-invalid' : ''), 'placeholder' => 'Id Pc']) }}
            {!! $errors->first('id_pc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_imp') }}
            {{ Form::select('id_imp', $impresora, $pcImp->id_imp, ['class' => 'form-control' . ($errors->has('id_imp') ? ' is-invalid' : ''), 'placeholder' => 'Id Imp']) }}
            {!! $errors->first('id_imp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>