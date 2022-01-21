-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 08:25 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(0, 'admin', '202cb962ac59075b964b07152d234b70', 'sutan nasution', 'administrator'),
(3, 'syaifal', '46d6490d8f4b51dced0086def68dd2de', 'syaifal', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `username`, `password`, `namalengkap`, `jk`, `nohp`, `alamat`, `tgldaftar`) VALUES
(1, 'pina', 'cad77c7dffc10fcacc77ff0690f2897a', 'Pina Sdh', '2', '08200300400', 'Panyabungan', '2022-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int NOT NULL,
  `idproduk` int NOT NULL,
  `idanggota` int NOT NULL,
  `jumlahbeli` int NOT NULL,
  `tglcart` date NOT NULL,
  `idmerchant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfimasibayar`
--

CREATE TABLE `konfimasibayar` (
  `idkonfirmasi` int NOT NULL,
  `idorder` varchar(50) NOT NULL,
  `namabankpengirim` varchar(50) NOT NULL,
  `jumlahtransfer` int NOT NULL,
  `tgltransfer` date NOT NULL,
  `namabanktujuan` varchar(50) NOT NULL,
  `idmerchant` int NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idkota` int NOT NULL,
  `namakota` varchar(50) NOT NULL,
  `tarif` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`, `tarif`) VALUES
(1, 'Panyabungan', 10000),
(2, 'Medan', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `idmerchant` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`idmerchant`, `username`, `password`, `namatoko`, `jk`, `nohp`, `alamat`, `tgldaftar`, `status`) VALUES
(1, 'pina', 'pina', 'toko vina', '1', '08000111222', 'kota jambi', '2022-01-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` varchar(100) NOT NULL,
  `idanggota` int NOT NULL,
  `alamatkirim` text NOT NULL,
  `total` int NOT NULL,
  `tglorder` date NOT NULL,
  `idmerchant` int NOT NULL,
  `idstatusorder` int NOT NULL COMMENT '1=tunggubayar. 2=konfirmasiadmin. 3=diterima. 0=cancel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `idorder` varchar(50) NOT NULL,
  `idproduk` int NOT NULL,
  `idkota` int NOT NULL,
  `jumlah` int NOT NULL,
  `subtotal` int NOT NULL,
  `idmerchant` int NOT NULL,
  `idstatusorder` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` int NOT NULL,
  `stok` int NOT NULL,
  `detailproduk` text NOT NULL,
  `foto` text NOT NULL,
  `idmerchant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `hargaproduk`, `stok`, `detailproduk`, `foto`, `idmerchant`) VALUES
(20, 'Burger', 10000, 10, 'Burger enak', 'burger.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `statusorder`
--

CREATE TABLE `statusorder` (
  `idstatusorder` int NOT NULL,
  `namastatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Indexes for table `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  ADD PRIMARY KEY (`idkonfirmasi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`idmerchant`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`,`idmerchant`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `statusorder`
--
ALTER TABLE `statusorder`
  ADD PRIMARY KEY (`idstatusorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  MODIFY `idkonfirmasi` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `idmerchant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `statusorder`
--
ALTER TABLE `statusorder`
  MODIFY `idstatusorder` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
