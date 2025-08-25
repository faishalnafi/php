<?php
class DashboardController extends Controller {
    public function index() {
        // Cek apakah session user ada, jika tidak, tendang ke halaman login
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL);
            exit;
        }

        $data['judul'] = 'Dashboard';
        $data['nama'] = $_SESSION['nama_lengkap'];

        $this->view('layouts/header', $data);
        $this->view('layouts/sidebar', $data);
        $this->view('dashboard/index', $data);
        $this->view('layouts/footer');
    }
}