<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Usuario</h1>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Fecha de Registro:</strong> {{ $user->created_at }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
