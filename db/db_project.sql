-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 08:14 AM
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
('A01', '00000', 'Drs. Sisworoso', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Pend. Agama Islam', ''),
('A02', '00000', 'Achmad Nasikin, M.Pd.', 'Gresik', '1974-03-31', 'Laki-Laki', 'Jl. Sawojajar', '085100147183', 'Kesiswaan', 'Pend. Agama Islam', ''),
('A03', '00000', 'M. Masyis Dzul Hilmi, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Islam', ''),
('A04', '00000', 'Intyasing Parintis, S.T.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Kristen', ''),
('A05', '00000', 'Adi Trisula, S.Ag.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Katolik', ''),
('A06', '00000', 'Tri Wahyudi, S.Ag.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Hindu', ''),
('A07', '00000', 'Drs. Trileksono Tj.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'P K n', ''),
('A08', '00000', 'Fajar Setiawan, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'PKn', ''),
('A09', '00000', 'Ria Cahya Kurnia Rahma, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'P K n', 'Sejarah Indonesia'),
('A10', '00000', 'Noer Hidayat, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Indonesia', ''),
('A11', '00000', 'Asry Wahyuningsih, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Indonesia', ''),
('A12', '00000', 'Tenri Farizatul Warda, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Indonesia', ''),
('A13', '00000', 'Felly Fitruani Supriyadi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Indonesia', ''),
('A14', '00000', 'Agus Hari Purwanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Indonesia', 'Bahasa Jawa'),
('A15', '00000', 'Tulus Andrianto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Matematika', ''),
('A16', '00000', 'Drs. Fuad Choliq', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Matematika', ''),
('A17', '00000', 'Riya Dwi Puspa, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Matematika', ''),
('A18', '00000', 'Rendi Lusbiantoro, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Matematika', ''),
('A19', '00000', 'Achmad Abidin, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Matematika', ''),
('A20', '00000', 'Ana Wahyuning S., S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Sejarah Indonesia', ''),
('A21', '00000', 'Andik Suharyanto, S.Pd.', 'Jombang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Sejarah Indonesia', ''),
('A22', '00000', 'Drs. Bambang Siswantoro', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081234664657', 'Kesiswaan', 'Bahasa Inggris', ''),
('A23', '00000', 'Abror, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100077833', 'Kesiswaan', 'Bahasa Inggris', ''),
('A24', '00000', 'Jevi Wenda Santi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Inggris', ''),
('A25', '00000', 'Larasati Chairun Nisa, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Inggris', ''),
('A26', '00000', 'Ardhian Suseno, M.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Bahasa Inggris', ''),
('B01', '00000', 'Hery Yudiyanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Seni Budaya', ''),
('B02', '00000', 'Santy Fidrianna, S.E.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Prakarya & Kewirausahaan', ''),
('B03', '00000', 'Titik Apriana Dewi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Prakarya & Kewirausahaan', ''),
('B04', '00000', 'Siana Norma Heny, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Jasmani & Kesehatan', ''),
('B05', '00000', 'Rofiqut Thoriq, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Pend. Jasmani & Kesehatan', ''),
('B06', '00000', 'Soelarso, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Sistem Telekomunikasi', ''),
('B07', '00000', 'Nico Rachmacandrana, S.ST.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Sistem Telekomunikasi', ''),
('B08', '00000', 'Aris Puji Santoso, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Seni Budaya', 'Dasar Desain Grafis (UI/UX Web)'),
('B09', '00000', 'Firmansyah Ayatullah, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Seni Budaya', ''),
('C01', '00000', 'M. Chusni Agus, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Simulasi dan Komunikasi Digital', ''),
('C02', '00000', 'Hariyanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Fisika', ''),
('C03', '00000', 'Diaur Rahman, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Fisika', ''),
('C04', '00000', 'Sri Chusnul Haniyah, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Kimia', ''),
('C05', '00000', 'Yan Pritaningtyas, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Sistem Komputer', ''),
('C06', '00000', 'Pangadongan Elfin Pujianto, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '0000000000', 'Guru', 'Komputer dan Jaringan Dasar', 'Administrasi Server'),
('C07', '00000', 'Laili Agustin, S.T.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '0000000000000', 'Guru', 'Komputer dan Jaringan Dasar', 'Pemrograman Grafik'),
('C08', '00000', 'Hadi Teguh Prawito, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pemrograman Dasar', ''),
('C09', '00000', 'Ifa Choirunnisa, M.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pemrograman Dasar', ''),
('C10', '00000', 'Bias Damiasa, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Dasar Desain Grafis ( Pemrog. Web)', ''),
('C11', '00000', 'Hendra Wahyu Prasetya, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'PPL (3) / PPB (4)', 'Pemrog. Perang. Bergerak'),
('C12', '00000', 'Hendro Soemarno, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'PPL (3) / ASP (4)', ''),
('C13', '00000', 'Muhammad Arifin, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'PBO (3) / PBB (4)', 'Pemrog. Perang. Bergerak'),
('C14', '00000', 'Pashatania Fitri Indah L., S.Kom.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'PBO (3) / ASP (4)', 'Pemrograman Grafik'),
('C15', '00000', 'Firdausa, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'BD (3) / MVC (3)', 'Prog. Web Dinamis(Mulok)'),
('C17', '00000', 'Mokh. Hadi Wijaya, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Administrasi Basis Data', ''),
('C18', '00000', 'Roselina Febriati, S.ST.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Guru', 'Komputer Terapan', 'Sistem Telekomunikasi'),
('C19', '00000', 'Candra Kurniawan, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'SOJ (3) / ADSER (4)', 'Troubleshooting Jaringan'),
('C20', '00000', 'Yaniko Dimas Yogo P., S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'SOJ (3) / ADSER (4)', ''),
('C21', '00000', 'Susanto, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'RBJ (3) / JarNirkabel (4)', 'Jaringan Nirkabel'),
('C22', '00000', 'Hirga Ertama Putra, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'RBJ (3) / JarNirkabel (4)', 'Keamanan Jaringan'),
('C23', '00000', 'Adi Nurrachman, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Komunikasi Data', 'Keamanan Jaringan'),
('C24', '00000', 'Rahmat Dwi Djatmiko, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', '', ''),
('C25', '00000', 'Antonius Duty Susilo, M.T.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'RBJ (3) / JarNirkabel (4)', 'Rancang Bangun Jaringan'),
('PD1', '00000', 'Dra. Peni Wardayani', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD2', '00000', 'Emil Bakhtiar Zulkarnain, S.Psi.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD3', '00000', 'Nurwidiasih Firstyana W., S.Psi', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '000000000000', 'Kesiswaan', 'Bimbingan Konseling', '');

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
