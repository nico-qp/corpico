@extends('layouts.app')

@section('template_title')
    {{ $geasysUser->name ?? "{{ __('Show') Geasys User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Geasys User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('geasys-users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Geasys User:</strong>
                            {{ $geasysUser->geasys_user }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Completo:</strong>
                            {{ $geasysUser->nombre_completo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
