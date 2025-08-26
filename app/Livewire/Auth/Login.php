<?php

namespace App\Livewire\Auth;

use App\Models\anggota;
use Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    // #[Layout('layouts.app')]

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login ()
    {
        $this->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $anggota = anggota::where('email', $this->email)->first();

        if($anggota && Hash::check($this->password, $anggota->password)){
            Auth::login($anggota);
            session()->regenerate();
            return redirect()->route('dashboard');
        }
        $this->dispatch('login-success');
        


    }
}
