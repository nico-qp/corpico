@extends('layouts.app')

@section('template_title')
    {{ $tonner->name ?? "{{ __('Show') Tonner" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tonner</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tonner.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $tonner->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Mensual:</strong>
                            {{ $tonner->uso_mensual }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Semestral:</strong>
                            {{ $tonner->uso_semestral }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Anual:</strong>
                            {{ $tonner->uso_anual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
