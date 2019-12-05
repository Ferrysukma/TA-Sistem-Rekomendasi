-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2019 pada 09.01
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta-rekomendasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_rekomendasi`
--

CREATE TABLE `hasil_rekomendasi` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(256) NOT NULL,
  `email_user` varchar(256) NOT NULL,
  `jurusan` varchar(256) NOT NULL,
  `total_nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_jurusan`
--

CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(256) NOT NULL,
  `jurusan` varchar(256) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `matematika` int(10) NOT NULL,
  `fisika` int(10) NOT NULL,
  `bahasa_indonesia` int(10) NOT NULL,
  `bahasa_inggris` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_siswa`
--

CREATE TABLE `profil_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `jenis_profil` varchar(50) NOT NULL,
  `keterangan_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_nilai_rapor`
--

CREATE TABLE `sys_nilai_rapor` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(256) NOT NULL,
  `pelajaran` varchar(256) NOT NULL,
  `bobot_ideal` int(1) NOT NULL,
  `faktor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_profil`
--

CREATE TABLE `sys_profil` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `jenis_profil` varchar(50) NOT NULL,
  `keterangan_profil` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_profil_siswa`
--

CREATE TABLE `sys_profil_siswa` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jenis_profil` varchar(50) NOT NULL,
  `bobot_profil` int(1) NOT NULL,
  `faktor_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `sekolah` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `sekolah`, `password`) VALUES
(2, 'Ferry Sukma Prabowo', 'ferrysukma56@gmail.com', 'SMA N 1 Pringsewu', '$2y$10$.a7hFX0kpss0mt8EizTSd.9eHUiFyRQv8k/nsnIrQeealB9eyUyQ6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_jurusan`
--
ALTER TABLE `master_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `profil_siswa`
--
ALTER TABLE `profil_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sys_nilai_rapor`
--
ALTER TABLE `sys_nilai_rapor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sys_profil`
--
ALTER TABLE `sys_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sys_profil_siswa`
--
ALTER TABLE `sys_profil_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_rekomendasi`
--
ALTER TABLE `hasil_rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `master_jurusan`
--
ALTER TABLE `master_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil_siswa`
--
ALTER TABLE `profil_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sys_nilai_rapor`
--
ALTER TABLE `sys_nilai_rapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sys_profil`
--
ALTER TABLE `sys_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sys_profil_siswa`
--
ALTER TABLE `sys_profil_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
