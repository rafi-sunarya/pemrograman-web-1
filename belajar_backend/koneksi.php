<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_mahasiswaunpam";

$conn = mysqli_connect($host, $username, $password, $database);

//cek koneksi
if (!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}