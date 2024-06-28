<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/sapi.css">
    <title>PROJEK AKHIR WEB</title>
</head>

<body>
    <div class="judul">
        <h1>MUDAHKAN IBADAH QURBAN ANDA DENGAN KAMI</h1>
    </div>

    <section class="tipe-kambing">
        <h2 class="kambing">KAMBING</h2>
        <div class="KA">
            <h3>TIPE A</h3>
            <h4>Harga Kambing</h4>
            <span>Rp4.000.000</span>
            <h4> Berat Qurban</h4>
            <span>25-35kg</span>
            <div class="Spesifikasi">
                <h4>Spesifikasi Hewan Qurban</h4>
                <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
            </div>
            <div class="pop">
                <a href="#popup" class="btn">Pesan</a>
            </div>
        </div>

        <div class="KB">
            <h3>TIPE B</h3>
            <h4>Harga Kambing</h4>
            <span>Rp3.500.000</span>
            <h4> Berat Qurban</h4>
            <span>20-30kg</span>
            <div class="Spesifikasi">
                <h4>Spesifikasi Hewan Qurban</h4>
                <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
            </div>
            <div class="pop">
                <a href="#popup" class="btn">Pesan</a>
            </div>
        </div>

        <div class="KC">
            <h3>TIPE C</h3>
            <h4>Harga Kambing</h4>
            <span>Rp2.700.000</span>
            <h4>Berat Qurban</h4>
            <span>15-25kg</span>
            <div class="Spesifikasi">
                <h4>Spesifikasi Hewan Qurban</h4>
                <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
            </div>
            <div class="pop">
                <a href="#popup" class="btn">Pesan</a>
            </div>
        </div>
    </section>

    <<<<<<< HEAD:app/Views/auth/Qurban/sapi.html <section class="tipe-sapi">
        <h2 class="sapi">SAPI</h2>
        =======


        <section class="sec">
            <h2 class="sapi">SAPI</h2>
            >>>>>>> 2050c53632e13b896600ec31694cca8d2bc67c18:app/Views/auth/Beranda/qurban.php
            <div class="SA">
                <h3>TIPE A</h3>
                <h4>Harga Sapi</h4>
                <span>Rp28.000.000</span>
                <h4>Berat Qurban</h4>
                <span>265-270kg</span>
                <div class="Spek">
                    <h4>Spesifikasi Hewan Qurban</h4>
                    <li>Harga Rp4.000.000 perorang.</li>
                    <li>Bobot sapi perorang yaitu 38kg.</li>
                    <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                    <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
                </div>
                <div class="pop">
                    <a href="#popup" class="btn">Pesan</a>
                </div>
            </div>

            <div class="SB">
                <h3>TIPE B</h3>
                <h4>Harga Sapi</h4>
                <span>Rp24.500.000</span>
                <h4>Berat Qurban</h4>
                <span>220-230kg</span>
                <div class="Spek">
                    <h4>Spesifikasi Hewan Qurban</h4>
                    <li>Harga Rp3.500.000 perorang.</li>
                    <li>Bobot sapi perorang yaitu 32kg.</li>
                    <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                    <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
                </div>
                <div class="pop">
                    <a href="#popup" class="btn">Pesan</a>
                </div>
            </div>

            <div class="SC">
                <h3>TIPE C</h3>
                <h4>Harga Sapi</h4>
                <span>Rp18.900.000</span>
                <h4>Berat Qurban</h4>
                <span>180-190kg</span>
                <div class="Spek">
                    <h4>Spesifikasi Hewan Qurban</h4>
                    <li>Harga Rp2.900.000 perorang.</li>
                    <li>Bobot sapi perorang yaitu 26kg.</li>
                    <li>Penyembelihan dijadwalkan oleh pengurus masjid.</li>
                    <li>Hewan qurban yang dibeli merupakan hewan yang layak untuk diqurbankan sesuai syariat islam.</li>
                </div>
                <div class="pop">
                    <a href="#popup" class="btn">Pesan</a>
                </div>
            </div>
        </section>

        <<<<<<< HEAD:app/Views/auth/Qurban/sapi.html <section class="popup-container" id="popup">
            =======
            <div class="judul-pendaftaran">
                <h2>PENDAFTARAN QURBAN:</h2>
            </div>

            <section class="popup-container" id="popup">
                <!-- <div class="popup" id="popup"> -->
                >>>>>>> 2050c53632e13b896600ec31694cca8d2bc67c18:app/Views/auth/Beranda/qurban.php
                <div class="popup-content">
                    <div class="judul-pendaftaran">
                        <a href="#" class="popup-close">&times;</a>
                        <h2>PENDAFTARAN QURBAN:</h2>
                    </div>

                    <div class="nama-peserta">
                        <label for="nama-peserta">
                            <h4>Nama Peserta:</h4>
                        </label>
                        <input type="nama-peserta" id="nama-peserta" placeholder="Masukkan Nama">
                    </div>

                    <div class="jenis-qurban">
                        <label for="jenis-qurban">
                            <h4>Jenis Qurban:</h4>
                        </label>
                        <select name="jenis" id="jenis-qurban">
                            <option value="" disabled selected>Pilih Jenis Qurban</option>
                            <option value="perorang">Perorang</option>
                            <option value="perkelompok">Perkelompok</option>
                        </select>

                        <div class="Alamat">
                            <label for="Alamat">
                                <h4>Alamat:</h4>
                            </label>
                            <input type="Alamat" nama="alamat" id="alamat" placeholder="Masukkan Alamat">
                        </div>

                        <div class="NoTlp">
                            <label for="Tlp">
                                <h4>No Telepon:</h4>
                            </label>
                            <input type="tel" nama="tlp" id="tlp" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <<<<<<< HEAD:app/Views/auth/Qurban/sapi.html <div class="popup-class-btn">
                        <a href="#" class="popup-btn">Bayar</a>
                </div>
                </div>
                =======
                <a href="#" class="popup-btn">Pesan</a>
                <!-- </div> -->
                >>>>>>> 2050c53632e13b896600ec31694cca8d2bc67c18:app/Views/auth/Beranda/qurban.php
            </section>
</body>

</html>
<?= $this->endSection(); ?>