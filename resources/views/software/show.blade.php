@extends('layouts.app')

@section('template_title')
    {{ $software->name ?? "{{ __('Show') Software" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Software</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('software.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $software->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Version:</strong>
                            {{ $software->version }}
                        </div>
                        <div class="form-group">
                            <strong>Expira:</strong>
                            {{ $software->expira }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection