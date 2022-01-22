-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2022 pada 06.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(0, 'admin', '202cb962ac59075b964b07152d234b70', 'sutan nasution', 'administrator'),
(3, 'syaifal', '46d6490d8f4b51dced0086def68dd2de', 'syaifal', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`idanggota`, `username`, `password`, `namalengkap`, `jk`, `nohp`, `alamat`, `tgldaftar`) VALUES
(1, 'pina', 'cad77c7dffc10fcacc77ff0690f2897a', 'Pina Sdh', '2', '08200300400', 'Panyabungan', '2022-01-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `tglcart` date NOT NULL,
  `idmerchant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfimasibayar`
--

CREATE TABLE `konfimasibayar` (
  `idkonfirmasi` int(11) NOT NULL,
  `idorder` varchar(50) NOT NULL,
  `namabankpengirim` varchar(50) NOT NULL,
  `jumlahtransfer` int(11) NOT NULL,
  `tgltransfer` date NOT NULL,
  `namabanktujuan` varchar(50) NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfimasibayar`
--

INSERT INTO `konfimasibayar` (`idkonfirmasi`, `idorder`, `namabankpengirim`, `jumlahtransfer`, `tgltransfer`, `namabanktujuan`, `idmerchant`, `bukti`) VALUES
(1, '20220122104315', 'Pina', 20000, '2022-01-22', 'Nagari', 1, '1_2022-01-22_transfer1.jpg'),
(2, '20220122120746', 'Pina', 25000, '2022-01-22', 'Nagari', 1, '1_2022-01-22_transfer2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `namakota` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`, `tarif`) VALUES
(1, 'Panyabungan', 10000),
(2, 'Medan', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchant`
--

CREATE TABLE `merchant` (
  `idmerchant` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchant`
--

INSERT INTO `merchant` (`idmerchant`, `username`, `password`, `namatoko`, `jk`, `nohp`, `alamat`, `tgldaftar`, `status`) VALUES
(1, 'pina', 'pina', 'toko vina', '1', '08000111222', 'kota jambi', '2022-01-22', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `idorder` varchar(100) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `alamatkirim` text NOT NULL,
  `total` int(11) NOT NULL,
  `tglorder` date NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `idstatusorder` int(11) NOT NULL COMMENT '1=tunggubayar. 2=konfirmasiadmin. 3=diterima. 0=cancel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`idorder`, `idanggota`, `alamatkirim`, `total`, `tglorder`, `idmerchant`, `idstatusorder`) VALUES
('20220122104315', 1, 'Kota Padang', 20000, '2022-01-22', 1, 4),
('20220122120746', 1, 'modan keren', 25000, '2022-01-22', 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetail`
--

CREATE TABLE `orderdetail` (
  `idorder` varchar(50) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idkota` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `idstatusorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `idproduk`, `idkota`, `jumlah`, `subtotal`, `idmerchant`, `idstatusorder`) VALUES
('20220122104315', 20, 1, 1, 10000, 1, 4),
('20220122120746', 20, 2, 2, 20000, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `detailproduk` text NOT NULL,
  `foto` text NOT NULL,
  `idmerchant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `hargaproduk`, `stok`, `detailproduk`, `foto`, `idmerchant`) VALUES
(20, 'Burger', 10000, 7, 'Burger enak', 'burger.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statusorder`
--

CREATE TABLE `statusorder` (
  `idstatusorder` int(11) NOT NULL,
  `namastatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Indeks untuk tabel `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  ADD PRIMARY KEY (`idkonfirmasi`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indeks untuk tabel `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`idmerchant`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`,`idmerchant`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indeks untuk tabel `statusorder`
--
ALTER TABLE `statusorder`
  ADD PRIMARY KEY (`idstatusorder`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `merchant`
--
ALTER TABLE `merchant`
  MODIFY `idmerchant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `statusorder`
--
ALTER TABLE `statusorder`
  MODIFY `idstatusorder` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
