<?php
require_once 'konfigurasi.php';

function cari($keyword) {
    $query = "SELECT * FROM mahasiswa WHERE
                npm LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ORDER BY id DESC
            ";

    return read($query);
}

