<?= $this->extend('auth/Takmir/layout2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Zakat</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="sholatJumat.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">LAPORAN ZAKAT</h1>
    <div class="d-flex justify-content-end mb-2">
      <button class="btn btn-primary" data-toggle="modal" data-target="#addZakatModal">Tambah Laporan</button>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="zakatTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NOMINAL</th>
            <th>NOMOR HP</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>JENIS ZAKAT</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add your data rows here -->
          <tr>
            <td>1</td>
            <td>Ahmad Fauzi</td>
            <td>Rp. 2.000.000</td>
            <td>081234567890</td>
            <td>ahmad@example.com</td>
            <td>Jl. Mawar No. 123</td>
            <td>Zakat Fitrah</td>
            <td>
              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editZakatModal">Edit</button>
              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteZakatModal">Hapus</button>
            </td>
          </tr>
          <!-- Repeat for other rows -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Zakat Modal -->
  <div class="modal fade" id="addZakatModal" tabindex="-1" aria-labelledby="addZakatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addZakatModalLabel">Tambah Laporan Zakat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="no">NO</label>
              <input type="number" class="form-control" id="no">
            </div>
            <div class="form-group">
              <label for="nama">NAMA</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="nominal">NOMINAL</label>
              <input type="number" class="form-control" id="nominal">
            </div>
            <div class="form-group">
              <label for="nomor-hp">NOMOR HP</label>
              <input type="text" class="form-control" id="nomor-hp">
            </div>
            <div class="form-group">
              <label for="email">EMAIL</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="alamat">ALAMAT</label>
              <input type="text" class="form-control" id="alamat">
            </div>
            <div class="form-group">
              <label for="jenis-zakat">JENIS ZAKAT</label>
              <input type="text" class="form-control" id="jenis-zakat">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Zakat Modal -->
  <div class="modal fade" id="editZakatModal" tabindex="-1" aria-labelledby="editZakatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editZakatModalLabel">Edit Laporan Zakat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="edit-no">NO</label>
              <input type="number" class="form-control" id="edit-no">
            </div>
            <div class="form-group">
              <label for="edit-nama">NAMA</label>
              <input type="text" class="form-control" id="edit-nama">
            </div>
            <div class="form-group">
              <label for="edit-nominal">NOMINAL</label>
              <input type="number" class="form-control" id="edit-nominal">
            </div>
            <div class="form-group">
              <label for="edit-nomor-hp">NOMOR HP</label>
              <input type="text" class="form-control" id="edit-nomor-hp">
            </div>
            <div class="form-group">
              <label for="edit-email">EMAIL</label>
              <input type="email" class="form-control" id="edit-email">
            </div>
            <div class="form-group">
              <label for="edit-alamat">ALAMAT</label>
              <input type="text" class="form-control" id="edit-alamat">
            </div>
            <div class="form-group">
              <label for="edit-jenis-zakat">JENIS ZAKAT</label>
              <input type="text" class="form-control" id="edit-jenis-zakat">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Zakat Modal -->
  <div class="modal fade" id="deleteZakatModal" tabindex="-1" aria-labelledby="deleteZakatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteZakatModalLabel">Hapus Laporan Zakat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus laporan zakat ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?= $this->endSection(); ?>