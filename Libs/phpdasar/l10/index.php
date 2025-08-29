<?php
// koneksi db
require 'konfigurasi.php';
$mahasiswa = read($read_db);

// koneksi fungsi //
require 'fungsi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL 10</title>
</head>
<body>
    <h1>DAFATR NAMA MAHASISWA</h1>
    <a href="create.php">Tambah Data Mahasiswa</a>

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
            <td><a href="update.php">ubah</a> | <a href="delete.php">hapus</a></td>
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