<?php

namespace App\Http\Livewire\Admin\Images;

use Livewire\Component;

class ImageDetail extends Component
{
    public $image;
    public function render()
    {
        return view('livewire.admin.images.image-detail');
    }
}
