<?php
session_start();
// Proteksi halaman: Jika belum login, tendang kembali ke halaman login
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
    <title>Dashboard - CRUD Data Mahasiswa</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Sistem Informasi Akademik
        </a>

        <div class="d-flex gap-2">
            <a href="index.php" class="btn btn-outline-light btn-sm">
                Mahasiswa
            </a>

            <a href="dosen.php" class="btn btn-outline-light btn-sm">
                Dosen
            </a>

            <a href="matkul.php" class="btn btn-outline-light btn-sm">
                Matkul
            </a>

            <a href="jadwal.php" class="btn btn-outline-light btn-sm">
                Jadwal
            </a>

            <a href="logout.php" class="btn btn-danger btn-sm">
                Logout
            </a>
        </div>
    </div>
</nav>

    <!-- Konten Utama -->
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Data Mahasiswa</h2>
        <small class="text-muted">
            Kelola data mahasiswa Universitas Pamulang
        </small>
    </div>

    <button
        class="btn btn-dark rounded-pill px-4"
        data-bs-toggle="modal"
        data-bs-target="#mahasiswaModal"
        onclick="siapkanTambah()"
    >
        + Tambah Mahasiswa
    </button>
</div>

        <!-- Tabel Data -->
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="background:#212529;color:white;">
                            <tr>
                                <th class="ps-3">No</th>
                                <th>NIM</th>
                                <th>Nama Lengkap</th>
                                <th>Jurusan</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tempat-data-mahasiswa">
                            <!-- Data akan dimuat otomatis oleh JavaScript melalui API -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal untuk Form Tambah / Edit -->
    <div class="modal fade" id="mahasiswaModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Form Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-end="modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="formMahasiswa" onsubmit="simpanData(event)">
                    <div class="modal-body">
                        <!-- Input Hidden untuk menyimpan ID saat Edit -->
                        <input type="hidden" id="mahasiswa_id" name="id">
                        
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script Integrasi CRUD JS -->
    <script src="script.js"></script>
</body>
</html>