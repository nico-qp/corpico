@extends('layouts.app')

@section('template_title')
    {{ $ubicacione->name ?? "{{ __('Show') Ubicacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Info') }} de Ubicacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ubicaciones.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Edificio:</strong>
                            {{ $ubicacione->edificio }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $ubicacione->piso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
