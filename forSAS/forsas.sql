-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 03:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_kantor` varchar(255) NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id`, `kode_kantor`, `nama_kantor`, `alamat`, `no_telp`) VALUES
(20, 'SAS-001', 'Kantor Witel Yogyakarta (Kota Baru)', 'Jl. Yos Sudarso No.9', '0274-515500'),
(21, 'SAS-002', 'STO PUGERAN', 'Jl. MT Haryono No.21, Yogyakarta', '0274-371200'),
(22, 'SAS-003', 'STO Kalasan', ' Jl. Yogya-Solo KM.14,3', '0274-496111'),
(23, 'SAS-004', 'STO Wates', 'Jl. Sudibyo No.4', '0274-773117'),
(24, 'SAS-005', 'STO Trikora', 'Jl. Pangurakan No.2, Yogyakarta', '0274-588437'),
(25, 'SAS-006', ' Gudang Prambanan', ' Jl. Prambanan Piyungan', '0274-496733'),
(26, 'SAS-007', 'STO Babarsari', 'Jl. Dirgantara 3 Babarsari', '0274-485200'),
(27, 'SAS-008', 'STO Wonosari', 'Jl. Pangarsan No.22, Wonosari', '0274-567890'),
(28, 'SAS-009', 'Datel Bantul', 'Jl. Wahidin Sudiro Husodo Bantul', '0274-367400'),
(29, 'SAS-010', 'Datel Sleman', ' Jl. Parasamya No.22, Yogyakarta', '0274-864000'),
(30, 'SAS-011', 'STO Pakem', 'Jl. Cangkringan No.5, Pakem', '0274-895117'),
(31, 'SAS-012', 'STO Godean', ' Jl. Saronodipoyo No.5, Godean                                             ', '0274-798117 '),
(32, 'SAS-013', 'STO Kentungan', ' Jakal 7,8 Yogyakarta', '0274-889002'),
(33, 'SAS-014', 'STO KotaGede', 'Jl. Garuda 380, KotaGede', '0274-451200'),
(34, 'SAS-015', 'Indigo HUB', 'Jl. Kartini No.7, Yogyakarta', '0274-556565');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(20) NOT NULL,
  `id_kantor` bigint(20) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `waktu` time NOT NULL,
  `mesin_tempel` varchar(255) NOT NULL,
  `perahu_karet` varchar(255) NOT NULL,
  `tenda` varchar(255) NOT NULL,
  `pompa` varchar(255) NOT NULL,
  `genset_pln` varchar(255) NOT NULL,
  `bbm` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `genangan_air` varchar(255) NOT NULL,
  `catudaya` varchar(255) NOT NULL,
  `cuaca` varchar(25) NOT NULL,
  `pln` varchar(255) NOT NULL,
  `genset_pompa` varchar(255) NOT NULL,
  `cctv` varchar(255) NOT NULL,
  `total_cctv` varchar(255) NOT NULL,
  `cctv_ta` varchar(255) NOT NULL,
  `total_cctvta` varchar(255) NOT NULL,
  `suhu_central` varchar(255) NOT NULL,
  `suhu_trans` varchar(255) NOT NULL,
  `suhu_rect` varchar(255) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `kondisi_petugas` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_kantor`, `tgl_laporan`, `waktu`, `mesin_tempel`, `perahu_karet`, `tenda`, `pompa`, `genset_pln`, `bbm`, `kapasitas`, `genangan_air`, `catudaya`, `cuaca`, `pln`, `genset_pompa`, `cctv`, `total_cctv`, `cctv_ta`, `total_cctvta`, `suhu_central`, `suhu_trans`, `suhu_rect`, `nama_pelapor`, `kondisi_petugas`, `kondisi`, `foto`, `created_at`, `updated_at`) VALUES
('SAS-012', 16, '2022-01-27', '12:55:00', 'Ada', 'Ada', 'Ada', 'Standby', 'on', '100', '200', 'Ada', '130', 'Mendung', 'on', 'Standby', 'Mati', '', '', '', '23', '20', '10', 'Ahmanudin', '', 'Rusak', '336-image0.jpg', '2022-01-27 01:55:58', '2022-01-27 01:55:58'),
('SAS-013', 10, '2022-01-27', '13:11:00', 'Ada', 'Ada', 'Ada', 'Standby', 'on', '50', '30', 'Ada', '500', 'Mendung', 'on', 'Standby', 'Hidup', '', '', '', '12', '15', '34', 'DIMASS', '', 'Aman', '237-1617170422820-header_kampus-institut_teknologi_telkom_purwokerto_ittp.png', '2022-01-27 06:12:39', '2022-01-27 06:12:39'),
('SAS-015', 4, '2022-01-27', '13:46:00', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'Unavailable', 'off', '80', '100', 'Tidak ada', '220', 'Cerah', 'on', 'Standby', 'Mati', '', '', '', '23', '20', '20', 'Giyanto', '', 'Aman terkendali', '36-16432661022642083303506.jpg', '2022-01-27 06:49:53', '2022-01-27 06:49:53'),
('SAS-022', 23, '2022-02-03', '13:24:00', 'Ada', 'Ada', 'Ada', 'Standby', 'off', '100', '200', 'Ada', '200', 'Mendung', 'on', 'Unavailable', '6', '8', '1', '2', '200', '200', '200', 'Gilang', 'Warso', 'Aman', '121-1617170422820-header_kampus-institut_teknologi_telkom_purwokerto_ittp.png', '2022-02-03 06:25:45', '2022-02-03 06:25:45'),
('SAS-023', 22, '2022-02-07', '13:27:00', 'Ada', 'Ada', 'Ada', 'Standby', 'on', '20', '100', 'Ada', '120', 'Mendung', 'on', 'Standby', '5', '10', '2', '2', '100', '100', '100', 'Gilang', 'Sehat', 'Aman', '583-1065736.jpg', '2022-02-07 06:27:51', '2022-02-07 06:27:51'),
('SAS-024', 20, '2022-02-07', '13:30:00', 'Ada', 'Ada', 'Ada', 'Tersedia', 'on', '30', '50', 'Ada', '100', 'Gerimis', 'on', 'Standby', '1', '5', '1', '1', '50', '50', '50', 'Gilang', 'Kentir', 'Sehat', '409-1065736.jpg', '2022-02-07 06:31:18', '2022-02-07 06:31:18'),
('SAS-025', 29, '2022-02-07', '13:32:00', 'Ada', 'Ada', 'Ada', 'Tersedia', 'on', '50', '100', 'Ada', '300', 'Gerimis', 'on', 'Tersedia', '2', '6', '2', '3', '100', '60', '70', 'Gilang', 'Kentir', 'Aman', '131-Definisi-AI-dan-Cara-Kerjanya.jpg', '2022-02-07 06:32:50', '2022-02-07 06:32:50'),
('SAS-026', 20, '2022-02-08', '09:58:00', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'Tersedia', 'off', '500', '1000', 'Tidak ada', 'normal', 'cerah', 'on', 'Tersedia', '10', '13', '4', '4', '22', '22', '22', 'Gilang', 'Sehat', 'Aman', '781-1.png', '2022-02-08 03:01:25', '2022-02-08 03:01:25'),
('SAS-027', 20, '2022-02-08', '10:14:00', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'Tidak Tersedia', 'off', '500', '1000', 'Tidak ada', 'Normal', 'Cerah', 'on', 'Tidak Tersedia', '10', '13', '4', '4', '22', '23', '22', 'Gilang', 'Sehat', 'Aman terkendali', '182-16442901881061590511164.jpg', '2022-02-08 03:14:24', '2022-02-08 03:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `nik`, `password`) VALUES
(1, 'Naja', 'najanailaa@gmail.com', '1202184084', '$2y$10$uafOOBJSLxqIcyTAyGG22etVUZCd11Y783n9rE2M2GPJg.3K3sTae'),
(10, 'Gilang', 'Gilang@gmail.com', '19104043', '$2y$10$0EhFrmBPjlBFdN5BPki6eOpLmCFP7gsj6vp7rIpJ9Ml1w5RsVaWVW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
