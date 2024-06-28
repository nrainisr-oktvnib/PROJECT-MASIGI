<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MASIGI: Takmir</title>
    <link rel="stylesheet" href="/css/donasi.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container">
        <div class="judul">
            <h1>DONASI</h1>
        </div>
        <div class="input-nama">
            <label for="nama">
                <h4>Nama:</h4>
            </label>
            <input type="nama" id="nama" placeholder="Masukkan Nama">
        </div>

        <div class="nominal">
            <label for="nominal">
                <h4>Nominal:</h4>
            </label>
            <input type="nominal" id="nominal" placeholder="Masukkan Nominal">
        </div>

        <button type="submit" class="simpan-button">Simpan</button>
    </section>
</body>

</html>

<?= $this->endSection(); ?>