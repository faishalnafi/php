<?php

class SiswaModel {
    private $db;

    public function __construct() {
        // Inisialisasi koneksi database
        try {
            $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }

    /**
     * Method untuk mengambil semua data siswa dari database.
     * @return array Data semua siswa.
     */
    public function getAllSiswa() {
        $stmt = $this->db->prepare("SELECT * FROM siswa ORDER BY nama_lengkap ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Nanti kita akan tambahkan fungsi getByNisn(), tambah(), update(), delete() di sini
}