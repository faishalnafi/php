<?php

// KONFIGURASI DATABASE
// KONFIGURASI DARI koneksi.php
require_once 'koneksi.php';
$read_db = "SELECT * FROM mahasiswa";

function read ($read) {
    global $conn;

    $result = mysqli_query($conn, $read);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function create ($data) {
    global $conn;

    // Ambil data dari array $data dan amankan dari HTML injection
    // Ini praktik keamanan yang baik
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $username = htmlspecialchars($data["username"]);

    // Bangun query INSERT di DALAM fungsi, dengan data yang sudah diterima
    $query = "INSERT INTO mahasiswa (nama, npm, email, gambar, jurusan, username) VALUES ('$nama', '$npm', '$email', '$gambar', '$jurusan', '$username')";

    // Jalankan query
    mysqli_query($conn, $query);

    // Kembalikan jumlah baris yang terpengaruh oleh query (1 jika berhasil, -1 jika error)
    return mysqli_affected_rows($conn);
}

function delete ($id) {
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);
    // Kembalikan jumlah baris yang terpengaruh oleh query (1 jika berhasil, -1 jika error)
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    // Ambil data dari array $data dan amankan
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $email = htmlspecialchars($data["email"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $username = htmlspecialchars($data["username"]);

    // ================== INI BAGIAN YANG DIPERBAIKI ==================
    // Gunakan sintaks UPDATE yang benar:
    // UPDATE nama_tabel SET kolom1 = nilai1, kolom2 = nilai2, ... WHERE id = ...
    $query = "UPDATE mahasiswa SET 
                nama = '$nama', 
                npm = '$npm', 
                email = '$email', 
                gambar = '$gambar', 
                jurusan = '$jurusan', 
                username = '$username' 
              WHERE id = $id";
    // ===============================================================

    // Jalankan query
    mysqli_query($conn, $query);

    // Kembalikan jumlah baris yang terpengaruh oleh query
    return mysqli_affected_rows($conn);
}