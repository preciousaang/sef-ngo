<?php

namespace App\Http\Livewire\Admin\Teams;

use Livewire\Component;

class TeamsDetail extends Component
{
    public $team;

    public function toggleStatus()
    {
        $status = (bool)$this->team->active;
        $this->team->active = !$status;
        $this->team->save();
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->team->active]);
    }

    public function render()
    {
        return view('livewire.admin.teams.teams-detail');
    }
}
