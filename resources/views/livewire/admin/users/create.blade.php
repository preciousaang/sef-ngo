<div wire:ignore.self class="modal fade" id="newUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="addUser">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="" class="col-form-label col-sm-3">Name</label>
                    <div class="col-sm-9">
                        <input wire:model="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('name') as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-form-label col-sm-3">E-mail</label>
                    <div class="col-sm-9">
                        <input type="text" wire:model="email" placeholder="abc@xyz.com" class="form-control @if($errors->has('email')) is-invalid @endif">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('email') as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-form-label col-sm-3">Password</label>
                    <div class="col-sm-9">
                        <input wire:model="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('password') as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-form-label col-sm-3">Confirm Password</label>
                    <div class="col-sm-9">
                        <input wire:model="password_confirmation" type="password" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">
                        @if($errors->has('password_confirmation'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('password_confirmation') as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
</div>