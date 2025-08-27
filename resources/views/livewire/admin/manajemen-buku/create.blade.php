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

                    <h1 class="text-2xl font-bold text-blue-500  mb-2">Tambah Buku Baru</h1>
                    <p class="text-blue-500 mb-6">Isi form di bawah ini untuk menambahkan Buku
                        baru.
                    </p>

                    <form wire:submit="store" class="space-y-5">

                        <label for="nama_buku"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Nama Buku</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                </svg>

                            </span>
                            <input type="text" wire:model="nama_buku"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('nama_buku')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <label for="judul"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Judul Buku</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>

                            </span>
                            <input type="text" wire:model="judul"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('judul')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <label for="penulis"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Penulis</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                </svg>

                            </span>
                            <input type="text" wire:model="penulis"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('penulis')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <label for="penerbit"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Penerbit</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                            </span>
                            <input type="text" wire:model="penerbit"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('penerbit')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <label for="tahun_terbit"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Tahun Terbit</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>

                            </span>
                            <input type="date" wire:model="tahun_terbit"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('tahun_terbit')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <label for="Isbn"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">ISBN</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>

                            </span>
                            <input type="text" wire:model="Isbn"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input" readonly>
                            @error('Isbn')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>



                        <label for="name"
                            class="block mb-2 text-sm font-medium text-blue-500  md:mt-4">Stok Buku</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-blue-500 bg-white border rounded-e-0 border-e-0 rounded-s-md ">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859M12 3v8.25m0 0-3-3m3 3 3-3" />
                                </svg>

                            </span>
                            <input type="number" wire:model="stock_buku"
                                class="rounded-none rounded-e-lg border  focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  bg-blue-600 text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="please fill this input">
                            @error('kode_js')
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


<script>
    window.addEventListener('barangMasuk-created', () => {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Barang berhasil ditambahkan',
                timer: 2000,
                showConfirmButton: false
            });
        });
</script>
