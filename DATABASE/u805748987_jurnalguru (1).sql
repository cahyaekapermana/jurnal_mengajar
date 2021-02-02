-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 06:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u805748987_jurnalguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_jurnal`
--

CREATE TABLE `detail_jurnal` (
  `id_detail_jurnal` int(11) NOT NULL,
  `id_jurnal` varchar(100) NOT NULL,
  `id_siswa` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `id_profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kegiatan` text COLLATE utf8mb4_unicode_ci,
  `tugas` text COLLATE utf8mb4_unicode_ci,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `tgl_jurnal` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `link_tugas`
--

CREATE TABLE `link_tugas` (
  `id_link` int(11) NOT NULL,
  `id_profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_tugas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_tugas` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link_tugas`
--

INSERT INTO `link_tugas` (`id_link`, `id_profile`, `nama_tugas`, `link_tugas`, `created_at`) VALUES
(1, NULL, 'Matematika', 'https://www.youtube.com/', '2021-01-26 16:34:19'),
(2, NULL, 'BELAJAR CRUD', 'https://codeigniter.com/userguide3/general/models.html', '2021-01-26 17:02:47'),
(3, NULL, 'Belajar OOP', 'https://www.petanikode.com/java-oop/', '2021-01-29 15:44:11'),
(5, '6', 'Belajar OOP PHP Dasar', 'https://codeigniter.com/userguide3/general/models.html', '2021-01-29 16:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id_masukan` int(11) NOT NULL,
  `id_profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masukan` text COLLATE utf8mb4_unicode_ci,
  `jawaban` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_profile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_nilai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `id_nilai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_siswa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_siswa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_nilaisiswa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_produk` text COLLATE utf8mb4_unicode_ci,
  `link_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_siswa` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_profile` int(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instansi` varchar(225) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `konf_password` varchar(255) NOT NULL,
  `premium` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_profile`, `foto_profil`, `nama_user`, `no_telepon`, `email`, `instansi`, `password`, `konf_password`, `premium`, `created_at`) VALUES
(6, '', 'Cahya Eka', '08121736043', 'cahyaekapermana@gmail.com', 'Hummasoft', '$2y$10$ZvYGa7Ea5ocG.VC0Ym02BOfVEVxeZH8vbqnGoF1s63dttzbtmx7c6', '$2y$10$XMByhP1mKGSf1wRZ96yJG.9SqdmQBxDFX8HDt20x7OncVrqnATBuC', NULL, NULL),
(7, '', 'Mala', '08121736041', 'mala@gmail.com', 'Hummasoft', '$2y$10$PprEEVHbOgqHF2D4qXAiC.HZX7lQtOwPUAni/5cmuZ.05zEO9/lRG', '$2y$10$IT5Wv3lwV.XkpMFx4eatyenHxxH4hWgSfsHx3OoFbZ92HS8WFcJBC', NULL, NULL),
(8, '', 'Muhakam', '08121736044', 'muhakam@gmail.com', 'Hummasoft', '$2y$10$9KlK/bZCWlKZWJAVlCSiges3wThHIuJdlaF8qjCGVYbCz1sYiE3w6', '$2y$10$Bp6aAURxCD4qBtxd0twxtOCUjWqD47r20c3CfFai85Pw8qu7BIn/.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_jurnal`
--
ALTER TABLE `detail_jurnal`
  ADD PRIMARY KEY (`id_detail_jurnal`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `link_tugas`
--
ALTER TABLE `link_tugas`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id_masukan`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_jurnal`
--
ALTER TABLE `detail_jurnal`
  MODIFY `id_detail_jurnal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `link_tugas`
--
ALTER TABLE `link_tugas`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id_masukan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_profile` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
