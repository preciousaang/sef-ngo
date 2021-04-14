@if(session()->has('message'))
    <div class="alert alert-info">
        {{session('message')}}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif