<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_sector') }}
            {{ Form::select('id_sector',$sectores , $impresora->id_sector, ['class' => 'form-control' . ($errors->has('id_sector') ? ' is-invalid' : ''), 'placeholder' => 'Id Sector']) }}
            {!! $errors->first('id_sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $impresora->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo_imp') }}
            {{ Form::text('modelo_imp', $impresora->modelo_imp, ['class' => 'form-control' . ($errors->has('modelo_imp') ? ' is-invalid' : ''), 'placeholder' => 'Modelo Imp']) }}
            {!! $errors->first('modelo_imp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conexion') }}
            {{ Form::text('conexion', $impresora->conexion, ['class' => 'form-control' . ($errors->has('conexion') ? ' is-invalid' : ''), 'placeholder' => 'Conexion']) }}
            {!! $errors->first('conexion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nom_ip') }}
            {{ Form::text('nom_ip', $impresora->nom_ip, ['class' => 'form-control' . ($errors->has('nom_ip') ? ' is-invalid' : ''), 'placeholder' => 'Nom Ip']) }}
            {!! $errors->first('nom_ip', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cartucho_toner') }}
            {{ Form::text('cartucho_toner', $impresora->cartucho_toner, ['class' => 'form-control' . ($errors->has('cartucho_toner') ? ' is-invalid' : ''), 'placeholder' => 'Cartucho Toner']) }}
            {!! $errors->first('cartucho_toner', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo_cart_ton') }}
            {{ Form::text('modelo_cart_ton', $impresora->modelo_cart_ton, ['class' => 'form-control' . ($errors->has('modelo_cart_ton') ? ' is-invalid' : ''), 'placeholder' => 'Modelo Cart Ton']) }}
            {!! $errors->first('modelo_cart_ton', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autonomia_resma') }}
            {{ Form::text('autonomia_resma', $impresora->autonomia_resma, ['class' => 'form-control' . ($errors->has('autonomia_resma') ? ' is-invalid' : ''), 'placeholder' => 'Autonomia Resma']) }}
            {!! $errors->first('autonomia_resma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autonomia_cart_ton') }}
            {{ Form::text('autonomia_cart_ton', $impresora->autonomia_cart_ton, ['class' => 'form-control' . ($errors->has('autonomia_cart_ton') ? ' is-invalid' : ''), 'placeholder' => 'Autonomia Cart Ton']) }}
            {!! $errors->first('autonomia_cart_ton', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uso') }}
            {{ Form::text('uso', $impresora->uso, ['class' => 'form-control' . ($errors->has('uso') ? ' is-invalid' : ''), 'placeholder' => 'Uso']) }}
            {!! $errors->first('uso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $impresora->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>