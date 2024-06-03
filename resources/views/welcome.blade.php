<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/welcome.css', 'resources/js/app.js'])
    <title>El bernal</title>
</head>

<body>
    <!-- Header Start -->
    <div class="container header">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{ asset('images/logoCafe.png') }}" width="80px" alt="Logo">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">Features</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 link-secondary">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                @if (Route::has('login'))
                    @auth

                        <a href="{{ url('/home') }}" class="btn btn-outline-dark me-2">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn  btn-dark">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-dark me-2">Register</a>
                        @endif
                    @endauth

                @endif

            </div>
        </header>
    </div>
    <!-- Header End -->

    <!-- Hero Start -->
    <section class="hero">

        <div class="hero__overlay"></div>

        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy"
            class="hero__video">
            <source src="{{ asset('images/hero.mp4') }}" type="video/mp4">
        </video>

        <div class="hero__content h-100 container-custom position-relative m-5">
            <div class="d-flex h-100 align-items-center hero__content-width">
                <div class="text-white">
                    <h1 class="hero__heading fw-bold mb-4">Descubre el sabor uténtico del café en el Bernal</h1>
                    <p class="lead mb-4">Una cafeteria de especialidad en la que elijes tu metodo de filtración</p>
                    <a href="#" class="mt-2 btn btn-lg btn-outline-light" role="button">Reserva ya</a>
                </div>
            </div>
        </div>

        <a href="#scroll-down" class="hero__scroll-btn">
            Explora con nosotros <i class="bi bi-arrow-down-short"></i>
        </a>

    </section>
    <!-- Hero End -->
</body>

</html>
