<?php

class UsersController extends Controller {

    public function index() {
        // Penjaga Ganda: Cek login DAN cek role superadmin
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'superadmin') {
            // Jika tidak login atau bukan superadmin, tendang ke dashboard saja
            header('Location: ' . BASE_URL . '?url=dashboard');
            exit;
        }

        $data['judul'] = 'Manajemen User';

        $this->view('layouts/header', $data);
        $this->view('layouts/sidebar', $data);
        $this->view('users/index', $data);
        $this->view('layouts/footer');
    }
}