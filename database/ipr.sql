-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 09:55 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `nama`, `password`, `level`) VALUES
(5, 'fahmi', 'Fahmi', 'f11d50d63d3891a44c332e46d6d7d561', '1'),
(6, 'dimyati', 'dimyati', '0bc980e709820f2da4ae5febe4aa12c5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip`
--

CREATE TABLE `tb_arsip` (
  `no_form` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `lampiran_form` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip`
--

INSERT INTO `tb_arsip` (`no_form`, `kategori`, `tanggal_transaksi`, `nama_barang`, `lampiran_form`) VALUES
(36, 'Pembelian', '2020-03-25', 'dsad', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset_hardware`
--

CREATE TABLE `tb_aset_hardware` (
  `kode_inventaris` int(11) NOT NULL,
  `kode_hardware` varchar(255) NOT NULL,
  `nama_hardware` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tanggal_pembelian` varchar(255) NOT NULL,
  `pemakai` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset_software`
--

CREATE TABLE `tb_aset_software` (
  `kode_lisensi` int(11) NOT NULL,
  `kode_software` varchar(255) NOT NULL,
  `nama_software` varchar(255) NOT NULL,
  `tanggal_pembelian` varchar(255) NOT NULL,
  `pemakai` varchar(255) NOT NULL,
  `status_lisensi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_tamu`
--

CREATE TABLE `tb_buku_tamu` (
  `no_buku_tamu` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `asal_perusahaan` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `bertemu` varchar(255) NOT NULL,
  `jam_masuk` datetime NOT NULL,
  `jam_keluar` datetime NOT NULL,
  `nomor_kartu` varchar(10) NOT NULL,
  `suhu_tubuh` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku_tamu`
--

INSERT INTO `tb_buku_tamu` (`no_buku_tamu`, `nama`, `asal_perusahaan`, `tujuan`, `bertemu`, `jam_masuk`, `jam_keluar`, `nomor_kartu`, `suhu_tubuh`) VALUES
(336, 'fahmi', 'PT XYZ', 'Penawaran Harga Barang', 'Dimyati', '2020-03-06 14:47:00', '0000-00-00 00:00:00', 'B908', '80'),
(337, 'fahmi', 'fahmi', 'fahmi', 'fahmi', '2020-03-06 15:33:23', '0000-00-00 00:00:00', 'fahmi', '65'),
(338, 'q', 'q', 'q', 'q', '2020-03-06 15:36:01', '0000-00-00 00:00:00', 'q', 'q'),
(339, 'q', 'q', 'q', 'q', '2020-03-06 15:48:41', '0000-00-00 00:00:00', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_tamu_detail`
--

CREATE TABLE `tb_buku_tamu_detail` (
  `no_buku_tamu` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `jenis_id` int(5) NOT NULL,
  `jenis_surat` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`jenis_id`, `jenis_surat`) VALUES
(1, 'Penting'),
(2, 'Amat segera'),
(4, 'Segera'),
(5, 'Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `pertanyaan`) VALUES
(1, 'Apakah anda pernah dirawat dirumah sakit ?'),
(5, 'Apakah anda suka berolahraga ?'),
(6, 'Apakah anda suka makan ?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(11) NOT NULL,
  `jenis_id` int(5) NOT NULL,
  `no_surat` char(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `untuk` varchar(50) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `pembuat` varchar(255) NOT NULL,
  `nama_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kendaraan`
--

CREATE TABLE `tb_surat_kendaraan` (
  `surat_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pemakai` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `plat` varchar(255) NOT NULL,
  `jam_pergi` varchar(255) NOT NULL,
  `jam_pulang` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_kendaraan`
--

INSERT INTO `tb_surat_kendaraan` (`surat_id`, `tanggal`, `pemakai`, `driver`, `tujuan`, `plat`, `jam_pergi`, `jam_pulang`, `keterangan`) VALUES
(2, '2020-03-05', 'dsda', 'Yanto', 'dsada', 'dsada', 'dsaada', '', 'dsadas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_kontrak`
--

CREATE TABLE `tb_surat_kontrak` (
  `surat_id` int(11) NOT NULL,
  `tanggal_suratkontrak` date NOT NULL,
  `nomor_suratkontrak` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `surat_id` int(11) NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `tanggal_terimasurat` date NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `diterima` varchar(255) NOT NULL,
  `nama_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `nama`, `password`) VALUES
(1, 'user', 'User', '59720b403e55bed853dd4537e736b9fb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  ADD PRIMARY KEY (`no_form`);

--
-- Indexes for table `tb_aset_hardware`
--
ALTER TABLE `tb_aset_hardware`
  ADD PRIMARY KEY (`kode_inventaris`);

--
-- Indexes for table `tb_aset_software`
--
ALTER TABLE `tb_aset_software`
  ADD PRIMARY KEY (`kode_lisensi`);

--
-- Indexes for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  ADD PRIMARY KEY (`no_buku_tamu`);

--
-- Indexes for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `tb_surat_kendaraan`
--
ALTER TABLE `tb_surat_kendaraan`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `tb_surat_kontrak`
--
ALTER TABLE `tb_surat_kontrak`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_arsip`
--
ALTER TABLE `tb_arsip`
  MODIFY `no_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_aset_hardware`
--
ALTER TABLE `tb_aset_hardware`
  MODIFY `kode_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_aset_software`
--
ALTER TABLE `tb_aset_software`
  MODIFY `kode_lisensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_buku_tamu`
--
ALTER TABLE `tb_buku_tamu`
  MODIFY `no_buku_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `jenis_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_surat_kendaraan`
--
ALTER TABLE `tb_surat_kendaraan`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_surat_kontrak`
--
ALTER TABLE `tb_surat_kontrak`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
