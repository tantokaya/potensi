-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 08:24 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inboff`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1928466d62dfe73b8287dcf4186298be', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1424689732, ''),
('38a036d7a762c9eca3e0d7dc4c2136e4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1425011123, ''),
('3d2087f82ac7a6f1b15bd32e64d32b49', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1423449766, ''),
('43a2e84fb0aea1d1ba6cc82ae98c3ef9', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1423195061, 'a:1:{s:9:"user_data";s:0:"";}'),
('4484adb3d8d00571fa2cfc1735643120', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1425452303, ''),
('47b55d08a106646665719272544733d2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1426490551, ''),
('6f09a3c95120f703e85c98323bdf5ce9', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0', 1424594360, ''),
('e3e1b31de5e87f0cc2138ebd3dbdd5db', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1426469282, '');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `fulltxt` mediumtext,
  `indexdate` date DEFAULT NULL,
  `size` float DEFAULT NULL,
  `md5sum` varchar(32) DEFAULT NULL,
  `visible` int(11) DEFAULT '0',
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`link_id`),
  KEY `url` (`url`),
  KEY `md5key` (`md5sum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=704 ;

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE IF NOT EXISTS `pending` (
  `site_id` int(11) DEFAULT NULL,
  `temp_id` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_log`
--

CREATE TABLE IF NOT EXISTS `query_log` (
  `query` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `elapsed` float DEFAULT NULL,
  `results` int(11) DEFAULT NULL,
  KEY `QUERY_KEY` (`query`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `id_level` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N',
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`, `nama_lengkap`, `id_level`, `blokir`, `foto`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '01', 'N', ''),
('tanto', '81dc9bdb52d04dc20036dbd8313ed055', 'Hartanto Kurniawan', '01', 'N', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_domains`
--

CREATE TABLE IF NOT EXISTS `tbl_domains` (
  `domain_id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fokus`
--

CREATE TABLE IF NOT EXISTS `tbl_fokus` (
  `fokus_id` int(18) NOT NULL AUTO_INCREMENT,
  `fokus_code` char(16) NOT NULL,
  `fokus_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fokus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_fokus`
--

INSERT INTO `tbl_fokus` (`fokus_id`, `fokus_code`, `fokus_name`) VALUES
(1, 'FOK0000001', 'Energi Material'),
(2, 'FOK0000002', 'Perikanan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lembaga`
--

CREATE TABLE IF NOT EXISTS `tbl_lembaga` (
  `lembaga_id` int(11) NOT NULL AUTO_INCREMENT,
  `lembaga_code` char(10) DEFAULT NULL,
  `lembaga_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lembaga_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=631 ;

--
-- Dumping data for table `tbl_lembaga`
--

INSERT INTO `tbl_lembaga` (`lembaga_id`, `lembaga_code`, `lembaga_name`) VALUES
(1, '8', 'UK Petra'),
(2, '10', 'Balitbang Dephan'),
(3, '12', 'Pussenkav TNI AD'),
(4, '20', 'Kobang diklat'),
(5, '21', 'Seskoad'),
(6, '25', 'Pusintelad'),
(7, '27', 'Rolitbang POLRI'),
(8, '29', 'Puspenerbad'),
(9, '30', 'Lemjiantek Kodiklat AD'),
(10, '35', 'Badan Litbang Kehutanan'),
(11, '43', 'SESPIM POLRI'),
(12, '44', 'Pussenif AD'),
(13, '1001', 'Universitas Sumatera Utara'),
(14, '1002', 'Universitas Negeri Medan'),
(15, '1004', 'Universitas Riau'),
(16, '1005', 'Poltekes Palembang'),
(17, '1008', 'Universitas Negeri Jakarta'),
(18, '1012', 'Universitas Pendidikan Indonesia'),
(19, '1015', 'Institut Pertanian Bogor'),
(20, '1016', 'Universitas Diponegoro'),
(21, '1018', 'Universitas Brawijaya'),
(22, '1021', 'Institut Teknologi Sepuluh November'),
(23, '1024', 'Universitas Sam Ratulangi'),
(24, '1025', 'Universitas Negeri Makassar'),
(25, '1026', 'Universitas Hasanuddin'),
(26, '1028', 'Universitas Mataram'),
(27, '1029', 'Universitas Negeri Gorontalo'),
(28, '1030', 'Universitas Pattimura'),
(29, '1031', 'Universitas Nusa Cendana'),
(30, '1032', 'Universitas Negeri Papua'),
(31, '1035', 'IKIP PGRI Madiun'),
(32, '1036', 'IKIP PGRI Semarang'),
(33, '1041', 'Institut Pertanian Stiper Yogyakarta'),
(34, '1043', 'Institut Seni Indonesia Denpasar'),
(35, '1044', 'Institut Seni Indonesia Yogyakarta'),
(36, '1046', 'Institut Teknologi Medan'),
(37, '1047', 'Institut Teknologi Nasional Malang'),
(38, '1049', 'Politeknik Negeri Bandung'),
(39, '1051', 'Politeknik Negeri Jakarta'),
(40, '1052', 'Politeknik Negeri Kupang'),
(41, '1054', 'Politeknik Negeri Medan'),
(42, '1055', 'Politeknik Negeri Padang'),
(43, '1058', 'Politeknik Negeri Pertanian Payakumbuh'),
(44, '1060', 'Politeknik Negeri Samarinda'),
(45, '1061', 'Politeknik Negeri Semarang'),
(46, '1062', 'Politeknik Negeri Sriwijaya'),
(47, '1063', 'Politeknik Negeri Ujung Pandang'),
(48, '1065', 'Politeknik Pertanian Kupang'),
(49, '1068', 'Politeknik Pos Indonesia'),
(50, '1069', 'STIPER Jember'),
(51, '1070', 'STSI Bandung'),
(52, '1071', 'STSI Padang Panjang'),
(53, '1074', 'Universitas Bengkulu'),
(54, '1075', 'Universitas Haluoleo'),
(55, '1077', 'Universitas Negeri Malang'),
(56, '1079', 'Universitas Negeri Padang'),
(57, '1080', 'Universitas Negeri Semarang'),
(58, '1082', 'Universitas Negeri Yogyakarta'),
(59, '1083', 'Universitas Negeri Sebelas Maret'),
(60, '1084', 'Universitas Syiah Kuala'),
(61, '1086', 'Universitas Terbuka'),
(62, '1088', 'Universitas Udayana'),
(63, '1090', 'Politeknik Negeri Bali'),
(64, '2004', 'Universitas Trisakti'),
(65, '2005', 'Universitas Nasional'),
(66, '2006', 'Universitas 17 Agustus 1945 Surabaya'),
(67, '2007', 'Universitas Muhammadiyah Jakarta'),
(68, '2008', 'Universitas Atma Jaya'),
(69, '2009', 'Universitas Atmajaya Yogyakarta'),
(70, '2014', 'Universitas Islam Bandung'),
(71, '2018', 'Universitas Kristen Duta Wacana'),
(72, '2020', 'Universitas Kristen Satya Wacana'),
(73, '2021', 'Universitas Muhammadiyah Malang'),
(74, '2022', 'Universitas Surabaya'),
(75, '2023', 'Universitas Hang Tuah'),
(76, '2024', 'Universitas Petra'),
(77, '2032', 'Universitas Kristen Artha Wacana'),
(78, '2038', 'Akademi Medis Veteriner Puragabaya'),
(79, '2040', 'Akademi Pariwisata Bunda'),
(80, '2041', 'Akademi Pariwisata Indraphrasta Yogyakarta'),
(81, '2044', 'Akademi Pertanian Yogyakarta'),
(82, '2046', 'Akademi Peternakan Karang Anyar'),
(83, '2050', 'Akpar Muhammadiyah Jember'),
(84, '2053', 'Politeknik Kotabaru'),
(85, '2054', 'Politeknik LPP Yogyakarta'),
(86, '2055', 'Politeknik Manufaktur Bandung'),
(87, '2057', 'Politeknik PPKP Yogyakarta'),
(88, '2060', 'Politeknik Surakarta'),
(89, '2061', 'Sekolah Tinggi Ekonomi Islam Yogyakarta'),
(90, '2064', 'Sekolah Tinggi Ilmu Administrasi Mataram'),
(91, '2066', 'Sekolah Tinggi Ilmu Bahasa Asing Dinamika Banjarbaru'),
(92, '2068', 'Sekolah Tinggi Ilmu Ekonomi Darma Jaya Bandar Lampung'),
(93, '2069', 'Sekolah Tinggi Ilmu Ekonomi Rahmaniyah Sekayu'),
(94, '2070', 'Sekolah Tinggi Ilmu Ekonomi Adi Unggul Bhirawa Surakarta'),
(95, '2072', 'Sekolah Tinggi Ilmu Ekonomi Al-Anwar Mojokerto'),
(96, '2073', 'Sekolah Tinggi Ilmu Ekonomi Atma Bhakti Surakarta'),
(97, '2075', 'Sekolah Tinggi Ilmu Indonesia Surabaya'),
(98, '2077', 'Sekolah Tinggi Ilmu Ekonomi Kosgoro'),
(99, '2078', 'Sekolah Tinggi Ilmu Ekonomi Malang Kucecwara Malang'),
(100, '2079', 'Sekolah Tinggi Ilmu Ekonomi Mandala'),
(101, '2081', 'Sekolah Tinggi Ilmu Ekonomi Stikubank Semarang'),
(102, '2082', 'Sekolah Tinggi Ilmu Ekonomi Surakarta'),
(103, '2085', 'Sekolah Tinggi Ilmu Ekonomi Widya Wiwaha Yogyakarta'),
(104, '2086', 'Sekolah Tinggi Ilmu Kesehatan Hang Tuah'),
(105, '2091', 'Sekolah Tinggi Ilmu Pertanian Surya Dharma'),
(106, '2092', 'Sekolah Tinggi Ilmu Pertanian Cokroaminoto PalopoSekolah Tinggi Ilmu Pertanian STIPER Yamin'),
(107, '2093', 'Sekolah Tinggi Ilmu Keguruan dan ilmu Pendidikan'),
(108, '2099', 'Sekolah Tinggi Manajemen Informatika dan Teknik Komputer Surabaya'),
(109, '2101', 'Sekolah Tinggi Teknik Lingkungan Yogyakarta'),
(110, '2102', 'Sekolah Tinggi Teknologi Adisutjipto Yogyakarta'),
(111, '2104', 'Sekolah Tinggi Teknologi Kelautan Balikdiwa Makassar'),
(112, '2105', 'Sekolah Tinggi Teknologi Nasional Yogyakarta'),
(113, '2108', 'Universitas 17 Agustus 1945 Semarang'),
(114, '2109', 'Universitas 17 Agustus Jakarta'),
(115, '2112', 'Universitas Achmad Yani Banjarmasin'),
(116, '2113', 'Universitas Ahmad Dahlan Yogyakarta'),
(117, '2122', 'Universitas Bung Hatta'),
(118, '2123', 'Universitas Cendrawasih'),
(119, '2124', 'Universitas Cokroaminoto Makassar'),
(120, '2126', 'Universitas Djuanda Bogor'),
(121, '2128', 'Universitas Dr. SOETOMO'),
(122, '2130', 'Universitas Gajayana Malang'),
(123, '2131', 'Universitas Galuh Ciamis'),
(124, '2132', 'Universitas Gunadarma'),
(125, '2134', 'Universitas Hindu Indonesia'),
(126, '2135', 'Universitas IBA Palembang'),
(127, '2136', 'Universitas Islam 45 Bekasi'),
(128, '2138', 'Universitas Islam Batik Surakarta'),
(129, '2139', 'Universitas Islam Indonesia'),
(130, '2142', 'Universitas Islam Kalimantan Moch.Arsyad'),
(131, '2144', 'Universitas Islam Makassar'),
(132, '2145', 'Universitas Islam Malang'),
(133, '2146', 'Universitas Islam Sultan Agung Semarang'),
(134, '2147', 'Universitas Islam Sumatera'),
(135, '2148', 'Universitas Janabrada Yogyakarta'),
(136, '2149', 'Universitas Jayabaya'),
(137, '2150', 'Universitas Jember'),
(138, '2157', 'Universitas Katolik Widya Mandala Surabaya'),
(139, '2158', 'Universitas Khairun Ternate'),
(140, '2160', 'Universitas Komputer Indonesia Bandung'),
(141, '2167', 'Universitas Lambung Mangkurat'),
(142, '2168', 'Universitas Lancang Kuning'),
(143, '2170', 'Universitas Madako Toli-toli'),
(144, '2171', 'Universitas Madura'),
(145, '2173', 'Universitas Mahasaraswati Denpasar'),
(146, '2176', 'Universitas Mercu Buana'),
(147, '2181', 'Universitas Muhammadiyah Bengkulu'),
(148, '2182', 'Universitas Muhammadiyah Gresik'),
(149, '2183', 'Universitas Muhammadiyah Jember'),
(150, '2187', 'Universitas Muhammadiyah Mataram'),
(151, '2188', 'Universitas Muhammadiyah Metro Lampung'),
(152, '2189', 'Universitas Muhammadiyah Palangkaraya'),
(153, '2190', 'Universitas Muhammadiyah Palu'),
(154, '2191', 'Universitas Muhammadiyah Pare-pare'),
(155, '2192', 'Universitas Muhammadiyah Ponorogo'),
(156, '2195', 'Universitas Muhammadiyah Semarang'),
(157, '2196', 'Universitas Muhammadiyah Sidoarjo'),
(158, '2198', 'Universitas Muhammadiyah Sumatera Utara'),
(159, '2199', 'Universitas Muhammadiyah Surabaya'),
(160, '2200', 'Universitas baiturrahman'),
(161, '2203', 'Universitas Mulawarman'),
(162, '2204', 'Universitas Muria Kudus'),
(163, '2205', 'Universitas Muslim Indonesia Makassar'),
(164, '2206', 'Universitas NU Surakarta'),
(165, '2210', 'Universitas Pekalongan'),
(166, '2213', 'Universitas Pendidikan Nasional Denpasar'),
(167, '2217', 'Universitas PGRI Yogyakarta'),
(168, '2218', 'Universitas Proklamasi 45 Yogyakarta'),
(169, '2219', 'Universitas Putra Bangsa Surabaya'),
(170, '2220', 'Universitas Respati Indonesia'),
(171, '2223', 'Universitas Sanata Dharma Yogyakarta'),
(172, '2226', 'Universitas Serambi Mekkah'),
(173, '2227', 'Universitas Siliwangi Tasikmalaya'),
(174, '2230', 'Universitas STIKUBANK Semarang'),
(175, '2231', 'Universitas Sulawesi Tenggara Kendari'),
(176, '2232', 'Universitas Sultan Ageng Tirtayasa'),
(177, '2235', 'Universitas Tarumanegara'),
(178, '2236', 'Universitas Teknologi Yogyakarta'),
(179, '2238', 'Universitas Tridinanti Palembang'),
(180, '2239', 'Universitas Tunas Pembangunan'),
(181, '2240', 'Universitas Veteran Bangun Nusantara Sukoharjo'),
(182, '2241', 'Universitas Wage Rudolf Supratman'),
(183, '2242', 'Universitas Wangsa Manggala Yogyakarta'),
(184, '2245', 'Universitas Widya Gama Malang'),
(185, '2246', 'Universitas Widya Mataram Yogyakarta'),
(186, '302', 'PT. Pusri Wijaya'),
(187, '309', 'PT. INTI'),
(188, '406', 'PT. Martina Berto'),
(189, '411', 'PT. Daliatexkesuma Bandung'),
(190, '420', 'PT. Trimitra Binatama'),
(191, '502', 'Departemen Perhubungan'),
(192, '503', 'Departemen Perindustrian'),
(193, '504', 'Kementerian Komunikasi dan Informatika'),
(194, '505', 'Kementerian Pertahanan'),
(195, '506', 'TNI AD'),
(196, '511', 'Departemen Kesehatan'),
(197, '512', 'Departemen Kelautan dan Perikanan'),
(198, '513', 'Departemen Pekerjaan Umum'),
(199, '514', 'Departemen Hukum dan Hak Asasi Manusia'),
(200, '515', 'Departemen Dalam Negeri'),
(201, '517', 'Departemen Kehutanan'),
(202, '518', 'Lembaga Riset Perkebunan Indonesia'),
(203, '520', 'Departemen Sosial'),
(204, '601', 'BAKOSURTANAL'),
(205, '603', 'BATAN'),
(206, '604', 'BMG'),
(207, '605', 'BPPT'),
(208, '609', 'LAPAN'),
(209, '610', 'LIPI'),
(210, '701', 'BALITBANGDA'),
(211, '702', 'BAPPEDA'),
(212, '703', 'DINAS'),
(213, '704', 'LAIN-LAIN'),
(214, '521', 'Kementrian Negara Riset dan Teknologi'),
(215, '5302', 'Balitbang Prop Sulteng'),
(216, '20091216', 'BALITBANG PROPINSI JAWA TIMUR'),
(217, '3A', 'Akademi Kebidanan Estu Utomo'),
(218, '4A', 'Akademi Keperawatan Nabila Padang Panjang'),
(219, '5A', 'Akademi Keperawatan Universitas Muhammadiyah Ponorogo'),
(220, '6A', 'Akademi Keperawatan Universitas Pembangunan Nasional Veteran'),
(221, '9A', 'Akademi Pariwisata Muhammadiyah Jember'),
(222, '10A', 'Akademi Pembangunan Pertanian Sumatera Barat'),
(223, '12A', 'Akademi Peternakan Brahmaputra Yogyakarta'),
(224, '13A', 'Akademi Sekteraris Manajemen LPI'),
(225, '14A', 'akademi teknologi aub surakarta'),
(226, '15A', 'Akademi Teknologi Warga Surakarta'),
(227, '16A', 'Akasemi Analis Kimia YAPIKA Makassar'),
(228, '17A', 'B2P3KS Press.'),
(229, '18A', 'Badan Koordinasi Keluarga Berencana Nasional Puslitbang keluarga Sejahtera dan Peningkatan Kualitas Perempuan'),
(230, '19A', 'Badan Pelatihan dan Pengembangan Sosial Departemen Sosial'),
(231, '26A', 'Badan Penelitian dan Pengembangan Daerah Sumatera Selatan'),
(232, '33A', 'Badan Penelitian dan Pengembangan Propinsi Jawa Timur'),
(233, '34A', 'Badan Penelitian dan Pengembangan Propinsi Sumatera Barat'),
(234, '37A', 'Badan Pengkajian Ekonomi'),
(235, '38A', 'Badan Pertanahan Nasional'),
(236, '39A', 'Bagian Hukum Pidana Universitas Jambi'),
(237, '40A', 'Balai Arkeologi Denpasar'),
(238, '41A', 'Balai Bahasa'),
(239, '42A', 'Balai Bahasa Jayapura'),
(240, '47A', 'Balai Kajian Sejarah dan Nilai Tradisional'),
(241, '48A', 'Balai Penelitian Bioteknologi Perkebunan Indonesia'),
(242, '59A', 'Balan Penelitian dan Pengembangan Propinsi Bengkulu'),
(243, '61A', 'Bigraf'),
(244, '62A', 'BPSNT Padang Press.'),
(245, '63A', 'Budidaya Pertanian Sekolah Tinggi Pertanian Surya Dharma'),
(246, '64A', 'Budidaya Tanaman Pangan Akademi Pertanian Yogyakarta APTA'),
(247, '65A', 'Budidaya Tanaman Perkebunan Pertanian Negeri Pangkap'),
(248, '66A', 'Citra Media'),
(249, '67A', 'Coral Reel Rehabilitation and Management Program LIPI'),
(250, '68A', 'Departemen Arkeologi Universitas Indonesia'),
(251, '69A', 'Departemen Biologi Institut Pertanian Bogor'),
(252, '77A', 'Departemen Sosiologi Universitas Indonesia'),
(253, '78A', 'Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan Nasional'),
(254, '79A', 'Direktorat Riset dan Pengabdian Masyarakat Universitas Indonesia'),
(255, '131A', 'Universitas Nasional'),
(256, '195A', 'Fakultas Ekonomi Universitas Lambung Mangkurat'),
(257, '1104001', 'Akademi Bahasa Asing Bumigora Mataram'),
(258, '1104002', 'Akademi Manajemen Informatika dan Komputer Taruna Probolinggo'),
(259, '1104003', 'Akademi Maritim Yogayakarta'),
(260, '1104004', 'Akademi Pariwisata Widya Nusantara'),
(261, '1104005', 'Akademi Pelayaran Nasional Surakarta'),
(262, '1104006', 'Akademi Perikanan Yogyakarta'),
(263, '1104007', 'Akademi Peternakan Brahmaputera'),
(264, '1104007', 'Akademi Peternakan Brahmaputra'),
(265, '1104008', 'Akademi Peternakan Karanganyar'),
(266, '1104009', 'Akademi Sekretari dan Manajemen Marsudirini ASMI Santa Maria Yogyakart'),
(267, '1104010', 'Akademi Teknik PIRI'),
(268, '1104011', 'Akademi Teknik Warga'),
(269, '1104083', 'Akademi Teknologi Adi Unggul Bhirawa'),
(270, '1104012', 'Akademi Teknologi Warga'),
(271, '1104013', 'AKPRIND'),
(272, '1104014', 'Badan  Penelitian dan Pengembangan dan Pendidikan dan Pelatihan'),
(273, '1104015', 'Badan Koordinasi Keluarga Berencana Nasional'),
(274, '1104063', 'BKKBN'),
(275, '1104017', 'Departemen Agama'),
(276, '25A1', 'Departemen Agama'),
(277, '599A', 'Departemen ESDM'),
(278, '1104017', 'Departemen Keuangan'),
(279, '1104018', 'Departemen Pendidikan dan Kebudayaan'),
(280, '73A1', 'Departemen Pendidikan Nasional'),
(281, '1104019', 'Eja Pub'),
(282, '1104020', 'Fakultas Ilmu Agama'),
(283, '1104021', 'Ford Foundation'),
(284, '1104022', 'Gender Universitas Sebelas Maret Surakarta'),
(285, '1104023', 'IKIP Negeri Singaraja'),
(286, '1104024', 'Industri Akademi Teknologi Adi Unggul Bhirawa'),
(287, '1104025', 'Institut Agama Islam Negeri Raden Intan'),
(288, '1104026', 'Institut Agama Islam Negeri Walisongo Semarang'),
(289, '1104028', 'Institut Keguruan dan Ilmu Pendidikan Mataram'),
(290, '1104030', 'Institut Keguruan dan Ilmu Pendidikan Negeri Singaraja'),
(291, '1104032', 'Institut Keguruan dan Ilmu Pendidikan PGRI Madiun'),
(292, '1104034', 'Institut Keguruan dan Ilmu Pendidikan Saraswati Tabanan'),
(293, '1104035', 'Institut Keguruan dan Ilmu Pendidikan Veteran Semarang'),
(294, '1104037', 'Institut Pertanian STIPER Yogyakarta'),
(295, '1104041', 'Institut Seni Indonesia'),
(296, '1104042', 'Institut Seni Indonesia Padangpanjang'),
(297, '1104043', 'Institut Seni Indonesia Surakarta'),
(298, '1104044', 'Institut Seni Indonesia Yoyakarta'),
(299, '1104045', 'Institut Seni Rupa Indonesia Denpasar'),
(300, '1104047', 'Institut Teknologi Adhi Tama Surabaya'),
(301, '1104048', 'Institut Teknologi Bandung'),
(302, '1104049', 'Institut Teknologi Bogor'),
(303, '1104050', 'Institut Teknologi dan Sains Bandung'),
(304, '1104051', 'Institut Teknologi Nasional'),
(305, '1104053', 'Institut Teknologi Sepuluh Nopember Surabaya'),
(306, '1104054', 'Institut Teknologi Telkom Bandung'),
(307, '1104055', 'ITENAS BANDUNG'),
(308, '1104056', 'Jurusan Agronomi Universitas Pembangunan Nasional Veteran Jawa Timur'),
(309, '1104057', 'Kaldera Pustaka Nusantara'),
(310, '1104058', 'Kantor Bahasa Propinsi Sulawesi Tenggara'),
(311, '1104059', 'Kebun Raya Cibodas Lembaga Ilmu Pengetahuan Indonesia'),
(312, '1104060', 'Kehidupan Keagamaan Departemen Agama'),
(313, '1104061', 'Kekemasyarakatan dan Kebudayaan Lembaga Ilmu Pengetahuan Indonesia'),
(314, '1104065', 'Kementerian Agama'),
(315, '1104069', 'Kepel Press'),
(316, '1104072', 'Ketransmigrasian'),
(317, '1104073', 'Komisi Nasional Hak Asasi Manusia'),
(318, '1104074', 'Lektur Keagamaan'),
(319, '1104075', 'Lembaga Administrasi Negara'),
(320, '1104080', 'Lembaga Penjaminan Mutu Pendidikan Sulawesi Selatan'),
(321, '1104082', 'Organisasi Perburuhan International'),
(322, '1104084', 'Padma Pustaka'),
(323, '1104088', 'Piramedia'),
(324, '1104089', 'Politeknik Atma Jaya Makassar'),
(325, '1104090', 'Politeknik Banjarnegara'),
(326, '1104091', 'Politeknik Elektronika Negeri Institut Teknologi Sepuluh Nopember'),
(327, '1104092', 'Politeknik Kesehatan Banjarmasin'),
(328, '1104094', 'Politeknik Madiun'),
(329, '1104095', 'Politeknik Muhammadiyah Karanganyar'),
(330, '1104096', 'Politeknik Negeri Ambon'),
(331, '100A1', 'Politeknik Negeri Bandung'),
(332, '1104097', 'Politeknik Negeri Banjarmasin'),
(333, '1104098', 'Politeknik Negeri Jakarta Depok'),
(334, '1104100', 'Politeknik Negeri Lampung'),
(335, '1104101', 'Politeknik Negeri Malang'),
(336, '1104103', 'Politeknik Negeri Papua'),
(337, '1104104', 'Politeknik Negeri Payakumbuh'),
(338, '1104105', 'Politeknik Negeri Pontianak'),
(339, '1104106', 'Politeknik NSC Surabaya'),
(340, '1104107', 'Politeknik Pertanian Negeri'),
(341, '1104108', 'Politeknik Pertanian Negeri Kupang'),
(342, '1104109', 'Politeknik Pertanian Negeri Pangkep'),
(343, '1104111', 'Politeknik Pertanian Negeri Payakumbuh'),
(344, '1104112', 'Politeknik Pos Indonesia'),
(345, '1104113', 'Politeknik Unggulan Sragen Yapenas'),
(346, '1104114', 'Politeknik Universitas Indonesia'),
(347, '1104115', 'Politeknis Negeri Malang'),
(348, '1104116', 'Politiknik Negeri Bali'),
(349, '1104117', 'POLRI'),
(350, '1104118', 'Program Studi Biologi Universitas Tanjungpura'),
(351, '1104119', 'Pusat Penelitian Kebijakan dan Inovasi Pendidikan'),
(352, '1104120', 'PUSAT PENELITIAN KOPI DAN KAKAO INDONESIA'),
(353, '1104121', 'Pusat Pengembangan Geologi Nuklir'),
(354, '1104122', 'Pusat Studi Agama dan Peradaban'),
(355, '1104123', 'RS Kanker DHARMAIS'),
(356, '1104124', 'Sekolah Tinggi Ilmu Administrasi Pembangunan Jember'),
(357, '1104125', 'Sekolah Tinggi Ilmu Ekonomi 45'),
(358, '1104126', 'Sekolah Tinggi Ilmu Ekonomi Adi Unggul Bhirawa'),
(359, '1104128', 'Sekolah Tinggi Ilmu Ekonomi AMM Mataram'),
(360, '1104129', 'Sekolah Tinggi Ilmu Ekonomi AUB'),
(361, '1104130', 'Sekolah TInggi Ilmu EKonomi Gempol'),
(362, '1104131', 'Sekolah Tinggi Ilmu Ekonomi Indonesia'),
(363, '1104132', 'Sekolah Tinggi Ilmu Ekonomi Indonesia Banjarmasin'),
(364, '1104134', 'Sekolah Tinggi Ilmu Ekonomi Malangkucecwara Malang'),
(365, '102A1', 'Sekolah Tinggi Ilmu Ekonomi Mandala'),
(366, '1104135', 'Sekolah Tinggi Ilmu Ekonomi Mandala Jember'),
(367, '1104136', 'Sekolah Tinggi Ilmu Ekonomi Mataram'),
(368, '1104137', 'Sekolah Tinggi Ilmu Ekonomi Nahdlatul Ulama'),
(369, '1104138', 'Sekolah Tinggi Ilmu Ekonomi Oemathonis Kupang'),
(370, '1104140', 'Sekolah Tinggi Ilmu Ekonomi Perbanas Surabaya'),
(371, '1104141', 'Sekolah Tinggi Ilmu Ekonomi Pontianak'),
(372, '1104142', 'Sekolah Tinggi Ilmu Ekonomi STIKUBANK'),
(373, '1104143', 'Sekolah Tinggi Ilmu Ekonomi Swasta Mandiri'),
(374, '1104145', 'Sekolah Tinggi Ilmu Ekonomi Widya Gama Lumajang'),
(375, '1104146', 'Sekolah Tinggi Ilmu Ekonomi Widya Mandala'),
(376, '1104148', 'Sekolah Tinggi Ilmu Ekonomi Wiwaha'),
(377, '1104149', 'Sekolah Tinggi Ilmu Ekonomi YPP'),
(378, '1104150', 'Sekolah Tinggi Ilmu Hukum Jenderal Sudirman Lumajang'),
(379, '1104153', 'Sekolah Tinggi Ilmu Kesehatan Avicenna'),
(380, '1104154', 'Sekolah Tinggi Ilmu Manajemen'),
(381, '1104155', 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik'),
(382, '1104156', 'Sekolah Tinggi Informatika dan Komputer Indonesia Malang'),
(383, '1104157', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Bima'),
(384, '1104158', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan Hamzanwadi Selong'),
(385, '1104163', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan PGRI'),
(386, '1104164', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan PGRI Banjarmasin'),
(387, '1104165', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan PGRI Jombang'),
(388, '1104166', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan PGRI Sumatera Barat'),
(389, '1104167', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan PGRI Tulungagung'),
(390, '1104168', 'Sekolah Tinggi Keguruan dan Ilmu Pendidikan STKIP Hamzanwadi'),
(391, '1104172', 'Sekolah Tinggi Kesehatan'),
(392, '1104173', 'Sekolah Tinggi Manajemen dan Ilmu Komputer'),
(393, '1104174', 'Sekolah Tinggi Manajemen dan Ilmu Komputer Syaikh Zainuddin'),
(394, '1104175', 'Sekolah Tinggi Manajemen Informasika dan Komputer STMIK Bumigora Mataram'),
(395, '1104176', 'Sekolah Tinggi Manajemen Informatika dan Komputer Adi Unggul Bhirawa'),
(396, '1104177', 'Sekolah Tinggi Manajemen Informatika dan Komputer Balikpapan'),
(397, '1104178', 'Sekolah Tinggi Manajemen Informatika dan Komputer Bina Mulia'),
(398, '1104179', 'Sekolah Tinggi Manajemen Informatika dan Komputer Bumigora'),
(399, '1104180', 'Sekolah Tinggi Manajemen Informatika dan Komputer -STMIK-Bumigora Mataram'),
(400, '1104181', 'Sekolah Tinggi Manajemen Informatika dan Komputer Widya Pratama'),
(401, '1104182', 'Sekolah Tinggi Manajemen Informatika dan Teknin Komputer'),
(402, '1104183', 'Sekolah Tinggi Manajemen Informatika Komputer Bali'),
(403, '1104184', 'Sekolah Tinggi Manajemen Informatika Komputer Banjarbaru'),
(404, '1104185', 'Sekolah Tinggi Manajemen Informatika Komputer Uyelindo'),
(405, '1104186', 'Sekolah Tinggi Pariwisata Trisakti'),
(406, '1104187', 'Sekolah Tinggi Pertanian'),
(407, '1104188', 'Sekolah Tinggi Pertanian Dharma Wacana'),
(408, '1104189', 'Sekolah Tinggi Pertanian Jember'),
(409, '1104190', 'Sekolah Tinggi Pertanian Surya Dharma'),
(410, '1104191', 'Sekolah Tinggi Seni Indonesia'),
(411, '1104192', 'Sekolah Tinggi Seni Indonesia Bandung'),
(412, '1104193', 'Sekolah Tinggi Seni Indonesia Padangpanjang'),
(413, '1104195', 'Sekolah Tinggi Seni Indonesia Surakarta'),
(414, '1104196', 'Sekolah Tinggi Seni Rupa dan Desain Indonesia'),
(415, '1104197', 'Sekolah Tinggi Teknik Lingkungan'),
(416, '1104198', 'Sekolah Tinggi Teknologi Adisutjipto'),
(417, '1104199', 'Sekolah Tinggi Teknologi Banten Jaya'),
(418, '1104200', 'Sekolah Tinggi Teknologi Fatahillah'),
(419, '1104201', 'Sekolah Tinggi Teknologi Industri Turen Malang'),
(420, '1104202', 'Sekolah Tinggi Teknologi Industri Turen Malang'),
(421, '1104203', 'Sekolah Tinggi Teknologi Nasional'),
(422, '1104204', 'Sekolah Tinggi Teknologi Ronggolawe'),
(423, '1104205', 'Sekolah Tingi Bahasa Asing Dinamik'),
(424, '1104206', 'Sekolan Tinggi Manajemen Informatika dan Ilmu Komputer El Rahma Yogyakarta'),
(425, '1104207', 'Sekretariat Jenderal DPR RI'),
(426, '1104208', 'Sosial Ekonomi Pertanian'),
(427, '1104209', 'STIE Pelita Nusantara Semarang'),
(428, '1104210', 'STIMED Nusa Palapa Makassar'),
(429, '1104212', 'Teknologi Universitas Diponegoro'),
(430, '1104213', 'TNI AU'),
(431, '1104600', 'TNI AU'),
(432, '1104214', 'Uniaversitas Tanjungpura'),
(433, '1104215', 'UNIKA Soegijapranata'),
(434, '1104230', 'Universitas'),
(435, '1104232', 'Universitas 17 Agustus 1944'),
(436, '1104232', 'Universitas 17 Agustus 1945'),
(437, '1104233', 'Universitas 17 Agustus 1945 Samarinda'),
(438, '1104238', 'Universitas 45 Makassar'),
(439, '1104240', 'Universitas Abdurachman Saleh Sitobondo'),
(440, '1104243', 'Universitas Abulyatama'),
(441, '1104225', 'Universitas Airlangga'),
(442, '1104251', 'Universitas Al Azhar Indonesia'),
(443, '1104253', 'Universitas Andalas Padang'),
(444, '1104254', 'Universitas Andi Djemma'),
(445, '1104256', 'Universitas Balikpapan'),
(446, '1104257', 'Universitas Bandung Raya'),
(447, '1104258', 'Universitas Bangka Belitung'),
(448, '1104259', 'Universitas Bangun Nusantara'),
(449, '1104226', 'Universitas Bengkulu'),
(450, '1104260', 'Universitas Bhayangkara Surabaya'),
(451, '1104262', 'Universitas Bina Nusantara'),
(452, '1104263', 'Universitas Borneo'),
(453, '1104265', 'Universitas Bung Hatta Padang'),
(454, '1104266', 'Universitas Ciputra'),
(455, '1104267', 'Universitas Cokroaminoto'),
(456, '1104268', 'Universitas Dian Nuswantoro'),
(457, '1104227', 'Universitas Diponegoro'),
(458, '1104269', 'Universitas Diponegoro Medan'),
(459, '1104270', 'Universitas Diponegoro Semarang'),
(460, '1104272', 'Universitas Djuanda'),
(461, '1104274', 'Universitas Dr. Soetomo Surabaya'),
(462, '1104276', 'Universitas Ekasakti Padang'),
(463, '1104277', 'Universitas Gadjah Mada'),
(464, '1104278', 'Universitas Gunugn RInjani'),
(465, '1104280', 'Universitas Hang Tuah Surabaya'),
(466, '1104281', 'Universitas Hasannudin'),
(467, '1104282', 'Universitas HKBP Nommensen'),
(468, '1104218', 'Universitas Indonesia'),
(469, '1104286', 'Universitas Internasional Batam'),
(470, '1104287', 'Universitas Islam'),
(471, '1104288', 'Universitas Islam Al-Azhar'),
(472, '179A1', 'Universitas Islam Bandung'),
(473, '1104289', 'Universitas Islam Batik'),
(474, '1104291', 'Universitas Islam Jember'),
(475, '1104292', 'Universitas Islam Kalimantan'),
(476, '1104228', 'Universitas Islam Malang'),
(477, '1104294', 'Universitas Islam Negeri Sunan Kalijaga'),
(478, '1104295', 'Universitas Islam Nusantara'),
(479, '1104296', 'Universitas Islam Sultan Agung'),
(480, '1104297', 'Universitas Islam Sumatera Utara'),
(481, '1104299', 'Universitas Islam Syekh Yusuf'),
(482, '1104301', 'Universitas Jambi'),
(483, '1104304', 'Universitas Janabadra Yogyakarta'),
(484, '184A1', 'Universitas Jember'),
(485, '1104306', 'Universitas Jenderal Soedirman Porwokerto'),
(486, '1104309', 'Universitas Katalok Widya Mandala Surabaya'),
(487, '1104310', 'Universitas Katolik Indonesia Atma Jaya'),
(488, '1104311', 'Universitas Katolik Parahyangan'),
(489, '1104313', 'Universitas Katolik Soegijapranata Semarang'),
(490, '1104316', 'Universitas Katolik Widya Karya Malang'),
(491, '1104317', 'Universitas Katolik Widya Mandala'),
(492, '1104319', 'Universitas Khairun'),
(493, '1104321', 'Universitas Kristen Artha Wacana Kupang'),
(494, '192A1', 'Universitas Kristen Duta Wacana'),
(495, '1104322', 'Universitas Kristen Immanuel Yogyakarta'),
(496, '1104323', 'Universitas Kristen Indonesia Maluku'),
(497, '1104324', 'Universitas Kristen Maranatha'),
(498, '1104325', 'Universitas Kristen Petra'),
(499, '134A1', 'Universitas Kristen Satya Wacana'),
(500, '1104327', 'Universitas Lakinende'),
(501, '1104328', 'UNIVERSITAS LAMPUNG'),
(502, '1104329', 'Universitas Lancang Kuning Pekanbaru'),
(503, '1104330', 'Universitas Langlangbuana'),
(504, '1104331', 'Universitas LPP Yogyakarta'),
(505, '1104332', 'Universitas Ma Chung'),
(506, '1104334', 'Universitas Mahasaraswati Mataram'),
(507, '1104335', 'Universitas Makassar'),
(508, '1104216', 'Universitas Mataram'),
(509, '1104336', 'Universitas Medan Area'),
(510, '1104337', 'Universitas Mercu buana yogyakarta'),
(511, '1104338', 'Universitas Merdeka'),
(512, '1104339', 'Universitas Merdeka Madiun'),
(513, '1104340', 'Universitas Merdeka Malang'),
(514, '1104341', 'Universitas Merdeka Ponorogo'),
(515, '1104342', 'Universitas Merdeka Surabaya'),
(516, '1104343', 'Universitas Moch Sroedji Jember'),
(517, '1104348', 'Universitas Muhamadiyah'),
(518, '1104349', 'Universitas Muhamadiyah Purwokerto'),
(519, '1104350', 'Universitas Muhamadiyah Sidoarjo'),
(520, '1104351', 'Universitas Muhamamadiyah Malang'),
(521, '1104352', 'Universitas Muhammadiyah'),
(522, '1104353', 'Universitas Muhammadiyah Gresik'),
(523, '1104354', 'Universitas Muhammadiyah Kupang'),
(524, '1104355', 'Universitas Muhammadiyah Makassar'),
(525, '1104356', 'Universitas Muhammadiyah Parepare'),
(526, '1104357', 'Universitas Muhammadiyah Ponogoro'),
(527, '1104358', 'Universitas Muhammadiyah Porwokerto'),
(528, '1104361', 'Universitas Muhammadiyah Surakarta'),
(529, '1104362', 'Universitas Muhammadiyah Syiah Kuala'),
(530, '1104363', 'Universitas Muhammadiyah Yogyakarta'),
(531, '1104365', 'Universitas Nahdlatul Ulama Surakarta'),
(532, '1104366', 'Universitas Negeri Bali'),
(533, '1104219', 'Universitas Negeri Jakarta'),
(534, '1104367', 'Universitas Negeri Makkasar'),
(535, '1104371', 'Universitas Negeri Medan'),
(536, '110A1', 'Universitas Negeri Padang'),
(537, '1104087', 'Universitas Negeri Papua'),
(538, '1104372', 'Universitas Negeri Semarang'),
(539, '1104368', 'Universitas Negeri Surabaya'),
(540, '1104369', 'Universitas Negeri Syiah Kuala'),
(541, '1104370', 'Universitas Negeri Yogykarta'),
(542, '1104373', 'Universitas Nurtanio'),
(543, '1104374', 'Universitas Nusa Bangsa'),
(544, '1104016', 'Universitas Padjadjaran'),
(545, '1104377', 'Universitas Pakuan'),
(546, '1104379', 'Universitas Palangka Raya'),
(547, '1104382', 'Universitas Panca Bhakti'),
(548, '1104383', 'Universitas Pancasila'),
(549, '1104384', 'Universitas Paramadina'),
(550, '1104385', 'Universitas Pattimura Ambon'),
(551, '1104388', 'Universitas Pembangunan Nasional Veteran'),
(552, '1104394', 'Universitas Pembangunan Nasional Veteran Jawa Timur'),
(553, '1104396', 'Universitas Pembangunan Nasional Veteran Yogyakarta'),
(554, '1104398', 'Universitas Pembangunan Veteran'),
(555, '1104221', 'Universitas Pendidikan Ganesha Singaraja'),
(556, '1104402', 'Universitas Pendidikan Indonesia Bandung'),
(557, '1104404', 'Universitas Pendidikan Nasional'),
(558, '1104405', 'Universitas Pendidikan Nasional Undiknas'),
(559, '1104407', 'Universitas Pertanian Negeri Kupang'),
(560, '1104408', 'Universitas Peternakan Perikanan Muhammadiyah'),
(561, '1104409', 'Universitas PGRI'),
(562, '1104410', 'Universitas PGRI Adi Buana Surabaya'),
(563, '1104411', 'Universitas PGRI Ronggolawe Tuban'),
(564, '1104412', 'Universitas Prof. Dr. Hazairin Bengkulu'),
(565, '1104416', 'Universitas Prof. DR. Moestopo Beragama'),
(566, '1104418', 'Universitas Proklamasi 45'),
(567, '1104419', 'Universitas Putra Bangsa'),
(568, '1104420', 'Universitas Putri Bangsa'),
(569, '1104421', 'Universitas Sahid Surakarta'),
(570, '1104422', 'Universitas Sam Ratulangi Manado'),
(571, '1104423', 'Universitas Sanata Dharma'),
(572, '1104424', 'Universitas Sarjana Winata Tanamasiswa'),
(573, '1104081', 'Universitas Sebelas Maret'),
(574, '1104430', 'Universitas Sekolah Tinggi Ilmu Ekonomi Indonesia'),
(575, '1104431', 'Universitas Semarang'),
(576, '1104433', 'Universitas Serambi Mekkah Banda Aceh'),
(577, '1104434', 'Universitas Setia Budi'),
(578, '1104435', 'Universitas Siliwangi'),
(579, '1104436', 'Universitas Sinata Dharma Yogyakarta'),
(580, '1104438', 'Universitas Singaperbangsa Karawang'),
(581, '1104439', 'Universitas Sintuwu Maroso Poso'),
(582, '1104440', 'Universitas Slamet Riyadi'),
(583, '1104441', 'Universitas Slamet Riyadi Surakarta'),
(584, '1104442', 'Universitas Soegijapranata'),
(585, '1104443', 'Universitas Sriwijaya'),
(586, '1104444', 'Universitas Stikubank'),
(587, '1104445', 'Universitas Sultan Ageng Tirtayasa Banten'),
(588, '1104447', 'Universitas Sumatera Barat'),
(589, '1104448', 'Universitas Surakarta'),
(590, '1104449', 'Universitas Syah Kuala'),
(591, '1104508', 'Universitas Syiah Kuala'),
(592, '1104450', 'Universitas Syiah Kuala Banda Aceh'),
(593, '1104453', 'Universitas Tadulako Palu'),
(594, '1104454', 'Universitas Tamansiswa'),
(595, '1104455', 'Universitas Tamansiswa Padang'),
(596, '1104457', 'Universitas Tanjungpura Pontianak'),
(597, '1104458', 'Universitas Tarumanagara'),
(598, '1104461', 'Universitas Tribhuwana Tunggadewi Malang'),
(599, '1104464', 'Universitas Trunojoyo Madura'),
(600, '1104465', 'Universitas Tulungagung'),
(601, '1104466', 'Universitas Tunas Pembangunan Surakarta'),
(602, '1104229', 'Universitas Udayana'),
(603, '1104467', 'Universitas Veteran Bangun Nusantara'),
(604, '1104469', 'Universitas W.R. Supratman'),
(605, '1104470', 'Universitas Wangsa Manggala'),
(606, '1104471', 'Universitas Warmadewa'),
(607, '1104472', 'Universitas Widayagama Malang'),
(608, '1104473', 'Universitas Widya Dharma'),
(609, '1104474', 'Universitas Widya Gama'),
(610, '1104476', 'Universitas Widya Mandala Madiun'),
(611, '1104477', 'Universitas Widya Mandira Kupang'),
(612, '1104478', 'Universitas Widya Mataram'),
(613, '1104480', 'Universitas Widyagama Malang'),
(614, '1104483', 'Universitas Widyatama'),
(615, '1104485', 'Universitas Wijaya Kusuma Surabaya'),
(616, '1104486', 'Universitas Wijaya Putra'),
(617, '1104492', 'Universitas Winaya Mukti Sumedang'),
(618, '1104493', 'Universitas Wisnu Wardhana Malang'),
(619, '1104496', 'Universitas WR. Supratman Surabaya'),
(620, '1104497', 'Universitas Yarsi'),
(621, '1104498', 'Universitas Yogyakarta'),
(622, '1104499', 'Universitas Yos Soedarso Surabaya'),
(623, '1104500', 'Universitas Yudharta'),
(624, '1104501', 'Universtas Jambi'),
(625, '1104502', 'Univesitas Bengkulu'),
(626, '1104016', 'Univesitas Padjadjaran'),
(627, '1104505', 'Univesitas Tanjungpura'),
(628, '1104506', 'Univesrsitas Wijaya Kusuma Surabaya'),
(629, '1104507', 'Unversitas Jember'),
(630, '1104509', 'Widya Sari press.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level`
--

CREATE TABLE IF NOT EXISTS `tbl_level` (
  `id_level` char(2) NOT NULL,
  `level` char(30) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
('01', 'Super Admin'),
('02', 'Admin'),
('03', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site`
--

CREATE TABLE IF NOT EXISTS `tbl_site` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_code` char(16) DEFAULT NULL,
  `site_url` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_short_desc` text,
  `site_indexdate` date DEFAULT NULL,
  `site_depth` int(11) DEFAULT '2',
  `site_required` text,
  `disallowed` text,
  `can_leave_domain` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_site`
--

INSERT INTO `tbl_site` (`site_id`, `site_code`, `site_url`, `site_title`, `site_short_desc`, `site_indexdate`, `site_depth`, `site_required`, `disallowed`, `can_leave_domain`) VALUES
(11, 'SIT0000001', 'http://www.risetkomputer.com/', 'Riset Komputer ', 'Berbagi Pengetahuan Komputer', NULL, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_fokus`
--

CREATE TABLE IF NOT EXISTS `tbl_site_fokus` (
  `site_code` char(16) DEFAULT NULL,
  `fokus_code` char(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_fokus`
--

INSERT INTO `tbl_site_fokus` (`site_code`, `fokus_code`) VALUES
('SIT0000001', 'FOK0000002');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `link` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `id` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
