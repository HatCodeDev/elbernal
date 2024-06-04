
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Bernal @yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js','resources/sass/app.scss','resources/js/Games/index.js',
    'resources/css/welcome.css','resources/css/style.css'])
    <link rel="stylesheet" href="{{assets('css/style.css')}}">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">El Bernal</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><img src="resources/img/Logo.png"></li>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('games')}}">Tipos de tostado</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{url('games/create')}}">Bebidas</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="{{url('games/edit')}}">Usuarios</a></li>
            <li class="nav-item"><a class="navbar-brand" href="#">Usuarios</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <div class="container-fluid mt-3">
        @yield('body')
    </div>
    
</body>
@yield('js')

</html>