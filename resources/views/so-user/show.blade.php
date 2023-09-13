@extends('layouts.app')

@section('template_title')
    {{ $soUser->name ?? "{{ __('Show') So User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} So User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('so-users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>So User:</strong>
                            {{ $soUser->so_user }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $soUser->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
