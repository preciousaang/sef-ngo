<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'name' => 'required|string|max:255',
        'password' => 'required|string|min:8|max:80|confirmed',
    ];
    public function render()
    {
        return view('livewire.admin.users.create');
    }

    public function addUser()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'password' => bcrypt($this->password),
            'email' => $this->email
        ]);
        session()->flash('success', 'Users Added Successfully');
        $this->redirect(route('admin-users'));
    }
}
