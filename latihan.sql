-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 03:27 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `angka`
--

CREATE TABLE `angka` (
  `id` int(10) NOT NULL,
  `a` int(10) NOT NULL,
  `b` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `d` int(10) NOT NULL,
  `e` int(10) NOT NULL,
  `f` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angka`
--

INSERT INTO `angka` (`id`, `a`, `b`, `c`, `d`, `e`, `f`) VALUES
(1, 1, 2, 3, 4, 5, 6),
(2, 12, 13, 14, 15, 6, 17);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pribadi`
--

CREATE TABLE `dokumen_pribadi` (
  `iddok_pribadi` int(20) NOT NULL,
  `nama_asli_dokpri` varchar(200) NOT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `tanggal_perbarui` date DEFAULT NULL,
  `ukuran_file` varchar(45) DEFAULT NULL,
  `tipe_file` varchar(45) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_pribadi`
--

INSERT INTO `dokumen_pribadi` (`iddok_pribadi`, `nama_asli_dokpri`, `tanggal_upload`, `tanggal_perbarui`, `ukuran_file`, `tipe_file`, `id_user`) VALUES
(14, 'karbila_Novita_Dewi_-_Sampai_Habis_Air_Mataku_[Convert_From_Youtube].mp3', '2013-05-29', '2013-05-29', '8230789', 'audio/mp3', 2),
(15, 'karbila_Craig_David_-_Insomnia.mp3', '2013-05-29', '2013-05-29', '5035336', 'audio/mp3', 2),
(16, 'karbila_Alicia_Keys_-_Girl_on_Fire_-_YouTube.mp3', '2013-05-29', '2013-05-29', '7463366', 'audio/mp3', 2),
(20, 'karbila_Agnes_Monica_-_04Tanpa_Kekasihku.mp3', '2013-06-04', '2013-06-04', '5340921', 'audio/mp3', 2),
(23, 'karbila_Suami_Anggun_-_Cyril_Montana_au_19_20s.mp4', '2013-06-04', '2013-06-04', '14341118', 'video/mp4', 2),
(24, 'karbila_Afgan_-_Bunga_Terakhir.mp3', '2013-06-04', '2013-06-04', '3908850', 'audio/mp3', 2),
(25, 'karbila_Anggun_-_CESSE_LA_PLUIE_(TRANSPORTER_2_VERSION)_Official_Video_-_YouTube.flv', '2013-06-04', '2013-06-04', '12000887', 'application/octet-stream', 2),
(29, 'karbila_Jadwal_Kompre_Mei_2013.xlsx', '2013-06-04', '2013-06-04', '12268', 'application/vnd.openxmlformats-officedocument', 2),
(30, 'karbila_Info_Biografi_Messi.docx', '2013-06-04', '2013-06-04', '17960', 'application/vnd.openxmlformats-officedocument', 2),
(31, 'karbila_Mariah_Carey_-_Bye_Bye_-_YouTube.flv', '2013-06-04', '2013-06-04', '34221912', 'application/octet-stream', 2),
(32, 'karbila_NOVITA_DEWI_-_SAMPAI_HABIS_AIR_MATAKU_-_GRAND_FINALIS_-_X_Factor_Indonesia_17_Mei_2013_-_YouTube.flv', '2013-06-05', '2013-06-05', '59457078', 'application/octet-stream', 2),
(33, 'karbila_Aerosmith_-_What_It_Takes_-_YouTube.FLV', '2013-06-05', '2013-06-05', '29250001', 'application/octet-stream', 2),
(34, 'karbila_cetak_form_registrasi_IJLGCHTEVZ_1365996723.pdf', '2013-06-05', '2013-06-05', '25320', 'application/pdf', 2),
(35, 'karbila_Adele_-_Chasing_Pavements.flv', '2013-10-03', '2013-10-03', '8965505', 'application/octet-stream', 2),
(36, 'lp3i_IMG_20600839124316.jpeg', '2014-10-03', '2014-10-03', '25101', 'image/jpeg', 12),
(37, 'lp3i_Anggun_-_Il_est_Libre_Max_@_Du_Côté_de_Chez_Dave.mp4', '2014-10-03', '2014-10-03', '5973144', 'video/mp4', 12),
(38, 'lp3i_ANGGUN_-_OCEAN_LOVE.3gp', '2014-10-03', '2014-10-03', '6090041', 'video/3gpp', 12),
(39, 'khusnul_Absensi_Karyawan_Geoinfo.xlsx', '2015-02-23', '2015-02-23', '19390', 'application/vnd.openxmlformats-officedocument', 14),
(40, 'khusnul_img030.jpg', '2015-02-23', '2015-02-23', '992295', 'image/jpeg', 14),
(41, 'karbila_dbrac-scan_IP.png', '2015-05-07', '2015-05-07', '108410', 'image/png', 2),
(42, 'karbila_-sharon-PTP_-_ANDROID_-_LANDBASE_DAFTAR_TUNGGU_PERORANGAN_-_13072018_.pdf', '2018-07-19', '2018-07-19', '11484630', 'application/pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_publik`
--

CREATE TABLE `dokumen_publik` (
  `iddok_publik` int(20) NOT NULL,
  `nama_asli_dokpu` varchar(200) NOT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `tanggal_perbarui` date DEFAULT NULL,
  `ukuran_file` varchar(45) DEFAULT NULL,
  `tipe_file` varchar(45) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel ini adalah tabel dokumen publik';

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Kepala Dinas'),
(2, 'Kepala Seksi A'),
(3, 'Kepala Seksi B'),
(4, 'Staf A'),
(5, 'Staf B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_level`) VALUES
(2, 'karbila barakah', 'karbila', 'cb7f9d707e55275e98377db395ff903f', 1),
(3, 'user2', 'user2', '7e58d63b60197ceb55a1c487989a3720', 2),
(4, 'user3', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 3),
(5, 'user4', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 4),
(6, 'user5', 'user5', '0a791842f52a0acfbb3a783378c066b8', 5),
(7, 'user6', 'user6', 'affec3b64cf90492377a8114c86fc093', 2),
(10, 'user7', 'user7', '3e0469fb134991f8f75a2760e409c6ed', 2),
(11, 'user8', 'user8', '7668f673d5669995175ef91b5d171945', 2),
(12, 'lp3i', 'lp3i', '260abaa73f0ef99594a44eda39c14696', 1),
(14, 'KHUSNUL', 'khusnul', '54eb2a3a371675e5aeddcf902e35fb21', 1),
(15, 'Karbila Barakah H', 'karbila', 'db3009e88c0adc9d3e2538c25133e091', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angka`
--
ALTER TABLE `angka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_pribadi`
--
ALTER TABLE `dokumen_pribadi`
  ADD PRIMARY KEY (`iddok_pribadi`);

--
-- Indexes for table `dokumen_publik`
--
ALTER TABLE `dokumen_publik`
  ADD PRIMARY KEY (`iddok_publik`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_pribadi`
--
ALTER TABLE `dokumen_pribadi`
  MODIFY `iddok_pribadi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `dokumen_publik`
--
ALTER TABLE `dokumen_publik`
  MODIFY `iddok_publik` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
