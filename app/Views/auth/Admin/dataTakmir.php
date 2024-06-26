<?= $this->extend('auth/Admin/layout1'); ?>

<?= $this->section('content'); ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MASIGI: Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="/temp2/css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Takmir Masjid</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Username</th>
                <th>Nama Takmir</th>
                <th>Peran Takmir</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Msyad</td>
                <td>Muslimin Syaid</td>
                <td>Imam</td>
                <td>081241580649</td>
                <td>Jl. Melati, No. 23</td>
                <td>msyad@email.com</td>
              </tr>
              <tr>
                <td>Elrah</td>
                <td>Eldin Rahadian</td>
                <td>Muadzin</td>
                <td>085343736445</td>
                <td>Jl. Dahlia Indah, No. 7</td>
                <td>elrah@email.com</td>
              </tr>
              <tr>
                <td>Chesa</td>
                <td>Chepy S. Affandy</td>
                <td>Ketua Umum</td>
                <td>085345738334</td>
                <td>Jl. Seroja, No. 10</td>
                <td>chesa@email.com</td>
              </tr>
              <tr>
                <td>Ragus</td>
                <td>Agus Rustandi</td>
                <td>Sekretaris</td>
                <td>085213778902</td>
                <td>Jl. Kenanga, No. 32</td>
                <td>ragus@email.com</td>
              </tr>
              <tr>
                <td>Rizard</td>
                <td>Ardian Baitariza</td>
                <td>Bendahara</td>
                <td>081676889435</td>
                <td>Jl. Flamboyan, No. 45</td>
                <td>rizard@email.com</td>
              </tr>
              <tr>
                <td>Asiws</td>
                <td>Aris Siswanto</td>
                <td>Seksi Sarana &amp; Prasarana</td>
                <td>081248756985</td>
                <td>Jl. Kamboja, No. 18</td>
                <td>asiws@email.com</td>
              </tr>
              <tr>
                <td>Wahags</td>
                <td>Agus Wahidin</td>
                <td>Seksi Sarana &amp; Prasarana</td>
                <td>081554789332</td>
                <td>Jl. Srikaya, No. 5</td>
                <td>wahags@email.com</td>
              </tr>
              <tr>
                <td>Jangnam</td>
                <td>Ujang Suryanam</td>
                <td>Seksi Pendidikan &amp; Kerohanian</td>
                <td>087336458965</td>
                <td>Jl. Anggrek Biru, No. 29</td>
                <td>jangnam@email.com</td>
              </tr>
              <tr>
                <td>Dan</td>
                <td>Dadang Suprianta</td>
                <td>Seksi Pendidikan &amp; Kerohanian</td>
                <td>087565423548</td>
                <td>Jl. Cempaka Putih, No. 12</td>
                <td>dan@email.com</td>
              </tr>
              <tr>
                <td>Dinps</td>
                <td>Endin Supriyana</td>
                <td>Seksi Humas dan Dana</td>
                <td>081548789321</td>
                <td>Jl. Mawar Merah, No. 21</td>
                <td>dinps@email.com</td>
              </tr>
              <tr>
                <td>Asob</td>
                <td>Achmad Sobari</td>
                <td>Seksi Humas dan Dana</td>
                <td>081753445789</td>
                <td>Jl. Teratai, No. 14</td>
                <td>asob@email.com</td>
              </tr>
              <tr>
                <td>Yatr</td>
                <td>Yayat Ruhiyat</td>
                <td>Seksi Kebersihan dan Keamanan</td>
                <td>089125897643</td>
                <td>Jl. Jambu Mawar, No. 8</td>
                <td>yatr@email.com</td>
              </tr>
              <tr>
                <td>Karrrtka</td>
                <td>Ika Kartika</td>
                <td>Seksi Kebersihan dan Keamanan</td>
                <td>089112564852</td>
                <td>Jl. Kenanga Biru, No. 33</td>
                <td>karrrtka@email.com</td>
              </tr>
              <tr>
                <td>Ttinsmr</td>
                <td>Titin Sumartini</td>
                <td>Seksi Kebersihan dan Keamanan</td>
                <td>082779813549</td>
                <td>Jl. Kamboja Hijau, No. 19</td>
                <td>ttinsmr@email.com</td>
              </tr>
              <tr>
                <td>Yadis</td>
                <td>Suharyadi</td>
                <td>Seksi Kebersihan dan Keamanan</td>
                <td>085369741789</td>
                <td>Jl. Srikaya Merah, No. 26</td>
                <td>yadis@email.com</td>
              </tr>
              <tr>
                <td>Awcha</td>
                <td>Awal Cahyadi</td>
                <td>Seksi Kebersihan dan Keamanan</td>
                <td>081951753123</td>
                <td>Jl. Melati Putih, No. 11</td>
                <td>awcha@email.com</td>
              </tr>
            </tbody>
          </table>

          </table>
        </div>
      </div>
</body>
<!-- End of Main Content -->
<?= $this->endSection(); ?>