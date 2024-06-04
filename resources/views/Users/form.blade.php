<form action="{{ route('users.store') }}" method="POST" >
    @yield('method')
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text">
            <i class="fa-solid fa-user"></i>
        </span>
        <input type="text" name="name" class="form-control" placeholder="Nombre"
            @isset($user) value="{{ $user->name }}" @endisset required>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">
            <i class="fa-solid fa-envelope"></i>
        </span>
        <input type="email" name="email" class="form-control" placeholder="Email"
            @isset($user) value="{{ $user->email }}" @endisset required>
    </div> 

    <div class="input-group mb-3">
        <span class="input-group-text">
            <i class="fa-solid fa-lock"></i>
        </span>
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>

</form>
