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
                            <span class="card-title">{{ __('Show') }} Impresora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sector:</strong>
                            {{ $impresora->id_sector }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $impresora->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo Imp:</strong>
                            {{ $impresora->modelo_imp }}
                        </div>
                        <div class="form-group">
                            <strong>Conexion:</strong>
                            {{ $impresora->conexion }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Ip:</strong>
                            {{ $impresora->nom_ip }}
                        </div>
                        <div class="form-group">
                            <strong>Cartucho Toner:</strong>
                            {{ $impresora->cartucho_toner }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo Cart Ton:</strong>
                            {{ $impresora->modelo_cart_ton }}
                        </div>
                        <div class="form-group">
                            <strong>Autonomia Resma:</strong>
                            {{ $impresora->autonomia_resma }}
                        </div>
                        <div class="form-group">
                            <strong>Autonomia Cart Ton:</strong>
                            {{ $impresora->autonomia_cart_ton }}
                        </div>
                        <div class="form-group">
                            <strong>Uso:</strong>
                            {{ $impresora->uso }}
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
