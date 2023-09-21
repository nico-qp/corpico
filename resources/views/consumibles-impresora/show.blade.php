@extends('layouts.app')

@section('template_title')
    {{ $consumiblesImpresora->name ?? "{{ __('Show') Consumibles Impresora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consumibles Impresora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consumibles_impresoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Consumible:</strong>
                            <br>
                            <strong>Codigo del Consumible:</strong>
                            {{ $consumiblesImpresora->consumible->codigo }}
                            <br>
                            <strong>Tipo del Consumible:</strong>
                            {{ $consumiblesImpresora->consumible->TipoConsumible->nombre }}
                            <br>
                            <strong>Uso del Consumible:</strong>
                            {{ $consumiblesImpresora->consumible->Uso->mensual }}
                            <br>
                            <strong>Descripcion del Consumible:</strong>
                            {{ $consumiblesImpresora->consumible->descripcion }}
                            <br>
                        </div>
                        <div class="form-group">
                            <strong>Impresora:</strong>
                            <br>
                            <strong>IP de la impresora:</strong>
                            {{ $consumiblesImpresora->impresora->ip }}
                            <br>
                            <strong>Sector de la impresora:</strong>
                            {{ $consumiblesImpresora->impresora->Sectore->nombre }}
                            <br>
                            <strong>Criticidad de la impresora:</strong>
                            {{ $consumiblesImpresora->impresora->Criticidade->descripcion }}
                            <br>
                            <strong>Autonomia de la resma de la impresora:</strong>
                            {{ $consumiblesImpresora->impresora->autonomia_resma }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection