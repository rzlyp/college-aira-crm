-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aira_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` int(11) NOT NULL,
  `bukti_foto` varchar(100) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_invoice` varchar(20) NOT NULL,
  `atas_nama` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `bukti_foto`, `id_pengguna`, `id_invoice`, `atas_nama`, `status`) VALUES
(2, 'GW18.JPG', 1, 'INV/2018-07-23/155', 'Faris', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_invoice`
--

CREATE TABLE `detail_invoice` (
  `id` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `id_invoice` varchar(20) NOT NULL,
  `id_produk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_invoice`
--

INSERT INTO `detail_invoice` (`id`, `jumlah`, `id_invoice`, `id_produk`) VALUES
(1, 2, 'INV/2018-07-23/155', 8),
(2, 1, 'INV/2018-07-23/153', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `pertanyaan` varchar(191) NOT NULL,
  `jawaban` text NOT NULL,
  `id_pengguna` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_ponsel` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `kurir` varchar(20) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `ongkir` int(10) NOT NULL,
  `catatan` varchar(191) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengguna` int(10) NOT NULL,
  `status_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama`, `email`, `no_ponsel`, `alamat`, `kurir`, `total_bayar`, `ongkir`, `catatan`, `tanggal`, `id_pengguna`, `status_invoice`) VALUES
('INV/2018-07-23/153', 'Ariq', 'owner@aira.com', '0392332323', 'Jalan Jalan', 'JNE', 90000, 10000, '-', '2018-07-02', 1, 1),
('INV/2018-07-23/155', 'ariq', 'ariqfahri@gmail.com', '08234234', 'aaa', 'Pilih Kurir', 290000, 10000, '', '2018-07-23', 1, 1),
('INV/2018-07-23/173', 'Ariq', 'owner@aira.com', '0392332323', 'a', 'JNE', 120000, 10000, '-', '2018-07-21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Kerudung Segiempat'),
(2, 'Kerudung Pashmina'),
(3, 'Kerudung Instan'),
(4, 'Mukena');

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `id` int(10) NOT NULL,
  `pesan` varchar(140) NOT NULL,
  `tanggal` date NOT NULL,
  `id_invoice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komplain`
--

INSERT INTO `komplain` (`id`, `pesan`, `tanggal`, `id_invoice`) VALUES
(1, 'Tes', '2018-07-23', 'INV/2018-07-23/155');

-- --------------------------------------------------------

--
-- Table structure for table `login_pengguna`
--

CREATE TABLE `login_pengguna` (
  `id` int(10) NOT NULL,
  `password` text NOT NULL,
  `hak_akses` enum('Admin','Owner','Member','Customer Service') NOT NULL,
  `id_pengguna` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_pengguna`
--

INSERT INTO `login_pengguna` (`id`, `password`, `hak_akses`, `id_pengguna`) VALUES
(1, '12345', 'Member', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `hak_akses` enum('Admin','Owner','Customer Service','Member') DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `email`, `username`, `password`, `no`, `alamat`, `hak_akses`, `tanggal`) VALUES
(1, 'ariq', 'ariqfahri@gmail.com', 'ariqfahri', '12345', '08234234', 'aaa', 'Member', '2018-07-23'),
(2, 'Owner', 'owner@aira.com', 'owner@aira.com', '5f4dcc3b5aa765d61d8327deb882cf99', '0818073010', 'Jalan', 'Owner', '2018-07-23'),
(3, 'Rizal Yogi Pratama', 'admin@aira.com', 'admin@aira.com', '5f4dcc3b5aa765d61d8327deb882cf99', '081809673574', 'Jalan Jalan', 'Admin', '2018-07-23'),
(4, 'CS Samsul', 'cs@aira.com', 'cs@aira.com', 'password', '3232435', 'fggg', 'Customer Service', '2018-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_ponsel` varchar(16) NOT NULL,
  `pesan` varchar(140) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengguna` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(191) NOT NULL,
  `harga` int(10) NOT NULL,
  `deskripsi` varchar(191) NOT NULL,
  `stok` varchar(191) NOT NULL,
  `potongan_harga` varchar(191) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `tanggal_diperbaharui` date NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `foto`, `harga`, `deskripsi`, `stok`, `potongan_harga`, `tanggal_dibuat`, `tanggal_diperbaharui`, `id_kategori`) VALUES
(1, 'Mukena Izabel', 'Mukena_izabel.jpg', 3000000, 'BAHAN : RAYON \r\nBERAT : 950 GRAM\r\n\r\nDETAIL (KURANG LEBIH):\r\n- UKURAN PANJANG DEPAN 120 CM, - UKURAN PANJANG BELAKANG 130 CM\r\n- UKURAN PANJANG BAWAHAN 110 CM.\r\n(UKURAN JUMBO)\r\n', '20', '0', '2018-07-23', '0000-00-00', 2),
(2, 'Mukena Izabel', 'Mukena_dubai.jpg', 2000000, 'UKURAN STANDAR (untuk pengguna yang tidak tinggi), Untuk yang tinggi disarankan pakai kaos kaki\r\nUkuran (Sebelum dipakai) Panjang Depan 170cm, Panjang belakang 160cm\r\nbahan : spandex sutra\r\ns', '20', '0', '2018-07-23', '2018-07-23', 4),
(3, 'Mukena Romance Coksu', 'Mukena_romance.jpg', 350000, 'BAHAN BUBBLE\r\nUK JUMBO \r\nBERAT 850 GRAM', '20', '0', '2018-07-23', '2018-07-23', 4),
(4, 'Mukena Spandek Dubai Hitam Coklat', 'Mukena_spandek.jpg', 200000, 'UKURAN STANDAR (untuk pengguna yang tidak tinggi), Untuk yang tinggi disarankan pakai kaos kaki\r\nUkuran (Sebelum dipakai) Panjang Depan 170cm, Panjang belakang 160cm\r\nbahan : spandex sutra\r\ns', '20', '0', '2018-07-23', '2018-07-23', 4),
(5, 'Mukena Ariana Maroon', 'Mukena_ariana.jpg', 135000, 'Bahan = BSY\r\nBerat = 500 Gram\r\nPanjang Depan = 114cm\r\nPanjang Belakang = 130cm\r\nPanjang Bawahan = 115cm\r\nLebar Bawahan = 65cm', '20', '0', '2018-07-23', '2018-07-23', 4),
(6, 'Mukena Yolanda', 'Mukena_yolanda.jpg', 290000, 'BAHAN RAYON SUPER\r\nPANJANG BAWAHAN 115 CM\r\nPANJANG ATASAN DEPAN 115 CM\r\nPANJANG BELAKANG 125 CM\r\nBERAT 850 GRAM', '20', '0', '2018-07-23', '2018-07-23', 4),
(7, 'MUKENA BORDIR MANUAL AURELIA', 'MUKENA BORDIR MANUAL AURELIA.jpg', 225000, 'Bahan: BSY SUPER\r\nKarakteristik bahan: tidak kaku, ringan, mudah dicuci, tidak gampang kusut, adem, tidak menerawang, untuk tekstur bahan tidak terlalu licin dan tidak mengkilap seperti tekst', '20', '0', '2018-07-23', '2018-07-23', 4),
(8, 'MUKENA DEWASA RIBBON', 'MUKENA DEWASA RIBBON.jpg', 140000, 'BAHAN : RAYON JANGER\r\nBAHAN DIJAMIM ADEM, DAN ADA VARIASI PITA \r\nUKURAN JUMBO\r\nPANJANG ATASAN DEPAN 128CM, BELAKANG 113CM\r\nPANJANG BAWAHAN 112CM\r\nUKURAN TAS : 25x25CM', '20', '0', '2018-07-23', '2018-07-23', 4),
(9, 'Mukena Mariko Abu', 'Mukena_mariko.jpg', 220000, 'BAHAN : ROSELLA\r\nBERAT : 700 Gram\r\n\r\nPANJANG DEPAN : 123CM\r\nPANJANG BELAKANG : 135CM\r\nPANJANG BAWAHAN : 117CM\r\nTAS : 25X35', '20', '0', '2018-07-23', '2018-07-23', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan_komplain`
--

CREATE TABLE `tanggapan_komplain` (
  `id_tanggapan` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `pengirim` int(11) NOT NULL,
  `id_komplain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggapan_komplain`
--

INSERT INTO `tanggapan_komplain` (`id_tanggapan`, `tanggapan`, `pengirim`, `id_komplain`) VALUES
(1, 'Oke siap gan', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(10) NOT NULL,
  `testimoni` varchar(140) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pengguna` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `testimoni`, `tanggal`, `id_pengguna`) VALUES
(1, 'Bahannya Enak Dipakai', '2018-07-23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indexes for table `login_pengguna`
--
ALTER TABLE `login_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tanggapan_komplain`
--
ALTER TABLE `tanggapan_komplain`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tanggapan_komplain`
--
ALTER TABLE `tanggapan_komplain`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_invoice`
--
ALTER TABLE `detail_invoice`
  ADD CONSTRAINT `detail_invoice_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komplain`
--
ALTER TABLE `komplain`
  ADD CONSTRAINT `komplain_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `invoice` (`id_invoice`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
