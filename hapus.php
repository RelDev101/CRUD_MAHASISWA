<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Query hapus data berdasarkan ID
$query = "DELETE FROM data_mahasiswa WHERE id = $id"; //Cek Lagi

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Data berhasil dihapus!');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
