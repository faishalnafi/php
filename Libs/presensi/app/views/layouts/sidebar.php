<nav class="sidebar bg-dark vh-100">
    <div class="sidebar-sticky">
        <h5 class="navbar-brand text-white col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><i class="bi bi-calendar-check"></i> Presensi Ekskul</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=dashboard">
                    <i class="bi bi-grid-1x2-fill"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=siswa">
                    <i class="bi bi-people-fill"></i> Data Siswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=presensi">
                    <i class="bi bi-calendar-plus-fill"></i> Ambil Presensi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=laporan">
                    <i class="bi bi-printer-fill"></i> Laporan Presensi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=setting">
                    <i class="bi bi-gear-fill"></i> Setting Aplikasi
                </a>
            </li>

            <?php // Menu ini hanya muncul untuk superadmin ?>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'superadmin'): ?>
            <hr class="text-white">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>SUPERADMIN</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?= BASE_URL ?>?url=users">
                    <i class="bi bi-person-plus-fill"></i> Manajemen User
                </a>
            </li>
            <?php endif; ?>
        </ul>

        <div class="mt-auto p-3">
             <a class="btn btn-danger w-100" href="<?= BASE_URL ?>?url=auth/logout">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</nav>
<div class="main-content flex-fill">