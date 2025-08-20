<?php

//  KONEKSI KE DATABASE MYSQL
$server = "localhost";
$user = "root";
$password = "";
$database = "phpdasar";

$conn = mysql_connect($server, $user, $password, $database);
if (!$conn) {
    die ("Koneksi gagal: " . mysqli_connect_error());
}