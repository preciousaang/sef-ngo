@extends('layouts.admin-base')
@section('title', 'Admin Partner Edit')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.projects.edit/>
        </div>
    </div>
</div>
@endsection