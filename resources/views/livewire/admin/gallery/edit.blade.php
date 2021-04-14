<div class="card">
    <div class="card-header">
        <h4 class="text-center">
            Edit Gallery
        </h4>
    </div>
    <div class="card-body">
        @include('includes.partials')
        
        <form wire:submit.prevent="updateGallery">
            <div class="row mb-3">
                <label for="" class="col-form-label col-sm-3">Title</label>
                <div class="col-sm-9">
                    <input wire:model="title" type="text" class="form-control @if($errors->has('title')) is-invalid @endif">
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
               
                <div class="col-sm-9 offset-md-3">
                    <button class="btn btn-sm btn-outline-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
        <hr>
        <h3 class="text-center">
           Gallery Images
        </h3>
        <br>
        <livewire:admin.images.image-list/>
    </div>
    
</div>