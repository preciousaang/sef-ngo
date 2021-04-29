@extends('layouts.admin-base')
@section('title', 'Forgot Password')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex mb-2 justify-content-center">
                <img src="{{asset('img/logo.png')}}" alt="Logo">
            </div>
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-center text-white">Enter Your Email to request a reset link.</h5>
                </div>
                <div class="card-body">
                    @include('includes.partials')
                    <form method="POST" action="{{route('password.update')}}">
                        @csrf
                        <input type="hidden" name="token" value="{{request()->token}}">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">E-mail</label>
                            <div class="col-sm-9">
                                <input name="email" type="text" class="form-control @if($errors->has('email')) is-invalid @endif">
                                @if($errors->has('email')) 
                                    @foreach($errors->get('email') as $error)
                                        <div class="invalid-feedback">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input name="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                                @if($errors->has('password')) 
                                    @foreach($errors->get('password') as $error)
                                        <div class="invalid-feedback">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input name="password_confirmation" type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">
                                @if($errors->has('password_confirmation')) 
                                    @foreach($errors->get('password_confirmation') as $error)
                                        <div class="invalid-feedback">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Reset Password</button>
                                &nbsp;&nbsp;
                            </div>
                        </div>
                       
                    </form>
                </div>
                <div class="card-footer">
                    <div class="text-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection