<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects = [];
    public function render()
    {
        return view('livewire.admin.projects.project-list');
    }

    public function mount(Project $project)
    {
        $this->projects = $project->orderBy('position')->get();
    }
}
