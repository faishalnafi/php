-- =================================================================
-- SKEMA DATABASE UNTUK APLIKASI PRESENSI EKSTRAKURIKULER
-- Versi 1.2 (Final - Perbaikan Foreign Key Constraint)
-- =================================================================

-- Menghapus tabel lama jika ada untuk menghindari error saat pembuatan ulang
DROP TABLE IF EXISTS `presensi`;
DROP TABLE IF EXISTS `settings`;
DROP TABLE IF EXISTS `siswa`;
DROP TABLE IF EXISTS `users`;


-- 1. Tabel untuk menyimpan data user (admin & superadmin)
CREATE TABLE `users` (
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(100) NOT NULL,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `role` ENUM('superadmin', 'admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2. Tabel untuk menyimpan data siswa
CREATE TABLE `siswa` (
  `nisn` VARCHAR(20) PRIMARY KEY,
  `nama_lengkap` VARCHAR(100) NOT NULL,
  `kelas` VARCHAR(20) NOT NULL,
  `jenis_kelamin` ENUM('Laki-laki', 'Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 3. Tabel untuk mencatat presensi (DENGAN PERBAIKAN)
CREATE TABLE `presensi` (
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `tanggal` DATE NOT NULL,
  `nisn_siswa` VARCHAR(20) NOT NULL,
  `status` ENUM('H', 'S', 'I', 'A') NOT NULL COMMENT 'Hadir, Sakit, Ijin, Alfa',
  `id_admin` INT(11) NULL DEFAULT NULL, -- << PERUBAHAN DI SINI: dari NOT NULL menjadi NULL
  KEY `idx_tanggal` (`tanggal`),
  UNIQUE KEY `idx_tanggal_nisn` (`tanggal`, `nisn_siswa`),
  FOREIGN KEY (`nisn_siswa`) REFERENCES `siswa`(`nisn`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`id_admin`) REFERENCES `users`(`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 4. Tabel untuk pengaturan aplikasi
CREATE TABLE `settings` (
  `setting_name` VARCHAR(50) PRIMARY KEY,
  `setting_value` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =================================================================
-- DATA AWAL (SEEDING)
-- =================================================================

-- Menambahkan data user awal dengan HASH PASSWORD YANG SUDAH DIPERBAIKI
-- Password untuk superadmin adalah "superadmin123"
INSERT INTO `users` (`nama_lengkap`, `username`, `password`, `role`) VALUES
('Super Administrator', 'superadmin', '$2y$10$Y1A4T1qD/I8dJVR4i5kRDej0hF2L92sCAsf6oTIO9HcvLJK.6/TzC', 'superadmin');

-- Password untuk admin adalah "admin123"
INSERT INTO `users` (`nama_lengkap`, `username`, `password`, `role`) VALUES
('Admin Ekskul', 'admin', '$2y$10$3pCnsa2I5yBStiT8s7F.e.5uLzBv4R1jE9gH2kF7mN6oP3qR5sT8O', 'admin');

-- Menambahkan data setting awal
INSERT INTO `settings` (`setting_name`, `setting_value`) VALUES ('nama_pembina', 'Nama Pembina Ekskul');

-- Menambahkan beberapa contoh data siswa agar tidak kosong
INSERT INTO `siswa` (`nisn`, `nama_lengkap`, `kelas`, `jenis_kelamin`) VALUES
('0012345678', 'Andi Budiman', 'XI IPA 1', 'Laki-laki'),
('0012345679', 'Citra Lestari', 'XI IPS 2', 'Perempuan'),
('0012345680', 'Doni Setiawan', 'X-A', 'Laki-laki');