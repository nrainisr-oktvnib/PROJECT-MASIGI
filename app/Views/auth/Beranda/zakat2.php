<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/zakat.css">
    <title>PROJEK AKHIR WEB</title>
</head>

<body>
    <div class="judul">
        <h1>TUNAIKAN ZAKAT ANDA <br> DENGAN CEPAT DAN AMAN</h1>
    </div>
    <section class="container">
        <div class="nama">
            <label for="kepala-keluarga">
                <h4>Kepala Keluarga:</h4>
            </label>
            <input type="kepala-keluarga" id="kepala-keluarga" placeholder="Masukkan Nama Kepala Keluarga">
        </div>

        <div class="jenis-pembayaran">
            <label for="jenis-pembayaran">
                <h4>Jenis pembayaran:</h4>
            </label>
            <select name="jenis" id="jenis-pembayaran">
                <option value="" disabled selected>Pilih Jenis Pembayaran</option>
                <option value="perorang">Uang</option>
                <option value="perkelompok">Beras</option>
            </select>

            <div class="jumlah-anggota">
                <label for="jumlah-anggota">
                    <h4>Jumlah Anggota:</h4>
                </label>
                <input type="jumlah-anggota" nama="jumlah-anggota" id="jumlah-anggota" placeholder="Masukkan Jumlah Anggota">
            </div>

            <div class="zakat-bayar">
                <label for="byr">
                    <h4>Nominal:</h4>
                </label>
                <input type="byr" nama="byr" id="byr" placeholder="Masukkan Nominal Pembayaran">
            </div>

            <div class="alamat">
                <label for="alamat">
                    <h4>Alamat:</h4>
                </label>
                <input type="alamat" nama="alamat" id="alamat" placeholder="Masukkan Alamat">
            </div>

            <div class="telepon">
                <label for="tlp">
                    <h4>Nomor Telepon:</h4>
                </label>
                <input type="tlp" nama="tlp" id="tlp" placeholder="Masukkan No Telepon">
            </div>
        </div>

        <button type="submit" class="simpan-button">Bayar</button>
    </section>
</body>

</html>
<?= $this->endSection(); ?>