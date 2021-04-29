<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $detail;
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'subtitle' => 'required|string',
        'detail' => 'required|string',
        'image' => 'required|image'
    ];
    public function render()
    {
        return view('livewire.admin.projects.create');
    }

    public function addProject()
    {
        $this->validate();
        $newProject = Project::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'detail' => $this->detail,
            'image_url' => basename($this->image->store('public/uploads'))
        ]);
        if ($newProject) {
            session()->flash('success', 'Project added successfully');
            return redirect()->route('admin-projects');
        }
    }
}
