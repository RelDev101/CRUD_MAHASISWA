<?php
$host = "localhost:3307"; // Nama host
$user = "root";      // Username MySQL (default XAMPP: root)
$pass = "";          // Password MySQL (default kosong)
$db   = "mahasiswa"; // Nama database yang sudah kamu buat

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>

<!-- Farrel Alfarrasi Haer 241351145 TIF Pagi A -->