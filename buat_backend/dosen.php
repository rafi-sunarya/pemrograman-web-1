<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">SIAKAD Universitas</a>

        <div>
            <a href="index.php" class="btn btn-outline-light btn-sm">Mahasiswa</a>
            <a href="dosen.php" class="btn btn-light btn-sm">Dosen</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Dosen</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dosenModal" onclick="siapkanTambahDosen()">
            Tambah Dosen
        </button>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-3">No</th>
                        <th>Nama Dosen</th>
                        <th>Alamat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tempat-data-dosen"></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="dosenModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formDosen" onsubmit="simpanDosen(event)">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleDosen">Form Dosen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="dosen_id" name="id">

                    <div class="mb-3">
                        <label class="form-label">Nama Dosen</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script_dosen.js"></script>

</body>
</html>