<div wire:ignore.self class="modal fade" id="newTeam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="addGallery">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
</div>