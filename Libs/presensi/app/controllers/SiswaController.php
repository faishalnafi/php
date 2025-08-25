<?php

class SiswaController extends Controller {

    public function index() {
        // Penjaga Sesi
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $data['judul'] = 'Data Siswa';

        // Panggil SiswaModel untuk mengambil data
        $siswaModel = $this->model('SiswaModel');
        $data['siswa'] = $siswaModel->getAllSiswa(); 

        // Memanggil view dan layout
        $this->view('layouts/header', $data);
        $this->view('layouts/sidebar', $data);
        $this->view('siswa/index', $data);
        $this->view('layouts/footer');
    }
}