<?php
class AuthController extends Controller {

    // Menampilkan halaman login
    public function index() {
        $this->view('auth/login');
    }

    // Memproses data dari form login
    // ... (di dalam file AuthController.php)
    public function prosesLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
            $password = $_POST['password'];

            $userModel = $this->model('UserModel');
            $user = $userModel->getUserByUsername($username);

            // Cek apakah user ada dan password cocok
            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan data user ke session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
                $_SESSION['role'] = $user['role'];
                
                // Arahkan ke dashboard
                header('Location: ' . BASE_URL . '?url=dashboard');
                exit;
            } else {
                // Login gagal, kembali ke halaman login dengan pesan error
                header('Location: ' . BASE_URL . '?url=auth&error=1');
                exit;
            }
        } else {
            // Jika bukan POST, tendang kembali ke login
            header('Location: ' . BASE_URL);
            exit;
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL);
        exit;
    }
}