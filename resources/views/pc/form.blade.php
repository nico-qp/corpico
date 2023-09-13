<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_so_user') }}
            {{ Form::select('id_so_user', $so_user, $pc->id_so_user, ['class' => 'form-control' . ($errors->has('id_so_user') ? ' is-invalid' : ''), 'placeholder' => 'Id So User']) }}
            {!! $errors->first('id_so_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_geasys_user') }}
            {{ Form::select('id_geasys_user', $geasys_user, $pc->id_geasys_user, ['class' => 'form-control' . ($errors->has('id_geasys_user') ? ' is-invalid' : ''), 'placeholder' => 'Id Geasys User']) }}
            {!! $errors->first('id_geasys_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_condicion') }}
            {{ Form::select('id_condicion', $condition, $pc->id_condicion, ['class' => 'form-control' . ($errors->has('id_condicion') ? ' is-invalid' : ''), 'placeholder' => 'Id Condicion']) }}
            {!! $errors->first('id_condicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta') }}
            {{ Form::text('etiqueta', $pc->etiqueta, ['class' => 'form-control' . ($errors->has('etiqueta') ? ' is-invalid' : ''), 'placeholder' => 'Etiqueta']) }}
            {!! $errors->first('etiqueta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_pc') }}
            {{ Form::text('nombre_pc', $pc->nombre_pc, ['class' => 'form-control' . ($errors->has('nombre_pc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Pc']) }}
            {!! $errors->first('nombre_pc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip_172') }}
            {{ Form::text('ip_172', $pc->ip_172, ['class' => 'form-control' . ($errors->has('ip_172') ? ' is-invalid' : ''), 'placeholder' => 'Ip 172']) }}
            {!! $errors->first('ip_172', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip_10') }}
            {{ Form::text('ip_10', $pc->ip_10, ['class' => 'form-control' . ($errors->has('ip_10') ? ' is-invalid' : ''), 'placeholder' => 'Ip 10']) }}
            {!! $errors->first('ip_10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mac') }}
            {{ Form::text('mac', $pc->mac, ['class' => 'form-control' . ($errors->has('mac') ? ' is-invalid' : ''), 'placeholder' => 'Mac']) }}
            {!! $errors->first('mac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cpu') }}
            {{ Form::text('cpu', $pc->cpu, ['class' => 'form-control' . ($errors->has('cpu') ? ' is-invalid' : ''), 'placeholder' => 'Cpu']) }}
            {!! $errors->first('cpu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ram') }}
            {{ Form::text('ram', $pc->ram, ['class' => 'form-control' . ($errors->has('ram') ? ' is-invalid' : ''), 'placeholder' => 'Ram']) }}
            {!! $errors->first('ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('so') }}
            {{ Form::text('so', $pc->so, ['class' => 'form-control' . ($errors->has('so') ? ' is-invalid' : ''), 'placeholder' => 'So']) }}
            {!! $errors->first('so', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $pc->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $pc->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso_stock') }}
            {{ Form::text('uso_stock', $pc->uso_stock, ['class' => 'form-control' . ($errors->has('uso_stock') ? ' is-invalid' : ''), 'placeholder' => 'Uso Stock']) }}
            {!! $errors->first('uso_stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>