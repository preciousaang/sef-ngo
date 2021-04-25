<?php

namespace App\Http\Livewire\Admin\Partners;

use Livewire\Component;

class Detail extends Component
{
    public $partner;


    public function toggleStatus()
    {
        $status = (bool)$this->partner->active;
        $this->partner->active = !$status;
        $this->partner->save();
        $this->dispatchBrowserEvent('toggleStatus', ['status' => (bool)$this->partner->active]);
    }


    public function render()
    {
        return view('livewire.admin.partners.detail');
    }
}
