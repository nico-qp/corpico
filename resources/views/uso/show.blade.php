@extends('layouts.app')

@section('template_title')
    {{ $uso->name ?? "{{ __('Show') Uso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Uso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Uso Mensual:</strong>
                            {{ $uso->uso_mensual }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Semestral:</strong>
                            {{ $uso->uso_semestral }}
                        </div>
                        <div class="form-group">
                            <strong>Uso Anual:</strong>
                            {{ $uso->uso_anual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
