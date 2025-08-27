<div>
    @include('components.navbar')
    @include('components.sidebar')

    <main class="flex-1 ml-0 md:ml-64 p-20">
        <h1 class="text-3xl font-bold mb-4">Manajemen Buku</h1>

        @auth
            <p class="text-gray-600 mb-6">Selamat datang {{ Auth::user()->nama }}, ini adalah tampilan manajemen buku.</p>

            <!-- Tombol tambah buku -->
          <livewire:admin.manajemen-buku.create />

            <!-- Tabel daftar buku -->
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="py-3 px-4 border">No</th>
                            <th class="py-3 px-4 border">Judul</th>
                            <th class="py-3 px-4 border">Penulis</th>
                            <th class="py-3 px-4 border">Penerbit</th>
                            <th class="py-3 px-4 border">Tahun</th>
                            <th class="py-3 px-4 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse($bukus as $index => $buku) --}}
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border text-center">
                                    <a href=""
                                       class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                        Edit
                                    </a>
                                    <form action="" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 ml-2.5"
                                            onclick="return confirm('Yakin ingin menghapus buku ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {{-- @empty --}}
                            <tr>
                                <td colspan="6" class="text-center py-4 text-gray-500">
                                    Belum ada data buku.
                                </td>
                            </tr>
                        {{-- @endforelse --}}
                    </tbody>
                </table>
            </div>
        @endauth

        @guest
            <p class="text-gray-600">Silakan <a href="{{ route('login') }}" class="text-blue-600">login</a> terlebih dahulu untuk mengakses manajemen buku.</p>
        @endguest
    </main>
</div>
