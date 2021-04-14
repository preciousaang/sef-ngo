<?php

namespace App\Http\Livewire\Admin\Gallery;

use Livewire\Component;

class GalleryDetail extends Component
{
    public $gallery;
    public function render()
    {
        return view('livewire.admin.gallery.gallery-detail');
    }
}
