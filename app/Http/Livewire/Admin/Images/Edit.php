<?php

namespace App\Http\Livewire\Admin\Images;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $title;
    public $imageFile;
    public $detail;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:100',
        'detail' => 'required|string',
        'imageFile' => 'nullable|image'
    ];

    public function render()
    {
        return view('livewire.admin.images.edit');
    }

    public function mount(Image $image)
    {
        $this->image = $image->find(request()->id);
        $this->title = $this->image->title;
        $this->detail = $this->image->detail;
    }

    public function updateImage()
    {
        $this->validate();
        $this->image->title = $this->title;
        $this->image->detail = $this->detail;
        if ($this->imageFile) {
            $this->image->image_url = basename($this->imageFile->store('public/uploads'));
        }
        $this->image->save();
        session()->flash('success', 'Updated Successfully');
        return redirect()->route('admin-image-edit', $this->image->id);
    }
}
