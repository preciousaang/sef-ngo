<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex mb-2 justify-content-center">
                <img src="{{asset('img/logo.png')}}" alt="Logo">
            </div>
            
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-center text-white">Login</h5>
                </div>
                <div class="card-body">
                    @include('includes.partials')
                    <form wire:submit.prevent="doLogin">
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input wire:model="username" type="text" class="form-control @if($errors->has('username')) is-invalid @endif">
                                @if($errors->has('username')) 
                                    @foreach($errors->get('username') as $error)
                                        <div class="invalid-feedback">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input wire:model="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                                @if($errors->has('password')) 
                                    @foreach($errors->get('password') as $error)
                                        <div class="invalid-feedback">
                                            {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Login</button>
                                &nbsp;&nbsp;
                                <a href="{{route('password.request')}}" class="text-info">Forgot Password?</a>
                            </div>
                        </div>
                       
                    </form>
                </div>
                <div class="card-footer">
                    {{-- <div class="text-center">Designed By AGZ</div> --}}
                </div>
            </div>
        </div>
    </div>
</div>