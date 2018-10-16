-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2018 at 09:01 AM
-- Server version: 10.0.36-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ameliade_labz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_manage`
--

CREATE TABLE `ads_manage` (
  `id` int(5) NOT NULL,
  `ads_kode_artikel_bottom` text COLLATE latin1_general_ci,
  `ads_kode_sidebar_top` text COLLATE latin1_general_ci,
  `ads_kode_sidebar_bottom` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ads_manage`
--

INSERT INTO `ads_manage` (`id`, `ads_kode_artikel_bottom`, `ads_kode_sidebar_top`, `ads_kode_sidebar_bottom`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(5) NOT NULL,
  `kategori_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` text COLLATE latin1_general_ci NOT NULL,
  `judul_seo` text COLLATE latin1_general_ci NOT NULL,
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` text COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `kategori_id`, `user_id`, `judul`, `judul_seo`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`, `meta_deskripsi`) VALUES
(15, 2, 11, 'React Native adalah salah satu framework', 'react-native-adalah-salah-satu-framework', '&lt;p&gt;Ya, React Native adalah salah satu framework javascript yang digunakan untuk mengembangkan aplikasi mobile. Jika dahulu kita mengenal Ionic Framework React Native, maka React Native sangat berbeda dengan Ionic karena dia memang ditujukan untuk membuat aplikasi mobile yang benar-benar real native sedangkan Ionic ditujukan untuk membuat aplikasi Web App.&lt;/p&gt;', 'Senin', '2018-07-30', '09:26:18', '99native_framework.jpg', 161, 'tag-satu,tag-kedua', 'React Native adalah salah satu framework'),
(18, 2, 11, 'Yang menjadi pemasalahan untuk', 'yang-menjadi-pemasalahan-untuk', '&lt;p&gt;Selamat malam teman-teman, malam ini saya akan share bagaimana sih cara upload file lebih dari 1 (satu) menggunakan &lt;strong&gt;Framework Codeigniter&lt;/strong&gt;, karena dalam membuat aplikasi terkadang kita membutuhkan CRUD (Create, read, Update, Delete) yang bisa &lt;em&gt;Multiple Insert &lt;/em&gt;&lt;/p&gt;', 'Senin', '2018-07-30', '09:25:55', '61cms2.jpg', 108, 'tag-satu', 'sdf asdf asd'),
(22, 2, 11, 'Iklan Header 600x80px', 'iklan-header-600x80px', '&lt;p&gt;fdgdfg&lt;/p&gt;', 'Kamis', '2018-08-16', '15:28:58', '8small_49product18.jpg', 19, 'tag-satu', '');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `judul`, `nama_file`, `tgl_posting`, `hits`) VALUES
(12, 'test', 'Bestseller_free_css_template.zip', '2018-07-28', 12),
(13, 'sd', 'wikipedia-w.png', '2018-09-25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id` int(5) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `judul_seo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi_halaman` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halamanstatis`
--

INSERT INTO `halamanstatis` (`id`, `judul`, `judul_seo`, `isi_halaman`, `tgl_posting`) VALUES
(4, 'halaman statis', 'halaman-statis', '&lt;p&gt;Menghilangkan index.php merupakan suatu tuntutan dalam &lt;a title=&quot;Lihat semua artikel tentang SEO di nyingspot.com&quot; href=&quot;https://www.nyingspot.com/?s=seo&quot; target=&quot;_blank&quot;&gt;SEO&lt;/a&gt; yaitu bagaimana cara membuat url yang rapih dan SEO &lt;em&gt;friendly&lt;/em&gt;. Sebagai seorang programmer tentu hal ini akan sangat sulit apabila terjadi kesalahan. Butuh &lt;em&gt;effort&lt;/em&gt; yang cukup lama dalam mengatasi masalah ini. Tapi untuk seorang Digital Marketer, tentu saja ini hal yang basic yang harus ditempuh untuk menjalankan strateginya.&lt;/p&gt;', '2018-07-14'),
(5, 'Peran Generasi Muda Sebagai Agen Perubahan yang Berintelektual, Idealis dalam Paradigma Pembangunan Pertanian Daerah Tapal Batas', 'peran-generasi-muda-sebagai-agen-perubahan-yang-berintelektual-idealis-dalam-paradigma-pembangunan-pertanian-daerah-tapal-batas', '&lt;p&gt;sj,sgjgx&lt;/p&gt;', '2018-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `url_website` varchar(100) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `cache` enum('Y','N') DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `nama_website`, `url_website`, `meta_deskripsi`, `meta_keyword`, `logo`, `cache`) VALUES
(1, 'YATOREH', 'http://labz1.yatoreh.com', 'deskripsi, deskripsi kedua', 'keyword, keyword,testing', 'y.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `kategori_seo`) VALUES
(2, 'kategori satu', 'kategori-satu'),
(4, 'kategori kedua', 'kategori-kedua');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(5) NOT NULL,
  `nama_level` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `nama_level`) VALUES
(1, 'admin'),
(2, 'author');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `id` int(5) NOT NULL,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `posisi` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`id`, `nama_menu`, `link`, `aktif`, `posisi`) VALUES
(3, 'Tentang', 'pages/halaman-statis', 'Y', 'header'),
(4, 'Hubungi', 'hubungi-kami', 'Y', 'header'),
(5, 'Sitemap', 'sitemap.xml', 'Y', 'footer'),
(6, 'RSS', 'rss.xml', 'Y', 'footer'),
(8, 'Download', 'download', 'Y', 'header'),
(9, 'Data Karyawan', '', 'Y', 'header');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subjek` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phpmailer_seting`
--

CREATE TABLE `phpmailer_seting` (
  `id` int(5) NOT NULL,
  `host` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `port` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpmailer_seting`
--

INSERT INTO `phpmailer_seting` (`id`, `host`, `username`, `password`, `port`) VALUES
(1, 'smtp.gmail.com', 'pahlitamanata@gmail.com', 'gquqdqoasmxrrsvc', '587');

-- --------------------------------------------------------

--
-- Table structure for table `serp_manage`
--

CREATE TABLE `serp_manage` (
  `id` int(5) NOT NULL,
  `google_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `bing_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `yandex_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serp_manage`
--

INSERT INTO `serp_manage` (`id`, `google_verifikasi`, `bing_verifikasi`, `yandex_verifikasi`) VALUES
(1, 'lkjhlkjho87089uhijh', 'jjlkjlkjhk8987098yoihho', 'asdfasdfasdfasdfas');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(5) NOT NULL,
  `main_id` int(10) DEFAULT NULL,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `main_id`, `nama_sub`, `link_sub`, `aktif`) VALUES
(11, 4, 'Demo Aplikasi', '', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `nama_tag`, `tag_seo`) VALUES
(2, 'tag satu', 'tag-satu'),
(3, 'tag kedua', 'tag-kedua'),
(4, 'Tag ketiga', 'tag-ketiga'),
(5, 'tag keempat', 'tag-keempat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `password` text COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level_id` int(5) NOT NULL,
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `nama_lengkap`, `email`, `level_id`, `blokir`) VALUES
(11, '$2a$16$juEvvfRxqXSssiGeVwoCoe4USQqtoSxR1.tWBvm22b9SgYNU7.HGO', 'new project', 'admin@gmail.com', 1, 'N'),
(18, '$2a$16$Yt9saQ1FfkM3216BhlS4G.FOUch/czw6QGY/IrRfuO96dEuhiGlhG', 'amelia pustpita', 'puspitaamelia67@gmail.com', 2, 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_manage`
--
ALTER TABLE `ads_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpmailer_seting`
--
ALTER TABLE `phpmailer_seting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serp_manage`
--
ALTER TABLE `serp_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
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
-- AUTO_INCREMENT for table `ads_manage`
--
ALTER TABLE `ads_manage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phpmailer_seting`
--
ALTER TABLE `phpmailer_seting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serp_manage`
--
ALTER TABLE `serp_manage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
