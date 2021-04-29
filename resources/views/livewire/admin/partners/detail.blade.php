<tr id="{{$partner->id}}">
    <td>{{$partner->title}}</td>
    <td>
        <img width="50" height="50" class="img-responsive rounded-circle" src="{{asset('storage/uploads/'.$partner->image_url)}}" alt="">
    </td>
    <td>
        {{$partner->active?'Active': 'Inactive'}}
    </td>
    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$partner->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$partner->id}}">
                <li>
                    <button wire:click="toggleStatus" class="dropdown-item">{{!$partner->active ? 'Activate': 'Deactivate'}}</button>
                </li>
                <li>
                    <a href="{{route('admin-partner-edit', $partner->id)}}" type="button" class="dropdown-item">
                        Edit
                    </a>
                </li>
                {{-- <li><a href="{{route('admin-partner-delete', $partner->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li> --}}
            </ul>
        </div>
    </td>
</tr>