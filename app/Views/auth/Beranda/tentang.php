<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="/css/tentang.css">
</head>

<body>
    <div class="container">
        <h1>Tentang Kami</h1>

        <section class="introduction">
            <h2>Perkenalan</h2>
            <p>Selamat datang di halaman Tentang Kami. </p>
        </section>

        <section class="team">
            <h2>Anggota Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="/img/Aini.jpg" alt="Aini">
                    <h3>NUR AINI SRI OKTAVIANI BAHAR</h3>
                    <p>Ketua Tim</p>
                    <p>Deskripsi singkat tentang anggota ini.</p>
                </div>
                <div class="team-member">
                    <img src="/img/Dikri.jpg" alt="Dikri">
                    <h3>DIKRIANI</h3>
                    <p>Anggota 1</p>
                    <p>Deskripsi singkat tentang anggota ini.</p>
                </div>
                <div class="team-member">
                    <img src="/img/Imel.jpg" alt="Imel">
                    <h3>MELISAH</h3>
                    <p>Anggota 2</p>
                    <p>Deskripsi singkat tentang anggota ini.</p>
                </div>
            </div>
        </section>

        <section class="contact">
            <h2>Kontak Kami</h2>
            <p>Email: wargaITH@gmail.com</p>
            <p>Telepon: +6282 934 342 931</p>
            <p>Alamat: Jl. Balaikota No.1, Bumi Harapan, Kec. Bacukiki Barat,
                Kota Parepare, Sulawesi Selatan 91125</p>
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.9573582876014!2d119.63291530000001!3d-4.02912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb6f319bdcc3%3A0x72bba788ec9d951f!2sJl.%20Balaikota%20No.1%2C%20Bumi%20Harapan%2C%20Kec.%20Bacukiki%20Bar.%2C%20Kota%20Parepare%2C%20Sulawesi%20Selatan%2091125!5e0!3m2!1sid!2sid!4v1718173974072!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </section>

        <section class="feedback">
            <h2>Saran dan Kritik</h2>
            <form action="submit_feedback.php" method="post">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Kirim</button>
            </form>
        </section>
    </div>
</body>

</html>
<?= $this->endSection(); ?>