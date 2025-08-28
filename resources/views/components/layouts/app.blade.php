<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @livewireStyles
    @stack('scripts')
</head>
<body class="antialiased bg-gray-100">
    <div class="min-h-screen">
        {{-- Navbar / Sidebar bisa disini --}}
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>
