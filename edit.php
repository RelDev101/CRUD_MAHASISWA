<?php
include 'koneksi.php';

// Ambil ID dari parameter URL
$id = $_GET['id'];

// Ambil data mahasiswa berdasarkan ID
$query = "SELECT * FROM data_mahasiswa WHERE id = $id"; #Cek Lagi
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// Proses jika form disubmit
if (isset($_POST['submit'])) {
    $nama    = $_POST['nama'];
    $nim     = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email   = $_POST['email'];

    // Update data mahasiswa
    $updateQuery = "UPDATE data_mahasiswa SET #Cek Lagi
                    nama = '$nama', 
                    nim = '$nim', 
                    jurusan = '$jurusan', 
                    email = '$email' 
                    WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Data berhasil diperbarui!');</script>";
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $updateQuery . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        input[type="submit"]:hover {
            background-color: darkgreen;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Edit Data Mahasiswa</h2>
    <form method="POST" action="">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label>NIM</label>
        <input type="text" name="nim" value="<?php echo $data['nim']; ?>" required>

        <label>Jurusan</label>
        <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>

        <label>Email</label>
        <input type="text" name="email" value="<?php echo $data['email']; ?>" required>

        <input type="submit" name="submit" value="Perbarui Data">
    </form>
    <div style="text-align: center;  font-family:Verdana, Geneva, Tahoma, sans-serif">
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
