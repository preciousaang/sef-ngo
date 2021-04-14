<?php

namespace App\Http\Livewire\Admin\Gallery;

use App\Models\Gallery;
use Livewire\Component;

class GalleryList extends Component
{
    public $galleries = [];
    public function render()
    {
        return view('livewire.admin.gallery.gallery-list');
    }

    public function mount(Gallery $gallery)
    {
        $this->galleries = $gallery->orderBy('position')->get();
    }
}
