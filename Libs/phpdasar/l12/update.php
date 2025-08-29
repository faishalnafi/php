<?php
require 'konfigurasi.php';

// ambil id dari url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = read("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakah tombol simpan sudah ditekan
if (isset($_POST["submit"])) {
    
    // Panggil fungsi update dan langsung kirimkan data dari $_POST
    // Jika update() berhasil, hasilnya akan lebih dari 0
    if (update($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'update.php';
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
    <title>PHP MYSQL 10 | Update data</title>
</head>
<body>
    <h1>Halaman Ubah Mahasiswa</h1>
    <a href="index.php">Kembali</a>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li><label for="npm">NRP: </label><input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>"></li>
            <li><label for="nama">Nama: </label><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>"></li>
            <li><label for="username">Username: </label><input type="text" name="username" id="username" required value="<?= $mhs["username"]; ?>"></li>
            <li><label for="email">Surel: </label><input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>"></li>
            <li><label for="jurusan">Jurusan: </label><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>"></li>
            <li><label for="gambar">Profil: </label><input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"></li>
            <li><button type="submit" name="submit">Simpan</button></li>
        </ul>
    </form>
</body>
</html>