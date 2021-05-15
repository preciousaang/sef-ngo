
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">
                        Edit Image
                    </h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center my-3">
                        <img src="{{asset('storage/uploads/'.$image->image_url)}}" class="rounded" alt="" width="150" height="150">
                    </div>
                    @include('includes.partials')
                    
                    <form wire:submit.prevent="updateImage">
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
                            <label for="" class="col-form-label col-sm-3">Detail</label>
                            <div class="col-sm-9">
                                <textarea wire:model="detail" type="text" class="form-control @if($errors->has('detail')) is-invalid @endif"></textarea>
                                @if($errors->has('detail'))
                                    <div class="invalid-feedback">
                                        @foreach($errors->get('detail') as $error)
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

                            <input wire:model="imageFile" type="file" class="form-control @if($errors->has('imageFile')) is-invalid @endif">
                            <div wire:loading wire:target="imageFile" class="text-success">Uploading...</div>
                           
                                <!-- Progress Bar -->
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>


                               
                                @if($errors->has('imageFile'))
                                    <div class="invalid-feedback">
                                        @foreach($errors->get('imageFile') as $error)
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
     