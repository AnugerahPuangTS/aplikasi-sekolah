<?php

$host = 'localhost';
$username = 'root';
$password = ''; // password kosong bawaan xampp
$db = 'db_siswa';

$conn = mysqli_connect($host, $username, $password, $db);
// var_dump($conn);

// if ($conn == TRUE) {
//     echo "Koneksi berhasil";
// } else {
//     echo "Koneksi gagal";
// }

// echo "<hr>";

// kondisi cek koneksi

    // modifikasi cek koneksi
if (!$conn) {
    echo "Koneksi gagal";
} 