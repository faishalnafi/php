<?php
if( !isset($_POST["nama"]) || empty($_POST["nama"]) ) {
    header("Location: post.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details request post metode</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_POST["nama"] ?>!</h1>
</body>
</html>