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
                            <strong>Id Sector:</strong>
                            {{ $pc->id_sector }}
                        </div>
                        <div class="form-group">
                            <strong>Trabajador:</strong>
                            {{ $pc->trabajador }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Pc:</strong>
                            {{ $pc->nombre_pc }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Geasys:</strong>
                            {{ $pc->usuario_geasys }}
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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
