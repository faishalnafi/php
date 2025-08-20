<?php

// KONFIGURASI DATABASE
// KONFIGURASI DARI koneksi.php
require 'koneksi.php';
$qr_db = "SELECT * FROM mahasiswa";

function query ($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}