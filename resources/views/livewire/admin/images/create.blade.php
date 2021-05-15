<div wire:ignore.self class="modal fade" id="newTeam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form wire:submit.prevent="addImage">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Image</h5>
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
                       
                            <input wire:model="image" type="file" accept="image/*" class="form-control @if($errors->has('image')) is-invalid @endif">
                            <div wire:loading wire:target="image" class="text-success">Uploading...</div>
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
                    <label for="" class="col-form-label col-sm-3">Detail</label>
                    <div class="col-sm-9">
                        <textarea wire:model="detail"  class="form-control @if($errors->has('detail')) is-invalid @endif"></textarea>
                        @if($errors->has('detail'))
                            <div class="invalid-feedback">
                                @foreach($errors->get('detail') as $error)
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