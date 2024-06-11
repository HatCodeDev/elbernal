@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4 ms-5 me-5">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Tipos de Bebida</h2>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalCreate"
                            style="color:white">
                            <span style="color:white"></span> {{ __('Nuevo') }}
                        </button>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <a href="{{ url('/pdf/generateBebidaPDF') }}" class="btn btn-dark"><i class="bi bi-arrow-bar-down"></i></a>
                            <!-- table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo</th>
                                        <th>Tostado</th>
                                        <th>Precio</th>
                                        <th>Filtración</th>
                                        <th>Tamaño</th>
                                        <th>Complementos</th>
                                        <th>Imagen</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bebidas as $key => $bebida)
                                        <tr>
                                            <td>{{ $bebida->id }}</td>
                                            <td>{{ $bebida->tipo }}</td>
                                            <td>{{ $bebida->tostado->tostado }}</td>
                                            <td>{{ $bebida->precio }}</td>
                                            <td>{{ $bebida->filtracion }}</td>
                                            <td>{{ $bebida->altura }}</td>
                                            <td>{{ $bebida->complementos }}</td>
                                            <td>
                                                @if ($bebida->imagen)
                                                <img class="rounded" src="{{ asset('storage/' . $bebida->imagen) }}" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalShow{{$bebida->id}}"><i class="fa-solid fa-circle-info"></i></button>
                                                
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit{{$bebida->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#ModalDelete{{$bebida->id}}"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                            @include('bebidas.modal.edit')
                                            @include('bebidas.modal.delete')
                                            @include('bebidas.modal.show')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div> <!-- .col-md-12 -->
            </div> <!-- end section row my-4 -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    @include('bebidas.modal.create')
@endsection
