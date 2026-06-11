<?php
session_start();
header('Content-Type: application/json');

if (!isset($_SESSION['login'])) {
    echo json_encode(['status' => 'error', 'message' => 'Akses ditolak']);
    exit;
}

include 'koneksi.php';

$action = $_GET['action'] ?? '';

if ($action == 'list') {
    $query = mysqli_query($conn, "SELECT * FROM matkul ORDER BY id DESC");
    $data = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    echo json_encode($data);
    exit;
}

if ($action == 'get_single') {
    $id = intval($_GET['id']);
    $query = mysqli_query($conn, "SELECT * FROM matkul WHERE id = $id");
    $data = mysqli_fetch_assoc($query);

    echo json_encode($data);
    exit;
}

if ($action == 'save') {
    $id = $_POST['id'] ?? '';
    $matkul = mysqli_real_escape_string($conn, $_POST['matkul']);
    $sks = intval($_POST['sks']);

    if (empty($id)) {
        $sql = "INSERT INTO matkul (matkul, sks) VALUES ('$matkul', '$sks')";
    } else {
        $sql = "UPDATE matkul SET matkul='$matkul', sks='$sks' WHERE id=$id";
    }

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => mysqli_error($conn)]);
    }

    exit;
}

if ($action == 'delete') {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM matkul WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => mysqli_error($conn)]);
    }

    exit;
}
?>