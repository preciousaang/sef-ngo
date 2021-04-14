<tr id="{{$project->id}}">
    <td>{{$project->title}}</td>
    <td>
        {{$project->subtitle}}
    </td>
    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$project->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$project->id}}">
                <li>
                    <button wire:click="toggleStatus" class="dropdown-item">{{!$project->active ? 'Activate': 'Deactivate'}}</button>
                </li>
                <li>
                    <a href="{{route('admin-project-edit', $project->id)}}" type="button" class="dropdown-item">
                        Edit
                    </a>
                </li>
                <li><a href="{{route('admin-project-delete', $project->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li>
            </ul>
        </div>
    </td>
</tr>