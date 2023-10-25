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
                            <span class="card-title">{{ __('Info. de') }} Computadora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario Windows:</strong>
                            {{ $computadora->UsuariosWindow->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $computadora->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Condición:</strong>
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
                            <strong>Nombre:</strong>
                            {{ $computadora->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>IP 172:</strong>
                            {{ $computadora->ip_172 }}
                        </div>
                        <div class="form-group">
                            <strong>IP 10:</strong>
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
                            <strong>SO:</strong>
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
                            <strong>Estado:</strong>
                            {{ $computadora->estado->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection