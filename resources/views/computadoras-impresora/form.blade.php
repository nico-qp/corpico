<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::label('computadoras') }}
        <select class="form-control{{ $errors->has('id_computadora') ? ' is-invalid' : '' }}" name="id_computadora" id="id_computadora" required="true" aria-required="true">
            <option value="">{{ __('computadoras') }}</option>
            @foreach ($computadoras as $computadora)
                <option value="{{ $computadora->id }}">{{ $computadora->nombre_sector.", ".$computadora->ip_172.", ".$computadora->nombre}}</option>
            @endforeach
        </select>
        {{ Form::label('impresoras') }}
        <select class="form-control{{ $errors->has('id_impresora') ? ' is-invalid' : '' }}" name="id_impresora" id="id_impresora" required="true" aria-required="true">
            <option value="">{{ __('impresoras') }}</option>
            @foreach ($impresoras as $impresora)
                <option value="{{ $impresora->id }}">{{ $impresora->nombre_sector.", ".$impresora->modelo.", ".$impresora->ip}}</option>
            @endforeach
        </select>
        

    </div>
    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('computadoras-impresoras.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>