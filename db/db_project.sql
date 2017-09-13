-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 05:28 AM
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
-- Table structure for table `tb_catatan`
--

CREATE TABLE `tb_catatan` (
  `id_catatan` int(5) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_catatan`
--

INSERT INTO `tb_catatan` (`id_catatan`, `nis`, `catatan`) VALUES
(1, '4811/1530.070', '(1) Terlalu Lembut');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fisika`
--

CREATE TABLE `tb_fisika` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `uh1` int(3) NOT NULL,
  `uh2` int(3) NOT NULL,
  `uh3` int(3) NOT NULL,
  `uh4` int(3) NOT NULL,
  `uh5` int(3) NOT NULL,
  `uts1` int(3) NOT NULL,
  `uts2` int(3) NOT NULL,
  `uas1` int(3) NOT NULL,
  `uas2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fisika`
--

INSERT INTO `tb_fisika` (`id_nilai`, `nis`, `nama_siswa`, `kelas`, `mata_pelajaran`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`, `uts1`, `uts2`, `uas1`, `uas2`) VALUES
(1, '4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII RPL 3', 'Fisika', 90, 80, 80, 0, 0, 0, 0, 0, 0),
(3, '1530/1148.070', 'Qonita Luthfiyani', 'X TKJ 3', 'Fisika', 0, 80, 0, 0, 0, 0, 0, 0, 0);

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
('A01', '00000', 'Drs. Sisworoso', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100077831', 'Kesiswaan', 'Pend. Agama Islam', ''),
('A02', '00000', 'Achmad Nasikin, M.Pd.', 'Gresik', '1974-03-31', 'Laki-Laki', 'Jl. Sawojajar', '085100147183', 'Kesiswaan', 'Pend. Agama Islam', ''),
('A03', '00000', 'M. Masyis Dzul Hilmi, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081233654155', 'Guru', 'Pend. Agama Islam', ''),
('A04', '00000', 'Intyasing Parintis, S.T.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '082143271322', 'Guru', 'Pend. Agama Kristen', ''),
('A05', '00000', 'Adi Trisula, S.Ag.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '000000000000', 'Guru', 'Pend. Agama Katolik', ''),
('A06', '00000', 'Tri Wahyudi, S.Ag.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102656167', 'Guru', 'Pend. Agama Hindu', ''),
('A07', '00000', 'Drs. Trileksono Tj.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100372782', 'Guru', 'P K n', ''),
('A08', '00000', 'Fajar Setiawan, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081357963949', 'Guru', 'P K n', ''),
('A09', '00000', 'Ria Cahya Kurnia Rahma, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081249687422', 'Guru', 'P K n', 'Sejarah Indonesia'),
('A10', '00000', 'Noer Hidayat, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102372732', 'Guru', 'Bahasa Indonesia', ''),
('A11', '00000', 'Asry Wahyuningsih, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085100442439', 'Guru', 'Bahasa Indonesia', ''),
('A12', '00000', 'Tenri Farizatul Warda, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081334714683', 'Guru', 'Bahasa Indonesia', ''),
('A13', '00000', 'Felly Fitruani Supriyadi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081235268729', 'Guru', 'Bahasa Indonesia', ''),
('A14', '00000', 'Agus Hari Purwanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '082236939592', 'Guru', 'Bahasa Indonesia', 'Bahasa Jawa'),
('A15', '00000', 'Tulus Andrianto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100372743', 'Guru', 'Matematika', ''),
('A16', '00000', 'Drs. Fuad Choliq', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102077828', 'Guru', 'Matematika', ''),
('A17', '00000', 'Riya Dwi Puspa, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085101656160', 'Guru', 'Matematika', ''),
('A18', '00000', 'Rendi Lusbiantoro, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085106655675', 'Guru', 'Matematika', ''),
('A19', '00000', 'Achmad Abidin, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081233505769', 'Guru', 'Matematika', ''),
('A20', '00000', 'Ana Wahyuning S., S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085105655648', 'Guru', 'Sejarah Indonesia', ''),
('A21', '00000', 'Andik Suharyanto, S.Pd.', 'Jombang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085288779745', 'Guru', 'Sejarah Indonesia', ''),
('A22', '00000', 'Drs. Bambang Siswantoro', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081234664657', 'Kesiswaan', 'Bahasa Inggris', ''),
('A23', '00000', 'Abror, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100077833', 'Guru', 'Bahasa Inggris', ''),
('A24', '00000', 'Jevi Wenda Santi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085104655647', 'Guru', 'Bahasa Inggris', ''),
('A25', '00000', 'Larasati Chairun Nisa, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081230986053', 'Guru', 'Bahasa Inggris', ''),
('A26', '00000', 'Ardhian Suseno, M.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081283090835', 'Guru', 'Bahasa Inggris', ''),
('B01', '00000', 'Hery Yudiyanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '08123356911', 'Guru', 'Seni Budaya', ''),
('B02', '00000', 'Santy Fidrianna, S.E.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085100077827', 'Guru', 'Prakakrya & Kewirausahaan', ''),
('B03', '00000', 'Titik Apriana Dewi, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085100442491', 'Guru', 'Prakakrya & Kewirausahaan', ''),
('B04', '00000', 'Siana Norma Heny, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085100188805', 'Guru', 'Pend. Jasmani & Kesehatan', ''),
('B05', '00000', 'Rofiqut Thoriq, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085101473155', 'Kesiswaan', 'Pend. Jasmani & Kesehatan', ''),
('B06', '00000', 'Soelarso, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '08125292021', 'Guru', 'Sistem Telekomunikasi', ''),
('B07', '00000', 'Nico Rachmacandrana, S.ST.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081331959391', 'Guru', 'Sistem Telekomunikasi', ''),
('B08', '00000', 'Aris Puji Santoso, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081233976050', 'Guru', 'Seni Budaya', 'Dasar Desain Grafis (UI/UX Web)'),
('B09', '00000', 'Firmansyah Ayatullah, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100182223', 'Guru', 'Seni Budaya', ''),
('C01', '00000', 'M. Chusni Agus, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085106655664', 'Guru', 'Simulasi dan Komunikasi Digital', ''),
('C02', '00000', 'Hariyanto, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100372610', 'Guru', 'Fisika', ''),
('C03', '00000', 'Diaur Rahman, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '082331014657', 'Guru', 'Fisika', ''),
('C04', '00000', 'Sri Chusnul Haniyah, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081334400266', 'Guru', 'Kimia', ''),
('C05', '00000', 'Yan Pritaningtyas, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '082301738227', 'Guru', 'Sistem Komputer', ''),
('C06', '00000', 'Pangadongan Elfin Pujianto, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085341161414', 'Guru', 'Komputer dan Jaringan Dasar', 'Administrasi Server'),
('C07', '00000', 'Laili Agustin, S.T.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '081332992836', 'Guru', 'Komputer dan Jaringan Dasar', 'Pemrograman Grafik'),
('C08', '00000', 'Hadi Teguh Prawito, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085106077832', 'Guru', 'Pemrograman Dasar', ''),
('C09', '00000', 'Ifa Choirunnisa, M.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085100656233', 'Guru', 'Pemrograman Dasar', ''),
('C10', '00000', 'Bias Damiasa, S.Pd.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '082337733234', 'Guru', 'Dasar Desain Grafis (Pemrograman Web)', ''),
('C11', '00000', 'Hendra Wahyu Prasetya, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085100656256', 'Guru', 'PPL (3) / PPB (4)', 'Pemrog. Perang. Bergerak'),
('C12', '00000', 'Hendro Soemarno, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085101442463', 'Guru', 'PPL (3) / ASP (4)', ''),
('C13', '00000', 'Muhammad Arifin, M.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081357790129', 'Guru', 'PBO (3) / PPB (4)', 'Pemrog. Perang. Bergerak'),
('C14', '00000', 'Pashatania Fitri Indah L., S.Kom.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '08113307212', 'Guru', 'PBO (3) / ASP (4)', 'Pemrograman Grafik'),
('C15', '00000', 'Firdausa, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085231863026', 'Guru', 'BD (3) / MVC (3)', 'Prog. Web Dinamis'),
('C16', '00000', 'Zainul Abidin, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081234635054', 'Guru', 'BD (3) / MVC (3)', 'Prog. Web Dinamis'),
('C17', '00000', 'Mokh. Hadi Wijaya, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102077853', 'Guru', 'Administrasi Basis Data', ''),
('C18', '00000', 'Roselina Febriati, S.ST.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085103655672', 'Guru', 'Komputer Terapan', 'Sistem Telekomunikasi'),
('C19', '00000', 'Candra Kurniawan, S.Pd.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085106655676', 'Guru', 'SOJ (3) / ADSER (4)', 'Troubleshooting Jaringan'),
('C20', '00000', 'Yaniko Dimas Yogo P., S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081333369009', 'Guru', 'SOJ (3) / ADSER (4)', ''),
('C21', '00000', 'Susanto, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081331899995', 'Guru', 'RBJ (3) / JarNirkabel (3)', 'Jaringan Nirkabel'),
('C22', '00000', 'Hirga Ertama Putra, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081235525759', 'Guru', 'RBJ (3) / JarNirkabel (3)', 'Keamanan Jaringan'),
('C23', '00000', 'Adi Nurrachman, S.T.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '081230257289', 'Guru', 'Komunikasi Data', 'Keamanan Jaringan'),
('C24', '00000', 'Rahmat Dwi Djatmiko, S.Kom.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '0811353595', 'Manajemen', '', ''),
('C25', '00000', 'Antonius Duty Susilo, M.T.', 'Malang', '1974-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102077829', 'Guru', 'RBJ (3) / JarNirkabel (4)', 'Rancang Bangun Jaringan'),
('C26', '00000', 'Lailatul Istiqomah, SE.', 'Malang', '1970-01-01', 'Perempuan', 'Jl. Sawojajar', '085102077852', 'Manajemen', '', ''),
('C27', '00000', 'Andi Rosihan H, S.Hum.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085288779745', 'Manajemen', '', ''),
('D01', '00000', 'Drs. Bambang Herwijanto Sjahryar', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Danau Ranau', '085102077823', 'Tata Usaha', '', ''),
('D02', '00000', 'Milutfiyana Devi S, SE', 'Malang', '1980-01-01', 'Perempuan', 'Jl. Sawojajar', '085100077854', 'Tata Usaha', '', ''),
('D03', '00000', 'Ekon Anjar P, S.Kom', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '082331013585', 'Tata Usaha', '', ''),
('D04', '00000', 'Suko Hariyanto', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085102077834', 'Tata Usaha', '', ''),
('D05', '00000', 'Setdyoko, SE.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085103077835', 'Tata Usaha', '', ''),
('PD1', '00000', 'Dra. Peni Wardayani', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '085100077830', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD2', '00000', 'Emil Bakhtiar Zulkarnain, S.Psi.', 'Malang', '1970-01-01', 'Laki-Laki', 'Jl. Sawojajar', '085335888999', 'Kesiswaan', 'Bimbingan Konseling', ''),
('PD3', '00000', 'Nurwidiasih Firstyana W., S.Psi', 'Malang', '1974-01-01', 'Perempuan', 'Jl. Sawojajar', '085103656277', 'Kesiswaan', 'Bimbingan Konseling', ''),
('Z11', '0004334478', 'Drs. Rianirsyah Dian Nugrahanto', 'Probolinggo', '2000-04-26', 'Laki-Laki', 'Jl. Danau Ranau', '082257883916', 'Guru', 'Kimia', '');

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
('1101', 'XI', 'XI RPL 1', 'Nurwidiasih Firstyana W., S.Psi', 39, NULL),
('1102', 'XI', 'XI RPL 2', 'Nurwidiasih Firstyana W., S.Psi', 39, NULL),
('1103', 'XI', 'XI RPL 3', 'Nurwidiasih Firstyana W., S.Psi', 38, NULL),
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
-- Table structure for table `tb_matematika`
--

CREATE TABLE `tb_matematika` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `uh1` int(3) NOT NULL,
  `uh2` int(3) NOT NULL,
  `uh3` int(3) NOT NULL,
  `uh4` int(3) NOT NULL,
  `uh5` int(3) NOT NULL,
  `uts1` int(3) NOT NULL,
  `uts2` int(3) NOT NULL,
  `uas1` int(3) NOT NULL,
  `uas2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matematika`
--

INSERT INTO `tb_matematika` (`id_nilai`, `nis`, `nama_siswa`, `kelas`, `mata_pelajaran`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`, `uts1`, `uts2`, `uas1`, `uas2`) VALUES
(4, '1530/1148.070', 'Qonita Luthfiyani', 'X TKJ 3', 'Matematika', 90, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII RPL 3', 'Matematika', 80, 90, 95, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `uh1` int(3) NOT NULL,
  `uh2` int(3) NOT NULL,
  `uh3` int(3) NOT NULL,
  `uh4` int(3) NOT NULL,
  `uh5` int(3) NOT NULL,
  `uts1` int(3) NOT NULL,
  `uts2` int(3) NOT NULL,
  `uas1` int(3) NOT NULL,
  `uas2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `nis`, `nama_siswa`, `kelas`, `mata_pelajaran`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`, `uts1`, `uts2`, `uas1`, `uas2`) VALUES
(1, '4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII RPL 3', 'Matematika', 90, 80, 90, 100, 90, 80, 88, 97, 80),
(2, '1530/1148.070', 'Qonita Luthfiyani', 'X TKJ 3', 'Matematika', 90, 90, 80, 100, 100, 90, 80, 88, 90),
(3, '4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII RPL 3', 'Fisika', 90, 80, 70, 0, 0, 0, 0, 0, 0),
(4, '1530/1148.070', 'Qonita Luthfiyani', 'X TKJ 3', 'Fisika', 90, 88, 98, 0, 0, 0, 0, 0, 0),
(12, '4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII RPL 3', 'Bahasa Inggris', 100, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai2`
--

CREATE TABLE `tb_nilai2` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_pelajaran` varchar(5) NOT NULL,
  `uh1` int(3) NOT NULL,
  `uh2` int(3) NOT NULL,
  `uh3` int(3) NOT NULL,
  `uh4` int(3) NOT NULL,
  `uh5` int(3) NOT NULL,
  `uts1` int(3) NOT NULL,
  `uts2` int(3) NOT NULL,
  `uas1` int(3) NOT NULL,
  `uas2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai2`
--

INSERT INTO `tb_nilai2` (`id_nilai`, `nis`, `kode_pelajaran`, `uh1`, `uh2`, `uh3`, `uh4`, `uh5`, `uts1`, `uts2`, `uas1`, `uas2`) VALUES
(1, '4811/1530.070', '04A', 90, 80, 90, 100, 90, 80, 88, 97, 80),
(2, '1530/1148.070', '04A', 90, 90, 80, 100, 100, 90, 80, 88, 90),
(3, '4811/1530.070', '02C', 90, 80, 70, 0, 0, 0, 0, 0, 0),
(4, '1530/1148.070', '02C', 90, 88, 98, 0, 0, 0, 0, 0, 0),
(5, '4811/1530.070', '06A', 80, 90, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `kode_pelajaran` varchar(5) NOT NULL,
  `mata_pelajaran` varchar(50) NOT NULL,
  `lama_jam` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`kode_pelajaran`, `mata_pelajaran`, `lama_jam`, `keterangan`) VALUES
('01A', 'Pend. Agama Islam', '2 / 3 Jam', 'Kelompok A Wajib'),
('01B', 'Seni Budaya', '2 Jam', 'Kelompok B Wajib'),
('01C', 'Simulasi dan Komunikasi Digital', '3 Jam', 'Kelompok C Peminatan'),
('01D', 'Bimbingan Konseling', '1 Jam', 'Kelompok D'),
('02A', 'P K n', '2 Jam', 'Kelompok A Wajib'),
('02B', 'Prakakrya & Kewirausahaan', '2 Jam', 'Kelompok B Wajib'),
('02C', 'Fisika', '2 Jam', 'Kelompok C Peminatan'),
('03A', 'Bahasa Indonesia', '3 / 6 Jam', 'Kelompok A Wajib'),
('03B', 'Pend. Jasmani & Kesehatan', '2 Jam', 'Kelompok B Wajib'),
('03C', 'Kimia', '2 Jam', 'Kelompok C Peminatan'),
('04A', 'Matematika', '3 / 4 / 6 Jam', 'Kelompok A Wajib'),
('04B', 'Sistem Telekomunikasi', '2 Jam', 'Kelompok B Wajib'),
('04C', 'Sistem Komputer', '2 Jam', 'Kelompok C Peminatan'),
('05A', 'Sejarah Indonesia', '2 Jam', 'Kelompok A Wajib'),
('05C', 'Komputer dan Jaringan Dasar', '4 Jam', 'Kelompok C Peminatan'),
('06A', 'Bahasa Inggris', '3 / 4 Jam', 'Kelompok A Wajib'),
('06C', 'Administrasi Server', '2 Jam', 'Kelompok C Peminatan'),
('07A', 'Bahasa Jawa', '2 Jam', 'Kelompok A Wajib'),
('07C', 'Pemrograman Grafik', '2 / 3 Jam', 'Kelompok C Peminatan'),
('08A', 'Pend. Agama Kristen', '6 Jam', 'Kelompok A Wajib'),
('08C', 'Pemrograman Dasar', '4 Jam', 'Kelompok C Peminatan'),
('09A', 'Pend. Agama Katolik', '6 Jam', 'Kelompok A Wajib'),
('09C', 'Dasar Desain Grafis (Pemrograman Web)', '3 Jam', 'Kelompok C Peminatan'),
('10A', 'Pend. Agama Hindu', '6 Jam', 'Kelompok A Wajib'),
('10C', 'Dasar Desain Grafis (UI/UX Web)', '2', 'Kelompok C Peminatan'),
('11C', 'PPL (3) / PPB (4)', '6 Jam', 'Kelompok C Peminatan'),
('12C', 'Pemrog. Perang. Bergerak', '3 Jam', 'Kelompok C Peminatan'),
('13C', 'PPL (3) / ASP (4)', '6 Jam', 'Kelompok C Peminatan'),
('14C', 'PBO (3) / PPB (4)', '6 Jam', 'Kelompok C Peminatan'),
('15C', 'PBO (3) / ASP (4)', '6 Jam', 'Kelompok C Peminatan'),
('16C', 'BD (3) / MVC (3)', '6 Jam', 'Kelompok C Peminatan'),
('17C', 'Prog. Web Dinamis', '3 Jam', 'Kelompok C Peminatan'),
('18C', 'Administrasi Basis Data', '3 Jam', 'Kelompok C Peminatan'),
('19C', 'Komputer Terapan', '3 Jam', 'Kelompok C Peminatan'),
('20C', 'SOJ (3) / ADSER (4)', '6 Jam', 'Kelompok C Peminatan'),
('21C', 'Troubleshooting Jaringan', '3 Jam', 'Kelompok C Peminatan'),
('22C', 'RBJ (3) / JarNirkabel (3)', '6 Jam', 'Kelompok C Peminatan'),
('23C', 'Jaringan Nirkabel', '3 Jam', 'Kelompok C Peminatan'),
('24C', 'Keamanan Jaringan', '2 / 3 Jam', 'Kelompok C Peminatan'),
('25C', 'Komunikasi Data', '3 Jam', 'Kelompok C Peminatan'),
('26C', 'Rancang Bangun Jaringan', '3 Jam', 'Kelompok C Peminatan'),
('27C', 'Kerja Proyek', '6 Jam', 'Kelompok C Peminatan');

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
  `angkatan` varchar(5) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `tingkat`, `jurusan`, `kelas`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `angkatan`, `foto`) VALUES
('1530/1148.070', 'Qonita Luthfiyani', 'X', 'TKJ', 'X TKJ 3', 'Perempuan', 'Islam', 'Malang', '2001-01-01', 'Jl. Danau Kemuning', '082257883918', '26', '29. Qonita L..JPG'),
('4811/1530.070', 'Rianirsyah Dian Nugrahanto', 'XII', 'RPL', 'XII RPL 3', 'Laki-Laki', 'Islam', 'Probolinggo', '2000-04-26', 'Jl. Danau Ranau G6B/1', '082257883916', '24', '28. Rianirsyah Dian.JPG'),
('4812/1531.071', 'Veronica Rahmanda', 'XI', 'RPL', 'XI RPL 2', 'Perempuan', 'Islam', 'Jakarta', '2000-02-17', 'Jl. Danau Kemuning 64', '082257883914', '25', '30__Pradina_A_.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_catatan`
--
ALTER TABLE `tb_catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `tb_fisika`
--
ALTER TABLE `tb_fisika`
  ADD PRIMARY KEY (`id_nilai`);

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
-- Indexes for table `tb_matematika`
--
ALTER TABLE `tb_matematika`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_nilai2`
--
ALTER TABLE `tb_nilai2`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`kode_pelajaran`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_catatan`
--
ALTER TABLE `tb_catatan`
  MODIFY `id_catatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_fisika`
--
ALTER TABLE `tb_fisika`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_matematika`
--
ALTER TABLE `tb_matematika`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_nilai2`
--
ALTER TABLE `tb_nilai2`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
