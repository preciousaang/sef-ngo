<?php

namespace App\Http\Livewire\Admin\Projects;

use Livewire\Component;

class Detail extends Component
{
    public $project;

    public function toggleStatus()
    {
        $status = (bool)$this->project->active;
        $this->project->active = !$status;
        $this->project->save();
        session()->flash('info', 'Status Changed');
    }

    public function render()
    {
        return view('livewire.admin.projects.detail');
    }
}
