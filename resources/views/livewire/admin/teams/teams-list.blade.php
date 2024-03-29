<h3>Setup Team</h3>
<div class="row">
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">
                    Team
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#newTeam" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="mdi mdi-plus"></i>&nbsp; Add Team
                    </button>
                    <livewire:admin.teams.create />
                </div>
                @include('includes.partials')
                To reorder, drag any team member to the position you want.
                <div class="table-responsive" style="min-height: 100vh;">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>E-mail</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="sortable-team">
                        @foreach($teams as $team)
                            <livewire:admin.teams.teams-detail :team="$team" :key="$team->id" />
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>