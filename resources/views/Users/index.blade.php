@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">Usuarios</h2>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalCreate"
                            style="color:white">
                            <span style="color:white"></span> {{ __('New') }}
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
                                <a href="{{ url('/generate-pdf') }}" class="btn btn-dark"><i class="bi bi-arrow-bar-down"></i></a>
                                <!-- table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($data as $key => $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalShow{{$user->id}}"><i class="fa-solid fa-circle-info"></i></button>
                                                    
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit{{$user->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#ModalDelete{{$user->id}}"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                                @include('users.modal.edit')
                                                @include('users.modal.delete')
                                                @include('users.modal.show')
                                            </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                                {{-- {!! $data->render() !!} --}}
                                <!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->
                </div> <!-- end section row my-4 -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    @include('users.modal.create')
@endsection
