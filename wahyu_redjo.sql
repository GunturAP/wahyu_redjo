-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 16.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wahyu_redjo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_emas`
--

CREATE TABLE `harga_emas` (
  `id` int(11) NOT NULL,
  `jual_6` int(11) NOT NULL,
  `beli_6` int(11) NOT NULL,
  `jual_8` int(11) NOT NULL,
  `beli_8` int(11) NOT NULL,
  `jual_16` int(11) NOT NULL,
  `beli_16` int(11) NOT NULL,
  `jual_17` int(11) NOT NULL,
  `beli_17` int(11) NOT NULL,
  `jual_8_p` int(11) NOT NULL,
  `beli_8_p` int(11) NOT NULL,
  `jual_24` int(11) NOT NULL,
  `beli_24` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga_emas`
--

INSERT INTO `harga_emas` (`id`, `jual_6`, `beli_6`, `jual_8`, `beli_8`, `jual_16`, `beli_16`, `jual_17`, `beli_17`, `jual_8_p`, `beli_8_p`, `jual_24`, `beli_24`, `time`) VALUES
(1, 3, 4, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1700923801);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `kota`, `alamat`, `no_tlp`, `foto`) VALUES
(5, 'Malang', 'Sukun', 2147483647, 'Malang.JPG'),
(6, 'Sidoarjo', 'Gaeor', 2147483647, 'Sidoarjo.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_harga_emas`
--

CREATE TABLE `riwayat_harga_emas` (
  `id_riwayat` int(11) NOT NULL,
  `jual_6` int(11) NOT NULL,
  `beli_6` int(11) NOT NULL,
  `jual_8` int(11) NOT NULL,
  `beli_8` int(11) NOT NULL,
  `jual_16` int(11) NOT NULL,
  `beli_16` int(11) NOT NULL,
  `jual_17` int(11) NOT NULL,
  `beli_17` int(11) NOT NULL,
  `jual_8_p` int(11) NOT NULL,
  `beli_8_p` int(11) NOT NULL,
  `jual_24` int(11) NOT NULL,
  `beli_24` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `bln` int(11) NOT NULL,
  `thn` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_harga_emas`
--

INSERT INTO `riwayat_harga_emas` (`id_riwayat`, `jual_6`, `beli_6`, `jual_8`, `beli_8`, `jual_16`, `beli_16`, `jual_17`, `beli_17`, `jual_8_p`, `beli_8_p`, `jual_24`, `beli_24`, `tgl`, `bln`, `thn`, `time`) VALUES
(2, 3, 4, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 11, 2023, 1700923801);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Admin', '$2y$10$HVVggolYtcmlr1iKmJBnvepZuqTtgY1qpowVXbxgMk9QoxQ.eDU8O');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `harga_emas`
--
ALTER TABLE `harga_emas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `riwayat_harga_emas`
--
ALTER TABLE `riwayat_harga_emas`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `harga_emas`
--
ALTER TABLE `harga_emas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_harga_emas`
--
ALTER TABLE `riwayat_harga_emas`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
