@extends('layouts.app')

@section('template_title')
    {{ $pc->name ?? "{{ __('Show') Pc" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pcs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id So User:</strong>
                            {{ $pc->id_so_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Geasys User:</strong>
                            {{ $pc->id_geasys_user }}
                        </div>
                        <div class="form-group">
                            <strong>Id Condicion:</strong>
                            {{ $pc->id_condicion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sectore:</strong>
                            {{ $pc->id_sectore }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta:</strong>
                            {{ $pc->etiqueta }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Pc:</strong>
                            {{ $pc->nombre_pc }}
                        </div>
                        <div class="form-group">
                            <strong>Ip 172:</strong>
                            {{ $pc->ip_172 }}
                        </div>
                        <div class="form-group">
                            <strong>Ip 10:</strong>
                            {{ $pc->ip_10 }}
                        </div>
                        <div class="form-group">
                            <strong>Mac:</strong>
                            {{ $pc->mac }}
                        </div>
                        <div class="form-group">
                            <strong>Cpu:</strong>
                            {{ $pc->cpu }}
                        </div>
                        <div class="form-group">
                            <strong>Ram:</strong>
                            {{ $pc->ram }}
                        </div>
                        <div class="form-group">
                            <strong>So:</strong>
                            {{ $pc->so }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $pc->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $pc->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Stock:</strong>
                            {{ $pc->uso_stock }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
