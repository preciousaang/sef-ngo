<tr id="{{$image->id}}">
    <td>{{$image->title}}</td>
    <td>
        <img class="img-responsive rounded" width="300" height="250" src="{{asset('storage/uploads/'.$image->image_url)}}">
    </td>
    <td>
        {{substr($image->detail, 0, 100)}}....
    </td>
    <td>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop{{$image->id}}" class="btn btn-sm dropdown-toggle btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-cog"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop{{$image->id}}">
                <li>
                    <a href="{{route('admin-image-edit', $image->id)}}" type="button" class="dropdown-item">
                        Edit
                    </a>
                </li>
                <li><a href="{{route('admin-image-delete', $image->id)}}" onclick="return confirm('Are you sure')" class="dropdown-item">Delete</a></li>
            </ul>
        </div>
    </td>
</tr>