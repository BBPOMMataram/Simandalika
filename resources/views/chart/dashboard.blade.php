<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
    <!-- Boxicon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- CSS -->
    {{-- <link rel="stylesheet" href="/css.css"> --}}
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Data Labels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/css/dashboard-chart.css'])
</head>

<body>
    <!-- Sidebar -->
    @include('chart.sidebar')
    <!-- End Sidebar -->

    <!-- Content -->
    <section id="content">
        <!-- NAV -->
        @include('chart.nav')
        <!--END NAV -->

        <!-- MAIN -->
        <section class="bg-white m-10 mt-24 rounded p-6" id="percepat">
            <div class="flex flex-col items-center">
                <h2 class="text-3xl font-bold">Percepat</h2>
                <p class="mb-10">Persediaan Cepat & Tepat</p>
            </div>

            <div class="flex justify-evenly flex-wrap gap-4">
                <div class="bg-blue-200 text-black h-fit rounded pt-4 pb-6 px-8 font-bold text-center">
                    <h3 class="mb-2 text-lg">Jumlah Realtime</h3>
                    {{-- <i class="bx bxs-data text-4xl text-red-600 mb-2 animate-pulse"></i> --}}
                    <div class="flex justify-between gap-2">
                        <div class="bg-blue-500 p-2 rounded-full flex-1 w-24 h-24 flex flex-col justify-center">
                            <h3>ATK</h3>
                            <p id="jmlatk" class="animate-pulse text-xl">0</p>
                        </div>
                        <div class="bg-blue-500 p-2 rounded-full flex-1 w-24 h-24 flex flex-col justify-center">
                            <h3>Reagen</h3>
                            <p id="jmlreagen" class="animate-pulse text-xl">0</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-200 text-center pt-6 px-6">
                    <h3 class="font-bold mb-4">Data ED</h3>
                    <canvas id="diagram"></canvas>
                </div>
            </div>
            <div class="flex">
                <div class="bg-white mx-6 p-4 rounded w-full">
                    <h3 class="font-semibold">Grafik Permintaan</h3>
                    <div class="filters">
                        <select onchange="applyFilter()" name="Tahun" id="year" class="w-16">
                            <option value="Tahun">Tahun</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                        <button onclick="resetFilter()">Reset</button>
                        <script>
                            function applyFilter() {
                                const yearSelect = document.getElementById('year');
                                const selectedYear = yearSelect.value;
                                if (selectedYear !== 'Tahun') {
                                    fetchChartData(selectedYear);
                                }
                            }

                            function resetFilter() {
                                const yearSelect = document.getElementById('year');
                                yearSelect.value = new Date().getFullYear();
                                fetchChartData(new Date().getFullYear()); // Reset to the current year
                            }
                        </script>
                    </div>
                    <canvas id="permintaan"></canvas>
                </div>
            </div>
        </section>

        <section class="bg-white m-10 mt-24 rounded p-6" id="simantan">
            <span class="teks">SIMANTAN</span>
            <div class="wrapper">
                <div class="simantan">
                    <div class="grafik-item">
                        <h3>Tata Usaha</h3>
                        <canvas id="tatausaha"></canvas>
                    </div>
                    <div class="grafik-item">
                        <h3>Informasi & Komunikasi</h3>
                        <canvas id="inforkom"></canvas>
                    </div>
                    <div class="grafik-item">
                        <h3>Pemeriksaan</h3>
                        <canvas id="pemeriksaan"></canvas>
                    </div>
                    <div class="grafik-item">
                        <h3>Penindakan</h3>
                        <canvas id="penindakan"></canvas>
                    </div>
                    <div class="grafik-item">
                        <h3>Pengujian</h3>
                        <canvas id="pengujiaan"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section" id="tamu">
            <span class="teks">E-Tamu</span>
            <?php
            $bulan_sekarang = Date('n'); // Mengambil bulan saat ini dalam format numerik (1-12)
            $tahun_sekarang = Date('Y');
            ?>

            <div class="wrapper">
                <div class="e-tamu">
                    <div class="grafik-item-tamu">
                        <div class="filter flex flex-wrap justify-center !mx-0">
                            <div class="bulan">
                                <select onchange="Filtering()" name="bulan" id="bulan" class="!w-[99px]">
                                    {{-- <option value="Pilih">===Bulan===</option> --}}
                                    <option value="January" <?php if ($bulan_sekarang == 1) {
                                        echo 'selected';
                                    } ?>>Januari</option>
                                    <option value="February" <?php if ($bulan_sekarang == 2) {
                                        echo 'selected';
                                    } ?>>Februari</option>
                                    <option value="March" <?php if ($bulan_sekarang == 3) {
                                        echo 'selected';
                                    } ?>>Maret</option>
                                    <option value="April" <?php if ($bulan_sekarang == 4) {
                                        echo 'selected';
                                    } ?>>April</option>
                                    <option value="May" <?php if ($bulan_sekarang == 5) {
                                        echo 'selected';
                                    } ?>>Mei</option>
                                    <option value="June" <?php if ($bulan_sekarang == 6) {
                                        echo 'selected';
                                    } ?>>Juni</option>
                                    <option value="July" <?php if ($bulan_sekarang == 7) {
                                        echo 'selected';
                                    } ?>>Juli</option>
                                    <option value="August" <?php if ($bulan_sekarang == 8) {
                                        echo 'selected';
                                    } ?>>Agustus</option>
                                    <option value="September" <?php if ($bulan_sekarang == 9) {
                                        echo 'selected';
                                    } ?>>September</option>
                                    <option value="October" <?php if ($bulan_sekarang == 10) {
                                        echo 'selected';
                                    } ?>>Oktober</option>
                                    <option value="November" <?php if ($bulan_sekarang == 11) {
                                        echo 'selected';
                                    } ?>>November</option>
                                    <option value="December" <?php if ($bulan_sekarang == 12) {
                                        echo 'selected';
                                    } ?>>Desember</option>
                                </select>
                            </div>
                            <div class="tahun">
                                <select name="tahun" id="tahun" class="!w-[70px]">
                                    {{-- <option value="Pilih">=Tahun=</option> --}}
                                    <option value="2021" <?php if ($tahun_sekarang == 2021) {
                                        echo 'selected';
                                    } ?>>2021</option>
                                    <option value="2022" <?php if ($tahun_sekarang == 2022) {
                                        echo 'selected';
                                    } ?>>2022</option>
                                    <option value="2023" <?php if ($tahun_sekarang == 2023) {
                                        echo 'selected';
                                    } ?>>2023</option>
                                    <option value="2024" <?php if ($tahun_sekarang == 2024) {
                                        echo 'selected';
                                    } ?>>2024</option>
                                </select>
                            </div>
                            <button onclick="Resetting()" class="!flex-1">Reset</button>

                        </div>
                        <h3>Jumlah Pengunjung</h3>
                        <canvas id="guestPieChart"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full max-w-full overflow-auto" id="siproval-container">
            <h2 class="text-center font-bold text-xl">SIPROVAL</h2>
            <div class="wrapper">
                <div class="siproval text-center">
                    <div class="mx-10 bg-white w-full overflow-auto">
                        <h3 class="my-4">Indikator Capaian Kinerja BBPOM Mataram perbulan</h3>
                        <div class="filters">
                            <select name="bulan" id="month" onchange="applyFilter()">
                                <option value="Pilih">--Pilih Bulan--</option>
                                <option value="Januari" {{ now()->month === 1 ? 'selected' : '' }}>Januari</option>
                                <option value="Februari" {{ now()->month === 2 ? 'selected' : '' }}>Februari</option>
                                <option value="Maret" {{ now()->month === 3 ? 'selected' : '' }}>Maret</option>
                                <option value="April" {{ now()->month === 4 ? 'selected' : '' }}>April</option>
                                <option value="Mei" {{ now()->month === 5 ? 'selected' : '' }}>Mei</option>
                                <option value="Juni" {{ now()->month === 6 ? 'selected' : '' }}>Juni</option>
                                <option value="Juli" {{ now()->month === 7 ? 'selected' : '' }}>Juli</option>
                                <option value="Agustus" {{ now()->month === 8 ? 'selected' : '' }}>Agustus</option>
                                <option value="September" {{ now()->month === 9 ? 'selected' : '' }}>September</option>
                                <option value="Oktober" {{ now()->month === 10 ? 'selected' : '' }}>Oktober</option>
                                <option value="November" {{ now()->month === 11 ? 'selected' : '' }}>November</option>
                                <option value="Desember" {{ now()->month === 12 ? 'selected' : '' }}>Desember</option>
                            </select>
                            <button onclick="resetFilter()">Reset</button>
                        </div>
                        <canvas id="siproval" width="1000" height="1800"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section" id="kearsipan">
            <span class="teks">Kearsipan</span>
            <div class="wrapper">
                <div class="arsip">
                    <div class="grafik-item">
                        {{-- <h3>Kearsipan</h3> --}}
                        {{-- <canvas id="arsip"></canvas> --}}
                        <div class="flex gap-6 w-full justify-center">
                            <div class="in flex flex-col">
                                <h4 class="font-bold text-lg">Surat Masuk</h4>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 1 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['in-tw1']->jumlah }}</span></div>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 2 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['in-tw2']->jumlah }}</span></div>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 3 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['in-tw3']->jumlah }}</span></div>
                            </div>
                            <div class="out flex flex-col">
                                <h4 class="font-bold text-lg">Surat Keluar</h4>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 1 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['out-tw1']->jumlah }}</span></div>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 2 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['out-tw2']->jumlah }}</span></div>
                                <div class="p-2 flex gap-2"><span class="!font-semibold !m-0">TW 3 : </span> <span
                                        class="text-pink-600 !m-0">{{ $arsip['out-tw3']->jumlah }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section" id="pengujian">
            <span class="teks">SIJELAPP</span>
            <div class="wrapper">
                <div class="pengujian">
                    <div class="grafik-item">
                        <h3>Pengujian</h3>
                        <canvas id="ujian"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <!-- END MAIN -->
    </section>
    <!-- End Content -->
</body>

</html>
