@extends('layouts.admin-base')
@section('title', 'Admin Dashboard')
@section('content')
<h3>Dashboard</h3>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <h2>Welcome, {{auth()->user()->name}}. Select one of the menus</h2>
        </div>
    </div>
</div>
@endsection