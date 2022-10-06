-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220509.f95b261844
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 03:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa_models`
--

CREATE TABLE `data_siswa_models` (
  `id_dataSiswa` bigint(20) UNSIGNED NOT NULL,
  `jurusan_model_id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_siswa_models`
--

INSERT INTO `data_siswa_models` (`id_dataSiswa`, `jurusan_model_id`, `nis`, `nama`, `point`) VALUES
(1, 6, '234234', 'Oliva Purwanti', 0),
(2, 5, '234234', 'Umay Irawan', 0),
(3, 10, '234234', 'Cawisono Wahyudin', 0),
(4, 7, '234234', 'Pangeran Jabal Sihombing S.IP', 0),
(5, 5, '234234', 'Okta Suryono M.M.', 0),
(6, 4, '234234', 'Siti Andriani', 0),
(7, 9, '234234', 'Cakrawangsa Narpati', 0),
(8, 8, '234234', 'Yuni Jamalia Mayasari S.Pt', 0),
(9, 7, '234234', 'Zelda Hastuti', 0),
(10, 4, '234234', 'Zulfa Pudjiastuti', 0),
(11, 1, '234234', 'Kasiran Natsir', 0),
(12, 10, '234234', 'Rahmi Wahyuni M.Kom.', 0),
(13, 7, '234234', 'Lukita Permadi', 0),
(14, 7, '234234', 'Adika Waskita', 0),
(15, 7, '234234', 'Putri Suryatmi', 0),
(16, 9, '234234', 'Raden Zulkarnain', 0),
(17, 6, '234234', 'Novi Ani Hastuti', 0),
(18, 9, '234234', 'Rahmi Nova Anggraini S.Sos', 0),
(19, 5, '234234', 'Cindy Wijayanti', 0),
(20, 1, '234234', 'Elvina Indah Mayasari S.IP', 0),
(21, 5, '234234', 'Sari Fitriani Sudiati', 0),
(22, 7, '234234', 'Hadi Irnanto Permadi S.Psi', 0),
(23, 3, '234234', 'Olga Wasita', 0),
(24, 10, '234234', 'Olivia Suartini S.Kom', 0),
(25, 4, '234234', 'Olga Hidayanto S.T.', 0),
(26, 1, '234234', 'Mila Laksita S.Farm', 0),
(27, 9, '234234', 'Martani Martana Kusumo M.M.', 0),
(28, 8, '234234', 'Lantar Hakim', 0),
(29, 1, '234234', 'Kemal Cahyanto Tampubolon S.I.Kom', 0),
(30, 7, '234234', 'Unggul Suwarno', 0),
(31, 10, '234234', 'Latika Andriani', 0),
(32, 3, '234234', 'Warta Sitompul', 0),
(33, 8, '234234', 'Ifa Hassanah', 0),
(34, 9, '234234', 'Intan Hariyah S.Farm', 0),
(35, 2, '234234', 'Titi Prastuti', 0),
(36, 9, '234234', 'Maya Zahra Widiastuti M.Kom.', 0),
(37, 9, '234234', 'Faizah Patricia Hasanah', 0),
(38, 6, '234234', 'Uli Latika Yulianti S.E.', 0),
(39, 8, '234234', 'Garang Prabowo S.H.', 0),
(40, 7, '234234', 'Maimunah Rachel Susanti', 0),
(41, 5, '234234', 'Manah Harjasa Megantara M.Farm', 0),
(42, 6, '234234', 'Pranata Prima Ardianto', 0),
(43, 1, '234234', 'Rahmi Yolanda', 0),
(44, 6, '234234', 'Kasiran Candrakanta Saragih S.E.', 0),
(45, 10, '234234', 'Gambira Waluyo', 0),
(46, 4, '234234', 'Baktiadi Budiyanto', 0),
(47, 2, '234234', 'Uli Susanti S.Ked', 0),
(48, 3, '234234', 'Cemplunk Prasasta', -35),
(49, 5, '234234', 'Rahmi Uli Lestari', 0),
(50, 4, '234234', 'Puspa Nabila Laksmiwati', 0),
(51, 9, '234234', 'Opan Rama Thamrin', 0),
(52, 7, '234234', 'Saiful Gatra Wacana M.M.', 0),
(53, 4, '234234', 'Hilda Usamah', 0),
(54, 7, '234234', 'Dirja Reksa Santoso S.E.I', 0),
(55, 2, '234234', 'Ibrani Utama', 0),
(56, 10, '234234', 'Bakiono Winarno', 0),
(57, 7, '234234', 'Pia Anggraini', 0),
(58, 4, '234234', 'Hardi Wibisono', 0),
(59, 2, '234234', 'Zulaikha Nova Maryati', 0),
(60, 1, '234234', 'Harjo Hutasoit', 0),
(61, 5, '234234', 'Rahmi Laila Rahayu', 0),
(62, 2, '234234', 'Bakidin Situmorang', 0),
(63, 5, '234234', 'Ade Padmasari', 0),
(64, 7, '234234', 'Bagas Saefullah', 0),
(65, 1, '234234', 'Gamblang Cahyo Latupono M.TI.', 0),
(66, 7, '234234', 'Asirwanda Lanjar Prakasa S.H.', 0),
(67, 8, '234234', 'Asirwada Sihombing S.Gz', 0),
(68, 2, '234234', 'Danuja Ganda Saefullah', 0),
(69, 4, '234234', 'Victoria Susanti S.Psi', 0),
(70, 3, '234234', 'Koko Narpati M.Kom.', 0),
(71, 9, '234234', 'Murti Marbun', 0),
(72, 5, '234234', 'Nadia Riyanti M.M.', 0),
(73, 8, '234234', 'Siska Rahmawati', 0),
(74, 4, '234234', 'Cinta Rini Kuswandari S.Psi', 0),
(75, 9, '234234', 'Gina Rahimah', 0),
(76, 9, '234234', 'Omar Wibowo', 0),
(77, 8, '234234', 'Samiah Fujiati', 0),
(78, 10, '234234', 'Kamidin Tarihoran', 0),
(79, 4, '234234', 'Talia Nasyidah', 0),
(80, 8, '234234', 'Zizi Hariyah', 0),
(81, 5, '234234', 'Kemal Prakasa S.IP', 0),
(82, 9, '234234', 'Vera Ida Mardhiyah', 0),
(83, 4, '234234', 'Nadine Yulianti', 0),
(84, 3, '234234', 'Faizah Usamah S.Sos', 0),
(85, 4, '234234', 'Titi Sari Farida', 0),
(86, 1, '234234', 'Farah Ana Pertiwi', 0),
(87, 4, '234234', 'Yunita Kartika Aryani M.Farm', 0),
(88, 2, '234234', 'Jarwadi Dongoran', 0),
(89, 10, '234234', 'Gaman Mangunsong', 0),
(90, 9, '234234', 'Zizi Wahyuni M.Pd', 0),
(91, 5, '234234', 'Rika Wahyuni S.Pd', 0),
(92, 8, '234234', 'Ismail Laswi Prayoga M.Kom.', 0),
(93, 10, '234234', 'Agnes Pudjiastuti S.Ked', 0),
(94, 10, '234234', 'Salsabila Zulaika', 0),
(95, 2, '234234', 'Ilsa Tami Pudjiastuti', 0),
(96, 2, '234234', 'Vanesa Wahyuni', 0),
(97, 1, '234234', 'Tiara Lestari', 0),
(98, 9, '234234', 'Luthfi Wacana', 0),
(99, 1, '234234', 'Kenari Siregar', 0),
(100, 3, '234234', 'Raihan Bakti Suwarno', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan_models`
--

CREATE TABLE `jurusan_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nesas.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan_models`
--

INSERT INTO `jurusan_models` (`id`, `jurusan`, `kelas`, `group`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Rekayasa Perangkat Lunak', '11', '2', 'nesas.png', NULL, NULL),
(2, 'Bisnis Daring dan Pemasaran', '11', '1', 'nesas.png', NULL, NULL),
(3, 'Akuntansi dan Keuangan Lembaga', '10', '2', 'nesas.png', NULL, NULL),
(4, 'Otomatisasi dan Tata Kelola Perkantoran', '10', '3', 'nesas.png', NULL, NULL),
(5, 'Teknik Komputer dan Jaringan', '10', '2', 'nesas.png', NULL, NULL),
(6, 'Desain Grafika', '11', '2', 'nesas.png', NULL, NULL),
(7, 'Teknik Pemesinan', '10', '1', 'nesas.png', NULL, NULL),
(8, 'Teknik dan Bisnis Sepeda Motor', '11', '2', 'nesas.png', NULL, NULL),
(9, 'Teknik Logistik', '10', '2', 'nesas.png', NULL, NULL),
(10, 'Tata Boga', '10', '1', 'nesas.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_08_032752_create_jurusan_models_table', 1),
(6, '2022_06_09_135117_create_data_siswa_models_table', 1),
(7, '2022_06_11_070608_create_poin_pelanggaran_models_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poin_pelanggaran_models`
--

CREATE TABLE `poin_pelanggaran_models` (
  `id_poinPelanggaran` bigint(20) UNSIGNED NOT NULL,
  `data_siswa_model_id` bigint(20) UNSIGNED NOT NULL,
  `kesiangan` int(11) DEFAULT NULL,
  `alfa` int(11) DEFAULT NULL,
  `Tidak_bawa_kitab` int(11) DEFAULT NULL,
  `atribut` int(11) DEFAULT NULL,
  `perilaku_tidak_sesuai_pelajar` int(11) DEFAULT NULL,
  `pelanggaran_konten` int(11) DEFAULT NULL,
  `narkoba_serta_napza` int(11) DEFAULT NULL,
  `pornografi_pornoaksi_pencemaran_nama_baik` int(11) DEFAULT NULL,
  `pelanggaran_elektronik` int(11) DEFAULT NULL,
  `pelanggaran_kendaraan` int(11) DEFAULT NULL,
  `penginput` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poin_pelanggaran_models`
--

INSERT INTO `poin_pelanggaran_models` (`id_poinPelanggaran`, `data_siswa_model_id`, `kesiangan`, `alfa`, `Tidak_bawa_kitab`, `atribut`, `perilaku_tidak_sesuai_pelajar`, `pelanggaran_konten`, `narkoba_serta_napza`, `pornografi_pornoaksi_pencemaran_nama_baik`, `pelanggaran_elektronik`, `pelanggaran_kendaraan`, `penginput`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 48, -5, -5, NULL, NULL, -25, NULL, NULL, NULL, NULL, NULL, 'Cici Rahimah', 'Thursday, 06 October 2022', '2022-10-06 01:45:53', '2022-10-06 01:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tira Suartini', '$2y$10$N0CtCVCFRjWU7uZoqvZChuoxonVBB2CWBOJkGFMw7o2R0Kety/Zvq', 'user', NULL, '2022-10-06 01:39:12', '2022-10-06 01:39:12'),
(2, 'Kariman Dono Pangestu M.TI.', '$2y$10$qNiDwcXT0sKHPxHPpLtCEOVIRh1C4xeDef/hZ2744ejLRu4w7ToIq', 'user', NULL, '2022-10-06 01:39:12', '2022-10-06 01:39:12'),
(3, 'Cici Rahimah', '$2y$10$DJNcyq.uc76c6I21lMJWPOH/a0ttfh29w9nkQGkKXYtVodofDZzv6', 'user', NULL, '2022-10-06 01:39:12', '2022-10-06 01:39:12'),
(4, 'Hamzah Heryanto Maheswara S.Pd', '$2y$10$JHvF4X9aYYrJ2pJS0M0EiekvZbxCKA2FcdqtPFYzr51edwg0fOgpe', 'user', NULL, '2022-10-06 01:39:12', '2022-10-06 01:39:12'),
(5, 'Mutia Purwanti', '$2y$10$dTioqvOLsGu4n2G4KStdW.FZlquoii7OmYI9dWEvCKVPWGS1lhM9G', 'user', NULL, '2022-10-06 01:39:12', '2022-10-06 01:39:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa_models`
--
ALTER TABLE `data_siswa_models`
  ADD PRIMARY KEY (`id_dataSiswa`),
  ADD KEY `data_siswa_models_jurusan_model_id_foreign` (`jurusan_model_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusan_models`
--
ALTER TABLE `jurusan_models`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `poin_pelanggaran_models`
--
ALTER TABLE `poin_pelanggaran_models`
  ADD PRIMARY KEY (`id_poinPelanggaran`),
  ADD KEY `poin_pelanggaran_models_data_siswa_model_id_foreign` (`data_siswa_model_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa_models`
--
ALTER TABLE `data_siswa_models`
  MODIFY `id_dataSiswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan_models`
--
ALTER TABLE `jurusan_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poin_pelanggaran_models`
--
ALTER TABLE `poin_pelanggaran_models`
  MODIFY `id_poinPelanggaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_siswa_models`
--
ALTER TABLE `data_siswa_models`
  ADD CONSTRAINT `data_siswa_models_jurusan_model_id_foreign` FOREIGN KEY (`jurusan_model_id`) REFERENCES `jurusan_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `poin_pelanggaran_models`
--
ALTER TABLE `poin_pelanggaran_models`
  ADD CONSTRAINT `poin_pelanggaran_models_data_siswa_model_id_foreign` FOREIGN KEY (`data_siswa_model_id`) REFERENCES `data_siswa_models` (`id_dataSiswa`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
