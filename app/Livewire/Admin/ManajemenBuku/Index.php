<?php

namespace App\Livewire\Admin\ManajemenBuku;

use App\Models\KategoriBuku;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $kategoriBuku = KategoriBuku::latest()->paginate(5);
        return view('livewire.admin.manajemen-buku.index',['kategoriBuku' => $kategoriBuku]);
    }
}
