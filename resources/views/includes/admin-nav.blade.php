<div class="card">
    <div class="card-header">
        <h5 class="text-center">{{auth()->user()->name}}</h5>
    </div>
    <div class="card-body">
        <div class="list-group list-group-flush">
            <a href="{{route('dashboard')}}" class="list-group-item">
                Home
            </a>
            <a class="list-group-item" href="{{route('admin-partners')}}">
                Partners
            </a>
            <a href="{{route('admin-team')}}" class="list-group-item">
                Teams
            </a>
            <a href="{{route('admin-projects')}}" class="list-group-item">
                Projects
            </a>
            <a href="{{route('admin-galleries')}}" class="list-group-item">
                Galleries
            </a>
            <a href="{{route('admin-news')}}" class="list-group-item">
                News
            </a>
            <a href="{{route('admin-users')}}" class="list-group-item">
                Manage Users
            </a>
            <a href="{{route('logout')}}" class="list-group-item">
                Logout
            </a>
        </div>
    </div>
</div>