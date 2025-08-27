<?php

namespace App\Livewire\Admin\ManajemenBuku;

use App\Models\buku;
use Livewire\Component;

class Create extends Component
{
    public $penerbit;
    public $nama_buku;
    public $penulis;
    public $tahun_terbit;
    public $Isbn;
    public $stock_buku;
    public $judul;
    public function render()
    {
        return view('livewire.admin.manajemen-buku.create');
    }

    public function mount ()
    {
        $this->generateIsbn();
    }

    public function generateIsbn()
    {
        $tanggalHariIni = now()->format('Ymd');

        $last = buku::whereDate('created_at', now())
            ->where('isbn', 'like', 'ISBN-' . $tanggalHariIni . '%')
            ->latest('id')
            ->first();

        if ($last && preg_match('/ISBN-' . $tanggalHariIni . '-(\d+)/', $last->kode_transaksi, $matches)) {
            $nextNumber = intval($matches[1]) + 1;
        } else {
            $nextNumber = 1;
        }

        $this->Isbn = 'ISBN-' . $tanggalHariIni . '-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
    }

    protected $rules =  ([
        'penerbit' => 'required|string',
        'nama_buku' => 'required|string',
        'penulis' => 'required|string',
        'Isbn' => 'required|string',
        'tahun_terbit' => 'required|date',
        'stock_buku' => 'required|integer',
        'judul' => 'required|string',
    ]);

    public function store ()
    {
        $this->validate();
        buku::create([
            'penerbit' =>  $this->penerbit,
            'nama_buku' => $this->nama_buku,
            'tahun_penerbit' => $this->tahun_terbit,
            'Isbn' => $this->Isbn,
            'tahun_terbit' => $this->tahun_terbit,
            'stock_buku' => $this->stock_buku,
            'judul'=> $this->judul,
        ]);


        $this->dispatch('barangMasuk-created');
        session()->flash('success', 'Barang masuk berhasil ditambahkan');
        $this->generateIsbn();
    }
}
