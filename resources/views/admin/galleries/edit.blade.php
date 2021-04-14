@extends('layouts.admin-base')
@section('title', 'Admin Gallery Edit')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.gallery.edit/>
        </div>
    </div>
</div>
@section('jsScripts')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('#sortable-images').sortable({
                cursor: 'grabbing',
                axis: 'y',
                update: function(){
                    var order = $(this).sortable('toArray');
                    $.ajax({
                        url: "{{route('admin-images-sort')}}",
                        method: "PATCH",
                        data: {_token: '{{csrf_token()}}', order, gallery_id: <?php echo request()->id; ?>}
                    })
                }
            });
        })
    </script>
@endsection
@endsection