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
                            <span class="card-title">{{ __('Show') }} Sectore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sectores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Edificio:</strong>
                            {{ $sectore->edificio }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $sectore->piso }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $sectore->sector }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
