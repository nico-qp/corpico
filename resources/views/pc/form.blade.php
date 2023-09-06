<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sector') }}
            {{ Form::select('id_sector', $sectores , $pc->id_sector, ['class' => 'form-control' . ($errors->has('id_sector') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trabajador') }}
            {{ Form::text('trabajador', $pc->trabajador, ['class' => 'form-control' . ($errors->has('trabajador') ? ' is-invalid' : ''), 'placeholder' => 'Trabajador']) }}
            {!! $errors->first('trabajador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_pc') }}
            {{ Form::text('nombre_pc', $pc->nombre_pc, ['class' => 'form-control' . ($errors->has('nombre_pc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Pc']) }}
            {!! $errors->first('nombre_pc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_geasys') }}
            {{ Form::text('usuario_geasys', $pc->usuario_geasys, ['class' => 'form-control' . ($errors->has('usuario_geasys') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Geasys']) }}
            {!! $errors->first('usuario_geasys', '<div class="invalid-feedback">:message</div>') !!}
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

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>