<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $project;
    public $title;
    public $subtitle;
    public $detail;
    public $image;


    protected $rules = [
        'title' => 'required|string',
        'subtitle' => 'required|string',
        'detail' => 'required',
        'image' => 'nullable|image'
    ];

    public function render()
    {
        return view('livewire.admin.projects.edit');
    }

    public function updateProject()
    {
        $this->validate();
        $this->project->title = $this->title;
        $this->project->subtitle = $this->subtitle;
        $this->project->detail = $this->detail;
        if ($this->image) {
            $this->project->image_url = basename($this->image->store('public/uploads'));
        }
        $this->project->save();
        session()->flash('success', 'Updated Successfully');
        return redirect()->route('admin-project-edit', $this->project->id);
    }

    public function mount(Project $project)
    {
        $this->project = $project->findOrFail(request()->id);
        $this->title = $this->project->title;
        $this->subtitle = $this->project->subtitle;
        $this->detail = $this->project->detail;
    }
}
