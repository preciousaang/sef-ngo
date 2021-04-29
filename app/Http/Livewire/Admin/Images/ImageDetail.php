<?php

namespace App\Http\Livewire\Admin\Images;

use Livewire\Component;

class ImageDetail extends Component
{
    public $image;

    public function toggleStatus()
    {
        $status = (bool)$this->image->active;
        $this->image->active = !$status;
        $this->image->save();
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->image->active]);
    }


    public function render()
    {
        return view('livewire.admin.images.image-detail');
    }
}
