<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBPOM di Mataram</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>

<body class="font-sans bg-gradient-to-bl from-green-400 to-blue-400 text-white min-h-screen flex flex-col">
    <header class="text-center bg-cover bg-center">
        <div class="inset-0 bg-black bg-opacity-70 flex items-center justify-center">
            <div class="text-center p-8">
                <div class="mb-4">
                    <img src="{{ asset('images/bpomri_without_label.png') }}" alt="Logo" class="w-24 h-auto mx-auto">
                </div>
                {{-- <h1 class="text-4xl font-extrabold text-shadow">Selamat Datang di Balai Besar POM di Mataram</h1> --}}
                <x-simandalika-title />
                <p class="text-xl text-shadow">Sistem Monitoring Digitalisasi Aplikasi Terpadu Balai Besar POM di
                    Mataram</p>
                {{-- <a href="{{ route('dashboard') }}" class="flex justify-center mt-4 w-fit mx-auto">
                    <x-button-enter />
                </a> --}}
            </div>
        </div>
    </header>
    <div class="bg-black bg-opacity-80 py-1 text-center overflow-hidden whitespace-nowrap box-border">
    </div>

    <main class="container mx-auto flex flex-wrap justify-center p-8 flex-1">

        @foreach ($data as $site)
            <x-card title='{{ $site->name }}' id="{{ $site->id }}" link="{{ $site->link }}"
                desc="{{ $site->desc ?: '-' }}" logo="{{ $site->logo_path }}" pic="{{ $site->pic }}"
                clicks="{{ $site->clicks }}" />
        @endforeach

    </main>
    <footer class="bg-black bg-opacity-70 text-center py-4 text-white">
        <p>&copy; 2024 BBPOM di Mataram. All rights reserved.</p>
    </footer>
    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
</body>

</html>
