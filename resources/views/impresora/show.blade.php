@extends('layouts.app')

@section('template_title')
    {{ $impresora->name ?? "{{ __('Show') Impresora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Info.') }} de Impresora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresoras.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $impresora->Sectore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Criticidad:</strong>
                            {{ $impresora->Criticidade->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $impresora->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $impresora->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Conectividad:</strong>
                            {{ $impresora->conectividad }}
                        </div>
                        <div class="form-group">
                            <strong>IP:</strong>
                            {{ $impresora->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Autonomia Resma:</strong>
                            {{ $impresora->autonomia_resma }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $impresora->Estado->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $impresora->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
