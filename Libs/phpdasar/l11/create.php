<?php
require 'konfigurasi.php';

// Cek apakah tombol simpan sudah ditekan
if (isset($_POST["submit"])) {
    
    // Panggil fungsi create dan langsung kirimkan data dari $_POST
    // Jika create() berhasil, hasilnya akan lebih dari 0
    if (create($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'create.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL 11 | create data</title>
</head>
<body>
    <h1>Halaman Tambah Data Mahasiswa</h1>
    <a href="index.php">Kembali</a>

    <form action="" method="post">
        <ul>
            <li><label for="npm">NRP: </label><input type="text" name="npm" id="npm" required></li>
            <li><label for="nama">Nama: </label><input type="text" name="nama" id="nama" required></li>
            <li><label for="username">Username: </label><input type="text" name="username" id="username"></li>
            <li><label for="email">Surel: </label><input type="text" name="email" id="email"></li>
            <li><label for="jurusan">Jurusan: </label><input type="text" name="jurusan" id="jurusan"></li>
            <li><label for="gambar">Profil: </label><input type="text" name="gambar" id="gambar"></li>
            <li><button type="submit" name="submit">Simpan</button></li>
        </ul>
    </form>
</body>
</html>