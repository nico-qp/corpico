@extends('layouts.app')

@section('template_title')
    {{ $sectore->name ?? "{{ __('Show') Sectore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Info. de') }} Sector</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sectores.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $sectore->ubicacione->edificio }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $sectore->ubicacione->piso }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sectore->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
