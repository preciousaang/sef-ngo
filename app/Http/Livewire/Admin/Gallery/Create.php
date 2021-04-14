<?php

namespace App\Http\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;

class Create extends Component
{
    public $title;

    protected $rules = [
        'title' => 'required|string|max:255|unique:galleries'
    ];

    public function render()
    {
        return view('livewire.admin.gallery.create');
    }

    public function addGallery()
    {
        $this->validate();
        Gallery::create([
            'title' => $this->title
        ]);
        session()->flash('success', 'Gallery Added Successfully');
        return redirect()->route('admin-galleries');
    }
}
