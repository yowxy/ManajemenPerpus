<?php

namespace App\Livewire\Admin\ManajemenBuku;

use App\Models\KategoriBuku as ModelsKategoriBuku;
use Livewire\Component;

class KategoriBuku extends Component
{
    public function render()
    {
        $kategoriBuku = ModelsKategoriBuku::latest()->paginate(5);
        return view('livewire.admin.manajemen-buku.kategori-buku',['kategoriBuku' => $kategoriBuku]);
    }
}
