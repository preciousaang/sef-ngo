<?php

namespace App\Http\Livewire\Admin\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $image;

    protected $rules = [
        'title' => 'required|unique:partners',
        'image' => 'required|image'
    ];

    public function render()
    {
        return view('livewire.admin.partners.create');
    }

    public function addPartner()
    {
        $this->validate();
        $newPartner = Partner::create([
            'title' => $this->title,
            'image_url' => basename($this->image->store('public/uploads'))
        ]);
        session()->flash('success', 'Partner added');
        return redirect()->route('admin-partners');
    }
}
