<?= $this->extend('auth/Takmir/layout2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Pelaksanaan Sholat Jumat</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="sholatJumat.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center mb-4">JADWAL PETUGAS PELAKSANAAN SHOLAT JUM'AT</h1>
    <div class="d-flex justify-content-end mb-2">
      <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Jadwal</button>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-dark">
          <tr>
            <th>HARI/TANGGAL</th>
            <th>IMAM</th>
            <th>KHOTIB</th>
            <th>MUADZIN</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Add your data rows here -->
          <tr>
            <td>20 April 2024</td>
            <td>Sheikh Ibrahim Al-Mansur</td>
            <td>Sainuddin</td>
            <td>Kareem Malik</td>
            <td>
              <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Hapus</button>
            </td>
          </tr>
          <!-- Repeat for other rows -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Tambah Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="tanggal">HARI/TANGGAL</label>
              <input type="date" class="form-control" id="tanggal">
            </div>
            <div class="form-group">
              <label for="imam">IMAM</label>
              <input type="text" class="form-control" id="imam">
            </div>
            <div class="form-group">
              <label for="khotib">KHOTIB</label>
              <input type="text" class="form-control" id="khotib">
            </div>
            <div class="form-group">
              <label for="muadzin">MUADZIN</label>
              <input type="text" class="form-control" id="muadzin">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="edit-tanggal">HARI/TANGGAL</label>
              <input type="date" class="form-control" id="edit-tanggal">
            </div>
            <div class="form-group">
              <label for="edit-imam">IMAM</label>
              <input type="text" class="form-control" id="edit-imam">
            </div>
            <div class="form-group">
              <label for="edit-khotib">KHOTIB</label>
              <input type="text" class="form-control" id="edit-khotib">
            </div>
            <div class="form-group">
              <label for="edit-muadzin">MUADZIN</label>
              <input type="text" class="form-control" id="edit-muadzin">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Hapus Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda yakin ingin menghapus jadwal ini?
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