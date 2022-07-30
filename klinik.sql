-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2022 at 10:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(40) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `spesialis` varchar(40) NOT NULL,
  `kategori` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `kategori`) VALUES
(1015, 'dr.decas', 'penyakit jiwa', 6),
(1016, 'dr. fretty', 'kehamilan', 2),
(1017, 'dr.aci', 'spritual', 1),
(1018, 'dr.tari', 'gigi', 2),
(1020, 'dr.reno', 'penyakit dalam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(40) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `status`) VALUES
(1, 'Ready'),
(2, 'Tidak Ready'),
(3, 'Sibuk'),
(6, 'cuti');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(40) NOT NULL,
  `pasien` int(255) NOT NULL,
  `obat` int(255) NOT NULL,
  `jumlah_obat` int(255) NOT NULL,
  `total_harga` int(40) NOT NULL,
  `jumlah_uang` int(40) NOT NULL,
  `kembalian` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Waiter'),
(3, 'Kasir'),
(4, 'Owner'),
(5, 'Pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(255) NOT NULL,
  `nama_obat` varchar(40) NOT NULL,
  `status_obat` varchar(40) NOT NULL,
  `harga` int(20) NOT NULL,
  `jumlah` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `status_obat`, `harga`, `jumlah`) VALUES
(3, 'paramex', 'Obat Bebas', 3000, 470),
(4, 'paracetamol', 'Obat Bebas', 20000, 500),
(6, 'bodrexin', 'Obat Bebas', 50000, 400),
(7, 'antimex', 'Obat Bebas', 90000, 100),
(8, 'antangin', 'Obat Bebas', 3100, 100),
(9, 'diabetasol', 'Obat Bebas', 70000, 480),
(10, 'antimo', 'Obat Bebas', 2000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(255) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `umur` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `umur`, `jenis_kelamin`) VALUES
(4, 'decas', 'jambi', '89', 'Laki-laki'),
(5, 'aci', 'jamtos', '21', 'Perempuan'),
(7, 'tari', 'dubai', '12', 'Perempuan'),
(8, 'deni', 'broni', '21', 'Laki-laki'),
(9, 'frety', 'mayang', '21', 'Perempuan'),
(10, 'bagas', 'mendalo', '21', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(40) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `gender`, `jabatan`) VALUES
(1, 'denny c', 'Laki-laki', 'Kasir'),
(2, 'aci', 'Perempuan', 'Apoteker'),
(3, 'tari', 'Perempuan', 'Kasir'),
(4, 'frety', 'Perempuan', 'Apoteker'),
(5, '', 'Laki-laki', 'Apoteker');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_data` int(40) NOT NULL,
  `pasien` int(40) NOT NULL,
  `tanggal` date NOT NULL,
  `subjektif` text NOT NULL,
  `objektif` text NOT NULL,
  `asesmen` text NOT NULL,
  `keluhan` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_data`, `pasien`, `tanggal`, `subjektif`, `objektif`, `asesmen`, `keluhan`, `keterangan`) VALUES
(4, 4, '2022-05-30', 'sakit palak', 'tb:170 tensi: 200/100', 'parah', 'pusing parah', 'dirawat dirumah'),
(5, 10, '2022-06-02', 'diare', 'TB: 170 BB: 65 Tensi: 170/100', 'Parah', 'Sakit Perut', 'Rawat inap');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(40) NOT NULL,
  `pasien` int(255) NOT NULL,
  `obat` int(255) NOT NULL,
  `jumlah_obat` varchar(20) NOT NULL,
  `total_harga` varchar(40) NOT NULL,
  `tanggal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `pasien`, `obat`, `jumlah_obat`, `total_harga`, `tanggal`) VALUES
(1, 4, 9, '2', '140000', '31-05-2022'),
(2, 4, 3, '22', '66000', '31-05-2022'),
(3, 4, 3, '6', '18000', '31-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `id_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_user`, `id_level`) VALUES
(0, 'kasir', 'a2FzaXI=', 'kasir@gmail.com', 'kasir', 3),
(26, 'admin', 'YWRtaW4=', 'denifeb@gmail.com', 'Deni Febriansyah', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `pasien` (`pasien`),
  ADD KEY `obat` (`obat`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `pasien` (`pasien`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `pasien` (`pasien`),
  ADD KEY `obat` (`obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_data` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`obat`) REFERENCES `obat` (`id_obat`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`obat`) REFERENCES `obat` (`id_obat`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
