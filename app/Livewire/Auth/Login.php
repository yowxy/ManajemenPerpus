<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    #[Layout('layouts.app')]

    public function render()
    {
        return view('livewire.auth.login');
    }
}
