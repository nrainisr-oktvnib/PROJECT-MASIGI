<?= $this->extend('auth/Takmir/layout2'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="laporanKeuangan.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">LAPORAN KEUANGAN</h1>
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Laporan</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>TANGGAL</th>
                        <th>URAIAN</th>
                        <th>PEMASUKKAN</th>
                        <th>PENGELUARAN</th>
                        <th>SALDO KAS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your data rows here -->
                    <tr>
                        <td>3 April 2024</td>
                        <td>Infaq dan shadaqah</td>
                        <td>Rp. 3.000.000</td>
                        <td>-</td>
                        <td>Rp. 3.000.000</td>
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
                    <h5 class="modal-title" id="addModalLabel">Tambah Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="tanggal">TANGGAL</label>
                            <input type="date" class="form-control" id="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="uraian">URAIAN</label>
                            <input type="text" class="form-control" id="uraian">
                        </div>
                        <div class="form-group">
                            <label for="pemasukkan">PEMASUKKAN</label>
                            <input type="number" class="form-control" id="pemasukkan">
                        </div>
                        <div class="form-group">
                            <label for="pengeluaran">PENGELUARAN</label>
                            <input type="number" class="form-control" id="pengeluaran">
                        </div>
                        <div class="form-group">
                            <label for="saldoKas">SALDO KAS</label>
                            <input type="number" class="form-control" id="saldoKas">
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
                    <h5 class="modal-title" id="editModalLabel">Edit Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="edit-tanggal">TANGGAL</label>
                            <input type="date" class="form-control" id="edit-tanggal">
                        </div>
                        <div class="form-group">
                            <label for="edit-uraian">URAIAN</label>
                            <input type="text" class="form-control" id="edit-uraian">
                        </div>
                        <div class="form-group">
                            <label for="edit-pemasukkan">PEMASUKKAN</label>
                            <input type="number" class="form-control" id="edit-pemasukkan">
                        </div>
                        <div class="form-group">
                            <label for="edit-pengeluaran">PENGELUARAN</label>
                            <input type="number" class="form-control" id="edit-pengeluaran">
                        </div>
                        <div class="form-group">
                            <label for="edit-saldoKas">SALDO KAS</label>
                            <input type="number" class="form-control" id="edit-saldoKas">
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
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Laporan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus laporan ini?
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