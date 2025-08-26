<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class anggota extends Authenticatable
{
    protected $table = 'anggotas';
    protected $guarded = ['id'];

    use Notifiable;

    public $rememberTokenName = false;


    public function peminjamen ()
    {
        return $this->belongsTo(peminjaman::class);
    }


       protected $hidden = [
        'password',
        'remember_token',
    ];
}
