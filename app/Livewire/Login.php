<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function login(){

        $this->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            // Successful login, redirect to the dashboard
            return redirect()->route('dashboard');
        } else {
            // Failed login attempt, show error message
          //  session()->flash('message', 'Email or Password is incorrect.');
            $this->addError('credentials', 'Email or Password is incorrect.');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
