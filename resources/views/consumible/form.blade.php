<div class="box box-info padding-1">
    <div class="box-body">
            {{ Form::label('Uso anual') }}
            <select class="form-control{{ $errors->has('id_uso') ? ' is-invalid' : '' }}" name="id_uso" id="id_uso" required="true" aria-required="true">
                <option value="">{{ __('anual') }}</option>
                @foreach ($usos as $uso)
                    <option value="{{ $uso->id }}">{{ $uso->anual}}</option>
                @endforeach
            </select>

        <div class="form-group">
            {{ Form::label('Tipo de consumible') }}
            {{ Form::select('id_tipo', $tipo_consumible, $consumible->id_tipo, ['class' => 'form-control' . ($errors->has('id_tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de consumible']) }}
            {!! $errors->first('id_tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $consumible->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $consumible->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('consumibles.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>