<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - BBPOM di Mataram</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-gradient-to-r from-green-500 to-blue-500 text-white min-h-screen flex flex-col">
    <header class="text-center bg-cover bg-center">
        <div class="inset-0 bg-black bg-opacity-70 flex items-center justify-center">
            <div class="text-center p-8">
                <div class="mb-4">
                    <img src="{{ asset('images/bpomri_without_label.png') }}" alt="Logo"
                        class="w-14 h-auto mx-auto">
                </div>
                {{-- <h1 class="text-4xl font-extrabold text-shadow">Selamat Datang di Balai Besar POM di Mataram</h1> --}}
                <x-agenda-title />
            </div>
        </div>
    </header>
    <div class="bg-black bg-opacity-80 py-1 text-center overflow-hidden whitespace-nowrap box-border">
    </div>

    <main class="container mx-auto flex flex-wrap justify-center p-8 flex-1">

        <x-card title="Percepat" link="https://percepat.bbpommataram.id"
            desc="Percepat adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, animi?" />

        <x-card title="E Tamu" link="https://e-tamu.bbpommataram.id"
            desc="E Tamu adalah dolor nulla excepturi quisquam necessitatibus tenetur cum nemo perspiciatis officia sunt nobis culpa, fugiat, aliquid quam optio!" />

        <x-card title="Si Proval" link="https://siproval.bbpommataram.id"
            desc="Si Proval adalah dolor nulla excepturi quisquam necessitatibus tenetur cum nemo perspiciatis aliquid quam optio!" />

        <x-card title="Si Mantan" link="https://simantan.bbpommataram.id"
            desc="Si Mantan adalah excepturi quisquam necessitatibus tenetur cum nemo perspiciatis aliquid quam optio!" />

        <x-card title="Si Jelapp" link="https://sijelapp.bbpommataram.id"
            desc="Si Jelapp adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. excepturi quisquam necessitatibus tenetur cum nemo perspiciatis aliquid quam optio!" />

    </main>
    <footer class="bg-black bg-opacity-70 text-center py-4 text-white">
        <p>&copy; 2024 BBPOM di Mataram. All rights reserved.</p>
    </footer>
</body>

</html>
