-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Apr 2023 pada 15.30
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(1, 'G1', 'Isi pikiran dirinya sendiri yang berulang atau bergema dalam kepala (tidak keras)'),
(2, 'G2', 'Isi pikiran asing dari luar masuk kedalam pikiran'),
(3, 'G3', 'Isi pikiran diambil diambil keluar oleh sesuatu dari luar'),
(4, 'G4', 'Isi pikiran tersiar keluar sehingga orang umum mengetahui'),
(5, 'G5', 'Merasa diri dikendalikan oleh suatu kekuatan tertentu dari luar'),
(6, 'G6', 'Merasa diri dipengaruhi oleh suatu kekuatan tertentu dari luar'),
(7, 'G7', 'Merasa diri tidak berdaya dan pasrah terhadap suatu kekuatan dari luar'),
(8, 'G8', 'Merasa diri memiliki mukzijat'),
(9, 'G9', 'Berhalusinasi mendengar suara komentar terus menerus terhadap perilaku diri '),
(10, 'G10', 'Mendengar jenis suara halusinasi lain yangberasal dari salah satu bagian tubuh '),
(11, 'G11', 'Meyakini bahwa diri bisa berbicara dengan mahluk dari dunia lain'),
(12, 'G12', 'Meyakini bahwa diri bisa mengendalikan cuaca'),
(13, 'G13', 'Arus pikiran terputus yang mengakibatkan pembicaraan yang tidak relevan '),
(14, 'G14', 'Merasa gaduh gelisah'),
(15, 'G15', 'Sikap yang sangat apatis'),
(16, 'G16', 'Respons emosional yang menumpul tau tidak wajar'),
(17, 'G17', 'Menarik diri dari pergaulan soSial'),
(18, 'G18', 'Menurunnya kinerja social'),
(19, 'G19', 'Halusinasi suara-suara yang mengancam atau memberi perintah'),
(20, 'G20', 'Halusinasi suara-suara peluit atau mendengung atau bunya tawa'),
(21, 'G21', 'Halusinasi pembauan atau pengecapan rasa atau bersifat seksual atau lain lain perasaan tubuh'),
(22, 'G22', 'Merasa diri dikejar kejar'),
(23, 'G23', 'Merasa diri ada ada dorongan kehendak atau pembicaraan'),
(24, 'G24', 'Pemalu dan senang menyendiri'),
(25, 'G25', 'Hampa tujuan dan hampa perasaan'),
(26, 'G26', 'Cekikan atau tertawa menyeringai yang tidak wajar'),
(27, 'G27', 'Senyum sendiri'),
(28, 'G28', 'Sikap tinggi hati yang tidak wajar'),
(29, 'G29', 'Mengulang ungkapan kata kata yang tidak wajar'),
(30, 'G30', 'Perilaku suka pranks yang tidak wajar'),
(31, 'G31', 'Pembicaraan tak menentu dan alur bicara kacau'),
(32, 'G32', 'Penurunan kesadaran terhadap reaktivitas lingkungan'),
(33, 'G33', 'Kemampuan berbicara hilang'),
(34, 'G34', 'Peningkatan aktivitas mental dan pergerakan tubuh susah dikendalikan'),
(35, 'G35', 'Menampilkan posisi tubuh yang aneh atau tidak wajar'),
(36, 'G36', 'Melawan semua perintah tanpa motif yang jelas'),
(37, 'G37', 'Mempertahankan posisi tubuh yang kaku'),
(38, 'G38', 'Patuh secara otomatis terhadap perintah'),
(39, 'G39', 'Mengulang kata kata satu kalimat'),
(40, 'G40', 'Telah menderita skizofrenia selama 12 bulan'),
(41, 'G41', 'Gejala - gejala depresi menonjol selama 2 minggu'),
(42, 'G42', 'Perlambatan psikomotor'),
(43, 'G43', 'Aktivitas menurun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`) VALUES
(1, 'P1', 'Skizofrenia Paranoid', 'Gangguan psikotik yang merusak dan dapat melibatkan gangguan khas dalam berpikir atau delusi, presepsi berbicara ( halusinasi ), emosi maupun cara berperilaku.'),
(2, 'P2', 'Skizofrenia Hebrefenik', 'Perilaku yang khas, regresi, primitif, afek tidak sesuai dengan karakteristik  pada umumnya, wajah dungu, tertawa aneh dan menangis, lalu menarik diri secara ekstrem.'),
(3, 'P3', 'Skizofrenia Katatonik', 'Umumnya didahului dengan stress emosional. Perilaku tidak menentu Penderita dapat sangat aktif, gelisah, ataupun diam membisu secara tiba - tiba.'),
(4, 'P4', 'Skizofrenia Simplek', 'Lambannya perkembangan pada penderita namun bersifat progresif dari gejala negatif skizofrenia.Ditandai dengan kedangkalan emosi dan rendahnya motivasi atau kemauan pada penderita.'),
(5, 'P5', 'Skizofrenia Residual','Keadaan kronis dari penderita skizofrenia. Gejala psikotis tampak sangat jelas terlihat dan berkembangan ke arah negatif.'),
(6, 'P6', 'Depresi Pasca-Skizofrenia','Depresi yang muncul pasca skizofrenia terlewati.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `id_gejala` int(11) DEFAULT NULL,
  `id_penyakit` int(11) DEFAULT NULL,
  `belief` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `id_gejala`, `id_penyakit`, `belief`) VALUES
(1, 1, 1, 0.85),
(2, 1, 2, 0.85),
(3, 1, 3, 0.85),
(4, 1, 4, 0.85),
(5, 1, 5, 0.85),
(6, 1, 6, 0.85),
(7, 2, 1, 0.85),
(8, 2, 3, 0.85),
(9, 3, 1, 0.5),
(10, 4, 1, 0.5),
(11, 5, 3, 0.85),
(12, 6, 1, 0.5),
(13, 6, 4, 0.5),
(14, 7, 1, 0.5),
(15, 7, 3, 0.5),
(16, 7, 4, 0.5),
(17, 8, 1, 0.25),
(18, 9, 1, 0.85),
(19, 9, 3, 0.85),
(20, 10, 1, 0.5),
(21, 10, 2, 0.5),
(22, 10, 3, 0.5),
(23, 10, 4, 0.5),
(24, 10, 5, 0.5),
(25, 10, 6, 0.5),
(26, 11, 2, 0.5),
(27, 11, 4, 0.5),
(28, 12, 2, 0.5),
(29, 12, 4, 0.5),
(30, 13, 2, 0.5),
(31, 13, 4, 0.5),
(32, 14, 1, 0.85),
(33, 14, 2, 0.85),
(34, 14, 3, 0.85),
(35, 15, 2, 0.5),
(36, 15, 3, 0.5),
(37, 16, 2, 0.5),
(38, 16, 4, 0.5),
(39, 16, 6, 0.5),
(40, 17, 2, 0.85),
(41, 17, 4, 0.85),
(42, 17, 5, 0.85),
(43, 17, 6, 0.85),
(44, 18, 1, 0.5),
(45, 18, 2, 0.5),
(46, 18, 3, 0.5),
(47, 18, 4, 0.5),
(48, 18, 5, 0.5),
(49, 18, 6, 0.5),
(50, 19, 1, 0.85),
(51, 20, 1, 0.5),
(52, 21, 1, 0.85),
(53, 22, 1, 1),
(54, 23, 1, 1),
(55, 24, 2, 0.5),
(56, 24, 4, 0.5),
(57, 24, 6, 0.5),
(58, 25, 2, 0.85),
(59, 25, 6, 0.85),
(60, 26, 2, 0.85),
(61, 27, 2, 0.85),
(62, 27, 4, 0.85),
(63, 27, 6, 0.85),
(64, 28, 2, 0.85),
(65, 29, 2, 0.85),
(66, 29, 4, 0.85),
(67, 30, 2, 0.85),
(68, 31, 2, 0.5),
(69, 31, 4, 0.5),
(70, 32, 2, 0.5),
(71, 32, 3, 0.5),
(72, 33, 3, 0.85),
(73, 33, 4, 0.85),
(74, 33, 6, 0.85),
(75, 34, 3, 0.85),
(76, 35, 3, 0.85),
(77, 36, 3, 0.85),
(78, 37, 3, 0.85),
(79, 38, 3, 0.85),
(80, 39, 2, 0.85),
(81, 39, 3, 0.85),
(82, 40, 5, 0.85),
(83, 41, 5, 0.85),
(84, 42, 1, 0.85),
(85, 42, 3, 0.85),
(86, 42, 5, 0.85),
(87, 42, 6, 0.85),
(88, 43, 1, 0.85),
(89, 43, 3, 0.85),
(90, 43, 5, 0.85),
(91, 43, 6, 0.85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_rules`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
