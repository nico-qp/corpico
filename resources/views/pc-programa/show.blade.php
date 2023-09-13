@extends('layouts.app')

@section('template_title')
    {{ $pcPrograma->name ?? "{{ __('Show') Pc Programa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pc Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pc-programas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pc:</strong>
                            {{ $pcPrograma->id_pc }}
                        </div>
                        <div class="form-group">
                            <strong>Id Programa:</strong>
                            {{ $pcPrograma->id_programa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
