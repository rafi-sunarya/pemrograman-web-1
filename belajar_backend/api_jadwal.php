<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['login'])) {
    echo json_encode(['status' => 'error']);
    exit;
}

include 'koneksi.php';

$action = $_GET['action'] ?? '';

if ($action == 'list') {

    $query = mysqli_query($conn, "
        SELECT
            jadwal.*,
            dosen.nama AS nama_dosen,
            matkul.matkul AS nama_matkul
        FROM jadwal
        JOIN dosen ON jadwal.id_dosen = dosen.id
        JOIN matkul ON jadwal.id_matkul = matkul.id
        ORDER BY jadwal.id DESC
    ");

    $data = [];

    while($row = mysqli_fetch_assoc($query)){
        $data[] = $row;
    }

    echo json_encode($data);
    exit;
}

if ($action == 'get_single') {

    $id = intval($_GET['id']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM jadwal WHERE id=$id"
    );

    echo json_encode(mysqli_fetch_assoc($query));
    exit;
}

if ($action == 'save') {

    $id = $_POST['id'] ?? '';

    $id_dosen = $_POST['id_dosen'];
    $id_matkul = $_POST['id_matkul'];
    $waktu = $_POST['waktu'];
    $ruang = $_POST['ruang'];

    if (empty($id)) {

        $sql = "
            INSERT INTO jadwal
            (id_dosen,id_matkul,waktu,ruang)
            VALUES
            ('$id_dosen','$id_matkul','$waktu','$ruang')
        ";

    } else {

        $sql = "
            UPDATE jadwal
            SET
            id_dosen='$id_dosen',
            id_matkul='$id_matkul',
            waktu='$waktu',
            ruang='$ruang'
            WHERE id=$id
        ";
    }

    if(mysqli_query($conn,$sql)){
        echo json_encode(['status'=>'success']);
    }else{
        echo json_encode([
            'status'=>'error',
            'message'=>mysqli_error($conn)
        ]);
    }

    exit;
}

if ($action == 'delete') {

    $id = intval($_POST['id']);

    mysqli_query(
        $conn,
        "DELETE FROM jadwal WHERE id=$id"
    );

    echo json_encode(['status'=>'success']);
    exit;
}