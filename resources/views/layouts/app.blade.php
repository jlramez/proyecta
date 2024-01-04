<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					@auth()
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-chart-simple"></i>
                          Estadística
                        </button>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('/competitividadespartidos') }}" class="dropdown-item" >Competitividad coalición / municipio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/nocompetitividades') }}" class="dropdown-item"> Competitividad partido / municipio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/novotospartidos') }}" class="dropdown-item"> No. de votos por partido</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/novotosdistritos') }}" class="dropdown-item"> No. votos por distrito</a> 
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						
						<li class="nav-item">
                            <a href="{{ url('/alianzas') }}" class="nav-link"><i class="fa-solid fa-handshake"></i> Alianzas</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/secciones') }}" class="nav-link"><i class="fa-solid fa-location-crosshairs"></i> Secciones</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/tiposecciones') }}" class="nav-link"><i class="fa-solid fa-spell-check"></i> Tipo secciones</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/municipiosdistritos') }}" class="nav-link"><i class="fa-solid fa-square-up-right"></i> Municipios distritos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/distritos') }}" class="nav-link"><i class="fa-solid fa-building-circle-arrow-right"></i> Distritos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/partidos') }}" class="nav-link"><i class="fa-solid fa-house"></i> Partidos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/municipios') }}" class="nav-link"><i class="fa-solid fa-map-location-dot"></i> Municipios</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/entidades') }}" class="nav-link"><i class="fa-solid fa-globe"></i> Entidades</a> 
                        </li>                       
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i>
                          configuración
                        </button>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('#') }}" class="dropdown-item" >Mujeres / municipio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('#') }}" class="dropdown-item"> Hombres / municipio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('#') }}" class="dropdown-item">Mujeres Jovenes / municipio</a> 
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('#') }}" class="dropdown-item"> Hombres Jovenes / municipio</a> 
                            </li>
                        </ul>
                    </div>
					@endauth()

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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
    @livewireScripts
    <script type="module">
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
           addModal.hide();
           editModal.hide();
        })
    </script>
</body>
</html>