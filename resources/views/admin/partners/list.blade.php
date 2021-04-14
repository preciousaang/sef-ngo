@extends('layouts.admin-base')
@section('title', 'Partner Setup')
@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            @include('includes.admin-nav')
        </div>
        <div class="col-md-9">
            <livewire:admin.partners.partner-list />
        </div>
    </div>
</div>
    @section('jsScripts')
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            
            $('#sortable-partner').sortable({
                cursor: 'grabbing',
                axis: 'y',
                update: function(){
                    var order = $(this).sortable('toArray');
                    $.ajax({
                        url: "{{route('admin-partner-sort')}}",
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