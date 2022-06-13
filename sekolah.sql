-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 09:36 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_siswa`
--

CREATE TABLE `absensi_siswa` (
  `idAbsenSiswa` varchar(20) NOT NULL,
  `kodeJadwal` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `kehadiran` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi_siswa`
--

INSERT INTO `absensi_siswa` (`idAbsenSiswa`, `kodeJadwal`, `nisn`, `kehadiran`, `tanggal`, `waktu`) VALUES
('61083e157fdaa', '60f68498e38b0', '12345', 'H', '2021-08-03', '0000-00-00 00:00:00'),
('61083e2fa4d66', '60f68498e38b0', '991252313', 'I', '2021-08-03', '0000-00-00 00:00:00'),
('61083e45284c9', '60fa7ebb17d45', '12345', 'H', '2021-08-03', '0000-00-00 00:00:00'),
('610917107ad7f', '61089fa3b04ad', '12345', 'I', '2021-08-03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `idBarang` varchar(20) NOT NULL,
  `kodeBarang` varchar(15) NOT NULL,
  `namaBarang` varchar(128) NOT NULL,
  `idKategoriBarang` int(5) NOT NULL,
  `jumlahBarang` varchar(128) NOT NULL,
  `tanggalTerima` date NOT NULL,
  `sumberDana` varchar(128) NOT NULL,
  `kondisi` varchar(128) NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`idBarang`, `kodeBarang`, `namaBarang`, `idKategoriBarang`, `jumlahBarang`, `tanggalTerima`, `sumberDana`, `kondisi`, `foto`, `keterangan`) VALUES
('60f1cbce1f075', 'BRG01', 'Proyektor Samsung', 1, '5', '2021-07-17', 'Dana Swadaya', 'Baik', 'karpet.jpg', 'masih bagus'),
('60f2409772abc', 'BRG02', 'Papan Tulis', 2, '10', '2021-07-16', 'Dana BOS', 'Baik', 'papantulis.jpg', 'sisa sedikit'),
('60f59d2ece2e5', 'BRG03', 'Kamera', 1, '1', '2021-12-21', 'Dana Swadaya', 'Baik', '', 'UNISKA TERCINTA'),
('60f5bf57c3dbb', 'BRG04', 'Sound System', 1, '2', '2021-07-04', 'Dana Bos', 'Baik', 'default.jpg', 'Mencoba memasukkan sebuah berita'),
('60f7c03f76bf2', 'BRG05', 'TV', 1, '2', '2021-12-12', 'Sumber Lain', 'Baik', 'default.jpg', 'OKE'),
('60fea7890038b', 'BRG06', 'Tas', 2, '2', '2021-12-12', 'Dana Masyarakat', 'Baik', 'default.jpg', 'UNISKA TERCINTA');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `namaGuru` varchar(128) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `tempatLahir` varchar(128) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tugasTambahan` varchar(128) NOT NULL,
  `idJenisPtk` int(11) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `statusGuru` enum('0','1','','') NOT NULL,
  `dateCreated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nip`, `password`, `nik`, `namaGuru`, `jk`, `tempatLahir`, `tanggalLahir`, `agama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `noTelp`, `email`, `tugasTambahan`, `idJenisPtk`, `foto`, `statusGuru`, `dateCreated`) VALUES
('60f290eb561cb', '17630517', '$2y$10$3GHVEFSq3j7D1IHIdKS4zusjIFC.6j0JeI7ttO3DuwGZHHPoqhIFS', '6309020704093209', 'Hj. Hamdiah, M.Pd.I.', 'P', 'Banjarmasin', '1998-12-10', 'Islam', 'Banjarmasin', '2', '4', 'Malkon Temon', 'Banjarmasin Selatan', 'Kayutangi', '082350890707', 'raisanoorislamy@gmail.com', '', 1, 'default.jpg', '1', 1627034349),
('60f29241c85e7', '1783142', '$2y$10$U99eYgMFZHjGKNaPiLr0g.PpP8bLHZe9yqvzYiE00JzHqwKYpUZS.', '6309020704093212', 'Widarto, S.Pd.', 'L', 'Martapura', '1997-12-12', 'Islam', 'Banjarmasin', '2', '3', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'mflutfi1997@gmail.com', '', 1, 'default.jpg', '1', 1627034374),
('60f7fabd1fd74', '18710617', '$2y$10$NBJ1vGxW8b7FTenbG/UT9..NKexnvmZQcQDhUVJXt.m3JCP4yM1Se', '93020704970006', 'Kiki Febriani, S.Pd.', 'P', 'Banjarmasin', '1999-05-21', 'Islam', 'Banjarmasin', '2', '3', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'ghaidazahira@gmail.com', '', 1, 'default.jpg', '1', 1627034293),
('60fa9379a7f33', '12', '$2y$10$XOrw5jowrZjwAE2B0PBS.u3dKhkd1QnAZ467qbtWNYeEydkuGoNmW', '12', 'Lailatul Qadariah, S.Pd.', 'P', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '4', 'Murung Pudak', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'tes12@gmail.com', '', 1, 'default.jpg', '1', 1627034525),
('60fa93d2cf428', '13', '$2y$10$VCJj5T2L46eg6JP175yc3.uuoVEdQcIHJLWXnlVzhHDa7HQoG5FnO', '13', 'Sucipto, S.Pd', 'L', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'tanjung', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'admin1@gmail.com', '', 2, 'default.jpg', '1', 1627034578),
('60fa940d0e39e', '14', '$2y$10$4KgG5Xew0/YXoag43pQvO.rkbk5CdIdpW.KQb96dbLjZHZ6oH8ZDe', '14', 'Meli Yanti, S.Pd.', 'P', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'admin22@gmail.com', '', 2, 'default.jpg', '1', 1627034637),
('60fa94559911a', '15', '$2y$10$QHCaRVhjp2Xzzh7dp5VALOzkWsCqi1LWav5MzDkZSPwLWQWRwGjIC', '15', 'Yustina Elifyanti, S.Pd.', 'P', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'admin@gmail.com', '', 2, 'default.jpg', '1', 1627034709),
('60fa94c6e6a0c', '16', '$2y$10$X8XpirHqIHrzvfr85ViU6uOqWvbLpn4LVYCNsm33jusKdn6cYIoru', '16', 'Hariyanto', 'L', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'Murung Pudak', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'hariyanto@gmail.com', '', 3, 'default.jpg', '1', 1627183183),
('60fa94f5010fd', '17', '$2y$10$Uqd4jKyXChSprISetdKjp.wtFAy3Diev3fxuTWMYb8rxIXsSghZ/W', '17', 'Siti Saropah, S. Pd.', 'P', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'admin@gmail.com', '', 2, 'default.jpg', '1', 1627034869),
('60fa951969f06', '1', '$2y$10$PCZuokDAMayqG5XGDhI3z.U615g3eU.Xlz4bXIKxGG1RxGsG7eQSK', '1', 'Yadi Karnadi', 'L', 'Tanjung', '1970-12-12', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'admin@gmail.com', 'Kepala Sekolah', 1, 'default.jpg', '0', 1627617406);

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `idHari` int(11) NOT NULL,
  `namaHari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`idHari`, `namaHari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolah`
--

CREATE TABLE `identitas_sekolah` (
  `idSekolah` varchar(20) NOT NULL,
  `namaSekolah` varchar(128) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` int(7) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identitas_sekolah`
--

INSERT INTO `identitas_sekolah` (`idSekolah`, `namaSekolah`, `npsn`, `alamat`, `kodePos`, `noTelp`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `website`, `email`) VALUES
('60e92d43abcc8', 'SMP Negeri 2 Muara Uya Ribang', '30302950', 'Muara Uya', 71573, '082350890707', 'Ribang', 'Muara Uya', 'Kayutangi', 'Kalimantan Selatan', 'https://www.smpn2muarauya.sch.id/', 'smpn2muarauya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `kodeJadwal` varchar(20) NOT NULL,
  `kodeTahun` varchar(20) NOT NULL,
  `kodeKelas` varchar(10) NOT NULL,
  `kodeMapel` varchar(10) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jamMulai` time NOT NULL,
  `jamSelesai` time NOT NULL,
  `namaHari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`kodeJadwal`, `kodeTahun`, `kodeKelas`, `kodeMapel`, `nip`, `jamMulai`, `jamSelesai`, `namaHari`) VALUES
('60f68498e38b0', '20201', 'VII.A', 'MP01', '', '08:00:00', '09:00:00', 'Senin'),
('60f686165bc8d', '20201', 'VII.B', 'MP01', '', '09:00:00', '10:00:00', 'Senin'),
('60fa7ebb17d45', '20201', 'VII.A', 'MP10', '', '08:00:00', '10:00:00', 'Selasa'),
('60fd30387c654', '20201', 'VIII.A', 'MP01', '', '00:00:00', '13:00:00', 'Rabu'),
('61089fa3b04ad', '20202', 'VII.A', 'MP12', '', '08:00:00', '10:00:00', 'Senin'),
('610976fcec2c0', '20202', 'VII.A', 'MP01', '', '08:00:00', '10:00:00', 'Senin');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ptk`
--

CREATE TABLE `jenis_ptk` (
  `idJenisPtk` int(11) NOT NULL,
  `jenisPtk` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_ptk`
--

INSERT INTO `jenis_ptk` (`idJenisPtk`, `jenisPtk`) VALUES
(1, 'Guru Kelas'),
(2, 'Guru Mata Pelajaran'),
(3, 'Tenaga Administrasi Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `idKategoriBarang` int(5) NOT NULL,
  `kategoriBarang` varchar(128) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`idKategoriBarang`, `kategoriBarang`, `keterangan`) VALUES
(1, 'Elektronik', ''),
(2, 'Sarpras', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` varchar(20) NOT NULL,
  `kodeKelas` varchar(50) NOT NULL,
  `namaKelas` varchar(128) NOT NULL,
  `jumlahSiswa` varchar(128) NOT NULL,
  `isActive` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idKelas`, `kodeKelas`, `namaKelas`, `jumlahSiswa`, `isActive`) VALUES
('60f5b78d86905', 'VII.A', 'Kelas VII A', '', '1'),
('60f5b7a287e39', 'VII.B', 'Kelas VII B', '', '1'),
('60f5b7b16a371', 'VIII.A', 'Kelas VIII A', '', '1'),
('60f5b7bb58e0f', 'VIII.B', 'Kelas VIII B', '', '1'),
('60f5b7dc1b350', 'IX.A', 'Kelas IX A', '', '1'),
('60f5b800b9c88', 'IX.B', 'Kelas IX B', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_mapel`
--

CREATE TABLE `kelompok_mapel` (
  `idKelompokMapel` int(11) NOT NULL,
  `jenisKelompokMapel` varchar(50) NOT NULL,
  `namaKelompokMapel` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok_mapel`
--

INSERT INTO `kelompok_mapel` (`idKelompokMapel`, `jenisKelompokMapel`, `namaKelompokMapel`) VALUES
(1, 'A', 'Kelompok A (Umum)'),
(2, 'B', 'Kelompok B (Umum)'),
(4, 'C', 'Ekstrakulikuler');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `kodeMapel` varchar(20) NOT NULL,
  `idKelompokMapel` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `namaMapel` varchar(128) NOT NULL,
  `jumlahJam` varchar(20) NOT NULL,
  `isActive` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`kodeMapel`, `idKelompokMapel`, `nip`, `namaMapel`, `jumlahJam`, `isActive`) VALUES
('MP01', 1, '17630517', 'Pendidikan Agama dan Budi Pekerti', '2', '1'),
('MP02', 1, '1783142', 'Pendidikan Pancasila dan Kewarganegaraan', '2', '1'),
('MP03', 1, '18710617', 'Bahasa Indonesia', '2', '1'),
('MP04', 1, '12', 'Matematika', '2', '1'),
('MP05', 1, '13', 'Ilmu Pengetahuan Alam', '2', '1'),
('MP06', 1, '14', 'Ilmu Pengetahuan Sosial', '2', '1'),
('MP07', 1, '15', 'Bahasa Inggris', '2', '1'),
('MP08', 2, '17630517', 'Seni Budaya', '2', '1'),
('MP09', 2, '16', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', '2', '1'),
('MP10', 2, '17', 'Prakarya', '2', '1'),
('MP12', 4, '17630517', 'Olahraga', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `menu_main`
--

CREATE TABLE `menu_main` (
  `idMenu` int(11) NOT NULL,
  `idTitle` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` varchar(3) NOT NULL,
  `isSubMenu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_main`
--

INSERT INTO `menu_main` (`idMenu`, `idTitle`, `label`, `link`, `icon`, `isMainMenu`, `isSubMenu`) VALUES
(1, 1, 'Dashboard', 'Dashboard/index', 'home', '0', 0),
(10, 2, 'Data Master', 'javascript: void();', 'database', '0', 0),
(35, 2, 'Data Identitas Sekolah', 'datamaster/identitassekolah', '', '10', 0),
(38, 2, 'Data Guru', 'datamaster/guru', '', '10', 0),
(39, 2, 'Data Siswa', 'datamaster/siswa', '', '10', 0),
(40, 2, 'Data Kepala Sekolah', 'datamaster/kepsek', '', '10', 0),
(41, 2, 'Data User', 'datamaster/users', '', '10', 0),
(42, 2, 'Data Akademik', 'javascript: void();', 'book', '0', 0),
(43, 2, 'Data Mata Pelajaran', 'akademik/mapel', '', '42', 0),
(44, 2, 'Data Absensi', 'javascript: void();', 'database', '0', 0),
(45, 2, 'Absensi Guru', 'absensi/absenguru', '', '44', 0),
(46, 2, 'Absensi Siswa', 'absensi/absensiswa', '', '44', 0),
(47, 2, 'Rekap Absensi Siswa', 'absensi/rekapabsensiswa', '', '44', 0),
(48, 2, 'Data Jadwal Pelajaran', 'akademik/jadwalpelajaran', '', '42', 0),
(50, 2, 'Data Kelompok Mata Pelajaran', 'akademik/kelompokmapel', '', '42', 0),
(51, 2, 'Data Aset Sekolah', 'datamaster/aset', '', '10', 0),
(54, 2, 'Data Kelas', 'datamaster/kelas', '', '10', 0),
(55, 2, 'Data Tahun Akademik', 'datamaster/tahunakademik', '', '10', 0),
(56, 3, 'Laporan Sekolah', 'javascript: void();', 'book', '0', 0),
(57, 3, 'Laporan Aset Sekolah', 'lasetsekolah', '', '56', 0),
(58, 3, 'Laporan Data Siswa', 'lsiswa/index', '', '56', 0),
(59, 3, 'Laporan Data Guru', 'lguru/index', '', '56', 0),
(60, 3, 'Laporan Nilai Siswa', 'Lnilaisiswa', 'book', '0', 0),
(61, 3, 'Data Capaian Belajar', 'penilaian/capaianbelajar', '', '60', 0),
(62, 3, 'Data Ekstrakulikuler', 'penilaian/ekstrakulikuler', '', '60', 0),
(63, 3, 'Data Nilai UTS', 'penilaian/penilaianuts', '', '60', 0),
(64, 3, 'Data Nilai Raport', 'penilaian/nilairapor', '', '60', 0),
(65, 3, 'Cetak Rapor Siswa', 'penilaian/cetakrapor', '', '60', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_rule`
--

CREATE TABLE `menu_rule` (
  `idRule` int(11) NOT NULL,
  `idMenu` int(11) NOT NULL,
  `idUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_rule`
--

INSERT INTO `menu_rule` (`idRule`, `idMenu`, `idUser`) VALUES
(23, 1, '60e29f259695d'),
(24, 10, '60e29f259695d'),
(26, 38, '60e29f259695d'),
(28, 39, '60e29f259695d'),
(30, 41, '60e29f259695d'),
(31, 42, '60e29f259695d'),
(32, 43, '60e29f259695d'),
(33, 44, '60e29f259695d'),
(34, 45, '60e29f259695d'),
(36, 47, '60e29f259695d'),
(37, 48, '60e29f259695d'),
(38, 50, '60e29f259695d'),
(39, 51, '60e29f259695d'),
(43, 54, '60e29f259695d'),
(44, 55, '60e29f259695d'),
(45, 46, '60e29f259695d'),
(46, 57, '60e29f259695d'),
(47, 56, '60e29f259695d'),
(48, 58, '60e29f259695d'),
(49, 59, '60e29f259695d'),
(50, 60, '60e29f259695d'),
(51, 62, '60e29f259695d'),
(52, 61, '60e29f259695d'),
(53, 63, '60e29f259695d'),
(54, 65, '60e29f259695d'),
(55, 64, '60e29f259695d');

-- --------------------------------------------------------

--
-- Table structure for table `menu_title`
--

CREATE TABLE `menu_title` (
  `idTitle` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_title`
--

INSERT INTO `menu_title` (`idTitle`, `title`, `isActive`) VALUES
(1, 'Navigation', 1),
(2, 'Akademik', 1),
(3, 'Report', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_uts`
--

CREATE TABLE `nilai_uts` (
  `idNilaiUts` int(11) NOT NULL,
  `kodeJadwal` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nilaiPengetahuan` float NOT NULL,
  `gradePengetahuan` varchar(1) NOT NULL,
  `nilaiKeterampilan` float NOT NULL,
  `gradeKeterampilan` varchar(1) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_uts`
--

INSERT INTO `nilai_uts` (`idNilaiUts`, `kodeJadwal`, `nisn`, `nilaiPengetahuan`, `gradePengetahuan`, `nilaiKeterampilan`, `gradeKeterampilan`, `waktu`) VALUES
(610986, '60f68498e38b0', '12345', 80, '', 90, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `idPeriode` int(11) NOT NULL,
  `periode` varchar(9) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`idPeriode`, `periode`, `tahun`, `status`) VALUES
(1, '2019/2020', 2019, 'Aktif'),
(2, '2021/2022', 2020, 'Aktif'),
(3, '2021/2022', 2021, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleId` int(1) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleId`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `namaSiswa` varchar(128) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `tempatLahir` varchar(100) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `statusKeluarga` varchar(128) NOT NULL,
  `anakKe` varchar(20) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `noTelp` varchar(15) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `asalSd` varchar(128) NOT NULL,
  `namaAyah` varchar(128) NOT NULL,
  `pekerjaanAyah` varchar(128) NOT NULL,
  `alamatAyah` text NOT NULL,
  `noHpAyah` varchar(15) NOT NULL,
  `namaIbu` varchar(128) NOT NULL,
  `pekerjaanIbu` varchar(128) NOT NULL,
  `alamatIbu` text NOT NULL,
  `noHpIbu` varchar(15) NOT NULL,
  `namaWali` varchar(128) NOT NULL,
  `alamatWali` text NOT NULL,
  `noHpWali` varchar(15) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `statusSiswa` enum('0','1','','') NOT NULL,
  `idKelas` varchar(20) NOT NULL,
  `roleId` int(11) NOT NULL,
  `isActive` int(11) NOT NULL,
  `dateCreated` int(11) NOT NULL,
  `validate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nisn`, `nis`, `password`, `namaSiswa`, `jk`, `tempatLahir`, `tanggalLahir`, `statusKeluarga`, `anakKe`, `agama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `noTelp`, `foto`, `asalSd`, `namaAyah`, `pekerjaanAyah`, `alamatAyah`, `noHpAyah`, `namaIbu`, `pekerjaanIbu`, `alamatIbu`, `noHpIbu`, `namaWali`, `alamatWali`, `noHpWali`, `angkatan`, `statusSiswa`, `idKelas`, `roleId`, `isActive`, `dateCreated`, `validate`) VALUES
('60faad6151f9f', '12345', '12345', '$2y$10$zGCRFnOwNvjlLCQjLeokNu9ZQWROH6nXlMZj5bIeDI.2xaF.KBlGO', 'Raisa Noor Islami', 'L', 'Kayutangi', '1999-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '3', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Faisal', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Novia', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Faisal', 'Banjarmasin', '082350890707', '2020', '1', '60f5b78d86905', 0, 0, 1627041121, 0),
('60fb9e90ee996', '3', '3', '$2y$10$T9p54HrraprVMsMUuj4/UOO1TQ9oW27B4qYLlBiuzjek5DDU9rir2', 'Abdul Rohim', 'L', 'Rantau', '1999-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '3', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 Rantau', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7a287e39', 3, 1, 1627102865, 0),
('60fb9f3866cb6', '4', '4', '$2y$10$KmJQRBMSsbx/dlhu/5ifSuSIzAg./B.fob.a240c5.6DgPKEb0coe', 'Hamisatul Jannah', 'P', 'Kayutangi', '2000-12-12', 'Anak Kandung', 'Kedua', 'Islam', 'Banjarmasin', '2', '2', 'Murung Pudak', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7a287e39', 0, 0, 1627103032, 0),
('60fb9f8e983af', '5', '5', '$2y$10$M9vNDAPJYbqsX13HTVxVvuBdaMREIX8BlNtvl3nv5.cvHm3p9gFTu', 'Muhammad Yusril Arrahman', 'L', 'Kayutangi', '2000-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Selatan', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7b16a371', 0, 0, 1627103118, 0),
('60fb9feeb4d2f', '6', '6', '$2y$10$E9QeIyki5KIy2h2UaFHZu.k.qcpeyRT9GY3G..wVgli2gsTFLXaEu', 'Karina', 'P', 'Kayutangi', '1997-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '3', '3', 'Surgi Mufti', 'Banjarmasin Selatan', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 Rantau', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Ibnu Suyud', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7b16a371', 0, 0, 1627103214, 0),
('60fba1d7a41d0', '12', '12', '$2y$10$pCR2ghHQ2meBw94e3megzu2qvPcYMYCQHKSK0xOVTmcqzl4z7hghG', 'Kim Jennie', 'P', 'Seoul', '1996-12-12', 'Anak Kandung', 'Pertama', 'Katolik', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Selatan', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 Rantau', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Ibnu Suyud', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7bb58e0f', 0, 0, 1627103703, 0),
('60fbc944a51dd', '20', '20', '$2y$10$VDP2akA395p3A8ITrc0oGeEchSpcnyP1fjpxdq7Ov2aY6G3aMbfM.', 'Kim Jisoo', 'P', 'Tanjung', '1995-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'JL. Bukti Utama Muara Uya', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7bb58e0f', 0, 0, 1627113796, 0),
('60fbc96bc98c8', '1', '1 ', '$2y$10$YZpva8SgDc/mW.jeBOVUg.xCmd.vzE/AL08JfumRBclzRIUAQ7c4i', 'Muhammad Faisal Lutfi', 'L', 'Kayutangi', '1997-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '2', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b7dc1b350', 0, 0, 1627113835, 0),
('60fbc9823ecfb', '2', '2 ', '$2y$10$ERUtGTLnyk7M6KG7kSsk8uzfTdYz/wGWg.f9IbturGVUAbWQU19sy', 'Fahrul', 'L', 'Muara Teweh', '1999-12-12', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '2', 'Murung Pudak', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN 1 kayu Tangi', 'Abah', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Mama', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Abah', 'Banjarmasin', '082350890707', '2020', '1', '60f5b800b9c88', 0, 0, 1627113858, 0),
('60fea719aa117', '991252313', ' 1001 ', '$2y$10$oO0UxZtx8qqjQzIvHAimB.NkHTRGP3./rIIE2pBJl97sKY80AGium', 'Fachrizal Bayu Setiawan', 'L', 'Tanjung', '1997-07-04', 'Anak Kandung', 'Pertama', 'Islam', 'Banjarmasin', '2', '3', 'Surgi Mufti', 'Banjarmasin Utara', 'Kayutangi', '082350890707', 'default.jpg', 'SDN Nawin Hilir', 'Ibnu Suyud', 'Pegawai Swasta', 'Banjarmasin', '082350890707', 'Misiatun', 'Ibu Rumah Tangga', 'Banjarmasin', '082350890707', 'Misiatun', 'Banjarmasin', '082350890707', '2020', '', '60f5b78d86905', 3, 1, 1627301657, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `kodeTahun` varchar(20) NOT NULL,
  `namaTahun` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `isActive` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`kodeTahun`, `namaTahun`, `keterangan`, `isActive`) VALUES
('20201', 'Semester Ganjil 2020/2021', '2020/2021', '1'),
('20202', 'Semester Genap 2020/2021', '2020/2021', '1'),
('20211', 'Semester Ganjil 2021/2022', '2021/2022', '1'),
('20212', 'Semester Genap 2021/2022', '2021/2022', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `isActive` int(11) NOT NULL,
  `roleId` int(11) NOT NULL,
  `dateCreated` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `username`, `password`, `isActive`, `roleId`, `dateCreated`, `email`) VALUES
('60e29f259695d', 'Fachrizal Bayu Setiawan', 'admin', '$2y$10$B2dQpIYJ.RTzltTRNb3dSOEwqxw3Sd78YyE7I58X7jYfkKRy00KS.', 1, 1, 1625464613, 'fachrizalbayusetiawan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD PRIMARY KEY (`idAbsenSiswa`);

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`idHari`);

--
-- Indexes for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  ADD PRIMARY KEY (`idSekolah`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`kodeJadwal`);

--
-- Indexes for table `jenis_ptk`
--
ALTER TABLE `jenis_ptk`
  ADD PRIMARY KEY (`idJenisPtk`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`idKategoriBarang`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`),
  ADD UNIQUE KEY `kodeKelas` (`kodeKelas`);

--
-- Indexes for table `kelompok_mapel`
--
ALTER TABLE `kelompok_mapel`
  ADD PRIMARY KEY (`idKelompokMapel`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`kodeMapel`);

--
-- Indexes for table `menu_main`
--
ALTER TABLE `menu_main`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `menu_rule`
--
ALTER TABLE `menu_rule`
  ADD PRIMARY KEY (`idRule`),
  ADD KEY `idMenu` (`idMenu`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `menu_title`
--
ALTER TABLE `menu_title`
  ADD PRIMARY KEY (`idTitle`);

--
-- Indexes for table `nilai_uts`
--
ALTER TABLE `nilai_uts`
  ADD PRIMARY KEY (`idNilaiUts`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`idPeriode`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`kodeTahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `idHari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_ptk`
--
ALTER TABLE `jenis_ptk`
  MODIFY `idJenisPtk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `idKategoriBarang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompok_mapel`
--
ALTER TABLE `kelompok_mapel`
  MODIFY `idKelompokMapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_main`
--
ALTER TABLE `menu_main`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `menu_rule`
--
ALTER TABLE `menu_rule`
  MODIFY `idRule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `menu_title`
--
ALTER TABLE `menu_title`
  MODIFY `idTitle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_uts`
--
ALTER TABLE `nilai_uts`
  MODIFY `idNilaiUts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483649;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `idPeriode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_rule`
--
ALTER TABLE `menu_rule`
  ADD CONSTRAINT `menu_rule_ibfk_1` FOREIGN KEY (`idMenu`) REFERENCES `menu_main` (`idMenu`),
  ADD CONSTRAINT `menu_rule_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
