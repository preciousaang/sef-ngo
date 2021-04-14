<h3>Setup Gallery</h3>
<div class="row">
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">
                    Gallery
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#newTeam" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="mdi mdi-plus"></i>&nbsp; Add Gallery
                    </button>
                    <livewire:admin.gallery.create />
                </div>
                @include('includes.partials')
                To reorder, drag any gallery to the position you want.
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sortable-gallery">
                        @forelse($galleries as $gallery)
                            <livewire:admin.gallery.gallery-detail :gallery="$gallery" :key="$gallery->id" />
                                @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>