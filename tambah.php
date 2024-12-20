<?php
include 'koneksi.php';

// Proses ketika tombol submit ditekan
if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email  = $_POST['email'];

    // Query untuk insert data
    $query = "INSERT INTO data_mahasiswa (nama, nim, jurusan, email) #Cek Lagi
              VALUES ('$nama', '$nim', '$jurusan', '$email')";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        form {
            width: 40%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        input[type="submit"]:hover {
            background-color: darkblue;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;  font-family:Verdana, Geneva, Tahoma, sans-serif">Tambah Data Mahasiswa</h2>
    <form method="POST" action="">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required>

        <label>Email</label>
        <input type="text" name="email" required>

        <input type="submit" name="submit" value="Tambah Data">
    </form>
    <div style="text-align: center;  font-family:Verdana, Geneva, Tahoma, sans-serif">
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
