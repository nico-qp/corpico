@extends('layouts.app')

@section('template_title')
    {{ $computadora->name ?? "{{ __('Show') Computadora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Computadora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario Window:</strong>
                            {{ $computadora->id_usuario_window }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $computadora->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Condicion:</strong>
                            {{ $computadora->id_condicion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sectore:</strong>
                            {{ $computadora->id_sectore }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $computadora->etiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $computadora->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ip 172:</strong>
                            {{ $computadora->ip_172 }}
                        </div>
                        <div class="form-group">
                            <strong>Ip 10:</strong>
                            {{ $computadora->ip_10 }}
                        </div>
                        <div class="form-group">
                            <strong>Mac:</strong>
                            {{ $computadora->mac }}
                        </div>
                        <div class="form-group">
                            <strong>Procesador:</strong>
                            {{ $computadora->procesador }}
                        </div>
                        <div class="form-group">
                            <strong>Ram:</strong>
                            {{ $computadora->ram }}
                        </div>
                        <div class="form-group">
                            <strong>So:</strong>
                            {{ $computadora->so }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $computadora->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $computadora->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $computadora->stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
