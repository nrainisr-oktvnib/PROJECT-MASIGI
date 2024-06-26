<header>
    <div class="header-container">
        <nav>
            <ul>
                <li><a href="beranda.php" class="<?php echo ($page == 'beranda') ? 'active' : ''; ?>">Beranda</a></li>
                <li>
                    <a href="#" onclick="toggleSubMenu(event, this)">Informasi <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="submenu">
                        <li><a href="/app/Views/auth/Takmir/TakmirUmum.html">Takmir Masjid</a></li>
                        <li><a href="/app/Views/auth/JPSJ/jadwal.html">Pelaksanaan Sholat Jum'at</a></li>
                        <li><a href="/app/Views/auth/LaporanKeuangan/uang.html">Laporan Keuangan</a></li>
                    </ul>
                </li>
                <li><a href="/app/Views/auth/Zakat/zakat.html">Zakat</a></li>
                <li><a href="/app/Views/auth/Qurban/sapi.html">Qurban</a></li>
                <li><a href="donasi.html">Donasi</a></li>
                <li><a href="/app/Views/auth/Tutor/tutor.html">Cara Penggunaan</a></li>
                <li><a href="/app/Views/auth/TentangKami/tentang.html">Tentang Kami</a></li>
                <li style="margin-left:auto;"><a href="/app/Views/auth/login/loginn.html" class="login-button">Masuk</a></li>
            </ul>
        </nav>
    </div>
</header>