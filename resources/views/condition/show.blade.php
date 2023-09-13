@extends('layouts.app')

@section('template_title')
    {{ $condition->name ?? "{{ __('Show') Condition" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Condition</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conditions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $condition->condicion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
