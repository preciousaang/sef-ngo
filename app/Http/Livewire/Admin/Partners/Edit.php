<?php

namespace App\Http\Livewire\Admin\Partners;

use App\Models\Partner;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $partner;
    public $title;
    public $image;


    public function render()
    {
        return view('livewire.admin.partners.edit');
    }

    public function updatePartner()
    {
        $this->validate([
            'title' => ['required', Rule::unique('partners')->ignore($this->partner->id)],
            'image' => 'nullable|image'
        ]);
        $this->partner->title = $this->title;
        if ($this->image) {
            $this->partner->image_url = basename($this->image->store('public/uploads'));
        }
        $this->partner->save();
        session()->flash('success', 'Editted Successfully');
        return redirect()->route('admin-partner-edit', $this->partner->id);
    }

    public function mount()
    {
        $this->partner = Partner::findOrFail(request()->id);
        $this->title = $this->partner->title;
    }
}
