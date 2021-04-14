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
        session()->flash('info', 'Status Changed');
    }


    public function render()
    {
        return view('livewire.admin.partners.detail');
    }
}
