@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sistema de gestion de computadoras e impresoras') }}</div>

                <div class="card-body">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <h3 class="text-sm text-gray-700 dark:text-gray-500 underline text-center">Bienvenido  {{ Auth::user()->name }}, al sistema de gestion.</h3>
                            <br>
                            <div class="card-group">
                                <a href="{{ route('computadoras.index') }}" class="card text-center">
                                    <div class="card-header">Computadoras</div>
                                    <div class="card-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices-pc" width="90" height="90" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M3 5h6v14h-6z" />
                                        <path d="M12 9h10v7h-10z" />
                                        <path d="M14 19h6" />
                                        <path d="M17 16v3" />
                                        <path d="M6 13v.01" />
                                        <path d="M6 16v.01" />
                                    </svg>
                                    </div>
                                </a>
                                <a href="{{ route('impresoras.index') }}" class="card text-center">
                                    <div class="card-header">Impresoras</div>
                                    <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="90" height="90" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                            <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            @else
                                <a href="{{ route('login') }}">Inicia sesión para continuar</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
