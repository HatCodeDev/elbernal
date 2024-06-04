<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <!------------------- Alerta ------------------------>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!------------------- Titulo ------------------------>
        <h1>Usuarios Registrados</h1>
        <!------------------- Boton modal para crear usuarios ------------------------>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUsuarios">
            Crear usuario
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalUsuariosLabel">Crear Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @include('users.form')
                    </div>
                </div>
            </div>
        </div>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <!------------------- Boton modal para ver detalles ------------------------>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#ModalDetalles">
                                Ver
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="ModalDetalles" tabindex="-1" aria-labelledby="ModalDetallesLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="ModalDetallesLabel">Detalles</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>ID:</strong> {{ $user->id }}</p>
                                            <p><strong>Nombre:</strong> {{ $user->name }}</p>
                                            <p><strong>Email:</strong> {{ $user->email }}</p>
                                            <p><strong>Fecha de Registro:</strong> {{ $user->created_at }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
