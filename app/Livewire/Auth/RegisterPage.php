<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\models\User;

#[Title('Register - E-COM')]
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    //register user
    public function save(){
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        //save user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        //login user
        Auth()->login($user);

        //redirect to home
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
