<div class="card">
    <div class="card-header">
        <h4 class="text-center">
            Edit Project
        </h4>
    </div>
    <div class="card-body">
        @include('includes.partials')
        <div class="d-flex justify-content-center mb-4">
         <img width="50" height="50" src="{{asset('storage/uploads/'.$project->image_url)}}"/>
        </div>
        <form wire:submit.prevent="updateProject">
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
                <label for="" class="col-form-label col-sm-3">Subtitle</label>
                <div class="col-sm-9">
                    <input wire:model="subtitle" type="text" class="form-control @if($errors->has('subtitle')) is-invalid @endif">
                    @if($errors->has('subtitle'))
                        <div class="invalid-feedback">
                            @foreach($errors->get('subtitle') as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-form-label col-sm-3">Detail</label>
                <div class="col-sm-9">
                    <textarea wire:model="detail"" class="form-control @if($errors->has('detail')) is-invalid @endif"></textarea>
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
            <div class="row mb-3">
               
                <div class="col-sm-9 offset-md-3">
                    <button class="btn btn-sm btn-outline-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>