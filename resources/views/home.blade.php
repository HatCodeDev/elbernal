@extends('layouts.app')
@section('content')   

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/css/welcome.css', 'resources/js/app.js'])
    <title>El Bernal</title>
    
</head>
<body>
    
    <div class="container inicio">
        <div class="row justify-content-center">
            <div class="image-container">
                <center><img src="{{ asset('images/cafe4.webp') }}" class="cafe2"></center>
                <div class="overlay-text text-center">
                    <h1>EL BERNAL</h1>
                </div>
            </div>

            <div class="wrapper">
                <img src="{{ asset('images/cafe1.jpg') }}" class="cafe3">
                <div class="text-box desc1">
                    <p>El Bernal ofrece una experiencia única y personalizada a cada uno de nuestros clientes, brindándoles la 
                        oportunidad de explorar, elegir y disfrutar de una amplia variedad de granos de café de la más alta calidad,
                        así como de seleccionar el tipo de tostado que mejor se adapte a sus gustos y preferencias.</p>
                </div>
            </div>

            <div class="wrapper mb-5">
                <img src="{{ asset('images/cafe6.jpg') }}" class="cafe3">
                <div class="text-box desc1">
                    <p>Creemos que el café es más que una bebida; es una experiencia que debe ser disfrutada y personalizada. Nos esforzamos por crear un ambiente acogedor y educativo donde nuestros clientes puedan aprender sobre el proceso del café desde el grano hasta la taza.</p>
                </div>
            </div>
        </div>

        {{-- TARJETAS --}}

        <div class="row row-cols-1 row-cols-md-3 g-4 tarjetas">
            <div class="col">
              <div class="card h-100 card1">
                <img src="{{ asset('images/cafe7.jpg') }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title text-center"><b>Selección de Granos</b></h5>
                  <p class="card-text">Ofrecemos granos de café provenientes de diversas regiones del mundo, cada uno con su perfil único de sabor.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><b>Disponemos de granos orgánicos, de comercio justo y de origen único.</b></small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{ asset('images/cafe8.jpg') }}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title text-center"><b>Tipos de Tostado</b></h5>
                  <p class="card-text">Para aquellos que prefieren un sabor más ácido y afrutado, resaltando las características originales del grano.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><b>Para los amantes de un sabor fuerte e intenso.</b></small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{ asset('images/cafe9.jpg') }}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title text-center"><b>Experiencia del Cliente</b></h5>
                  <p class="card-text">Nuestro equipo de expertos baristas y tostadores están siempre disponibles para asesorar a los clientes en la selección del grano y tostado perfectos.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><b>Los clientes pueden optar por tostarlo en el momento según sus preferencias.</b></small>
                </div>
              </div>
            </div>
          </div>

        {{-- TIPOS DE TOSTADO --}}

        <div class="container-fluid tipTosta">
            <div class="home2 mb-5 text-center d-flex justify-content-center">
                <h3><b>Tipos de tostado</b></h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-50">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/cafe10.jpg') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center"><b>Tostado Ligero (Light Roast)</b></h5>
                      <p class="card-text">Tiene una alta acidez y conserva la mayoría de los sabores originales del grano, como notas afrutadas, florales y cítricas.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/cafe12.jpg') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center"><b>Tostado Medio (Medium Roast)</b></h5>
                      <p class="card-text"> Equilibrio entre acidez y dulzura. Mantiene una buena parte de los sabores originales del grano, pero también desarrolla sabores caramelizados.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('images/cafe13.webp') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center"><b>Tostado Medio-Oscuro (Medium-Dark Roast)</b></h5>
                      <p class="card-text">Menos acidez, con sabores más robustos y pronunciados. Comienzan a aparecer notas amargas, achocolatadas y a nuez.</p>
                    </div>
                  </div>
                </div>
                <div class="col mx-auto mb-5">
                  <div class="card h-100">
                    <img src="{{ asset('images/cafe14.jpg') }}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title text-center"><b>Tostado Oscuro (Dark Roast)</b></h5>
                      <p class="card-text">Baja acidez y sabores más profundos, intensos y a veces amargos. Los sabores originales del grano se ven eclipsados.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>

        {{-- BEBIDAS --}}
        <div class="container-fluid bebidas">
          <div class="home3 mb-5 text-center d-flex justify-content-center">
            <h3><b>Bebidas</b></h3>
          </div>

          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/cafe16.jpg') }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5><b>EXPRESSO</b></h5>
                  <p><b>Café fuerte y concentrado</b></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/cafe18.webp') }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5><b>CAFÉ AMERICANO</b></h5>
                  <p><b>Es menos fuerte que el espresso y tiene un sabor más suave</b></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/cafe15.jpg') }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5><b>LATTE</b></h5>
                  <p><b>Espresso y leche vaporizada</b></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/cafe17.jpg') }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                  <h5><b>CAPUCHINO</b></h5>
                  <p><b>Espresso, leche vaporizada y espuma de leche</b></p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>

      </div>

            
    </body>
  </html>
@endsection
