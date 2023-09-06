@extends('layouts.app')

@section('template_title')
    {{ $impresoraStock->name ?? "{{ __('Show') Impresora Stock" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Impresora Stock</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('impresora-stock.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $impresoraStock->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $impresoraStock->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $impresoraStock->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $impresoraStock->ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
