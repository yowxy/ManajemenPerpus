<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $guarded = ['id'];

    public function peminjamen ()
    {
        return $this->belongsTo(peminjaman::class);
    }
}
