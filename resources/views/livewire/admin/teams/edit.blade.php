<div class="card">
    <div class="card-header">
        <h4 class="text-center">
            Edit Team
        </h4>
    </div>
    <div class="card-body">
        @include('includes.partials')
        <div class="d-flex justify-content-center mb-4">
         <img width="50" height="50" src="{{asset('storage/uploads/'.$team->image_url)}}"/>
        </div>
        <form wire:submit.prevent="update" action="">
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
                    <div
    x-data="{ isUploading: false, progress: 0 }"
    x-on:livewire-upload-start="isUploading = true"
    x-on:livewire-upload-finish="isUploading = false"
    x-on:livewire-upload-error="isUploading = false"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    <!-- File Input -->
    <input type="file" wire:model="image" class="form-control @if($errors->has('image')) is-invalid @endif">
    <!-- Progress Bar -->
    <div x-show="isUploading">
        <progress max="100" x-bind:value="progress"></progress>
    </div>
</div>
                  
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
               
                <div class="col-sm-9 offset-md-3">
                    <button class="btn btn-sm btn-outline-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>