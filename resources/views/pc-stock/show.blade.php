@extends('layouts.app')

@section('template_title')
    {{ $pcStock->name ?? "{{ __('Show') Pc Stock" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pc Stock</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pc-stock.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $pcStock->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $pcStock->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $pcStock->condicion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pcStock->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $pcStock->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $pcStock->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
