@extends('layouts.app')

@section('template_title')
    {{ $consumible->name ?? "{{ __('Show') Consumible" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Consumible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consumibles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Uso:</strong>
                            {{ $consumible->id_uso }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo:</strong>
                            {{ $consumible->id_tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $consumible->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $consumible->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
