<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|exists:users',
        'password' => 'required'
    ];
    protected $messages = [
        'email.exists' => 'User does not exist'
    ];
    public function render()
    {
        return view('livewire.login');
    }

    public function doLogin()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if (Hash::check($this->password, $user->password)) {
            if (!(bool)$user->active) {
                $this->addError('email', 'You account is inactive');
                $this->password = "";
                return;
            }
            session()->flash('success', 'Login Successful');
            Auth::login($user);
            return redirect()->intended(route('dashboard'));
        } else {
            $this->addError('password', 'Incorrect Password');
            $this->password = "";
        }
    }
}
