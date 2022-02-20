-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 08:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dialog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_rilis` date NOT NULL,
  `tgl_tayang` date NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `id_kategori` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `tgl_rilis`, `tgl_tayang`, `sutradara`, `gambar`, `review`, `id_kategori`) VALUES
(2, 'The social network', '2018-10-30', '2018-10-31', 'Mark Zukerberg', 'pic_film_1540991019_ss-koding.png', 'aasd', 4),
(6, 'Harry Potter and the Sorcerers', '2018-10-15', '2018-10-12', 'J.K ROWLING', 'pic_film_1540992529_overAna.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis hic, repellat nisi no-bis neque, fugit odit aspernatur accusantium a tempore alias ex tempora. Nostrum cumque voluptates distinctio cupiditate vitae iure.', 3),
(8, 'The little thing called love', '2018-11-07', '2018-11-23', 'J.K INSANE', 'pic_film_1541047000_overAna.png', 'asdasd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(3, 'Sci-Fi'),
(4, 'Actions'),
(6, 'Magic'),
(10, 'Healing');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `foto`, `email`, `id_user`) VALUES
(2, 'ahmad haidar al baqir', '', 'ahmadhdr.22@gmail.com', 3),
(11, 'Budi setiawan', '', 'pic_profile_ujang@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id_rate` int(3) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `id_film` int(3) NOT NULL,
  `id_pengunjung` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id_rate`, `status`, `id_film`, `id_pengunjung`) VALUES
(15, '1', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `request_film`
--

CREATE TABLE `request_film` (
  `id_request_film` int(11) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `id_pengunjung` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_film`
--

INSERT INTO `request_film` (`id_request_film`, `judul_film`, `id_pengunjung`) VALUES
(1, 'A Little Thing Callled Love', 2);

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id_trailer` int(3) NOT NULL,
  `video` varchar(155) NOT NULL,
  `id_film` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id_trailer`, `video`, `id_film`) VALUES
(8, 'video_trailer_1541055698_mov_bbb.mp4', 6),
(9, 'video_trailer_1541055931_mov_bbb.mp4', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','pengunjung') NOT NULL,
  `online` varchar(5) NOT NULL,
  `terakhir_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `online`, `terakhir_login`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 'true', '2018-10-31 01:20:37'),
(3, 'haidar', '09b8dae41c023a7b3419a8152c981a57', 'pengunjung', 'true', '2018-10-31 01:20:37'),
(4, 'budi', '9c5fa085ce256c7c598f6710584ab25d', 'pengunjung', 'true', '2018-10-31 01:20:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id_rate`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_pengunjung` (`id_pengunjung`),
  ADD KEY `id_film_2` (`id_film`);

--
-- Indexes for table `request_film`
--
ALTER TABLE `request_film`
  ADD PRIMARY KEY (`id_request_film`),
  ADD KEY `id_pengunjung` (`id_pengunjung`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id_trailer`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id_rate` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `request_film`
--
ALTER TABLE `request_film`
  MODIFY `id_request_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id_trailer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_film`
--
ALTER TABLE `request_film`
  ADD CONSTRAINT `request_film_ibfk_1` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trailer`
--
ALTER TABLE `trailer`
  ADD CONSTRAINT `trailer_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
