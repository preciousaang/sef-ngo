<h3>Setup Project</h3>
<div class="row">
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">
                    Project
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#newTeam" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="mdi mdi-plus"></i>&nbsp; Add Project
                    </button>
                    <livewire:admin.projects.create />
                </div>
                @include('includes.partials')
                To reorder, drag any project to the position you want.
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Detail(Excerpt)</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="sortable-project">
                        @forelse($projects as $project)
                            <livewire:admin.projects.detail :project="$project" :key="$project->id" />
                                @empty
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>