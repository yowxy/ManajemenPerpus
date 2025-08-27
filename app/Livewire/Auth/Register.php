<?php

namespace App\Livewire\Auth;

use App\Models\anggota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{


    public $nama;
    public $email;
    public $nomor_telepon;
    public string $password;
    public $tanggal_bergabung;
    public $password_confirmation;
    public function render()
    {
        return view('livewire.auth.register');
    }

    public function mount()
    {
        $this->tanggal_bergabung = now()->format('Y-m-d');
    }

    protected $rules = ([
           'nama' => 'required|string',
            'email' => 'required|string|email',
            'nomor_telepon' => 'required|string',
            'password' => 'required|string|confirmed',
            'tanggal_bergabung' => 'required',
    ]);

    public function  register ()
    {
        $this->validate();
            $user = anggota::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'nomor_telepon' => $this->nomor_telepon,
            'password' => Hash::make($this->password),
            'role' => 'user',
            'tanggal_bergabung' => $this->tanggal_bergabung,
        ]);

Auth::login($user);
        return redirect()->route('dashboard');

    }


}
