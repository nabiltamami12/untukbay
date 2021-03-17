-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 11:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pekerjaan_petugas`
--

CREATE TABLE `laporan_pekerjaan_petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `fotoSebelum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoSesudah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_pekerjaan_petugas`
--

INSERT INTO `laporan_pekerjaan_petugas` (`id`, `nomor_pk`, `nama_barang`, `jumlah`, `fotoSebelum`, `fotoSesudah`, `created_at`, `updated_at`) VALUES
(1, 'A12-k112', 'Single Arm Band \"6 + baut', 12, '1600311625.jpeg', '1600311625.jpeg', '2020-09-17 03:00:25', '2020-09-17 03:00:25'),
(2, 'A12-k112', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 22, '1600311625.jpeg', '1600311625.jpeg', '2020-09-17 03:00:25', '2020-09-17 03:00:25'),
(3, 'A12-k112', 'Single Arm Band \"6 + baut', 12, '1600311731.jpeg', '1600311731.jpeg', '2020-09-17 03:02:11', '2020-09-17 03:02:11'),
(4, 'A12-k112', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 22, '1600311731.jpeg', '1600311731.jpeg', '2020-09-17 03:02:11', '2020-09-17 03:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pemadamen`
--

CREATE TABLE `laporan_pemadamen` (
  `id` int(10) UNSIGNED NOT NULL,
  `jadwal_padam` date NOT NULL,
  `nomor_pk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_trafo` int(10) UNSIGNED NOT NULL,
  `awal_padam` time NOT NULL,
  `akhir_padam` time NOT NULL,
  `penyulang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_pemadamen`
--

INSERT INTO `laporan_pemadamen` (`id`, `jadwal_padam`, `nomor_pk`, `id_trafo`, `awal_padam`, `akhir_padam`, `penyulang`, `nama_petugas`, `tim`, `deskripsi_pekerjaan`, `status`, `unit_kerja`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, '2020-09-17', 'A12-k112', 104, '09:37:00', '10:37:00', 'kesilir', 'Nabil Tamami', 'inspeksi1', 'inspeksi', 'Selesai Dikerjakan', 'pln ulp jajag', '114.1309686', '-8.472250552', '2020-09-17 02:37:37', '2020-09-17 03:02:58'),
(2, '2020-09-17', 'A12-k112', 104, '09:37:00', '10:37:00', 'kesilir', 'Nabil Tamami', 'inspeksi1', 'inspeksi', 'Selesai Dikerjakan', 'pln ulp jajag', '114.1309686', '-8.472250552', '2020-09-17 02:37:37', '2020-09-17 03:02:58'),
(3, '2020-09-17', 'A12-k112', 104, '09:37:00', '10:37:00', 'kesilir', 'Nabil Tamami', 'inspeksi1', 'inspeksi', 'Selesai Dikerjakan', 'pln ulp jajag', '114.1309686', '-8.472250552', '2020-09-17 02:37:37', '2020-09-17 03:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelompok_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `seksen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `kelompok_material`, `nama_material`, `stok`, `seksen`, `created_at`, `updated_at`) VALUES
(1, 'Dudukan Cut Out Switch', 'Cross Arm type 2.000 U-NP 10 t = 5 mm', 500, '1', NULL, NULL),
(2, 'Dudukan Cut Out Switch', 'Double Arm Band \"8 + 2 baut', 500, '1', NULL, NULL),
(3, 'Dudukan Cut Out Switch', 'Double Arm Bolt & Nut M. 16 x 400', 500, '1', NULL, NULL),
(4, 'Dudukan Cut Out Switch', 'Arm Tie type 750 - pipe 3/4\"', 500, '1', NULL, NULL),
(5, 'Dudukan Cut Out Switch', 'Arm Tie Band', 500, '1', NULL, NULL),
(6, 'Dudukan Lightning Arrester', 'Single Arm Band \"6 + baut', 500, '1', NULL, NULL),
(7, 'Dudukan Lightning Arrester', 'Cross Arm type 2.000 U-NP 8 t = 3,2 mm', 500, '1', NULL, NULL),
(8, 'Dudukan Lightning Arrester', 'Bolt & Nut M 16 x 50', 500, '1', NULL, NULL),
(9, 'Dudukan Lightning Arrester', 'Arm Tie type 750 - pipe 3/4\"', 500, '1', NULL, NULL),
(10, 'Dudukan Transformator', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 500, '1', NULL, NULL),
(11, 'Dudukan Transformator', 'Cross Arm type 750 NP  8 t = 3,2 mm', 500, '1', NULL, NULL),
(12, 'Dudukan Transformator', 'Double Arm Band \"9 + baut', 500, '1', NULL, NULL),
(13, 'Dudukan Transformator', 'Double Arm Bolt & Nut M. 16 x 400', 500, '1', NULL, NULL),
(14, 'Dudukan Transformator', 'Bolt & Nut M 16 x 50', 500, '1', NULL, NULL),
(15, 'Dudukan Transformator', 'Cross Arm type 1.200 U-NP 6,5 t = 2,5 mm', 500, '1', NULL, NULL),
(16, 'Dudukan Transformator', 'Cross Arm type 1.000 U-NP 6,5 t = 2,5 mm', 500, '1', NULL, NULL),
(17, 'Dudukan Transformator', 'Cross Arm type 900 U-NP 8 t = 3,2 mm', 500, '1', NULL, NULL),
(18, 'Dudukan Transformator', 'Arm Tie Band', 500, '1', NULL, NULL),
(19, 'Dudukan Transformator', 'Bolt & Nut M 16 x 75', 500, '1', NULL, NULL),
(20, 'Dudukan Pipa', 'Cross Arm type 500 U-NP 8 t = 3,2 mm', 500, '1', NULL, NULL),
(21, 'Dudukan Pipa', 'Klem Begel U 10\" ( 6 x 38 ) t = 4,5 mm', 500, '1', NULL, NULL),
(22, 'Dudukan Pipa', 'Klem Begel U 3\" ( 6 x 38 ) t = 3 mm', 500, '1', NULL, NULL),
(23, 'Dudukan Pipa', 'Klem Begel U 2\" ( 6 x 38 ) t = 3 mm', 500, '1', NULL, NULL),
(24, 'Dudukan Pipa', 'Bolt & Nut M 16 x 50', 500, '1', NULL, NULL),
(25, 'Dudukan LV Panel', 'Cross Arm type 900 U-NP 8 t = 3,2 mm', 500, '1', NULL, NULL),
(26, 'Dudukan LV Panel', 'Klem Begel U 11\" ( 6 x 38 ) t = 4,5 mm', 500, '1', NULL, NULL),
(27, 'Dudukan LV Panel', 'Bolt & Nut M 16 x 50', 500, '1', NULL, NULL),
(28, 'Tanda Bahaya', 'Stainless Steel Strip', 500, '1', NULL, NULL),
(29, 'Tanda Bahaya', 'Pelat Tanda Bahaya', 500, '1', NULL, NULL),
(30, 'Tanda Bahaya', 'Bolt & Nut M 16 x 50', 500, '1', NULL, NULL),
(31, 'Dudukan Cut Out Switch', 'U NP-10 100 x 50 x 5 x 2500', 500, '2', NULL, NULL),
(32, 'Dudukan Cut Out Switch', 'Double Arm Band \"6', 500, '2', NULL, NULL),
(33, 'Dudukan Lightning Arrester', 'U NP-8 80 x 40 x 3,2 x 2500', 500, '2', NULL, NULL),
(34, 'Dudukan Lightning Arrester', 'Single  Arm Band \"6', 500, '2', NULL, NULL),
(35, 'Dudukan Transformator', 'Dudukan NP-10 Trafo U NP-10 100 x 50 x 5 x 2500', 500, '2', NULL, NULL),
(36, 'Dudukan Transformator', 'Dasar penyangga dudukan NP-8, 80 x 3,2 x 2000', 500, '2', NULL, NULL),
(37, 'Dudukan Transformator', 'Dudukan Trafo NP-8 -750', 500, '2', NULL, NULL),
(38, 'Dudukan Transformator', 'Bolt & Nut M 16 x 50', 500, '2', NULL, NULL),
(39, 'Dudukan Transformator', 'Tempat berdiri pelat bordes ( 200 x 2000 x 2,5)', 500, '2', NULL, NULL),
(40, 'Dudukan Transformator', 'Siku penghalang belakang -L 50 x50 x 35 x 1750', 500, '2', NULL, NULL),
(41, 'Dudukan Transformator', 'Siku penghalang pagar samping  -L 50 x50 x 35 x 465', 500, '2', NULL, NULL),
(42, 'Dudukan Transformator', 'Arm Tie Band 8\"', 500, '2', NULL, NULL),
(43, 'Dudukan Transformator', 'Alas bordes besi siku L 50 x 50 x 35 x 2000', 500, '2', NULL, NULL),
(44, 'Dudukan Transformator', 'Double Arm Band  2 Nut 2pcs', 500, '2', NULL, NULL),
(45, 'Dudukan Transformator', 'Tiang penghalang belakang -L 50 x 50 x 35 x 900', 500, '2', NULL, NULL),
(46, 'Dudukan Transformator', 'Tiang pagar luar kiri dan kanan L 50 x 50 x 35 x 1800', 500, '2', NULL, NULL),
(47, 'Dudukan Transformator', 'Dudukan penghalang kayu jati  -L 50 x 50 x 35 x 260', 500, '2', NULL, NULL),
(48, 'Dudukan Transformator', 'Penghalang kayu jati  / L 50 x 50 x 35 x 2000', 500, '2', NULL, NULL),
(49, 'Dudukan Transformator', 'U-NP 65  x 3 x 750 u/ tempat Pipa 2\" + 3\"', 500, '2', NULL, NULL),
(50, 'Dudukan Transformator', 'klem begel 35 x 3 x 2\" u/ pipa 2\"', 500, '2', NULL, NULL),
(51, 'Dudukan Transformator', 'klem begel 35 x 3 x 3\" u/ pipa 3\"', 500, '2', NULL, NULL),
(52, 'Dudukan LV Panel', 'U NP-8 80 x 40 x 3,2 x 2500', 500, '2', NULL, NULL),
(53, 'Dudukan LV Panel', 'Klem Begel 35 x 5 x 10\"', 500, '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2020_08_06_210308_add_seksen_to_materials_table', 2),
(106, '2020_06_18_151620_create_jadwal_padams_table', 3),
(108, '2020_06_18_153033_create_kebutuhan_materials_table', 3),
(109, '2020_08_06_163544_create_pinjam_materials_table', 3),
(110, '2020_08_06_171731_create_laporan_materials_table', 3),
(112, '2020_08_06_175507_create_peminjaman_materials_table', 3),
(115, '2020_09_11_155451_create_perintah_kerjas_table', 4),
(116, '2020_09_12_071657_create_peminjaman_barangs_table', 4),
(117, '2020_09_14_165333_create_padam_barang_posts_table', 5),
(119, '2020_09_15_135615_create_p_k_pemadamen_table', 7),
(134, '2014_10_12_000000_create_users_table', 8),
(135, '2014_10_12_100000_create_password_resets_table', 8),
(136, '2019_08_19_000000_create_failed_jobs_table', 8),
(137, '2020_06_18_151304_create_materials_table', 8),
(138, '2020_06_18_152137_create_trafos_table', 8),
(139, '2020_08_06_174341_create_pemadamen_table', 8),
(140, '2020_08_06_175544_create_laporan_peminjamen_table', 8),
(141, '2020_08_06_175601_create_laporan_pemadamen_table', 8),
(142, '2020_09_14_174727_create_product_stocks_table', 8),
(143, '2020_09_15_141309_create_perintah__kerjas_table', 8),
(144, '2020_09_15_222846_create_pekerjaan_petugas_table', 8),
(145, '2020_09_16_234440_create_laporan_pekerjaan_petugas_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan_petugas`
--

CREATE TABLE `pekerjaan_petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `fotoSebelum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotoSesudah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan_petugas`
--

INSERT INTO `pekerjaan_petugas` (`id`, `nomor_pk`, `nama_barang`, `jumlah`, `fotoSebelum`, `fotoSesudah`, `created_at`, `updated_at`) VALUES
(1, 'A12-k112', 'Single Arm Band \"6 + baut', 12, '1600311625.jpeg', '1600311625.jpeg', '2020-09-17 03:00:25', '2020-09-17 03:00:25'),
(2, 'A12-k112', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 22, '1600311625.jpeg', '1600311625.jpeg', '2020-09-17 03:00:25', '2020-09-17 03:00:25'),
(3, 'A12-k112', 'Single Arm Band \"6 + baut', 12, '1600311731.jpeg', '1600311731.jpeg', '2020-09-17 03:02:11', '2020-09-17 03:02:11'),
(4, 'A12-k112', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 22, '1600311731.jpeg', '1600311731.jpeg', '2020-09-17 03:02:11', '2020-09-17 03:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `pemadamen`
--

CREATE TABLE `pemadamen` (
  `id` int(10) UNSIGNED NOT NULL,
  `jadwal_padam` date NOT NULL,
  `nomor_pk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_trafo` int(10) UNSIGNED NOT NULL,
  `awal_padam` time NOT NULL,
  `akhir_padam` time NOT NULL,
  `penyulang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemadamen`
--

INSERT INTO `pemadamen` (`id`, `jadwal_padam`, `nomor_pk`, `id_trafo`, `awal_padam`, `akhir_padam`, `penyulang`, `nama_petugas`, `tim`, `deskripsi_pekerjaan`, `status`, `unit_kerja`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, '2020-09-17', 'A12-k112', 104, '09:37:00', '10:37:00', 'kesilir', 'Nabil Tamami', 'inspeksi1', 'inspeksi', 'Selesai Dikerjakan', 'pln ulp jajag', '[{\"latitude\":\"114.1309686\"}]', '[{\"longitude\":\"-8.472250552\"}]', '2020-09-17 02:37:37', '2020-09-17 03:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_stocks`
--

INSERT INTO `product_stocks` (`id`, `nomor_pk`, `nama_barang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'A12-k112', 'Single Arm Band \"6 + baut', 12, '2020-09-17 02:54:31', '2020-09-17 02:54:31'),
(2, 'A12-k112', 'Cross Arm type 1.500 U-NP 10 t = 5 mm', 22, '2020-09-17 02:54:31', '2020-09-17 02:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `trafos`
--

CREATE TABLE `trafos` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_trafo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_material` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seksen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pemasangan` date NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trafos`
--

INSERT INTO `trafos` (`id`, `kode_trafo`, `id_material`, `alamat`, `seksen`, `deskripsi`, `gambar`, `tanggal_pemasangan`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'JF078', 0, 'DS. CLURING', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2006-05-01', '114.197018', '-8.414826432', NULL, NULL),
(2, 'JF361', 0, 'JL. YOS SUDARSO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2011-04-28', '114.1841424', '-8.438451164', NULL, NULL),
(3, 'JF362', 0, 'DS.BANGOREJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2009-12-22', '114.1571907', '-8.467600483', NULL, NULL),
(4, 'JF074', 0, 'DS.BANGOREJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2010-08-16', '114.1704449', '-8.464559524', NULL, NULL),
(5, 'JF071', 0, 'DS. CEMETUK', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-29', '114.1848131', '-8.415985209', NULL, NULL),
(6, 'JF011', 0, 'KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-28', '114.1815109', '-8.43681362', NULL, NULL),
(7, 'JF040', 0, 'HOTEL BARU INDAH', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2010-02-06', '114.1814727', '-8.437581799', NULL, NULL),
(8, 'JF013', 0, 'JL PANGLIMA BESAR SUDIRMAN  -  JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1836746', '-8.438321463', NULL, NULL),
(9, 'JF037', 0, 'JL. RAYA JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1841611', '-8.438692064', NULL, NULL),
(10, 'JF041', 0, 'DS. KAMPUNGBARU', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1823105', '-8.44046626', NULL, NULL),
(11, 'JF029', 0, 'DS. CLURING', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-29', '114.1859261', '-8.405379671', NULL, NULL),
(12, 'JF343', 0, 'DS. BULUSARI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2004-03-01', '114.1888701', '-8.424963957', NULL, NULL),
(13, 'JF066', 0, 'DS. BULUSARI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-06-27', '114.1857244', '-8.431441777', NULL, NULL),
(14, 'JF002', 0, 'DS. KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-05-24', '114.185334', '-8.434891524', NULL, NULL),
(15, 'JF014', 0, 'JL. PB SUDIRMAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-04-30', '114.1892929', '-8.439936561', NULL, NULL),
(16, 'JF080', 0, 'DS. YOSOWINANGUN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2006-05-01', '114.192301', '-8.438934362', NULL, NULL),
(17, 'JF076', 0, 'DS. CLURING', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-05-01', '114.1912168', '-8.409781517', NULL, NULL),
(18, 'JF244', 0, 'DN.PADANG BULAN TEGAL REJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-05-03', '114.1232513', '-8.413092391', NULL, NULL),
(19, 'JF020', 0, 'DS. JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2011-06-29', '114.1834574', '-8.442824869', NULL, NULL),
(20, 'JF084', 0, 'DS.SEMBULUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2011-10-19', '114.1927804', '-8.44278782', NULL, NULL),
(21, 'JF088', 0, 'DS.JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-08-03', '114.1810465', '-8.437390779', NULL, NULL),
(22, 'JF359', 0, 'DS. PURWODADI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-11-05', '114.1756522', '-8.453677584', NULL, NULL),
(23, 'JF016', 0, 'DS. JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-28', '114.1804426', '-8.447325319', NULL, NULL),
(24, 'JF012', 0, 'DS. KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2006-03-15', '114.1791782', '-8.44079396', NULL, NULL),
(25, 'JF046', 0, 'DS. GEMBOLO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-06-29', '114.1734192', '-8.455152423', NULL, NULL),
(26, 'JF230', 0, 'DS. BANGOSERE', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-11-12', '114.1703664', '-8.472275613', NULL, NULL),
(27, 'JF047', 0, 'DS. BANGOSERE', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1657619', '-8.461767021', NULL, NULL),
(28, 'JF023', 0, 'DS. PURWODADI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.176784', '-8.450662934', NULL, NULL),
(29, 'JF245', 0, 'DN.PADANG BULAN TEGAL REJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2006-12-28', '114.1269826', '-8.438640976', NULL, NULL),
(30, 'JF304', 0, 'DN.SUMBER AGUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2006-03-20', '114.1195434', '-8.444633718', NULL, NULL),
(31, 'JF340', 0, 'DN.SUMBER AGUNG-KARANG DORO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-05-03', '114.1201817', '-8.442582095', NULL, NULL),
(32, 'JF243', 0, 'DN.PADANG BULAN TEGAL REJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-02-05', '114.1241589', '-8.420821581', NULL, NULL),
(33, 'JF220', 0, 'DS.TEGAL SARI-KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '1996-05-11', '114.1364266', '-8.40951618', NULL, NULL),
(34, 'JF067', 0, 'DS. SIDOMUKTI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-15', '114.1870229', '-8.418300141', NULL, NULL),
(35, 'JF305', 0, 'DN.SUMBER KEMBANG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2002-11-08', '114.1283976', '-8.450243487', NULL, NULL),
(36, 'JF188', 0, 'DS.TANJUNGREJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2015-05-15', '114.1381739', '-8.456482356', NULL, NULL),
(37, 'JF344', 0, 'DS.BULUSARI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2015-04-30', '114.1895426', '-8.425180038', NULL, NULL),
(38, 'JF070', 0, 'DS.SERE', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2015-05-18', '114.168522', '-8.46320598', NULL, NULL),
(39, 'JF116', 0, 'DS.PETAHUNAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-04-28', '114.1821303', '-8.445775459', NULL, NULL),
(40, 'JF178', 0, 'DS.CEMETUK', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '0000-00-00', '114.1952308', '-8.417450697', NULL, NULL),
(41, 'JF042', 0, 'DS. WRINGINAGUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1814175', '-8.433137038', NULL, NULL),
(42, 'JF145', 0, 'DS. PETAHUNAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-08-31', '114.1835701', '-8.448382013', NULL, NULL),
(43, 'JF105', 0, 'DS. PETAUNAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2011-01-07', '114.183246', '-8.452334623', NULL, NULL),
(44, 'JF045', 0, 'DS. WRINGINAGUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1801643', '-8.435781504', NULL, NULL),
(45, 'JF051', 0, 'DS. KEBONDALEM', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1589496', '-8.466598', NULL, NULL),
(46, 'JF287', 0, 'DS. SENDANGREJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-10-18', '114.1496415', '-8.458160922', NULL, NULL),
(47, 'JF288', 0, 'DS. KEBONDALEM', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2008-11-12', '114.1350757', '-8.456544386', NULL, NULL),
(48, 'JF234', 0, 'DS.PADANGBULAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-02-05', '114.1228603', '-8.427575619', NULL, NULL),
(49, 'JF192', 0, 'DS.JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2011-06-29', '114.1860358', '-8.443467066', NULL, NULL),
(50, 'JF349', 0, 'DS.GEMBOLO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2018-03-03', '114.1761576', '-8.453577723', NULL, NULL),
(51, 'JF091', 0, 'DS.KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2018-09-25', '114.1897882', '-8.439707078', NULL, NULL),
(52, 'JF019', 0, 'JL. PB SUDIRMAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2012-10-10', '114.1872379', '-8.43977716', NULL, NULL),
(53, 'JF346', 0, 'DS.PURWODADI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2017-12-01', '114.1660275', '-8.454889386', NULL, NULL),
(54, 'JF182', 0, 'DS.KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-08-31', '114.1831727', '-8.450259884', NULL, NULL),
(55, 'JF190', 0, 'DS.JAJAG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2018-09-20', '114.1865685', '-8.440907814', NULL, NULL),
(56, 'JF406', 0, 'DS.BOLO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2018-11-25', '114.1677423', '-8.45669359', NULL, NULL),
(57, 'JF407', 0, 'DS.TANJUNGREJO', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.162156', '-8.464353284', NULL, NULL),
(58, 'JF415', 0, 'DS.KRAJAN', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-08-31', '114.1822875', '-8.451249688', NULL, NULL),
(59, 'JF420', 0, 'DS. WRINGINAGUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1793403', '-8.432652207', NULL, NULL),
(60, 'JF416', 0, 'DS. BULUSARI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2004-03-01', '114.1870852', '-8.426432353', NULL, NULL),
(61, 'JF403', 0, 'DS.JATISARI', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '0000-00-00', '114.1911217', '-8.422669956', NULL, NULL),
(62, 'JF428', 0, 'DS. BANGOSERE', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2007-07-18', '114.1650569', '-8.462291357', NULL, NULL),
(63, 'JF394', 0, 'DS.SEMBULUNG', '1', 'KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)', '', '2019-12-06', '114.1935082', '-8.444664863', NULL, NULL),
(64, 'JF048', 0, 'DS. BANGOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1788722', '-8.467626331', NULL, NULL),
(65, 'JG134', 0, 'DS. KARANGDORO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1029322', '-8.448050042', NULL, NULL),
(66, 'JG326', 0, 'DS. BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-01', '114.1005535', '-8.450180608', NULL, NULL),
(67, 'JG133', 0, 'DS. BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.0966014', '-8.449725914', NULL, NULL),
(68, 'JG325', 0, 'DS. SUMBERURIP BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '1997-09-25', '114.0861188', '-8.448873483', NULL, NULL),
(69, 'JG363', 0, 'DS.PESANGGANRAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-22', '114.098352', '-8.570260976', NULL, NULL),
(70, 'JG368', 0, 'DS.BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-29', '114.1113575', '-8.448096711', NULL, NULL),
(71, 'JG367', 0, 'DS.BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-29', '114.1064805', '-8.457798419', NULL, NULL),
(72, 'JG369', 0, 'DS.KALIGESING', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-28', '114.1258485', '-8.461789308', NULL, NULL),
(73, 'JG203', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-02-08', '114.0783651', '-8.58808115', NULL, NULL),
(74, 'JF173', 0, 'DS.  SEMBULUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-27', '114.2067216', '-8.45210896', NULL, NULL),
(75, 'JF027', 0, 'DS. PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.14646', '-8.485278742', NULL, NULL),
(76, 'JF135', 0, 'DS. BULUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-05-25', '114.1953048', '-8.475441869', NULL, NULL),
(77, 'JF291', 0, 'DS. BULUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1947089', '-8.48320319', NULL, NULL),
(78, 'JF333', 0, 'DS. SEMBULUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-10-13', '114.1962115', '-8.444787987', NULL, NULL),
(79, 'JF065', 0, 'DS. SEMBULUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-02-27', '114.2013787', '-8.449164403', NULL, NULL),
(80, 'JF154', 0, 'DS. SEMBULUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-23', '114.2060459', '-8.457321497', NULL, NULL),
(81, 'JF258', 0, 'DS. CURAH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-02-20', '114.2189299', '-8.462119516', NULL, NULL),
(82, 'JG247', 0, 'DS. SUMBERMANGGIS', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.0931997', '-8.436189401', NULL, NULL),
(83, 'JG207', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-12-12', '114.0663447', '-8.580068399', NULL, NULL),
(84, 'JG210', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-11-27', '114.1004252', '-8.563131419', NULL, NULL),
(85, 'JF087', 0, 'DS.KEBONREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-08-03', '114.1405602', '-8.485683675', NULL, NULL),
(86, 'JF094', 0, 'DS.KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2013-12-27', '114.1419801', '-8.470759363', NULL, NULL),
(87, 'JG338', 0, 'DS. RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '1987-02-16', '114.083509', '-8.573541144', NULL, NULL),
(88, 'JG273', 0, 'DS. RINGINMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-05-21', '114.0747929', '-8.57320658', NULL, NULL),
(89, 'JG064', 0, 'DS. KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-04-24', '114.0990985', '-8.565792789', NULL, NULL),
(90, 'JG006', 0, 'DS. RINGINMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.0982337', '-8.573081506', NULL, NULL),
(91, 'JG271', 0, 'DS. RINGINSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2002-05-21', '114.112754', '-8.583393842', NULL, NULL),
(92, 'JG270', 0, 'DS. RINGINSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-02-27', '114.1013812', '-8.578424351', NULL, NULL),
(93, 'JG354', 0, 'DS. RINGINSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-25', '114.1132144', '-8.591520691', NULL, NULL),
(94, 'JG005', 0, 'DS. SUMBERURIP BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-16', '114.0884362', '-8.44913625', NULL, NULL),
(95, 'JG231', 0, 'DS. BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.106675', '-8.44375856', NULL, NULL),
(96, 'JG347', 0, 'DS. KARANGDORO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-04-24', '114.1032384', '-8.43850925', NULL, NULL),
(97, 'JG309', 0, 'DS. BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-04-28', '114.1007511', '-8.431392796', NULL, NULL),
(98, 'JG358', 0, 'DS. KARANGDORO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-10-13', '114.1019705', '-8.426045256', NULL, NULL),
(99, 'JF053', 0, 'DS. KEBONREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1368341', '-8.485484496', NULL, NULL),
(100, 'JF054', 0, 'DS. KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-16', '114.1335854', '-8.484102594', NULL, NULL),
(101, 'JF007', 0, 'DS. KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-28', '114.1323642', '-8.477629522', NULL, NULL),
(102, 'JF194', 0, 'DS. KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-27', '114.1350749', '-8.470747234', NULL, NULL),
(103, 'JF052', 0, 'DS. GUNUNGSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1492338', '-8.479628346', NULL, NULL),
(104, 'JF008', 0, 'DS. KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-04-08', '114.1309686', '-8.472250552', NULL, NULL),
(105, 'JF055', 0, 'DS. YUDOMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-11-27', '114.1356359', '-8.491045916', NULL, NULL),
(106, 'JF168', 0, 'DS. PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-02-21', '114.1461279', '-8.495080457', NULL, NULL),
(107, 'JF167', 0, 'DS. KEDUNGAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-02-19', '114.1540117', '-8.511216847', NULL, NULL),
(108, 'JG337', 0, 'DS. PESANGGARAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-04-24', '114.0996761', '-8.564607115', NULL, NULL),
(109, 'JG039', 0, 'DS. SUMBERMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.0910993', '-8.564012642', NULL, NULL),
(110, 'JF050', 0, 'DS. KARANGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1784491', '-8.476687173', NULL, NULL),
(111, 'JF201', 0, 'DS. PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-15', '114.1612802', '-8.502244691', NULL, NULL),
(112, 'JF026', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1607637', '-8.507698649', NULL, NULL),
(113, 'JG237', 0, 'DS.SUMBERMANGGIS', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2013-12-01', '114.0829809', '-8.435914506', NULL, NULL),
(114, 'JG233', 0, 'DS.BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2014-05-05', '114.0990294', '-8.450012544', NULL, NULL),
(115, 'JF200', 0, 'DS. PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-27', '114.1557041', '-8.491406649', NULL, NULL),
(116, 'JF095', 0, 'DS.YUDOMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '0000-00-00', '114.1376785', '-8.499555359', NULL, NULL),
(117, 'JG104', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-05-22', '114.0983699', '-8.569635697', NULL, NULL),
(118, 'JG139', 0, 'DS.MULYOASRI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-10-23', '114.0938151', '-8.562509442', NULL, NULL),
(119, 'JG232', 0, 'DS.BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-02-26', '114.0990712', '-8.450632138', NULL, NULL),
(120, 'JF249', 0, 'DS.BANGOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-03-19', '114.1869045', '-8.468382404', NULL, NULL),
(121, 'JF015', 0, 'DS. BANGOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-11-25', '114.1793896', '-8.471301809', NULL, NULL),
(122, 'JF115', 0, 'DS.BANGOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-10-20', '114.1796591', '-8.469658781', NULL, NULL),
(123, 'JG292', 0, 'DS.REJOAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-05-20', '114.0916533', '-8.581272415', NULL, NULL),
(124, 'JF034', 0, 'DS. PURWODADI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-04-30', '114.1829148', '-8.455172453', NULL, NULL),
(125, 'JF049', 0, 'DS. BANGOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2011-11-05', '114.1861721', '-8.469255763', NULL, NULL),
(126, 'JF136', 0, 'DS. BULUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-01-13', '114.1948254', '-8.472223547', NULL, NULL),
(127, 'JG332', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-05-20', '114.093932', '-8.583924038', NULL, NULL),
(128, 'JF199', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-27', '114.1560714', '-8.494766145', NULL, NULL),
(129, 'JG093', 0, 'DS.MULYOASI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '0000-00-00', '114.0900927', '-8.561806611', NULL, NULL),
(130, 'JF137', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-02-19', '114.1551271', '-8.52183454', NULL, NULL),
(131, 'JG274', 0, 'DS. RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-02-23', '114.0805362', '-8.582287611', NULL, NULL),
(132, 'JG345', 0, 'DS.RINGINSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-25', '114.1078484', '-8.594290847', NULL, NULL),
(133, 'JF284', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-05-25', '114.1524637', '-8.504011028', NULL, NULL),
(134, 'JF212', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-05-26', '114.1575732', '-8.500716786', NULL, NULL),
(135, 'JF202', 0, 'DS.SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-05-26', '114.1575706', '-8.500913477', NULL, NULL),
(136, 'JF285', 0, 'DS. PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-01', '114.1543058', '-8.508038911', NULL, NULL),
(137, 'JF286', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1578112', '-8.507956116', NULL, NULL),
(138, 'JG180', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2018-03-15', '114.1001764', '-8.576898258', NULL, NULL),
(139, 'JF186', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-04-23', '114.1459432', '-8.498502536', NULL, NULL),
(140, 'JG209', 0, 'DS.RINGINMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-10-15', '114.0934742', '-8.563084623', NULL, NULL),
(141, 'JG272', 0, 'DS. RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-26', '114.091455', '-8.574279374', NULL, NULL),
(142, 'JG392', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-03-01', '114.0884832', '-8.580222488', NULL, NULL),
(143, 'JG393', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-06-08', '114.073452', '-8.591586423', NULL, NULL),
(144, 'JG426', 0, 'DS.PESANGGANRAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-05-22', '114.098321', '-8.571492976', NULL, NULL),
(145, 'JG373', 0, 'DS. RINGINMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-05-21', '114.0681569', '-8.575455887', NULL, NULL),
(146, 'JG339', 0, 'DN.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2018-09-25', '114.1040638', '-8.568549833', NULL, NULL),
(147, 'JG435', 0, 'DS. RINGINSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-25', '114.1149498', '-8.588430586', NULL, NULL),
(148, 'JG432', 0, 'DS.BLOKAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-29', '114.1091983', '-8.45979849', NULL, NULL),
(149, 'JF452', 0, 'DS. GUNUNGSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1506311', '-8.476446949', NULL, NULL),
(150, 'JF125', 0, 'DS. KEDUNGRINGIN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-05-25', '114.1908916', '-8.511552719', NULL, NULL),
(151, 'JF357', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1790951', '-8.520202038', NULL, NULL),
(152, 'JF165', 0, 'DS. PLAOSAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-02', '114.1930207', '-8.525092739', NULL, NULL),
(153, 'JF166', 0, 'DS. SELOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-29', '114.1924223', '-8.529949299', NULL, NULL),
(154, 'JF306', 0, 'DS. PLAOSAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-01-01', '114.1990337', '-8.52978786', NULL, NULL),
(155, 'JF127', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2011-08-21', '114.1726044', '-8.513293114', NULL, NULL),
(156, 'JF123', 0, 'DS. SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-05-25', '114.1760693', '-8.489891845', NULL, NULL),
(157, 'JF024', 0, 'DS. KEDUNGRINGIN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-24', '114.193405', '-8.514233395', NULL, NULL),
(158, 'JG302', 0, 'DS. BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1095292', '-8.466629205', NULL, NULL),
(159, 'JG301', 0, 'DS. BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1148104', '-8.470538613', NULL, NULL),
(160, 'JG365', 0, 'DS.BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-04-24', '114.1121002', '-8.486702582', NULL, NULL),
(161, 'JG268', 0, 'DS. SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-25', '114.1265121', '-8.531038603', NULL, NULL),
(162, 'JG132', 0, 'DS. KALIGESING', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1192378', '-8.462588026', NULL, NULL),
(163, 'JG297', 0, 'DS. KEBONDALEM', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1248385', '-8.473079885', NULL, NULL),
(164, 'JG162', 0, 'DS. RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1251452', '-8.48501146', NULL, NULL),
(165, 'JG056', 0, 'DS. RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1161524', '-8.495042665', NULL, NULL),
(166, 'JF175', 0, 'DS. NGADIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1924248', '-8.495484349', NULL, NULL),
(167, 'JF124', 0, 'DS. SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-05-25', '114.1750505', '-8.504220307', NULL, NULL),
(168, 'JG079', 0, 'DS.BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-08-18', '114.1171224', '-8.48833738', NULL, NULL),
(169, 'JF075', 0, 'DS.SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-08-17', '114.1730131', '-8.508795128', NULL, NULL),
(170, 'JG122', 0, 'DS. BARUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1137267', '-8.479131193', NULL, NULL),
(171, 'JG353', 0, 'DS. KEBONREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-09-06', '114.1178878', '-8.483580276', NULL, NULL),
(172, 'JG300', 0, 'DS. SENEPOLOR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1011188', '-8.483782895', NULL, NULL),
(173, 'JG263', 0, 'DS. KEDUNGAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-06-28', '114.1480523', '-8.523379214', NULL, NULL),
(174, 'JG262', 0, 'DS. SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-06-28', '114.1490555', '-8.519283729', NULL, NULL),
(175, 'JG264', 0, 'DS. SILIRSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2011-02-12', '114.135365', '-8.525001479', NULL, NULL),
(176, 'JG265', 0, 'DS. YUDOMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-28', '114.1320534', '-8.517390221', NULL, NULL),
(177, 'JG267', 0, 'DS. RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2010-01-07', '114.1289303', '-8.503458277', NULL, NULL),
(178, 'JG266', 0, 'DS. SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-05-29', '114.131414', '-8.507655996', NULL, NULL),
(179, 'JG269', 0, 'DS. SUMBERBENING', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2003-04-23', '114.1201244', '-8.54469094', NULL, NULL),
(180, 'JG236', 0, 'DS.SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-03-19', '114.1322891', '-8.504228883', NULL, NULL),
(181, 'JF150', 0, 'DS. SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-02', '114.1749656', '-8.494473956', NULL, NULL),
(182, 'JF126', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-05-25', '114.1685945', '-8.509227616', NULL, NULL),
(183, 'JF151', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-10-05', '114.1788235', '-8.511687256', NULL, NULL),
(184, 'JF025', 0, 'DS. KEDUNGRINGIN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1841431', '-8.511514621', NULL, NULL),
(185, 'JF174', 0, 'DS. NGADIMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-24', '114.1938239', '-8.503415459', NULL, NULL),
(186, 'JF140', 0, 'DS.TAMANSURUH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-02', '114.1755523', '-8.492449487', NULL, NULL),
(187, 'JF177', 0, 'DS.NGADIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-02-02', '114.198295', '-8.499161524', NULL, NULL),
(188, 'JG073', 0, 'DS. KESILIR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-10-12', '114.115886', '-8.537397464', NULL, NULL),
(189, 'JF131', 0, 'DS.SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-05-20', '114.1789875', '-8.49147021', NULL, NULL),
(190, 'JG195', 0, 'DS.YUDOMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-28', '114.1300715', '-8.514520366', NULL, NULL),
(191, 'JF185', 0, 'DS.PLAOSAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-11-20', '114.1900509', '-8.525356696', NULL, NULL),
(192, 'JF106', 0, 'DS.PLAOSAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-01-01', '114.19736', '-8.534296833', NULL, NULL),
(193, 'JF176', 0, 'DS.NGADIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-11-29', '114.1943272', '-8.499625959', NULL, NULL),
(194, 'JF112', 0, 'DS.SAMBIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-10-20', '114.1872733', '-8.511444066', NULL, NULL),
(195, 'JF113', 0, 'DS.TAMANSURUH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-09-23', '114.1768345', '-8.485876868', NULL, NULL),
(196, 'JG239', 0, 'DS.SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-03-15', '114.1204703', '-8.555049637', NULL, NULL),
(197, 'JF376', 0, 'DS.SELOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-29', '114.1861061', '-8.532169334', NULL, NULL),
(198, 'JG399', 0, 'DS.SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2016-03-15', '114.1213566', '-8.557914086', NULL, NULL),
(199, 'JG296', 0, 'DS.PASEMBON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-07-13', '114.1487224', '-8.52269815', NULL, NULL),
(200, 'JF405', 0, 'Sambirejo', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2020-01-01', '114.171105', '-8.506044268', NULL, NULL),
(201, 'JF475', 0, 'DS. NGADIREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2020-01-15', '114.1874026', '-8.495334473', NULL, NULL),
(202, 'JF021', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1709132', '-8.523638508', NULL, NULL),
(203, 'JG022', 0, 'DS. KEDUNGREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.16943', '-8.530462832', NULL, NULL),
(204, 'JG128', 0, 'DS. SILIRKROMBANG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-23', '114.1665004', '-8.536925629', NULL, NULL),
(205, 'JG129', 0, 'DS. SNEPOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-10-11', '114.1557581', '-8.53636667', NULL, NULL),
(206, 'JG218', 0, 'DS. SILIRSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1438486', '-8.535704346', NULL, NULL),
(207, 'JG313', 0, 'DS. WONOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1635169', '-8.549454801', NULL, NULL),
(208, 'JG314', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1673572', '-8.550062035', NULL, NULL),
(209, 'JG316', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-16', '114.1904412', '-8.550009356', NULL, NULL),
(210, 'JG315', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-15', '114.1809175', '-8.550650397', NULL, NULL),
(211, 'JG317', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1968498', '-8.552746861', NULL, NULL),
(212, 'JG318', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1933295', '-8.55671134', NULL, NULL),
(213, 'JG364', 0, 'DS.PESANGGARAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-24', '114.1023323', '-8.556468157', NULL, NULL),
(214, 'JG366', 0, 'DS.SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-24', '114.1116156', '-8.51366495', NULL, NULL),
(215, 'JG072', 0, 'DS. SENEPO REJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-02-21', '114.1502051', '-8.535786436', NULL, NULL),
(216, 'JG206', 0, 'DS.SUKOMUKTI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2013-10-01', '114.1104982', '-8.521671235', NULL, NULL),
(217, 'JG204', 0, 'DS.SUKOMUKTI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-04-18', '114.1100712', '-8.521419779', NULL, NULL),
(218, 'JG146', 0, 'DS. RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-01-26', '114.1142977', '-8.502577071', NULL, NULL),
(219, 'JG059', 0, 'DS. SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-07-24', '114.110129', '-8.536563638', NULL, NULL),
(220, 'JG060', 0, 'DS. KESILIR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-08-24', '114.1094958', '-8.546588754', NULL, NULL),
(221, 'JG149', 0, 'DS. SUMBERBENING', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-01-24', '114.1098008', '-8.541938488', NULL, NULL),
(222, 'JG061', 0, 'DS. KESILIR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1098264', '-8.553900183', NULL, NULL),
(223, 'JG062', 0, 'DS. SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1125917', '-8.553697336', NULL, NULL),
(224, 'JG038', 0, 'DS. SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2011-06-28', '114.1092468', '-8.557758249', NULL, NULL),
(225, 'JG057', 0, 'DS. SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1124268', '-8.509264295', NULL, NULL),
(226, 'JG307', 0, 'DS. SENEPOSEPI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-17', '114.100942', '-8.519941246', NULL, NULL),
(227, 'JG058', 0, 'Ds. SUKOMUKTI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1106352', '-8.52013734', NULL, NULL),
(228, 'JG148', 0, 'DS. SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.110519', '-8.53056195', NULL, NULL),
(229, 'JG147', 0, 'DS. SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-02-15', '114.1101629', '-8.525591553', NULL, NULL),
(230, 'JG063', 0, 'DS. MULYOSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-24', '114.1007916', '-8.560823256', NULL, NULL),
(231, 'JG303', 0, 'DS. MULYOSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-02-16', '114.1020752', '-8.549156373', NULL, NULL),
(232, 'JG319', 0, 'DS.TEMUREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '0000-00-00', '114.1549115', '-8.552134791', NULL, NULL),
(233, 'JG320', 0, 'DS.SILIRSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-01-21', '114.1395346', '-8.547727959', NULL, NULL),
(234, 'JG238', 0, 'DS.SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-05-03', '114.1083814', '-8.520038776', NULL, NULL),
(235, 'JG096', 0, 'DS.RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2015-05-25', '114.1156707', '-8.497983384', NULL, NULL),
(236, 'JG102', 0, 'DS.SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1121037', '-8.554609953', NULL, NULL),
(237, 'JG098', 0, 'DS.SILIR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2011-06-28', '114.1092269', '-8.560067662', NULL, NULL),
(238, 'JG193', 0, 'DS.SUMBERMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-02-16', '114.1023343', '-8.545361364', NULL, NULL),
(239, 'JG160', 0, 'DS.KESILIR', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-11-30', '114.1090531', '-8.553075532', NULL, NULL),
(240, 'JG164', 0, 'DS.RINGINTELU', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-20', '114.1132145', '-8.506522639', NULL, NULL),
(241, 'JG161', 0, 'DS.SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-26', '114.190383', '-8.54766803', NULL, NULL),
(242, 'JG130', 0, 'DS.SENEPOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-05-05', '114.1577277', '-8.531402706', NULL, NULL),
(243, 'JG138', 0, 'DS.SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1131384', '-8.529913811', NULL, NULL),
(244, 'JG035', 0, 'DS. SILIRSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1388601', '-8.537348995', NULL, NULL),
(245, 'JG335', 0, 'DS.PLAOSAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-20', '114.1849879', '-8.550835988', NULL, NULL),
(246, 'JG380', 0, 'DS.SENEPOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-07-18', '114.1718697', '-8.532675722', NULL, NULL),
(247, 'JG371', 0, 'DS.SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1979274', '-8.549006017', NULL, NULL),
(248, 'JG381', 0, 'DS,SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2005-04-02', '114.1938206', '-8.559702302', NULL, NULL),
(249, 'JG387', 0, 'DS.SENEPOSEPI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-17', '114.1022324', '-8.515160684', NULL, NULL),
(250, 'JG334', 0, 'DS.SUMBERMULYO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2018-09-24', '114.1046813', '-8.555273077', NULL, NULL),
(251, 'JG103', 0, 'DS.MULYOASRI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-04-23', '114.096426', '-8.549720571', NULL, NULL),
(252, 'JG348', 0, 'DS.SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-07-10', '114.111106', '-8.517034837', NULL, NULL),
(253, 'JG418', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-11-23', '114.0847551', '-8.588306703', NULL, NULL),
(254, 'JG184', 0, 'DS.RINGINAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-11-23', '114.081407', '-8.584559131', NULL, NULL),
(255, 'JG409', 0, 'Ds. SUKOMUKTI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '0000-00-00', '114.1179699', '-8.521205575', NULL, NULL),
(256, 'JG388', 0, 'DS. SILIRKROMBANG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-23', '114.1643959', '-8.544669574', NULL, NULL),
(257, 'JG375', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-15', '114.1728693', '-8.550435175', NULL, NULL),
(258, 'JG434', 0, 'DS. MULYOSARI', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-12-04', '114.1012134', '-8.558554613', NULL, NULL),
(259, 'JG431', 0, 'DS. SUMBERJAMBE', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-12-08', '114.16588', '-8.553386656', NULL, NULL),
(260, 'JG437', 0, 'DS. SUMBERSUKO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2019-12-15', '114.1155535', '-8.524534976', NULL, NULL),
(261, 'JG397', 0, 'DS. SUKOREJO', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2004-03-01', '114.1151075', '-8.510175215', NULL, NULL),
(262, 'JG119', 0, 'DS. SIDORUKUN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-21', '114.1190434', '-8.589896577', NULL, NULL),
(263, 'JG360', 0, 'DS. PECEMENGAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-03-01', '114.133645', '-8.602764076', NULL, NULL),
(264, 'JG208', 0, 'DS.LAMPON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2012-05-30', '114.0880959', '-8.614751209', NULL, NULL),
(265, 'JG310', 0, 'DS. PURWOSARI BULU AGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-02-16', '114.1156481', '-8.612619512', NULL, NULL),
(266, 'JG225', 0, 'DS. TEGALWAGAH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-01-24', '114.1307151', '-8.557731454', NULL, NULL),
(267, 'JG257', 0, 'DS. SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-06-28', '114.1084105', '-8.567104881', NULL, NULL),
(268, 'JG117', 0, 'DS. SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2008-04-12', '114.1090843', '-8.570109163', NULL, NULL),
(269, 'JG118', 0, 'DS. BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-21', '114.1125328', '-8.578217075', NULL, NULL),
(270, 'JG330', 0, 'DS. BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '1997-09-25', '114.1255539', '-8.58078038', NULL, NULL),
(271, 'JG219', 0, 'DS. BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-01-24', '114.1281637', '-8.589884049', NULL, NULL),
(272, 'JG171', 0, 'DS. BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-01-24', '114.1243927', '-8.605420181', NULL, NULL),
(273, 'JG224', 0, 'DS. SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-01-24', '114.1198762', '-8.56331033', NULL, NULL),
(274, 'JG181', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-05', '114.116807', '-8.581324381', NULL, NULL),
(275, 'JG028', 0, 'DS. LAMPON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-14', '114.0948104', '-8.613866728', NULL, NULL),
(276, 'JG299', 0, 'DS.PECEMENGAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2014-02-01', '114.1257014', '-8.59097379', NULL, NULL),
(277, 'JG298', 0, 'DS.LAMPON', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2009-12-14', '114.1003306', '-8.614104978', NULL, NULL),
(278, 'JG213', 0, 'DS.TEGALWAGAH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-01-24', '114.1379768', '-8.57134999', NULL, NULL),
(279, 'JG214', 0, 'DS.TEGALWAGAH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-01-24', '114.1368244', '-8.57718817', NULL, NULL),
(280, 'JG198', 0, 'DS.BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-10-21', '114.1089175', '-8.576420408', NULL, NULL),
(281, 'JG179', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-01-24', '114.1248808', '-8.609016999', NULL, NULL),
(282, 'JG170', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-01-24', '114.1206272', '-8.603546585', NULL, NULL),
(283, 'JG191', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-10', '114.1205355', '-8.594725637', NULL, NULL),
(284, 'JG383', 0, 'DS.SILIRAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-01-24', '114.1523876', '-8.575822047', NULL, NULL),
(285, 'JG384', 0, 'DS.TEGALWAGAH', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2018-12-05', '114.1564989', '-8.574762504', NULL, NULL),
(286, 'JG187', 0, 'DS.KRAJAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2017-12-20', '114.108973', '-8.573681162', NULL, NULL),
(287, 'JG069', 0, 'DS. PACEMENGAN', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-09-11', '114.1257265', '-8.591228199', NULL, NULL),
(288, 'JG430', 0, 'DS. BULUAGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2007-01-24', '114.1260004', '-8.584452187', NULL, NULL),
(289, 'JG110', 0, 'DS. PURWOSARI BULU AGUNG', '2', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)', '', '2006-02-16', '114.1176819', '-8.611401325', NULL, NULL),
(290, 'B212', 0, 'DS. BANGOREJO', 'KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (>160 kVA)', '', '1600276322.jpeg', '2020-09-17', '12121212', '121212', '2020-09-16 17:11:26', '2020-09-16 17:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$HqYrAKNm4AySf8EUstVaKuunCfAq/r6CAhrihcbEyrohkqLmWDYHm', 'admin', NULL, '2020-09-16 16:54:11', '2020-09-16 16:54:11'),
(2, 'Admin', 'adhim', '$2y$10$96TE5HaLWEeV6JfP2f8cbufYNA9n7OT1we9QkZ9abH/gn1AKCOmxe', 'petugas', NULL, '2020-09-16 16:56:21', '2020-09-16 16:56:21'),
(3, 'Nabil Tamami', 'nabil', '$2y$10$LU6LWi6XSx4r5mcHtsIUpea/HP8sB9L0KPlQMDMXOlgfO7zoHZ1zu', 'petugas', NULL, '2020-09-16 16:56:33', '2020-09-16 16:56:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_pekerjaan_petugas`
--
ALTER TABLE `laporan_pekerjaan_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_pemadamen`
--
ALTER TABLE `laporan_pemadamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaan_petugas`
--
ALTER TABLE `pekerjaan_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemadamen`
--
ALTER TABLE `pemadamen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trafos`
--
ALTER TABLE `trafos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_pekerjaan_petugas`
--
ALTER TABLE `laporan_pekerjaan_petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan_pemadamen`
--
ALTER TABLE `laporan_pemadamen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `pekerjaan_petugas`
--
ALTER TABLE `pekerjaan_petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemadamen`
--
ALTER TABLE `pemadamen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trafos`
--
ALTER TABLE `trafos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
