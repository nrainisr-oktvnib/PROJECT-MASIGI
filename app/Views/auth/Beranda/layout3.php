<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/layout3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>MASIGI (masjid digital)</title>
</head>

<body>
    <header>
        <div class="header-container">
            <nav>
                <ul>
                    <li><a href="<?= site_url('Jamaah/beranda'); ?>" class="nav-link" data-link="beranda">Beranda</a></li>
                    <li>
                        <a href="#" class="nav-link" onclick="toggleSubMenu(event, this)" data-link="informasi">Informasi <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="<?= site_url('Jamaah/takmirmasjid'); ?>" class="nav-link" data-link="takmirmasjid">Takmir Masjid</a></li>
                            <li><a href="<?= site_url('Jamaah/jadwal'); ?>" class="nav-link" data-link="jadwal">Pelaksanaan Sholat Jum'at</a></li>
                            <li><a href="<?= site_url('Jamaah/lapkeuangan'); ?>" class="nav-link" data-link="lapkeuangan">Laporan Keuangan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('Jamaah/zakat2'); ?>" class="nav-link" data-link="zakat">Zakat</a></li>
                    <li><a href="<?= site_url('Jamaah/qurban'); ?>" class="nav-link" data-link="qurban">Qurban</a></li>
                    <li><a href="<?= site_url('Jamaah/donasi'); ?>" class="nav-link" data-link="donasi">Donasi</a></li>
                    <li><a href="<?= site_url('Jamaah/tutor'); ?>" class="nav-link" data-link="tutor">Cara Penggunaan</a></li>
                    <li><a href="<?= site_url('Jamaah/tentang'); ?>" class="nav-link" data-link="tentang">Kontak Kami</a></li>
                    <li style="margin-left:auto;"><a href="loginn.html" class="login-button">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <div>
            <?= $this->renderSection('content'); ?>
        </div>

    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Halaman MASIGI.</p>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.nav-link');

            function setActiveLink() {
                var currentPath = window.location.pathname;
                navLinks.forEach(function(link) {
                    var linkPath = link.getAttribute('href').split('/').pop();
                    if (currentPath.includes(linkPath)) {
                        link.classList.add('active');
                        if (link.closest('.submenu')) {
                            link.closest('.submenu').previousElementSibling.classList.add('active');
                        }
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    navLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                    if (this.closest('.submenu')) {
                        this.closest('.submenu').previousElementSibling.classList.add('active');
                    }
                });
            });

            setActiveLink();

            // Function untuk mengatur submenu
            window.toggleSubMenu = function(event, item) {
                event.preventDefault();
                var submenu = item.nextElementSibling;
                var iconDown = item.querySelector('.fa-caret-down');
                iconDown.classList.toggle('hide');
                submenu.classList.toggle('show');
            }
        });
    </script>
</body>

</html>