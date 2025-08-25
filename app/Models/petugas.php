<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $guarded = ['id'];
    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class);
    }

}
