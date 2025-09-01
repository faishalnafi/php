-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Sep 2025 pada 01.45
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
(3512, 'Dewi Nurhayati', 20120102, 'dewi@faishalnafi.com', 'hero.png', 'Sistem Informasi', 'dewinurhay'),
(3513, 'Faizal Rahman', 20120103, 'faizal@faishalnafi.com', 'hero.png', 'Desain Komunikasi Visual', 'faizalrahm'),
(3515, 'Ahmad Fauzi', 20120105, 'ahmad@faishalnafi.com', 'hero.png', 'Akuntansi', 'ahmadfauzi'),
(3517, 'Lukman Hakim', 20120107, 'lukman@faishalnafi.com', 'hero.png', 'Teknik Sipil', 'lukmanhaki'),
(3518, 'Rina Wulandari', 20120108, 'rina@faishalnafi.com', 'hero.png', 'Teknik Elektro', 'rinawuland'),
(3519, 'Joko Susilo', 20120109, 'joko@faishalnafi.com', 'joko.png', 'Arsitektur', 'jokosusilo'),
(3520, 'Nurul Huda', 20120110, 'nurul@faishalnafi.com', 'hero.png', 'Farmasi', 'nurulhuda'),
(3521, 'Rizky Ramadhan', 20120111, 'rizky@faishalnafi.com', 'hero.png', 'Pendidikan Bahasa Inggris', 'rizkyramad'),
(3522, 'Anisa Fitri', 20120112, 'anisa@faishalnafi.com', 'anisa.png', 'Ilmu Komunikasi', 'anisafitri'),
(3523, 'Yoga Pratama', 20120113, 'yoga@faishalnafi.com', 'hero.png', 'Sosiologi', 'yogapratam'),
(3524, 'Putri Indah', 20120114, 'putri@faishalnafi.com', '68b4436006535.png', 'Psikologi', 'putriindah'),
(3525, 'Adi Nugroho', 20120115, 'adi@faishalnafi.com', 'adi.png', 'Hubungan Internasional', 'adinugroho'),
(3526, 'Dian Puspita', 20120116, 'dian@faishalnafi.com', 'hero.png', 'Teknik Mesin', 'dianpuspit'),
(3527, 'Fajar Kurniawan', 20120117, 'fajar@faishalnafi.com', '68b442d27d6e7.Logo-Tengah-Stack-Up-1.jpg', 'Kimia', 'fajarkurn'),
(3528, 'Eka Lestari', 20120118, 'eka@faishalnafi.com', 'eka.png', 'Biologi', 'ekalestari'),
(3529, 'Wahyu Saputra', 20120119, 'wahyu@faishalnafi.com', '68b442be36efc.PicsArt_07-27-01.03.08.png', 'Fisika', 'wahyusaput'),
(3530, 'Citra Dewi', 20120120, 'citra@faishalnafi.com', '68b442990ca7c.user.png', 'Geografi', 'citradewi'),
(3531, 'Bayu Aji', 20120121, 'bayu@faishalnafi.com', 'bayu.png', 'Teknologi Pangan', 'bayuaji'),
(3532, 'Susi Susanti', 20120122, 'susi@faishalnafi.com', '68b4427fc0719.domains.png', 'Perhotelan', 'susisusant'),
(3533, 'Taufik Hidayat', 20120123, 'taufik@faishalnafi.com', 'hero.png', 'Manajemen Bisnis', 'taufikhida'),
(3534, 'Lina Marlina', 20120124, 'lina@faishalnafi.com', 'lina.png', 'Ilmu Gizi', 'linamarlin'),
(3535, 'Irfan Hakim', 20120125, 'irfan@faishalnafi.com', '68b441918148d.avatar.jpg', 'Ilmu Sejarah', 'irfanhakim'),
(3536, 'Faishal Nafi Rabbani', 20120125, 'afi@mail.com', '68b44176ea188.AvatarHero.jpg', 'Sistem Informasi', 'faishalnafi'),
(3542, 'Faishal Nafi&#039; Rabbani', 20120126, 'faishalnafi50@gmail.com', '68b4380248457.avatar1.jpg', 'Sistem Informasi', 'nafi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3543;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
