<?php

namespace App\Http\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public $gallery;
    public $title;

    public function render()
    {
        return view('livewire.admin.gallery.edit');
    }

    public function updateGallery()
    {
        $this->validate([
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique('galleries')->ignore($this->gallery->id),
            ]
        ]);

        $this->gallery->title = $this->title;
        $this->gallery->save();
        session()->flash('success', 'Updated successfully');
        return redirect()->route('admin-gallery-edit', $this->gallery->id);
    }

    public function mount(Gallery $gallery)
    {
        $this->gallery = $gallery->findOrFail(request()->id);
        $this->title = $this->gallery->title;
    }
}
