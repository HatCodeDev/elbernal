@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">                  
            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="h3 mb-0 page-title">{{ __('Create New User') }}</h2>
                </div>
                <div class="col-auto">
                
                    <a href="{{route('users.index')}}" class="btn btn-primary" style="color:white">
                        <span style="color:white"></span> {{ __('Back') }}
                    </a>
                
                </div>
            </div>                  
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">{{ __('Users') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('Create New User') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Name') }}:</strong>
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Email') }}:</strong>
                                <input type="text" name="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Password') }}:</strong>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Confirm Password') }}:</strong>
                                <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>
                        <!-- Sección de roles eliminada -->
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <a class="btn grey btn-outline-secondary" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                            <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->        

@endsection
