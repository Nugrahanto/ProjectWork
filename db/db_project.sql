-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 08:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `kode_karyawan` varchar(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mapel1` varchar(100) NOT NULL,
  `mapel2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`kode_karyawan`, `nip`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_karyawan`, `no_telp`, `status`, `mapel1`, `mapel2`) VALUES
('A1', '00000', 'Achmad Nasikin, M.Pd.', 'Gresik', '1974-03-31', 'Laki-Laki', 'Jl. Sawojajar', '085100147183', 'Guru', 'Pend. Agama Islam', ''),
('A2', '00000', 'Drs. Sisworoso', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Islam', ''),
('A20', '00000', 'M. Masyis Dzul Hilmi, M.Pd.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Islam', ''),
('A7', '00000', 'Fajar Setiawan, S.Pd.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'PKn', 'Sejarah Indonesia'),
('C21', '00000', 'Antonius Duty Susilo, M.T.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Rancang Bangun Jaringan', 'Jaringan Nirkabel'),
('PD2', '00000', 'Dra. Peni Wardayani', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD3', '00000', 'Emil Bahtiar Zulkarnain, S.Psi.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD4', '00000', 'Nurwidiasih Firstyana W., S.Psi', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `tingkat_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `penanggung_jawab_kelas` varchar(100) NOT NULL,
  `jumlah_siswa` int(3) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kode_kelas`, `tingkat_kelas`, `nama_kelas`, `penanggung_jawab_kelas`, `jumlah_siswa`, `keterangan`) VALUES
('1001', 'X', 'X RPL 1', 'Nurwidiasih Firstyana W., S.Psi', 42, NULL),
('1002', 'X', 'X RPL 2', 'Nurwidiasih Firstyana W., S.Psi', 41, NULL),
('1003', 'X', 'X RPL 3', 'Nurwidiasih Firstyana W., S.Psi', 41, NULL),
('1004', 'X', 'X RPL 4', 'Nurwidiasih Firstyana W., S.Psi', 40, NULL),
('1005', 'X', 'X RPL 5', 'Nurwidiasih Firstyana W., S.Psi', 41, NULL),
('1006', 'X', 'X RPL 6', 'Nurwidiasih Firstyana W., S.Psi', 41, NULL),
('1011', 'X', 'X TKJ 1', 'Fajar Setiawan, S.Pd.', 40, NULL),
('1012', 'X', 'X TKJ 2', 'Fajar Setiawan, S.Pd.', 40, NULL),
('1013', 'X', 'X TKJ 3', 'Fajar Setiawan, S.Pd.', 38, NULL),
('1014', 'X', 'X TKJ 4', 'Fajar Setiawan, S.Pd.', 39, NULL),
('1015', 'X', 'X TKJ 5', 'Fajar Setiawan, S.Pd.', 39, NULL),
('1016', 'X', 'X TKJ 6', 'Fajar Setiawan, S.Pd.', 39, NULL),
('1201', 'XII', 'XII RPL 1', 'Dra. Peni Wardayani', 36, NULL),
('1202', 'XII', 'XII RPL 2', 'Dra. Peni Wardayani', 36, NULL),
('1203', 'XII', 'XII RPL 3', 'Dra. Peni Wardayani', 35, NULL),
('1204', 'XII', 'XII RPL 4', 'Dra. Peni Wardayani', 35, NULL),
('1205', 'XII', 'XII RPL 5', 'Dra. Peni Wardayani', 35, NULL),
('1206', 'XII', 'XII RPL 6', 'Dra. Peni Wardayani', 35, NULL),
('1211', 'XII', 'XII TKJ 1', 'Antonius Duty Susilo, M.T.', 36, NULL),
('1212', 'XII', 'XII TKJ 2', 'Antonius Duty Susilo, M.T.', 36, NULL),
('1213', 'XII', 'XII TKJ 3', 'Antonius Duty Susilo, M.T.', 35, NULL),
('1214', 'XII', 'XII TKJ 4', 'Antonius Duty Susilo, M.T.', 35, NULL),
('1215', 'XII', 'XII TKJ 5', 'Antonius Duty Susilo, M.T.', 35, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `tingkat` varchar(5) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `angkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `tingkat`, `jurusan`, `kelas`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `angkatan`) VALUES
('4658/1377.070', 'ALISSA VELIA ROYHATUL JANNAH', 'XII', 'RPL', 'XII RPL 1', 'Perempuan', 'Islam', 'Malang', '2000-01-01', 'Jl. Danau Ranau', '000000000000', '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
