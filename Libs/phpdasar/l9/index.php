<?php
// koneksi db
// mysql_connect #versi lama banyak kelemahan
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump ($result);

// ambil data (fetch) dari object $result tabel mahasiswa
// mysqli_fetch_row(); #MENGEMBALIKAN ARRAY NUMERIK
// mysqli_fetch_assoc(); #MENGEMBALIKAN ARRAY ASOSIATIF
// mysqli_fetch_array(); #MENGEMBALIKAN ARRAY ASOSIATIF DAN NUMERIK
// mysqli_fetch_object(); #MENGEMBALIKAN OBJECT MENGGUNAKAN PANAH ->

// var_dump (mysqli_fetch_assoc($result)["jurusan"]);
// var_dump (mysqli_fetch_object($result)->jurusan);
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

        <?php $i = 1;?>
        <?php while ($brs = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?= $i; ?></td>
            <td><a href="#">ubah</a> | <a href="#">hapus</a></td>
            <td><img src="img/<?= $brs["gambar"]?>" alt="" width="50"></td>
            <td><?= $brs["npm"]?></td>
            <td><?= $brs["nama"]?></td>
            <td><?= $brs["email"]?></td>
            <td><?= $brs["jurusan"]?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile;?>
    </table>
    
</body>
</html>