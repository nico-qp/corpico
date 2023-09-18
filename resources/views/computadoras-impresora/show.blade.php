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
                            <strong>Id Computadora:</strong>
                            {{ $computadorasImpresora->id_computadora }}
                        </div>
                        <div class="form-group">
                            <strong>Id Impresora:</strong>
                            {{ $computadorasImpresora->id_impresora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
