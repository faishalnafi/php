<?php

// KONFIGURASI DATABASE
// KONFIGURASI DARI koneksi.php
require_once 'koneksi.php';
$read_db = "SELECT * FROM mahasiswa ORDER BY id DESC";

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
    // $gambar = htmlspecialchars($data["gambar"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $username = htmlspecialchars($data["username"]);

    // Upload gambar
    $gambar = unggah();
    // bisa menggunakan !$gambar atau $gambar === false untuk parameternya
    if (!$gambar) {
        return false;
    }

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
    $jurusan = htmlspecialchars($data["jurusan"]);
    $username = htmlspecialchars($data["username"]);
    // $gambar = htmlspecialchars($data["gambar"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user melakukan unggah gambar
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = unggah();
    }

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

// =============================== INI BAGIAN UNGGAH GAMBAR =================================== //
function unggah() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $errorFile = $_FILES['gambar']['error'];
    $simpanFile = $_FILES['gambar']['tmp_name'];

    // cek gambar diunggah
    if($errorFile === 4) {
        echo "<script>alert('Pilih Gambar Dahulu!');</script>";
        return false;
    }

    // cek hanya gambar saja
    $validasi = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode('.', $namaFile);
    $ekstensi = strtolower(end($ekstensi));
    if(!in_array($ekstensi,$validasi)) {
        echo "<script>alert('Ekstensi yang diperbolehkan hanya jpg jpeg dan png!');</script>";
        return false;
    }

    // cek ukuran maksimal file
    // satuan ukuran dalam bentuk byte;
    $fileMax = 2000000;
    if($ukuranFile > $fileMax) {
        echo "<script>alert('Gambar yang diunggah melebihi dari 2mb!');</script>";
        return false;
    }

    // membuat nama file baru
    $namaFileBaru = uniqid() . '.' . $ekstensi; // Buat nama acak agar tidak ada nama file yang sama
    move_uploaded_file($simpanFile, 'img/' . $namaFileBaru);

    // kembalikan nama file untuk disimpan ke database
    return $namaFileBaru;
}
// ============================================================================================ //