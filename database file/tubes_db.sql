-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2022 pada 16.21
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_db`
--

CREATE TABLE `cart_db` (
  `id_produk` int(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` double NOT NULL,
  `foto_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart_db`
--

INSERT INTO `cart_db` (`id_produk`, `nama_produk`, `harga_produk`, `foto_produk`) VALUES
(1, 'Razer DeathAdder Essential - Black', 29.99, 'mouse.jpg'),
(2, 'Razer Huntsman V2 - Linear Optical Switch - US', 199.99, 'keyboard.jpg'),
(3, 'Razer Kraken V3 X', 69.99, 'headset.jpg'),
(4, 'Razer BlackShark V2 Pro', 99.99, 'Headset1.jpg'),
(5, 'Razer BlackShark V2', 99.99, 'Headset2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_db`
--

CREATE TABLE `list_db` (
  `id_list` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` double NOT NULL,
  `jumlah_barang` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_db`
--

INSERT INTO `list_db` (`id_list`, `nama_barang`, `harga_barang`, `jumlah_barang`) VALUES
(1, 'Razer DeathAdder Essential - Black', 29.99, 100),
(2, 'Razer Huntsman V2 - Linear Optical Switch - US', 199.99, 150);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `nomorhp` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_user`, `nama`, `email`, `alamat`, `jeniskelamin`, `nomorhp`, `tanggallahir`) VALUES
(1, 'Sarja Asra Winat1', 'asawisssnata@gmail.com', 'Bandung', 'Laki - Laki', '08228544444', '2000-07-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`, `username`, `password`, `id_user`) VALUES
('Afan', 'afan@gmail.com', 'afan', 'rahasia', 1),
('Azryal', 'azryal@gmail.com', 'azryal', 'kamuaz', 2),
('Dhafin', 'dhafin@gmail.com', 'dhafin', 'dapenganteng', 3),
('Sarja', 'sarja@gmail.com', 'iwin', 'iwingaming', 4),
('Alfatah', 'alfatah@gmail.com', 'bakara', 'bakara123', 5),
('alfatah Bakara ', 'Bakara@gmail.com', 'bakara', 'bakara00', 7),
('saya admin', 'sipaling@gmail.com', 'admin123', 'admin0', 8);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart_db`
--
ALTER TABLE `cart_db`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `list_db`
--
ALTER TABLE `list_db`
  ADD PRIMARY KEY (`id_list`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart_db`
--
ALTER TABLE `cart_db`
  MODIFY `id_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `list_db`
--
ALTER TABLE `list_db`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
