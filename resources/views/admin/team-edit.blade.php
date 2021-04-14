@extends('layouts.admin-base')
@section('title', 'Admin Team')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.teams.edit/>
        </div>
    </div>
</div>
@endsection