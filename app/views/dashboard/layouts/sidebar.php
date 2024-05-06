<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="<?= BASEURL; ?>/dashboard" class="nav_logo">
                    <!-- <i class='bx bx-layer nav_logo-icon'></i> -->
                    <img src="<?= BASEURL; ?>/img/logo.png" alt="logo" style="width: 35%;">
                    <!-- <span class="nav_logo-name">Admin</span> -->
                </a>
                <div class="nav_list">
                    <a href="<?= BASEURL; ?>/dashboard" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Home</span>
                    </a>
                    <a href="<?= BASEURL; ?>/statistik" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Statistik</span>
                    </a>
                    <a href="<?= BASEURL; ?>/blog" class="nav_link">
                        <i class='bx bx-news nav_icon'></i>
                        <span class="nav_name">Blog</span>
                    </a>
                    <a href="<?= BASEURL; ?>/mobil" class="nav_link">
                        <i class='bx bx-car nav_icon'></i>
                        <span class="nav_name">Mobil</span>
                    </a>
                    <a href="<?= BASEURL; ?>/galeri" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Galeri</span>
                    </a>
                    <a href="<?= BASEURL; ?>/account/account" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Akun</span>
                    </a>
                </div>
            </div>
            <a href="<?= BASEURL; ?>/login/signout" class="nav_link tombol-logout" data-pesan="Ingin Logout">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Keluar</span>
            </a>
        </nav>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            // Fungsi untuk menandai tautan yang aktif
            const markActiveLink = () => {
                const currentLocation = window.location.href;
                const navLinks = document.querySelectorAll('.nav_link');

                navLinks.forEach(link => {
                    if (link.href === currentLocation) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            };

            // Panggil fungsi untuk menandai tautan aktif setelah DOM dimuat
            markActiveLink();

            // Fungsi untuk menampilkan navbar
            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId);

                // Validasi semua variabel ada
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // Tampilkan navbar
                        nav.classList.toggle('show');
                        // Ubah ikon
                        toggle.classList.toggle('bx-x');
                        // Tambah padding ke body
                        bodypd.classList.toggle('body-pd');
                        // Tambah padding ke header
                        headerpd.classList.toggle('body-pd');
                    });
                }
            };

            // Panggil fungsi untuk menampilkan navbar
            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

            // Atur kembali tautan aktif saat tautan diklik
            const linkColor = document.querySelectorAll('.nav_link');

            function colorLink() {
                linkColor.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            }

            linkColor.forEach(l => l.addEventListener('click', colorLink));

            // Cek apakah URL halaman adalah halaman utama, jika iya, tandai tautan "Home" sebagai aktif
            const homeLink = document.querySelector('.nav_logo');
            if (homeLink.href === window.location.href) {
                homeLink.classList.add('active');
            }
        });
    </script>