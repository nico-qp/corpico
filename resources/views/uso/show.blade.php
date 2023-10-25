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
                            <span class="card-title">{{ __('Info.') }} de Uso de consumible</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Mensual:</strong>
                            {{ $uso->mensual }}
                        </div>
                        <div class="form-group">
                            <strong>Semestral:</strong>
                            {{ $uso->semestral }}
                        </div>
                        <div class="form-group">
                            <strong>Anual:</strong>
                            {{ $uso->anual }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
