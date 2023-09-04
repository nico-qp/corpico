@extends('layouts.app')

@section('template_title')
    {{ $cartucho->name ?? "{{ __('Show') Cartucho" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cartucho</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cartucho.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $cartucho->color }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $cartucho->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Mensual:</strong>
                            {{ $cartucho->uso_mensual }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Semestral:</strong>
                            {{ $cartucho->uso_semestral }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Anual:</strong>
                            {{ $cartucho->uso_anual }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Impresora:</strong>
                            {{ $cartucho->marca_impresora }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo Impresora:</strong>
                            {{ $cartucho->modelo_impresora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
