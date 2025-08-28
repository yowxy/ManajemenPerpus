<div>
    <div class="px-4 sm:px-6 md:px-8 pt-8">

        <div x-data="{ isFormVisible: false }"
            x-init="window.addEventListener('show-form', () => { isFormVisible = true })" :class="{ 'space-y-5': isFormVisible }"   >

            <div class="flex justify-start">
                <button @click="isFormVisible = !isFormVisible" type="button"
                    class="inline-flex items-center px-4 py-2 text-sm font-medium border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors m-6"
                    :class="{ 'text-white bg-blue-600 hover:bg-blue-700 border-transparent focus:ring-blue-500': !
                isFormVisible, 'text-gray-700  hover:bg-blue-700   bg-blue-600 dark:text-gray-200 dark:border-gray-600 ': isFormVisible }">
                    <span x-show="!isFormVisible" class="inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Tampilkan Form</span>
                    </span>
                    <span x-show="isFormVisible" style="display: none;" class="inline-flex items-center">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                        <span>Tutup Form</span>
                    </span>
                </button>
            </div>
            <div x-show="isFormVisible" x-transition>
                <div class="bg-white  shadow rounded-lg p-12 mb-8">

                    <h1 class="text-2xl font-bold text-blue-500  mb-2">Tambah Kategori Buku Baru</h1>
                    <p class="text-blue-500 mb-6">Isi form di bawah ini untuk menambahkan Kategori Buku
                        baru.
                    </p>

                    <form wire:submit="store" class="space-y-5">

                        <label for="nama_kategori"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Nama Kategori</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>

                            </span>
                            <input type="text" wire:model="nama_kategori"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('nama_kategori')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Deskripsi Buku </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>

                            </span>
                            <input type="text" wire:model="deskripsi"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('deskri[si]')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="flex justify-end gap-3">
                            {{-- <a href="{{ route('barangs.index') }}"
                                class="inline-block px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 dark:bg-gray-600 dark:text-white dark:hover:bg-gray-500">
                                Batal
                            </a> --}}
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('success', () => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Barang berhasil ditambahkan',
                timer: 2000,
                showConfirmButton: false
            });
        });
</script>
@endpush
