<tr id="{{$gallery->id}}">
    <td>{{$gallery->title}}</td>
    <td>
        {{$gallery->active?'Active': 'Inactive'}}
    </td>
    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$gallery->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$gallery->id}}">
                <li>
                    <button wire:click="toggleStatus" class="dropdown-item">{{!$gallery->active ? 'Activate': 'Deactivate'}}</button>
                </li>
                <li>
                    <a href="{{route('admin-gallery-edit', $gallery->id)}}" type="button" class="dropdown-item">
                        Edit
                    </a>
                </li>
                {{-- <li><a href="{{route('admin-gallery-delete', $gallery->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li> --}}
            </ul>
        </div>
    </td>
</tr>