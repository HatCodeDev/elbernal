@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Tipos de Tostado</h2>
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
                            <a href="{{ url('/generateTostadoPDF') }}" class="btn btn-dark"><i class="bi bi-arrow-bar-down"></i></a>
                            <!-- table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Tipo de tostado') }}</th>
                                        <th width="280px">{{ __('Acción') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $tostado)
                                        <tr>
                                            <td>{{ $tostado->id }}</td>
                                            <td>{{ $tostado->tostado }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalShow{{$tostado->id}}"><i class="fa-solid fa-circle-info"></i></button>
                                                
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit{{$tostado->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#ModalDelete{{$tostado->id}}"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                            @include('tostados.modal.edit')
                                            @include('tostados.modal.delete')
                                            @include('tostados.modal.show')
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
    @include('tostados.modal.create')
@endsection
