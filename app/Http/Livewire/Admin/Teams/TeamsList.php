<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Models\Team;
use Livewire\Component;

class TeamsList extends Component
{
    public $teams = [];
    public $itemToEdit;
    public $updateItem = false;
    public function render()
    {
        return view('livewire.admin.teams.teams-list');
    }

    public function editItem()
    {
        $this->updateItem = true;
        // $this->itemToEdit = $item;
    }



    public function mount()
    {
        $teams = Team::orderBy('position')->get();
        $this->teams = $teams;
    }
}
