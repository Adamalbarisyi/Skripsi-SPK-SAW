-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2020 at 10:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tanah_kavling`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_proyek`
--

CREATE TABLE `alternatif_proyek` (
  `id_proyek` int(5) NOT NULL,
  `judul_proyek` varchar(100) NOT NULL,
  `deskripsi_proyek` varchar(255) NOT NULL,
  `sertifikat_proyek` varchar(6) NOT NULL,
  `provinsi_proyek` varchar(50) NOT NULL,
  `kabupaten_proyek` varchar(32) NOT NULL,
  `luastanah_proyek` int(6) NOT NULL,
  `harga/m_proyek` int(16) NOT NULL,
  `lebar_depan_proyek` int(6) NOT NULL,
  `harga_total_proyek` int(16) NOT NULL,
  `jarak_proyek` int(6) NOT NULL,
  `fasilitas_proyek` int(6) NOT NULL,
  `foto1_proyek` blob NOT NULL,
  `foto2_proyek` blob NOT NULL,
  `foto3_proyek` blob NOT NULL,
  `foto4_proyek` blob NOT NULL,
  `nama_pengelola` varchar(32) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `nomor_hp` int(16) NOT NULL,
  `status_post` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(50) NOT NULL,
  `waktu_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`, `waktu_post`) VALUES
(1, 'artikel pertama', '<p>aserty 1</p>', 'cfab7173aa7e5a865a6f0d2d9f783036.jpg', '2020-06-09 02:04:09'),
(2, '1', '1', '6ec41efcce4ef60866ff5ca18099badf.PNG', '2020-06-18 15:58:49'),
(3, '1', '1', 'Capture.PNG', '2020-06-18 16:01:46'),
(4, 'Teliti Sebelum Membeli, Abaikan Harga Murah Luasan Sepetak', 'Memang benar ada begitu banyak berita dan informasi yang tidak enak didengar ihwal investasi tanah kavling. Tentang penipuan yang kavlingnya abal-abal, atau berkedok agama untuk mengambil untung dari penjualan tanah kavling.\r\nFakta tersebut menunjukkan betapa semua orang masih berharap untuk mendapatkan tanah yang layak sebagai hunian, atau memang untuk investasi. Tentu saja pada sebagian orang mendapatkan dengan harga hemat.\r\nBisa dipahami, bahwa masyarakat masih sangat membutuhkan tanah sebagai hunian. Ini bisa dilihat dari pertumbuhan penduduk yang semakin besar, sementara tanah persediaan untuk hunian malah makin menipis. Inilah yang membuat tanah menjadi langka, dan harganya pun semakin naik tiap tahun.\r\nNamun, ada pesan yang bisa ditangkap dari berbagai berita investasi tanah kavling abal-abal adalah bahwa faktor harga dan skema bayar memainkan peran cukup penting. Hal ini menunjukkan masyarakat mudah terpukau harga murah, sementara elemen penting legalitas menjadi terabaikan.\r\nPadahal, dalam penyediaan tanah kavling standar perumahan, legalitas menjadi faktor sangat penting yang harus ada dan tersedia. Mulai luasan yang sesuai aturan Perda setempat, bisa minimal 100m2 atau 120m2, lahan matang plus fasum yang perlu disediakan mulai jalan kavling paving block maupun cor beton selebar 5m. Dan yang terpenting adalah tentang SHM yang sudah pecah unit. Inilah elemen penting bagi konsumen untuk membeli tanah, baik sebagai hunian maupun investasi.\r\nSemua elemen tersebut jelas membuktikan bahwa tanah kavling standar perumahan yang ditawarkan memiliki kriteria yang layak, secara keekonomian maupun investasi. Teliti sebelum membeli. Untuk tanah kavling, produk KPTI jelas legalitasnya lebih pasti.', '4c35c0a1447a440faf0b8a47ed5ffb74.jpg', '2020-06-18 16:48:44'),
(5, 'Teliti Sebelum Membeli, Abaikan Harga Murah Luasan Sepetak', 'Memang benar ada begitu banyak berita dan informasi yang tidak enak didengar ihwal investasi tanah kavling. Tentang penipuan yang kavlingnya abal-abal, atau berkedok agama untuk mengambil untung dari penjualan tanah kavling.\r\nFakta tersebut menunjukkan betapa semua orang masih berharap untuk mendapatkan tanah yang layak sebagai hunian, atau memang untuk investasi. Tentu saja pada sebagian orang mendapatkan dengan harga hemat.\r\nBisa dipahami, bahwa masyarakat masih sangat membutuhkan tanah sebagai hunian. Ini bisa dilihat dari pertumbuhan penduduk yang semakin besar, sementara tanah persediaan untuk hunian malah makin menipis. Inilah yang membuat tanah menjadi langka, dan harganya pun semakin naik tiap tahun.\r\nNamun, ada pesan yang bisa ditangkap dari berbagai berita investasi tanah kavling abal-abal adalah bahwa faktor harga dan skema bayar memainkan peran cukup penting. Hal ini menunjukkan masyarakat mudah terpukau harga murah, sementara elemen penting legalitas menjadi terabaikan.\r\nPadahal, dalam penyediaan tanah kavling standar perumahan, legalitas menjadi faktor sangat penting yang harus ada dan tersedia. Mulai luasan yang sesuai aturan Perda setempat, bisa minimal 100m2 atau 120m2, lahan matang plus fasum yang perlu disediakan mulai jalan kavling paving block maupun cor beton selebar 5m. Dan yang terpenting adalah tentang SHM yang sudah pecah unit. Inilah elemen penting bagi konsumen untuk membeli tanah, baik sebagai hunian maupun investasi.\r\nSemua elemen tersebut jelas membuktikan bahwa tanah kavling standar perumahan yang ditawarkan memiliki kriteria yang layak, secara keekonomian maupun investasi. Teliti sebelum membeli. Untuk tanah kavling, produk KPTI jelas legalitasnya lebih pasti.', 'deb94c1fe897d59fcadb71800a173dfb.jpg', '2020-06-18 16:50:13'),
(6, 'Inilah Keuntungan Beli Tanah Kavling', '<p>Mengapa harus tanah kavling? Banyak orang yang perlu mengetahui bahwa terdapat sisi sangat menguntungkan bila kita membeli tanah kavling.<br />\nPaling tidak, yang paling sering kita ketahui adalah bahwa tanah kavling minim perawatan, dibiarkan saja setahun mendatang sudah mendapatkan keuntungan yang cukup tinggi. Secara umum, inilah keuntungan membeli tanah kavling, diantaranya adalah;<br />\nPertama, bisa dijual kembali saat harga sudah naik. Benar tanah akan selalu mengalami kenaikan yang signifikan setiap tahun. Itu artinya, bahwa tanah bisa likuid sewaktu-waktu, sesuai dengan keperluan pemilik tanah.<br />\nKedua, bisa disewakan yang membuatnay menjadi lahan produktif. Maka, Anda memiliki pendapatan yang stabil tiap tahun yang mungkin bisa memberikan ANda tambahan untuk mengalokasikan pendapatan tersebut untuk usaha Anda yang lain sebagai modal.<br />\nKetiga, sebagai tabungan bakal mengalami nilai kenaikan harga yang pasti. Coba saja tiga bulan kemudian, atau bahkan setahun mendatang dijual kembali. Otomatis lahan kavling Anda sudah memiliki nilai yang melebihi nilai awal saat Anda beli seturut pertumbuhan ekonomi.<br />\nKeempat, memiliki nilai tambah yang lebih tinggi secara signifikan. Ini bila tanah akvling Anda bangun dengan model rumah type apa saja sesuai budget yang Anda inginkan. Nilainya bakal bertambah mekar bahkan melebihi nilai yang diperkirakan.<br />\nMaka, membeli tanah kavling menjadi kunci untuk lebih meningkatkan penghasilan sesuai dengan kekuatan finansial yang dimiliki pemiliknya. Pada lokasi tertentu, tanah kavling bahkan harganya melonjak tinggi, terutama yang lingkungan sekitarnya telah terbangun dan tersedia fasilitas public yang dibutuhkan masyarakat seperti pendidikan, kesehatan, wisata juga infrastruktur.</p>', 'e63b8fdde47308cc41e0b5483c26f0f6.jpg', '2020-06-18 17:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_kriteria`) VALUES
(1, 'K7', 'Cost', 2),
(2, 'Harga / 𝑚2', 'Cost', 3),
(3, 'Luas Tanah', 'Benefit', 2.5),
(4, 'Harga Total', 'Cost', 2),
(5, 'Jarak Kota', 'Benefit', 1.5),
(6, 'Fasilitas terdekat', 'Benefit', 1),
(15, '21', 'Cost', 2);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `username_member` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password_member` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `username_member`, `email`, `password_member`, `alamat`) VALUES
(1, 'member1', 'cyah', 'member1@gmail.com', 'bead7302b5d7d91a1c9fd800940081f90f4920f9', 'Magelang'),
(2, 'member2', 'rty', 'member2@gmail.com', 'e3070b522277c5cf015a97fb86cbaefe3df1db8f', 'Sleman'),
(3, 'member3', 'qwety', 'member3@gmail.com', '527b5e9f8603c0480a71467d19536f619c9dae41', 'Bantul');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username_pengguna` varchar(32) NOT NULL,
  `password_pengguna` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1. Admin 2.Pengelola'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`, `address`, `level`) VALUES
(1, 'Muhammad Rifki', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Magelang', 1),
(2, 'Adam Albarisyi', 'pengelola', '3c7913bc17671596a43dcb4581992bdf', 'Banyuwangi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(5) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `nilai_subkriteria` double NOT NULL,
  `ket_subkriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`, `ket_subkriteria`) VALUES
(1, 1, '<= 1.000.000', 1, 'Sangat Murah (SM)'),
(2, 1, '<1.000.000 - 1.500.000', 2, 'Murah (M)'),
(3, 1, '< 1.500.000 - 2.000.000', 3, 'Cukup Murah (CM)'),
(4, 1, '< 2.000.000 - 2.500.000', 4, 'Mahal'),
(5, 1, '>2.500.000', 5, 'Sangat Mahal'),
(6, 2, '<= 125 𝑚2', 1, 'Tidak Luas'),
(7, 2, '<125 –150 𝑚2', 2, 'Kurang Luas'),
(8, 2, '<150 –175 𝑚2', 3, 'Cukup Luas'),
(9, 2, '<175 –200 𝑚2', 4, 'Luas'),
(10, 2, '>200 𝑚2', 5, 'Sangat Luas'),
(11, 3, '<=200 Juta', 1, 'Sangat Sedikit'),
(12, 3, '<200 - 300 Juta', 2, 'Sedikit'),
(13, 3, '<300 - 400 Juta', 3, 'Sedang'),
(14, 3, '<400 - 500 Juta', 4, 'Banyak'),
(15, 3, '> 500 Juta', 5, 'Sangat Banyak'),
(16, 4, ' < = 5km', 5, 'Sangat Dekat'),
(17, 4, '<5 - 10 km', 4, 'Dekat'),
(18, 4, '<10 - 15 km', 3, 'Cukup Jauh'),
(19, 4, '<15 - 20 km', 2, 'Jauh'),
(20, 4, '>20 km', 1, 'Sangat Jauh'),
(21, 5, '1 Fasilitas', 1, 'Sangat Sedikit'),
(22, 5, '2 Fasilitas', 2, 'Sedikit'),
(23, 5, '3 Fasilitas', 3, 'Cukup Banyak'),
(24, 5, '4 Fasilitas', 4, 'Banyak'),
(25, 5, '5 Fasilitas', 5, 'Sangat Banyak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif_proyek`
--
ALTER TABLE `alternatif_proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif_proyek`
--
ALTER TABLE `alternatif_proyek`
  MODIFY `id_proyek` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
