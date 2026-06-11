<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$dosen = mysqli_query($conn, "SELECT * FROM dosen");
$matkul = mysqli_query($conn, "SELECT * FROM matkul");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Sistem Informasi Akademik</a>

        <div class="d-flex gap-2">
            <a href="index.php" class="btn btn-outline-light btn-sm">Mahasiswa</a>
            <a href="dosen.php" class="btn btn-outline-light btn-sm">Dosen</a>
            <a href="matkul.php" class="btn btn-outline-light btn-sm">Matkul</a>
            <a href="jadwal.php" class="btn btn-light btn-sm">Jadwal</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">Data Jadwal</h2>
            <small class="text-muted">Kelola jadwal dosen dan mata kuliah</small>
        </div>

        <button
            class="btn btn-dark rounded-pill px-4"
            data-bs-toggle="modal"
            data-bs-target="#jadwalModal"
            onclick="siapkanTambahJadwal()"
        >
            + Tambah Jadwal
        </button>
    </div>

    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead style="background:#212529;color:white;">
                        <tr>
                            <th class="ps-3">No</th>
                            <th>Dosen</th>
                            <th>Mata Kuliah</th>
                            <th>Waktu</th>
                            <th>Ruang</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tempat-data-jadwal"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
            <div class="modal fade" id="jadwalModal">

    <div class="modal-dialog">

        <div class="modal-content">

            <form id="formJadwal" onsubmit="simpanJadwal(event)">

                <div class="modal-header">
                    <h5 id="modalTitleJadwal">Form Jadwal</h5>
                </div>

                <div class="modal-body">

                    <input type="hidden" id="jadwal_id" name="id">

                    <label>Dosen</label>
                    <select class="form-control mb-3" id="id_dosen" name="id_dosen">

                        <?php while($d = mysqli_fetch_assoc($dosen)): ?>
                            <option value="<?= $d['id']; ?>">
                                <?= $d['nama']; ?>
                            </option>
                        <?php endwhile; ?>

                    </select>

                    <label>Mata Kuliah</label>
                    <select class="form-control mb-3" id="id_matkul" name="id_matkul">

                        <?php while($m = mysqli_fetch_assoc($matkul)): ?>
                            <option value="<?= $m['id']; ?>">
                                <?= $m['matkul']; ?>
                            </option>
                        <?php endwhile; ?>

                    </select>

                    <label>Waktu</label>
                    <input
                        type="text"
                        class="form-control mb-3"
                        id="waktu"
                        name="waktu"
                    >

                    <label>Ruang</label>
                    <input
                        type="text"
                        class="form-control"
                        id="ruang"
                        name="ruang"
                    >

                </div>

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Batal
                    </button>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script_jadwal.js"></script>

</body>
</html>

        </tbody>
        
    </table>

</div>s