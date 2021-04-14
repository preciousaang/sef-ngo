<div wire:ignore.self class="modal fade" id="newTeam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="addTeam">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add New Team Member</h5>
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
                        <label for="" class="col-form-label col-sm-3">Title</label>
                        <div class="col-sm-9">
                            <input type="text" wire:model="title" placeholder="CEO, Marketer" class="form-control @if($errors->has('title')) is-invalid @endif">
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
                        <label for="" class="col-form-label col-sm-3">Details</label>
                        <div class="col-sm-9">
                            <textarea rows="4" wire:model="details" class="form-control @if($errors->has('details')) is-invalid @endif"></textarea>
                            @if($errors->has('details'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('details') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Facebook Link</label>
                        <div class="col-sm-9">
                            <input type="text" wire:model="facebook_url" class="form-control @if($errors->has('facebook_url')) is-invalid @endif">
                            @if($errors->has('facebook_url'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('facebook_url') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Twitter Link</label>
                        <div class="col-sm-9">
                            <input type="text" wire:model="twitter_url" class="form-control @if($errors->has('twitter_url')) is-invalid @endif">
                            @if($errors->has('twitter_url'))
                                <div class="invalid-feedback">
                                    @foreach($errors->get('twitter_url') as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Image</label>
                        <div class="col-sm-9">
                            <input type="file" wire:model="image" class="form-control @if($errors->has('image')) is-invalid @endif">
                            @if($errors->has('image'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('image') as $error)
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