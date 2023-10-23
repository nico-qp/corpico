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
                            <span class="card-title">{{ __('Info. de') }} relación</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consumibles_impresoras.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong class="fs-4">Info. Consumible:</strong>
                            <br>
                            <strong>Código:</strong>
                            {{ $consumiblesImpresora->consumible->codigo }}
                            <br>
                            <strong>Tipo:</strong>
                            {{ $consumiblesImpresora->consumible->TipoConsumible->nombre }}
                            <br>
                            <strong>Uso anual:</strong>
                            {{ $consumiblesImpresora->consumible->Uso->anual }}
                            <br>
                            <strong>Descripción:</strong>
                            {{ $consumiblesImpresora->consumible->descripcion }}
                            <br>
                        </div>
                        <div class="form-group">
                            <strong class="fs-4">Info. Impresora:</strong>
                            <br>
                            <strong>IP:</strong>
                            {{ $consumiblesImpresora->impresora->ip }}
                            <br>
                            <strong>Sector:</strong>
                            {{ $consumiblesImpresora->impresora->Sectore->nombre }}
                            <br>
                            <strong>Criticidad:</strong>
                            {{ $consumiblesImpresora->impresora->Criticidade->descripcion }}
                            <br>
                            <strong>Autonomia de la resma:</strong>
                            {{ $consumiblesImpresora->impresora->autonomia_resma }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
