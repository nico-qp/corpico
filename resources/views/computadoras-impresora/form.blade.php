<div class="box box-info padding-1">

<?php if($id_computadora[0] != NULL){?>
    <div class="box-body">
        {{ Form::label('computadoras') }}
        <select class="form-control{{ $errors->has('id_computadora') ? ' is-invalid' : '' }}" name="id_computadora" 
        id="id_computadora" required="true" aria-required="true">
            <!--<option value="">{{ __('computadoras') }}</option>-->
            <option value="{{ $id_computadora[0]->id }}" selected="selected">{{ $id_computadora[0]->nombre_sector.", ".$id_computadora[0]->ip_172.",
                    ".$id_computadora[0]->nombre}}</option>
            @foreach ($computadoras as $computadora)
                <option value="{{ $computadora->id }}">{{ $computadora->nombre_sector.", ".$computadora->ip_172.",
                    ".$computadora->nombre}}</option>
            @endforeach
        </select>
        {{ Form::label('impresoras') }}
        <select class="form-control{{ $errors->has('id_impresora') ? ' is-invalid' : '' }}" name="id_impresora" id="id_impresora" required="true" aria-required="true">
            <!--<option value="">{{ __('impresoras') }}</option>-->
            <option value="{{ $id_impresora[0]->id }}" selected="selected">{{ $id_impresora[0]->nombre_sector.", ".$id_impresora[0]->modelo.", ".$id_impresora[0]->ip}}</option>
            @foreach ($impresoras as $impresora)
                <option value="{{ $impresora->id }}">{{ $impresora->nombre_sector.", ".$impresora->modelo.", ".$impresora->ip}}</option>
            @endforeach
        </select>
    </div>
<?php }
else{?>
    <div class="box-body">
        {{ Form::label('computadoras') }}
        <select class="form-control{{ $errors->has('id_computadora') ? ' is-invalid' : '' }}" name="id_computadora" 
        id="id_computadora" required="true" aria-required="true">
            <option value="">{{ __('computadoras') }}</option>
            @foreach ($computadoras as $computadora)
                <option value="{{ $computadora->id }}">{{ $computadora->nombre_sector.", ".$computadora->ip_172.",
                    ".$computadora->nombre}}</option>
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
    <?php } ?>


    <div class="box-footer mt-3 position-relative mb-3 pb-4">
        <button type="submit" class="btn btn-primary position-absolute top-0 start-0">{{ __('Guardar') }}</button>
        <a class="btn btn-danger position-absolute top-0 end-0" href="{{ route('computadoras-impresoras.index') }}">{{ __('Cancelar') }}</a>
    </div>
</div>