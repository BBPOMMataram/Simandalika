<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="/css.css">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="/js.js"></script>
</head>
<body>
     <div class="sidebar">
        <img src="/images/IMG/Group 10.png" alt="" style="width: 120px; margin-top: 30px; margin-left: 20px;">
        <ul>
            <li><a href="#dashboard">
                <img src="/images/IMG/Vector.png" alt="" style="width: 16px; padding-right: 5px; margin-top: 2px;">
                Dashboard</a></li>
            <li><a href="#reports">
                <img src="/images/IMG/Vector2.png" alt="" style="width: 16px; padding-right: 5px; margin-top: 2px;">
                Reports</a></li>
            <li><a href="#about">
                <img src="/images/IMG/Vector4.png" alt="" style="width: 16px; padding-right: 5px; margin-top: 2px;">
                About</a></li>
            <li><a href="#">
                <img src="/images/IMG/Vector5.png" alt="" style="width: 16px; padding-right: 5px; margin-top: 2px;">
                Logout</a></li>
        </ul>
     </div>
     <div class="content">
        <section id="dashboard">
            <!-- Dashboard -->
           <div class="dashboard">
            <h1>Dashboard</h1>
            <!-- Filter -->
            <div class="filter">
                <select id="Laman">
                    <option value="Reagen">Reagen</option>
                    <option value="Simantan">Simantan</option>
                    <option value="E-Tamu">E-Tamu</option>
                    <option value="Kepegawaian">Kepegawaian</option>
                    <option value="Kearsipan">Kearsipan</option>
                    <option value="Pengujian Sampel PK3">Pengujian Sampel PK3</option>
                </select>
                <button>Filter</button>
                <button>Reset</button>
            </div>
            <!-- End Filter -->
            <!-- Scorecard -->
            <div class="summary">
                <div class="summary-item">
                    <img src="/images/IMG/Group 17.png" alt="stok" class="summary-icon">
                    <p id="jmlstok">0</p>
                    <h3>Jumlah Stok</h3>
                </div>
                <div class="summary-item">
                    <img src="/images/IMG/Group 18.png" alt="stok" class="summary-icon">
                    <p id="jmlreagen">0</p>
                    <h3>Jumlah Reagen Keluar</h3>
                </div>
                <!-- Grafik -->
               <div class="grafik-item">
                 <h3>Presentase Jumlah permintaan</h3>
                 <canvas id="presentase"></canvas>
               </div>
               <div class="grafik-item">
                 <h3>Grafik Presentase permintaan Reagen</h3>
                 <canvas id="grafik"></canvas>
               </div>
              <!-- End Grafik -->
            </div>
             <!-- End Scorecard -->
           </div>
      <!-- End Dashboard -->
        </section>
        <section id="reports">
      <!-- Reports -->
           <div class="reports">
                <h1>Reports</h1>
                <div class="table">
                    <table id="pizzaTable" class="display" style="width: 100%">
                   <thead>
                       <tr>
                           <th>Name</th>
                           <th>Category</th>
                           <th>Ingredients</th>
                           <th>Date</th>
                           <th>Time</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Size</th>
                       </tr>
                   </thead>
                   <tbody></tbody>
               </table>
                    </div>
                   <!-- End Tables -->
                    <!-- Document Order -->
                     <h4>.Insight Document</h4>
                    <div class="document-wrapper">
                       <div class="document">
                           <h3>Reagen</h3>
                           <img src="/images/IMG/doc.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>
                       <div class="document">
                           <h3>SIMANTAN</h3>
                           <img src="/images/IMG/doc2.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>            
                       <div class="document">
                           <h3>E-Tamu</h3>
                           <img src="/images/IMG/doc3.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>            
                       <div class="document">
                           <h3>Kepegawaian</h3>
                           <img src="/images/IMG/doc.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>            <div class="document">
                           <h3>Kearsipan</h3>
                           <img src="/images/IMG/doc2.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>
                       <div class="document">
                           <h3>Pengujian Sampel PK3</h3>
                           <img src="/images/IMG/doc3.png" alt="">
                           <button>
                               <img src="/images/IMG/down.png" alt="">
                               <a href="">Download</a>
                           </button>
                       </div>
                     </div>
                    <!-- End Document Order -->
           </div>
      <!-- End Reports  -->
        </section>
        <section id="about">
            <!-- About -->
           <div class="about">
             <div class="about-content">
                <a href="#home"><img src="/images/IMG/Group 10.png" alt="" style="width: 100px;"></a>
                <p> Balai Besar POM 2024 <br> </p>
                <h2>Copyright &copy;BBPOM Mataram 2024</h2>
             </div>
           </div>
      <!-- End About -->
        </section>
    </div>
</body>
</html>