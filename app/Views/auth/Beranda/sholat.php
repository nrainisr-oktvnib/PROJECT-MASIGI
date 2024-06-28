<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/sholat.css">
    <title>PROJEK AKHIR WEB</title>
</head>

<body>
    <div class="judul">
        <h1>Petugas Sholat Jumat</h1>
    </div>
    <section class="container">
        <div class="input-tanggal">
            <label for="tanggal">
                <h4>Tanggal:</h4>
            </label>
            <input type="tanggal" id="tanggal" placeholder="Masukkan Tanggal">
        </div>

        <div class="input-imam">
            <label for="imam">
                <h4>Nama Imam:</h4>
            </label>
            <input type="imam" id="imam" placeholder="Masukkan Nama Imam">
        </div>

        <div class="input-khotib">
            <label for="khotib">
                <h4>Nama Khotib:</h4>
            </label>
            <input type="khotib" id="khotib" placeholder="Masukkan khotib">
        </div>

        <div class="input-muadzin">
            <label for="muadzin">
                <h4>Nama Muadzin:</h4>
            </label>
            <input type="muadzin" id="muadzin" placeholder="Masukkan muadzin">
        </div>

        <button type="submit" class="simpan-button">Simpan</button>
    </section>
</body>

</html>
<?= $this->endSection(); ?>