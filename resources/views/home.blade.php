@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('sistema de gestion de computadoras e impresoras') }}</div>

                <div class="card-body">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <h3 class="text-sm text-gray-700 dark:text-gray-500 underline">ya estas logeado</h3>
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
