<?php

class LaporanController extends Controller {

    public function index() {
        // Penjaga Sesi
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $data['judul'] = 'Laporan Presensi';

        $this->view('layouts/header', $data);
        $this->view('layouts/sidebar', $data);
        $this->view('laporan/index', $data);
        $this->view('layouts/footer');
    }
}