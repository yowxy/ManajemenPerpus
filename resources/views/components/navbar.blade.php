<!-- Navbar -->
<nav class="bg-white shadow-md fixed w-full z-10" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">

      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center text-xl font-bold text-blue-600">
        Manajemen Perpustakaan
      </div>


      <!-- Menu (Desktop) -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="#" class="text-gray-700 hover:text-blue-600">Home</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">About</a>
        <a href="#" class="text-gray-700 hover:text-blue-600">Services</a>
        @auth
          <a href="#" class="text-gray-700 hover:text-blue-600">{{ Auth::user()->nama }}</a>
        @endauth
        @guest
          <a href="/login" class="text-gray-700 hover:text-blue-600">Login</a>
          <a href="/register" class="text-gray-700 hover:text-blue-600">Register</a>
        @endguest
      </div>

      <!-- Button (Mobile) -->
      <div class="flex items-center md:hidden">
        <button @click="open = !open" class="text-gray-700 focus:outline-none">
          <!-- Icon Hamburger -->
          <svg x-show="!open" xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon Close -->
          <svg x-show="open" xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Menu (Mobile) -->
  <div x-show="open" x-transition
       class="md:hidden bg-white shadow-md border-t">
    <div class="px-4 py-3 space-y-2">
      <a href="#" class="block text-gray-700 hover:text-blue-600">Home</a>
      <a href="#" class="block text-gray-700 hover:text-blue-600">About</a>
      <a href="#" class="block text-gray-700 hover:text-blue-600">Services</a>
      @auth
        <a href="#" class="block text-gray-700 hover:text-blue-600">{{ Auth::user()->nama }}</a>
      @endauth
      @guest
        <a href="#" class="block text-gray-700 hover:text-blue-600">Login</a>
        <a href="#" class="block text-gray-700 hover:text-blue-600">Register</a>
      @endguest
    </div>
  </div>

  {{-- @include('components.sidebar') --}}


</nav>

