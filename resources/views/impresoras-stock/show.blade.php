@extends('layouts.app')

@section('template_title')
    {{ $impresorasStock->name ?? "{{ __('Show') Impresoras Stock" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Impresoras Stock</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresora-stock.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $impresorasStock->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $impresorasStock->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $impresorasStock->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $impresorasStock->ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
