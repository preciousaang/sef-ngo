@extends('layouts.admin-base')
@section('title', 'Project Setup')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.projects.project-list />
        </div>
    </div>
</div>
    @section('jsScripts')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('#sortable-project').sortable({
                cursor: 'grabbing',
                axis: 'y',
                update: function(){
                    var order = $(this).sortable('toArray');
                    $.ajax({
                        url: "{{route('admin-project-sort')}}",
                        method: "PATCH",
                        data: {_token: '{{csrf_token()}}', order}
                    })
                }
            });
        })
    </script>
    <script src="{{asset('assets/js/form.js')}}"></script>
    @endsection
@endsection