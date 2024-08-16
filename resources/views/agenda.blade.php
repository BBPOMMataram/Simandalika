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
                {{-- <div class="mb-4"> --}}
                    <img src="{{ asset('images/bpomri_without_label.png') }}" alt="Logo"
                        class="w-14 h-auto mx-auto">
                {{-- </div> --}}
                {{-- <h1 class="text-4xl font-extrabold text-shadow">Selamat Datang di Balai Besar POM di Mataram</h1> --}}
            </div>
            <x-agenda-title />
        </div>
    </header>
    <div class="bg-black bg-opacity-80 py-1 text-center overflow-hidden whitespace-nowrap box-border">
    </div>

    <main class="mx-10 my-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <table class="table-auto w-full text-left text-gray-200">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 border-b-2 border-gray-600">No</th>
                        <th class="px-4 py-2 border-b-2 border-gray-600">Tanggal</th>
                        <th class="px-4 py-2 border-b-2 border-gray-600">Kegiatan</th>
                        <th class="px-4 py-2 border-b-2 border-gray-600">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agenda as $item)
                    <tr class="bg-gray-600 odd:bg-gray-700 hover:bg-gray-700">
                        <td class="px-4 py-2 border-b border-gray-600">{{ ++$loop->index }}</td>
                        <td class="px-4 py-2 border-b border-gray-600 whitespace-nowrap">{{ $item->tanggal ? $item->tanggal->isoFormat('dddd, D MMMM YYYY') : '-' }}</td>
                        <td class="px-4 py-2 border-b border-gray-600">{{ $item->kegiatan }}</td>
                        <td class="px-4 py-2 border-b border-gray-600">{{ $item->tempat }}</td>
                    </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
    
    
    <footer class="bg-black bg-opacity-70 text-center py-4 text-white">
        <p>&copy; 2024 BBPOM di Mataram. All rights reserved.</p>
    </footer>
</body>

</html>
