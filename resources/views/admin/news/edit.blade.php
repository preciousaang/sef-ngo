@extends('layouts.admin-base')
@section('title', 'Edit News')
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
                        Upadate News
                    </h2>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-5 justify-content-center">
                        <img src="{{asset('storage/uploads/'.$post->image_url)}}"  alt="{{$post->title}}" width="150" height="150" class="rounded">
                    </div>
                    @include('includes.partials')
                    <form action="{{route('admin-update-news', $post->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Image</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" value="{{$post->title}}" class="form-control @if($errors->has('title')) is-invalid @endif">
                                @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('title') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control @if($errors->has('image')) is-invalid @endif">
                                @if($errors->has('image'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('image') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-form-label col-sm-3">Body</label>
                            <div wire:ignore class="col-sm-9">
                                <textarea id="body" name="body" class="form-control @if($errors->has('body')) is-invalid @endif" rows="8">{!! $post->body !!}</textarea>
                                @if($errors->has('body'))
                                <div class="text-danger">
                                    @foreach($errors->get('body') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 offset-md-3">
                                <button class="btn btn-outline-primary btn-sm" type="submit">Update News</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jsScripts')
   <script src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection