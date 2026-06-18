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
    <title>CRUD Data Matkul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Sistem Informasi Akademik</a>

        <div class="d-flex gap-2 align-items-center">
            <a href="index.php" class="btn btn-outline-light btn-sm">Mahasiswa</a>
            <a href="dosen.php" class="btn btn-outline-light btn-sm">Dosen</a>
            <a href="matkul.php" class="btn btn-outline-light btn-sm">Matkul</a>
            <a href="jadwal.php" class="btn btn-outline-light btn-sm">Jadwal</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
    <h2 class="fw-bold mb-1">Data Mata Kuliah</h2>
    <small class="text-muted">
        Kelola data mata kuliah dan jumlah SKS
    </small>
</div>
        <button
    class="btn btn-dark rounded-pill px-4"
    data-bs-toggle="modal"
    data-bs-target="#matkulModal"
    onclick="siapkanTambahMatkul()"
>
    + Tambah Matkul
</button>
    </div>

    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="background:#212529;color:white;">
                    <tr>
                        <th class="ps-3">No</th>
                        <th>Mata Kuliah</th>
                        <th>SKS</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tempat-data-matkul"></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="matkulModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formMatkul" onsubmit="simpanMatkul(event)">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleMatkul">Form Matkul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="matkul_id" name="id">

                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="matkul" name="matkul" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SKS</label>
                        <input type="number" class="form-control" id="sks" name="sks" required>
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
<script src="script_matkul.js"></script>

</body>
</html>