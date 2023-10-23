<div class="box box-info padding-1">
    <?php if($id_sectores[0] != NULL) { ?>
        <div class="box-body">
            
                {{ Form::label('Sector') }}
                <select class="form-control{{ $errors->has('id_sector') ? ' is-invalid' : '' }}" name="id_sector" id="id_sector" required="true" aria-required="true">
                    <option value="{{ $id_sectores[0]->id }}">{{ $id_sectores[0]->nombre }}</option>
                    @foreach ($sectores as $sectore)
                        <option value="{{ $sectore->id }}">{{ $sectore->nombre}}</option>
                    @endforeach
                </select>
            <div class="form-group">
                {{ Form::label('Criticidad') }}
                {{ Form::select('id_criticidad', $criticidades, $impresora->id_criticidad, ['class' => 'form-control' . ($errors->has('id_criticidad') ? ' is-invalid' : ''), 'placeholder' => 'Criticidad']) }}
                {!! $errors->first('id_criticidad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Marca') }}
                {{ Form::text('marca', $impresora->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
                {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Modelo') }}
                {{ Form::text('modelo', $impresora->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
                {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Conectividad') }}
                {{ Form::text('conectividad', $impresora->conectividad, ['class' => 'form-control' . ($errors->has('conectividad') ? ' is-invalid' : ''), 'placeholder' => 'Conectividad']) }}
                {!! $errors->first('conectividad', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('IP') }}
                {{ Form::text('ip', $impresora->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'IP']) }}
                {!! $errors->first('ip', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Autonomia de resma') }}
                {{ Form::text('autonomia_resma', $impresora->autonomia_resma, ['class' => 'form-control' . ($errors->has('autonomia_resma') ? ' is-invalid' : ''), 'placeholder' => 'Autonomia Resma']) }}
                {!! $errors->first('autonomia_resma', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Estado') }}
                {{ Form::select('id_estado', $estado, $impresora->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Observaciones') }}
                {{ Form::text('observaciones', $impresora->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
                {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    <?php }
    else{?>
        <div class="box-body">
            
            {{ Form::label('Sector') }}
            <select class="form-control{{ $errors->has('id_sector') ? ' is-invalid' : '' }}" name="id_sector" id="id_sector" required="true" aria-required="true">
                <option value="">{{ __('sector') }}</option>
                @foreach ($sectores as $sectore)
                    <option value="{{ $sectore->id }}">{{ $sectore->nombre}}</option>
                @endforeach
            </select>
        <div class="form-group">
            {{ Form::label('Criticidad') }}
            {{ Form::select('id_criticidad', $criticidades, $impresora->id_criticidad, ['class' => 'form-control' . ($errors->has('id_criticidad') ? ' is-invalid' : ''), 'placeholder' => 'Criticidad']) }}
            {!! $errors->first('id_criticidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $impresora->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('modelo', $impresora->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conectividad') }}
            {{ Form::text('conectividad', $impresora->conectividad, ['class' => 'form-control' . ($errors->has('conectividad') ? ' is-invalid' : ''), 'placeholder' => 'Conectividad']) }}
            {!! $errors->first('conectividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip') }}
            {{ Form::text('ip', $impresora->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('ip', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Autonomia de resma') }}
            {{ Form::text('autonomia_resma', $impresora->autonomia_resma, ['class' => 'form-control' . ($errors->has('autonomia_resma') ? ' is-invalid' : ''), 'placeholder' => 'Autonomia Resma']) }}
            {!! $errors->first('autonomia_resma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('id_estado', $estado, $impresora->id_estado, ['class' => 'form-control' . ($errors->has('id_estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('id_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            {{ Form::text('observaciones', $impresora->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <?php } ?>


    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('impresoras.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>
