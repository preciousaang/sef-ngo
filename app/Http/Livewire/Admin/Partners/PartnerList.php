<?php

namespace App\Http\Livewire\Admin\Partners;

use App\Models\Partner;
use Livewire\Component;

class PartnerList extends Component
{
    public $partners = [];
    public function render()
    {
        return view('livewire.admin.partners.partner-list');
    }

    public function mount(Partner $partners)
    {
        $this->partners = $partners->orderBy('position')->get();
    }
}
