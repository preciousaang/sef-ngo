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
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->project->active]);
    }

    public function render()
    {
        return view('livewire.admin.projects.detail');
    }
}
