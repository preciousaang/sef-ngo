@extends('layouts.admin-base')
@section('title', 'News')
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
                        News List
                    </h2>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('admin-create-news')}}" class="btn btn-sm btn-outline-primary mb-3">
                            <i class="mdi mdi-plus"></i>&nbsp; Add News
                        </a>
                    </div>
                    @include('includes.partials')
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Excerpt</th>
                                <th>Status</th>
                                <th>Date Posted</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($news as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user->name}}</td>
                                <td><?= substr(strip_tags($post->body), 0, 50); ?>....</td>
                                <td>{{$post->active ? 'Active' : 'Inactive'}}</td>
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop{{$post->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-cog"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$post->id}}">
                                            <li>
                                                <a class="dropdown-item" href="{{route('admin-news-toggle-status', $post->id)}}">{{!$post->active ? 'Activate' : 'Deactivate'}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('admin-news-edit', $post->id)}}" type="button" class="dropdown-item">
                                                    Edit
                                                </a>
                                            </li>
                                            {{-- <li><a href="{{route('admin-news-delete', $post->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li> --}}
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection