<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
        a:hover {
            text-decoration: underline;
            font-family:Verdana, Geneva, Tahoma, sans-serif
        }
    </style>
</head>
<body>
    <h2 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif">Data Mahasiswa</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Edit/Hapus</th>
        </tr>
        <?php
        // Query untuk mengambil data
        $query = "SELECT * FROM data_mahasiswa";
        $result = mysqli_query($conn, $query);

        // Menampilkan data dalam tabel
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['nim'] . "</td>
                        <td>" . $row['jurusan'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>
                            <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                            <a href='hapus.php?id=" . $row['id'] . "' onclick=\"return confirm('Hapus data ini?');\">Hapus</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Data tidak ditemukan</td></tr>";
        }
        ?>
    </table>
    <div style="text-align: center;  font-family:Verdana, Geneva, Tahoma, sans-serif">
        <a href="tambah.php">+ Tambah Data Mahasiswa</a>
    </div>
</body>
</html>
