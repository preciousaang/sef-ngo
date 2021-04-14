<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $team;

    public $name;
    public $email;
    public $title;
    public $details;
    public $image;
    public $facebook_url;
    public $twitter_url;

    public $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'title' => 'nullable|string',
        'details' => 'required|string',
        'facebook_url' => 'nullable|url',
        'twitter_url' => 'nullable|url',
        'image' => 'nullable|image'
    ];

    public function render()
    {
        return view('livewire.admin.teams.edit');
    }

    public function update()
    {
        $this->validate();
        $this->team->name = $this->name;
        $this->team->email = $this->email;
        $this->team->title = $this->title;
        $this->team->details = $this->details;
        $this->team->facebook_url = $this->facebook_url;
        $this->team->twitter_url = $this->twitter_url;
        if ($this->image) {
            $this->team->image_url = basename($this->image->store('public/uploads'));
        }
        $this->team->save();
        session()->flash('success', 'Updated Successfully');
        return redirect()->route('admin-team-edit', $this->team->id);
    }

    public function mount()
    {
        $team = $this->team = Team::findOrFail(request()->id);
        $this->name = $team->name;
        $this->title = $team->title;
        $this->email = $team->email;
        $this->details = $team->details;
        $this->facebook_url = $team->facebook_url;
        $this->twitter_url = $team->twitter_url;
    }
}
