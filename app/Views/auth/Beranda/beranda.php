<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/beranda.css">
    <link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?= base_url(); ?>https://fonts.gstatic.com" crossorigin>
    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>MASIGI: Beranda</title>
</head>

<body>
    <header>
        <div class="header-container">
            <nav>
                <ul>
                    <li><a href="#" class="active" onclick="navigateTo('beranda.html')">Beranda</a></li>
                    <li>
                        <a href="#" onclick="toggleSubMenu(event, this)">Informasi <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#" onclick="navigateTo('/app/Views/auth/Takmir/TakmirUmum.html')">Takmir Masjid</a></li>
                            <li><a href="#" onclick="navigateTo('/app/Views/auth/JPSJ/jadwal.html')">Pelaksanaan Sholat Jum'at</a></li>
                            <li><a href="#" onclick="navigateTo('/app/Views/auth/LaporanKeuangan/uang.html')">Laporan Keuangan</a></li>
                        </ul>
                    </li>
                    <li><a href="#" onclick="navigateTo('/app/Views/auth/Zakat/zakat.html')">Zakat</a></li>
                    <li><a href="#" onclick="navigateTo('/app/Views/auth/Qurban/sapi.html')">Qurban</a></li>
                    <li><a href="#" onclick="navigateTo('donasi.html')">Donasi</a></li>
                    <li><a href="#" onclick="navigateTo('/app/Views/auth/Tutor/tutor.html')">Cara Penggunaan</a></li>
                    <li><a href="#" onclick="navigateTo('/app/Views/auth/TentangKami/tentang.html')">Tentang Kami</a></li>
                    <li style="margin-left:auto;"><a href="#" class="login-button" onclick="navigateTo('/app/Views/auth/login/loginn.html')">Masuk</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="header-content">
        <div class="video-container">
            <video id="myVideo" controls muted poster="/img/binalipu.jpg">
                <source src="/vid/MASIGI.mp4" type="video/mp4">
            </video>
            <audio id="myAudio">
                <source src="/audio/MASIGI.mp3" type="audio/mpeg">
            </audio>
            <p>*ARAHKAN KURSOR KE GAMBAR LALU KLIK DAN SPASI UNTUK MEMAINKAN VIDEO*</p>
        </div>
        <div class="text-container">
            <h1>ASSALAMU'ALAIKUM WARAHMATULLAHI WABARAKATUH</h1>
            <p class="teks">
                Website ini bernama Masigi atau Masjid digital, digunakan untuk meningkatkan efisiensi, transparansi, dan keterlibatan jamaah dalam pengelolaan masjid.
                Dengan memanfaatkan teknologi informasi, pengurus masjid dapat merespons kebutuhan jamaah lebih cepat, mengelola keuangan dengan lebih akurat,
                dan menyediakan informasi yang mudah diakses. Transparansi dalam informasi keuangan dan jadwal kegiatan membangun kepercayaan dan
                menjadikan pengelolaan masjid lebih akuntabel. Penggunaan teknologi diharapkan juga dapat meningkatkan efisiensi waktu dan sumber daya,
                memungkinkan pengurus untuk lebih fokus pada aspek keagamaan. Ini membentuk landasan digital yang kokoh untuk pertumbuhan dan perkembangan masjid sebagai pusat kegiatan keagamaan.
            </p>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 450">
        <path fill="#ffffff" fill-opacity="1" d="M0,32L40,53.3C80,75,160,117,240,122.7C320,128,400,96,480,80C560,64,640,64,720,58.7C800,53,880,43,960,58.7C1040,75,1120,117,1200,122.7C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        <foreignObject x="0" y="100" width="100%" height="100%">
            <div xmlns="http://www.w3.org/1999/xhtml" class="svg-content">
                <h2>JADWAL SHALAT</h2>
                <table>
                    <tr>
                        <th>Waktu</th>
                        <th>Shalat</th>
                        <th>Jamaah</th>
                    </tr>
                    <tr>
                        <td>04:30</td>
                        <td>Subuh</td>
                        <td>04:45</td>
                    </tr>
                    <tr>
                        <td>12:15</td>
                        <td>Dzuhur</td>
                        <td>12:30</td>
                    </tr>
                    <tr>
                        <td>15:30</td>
                        <td>Ashar</td>
                        <td>15:45</td>
                    </tr>
                    <tr>
                        <td>18:00</td>
                        <td>Maghrib</td>
                        <td>18:05</td>
                    </tr>
                    <tr>
                        <td>19:15</td>
                        <td>Isya</td>
                        <td>19:30</td>
                    </tr>
                </table>
            </div>
        </foreignObject>
    </svg>
    <div class="article-content">
        <h4>Beberapa gambar masjid Binalipu Kota Parepare</h4>
        <div id="image-and-quote-container">
            <div id="image-container">
                <img id="main-image" src="/img/binalipu1.jpg">
                <div id="image-navigation">
                    <i class="fas fa-chevron-left" onclick="previousImage()"></i>
                    <i class="fas fa-chevron-right" onclick="nextImage()"></i>
                </div>
            </div>
        </div>
        <div class="quote-container">
            <p class="quote-text">"Secepat apapun langkah kakimu di dunia, akan sia-sia bila masih berat melangkah ke Masjid."</p>
        </div>
        <div class="contact-map-container">
            <div class="contact-text">
                <p>KONTAK KAMI</p>
                <img src="/img/logo-black-shadow.png" alt="Logo footer" class="footer-logo">
                <div class="social-icons">
                    <i class="ri-instagram-fill"></i>
                    <i class="ri-facebook-circle-fill"></i>
                    <i class="ri-twitter-x-fill"></i>
                    <p>@masigi_parepare</p>
                </div>
                <div class="contact-icons">
                    <p><i class="ri-mail-fill"></i> masjiddigital@gmail.com</p>
                    <p><i class="ri-phone-fill"></i> 082138445731</p>
                </div>
            </div>
            <div class="map-container">
                <i class="ri-map-pin-fill location-icon"></i>
                <p class="location-text">Jl. Bumi Harapan, Bumi Harapan, Kec. Bacukiki Bar., Kota Parepare, Sulawesi Selatan 91125</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7959.877996142643!2d119.62429548514575!3d-4.032870731444375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bbdfb67b73c5%3A0x57f2e95284a104fc!2sMasjid%20Bina%20Lipu!5e0!3m2!1sid!2sid!4v1716737389783!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <footer>
            <p>Hak Cipta &copy; 2024 Halaman MASIGI.</p>
        </footer>
        <script>
            var images = ["/img/binalipu1.jpg", "/img/binalipu4.jpg", "/img/binalipu5.jpg", "/img/binalipu6.jpg"];
            var currentImageIndex = 0;

            function nextImage() {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                var mainImage = document.getElementById('main-image');
                mainImage.src = images[currentImageIndex];
                mainImage.alt = "Sumber gambar dari website";
            }

            function previousImage() {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                var mainImage = document.getElementById('main-image');
                mainImage.src = images[currentImageIndex];
                mainImage.alt = "Sumber gambar dari website";
            }

            document.addEventListener('DOMContentLoaded', function() {});



            function toggleSubMenu(event, item) {
                event.preventDefault();
                var submenu = item.nextElementSibling;
                var iconDown = item.querySelector('.fa-caret-down');
                iconDown.classList.toggle('hide');
                submenu.classList.toggle('show');
            }

            function navigateTo(page) {
                window.location.href = page;
            }

            document.addEventListener('DOMContentLoaded', function() {
                var video = document.getElementById('myVideo');
                var audio = document.getElementById('myAudio');

                video.addEventListener('play', function() {
                    audio.play();
                });

                video.addEventListener('pause', function() {
                    audio.pause();
                });

                video.addEventListener('ended', function() {
                    audio.pause();
                    audio.currentTime = 0;
                });
            });
        </script>
</body>

</html>