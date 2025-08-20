-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Agu 2025 pada 15.13
-- Versi server: 8.0.30
-- Versi PHP: 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `npm` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `username` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `gambar`, `jurusan`, `username`) VALUES
(3511, 'Budi Santoso', 20120101, 'budi@faishalnafi.com', 'budi.png', 'Teknik Informatika', 'budisantos'),
(3512, 'Dewi Nurhayati', 20120102, 'dewi@faishalnafi.com', 'hero.png', 'Sistem Informasi', 'dewinurhay'),
(3513, 'Faizal Rahman', 20120103, 'faizal@faishalnafi.com', 'hero.png', 'Desain Komunikasi Visual', 'faizalrahm'),
(3514, 'Siti Aminah', 20120104, 'siti@faishalnafi.com', 'siti.png', 'Manajemen', 'sitiaminah'),
(3515, 'Ahmad Fauzi', 20120105, 'ahmad@faishalnafi.com', 'hero.png', 'Akuntansi', 'ahmadfauzi'),
(3516, 'Ratna Sari', 20120106, 'ratna@faishalnafi.com', 'ratna.png', 'Hukum', 'ratnasari'),
(3517, 'Lukman Hakim', 20120107, 'lukman@faishalnafi.com', 'hero.png', 'Teknik Sipil', 'lukmanhaki'),
(3518, 'Rina Wulandari', 20120108, 'rina@faishalnafi.com', 'hero.png', 'Teknik Elektro', 'rinawuland'),
(3519, 'Joko Susilo', 20120109, 'joko@faishalnafi.com', 'joko.png', 'Arsitektur', 'jokosusilo'),
(3520, 'Nurul Huda', 20120110, 'nurul@faishalnafi.com', 'hero.png', 'Farmasi', 'nurulhuda'),
(3521, 'Rizky Ramadhan', 20120111, 'rizky@faishalnafi.com', 'hero.png', 'Pendidikan Bahasa Inggris', 'rizkyramad'),
(3522, 'Anisa Fitri', 20120112, 'anisa@faishalnafi.com', 'anisa.png', 'Ilmu Komunikasi', 'anisafitri'),
(3523, 'Yoga Pratama', 20120113, 'yoga@faishalnafi.com', 'hero.png', 'Sosiologi', 'yogapratam'),
(3524, 'Putri Indah', 20120114, 'putri@faishalnafi.com', 'hero.png', 'Psikologi', 'putriindah'),
(3525, 'Adi Nugroho', 20120115, 'adi@faishalnafi.com', 'adi.png', 'Hubungan Internasional', 'adinugroho'),
(3526, 'Dian Puspita', 20120116, 'dian@faishalnafi.com', 'hero.png', 'Teknik Mesin', 'dianpuspit'),
(3527, 'Fajar Kurniawan', 20120117, 'fajar@faishalnafi.com', 'hero.png', 'Kimia', 'fajarkurn'),
(3528, 'Eka Lestari', 20120118, 'eka@faishalnafi.com', 'eka.png', 'Biologi', 'ekalestari'),
(3529, 'Wahyu Saputra', 20120119, 'wahyu@faishalnafi.com', 'hero.png', 'Fisika', 'wahyusaput'),
(3530, 'Citra Dewi', 20120120, 'citra@faishalnafi.com', 'hero.png', 'Geografi', 'citradewi'),
(3531, 'Bayu Aji', 20120121, 'bayu@faishalnafi.com', 'bayu.png', 'Teknologi Pangan', 'bayuaji'),
(3532, 'Susi Susanti', 20120122, 'susi@faishalnafi.com', 'hero.png', 'Perhotelan', 'susisusant'),
(3533, 'Taufik Hidayat', 20120123, 'taufik@faishalnafi.com', 'hero.png', 'Manajemen Bisnis', 'taufikhida'),
(3534, 'Lina Marlina', 20120124, 'lina@faishalnafi.com', 'lina.png', 'Ilmu Gizi', 'linamarlin'),
(3535, 'Irfan Hakim', 20120125, 'irfan@faishalnafi.com', 'hero.png', 'Ilmu Sejarah', 'irfanhakim');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3536;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
