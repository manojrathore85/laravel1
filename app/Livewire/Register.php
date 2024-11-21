<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class Register extends Component
{
    
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $profile_image;
    
   

    public function save(){
        $this->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8|max:16',
            'confirm_password'=> 'required|same:password',
           // 'profile_image'=> 'required|min',
        ]);
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
            //'profile_image'=>$this->profile_image,
        ]);

        Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        


        session()->flash('message', "You have been registerd successfully");

        return $this->redirectRoute('dashboard');

    }
    public function edit(){

    }
    public function render(){
        return view('livewire.register');
    }
}
