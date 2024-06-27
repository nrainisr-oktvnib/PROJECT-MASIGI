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
                    <li><a href="<?= site_url('Jamaah/beranda'); ?>" class="active">Beranda</a></li>
                    <li>
                        <a href="#" onclick="toggleSubMenu(event, this)">Informasi <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="<?= site_url('Jamaah/takmirmasjid'); ?>">Takmir Masjid</a></li>
                            <li><a href="<?= site_url('Jamaah/jadwal'); ?>">Pelaksanaan Sholat Jum'at</a></li>
                            <li><a href="<?= site_url('Jamaah/lapkeuangan'); ?>">Laporan Keuangan</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('Jamaah/zakat2'); ?>">Zakat</a></li>
                    <li><a href="<?= site_url('Jamaah/qurban'); ?>">Qurban</a></li>
                    <li><a href="<?= site_url('Jamaah/donasi'); ?>">Donasi</a></li>
                    <li><a href="<?= site_url('Jamaah/tutor'); ?>">Cara Penggunaan</a></li>
                    <li><a href="<?= site_url('Jamaah/tentang'); ?>">Kontak Kami</li>
                    <li style="margin-left:auto;"><a href="loginn.html" class="login-button">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <?= $this->renderSection('content'); ?>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Halaman MASIGI.</p>
    </footer>

    <script>
        function toggleSubMenu(event, item) {
            event.preventDefault();
            var submenu = item.nextElementSibling;
            var iconDown = item.querySelector('.fa-caret-down');
            iconDown.classList.toggle('hide');
            submenu.classList.toggle('show');
        }
    </script>
</body>

</html>