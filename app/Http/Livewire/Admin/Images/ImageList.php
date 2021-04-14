<?php

namespace App\Http\Livewire\Admin\Images;

use App\Models\Image;

use Livewire\Component;

class ImageList extends Component
{
    public $images = [];

    public function render()
    {
        return view('livewire.admin.images.image-list');
    }

    public function mount(Image $image)
    {
        $this->images = $image->where('gallery_id', request()->id)->orderBy('position')->get();
    }
}
