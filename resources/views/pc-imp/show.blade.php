@extends('layouts.app')

@section('template_title')
    {{ $pcImp->name ?? "{{ __('Show') Pc Imp" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pc Imp</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pc-imps.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pc:</strong>
                            {{ $pcImp->id_pc }}
                        </div>
                        <div class="form-group">
                            <strong>Id Imp:</strong>
                            {{ $pcImp->id_imp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
