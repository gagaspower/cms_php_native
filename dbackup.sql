DROP TABLE IF EXISTS ads_manage;

CREATE TABLE `ads_manage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ads_kode_artikel_bottom` text COLLATE latin1_general_ci,
  `ads_kode_sidebar_top` text COLLATE latin1_general_ci,
  `ads_kode_sidebar_bottom` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO ads_manage VALUES("1","","","");

DROP TABLE IF EXISTS berita;

CREATE TABLE `berita` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
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
  `meta_deskripsi` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO berita VALUES("15","2","11","React Native adalah salah satu framework","react-native-adalah-salah-satu-framework","&lt;p&gt;Ya, React Native adalah salah satu framework javascript yang digunakan untuk mengembangkan aplikasi mobile. Jika dahulu kita mengenal Ionic Framework React Native, maka React Native sangat berbeda dengan Ionic karena dia memang ditujukan untuk membuat aplikasi mobile yang benar-benar real native sedangkan Ionic ditujukan untuk membuat aplikasi Web App.&lt;/p&gt;","Senin","2018-07-30","09:26:18","99native_framework.jpg","125","tag-satu,tag-kedua","React Native adalah salah satu framework");
INSERT INTO berita VALUES("18","2","11","Yang menjadi pemasalahan untuk","yang-menjadi-pemasalahan-untuk","&lt;p&gt;Selamat malam teman-teman, malam ini saya akan share bagaimana sih cara upload file lebih dari 1 (satu) menggunakan &lt;strong&gt;Framework Codeigniter&lt;/strong&gt;, karena dalam membuat aplikasi terkadang kita membutuhkan CRUD (Create, read, Update, Delete) yang bisa &lt;em&gt;Multiple Insert &lt;/em&gt;&lt;/p&gt;","Senin","2018-07-30","09:25:55","61cms2.jpg","69","tag-satu","sdf asdf asd");

DROP TABLE IF EXISTS download;

CREATE TABLE `download` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO download VALUES("12","test","Bestseller_free_css_template.zip","2018-07-28","10");

DROP TABLE IF EXISTS halamanstatis;

CREATE TABLE `halamanstatis` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `judul_seo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `isi_halaman` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO halamanstatis VALUES("4","halaman statis","halaman-statis","&lt;p&gt;Menghilangkan index.php merupakan suatu tuntutan dalam &lt;a title=&quot;Lihat semua artikel tentang SEO di nyingspot.com&quot; href=&quot;https://www.nyingspot.com/?s=seo&quot; target=&quot;_blank&quot;&gt;SEO&lt;/a&gt; yaitu bagaimana cara membuat url yang rapih dan SEO &lt;em&gt;friendly&lt;/em&gt;. Sebagai seorang programmer tentu hal ini akan sangat sulit apabila terjadi kesalahan. Butuh &lt;em&gt;effort&lt;/em&gt; yang cukup lama dalam mengatasi masalah ini. Tapi untuk seorang Digital Marketer, tentu saja ini hal yang basic yang harus ditempuh untuk menjalankan strateginya.&lt;/p&gt;","2018-07-14");

DROP TABLE IF EXISTS identitas;

CREATE TABLE `identitas` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_website` varchar(100) NOT NULL,
  `url_website` varchar(100) NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `cache` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO identitas VALUES("1","YATOREH","http://labz1.yatoreh.com","deskripsi, deskripsi kedua","keyword, keyword,testing","y.png","Y");

DROP TABLE IF EXISTS kategori;

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO kategori VALUES("2","kategori satu","kategori-satu");
INSERT INTO kategori VALUES("4","kategori kedua","kategori-kedua");

DROP TABLE IF EXISTS levels;

CREATE TABLE `levels` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO levels VALUES("1","admin");
INSERT INTO levels VALUES("2","author");

DROP TABLE IF EXISTS mainmenu;

CREATE TABLE `mainmenu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `posisi` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO mainmenu VALUES("3","Tentang","pages/halaman-statis","Y","header");
INSERT INTO mainmenu VALUES("4","Hubungi","hubungi-kami","Y","header");
INSERT INTO mainmenu VALUES("5","Sitemap","sitemap.xml","Y","footer");
INSERT INTO mainmenu VALUES("6","RSS","rss.xml","Y","footer");
INSERT INTO mainmenu VALUES("8","Download","download","Y","header");

DROP TABLE IF EXISTS pesan;

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `subjek` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` char(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS phpmailer_seting;

CREATE TABLE `phpmailer_seting` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `host` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `port` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO phpmailer_seting VALUES("1","smtp.gmail.com","pahlitamanata@gmail.com","gquqdqoasmxrrsvc","587");

DROP TABLE IF EXISTS serp_manage;

CREATE TABLE `serp_manage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `google_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `bing_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `yandex_verifikasi` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO serp_manage VALUES("1","lkjhlkjho87089uhijh","jjlkjlkjhk8987098yoihho","asdfasdfasdfasdfas");

DROP TABLE IF EXISTS submenu;

CREATE TABLE `submenu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `main_id` int(10) DEFAULT NULL,
  `nama_sub` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `link_sub` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO submenu VALUES("11","4","Demo Aplikasi","","N");

DROP TABLE IF EXISTS subscribe;

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO subscribe VALUES("1","gagas","gagasagusbahtiar@gmail.com");

DROP TABLE IF EXISTS tag;

CREATE TABLE `tag` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO tag VALUES("2","tag satu","tag-satu");
INSERT INTO tag VALUES("3","tag kedua","tag-kedua");
INSERT INTO tag VALUES("4","Tag ketiga","tag-ketiga");
INSERT INTO tag VALUES("5","tag keempat","tag-keempat");

DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` text COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level_id` int(5) NOT NULL,
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO users VALUES("11","$2a$16$juEvvfRxqXSssiGeVwoCoe4USQqtoSxR1.tWBvm22b9SgYNU7.HGO","new project","admin@gmail.com","1","N");
INSERT INTO users VALUES("18","$2a$16$Yt9saQ1FfkM3216BhlS4G.FOUch/czw6QGY/IrRfuO96dEuhiGlhG","amelia pustpita","puspitaamelia67@gmail.com","2","N");

