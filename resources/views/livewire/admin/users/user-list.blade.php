<h3>Manage User</h3>
<div class="row">
    <div>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">
                    Users
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <button data-bs-toggle="modal" data-bs-target="#newUser" class="btn btn-sm btn-outline-primary mb-3">
                        <i class="mdi mdi-plus"></i>&nbsp; Add User
                    </button>
                    <livewire:admin.users.create />
                </div>
                @include('includes.partials')
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Date Joined</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <livewire:admin.users.detail :user="$user" :key="$user->id" />
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>