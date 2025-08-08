<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request post metode</title>
</head>
<body>
    <!-- action mengirim data kepada halaman yang dituju -->
    <!-- bila dikosongkan maka data akan dikirim ke halaman itu sendiri -->
    <!-- sedangkan bila action tersebut mengirim data kesebuah halaman
     dan terjadi aksi pengiriman maka akan otomatis di direct -->
    <form action="details-post.php" method="post">
        <!-- default method adalah get -->
        <!-- default action halaman ini sendiri -->
        Masukkan Nama
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php if( isset($_POST["submit"]) && !empty($_POST["nama"]) ): ?>
        <h1>Selamat Datang, <?= $_POST["nama"] ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        <!-- nilai action dapat dikosongkan atau action dapat dihapus -->
        Masukkan Nama 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>