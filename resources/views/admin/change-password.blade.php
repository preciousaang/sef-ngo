@extends('layouts.admin-base')
@section('title', 'Change Password')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        Change Password
                    </h2>
                </div>
                <div class="card-body">
                    @include('includes.partials')
                    <form action="{{route('change-password')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" required name="old_password" class="form-control @if($errors->has('old_password')) is-invalid @endif">
                                @if($errors->has('old_password'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('old_password') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" required class="form-control @if($errors->has('password')) is-invalid @endif">
                                @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('password') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" required name="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">
                                @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('password_confirmation') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <button class="btn btn-outline-primary btn-sm" type="submit">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection