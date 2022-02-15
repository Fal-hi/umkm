-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 04, 2022 at 09:34 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.2

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
  `idadmin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Elpina Sari Dewi Hasibuan', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
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
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `username`, `password`, `namalengkap`, `jk`, `nohp`, `alamat`, `tgldaftar`) VALUES
(2, 'member', 'a510166163833c79aa703646f59c04bb', 'Nabila Diah Lestari', '2', '082370392566', 'Panyabungan III, Panyabungan', '2022-01-28'),
(3, 'budi', '202cb962ac59075b964b07152d234b70', 'Budi', '1', '0988', 'pppp', '2022-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
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
-- Table structure for table `konfimasibayar`
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
-- Dumping data for table `konfimasibayar`
--

INSERT INTO `konfimasibayar` (`idkonfirmasi`, `idorder`, `namabankpengirim`, `jumlahtransfer`, `tgltransfer`, `namabanktujuan`, `idmerchant`, `bukti`) VALUES
(1, '20220204134914', 'BRI', 42000, '2022-02-04', 'BRI', 9, '2_2022-02-04_WhatsApp Image 2022-02-03 at 17.48.25 (4).jpeg'),
(2, '20220204134706', 'BRI', 53000, '2022-02-04', 'BRI', 10, '2_2022-02-04_WhatsApp Image 2022-02-03 at 17.48.25 (4).jpeg'),
(3, '20220204143333', 'BRI', 55000, '2022-02-04', 'BRI', 10, '2_2022-02-04_WhatsApp Image 2022-02-03 at 17.48.25 (4).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `namakota` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`, `tarif`) VALUES
(1, 'Panyabungan II', 10000),
(3, 'Panyabungan Pasar', 5000),
(4, 'Aek Banir', 7000),
(5, 'Kayu Jati', 7000),
(6, 'Siobon Jae', 10000),
(7, 'Pasar Hilir', 6000),
(8, 'Pidoli Lombang', 12000),
(9, 'Jalan Bermula', 7000),
(10, 'Jalan Abri', 6000),
(11, 'Panyabungan III', 8000),
(12, 'Pidoli Dolok', 12000),
(13, 'Sipolupolu', 8000),
(14, 'Dalan Lidang', 12000),
(15, 'Kayu Jati', 6000),
(16, 'Gunung Barani', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
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
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`idmerchant`, `username`, `password`, `namatoko`, `jk`, `nohp`, `alamat`, `tgldaftar`, `status`) VALUES
(2, 'coffeel', 'coffeel123', 'Coffe El', '2', '085262127779', 'Depan Showroom Mobil, Jl. Willem Iskandar No. 83, Sipolu-polu, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-01', 0),
(3, 'frozen', 'frozen123', 'Family Frozen', '1', '082267018882', 'Jl. Bakti Abri No. 16, Sipolu-polu, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-01-30', 0),
(4, 'halak', 'halak123', 'Halaks Coffee', '1', '082370392566', 'Jl. Willem Iskandar No.176, Panyabungan II, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-01-30', 0),
(5, 'ruhi', 'ruhi123', 'Ruhi Coffe', '1', '082370392566', 'Jl. Willem Iskandar No.81, Dalan Lidang, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-01', 0),
(6, 'metal', 'metal123', 'Bakso Metal Mas Bro', '1', '082370392566', 'Jl. Willem Iskandar (Depan Pasar Baru) Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-02', 0),
(7, 'nenek', 'nenek123', 'Dapoer Nenek', '1', '082167888499', 'Pidoli Dolok, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-03', 0),
(8, 'coffee', 'coffee123', 'Dapoer Coffe', '1', '082167888499', 'Pidoli Dolok, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-03', 0),
(9, 'hr', 'hr123', 'HR Panyabungan', '1', '082360328770', 'Panyabungan III, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-02-02', 0),
(10, 'lopo', 'lopo123', 'Lopo Mandheling Coffee', '1', '081260003667', 'Pidoli Dolok, Panyabungan, Kabupaten Mandailing Natal, Sumatera Utara', '2022-01-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
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
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `idanggota`, `alamatkirim`, `total`, `tglorder`, `idmerchant`, `idstatusorder`) VALUES
('20220128132931', 2, 'Panyabungan II', 40000, '2022-01-28', 1, 1),
('20220204134706', 2, 'nnnnnnn', 38000, '2022-02-04', 9, 1),
('20220204134706', 2, 'nnnnnnn', 53000, '2022-02-04', 10, 3),
('20220204134914', 2, 'Sinonoan', 42000, '2022-02-04', 9, 3),
('20220204143333', 2, 'Sinonoan', 55000, '2022-02-04', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
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
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `idproduk`, `idkota`, `jumlah`, `subtotal`, `idmerchant`, `idstatusorder`) VALUES
('20220122104315', 20, 1, 1, 10000, 1, 4),
('20220122120746', 20, 2, 2, 20000, 1, 4),
('20220128132931', 20, 1, 3, 30000, 1, 1),
('20220204134706', 56, 11, 2, 30000, 9, 1),
('20220204134706', 62, 11, 3, 45000, 10, 2),
('20220204134914', 56, 14, 2, 30000, 9, 2),
('20220204143333', 61, 1, 3, 45000, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
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
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `hargaproduk`, `stok`, `detailproduk`, `foto`, `idmerchant`) VALUES
(21, 'Chicken Steak EL', 28000, 25, 'Westren Cuisine							', 'WhatsApp Image 2022-02-03 at 12.55.16 (4).jpeg', 2),
(22, 'Chicken Katsu ', 24000, 12, 'Westren Cuisine						', 'WhatsApp Image 2022-02-03 at 12.55.16 (6).jpeg', 2),
(23, 'Mie Terbang El', 20000, 18, '						Nusantara Cuisine	', 'WhatsApp Image 2022-02-03 at 12.55.16 (3).jpeg', 2),
(24, 'Caffe Latte', 16000, 36, 'Coffee						', 'WhatsApp Image 2022-02-03 at 12.55.16 (5).jpeg', 2),
(25, 'Cappucino', 16000, 30, 'Coffee						', 'WhatsApp Image 2022-02-03 at 12.55.16 (2).jpeg', 2),
(26, 'GreenTea Coffee Jelly', 28000, 15, 'Special													', 'WhatsApp Image 2022-02-03 at 12.55.16 (7).jpeg', 2),
(27, 'Caramel Coffee Jelly', 28000, 12, 'Special													', 'WhatsApp Image 2022-02-03 at 12.55.16.jpeg', 2),
(28, 'Seafood', 24000, 10, 'seafood sauce', 'WhatsApp Image 2022-02-03 at 15.58.42.jpeg', 3),
(29, 'Dimsum Ayam', 75000, 120, 'Dimsum Ayam isi 20							', 'WhatsApp Image 2022-02-03 at 15.58.41.jpeg', 3),
(30, 'Dimsum Udang', 70000, 60, 'Dimsum Udang isi 12							', 'WhatsApp Image 2022-02-03 at 15.58.41.jpeg', 3),
(31, 'Dimsum Kepiting', 70000, 50, 'Dimsum Kepiting isi 12							', 'WhatsApp Image 2022-02-03 at 15.58.41.jpeg', 3),
(32, 'Dimsum Rumput Laut', 95000, 90, 'Dimsum Rumput Laut isi 20							', 'WhatsApp Image 2022-02-03 at 15.58.41.jpeg', 3),
(33, 'Pancake Durian', 65000, 150, 'Pencake Durian isi 20							', 'pancake durian.jpg', 3),
(34, 'Lumpia', 65000, 120, 'Lumpia isi 30							', 'lumpia-16.jpg', 3),
(35, 'Tahu Balek', 35000, 10, 'Cemilan', 'tahu balek.jpg', 3),
(36, 'Americano', 10000, 30, 'Coffee', 'WhatsApp Image 2022-02-03 at 16.31.37 (3).jpeg', 4),
(37, 'Kentang Goreng', 12000, 20, 'Kentang Goreng', 'WhatsApp Image 2022-02-03 at 16.31.37 (2).jpeg', 4),
(38, 'Pisang Crispi', 10000, 25, 'Pisang Goreng Krispi', 'WhatsApp Image 2022-02-03 at 16.31.37 (1).jpeg', 4),
(39, 'Thai Tea', 15000, 19, 'Minuman Thai', 'thai.jpg', 4),
(40, 'Nasi Goreng', 12000, 25, 'Nasi Goreng Telor', 'nasi goreng.jpg', 5),
(41, 'Mie Tiaw', 10000, 35, 'Mie Goreng Tiaw', 'tiaw.jpg', 5),
(42, 'Ifo Mie', 10000, 30, 'Ifo Mie Pedas', 'ifomie.jpg', 5),
(43, 'Jus Terong Belanda', 10000, 20, 'Terong Belanda', 'terong.jpg', 5),
(44, 'Jus Kuini', 10000, 15, 'Buah Kuini', 'kuni.jpg', 5),
(45, 'Bakso Metal', 16000, 75, 'Bakso Daging Metal', 'metal.jpg', 6),
(46, 'Bakso BMW', 32000, 50, 'Bakso BMW', 'bmw.jpg', 6),
(47, 'Bakso Iga', 21000, 43, 'Bakso Iga Sapi', 'iga.jpg', 6),
(48, 'Kentang Goreng', 12000, 25, 'Kentang', 'WhatsApp Image 2021-11-09 at 17.29.28.jpeg', 7),
(49, 'Ikan Bakar', 15000, 12, 'Ikan Nila', 'WhatsApp Image 2022-02-03 at 17.15.06 (4).jpeg', 7),
(50, 'Bakso Goreng', 10000, 15, 'Bakso Sapi', 'WhatsApp Image 2022-02-03 at 17.15.07 (1).jpeg', 7),
(51, 'Nasi Goreng', 12000, 20, 'Nasi Goreng Telor', 'WhatsApp Image 2022-02-03 at 17.15.07.jpeg', 7),
(52, 'Cappucino', 10000, 35, 'Coffee							', 'WhatsApp Image 2021-11-09 at 17.29.29.jpeg', 8),
(53, 'Coffee Latte', 15000, 25, 'Coffee', 'WhatsApp Image 2022-02-03 at 17.15.06.jpeg', 8),
(54, 'Roti Bakar Keju', 12000, 20, 'Roti Bakar Pakai Keju', 'WhatsApp Image 2022-02-03 at 17.31.06 (1).jpeg', 9),
(55, 'Es Krim Coklat', 12000, 14, 'Es Coklat', 'WhatsApp Image 2022-02-03 at 17.31.06.jpeg', 9),
(56, 'Es Krim Buah', 15000, 17, 'Es Krim Buah', 'WhatsApp Image 2022-02-03 at 17.31.06 (2).jpeg', 9),
(57, 'Kue Lupis', 7000, 25, 'Kue Lupis Aren', 'WhatsApp Image 2022-02-03 at 17.31.06 (3).jpeg', 9),
(58, 'Pisang Bakar Keju', 15000, 20, 'Pisang Bakar Pakai Keju', 'WhatsApp Image 2022-02-03 at 17.48.25.jpeg', 10),
(59, 'Exspresso', 12000, 30, 'Coffee Expresso', 'WhatsApp Image 2022-02-03 at 17.48.25 (5).jpeg', 10),
(60, 'Coffee Latte', 16000, 25, 'Coffee', 'WhatsApp Image 2022-02-03 at 17.48.25 (4).jpeg', 10),
(61, 'Cappucino', 15000, 30, 'Coffee', 'WhatsApp Image 2022-02-03 at 17.48.25 (2).jpeg', 10),
(62, 'Ocean Blue', 15000, 10, 'Minuman pakai selasih', 'WhatsApp Image 2022-02-03 at 17.48.25 (3).jpeg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `statusorder`
--

CREATE TABLE `statusorder` (
  `idstatusorder` int(11) NOT NULL,
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
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `idmerchant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `statusorder`
--
ALTER TABLE `statusorder`
  MODIFY `idstatusorder` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
