-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 04:15 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `password` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `NIM` varchar(12) COLLATE utf8_bin NOT NULL,
  `nama_lengkap` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `nama_panggilan` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `prodi` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `fakultas` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `universitas` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `jenis_kelamin` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `alamat` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `foto` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_mhs`
--

INSERT INTO `data_mhs` (`NIM`, `nama_lengkap`, `nama_panggilan`, `prodi`, `fakultas`, `universitas`, `jenis_kelamin`, `alamat`, `email`, `foto`) VALUES
('160411100116', 'Zainul Abad', 'Abad', 'Teknik Informatika', 'Teknik', 'Universitas Trunojoyo Madura', 'Laki - Laki', 'Jl Letjen Suprapto No 60 , Kel.Ploso, Kec.Nganjuk, Kab.Nganjuk', 'zainulabad45@gmail.com', 'abad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode` varchar(6) COLLATE utf8_bin NOT NULL,
  `nama_matkul` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `semester` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `sks` varchar(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode`, `nama_matkul`, `semester`, `sks`) VALUES
('TIK101', 'Pengantar Informatika', 'Semester Gasal 2016', '3'),
('TIK102', 'Algoritma Pemrograman', 'Semester Gasal 2016', '4'),
('TIK103', 'Logika Informatika', 'Semester Gasal 2016', '2'),
('TIK104', 'Matematika', 'Semester Gasal 2016', '3'),
('TIK105', 'Bahasa Indonesia', 'Semester Gasal 2016', '2'),
('TIK201', 'Komputasi Aljabar Linier', 'Semester Genap 2017', '3'),
('TIK202', 'Struktur Data', 'Semester Genap 2016', '4'),
('TIK203', 'Dasar Pemrograman Web', 'Semester Genap 2016', '4'),
('TIK204', 'Organisasi Komputer', 'Semester Genap 2016', '3'),
('TIK205', 'Fisika Informatika', 'Semester Genap 2016', '3'),
('TIK206', 'Statistika', 'Semester Genap 2016', '3'),
('TIK301', 'Matematika Diskrit', 'Semester Gasal 2017', '3'),
('TIK302', 'Sistem Basis Data', 'Semester Gasal 2017', '2'),
('TIK303', 'Pemrograman Berorientasi Objek', 'Semester Gasal 2017', '4'),
('TIK304', 'Sistem Operasi', 'Semester Gasal 2017', '3'),
('TIK305', 'Rekayasa Multimedia', 'Semester Gasal 2017', '3'),
('TIK306', 'Pemrograman Desktop', 'Semester Gasal 2017', '4'),
('TIK401', 'Jaringan Komputer', 'Semester Genap 2017', '4'),
('TIK403', 'Sistem Informasi', 'Semester Genap 2017', '3'),
('TIK404', 'Bahasa Formal dan Otomata', 'Semester Genap 2017', '3'),
('TIK405', 'Pengelolaan Basis Data', 'Semester Genap 2017', '3'),
('TIK801', 'Wawasan Teknologi dan Komunikasi', 'Semester Genap 2017', '2'),
('UNG101', 'Pendidikan Agama Islam', 'Semester Gasal 2016', '3'),
('UNG108', 'Pancasila dan Kewarganegaraan', 'Semester Genap 2016', '2'),
('UNG110', 'Bahasa Inggris', 'Semester Gasal 2016', '2');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `ID` int(11) NOT NULL,
  `tingkat` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `nama_sekolah` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `tahun_masuk` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `tahun_lulus` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`ID`, `tingkat`, `nama_sekolah`, `tahun_masuk`, `tahun_lulus`, `website`) VALUES
(1, 'SD', 'SDN PLOSO 1 NGANJUK', '2004', '2010', ''),
(2, 'SMP', 'SMP NEGERI 2 NGANJUK', '2010', '2013', 'https://smpn2nganjuk.wordpress.com/'),
(3, 'SMA', 'SMK NEGERI 1 BAGOR, NGANJUK', '2013', '2016', 'http://smknegeri1bagor.sch.id/'),
(4, 'UNIVERSITAS', 'UNIVERSITAS TRUNOJOYO MADURA', '2016', '2020', 'http://www.trunojoyo.ac.id/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
