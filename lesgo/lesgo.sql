-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2022 pada 12.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lesgo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(5) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(2, 'IT Consultant'),
(3, 'Software Engineer'),
(4, 'HRD'),
(5, 'Marketing'),
(7, 'Produksi'),
(9, 'asdasd'),
(10, 'asdas'),
(11, 'wqqq'),
(12, 'asaaaa'),
(13, 'sdwdea'),
(14, 'ffff'),
(15, 'gggg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_jabatan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `tgl_lahir`, `foto`, `keterangan`, `id_jabatan`) VALUES
(1, 'Jordan Vibesco', 'L', '2001-06-29', '61ef77fa35af2.png', 'Senior', 3),
(4, 'Sou', 'L', '2001-06-29', '61efad5eb0c69.jpeg  ', 'Lesgow', 3),
(24, 'asdasd', 'L', '2022-01-05', '61f269f181f59.jpg', 'sad', 4),
(25, 'asdas', 'P', '2022-01-20', '61f26a0122468.jpg', 'sadas', 4),
(26, 'aaaa', 'P', '2021-12-31', '61f26a1380369.png', 'asdas', 2),
(27, 'sadaaa', 'L', '2022-01-20', '61f26a23355ea.jpg', 'asas', 5),
(28, 'Raihan', 'L', '2022-01-07', '61f26dcf45d75.jpg', 'www', 4),
(29, 'wqeqwe', 'P', '2021-12-30', '61f2c5a8516da.jpg', 'qwewqe', 4),
(30, 'qweqwe', 'P', '2022-01-12', '61f2c5b99e917.jpg', 'qwe', 3),
(31, 'asdasdasd', 'P', '2022-01-13', '61f2c5d434776.jpg', 'asdas', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`) VALUES
(5, 'Jordan Vibesco', 'sou', '$2y$10$miA8gN7viwrfF6rD.bstQO0STnjPvM3.WC/pIltuRFzPiC2JlXi2O'),
(6, 'Raihan Ibnu', 'raibnum', '$2y$10$3.b1554o3oIs8dRYlkrQiOOq2ZXA3y7e3lAyn2ADL57oYsH9.k9Ve');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
