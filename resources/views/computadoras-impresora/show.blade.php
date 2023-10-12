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
                            <span class="card-title">{{ __('Info. de') }} relación</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras-impresoras.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong class="fs-4">Info. Computadora:</strong>
                            <br>
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
                        </div>
                        <div class="form-group">
                            <br>
                            <strong class="fs-4">Info. Impresora:</strong>
                            <br>
                            <strong>Modelo:</strong>
                            {{ $computadorasImpresora->impresora->modelo }}
                            <br>
                            <strong>Criticidad:</strong>
                            {{ $computadorasImpresora->impresora->criticidade->descripcion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Sector:<strong>
                            {{ $computadorasImpresora->computadora->sectore->nombre }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
