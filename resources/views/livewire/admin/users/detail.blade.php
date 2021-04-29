<tr id="{{$user->id}}">
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    <td>
        {{$user->active?'Active': 'Inactive'}}
    </td>

    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$user->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$user->id}}">
                <li>
                    <button wire:click="toggleStatus" class="dropdown-item">{{!$user->active ? 'Activate': 'Deactivate'}}</button>
                </li>
            </ul>
        </div>
    </td>
</tr>