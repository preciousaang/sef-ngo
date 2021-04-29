<div class="d-flex justify-content-end">
    <button data-bs-toggle="modal" data-bs-target="#newTeam" class="btn btn-sm btn-outline-primary mb-3">
        <i class="mdi mdi-plus"></i>&nbsp; Add Image
    </button>
    <livewire:admin.images.create />
</div>
To reorder, drag any image to the position you want.
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <td>Detail(Excerpt)</td>
            <td>Status</td>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="sortable-images">
        @forelse($images as $image)
            <livewire:admin.images.image-detail :image="$image" :key="$image->id" />
                @empty
        @endforelse
    </tbody>
</table>