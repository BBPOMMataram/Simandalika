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
</head>
<body>
    
     <script src="/js.js"></script>
    

      <!-- Sidebar -->
        <section id="sidebar">
            <img src="/images/IMG/Group 10.png" alt="" class="head" style=" cursor: pointer; width: 120px; margin-top: 20px; margin-left: 60px;">
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
                    <i class='bx bx-menu' ></i>
                    <a href="#" class="tittle">
                        <i class='bx bx-bullseye'></i>
                        <span class="text">Dashboard Overview</span>
                    </a>
                    <img src="/images/IMG/Group 16.png" alt="" width="25px" style="cursor: pointer;" onclick="openpopup()">
                      <!-- POPUP -->
                        <div class="popup" id="popup">
                            <p>Apa Anda Yakin Ingin Logout </p>
                            <a href="index.html" onclick="closepopup()">Iya</a>
                            <a href="#" onclick="closepopup()">Tidak</a>
                        </div>
                        <script>
                            const popup = document.getElementById("popup")
                            function openpopup() {
                                popup.classList.add("open-popup");   
                            }
                            function closepopup() {
                                popup.classList.remove("open-popup");   
                            }
                        </script>
                      <!-- POPUP -->
                    
                </nav>
            <!--END NAV -->
            <!-- MAIN -->
                <section id="percepat">
                    <span class="teks">Percepat</span>
                    <div class="wrapper">
                        <div class="summary">
                            <div class="summary-item">
                                <img src="/images/IMG/Group 17.png" alt="stok" class="summary-icon" style="width: 30px; height: 30px;">
                                <p id="jmlstok">0</p>
                                <h3>Jumlah Stok</h3>
                            </div>
                            <div class="summary-item">
                                <img src="/images/IMG/Group 18.png" alt="stok" class="summary-icon" style="width: 30px; height: 30px;">
                                <p id="jmlstok">0</p>
                                <h3>Jumlah Reagen Keluar</h3>
                            </div>
                        </div>
                        <div class="grafik-item">
                            <h3>Grafik Permintaan</h3>
                            <canvas id="permintaan"></canvas>
                          </div>
                          <div class="grafik-item">
                            <h3>Diagram Jumlah Reagen</h3>
                            <canvas id="grafik"></canvas>
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
                    <div class="wrapper">
                        <div class="e-tamu">
                            <div class="grafik-item">
                                <h3>Pengujian Barang Narkoba</h3>
                                <canvas id="narkoba"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Pengujian Obat & Makanan</h3>
                                <canvas id="pom"></canvas>
                            </div> 
                            <div class="grafik-item">
                                <h3>Informasi & Pengaduan</h3>
                                <canvas id="pengaduan"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Sertifikasi</h3>
                                <canvas id="sertif"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Wajib Lapor</h3>
                                <canvas id="lapor"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Kunjungan</h3>
                                <canvas id="kunjungan"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Keperluan Pribadi</h3>
                                <canvas id="pribadi"></canvas>
                            </div>
                            <div class="grafik-item">
                                <h3>Keperluan Lain</h3>
                                <canvas id="lain"></canvas>
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
                    <span class="teks">Pengujian Sampel PK3</span>
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