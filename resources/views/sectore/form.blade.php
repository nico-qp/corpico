<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::label('ubicacion') }}
        <select class="form-control{{ $errors->has('id_ubicacion') ? ' is-invalid' : '' }}" name="id_ubicacion" id="id_ubicacion" required="true" aria-required="true">
            <option value="">{{ __('ubicacion') }}</option>
            @foreach ($ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id }}">{{ $ubicacion->edificio.", piso ".$ubicacion->piso}}</option>
            @endforeach
        </select>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $sectore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>