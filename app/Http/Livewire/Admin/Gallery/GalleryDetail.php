<?php

namespace App\Http\Livewire\Admin\Gallery;

use Livewire\Component;

class GalleryDetail extends Component
{
    public $gallery;

    public function toggleStatus()
    {
        $status = (bool)$this->gallery->active;
        $this->gallery->active = !$status;
        $this->gallery->save();
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->gallery->active]);
    }
    public function render()
    {
        return view('livewire.admin.gallery.gallery-detail');
    }
}
