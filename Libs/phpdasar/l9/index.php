<?php
// koneksi db
require 'konfigurasi.php';
$mahasiswa = query($qr_db);
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
        <?php foreach($mahasiswa as $mhs):?>
        <tr>
            <td><?= $i; ?></td>
            <td><a href="#">ubah</a> | <a href="#">hapus</a></td>
            <td><img src="img/<?= $mhs["gambar"]?>" alt="profile.hero" width="50"></td>
            <td><?= $mhs["npm"]?></td>
            <td><?= $mhs["nama"]?></td>
            <td><?= $mhs["email"]?></td>
            <td><?= $mhs["jurusan"]?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </table>
    
</body>
</html>