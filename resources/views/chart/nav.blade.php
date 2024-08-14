<nav class="h-20">
    <i class='bx bx-menu'></i>
    <a href="#" class="tittle">
        {{-- <i class='bx bx-bullseye' style="margin-left: 10px;"></i> --}}
        <span class="font-serif text-xl md:text-4xl tracking-widest">SIMANDALIKA</span>
    </a>
    <img src="/images/IMG/Group 16.png" width="25px" style="cursor: pointer;" class="popup-btn"
        onclick="toggleDropdown()">
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
    <!-- POPUP -->
</nav>
