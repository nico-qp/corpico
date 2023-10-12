<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>corpico</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Corpico
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else

                        <!-- NAV AGREGADO -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('computadoras.index') }}">Computadoras</a>
                        </li>
                       <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('computadoras-softwares.index') }}">Computadoras-soft</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('impresoras.index') }}">Impresoras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sectores.index') }}">Sectores</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('ubicaciones.index') }}">ubicaciones</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usos.index') }}">Usos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('condiciones.index') }}">Condiciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('consumibles.index') }}">Consumibles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('softwares.index') }}">Softwares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios-window.index') }}">Usuarios windows</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('tipo-consumibles.index') }}">tipo consumibles</a>
                        </li>-->
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('computadoras-impresoras.index') }}">computadoras impresoras</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('criticidades.index') }}">Criticidades</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('consumibles_impresoras.index') }}">consumibles impresoras</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('estados.index') }}">Estados</a>
                        </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
