<div class="w-screen h-screen bg-gradient-to-br  flex items-center justify-center bg-gray-700">
  <div class="bg-white shadow-xl rounded-2xl p-10 w-full max-w-md border border-gray-200">
    <div class="flex flex-col items-center mb-6">
      <div class="bg-blue-100 text-blue-600 rounded-full p-3 mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
        </svg>
      </div>
      <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
      <p class="text-gray-500 text-sm">Login to your admin dashboard</p>
    </div>

    <form wire:submit="login">
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input wire:model="nama" type="text" placeholder="isi nama "
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">email</label>
        <input wire:model="email" type="email" placeholder="isi email ini"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
        <input wire:model="email" type="text" placeholder="isi nomor telepon"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
      </div>
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input wire:model="password" type="password" placeholder="••••••••"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
      </div>
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input wire:model="password" type="password" placeholder="••••••••"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required />
      </div>

    <button type="submit"
    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200 shadow-sm"
    wire:loading.attr="disabled">
    <span wire:loading.remove>Login</span>
    <span wire:loading class="flex items-center justify-center">
        <svg class="animate-spin h-5 w-5 text-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
                d="M4 12a8 8 0 018-8v8H4z"></path>
        </svg>
    </span>
</button>

    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Belum punya akun?
      <a wire:navigate href="/l ogin" class="text-blue-600 hover:underline font-medium">Login</a>
    </p>
  </div>

</div>


<script>
  window.addEventListener('login-error', () => {
        Swal.fire({
            icon: 'error',
            title: 'Gagal Login!',
            text: 'Username atau Password yang Anda masukkan salah.',
            timer: 3000,
            showConfirmButton: false
        });
    });
</script>
