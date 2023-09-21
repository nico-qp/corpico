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
                            <strong>Usuario Window:</strong>
                            {{ $computadora->usuarioswindow->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Geasys:</strong>
                            {{ $computadora->User->user }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $computadora->condicione->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $computadora->sectore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $computadora->etiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre del PC:</strong>
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
