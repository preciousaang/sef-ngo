@extends('layouts.admin-base')
@section('title', 'Manage Users')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.users.user-list />
        </div>
    </div>
</div>
@endsection