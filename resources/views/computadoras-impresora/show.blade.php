@extends('layouts.app')

@section('template_title')
    {{ $computadorasImpresora->name ?? "{{ __('Show') Computadoras Impresora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Computadoras Impresora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras-impresoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Computadora:</strong>
                            <br><br>
                            <strong>Usuario Geasys:</strong>
                            {{ $computadorasImpresora->computadora->User->name }}
                            <br>
                            <strong>IP 10:</strong>
                            {{ $computadorasImpresora->computadora->ip_10 }}
                            <br>
                            <strong>IP 172:</strong>
                            {{ $computadorasImpresora->computadora->ip_172 }}
                            <br>
                            <strong>MAC:</strong>
                            {{ $computadorasImpresora->computadora->mac }}
                            <br><br>
                        </div>
                        <div class="form-group">
                            <strong>Sector:<strong>
                            {{ $computadorasImpresora->computadora->sectore->nombre }}
                        </div>
                        <div class="form-group">
                            <br><br>
                            <strong>impresora:</strong>
                            <br><br>
                            <strong>IP:</strong>
                            {{ $computadorasImpresora->impresora->ip }}
                            <br>
                            <strong>Criticidad:</strong>
                            {{ $computadorasImpresora->impresora->criticidade->descripcion }}
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
