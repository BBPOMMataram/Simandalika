<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBPOM di Mataram</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
</head>

<body class="font-sans bg-gradient-to-bl from-green-100 to-white min-h-screen flex flex-col">
    <nav class="bg-black hidden md:flex justify-center gap-8 p-2 text-green-100 fixed top-0 w-full z-10">
        <div class="flex items-center gap-1">
            <span class="material-symbols-outlined">
                mail
            </span>
            <span>bpom_mataram@pom.go.id</span>
        </div>
        <div class="flex items-center gap-1">
            <span class="material-symbols-outlined">
                phone_in_talk
            </span>
            <span>+6287871500533</span>
        </div>
        <div class="flex items-center gap-1">
            <span class="material-symbols-outlined">
                location_on
            </span>
            <span>Mataram, NTB</span>
        </div>
    </nav>
    <header class="text-center bg-cover bg-center mt-10">
        <div class="flex w-full min-h-[calc(100vh-3rem)] flex-col lg:flex-row">
            <div class="flex items-center justify-center flex-1">
                <div class="text-center p-8">
                    <div class="mb-4">
                        <img src="{{ asset('images/bpomri_without_label.png') }}" alt="Logo"
                            class="w-24 h-auto mx-auto">
                    </div>
                    <x-simandalika-title />
                    <p class="text-xl text-shadow">Sistem Monitoring Digitalisasi Aplikasi Terpadu<br />Balai Besar POM
                        di Mataram</p>
                    <div class="mt-8 animate-bounce">
                        <a href="#content">
                            <span class="material-symbols-outlined !text-[30px]">
                                arrow_downward
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex p-4 items-center">
                <iframe width="100%" height="315"
                    src="https://www.youtube.com/embed/UZJQsEHFEdA?autoplay=1&mute=1&loop=1&playlist=UZJQsEHFEdA"
                    title="YouTube video 1" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen contro class="w-full h-80 rounded">
                </iframe>
            </div>
        </div>
    </header>

    <main id="content">
        <h2 class="text-2xl md:text-4xl font-bold text-center mt-12 mb-2">INOVASI BBPOM DI MATARAM</h2>
        <p class="mx-auto text-center text-gray-600 max-w-[27rem]">Inovasi yang kami hadirkan untuk memudahkan masyarakat dalam mengakses informasi dan layanan kami.</p>
        <div class="container mx-auto flex flex-wrap justify-center px-8 flex-1">
            @foreach ($data as $site)
                <x-card title='{{ $site->name }}' id="{{ $site->id }}" link="{{ $site->link }}"
                    desc="{{ $site->desc ?: '-' }}" logo="{{ $site->logo_path }}" pic="{{ $site->pic }}"
                    clicks="{{ $site->clicks }}" />
            @endforeach
        </div>
    </main>
    <footer class="bg-blue-500 text-green-100">
        <div class="max-w-7xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
            <!-- Logo dan Identitas -->
            <div class="flex flex-col items-center text-center md:items-start md:text-left">
                <img src="{{ asset('images/bpomri_without_label.png') }}" alt="Logo" width="70" class="mb-2">
                <span class="font-bold text-lg">Balai Besar POM di Mataram</span>
                <span>Jl. Catur Warga, Kota Mataram, NTB. 83121</span>
            </div>

            <!-- Link Penting -->
            <div>
                <h3 class="font-bold text-white mb-2">Link Penting</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="https://www.pom.go.id/" target="_blank" class="hover:underline">BPOM RI</a></li>
                    <li><a href="https://mataram.pom.go.id/" target="_blank" class="hover:underline">Subsite BBPOM di
                            Mataram</a>
                    </li>
                </ul>
            </div>

            <!-- Google Maps -->
            <div>
                <h3 class="font-bold text-white mb-2">Lokasi Kami</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2825.2571051201617!2d116.11601449999998!3d-8.5877026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc09fb2c60a33%3A0x32764237eb0f4ffc!2sBalai%20Besar%20POM%20di%20Mataram!5e1!3m2!1sen!2sid!4v1745379743701!5m2!1sen!2sid"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-md shadow-md">
                </iframe>
            </div>
        </div>

        <!-- Footer bawah -->
        <div class="bg-blue-800 text-center py-4 text-white mt-6">
            <p>&copy; 2024 - {{ date('Y') }} BBPOM di Mataram. All rights reserved.</p>
        </div>
    </footer>


    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
</body>

</html>
