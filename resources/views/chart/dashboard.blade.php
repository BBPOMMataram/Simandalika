<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
    <!-- Boxicon -->
     <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
     <!-- CSS -->
    <link rel="stylesheet" href="/css.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Data Labels -->
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

</head>
<body>
    
     <script src="/js.js"></script>
    

      <!-- Sidebar -->
        <section id="sidebar">
            <img src="/images/IMG/Group 100.png" alt="" class="head" style=" cursor: pointer; width: 120px; margin-top: 30px; margin-left: 60px;">
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="#percepat">
                        <i class='bx bxs-zap'></i>
                        <span class="title">PERCEPAT</span>
                    </a>
                </li>
                <li>
                    <a href="#simantan">
                        <i class='bx bxs-cog'></i>
                        <span class="title">SIMANTAN</span>
                    </a>
                </li>
                <li>
                    <a href="#tamu">
                        <i class='bx bx-fingerprint'></i>
                        <span class="title">E-TAMU</span>
                    </a>
                </li>
                <li>
                    <a href="#kepegawaian">
                        <i class='bx bxs-network-chart'></i>
                        <span class="title">Kepegawaian</span>
                    </a>
                </li>
                <li>
                    <a href="#kearsipan">
                        <i class='bx bx-book-alt'></i>
                        <span class="title">Kearsipan</span>
                    </a>
                </li>
                <li>
                    <a href="#pengujian">
                        <i class='bx bx-atom'></i>
                        <span class="title">Pengujian PK3</span>
                    </a>
                </li>
            </ul>
             
        </section>
      <!-- End Sidebar -->
       <!-- Content -->
        <section id="content">
            <!-- NAV -->
                <nav>
                    <i class='bx bx-menu'></i>
                    <a href="#" class="tittle">
                        <i class='bx bx-bullseye' style="margin-left: 10px;"></i>
                        <span class="text">SIMANDALIKA</span>
                    </a>
                    <ul>
                        <li>

                        </li>
                    </ul>
                    <img src="/images/IMG/Group 16.png" width="25px" style="cursor: pointer;" class="popup-btn" onclick="toggleDropdown()">
                      <!-- POPUP -->
                        <div class="popup" id="popup">
                            <a href="#">Edit Profile</a> 
                            <a onclick="openpopup()">Logout</a>
                                <!-- <div class="overlay" id="overlay">
                                    <p>Apa Anda Yakin Ingin Logout </p>
                                    <a href="index.html" onclick="closepopup()">Iya</a>
                                    <a href="#" onclick="closepopup()">Tidak</a>
                                </div> -->
                            
                        </div>
                        <script>
                               function toggleDropdown() {
                                    const dropdown = document.getElementById("popup");
                                    if (dropdown.style.display === "block") {
                                        dropdown.style.display = "none";
                                    } else {
                                        dropdown.style.display = "block";
                                    }
                                }

                                window.onclick = function(event) {
                                    if (!event.target.matches('.popup-btn')) {
                                        const dropdowns = document.getElementsByClassName("popup");
                                        for (let i = 0; i < dropdowns.length; i++) {
                                            const openDropdown = dropdowns[i];
                                            if (openDropdown.style.display === "block") {
                                                openDropdown.style.display = "none";
                                            }
                                        }
                                    }
                                }

                                // const popup = document.getElementById("overlay")
                                // function openpopup() {
                                //     popup.classList.add("open-popup");   
                                // }
                                // function closepopup() {
                                //     popup.classList.remove("open-popup");   
                                // }
                        </script>
                      <!-- POPUP -->-
                </nav>
            <!--END NAV -->
            <!-- MAIN -->
                <section id="percepat">
                    <span class="teks">Percepat</span>
                    
                    <div class="wrapper">
                            <div class="summary-item">
                                <h3 style="margin-bottom: 10px;">Jumlah Realtime</h3>
                                <i class='bx bxs-data' style="width: 180px; margin-bottom: 10px; color:#D32F2E; "></i>
                                <div class="wrap">
                                    <div class="atk">
                                        <p id="jmlatk">0</p>
                                        <h3>ATK</h3>
                                    </div>
                                    <div class="reagen">
                                        <p id="jmlreagen">0</p>
                                        <h3>Reagen</h3>
                                    </div>
                                </div>
                            </div>
                        <div class="grafik-item">
                        <h3>Grafik Permintaan</h3>
                            <div class="filters">
                                <select onchange="applyFilter()" name="Tahun" id="year">
                                    <option value="Tahun">Tahun</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
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
                                        yearSelect.value = new Date().getFullYear() ;
                                        fetchChartData(new Date().getFullYear()); // Reset to the current year
                                    }
                                </script>
                            </div>
                            <canvas id="permintaan"></canvas>
                        </div>
                          <div class="grafik-item">
                            <h3>Diagram Jumlah Reagen & ATK</h3>
                            <canvas id="diagram"></canvas>
                          </div>
                    </div>
                </section>
                <section id="simantan">
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
                <section id="tamu">
    <span class="teks">E-Tamu</span>
    <?php 
$bulan_sekarang = Date('n'); // Mengambil bulan saat ini dalam format numerik (1-12)
$tahun_sekarang = Date('Y');
?>

<div class="wrapper">
    <div class="e-tamu">
        <div class="grafik-item-tamu">
            <div class="filter">
                <div class="bulan">
                    <select onchange="Filtering()" name="bulan" id="bulan">
                        <option value="Pilih">--Pilih Bulan--</option>
                        <option value="January" <?php if($bulan_sekarang == 1) echo 'selected'; ?>>Januari</option>
                        <option value="February" <?php if($bulan_sekarang == 2) echo 'selected'; ?>>Februari</option>
                        <option value="March" <?php if($bulan_sekarang == 3) echo 'selected'; ?>>Maret</option>
                        <option value="April" <?php if($bulan_sekarang == 4) echo 'selected'; ?>>April</option>
                        <option value="May" <?php if($bulan_sekarang == 5) echo 'selected'; ?>>Mei</option>
                        <option value="June" <?php if($bulan_sekarang == 6) echo 'selected'; ?>>Juni</option>
                        <option value="July" <?php if($bulan_sekarang == 7) echo 'selected'; ?>>Juli</option>
                        <option value="August" <?php if($bulan_sekarang == 8) echo 'selected'; ?>>Agustus</option>
                        <option value="September" <?php if($bulan_sekarang == 9) echo 'selected'; ?>>September</option>
                        <option value="October" <?php if($bulan_sekarang == 10) echo 'selected'; ?>>Oktober</option>
                        <option value="November" <?php if($bulan_sekarang == 11) echo 'selected'; ?>>November</option>
                        <option value="December" <?php if($bulan_sekarang == 12) echo 'selected'; ?>>Desember</option>
                    </select>
                </div>
                <div class="tahun">
                    <select name="tahun" id="tahun">
                        <option value="Pilih">--Pilih Tahun--</option>
                        <option value="2021" <?php if($tahun_sekarang == 2021) echo 'selected'; ?>>2021</option>
                        <option value="2022" <?php if($tahun_sekarang == 2022) echo 'selected'; ?>>2022</option>
                        <option value="2023" <?php if($tahun_sekarang == 2023) echo 'selected'; ?>>2023</option>
                        <option value="2024" <?php if($tahun_sekarang == 2024) echo 'selected'; ?>>2024</option>
                    </select>
                    </div>
                    <button onclick="Resetting()">Reset</button>
                </div>
                <h3>Jumlah Pengunjung </h3>
                <canvas id="guestPieChart"></canvas>
            </div>
        </div>
    </div>
</section>
                <section id="kepegawaian">
                    <span class="teks">Kepegawaian</span>
                    <div class="wrapper">
                        <div class="pegawaian">
                        <div class="grafik-item">
                                <h3>Kepegawaian</h3>
                                <canvas id="pegawai"></canvas>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="kearsipan">
                    <span class="teks">Kearsipan</span>
                    <div class="wrapper">
                        <div class="arsip">
                        <div class="grafik-item">
                                <h3>Kearsipan</h3>
                                <canvas id="arsip"></canvas>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="pengujian">
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