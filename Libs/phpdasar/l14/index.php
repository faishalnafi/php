<?php
// koneksi db
require 'konfigurasi.php';
$mahasiswa = read($read_db);

// koneksi fungsi //
// Catatan: Jika Anda sudah menggabungkan fungsi.php ke konfigurasi.php, baris ini bisa dihapus
require_once 'fungsi.php'; 

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL 13</title>
</head>
<body>
    <h1>DAFTAR NAMA MAHASISWA</h1>
    <a href="create.php">Tambah Data Mahasiswa</a><br><br>

    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="masukkan nomor induk mahasiswa" autocomplete="off" size="30">
        <button type="submit" name="cari">Cari</button>
    </form>

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
            <td><a href="update.php?id=<?= $mhs['id'];?>">ubah</a> | <a href="delete.php?id=<?= $mhs['id'];?>" onclick="return confirm('yakin?');">hapus</a></td>
            <td>
                <?php
                // 1. Tentukan path lengkap ke gambar mahasiswa
                $gambar_path = "img/" . $mhs["gambar"];

                // 2. Cek apakah file gambar ada DAN nama filenya tidak kosong di database
                if (file_exists($gambar_path) && !empty($mhs["gambar"])) {
                    $sumber_gambar = $gambar_path;
                } else {
                    $sumber_gambar = "img/default.png";
                }
                ?>
                <img src="<?= $sumber_gambar; ?>" alt="Foto Profil" width="50">
            </td>
            <td><?= $mhs["npm"];?></td>
            <td><?= $mhs["nama"];?></td>
            <td><?= $mhs["email"];?></td>
            <td><?= $mhs["jurusan"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach;?>
    </table>
    
</body>
</html>