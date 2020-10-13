-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 02:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadogadoid`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama`, `keterangan`, `foto`) VALUES
(1, 'Vain Glory', 'Banner 1', 'vainglory1.jpg'),
(2, 'Dota 2', 'Banner 2', 'dota2.jpg'),
(3, 'PUBG', 'Banner 3', 'pubg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` int(10) NOT NULL,
  `nama_game` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `developer` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `realease` date NOT NULL,
  `tag` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `foto`, `keterangan`, `developer`, `publisher`, `realease`, `tag`, `rating`) VALUES
(6, 'Fortnite', 'fortnite.jpg', 'Fortnite adalah sebuah permainan video tahun 2017 yang dikembangkan oleh Farga Corporation yang dirilis sebagai paket perangkat lunak terpisah yang menyajikan berbagai mode permainan', 'Epic Games Poland', 'Epic Games', '2020-08-10', 'Fortnite', 'Mature'),
(7, 'Animal Crossing', 'crossing.jpg', 'Animal Crossing, adalah sebuah serial permainan video simulasi komunitas yang dikembangkan dan dipublikasikan oleh Nintendo, di mana pemain manusia tinggal di sebuah desa yang ditinggali oleh hewan-hewan antropomorfik, yang melakukan berbagai kegiatan yang meliputi memancing, menangkat kumbang, dll.', 'Nintendo', 'Nintendo', '2020-08-10', 'Crossing', 'Mature'),
(8, 'Super Smash Bros', 'smashbros.jpg', 'Super Smash Bros., yang dikenal di Jepang dengan sebutan Dairant? Smash Brothers, adalah sebuah serial permainan bertarung crossover yang dipublikasikan oleh Nintendo, yang utamanya menampilkan karakter-karakter dari waralaba yang didirikan pada sistemnya. Seluruh enam permainan disutradarai oleh Masahiro Sakurai.', 'Sora Ltd, Nintendo', 'Nintendo', '2020-08-12', 'smashbros', 'Mature'),
(9, 'The Legend of Zelda', 'zelda.jpg', 'The Hyrule Fantasy: The Legend of Zelda adalah suatu permainan petualangan yang didesain oleh Shigeru Miyamoto dan dikembangkan dan dirilis oleh Nintendo.', 'Nintendo', 'Nintendo', '2020-08-10', 'zelda', 'Mature'),
(10, 'The Legend of Zelda', 'zelda.jpg', 'The Hyrule Fantasy: The Legend of Zelda adalah suatu permainan petualangan yang didesain oleh Shigeru Miyamoto dan dikembangkan dan dirilis oleh Nintendo.', 'Nintendo', 'Nintendo', '2020-08-19', 'zelda', 'Mature'),
(11, 'Animal Crossing', 'crossing.jpg', 'Animal Crossing, adalah sebuah serial permainan video simulasi komunitas yang dikembangkan dan dipublikasikan oleh Nintendo, di mana pemain manusia tinggal di sebuah desa yang ditinggali oleh hewan-hewan antropomorfik, yang melakukan berbagai kegiatan yang meliputi memancing, menangkat kumbang, dll.', 'Nintendo', 'Nintendo', '2020-08-02', 'Crossing', 'Mature'),
(12, 'Super Smash Bros', 'smashbros.jpg', 'Super Smash Bros., yang dikenal di Jepang dengan sebutan Dairant? Smash Brothers, adalah sebuah serial permainan bertarung crossover yang dipublikasikan oleh Nintendo, yang utamanya menampilkan karakter-karakter dari waralaba yang didirikan pada sistemnya. Seluruh enam permainan disutradarai oleh Masahiro Sakurai.', 'Nintendo', 'Nintendo', '2020-08-07', 'smashbros', 'Mature'),
(13, 'Fortnite', 'fortnite.jpg', 'Fortnite adalah sebuah permainan video tahun 2017 yang dikembangkan oleh Farga Corporation yang dirilis sebagai paket perangkat lunak terpisah yang menyajikan berbagai mode permainan', 'Epic Games Poland', 'Epic Games', '2020-08-04', 'Fortnite', 'Mature');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_game` int(10) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `id_user`, `id_game`, `komentar`, `tanggal`) VALUES
(2, 4, 6, ' vch dj dieg geigicgeigci geicg ieg cigeicgig cig eicgigcigeicg ieg cigieg cig cg e gcig e cge', '2020-08-11'),
(3, 2, 6, 'komentarku yes', '2020-08-11'),
(4, 2, 6, 'Komentarku kedua', '2020-08-11'),
(5, 4, 7, 'woke', '2020-10-13'),
(6, 5, 13, 'woy', '2020-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `new_game`
--

CREATE TABLE `new_game` (
  `id_ngame` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_game`
--

INSERT INTO `new_game` (`id_ngame`, `nama`, `foto`) VALUES
(1, 'Vain Glory', 'vainglory1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id_spek` int(10) NOT NULL,
  `id_game` int(10) NOT NULL,
  `os_min` varchar(50) NOT NULL,
  `processor_min` varchar(50) NOT NULL,
  `memori_min` varchar(50) NOT NULL,
  `storage_min` varchar(50) NOT NULL,
  `graphic_min` varchar(50) NOT NULL,
  `os_reco` varchar(50) NOT NULL,
  `processor_reco` varchar(50) NOT NULL,
  `memori_reco` varchar(50) NOT NULL,
  `storage_reco` varchar(50) NOT NULL,
  `graphic_reco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesifikasi`
--

INSERT INTO `spesifikasi` (`id_spek`, `id_game`, `os_min`, `processor_min`, `memori_min`, `storage_min`, `graphic_min`, `os_reco`, `processor_reco`, `memori_reco`, `storage_reco`, `graphic_reco`) VALUES
(1, 6, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(2, 7, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(3, 11, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(4, 8, 'tes', 'test', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(5, 12, 'tes', 'tes', 'test', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(6, 9, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(7, 10, 'tes', 'tes', 'tes', 'test', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
(8, 13, 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `suka`
--

CREATE TABLE `suka` (
  `id_suka` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_game` int(10) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suka`
--

INSERT INTO `suka` (`id_suka`, `id_user`, `id_game`, `status`) VALUES
(13, 4, 6, '1'),
(15, 2, 6, '1'),
(18, 4, 8, '0'),
(19, 4, 11, '1'),
(21, 5, 6, '1'),
(22, 5, 12, '1'),
(23, 5, 13, '1'),
(24, 5, 11, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `role`) VALUES
(1, 'Septian David', 'ibibi@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Chan', 'chan@gmail.com', 'chan', '26c322652770620e64ac90682eb6504c', 'user'),
(3, 'test', 'test@gmail.com', 'test', '098f6bcd4621d373cade4e832627b4f6', 'user'),
(4, 'Muhammad Izza Lutfi', 'izzalutfi045@gmail.com', 'izza', 'cdb0b6889f4def26f43951b2d5b7a9e3', 'user'),
(5, 'tes', 'test@gmail.com', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `new_game`
--
ALTER TABLE `new_game`
  ADD PRIMARY KEY (`id_ngame`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id_spek`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `suka`
--
ALTER TABLE `suka`
  ADD PRIMARY KEY (`id_suka`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id_game` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_game`
--
ALTER TABLE `new_game`
  MODIFY `id_ngame` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  MODIFY `id_spek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suka`
--
ALTER TABLE `suka`
  MODIFY `id_suka` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD CONSTRAINT `spesifikasi_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suka`
--
ALTER TABLE `suka`
  ADD CONSTRAINT `suka_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suka_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
