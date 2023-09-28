<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ubicacion') }}
            {{ Form::select('id', $ubicaciones, Ubicacione->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Id Ubicacion']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!--<select name="id_ubicacion" id="input-role" required="true" aria-required="true" placeholder="id ubicacion">
            @foreach ( $ubicaciones as $ubicacion)
                <option value="{{ $ubicacion->id }}">{{ $ubicacion->edificio + $ubicacion->piso}}</option>
            @endforeach
        </select>-->
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $sectore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>