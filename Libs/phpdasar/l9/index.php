<?php
// koneksi db
// mysql_connect #versi lama banyak kelemahan
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump ($result);

// ambil data (fetch) dari object $result tabel mahasiswa
// mysqli_fetch_row();
// mysqli_fetch_assoc();
// mysqli_fetch_array();
// mysqli_fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL 9</title>
</head>
<body>
    <h1>DAFATR NAMA MAHASISWA</h1>

    <table border="1" cellpadding="10" cellspacing="">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Profil</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Surel</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td><a href="#">ubah</a> | <a href="#">hapus</a></td>
            <td><img src="img/avatar2.jpg" alt="" width="50"></td>
            <td>1234567809</td>
            <td>Faishal Nafi</td>
            <td>care@faishalnafi.com</td>
            <td>Sistem Informasi</td>
        </tr>
    </table>
</body>
</html>