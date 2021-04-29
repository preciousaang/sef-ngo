<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public $users = [];
    public function render()
    {
        return view('livewire.admin.users.user-list');
    }

    public function mount(User $user)
    {
        $this->users = $user->all();
    }
}
