<div>
    <div class="w-64">
        @include('components.sidebar')
    </div>

    <!-- Konten utama -->
    <div class="flex-1 flex flex-col">

        <!-- Navbar -->
        @include('components.navbar')

        <main class="flex-1  ml-0 md:ml-64 p-20">
            <h1 class="text-4xl font-semibold mb-1">Dashboard</h1>
            @auth
            <p class="text-gray-600">Selamat datang {{ Auth::user()->nama }} ini adalah  sistem manajemen perpustakaan.</p>
            @endauth
            @guest
            <p class="text-gray-600">login dulu</p>

            @endguest

        </main>
    </div>
</div>
