<div class="row">
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">
                    Partners
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#newTeam" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="mdi mdi-plus"></i>&nbsp; Add Partner
                    </button>
                    <livewire:admin.partners.create />
                </div>
                @include('includes.partials')
                To reorder, drag any team member to the position you want.
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sortable-partner">
                        @forelse($partners as $partner)
                            <livewire:admin.partners.detail :partner="$partner" :key="$partner->id" />
                                @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>