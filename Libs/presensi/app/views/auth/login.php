<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 2.5rem;
        }
        .form-control-lg {
            border-radius: 0.75rem;
        }
        .btn-primary {
            padding: 0.75rem;
            border-radius: 0.75rem;
            font-weight: 600;
        }
        .brand-logo {
            font-size: 2.5rem;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 1.5rem;
        }
        .brand-logo i {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="col-md-5 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <div class="brand-logo">
                            <i class="bi bi-calendar-check"></i> Presensi
                        </div>
                        <p class="text-muted mb-4">Silakan masuk untuk melanjutkan</p>
                    </div>

                    <?php if(isset($_GET['error'])): ?>
                        <div class="alert alert-danger" role="alert">
                            Username atau password salah!
                        </div>
                    <?php endif; ?>

                    <form action="<?= BASE_URL ?>?url=auth/prosesLogin" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control form-control-lg" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                             <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>