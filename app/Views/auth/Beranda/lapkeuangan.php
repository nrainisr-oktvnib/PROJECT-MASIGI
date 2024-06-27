<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Masjid</title>
    <link rel="stylesheet" href="uang.css">
</head>

<body>
    <div class="container">
        <h1>Laporan Keuangan Masjid</h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>TANGGAL</th>
                    <th>URAIAN</th>
                    <th>PEMASUKKAN</th>
                    <th>PENGELUARAN</th>
                    <th>SALDO KAS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3 April 2024</td>
                    <td>Infaq dan shadaqah</td>
                    <td>Rp. 3.000.000</td>
                    <td>-</td>
                    <td>Rp. 3.000.000</td>
                </tr>
                <tr>
                    <td>14 April 2024</td>
                    <td>Zakat maal</td>
                    <td>Rp. 5.000.000</td>
                    <td>-</td>
                    <td>Rp. 8.000.000</td>
                </tr>
                <tr>
                    <td>8 Mei 2024</td>
                    <td>Donasi dari acara pengajian</td>
                    <td>Rp. 1.500.000</td>
                    <td>-</td>
                    <td>Rp. 9.500.000</td>
                </tr>
                <tr>
                    <td>20 Mei 2024</td>
                    <td>Wakaf tanah dari seorang donatur</td>
                    <td>Rp. 20.000.000</td>
                    <td>-</td>
                    <td>Rp. 29.500.000</td>
                </tr>
                <tr>
                    <td>15 Juni 2024</td>
                    <td>Infaq dan sedekah setelah sholat jumat</td>
                    <td>-</td>
                    <td>Rp. 500.000</td>
                    <td>Rp. 29.000.000</td>
                </tr>
                <tr>
                    <td>7 April 2024</td>
                    <td>Pembelian perlengkapan kebersihan</td>
                    <td>-</td>
                    <td>Rp. 800.000</td>
                    <td>Rp. 28.200.000</td>
                </tr>
                <tr>
                    <td>15 Agustus 2024</td>
                    <td>Dana Sosial dari Pemerintah Setempat</td>
                    <td>Rp. 10.000.000</td>
                    <td>-</td>
                    <td>Rp. 38.200.000</td>
                </tr>
                <tr>
                    <td>17 September 2024</td>
                    <td>Biaya listrik, air, gas, dll</td>
                    <td>-</td>
                    <td>Rp. 800.000</td>
                    <td>Rp. 37.400.000</td>
                </tr>
                <tr>
                    <td>7 Oktober 2024</td>
                    <td>Dana bantuan untuk fakir miskin</td>
                    <td>-</td>
                    <td>Rp. 500.000</td>
                    <td>Rp. 36.900.000</td>
                </tr>
                <tr>
                    <td>21 November 2024</td>
                    <td>Gaji imam dan petugas masjid</td>
                    <td>-</td>
                    <td>Rp. 1.000.000</td>
                    <td>Rp. 35.900.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
<?= $this->endSection(); ?>