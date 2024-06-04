@extends('layouts.app')
@section('content')   

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Bernal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div class="container inicio">
        <div class="row justify-content-center">
            <div class="image-container">
                <img src="{{ asset('images/cafe4.webp') }}" class="cafe2" alt="El Bernal">
                <div class="overlay-text text-center">
                    <h1>EL BERNAL</h1>
                </div>
            </div>
            <div class="col-md-8 text-center home1">
                <p>El Bernal ofrece una experiencia única y personalizada a cada uno de nuestros clientes, brindándoles la 
                    oportunidad de explorar, elegir y disfrutar de una amplia variedad de granos de café de la más alta calidad,
                    así como de seleccionar el tipo de tostado que mejor se adapte a sus gustos y preferencias.</p>
            </div>
        </div>
    </div>
</body>
</html>


@endsection
