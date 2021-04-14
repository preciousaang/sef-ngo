<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $title;
    public $details;
    public $image;
    public $facebook_url;
    public $twitter_url;

    protected $rules = [
        'name' => 'required|string',
        'title' => 'nullable|string',
        'email' => 'required|email',
        'details' => 'required|string',
        'image' => 'required|image',
        'facebook_url' => 'nullable|url',
        'twitter_url' => 'nullable|url'
    ];

    public function render()
    {
        return view('livewire.admin.teams.create');
    }

    public function addTeam()
    {
        $this->validate();

        $newTeam = Team::create([
            'name' => $this->name,
            'title' => $this->title,
            'email' => $this->email,
            'details' => $this->details,
            'image_url' => basename($this->image->store('public/uploads')),
            'facebook_url' => $this->facebook_url,
            'twitter_url' => $this->twitter_url
        ]);

        if ($newTeam) {
            $this->dispatchBrowserEvent('newTeam', true);
            session()->flash('success', 'Team Member added successfully');
            return redirect()->route('admin-team');
        }
    }
}
