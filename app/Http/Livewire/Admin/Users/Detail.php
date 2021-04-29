<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class Detail extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.users.detail');
    }

    public function toggleStatus()
    {
        $this->user->active = !$this->user->active;
        $this->user->save();
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->user->active]);
    }
}
