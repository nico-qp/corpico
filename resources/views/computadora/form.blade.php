<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_usuario_window') }}
            {{ Form::text('id_usuario_window', $computadora->id_usuario_window, ['class' => 'form-control' . ($errors->has('id_usuario_window') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario Window']) }}
            {!! $errors->first('id_usuario_window', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_user') }}
            {{ Form::text('id_user', $computadora->id_user, ['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_condicion') }}
            {{ Form::text('id_condicion', $computadora->id_condicion, ['class' => 'form-control' . ($errors->has('id_condicion') ? ' is-invalid' : ''), 'placeholder' => 'Id Condicion']) }}
            {!! $errors->first('id_condicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_sectore') }}
            {{ Form::text('id_sectore', $computadora->id_sectore, ['class' => 'form-control' . ($errors->has('id_sectore') ? ' is-invalid' : ''), 'placeholder' => 'Id Sectore']) }}
            {!! $errors->first('id_sectore', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta') }}
            {{ Form::text('etiqueta', $computadora->etiqueta, ['class' => 'form-control' . ($errors->has('etiqueta') ? ' is-invalid' : ''), 'placeholder' => 'Etiqueta']) }}
            {!! $errors->first('etiqueta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $computadora->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip_172') }}
            {{ Form::text('ip_172', $computadora->ip_172, ['class' => 'form-control' . ($errors->has('ip_172') ? ' is-invalid' : ''), 'placeholder' => 'Ip 172']) }}
            {!! $errors->first('ip_172', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip_10') }}
            {{ Form::text('ip_10', $computadora->ip_10, ['class' => 'form-control' . ($errors->has('ip_10') ? ' is-invalid' : ''), 'placeholder' => 'Ip 10']) }}
            {!! $errors->first('ip_10', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mac') }}
            {{ Form::text('mac', $computadora->mac, ['class' => 'form-control' . ($errors->has('mac') ? ' is-invalid' : ''), 'placeholder' => 'Mac']) }}
            {!! $errors->first('mac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('procesador') }}
            {{ Form::text('procesador', $computadora->procesador, ['class' => 'form-control' . ($errors->has('procesador') ? ' is-invalid' : ''), 'placeholder' => 'Procesador']) }}
            {!! $errors->first('procesador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ram') }}
            {{ Form::text('ram', $computadora->ram, ['class' => 'form-control' . ($errors->has('ram') ? ' is-invalid' : ''), 'placeholder' => 'Ram']) }}
            {!! $errors->first('ram', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('so') }}
            {{ Form::text('so', $computadora->so, ['class' => 'form-control' . ($errors->has('so') ? ' is-invalid' : ''), 'placeholder' => 'So']) }}
            {!! $errors->first('so', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $computadora->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $computadora->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $computadora->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>