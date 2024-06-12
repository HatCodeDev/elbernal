<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>El Bernal @yield('title')</title>
    <!--- ICO -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logoCafe.ico') }}" />

    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/js/app.js','resources/sass/app.scss','resources/js/Games/index.js',
    'resources/css/welcome.css','resources/css/style.css'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('images/logoCafe.png') }}" width="70px" alt="Logo">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            Sitema de control
                        </a>
                        <a class="navbar-brand" href="{{ url('/users') }}">
                            Usuarios
                        </a>
                        <a class="navbar-brand" href="{{ url('/tostados') }}">
                            Tipos de tostado
                        </a>
                        <a class="navbar-brand" href="{{ url('/bebidas') }}">
                            Bebidas
                        </a>
                    </ul>
                    
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
    {{-- FOOTER --}}
    <footer class="pie-pag">
        <div class="grupo1">
          <div class="box">
            <figure>
              <a href="public/resources/views/Users/home.blade.php">
                <img src="{{ asset('images/logoCafe.png') }}">
              </a>
            </figure>
          </div>

          <div class="box">
            <h2><b>SOBRE NOSOTROS</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, impedit.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, impedit.</p>
          </div>

          <div class="box">
            <h2><b>Síguenos</b></h2>
            <div class="redsocial">
              <a href="https://es-la.facebook.com/login.php/" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://www.tiktok.com/login?lang=es" target="_blank"  ><i class="bi bi-tiktok"></i></a>
              <a href="https://www.instagram.com/accounts/login/" target="_blank" ><i class="bi bi-instagram"></i></a>
              <a href="https://x.com/?lang=es"><i class="bi bi-twitter-x" target="_blank" ></i></a>
            </div>
          </div>
        </div>

        <div class="grupo2">
          <small><i class="bi bi-c-circle"></i> 2024 <b>El Bernal</b> - Todos los derechos están reservados</small>
        </div>

      </footer>
</body>
@yield('js')
</html>
