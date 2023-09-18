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
                            <span class="card-title">{{ __('Show') }} Computadoras Software</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras-software.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Software:</strong>
                            {{ $computadorasSoftware->id_software }}
                        </div>
                        <div class="form-group">
                            <strong>Id Computadora:</strong>
                            {{ $computadorasSoftware->id_computadora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
