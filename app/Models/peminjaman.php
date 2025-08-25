<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $guarded = ['id'];
    public function anggota()
    {
        return $this->hasMany(anggota::class);
    }

    public function buku ()
    {
        return $this->hasMany(buku::class);
    }

    public function petugas()
    {
        return $this->hasMany(petugas::class);
    }
}
