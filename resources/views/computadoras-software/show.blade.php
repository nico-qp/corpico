@extends('layouts.app')

@section('template_title')
    {{ $computadorasSoftware->name ?? "{{ __('Show') Computadoras Software" }}
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
                            <a class="btn btn-primary" href="{{ route('computadoras-softwares.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong class="fs-4">Info Software:</strong></br>
                            <strong>Software: </strong>{{ $computadorasSoftware->Software->nombre }} </br>
                            <strong>versión: </strong>{{ $computadorasSoftware->Software->version }} </br>
                            <strong>Fecha de Expiración: </strong>{{ $computadorasSoftware->Software->expira }} </br>
                        </div>
                        <br>
                        <div class="form-group">
                            <strong class="fs-4">Info Computadora:</strong><br>
                            <strong>Sector: </strong>{{ $computadorasSoftware->Computadora->sectore->nombre }} </br>
                            <strong>Nombre del PC: </strong>{{ $computadorasSoftware->Computadora->nombre }} </br>
                            <strong>IP: </strong>{{ $computadorasSoftware->Computadora->ip_172 }} </br>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
