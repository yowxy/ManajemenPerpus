<div>
    @include('components.navbar')
    @include('components.sidebar')

    <main class="flex-1  ml-0 md:ml-64 p-20">
            <h1 class="text-4xl font-semibold mb-1">Dashboard</h1>
            @auth
            <p class="text-gray-600">Selamat datang {{ Auth::user()->nama }} ini adalah  tampilan manajemen buku.</p>
            @endauth
            @guest
            <p class="text-gray-600">login dulu</p>

            @endguest

        </main>
</div>
