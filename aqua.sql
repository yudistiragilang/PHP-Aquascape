-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Feb 2018 pada 08.05
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aqua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fauna`
--

CREATE TABLE IF NOT EXISTS `fauna` (
`idfauna` int(11) NOT NULL,
  `NamaFauna` varchar(20) NOT NULL,
  `JenisFauna` varchar(15) NOT NULL,
  `KetFauna` text NOT NULL,
  `fotofauna` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `fauna`
--

INSERT INTO `fauna` (`idfauna`, `NamaFauna`, `JenisFauna`, `KetFauna`, `fotofauna`) VALUES
(25, 'Platy Micky Mouse', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'SunsetMickeyMousePlaty.jpg'),
(26, 'Guppy AFR', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'afr.jpg'),
(27, 'AGY Guppy', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'Guppy Import Ikky  (171).jpg'),
(28, 'Platy Sunset', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'platy sunset.jpg'),
(29, 'Platy Sword Tail', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'sword_hifin_red_male.jpg'),
(31, 'Platy Coral', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'platy_red_wag_.jpg'),
(32, 'Guppy Blue Sky', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'Guppy Blue Sky Japan (1).JPG'),
(33, 'Guppy Black Moskow', 'bersahabat', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'moscow-black-guppy.jpg'),
(34, 'Betta Koi', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'cupang koi.jpg'),
(35, 'Betta Black Dragon', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'Plakat Black Dragon.jpg'),
(36, 'Betta Pk Funcy', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'plakat Fancy.jpg'),
(37, 'Betta Halfmoon', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'halfmoon-betta.jpg'),
(38, 'Betta Hf Super Red', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'Betta Super Red.jpg'),
(39, 'Betta CT King', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'king CT.jpg'),
(40, 'Betta Crowtail', 'nakal', 'Micky mouse berwarna merah, pada ekor ada corak hitam seperti kepala micky mouse. hidup pada air ph 7 dan suhu 25-28 celcius.', 'Betta CT.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `flora`
--

CREATE TABLE IF NOT EXISTS `flora` (
`idflora` int(11) NOT NULL,
  `NamaFlora` varchar(30) NOT NULL,
  `JenisFlora` varchar(15) NOT NULL,
  `KetFlora` text NOT NULL,
  `fotoflora` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `flora`
--

INSERT INTO `flora` (`idflora`, `NamaFlora`, `JenisFlora`, `KetFlora`, `fotoflora`) VALUES
(1, 'Cobomba', 'steam', 'Tanaman background dalam aquascape, membutuhkan cahaya high dan inject co2. tanaman mudah tumbuh cepat.', 'cobomba.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hardscape`
--

CREATE TABLE IF NOT EXISTS `hardscape` (
`idhardscape` int(11) NOT NULL,
  `NamaHardscape` varchar(30) NOT NULL,
  `FungsiHardscape` text NOT NULL,
  `fotohardscape` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `hardscape`
--

INSERT INTO `hardscape` (`idhardscape`, `NamaHardscape`, `FungsiHardscape`, `fotohardscape`) VALUES
(5, 'Pasir Malang', 'Pasir silika adalah suatu media yang digunakan sebagai dasar dalam aquascape', 'pasir malang.jpg'),
(11, 'Lava Rock', 'Digunakan sebagai material pembuat tebing atau waterfall.', 'lava rock.jpg'),
(12, 'Batu Fosil', 'Digunakan sebagai material pembuat tebing atau waterfall. batu ini biasanya juga digunakan sebagai batuan iwagumi style.', 'batu fosil.jpg'),
(13, 'Dragon Stone', 'Digunakan sebagai material pembuat tebing atau waterfall.', 'dragon stone.jpg'),
(14, 'Rasmala', 'Kayu ini digunakan sebagai hiasan untuk nature style.', 'rasmala.jpg'),
(15, 'Pupuk Dasar', 'Digunakan sebagai substrat. pupuk dasar biasanya digunakan untuk menanam jenis steam plant.', 'Pupuk_Dasar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapan`
--

CREATE TABLE IF NOT EXISTS `perlengkapan` (
`idperlengkapan` int(11) NOT NULL,
  `NamaPerlengkapan` varchar(30) NOT NULL,
  `FungsiPerlengkapan` text NOT NULL,
  `fotoperlengkapan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `perlengkapan`
--

INSERT INTO `perlengkapan` (`idperlengkapan`, `NamaPerlengkapan`, `FungsiPerlengkapan`, `fotoperlengkapan`) VALUES
(2, 'Filter Hang On', 'Berfungsi sebagai filter atau penjernih air di dalam akuarium. dan juga berguna sebagai pembuat arus.', 'boyu-hang-on.jpg'),
(3, 'Canister', 'Berfungsi sebagai filter atau penjernih air di dalam akuarium. dan juga berguna sebagai pembuat arus.', 'canister.jpg'),
(4, 'Fan ', 'Sebagai Pendingin air dalam aquascape.', 'fan aquascape.jpg'),
(5, 'Difuser', 'Digunakan sebagai suplai co2.', 'difuser c02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
`idsaran` int(11) NOT NULL,
  `namasaran` varchar(30) NOT NULL,
  `saran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Yudhistira Gilang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fauna`
--
ALTER TABLE `fauna`
 ADD PRIMARY KEY (`idfauna`);

--
-- Indexes for table `flora`
--
ALTER TABLE `flora`
 ADD PRIMARY KEY (`idflora`);

--
-- Indexes for table `hardscape`
--
ALTER TABLE `hardscape`
 ADD PRIMARY KEY (`idhardscape`);

--
-- Indexes for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
 ADD PRIMARY KEY (`idperlengkapan`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
 ADD PRIMARY KEY (`idsaran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fauna`
--
ALTER TABLE `fauna`
MODIFY `idfauna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `flora`
--
ALTER TABLE `flora`
MODIFY `idflora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hardscape`
--
ALTER TABLE `hardscape`
MODIFY `idhardscape` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
MODIFY `idperlengkapan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
MODIFY `idsaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
