<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $guarded = ['id'];
    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class);
    }

    public function kategori_buku()
    {
        return $this->hasMany(KategoriBuku::class);
    }
}
