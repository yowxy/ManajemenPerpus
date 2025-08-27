<div class="w-screen h-screen bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center">
  <div class="bg-white shadow-xl rounded-2xl p-10 w-full max-w-2xl border border-gray-200">

    <!-- Header -->
    <div class="flex flex-col items-center mb-6">
      <div class="bg-blue-100 text-blue-600 rounded-full p-3 mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M8.25 21v-4.875c0-.621.504-1.125
            1.125-1.125h2.25c.621 0 1.125.504
            1.125 1.125V21m0 0h4.5V3.545M12.75
            21h7.5V10.75M2.25 21h1.5m18
            0h-18M2.25 9l4.5-1.636M18.75
            3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75
            7.364V3h-3v18m3-13.636 10.5-3.819" />
        </svg>
      </div>
      <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
      <p class="text-gray-500 text-sm">Login to your admin dashboard</p>
    </div>

    <!-- Form -->
    <form wire:submit="register" class="space-y-4">
      <!-- Nama, Email, Nomor Telepon sejajar -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
          <input wire:model="nama" type="text" placeholder="Masukkan nama"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />

            @error('nama')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input wire:model="email" type="email" placeholder="Masukkan email"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
              @error('email')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
          <input wire:model="nomor_telepon" type="text" placeholder="Masukkan nomor telepon"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
              @error('nomor_telepon')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Begabung</label>
          <input wire:model="tanggal_bergabung" type="datetime" placeholder="Masukkan nomor telepon"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required  readonly/>
              @error('tanggal_bergabung')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
      </div>

      <!-- Password & Konfirmasi Password di bawah -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
          <input wire:model="password" type="password" placeholder="••••••••"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
              @error('password')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
          <input wire:model="password_confirmation" type="password" placeholder="••••••••"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
              @error('password_confirmation')
               <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg
        transition duration-200 shadow-sm flex items-center justify-center"
        wire:loading.attr="disabled">
        <span wire:loading.remove>Register</span>
        <span wire:loading>
          <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10"
              stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8v8H4z"></path>
          </svg>
        </span>
      </button>
    </form>

    <!-- Footer -->
    <p class="text-center text-sm text-gray-500 mt-6">
      sudah punya akun ?
      <a wire:navigate href="/login" class="text-blue-600 hover:underline font-medium">Login</a>
    </p>
  </div>
</div>

<!-- Alert -->
<script>
  window.addEventListener('login-error', () => {
    Swal.fire({
      icon: 'error',
      title: 'Gagal Login!',
      text: 'Email atau Password yang Anda masukkan salah.',
      timer: 3000,
      showConfirmButton: false
    });
  });
</script>
