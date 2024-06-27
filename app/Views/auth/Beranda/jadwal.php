<?= $this->extend('auth/Beranda/layout3'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Pelaksanaan Sholat Jumat</title>
  <link rel="stylesheet" href="jadwal.css">
  <link rel="stylesheet" href="/app/Views/auth/Beranda/layout3.css">
</head>

<body>
  <div class="container">
    <h1>JADWAL PETUGAS PELAKSANAAN SHOLAT JUM'AT</h1>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>HARI/TANGGAL</th>
          <th>IMAM</th>
          <th>KHOTIB</th>
          <th>MUADZIN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>20 April 2024</td>
          <td>Sheikh Ibrahim Al-Mansur</td>
          <td>Sainuddin</td>
          <td>Kareem Malik</td>
        </tr>
        <tr>
          <td>27 April 2024</td>
          <td>Abdullah Rahman</td>
          <td>Iyas Siddiqh</td>
          <td>Hamzah Farid</td>
        </tr>
        <tr>
          <td>4 Mei 2024</td>
          <td>Al-Fahrizi</td>
          <td>Khaliq</td>
          <td>Yusuf Akbar</td>
        </tr>
        <tr>
          <td>11 Mei 2024</td>
          <td>Bilal Mustafah</td>
          <td>Syeikh Hana</td>
          <td>Zayd Hasan</td>
        </tr>
        <tr>
          <td>18 Mei 2024</td>
          <td>Amir Al-Qadri</td>
          <td>Safiyah Aziz</td>
          <td>Idris Syaifullah</td>
        </tr>
        <tr>
          <td>25 Mei 2024</td>
          <td>Ahmad Rahmat</td>
          <td>Hasan Basir</td>
          <td>Musaddin</td>
        </tr>
        <tr>
          <td>1 Juni 2024</td>
          <td>Kamal Al-Hasimi</td>
          <td>Zainab Ahmad</td>
          <td>Syarifai</td>
        </tr>
        <tr>
          <td>8 Juni 2024</td>
          <td>Andi Farid</td>
          <td>Muhammad Rifki</td>
          <td>Ahmad Farhan</td>
        </tr>
        <tr>
          <td>15 Juni 2024</td>
          <td>Amirullah</td>
          <td>Al-Amin</td>
          <td>Muhammad Taufik</td>
        </tr>
        <tr>
          <td>22 Juni 2024</td>
          <td>Ahmad Abdullah</td>
          <td>Muhammad Ali</td>
          <td>Bilal Rahman</td>
        </tr>
      </tbody>
    </table>
  </div>
  <script src="/app/Views/auth/Beranda/layout3.JS"></script>

</body>

</html>

<?= $this->endSection(); ?>