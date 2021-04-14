<tr id="{{$team->id}}">
    <td>{{$team->name}}</td>
    <td>{{$team->title}}</td>
    <td>{{$team->email}}</td>
    <td>{{substr($team->details, 0, 10)}}...</td>
    <td>
        <img width="50" height="50" class="img-responsive rounded-circle" src="{{asset('storage/uploads/'.$team->image_url)}}" alt="">
    </td>
    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$team->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$team->id}}">
                <li>
                    <button wire:click="toggleStatus" class="dropdown-item">{{!$team->active ? 'Activate': 'Deactivate'}}</button>
                </li>
                <li>
                    <a href="{{route('admin-team-edit', $team->id)}}" type="button" class="dropdown-item">
                        Edit
                    </a>
                </li>
                <li><a href="{{route('admin-team-delete', $team->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li>
            </ul>
        </div>
    </td>
</tr>