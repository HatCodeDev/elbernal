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


                <form action="/users" method="get" role="search" class="mb-3">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" id="q" name="search" class="form-control"
                                    placeholder="Search..." onkeyup="load(1)">
                            </div>
                        </div>
                        <div class="form-group col-xs-6 col-sm-6 col-md-6 ">
                            <button type="submit" class="btn btn-success" onclick="load(1)">search</button>
                        </div>
                    </div>
                </form>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th width="280px">{{ __('Action') }}</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $key => $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#ModalShow{{ $user->id }}">{{ __('Show') }}</button>
                                                    
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit{{ $user->id }}">{{ __('Edit') }}</button>

                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#ModalDelete{{ $user->id }}">{{ __('Delete') }}</button>
                                                </td>
                                                @include('users.modal.edit')
                                                @include('users.modal.delete')
                                                @include('users.modal.show')
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                {!! $data->render() !!}
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
