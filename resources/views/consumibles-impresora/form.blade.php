<div class="box box-info padding-1">
    <?php if($id_impresoras[0] != NULL) { ?>
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('Codigo Consumible') }}
                {{ Form::select('id_consumible', $consumible, $consumiblesImpresora->id_consumible, ['class' => 'form-control' . ($errors->has('id_consumible') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Consumible']) }}
                {!! $errors->first('id_consumible', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                {{ Form::label('IP impresora') }}
                <select class="form-control{{ $errors->has('id_impresora') ? ' is-invalid' : '' }}" name="id_impresora" id="id_impresora" required="true" aria-required="true">
                    <option value="{{ $id_impresoras[0]->id }}" selected="selected">{{ $id_impresoras[0]->modelo }}</option>
                    @foreach ($impresoras as $impresora)
                        <option value="{{ $impresora->id }}">{{ $impresora->modelo}}</option>
                    @endforeach
                </select>
        </div>
    <?php }
    else{?>
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('Codigo Consumible') }}
                {{ Form::select('id_consumible', $consumible, $consumiblesImpresora->id_consumible, ['class' => 'form-control' . ($errors->has('id_consumible') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Consumible']) }}
                {!! $errors->first('id_consumible', '<div class="invalid-feedback">:message</div>') !!}
            </div>
                {{ Form::label('IP impresora') }}
                <select class="form-control{{ $errors->has('id_impresora') ? ' is-invalid' : '' }}" name="id_impresora" id="id_impresora" required="true" aria-required="true">
                    <option value="">{{ __('impresora') }}</option>
                    @foreach ($impresoras as $impresora)
                        <option value="{{ $impresora->id }}">{{ $impresora->modelo}}</option>
                    @endforeach
                </select>
        </div>
    <?php } ?>

    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('consumibles_impresoras.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>