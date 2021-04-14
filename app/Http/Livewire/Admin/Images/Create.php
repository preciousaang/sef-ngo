<?php

namespace App\Http\Livewire\Admin\Images;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $detail;
    public $gallery_id;

    protected $rules = [
        'title' => 'required|string|max:70',
        'image' => 'required|image',
        'detail' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.admin.images.create');
    }

    public function addImage()
    {
        $this->validate();
        Image::create([
            'gallery_id' => $this->gallery_id,
            'title' => $this->title,
            'detail' => $this->detail,
            'image_url' => basename($this->image->store('public/uploads'))
        ]);
        session()->flash('success', 'Image added to gallery successfully');
        return redirect()->route('admin-gallery-edit', $this->gallery_id);
    }

    public function mount()
    {
        $this->gallery_id = request()->id;
    }
}
