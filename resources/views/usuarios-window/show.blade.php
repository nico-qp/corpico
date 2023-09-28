@extends('layouts.app')

@section('template_title')
    {{ $usuariosWindow->name ?? "{{ __('Show') Usuarios Window" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Info.') }} de Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios-window.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $usuariosWindow->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuariosWindow->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
