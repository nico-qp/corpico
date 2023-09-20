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
                            <strong>Codigo del Consumible:</strong>
                            {{ $consumiblesImpresora->consumible->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>IP de la impresora:</strong>
                            {{ $consumiblesImpresora->impresora->ip }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
