<?php

namespace App\Livewire\Admin\ManajemenBuku;

use App\Models\KategoriBuku;
use Livewire\Component;

class CreateKategori extends Component
{

    public $nama_kategori;
    public $deskripsi;
    public function render()
    {
        return view('livewire.admin.manajemen-buku.create-kategori');
    }

    protected $rules = ([
        'nama_kategori' => 'required|string',
        'deskripsi' => 'required|string',
    ]);

    public function store()
    {
        $this->validate();
        KategoriBuku::create([
            'nama_kategori' => $this->nama_kategori,
            'deskripsi' => $this->deskripsi,
        ]);
        $this->resetValidation();
         session()->flash('success', 'Barang masuk berhasil ditambahkan');
    }
}
