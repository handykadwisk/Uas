-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 10:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjamanbpjs`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `stock` int(128) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stock`, `status`) VALUES
(1, 'laptop', 1, 1),
(13, 'infokus', 1, 0),
(14, 'komputer', 1, 0),
(15, 'layar proyektor', 1, 0),
(16, 'pointer', 1, 1),
(17, 'kamera', 1, 1),
(18, 'handycam', 1, 1),
(19, 'tripot', 1, 1),
(20, 'TOA', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tr_pinjam`
--

CREATE TABLE `tr_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `npp` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_pinjam`
--

INSERT INTO `tr_pinjam` (`id_pinjam`, `npp`, `name`, `bidang`, `id_barang`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(19, 1222, 'Handyka Dwiska Putra', 'sdmukp', 17, '2020-11-17', '2020-11-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `npp` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `nomor_hp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `npp`, `name`, `bidang`, `nomor_hp`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(1, 0, 'admin', '', '0', 'admin@gmail.com', 'default.jpg', '$2y$10$PHyD2C.h6BD2CLQy1K4xD.vYhX114z6SnhaB.7bCXZf.sGBSaka66', 1, 1, '0000-00-00'),
(15, 1, 'admin1', 'SDMUKP', '088888888888', 'admin1@gmail.com', 'default.jpg', '$2y$10$o.Zta04E0VlR5HkGNgmb5uwsB3TgB0K3GOpvheMv/ko/b0b0JIIMa', 1, 1, '0000-00-00'),
(16, 2, 'admin2', 'SDMUKP', '08888888888', 'admin2@gmail.com', 'default.jpg', '$2y$10$.aYkEYKZrD7aQVWgx.EyHeBXCEwW9Gmn51.0oL2BgDVjp6HL7HAVS', 1, 1, '0000-00-00'),
(17, 3125, 'Febri Yanti', '', '', '', 'default.jpg', '$2y$10$XPsoT/bGQwPJEinFheXgXueU0srQPy7fbru2G6FBnUz/.qy71xqM6', 2, 1, '0000-00-00'),
(18, 2874, 'Indra Jaya', '', '', '', 'default.jpg', '$2y$10$NEvXxDp3/uGcCOHQqmcqQOWcPcvlzq8/Q16rhUi7biOYacZE73XrG', 2, 1, '0000-00-00'),
(19, 3604, 'Fristy Lahira Defivenni', '', '', '', 'default.jpg', '$2y$10$oEe68xTbJfHWjZN4veZl/ON3kg/6DeDK1LScmaE/afHI3BD7ZXuOq', 2, 1, '0000-00-00'),
(20, 3059, 'Nelrahmi', '', '', '', 'default.jpg', '$2y$10$xqp6efPENxBRBDIT43KZ6OdJ5ze1WMvjpmFlY24KvQmF1MbkhKsCC', 2, 1, '0000-00-00'),
(21, 3888, 'Ina Mutia Farina', '', '', '', 'default.jpg', '$2y$10$98fHqDaKDhplpvEq/w4lm.X.xYrd7OATSoO74pPKU4eGki3a2QoGm', 2, 1, '0000-00-00'),
(22, 5689, 'Nining Indira Khurokina', '', '', '', 'default.jpg', '$2y$10$ynn0/YgFw7h4qlDY/D395OtAkcvSIAeDgeuoZ7fdtLXuWUJxpZF/a', 2, 1, '0000-00-00'),
(23, 3013, 'Atmi Mesra', '', '', '', 'default.jpg', '$2y$10$r74w7tG4gj3cDWQS1v4OW.Wwiu6ZrisfnHDvcgKmgR8Aep8m8kwA6', 2, 1, '0000-00-00'),
(24, 3271, 'Erwin Fadillah', '', '', '', 'default.jpg', '$2y$10$UQCVEXPcrQaCBdG0hnSwcOCkAF.8oPFd.wjUXzQCc38AWJRfM8kq.', 2, 1, '0000-00-00'),
(25, 6992, 'Hernawan Priyastomo', '', '', '', 'default.jpg', '$2y$10$BMDan5jCVj67kfKr25Q0meR3sV4gdfL.7JsqHK7pFHICygf1OU9L6', 2, 1, '0000-00-00'),
(26, 4012, 'Atvirnalis', '', '', '', 'default.jpg', '$2y$10$TLO6MLAZOc1Jyb/ipXhM2exeHbenovABNgNjnTJfNvCwsvlaLp0xa', 2, 1, '0000-00-00'),
(27, 4503, 'Latifa Trisna', '', '', '', 'default.jpg', '$2y$10$wmTVN33q4dNbnrj8Iyx.n.SorSc60uLu4h4CAYVUjlIGOrHHjKNfO', 2, 1, '0000-00-00'),
(28, 6225, 'Alfadjri Salman', '', '', '', 'default.jpg', '$2y$10$o3OcsaJBavW8G1fYUNwqseYKAIDqpXKAgKqKyNHRkcb3FakvPQ.HO', 2, 1, '0000-00-00'),
(29, 6602, 'Yoza Febriadi', '', '', '', 'default.jpg', '$2y$10$efGguphV4e6MSRzNf38MYu7QpeuTsUtb0ff.ZJ71EyR0ErxyfYw6S', 2, 1, '0000-00-00'),
(30, 6587, 'Ade Somantri', '', '', '', 'default.jpg', '$2y$10$05W/Alf70FAkian00TNqb.ynLqnyVHynk4dBtFPbcn2jvic.K/QEy', 2, 1, '0000-00-00'),
(31, 2870, 'Yulia Sabrina', '', '', '', 'default.jpg', '$2y$10$i3mpO3ub3Nl2NQ93W.Fw/O6BTdf2RdkTdSZ.WhexVCHcpDcaCztlO', 2, 1, '0000-00-00'),
(32, 4169, 'Dedi Hamdani', '', '', '', 'default.jpg', '$2y$10$FSbORQYV4mY7a.aXtDVPa..T944y/kI2iHSfpuj456bL4pLVPTSai', 2, 1, '0000-00-00'),
(33, 6232, 'Lidia Nofita', '', '', '', 'default.jpg', '$2y$10$yG1S6TAs1C4UNMERKB8Jwe44syhdHmeuw7DRMuIsoHbbdOY3aMdby', 2, 1, '0000-00-00'),
(34, 5671, 'Anggia Sari', '', '', '', 'default.jpg', '$2y$10$ZFTr10BFrw1yDDE9MG2vWe.zGJ7XGpPl0BZ3bXbTNhPGHGp6FCARi', 2, 1, '0000-00-00'),
(35, 6226, 'Wirnadesi', '', '', '', 'default.jpg', '$2y$10$RHqT..3YNOPjsykSQe8kR.a1EyMSf5PGIT8ns2LbRBkVhiplay29O', 2, 1, '0000-00-00'),
(36, 6642, 'Fitria May Yola', '', '', '', 'default.jpg', '$2y$10$nvsywY9nSdSnJkf5s/LoOufelECuT15a23WcvoxDx84SoTIiIFvK6', 2, 1, '0000-00-00'),
(37, 8561, 'Indah Suryani Afuar', '', '', '', 'default.jpg', '$2y$10$NpUiCAsdcQdAq6Kj7b3rC.Fs57pZMXhLXE4pm66nTwvSNwup6GbQm', 2, 1, '0000-00-00'),
(38, 8556, 'Rahmat Kurniawan', '', '', '', 'default.jpg', '$2y$10$2oGTQ6xqfyUKrsBGi6stFu5cFWuez145oaFV1qWLQWx4Ix92bT64q', 2, 1, '0000-00-00'),
(39, 9304, 'Rian Aulia Putra', '', '', '', 'default.jpg', '$2y$10$QQY9QtLMyuHNb8C42zrxt.nzSczX.5H.hem6Q3F0C4FQvXGzA0JPW', 2, 1, '0000-00-00'),
(40, 8586, 'Yomi Gunawan', '', '', '', 'default.jpg', '$2y$10$Z5FLoL4ubFEAANeBbyO3d.mP4Aze9XI2gadFgiHaCY0yB7OOmKghm', 2, 1, '0000-00-00'),
(41, 8612, 'Nanda Eka Puspita', '', '', '', 'default.jpg', '$2y$10$R53ewQBYDWa6a.wDUpg9e.aW3JbUUX6m713eXNGNIsm6yNxHyr6mG', 2, 1, '0000-00-00'),
(42, 4934, 'Martina Murtilova', '', '', '', 'default.jpg', '$2y$10$7fdSV/0XcCPmt1GOprU4eu.SLHnvb02pI.3khDOsk.OydA52Pk566', 2, 1, '0000-00-00'),
(43, 2881, 'Mardiyanti', '', '', '', 'default.jpg', '$2y$10$x8/ABXzOt5BzIyd4Z9d.Ie0h/M5B/5lrO7dtLuamHQ1ltlVTfvByO', 2, 1, '0000-00-00'),
(44, 9393, 'Riska Edya Nelva', '', '', '', 'default.jpg', '$2y$10$5kAmpydflSoMAdIu8bZk3.PWnQhoSwAf5BZsRau9P0bCa/oSI.yVW', 2, 1, '0000-00-00'),
(45, 9398, 'Wardatil Hayati', '', '', '', 'default.jpg', '$2y$10$df3H4TXlWW/YkgzPdki00u8DksxAYW2tx6Nqi5TnHf1iHJm2sRCZK', 2, 1, '0000-00-00'),
(46, 6636, 'Riski Gusfia', '', '', '', 'default.jpg', '$2y$10$kANkGyvWj9sQ.NxEkNh.gel5PBEr/TOtKJmlu2xdRT.iOo4uvLe3i', 2, 1, '0000-00-00'),
(47, 7784, 'Resa Rahmawati', '', '', '', 'default.jpg', '$2y$10$9ciFBpsxxTABU7PV.YJ7luSRT8qC9j9iQZ8W0p9lw278XoOc4Rjdi', 2, 1, '0000-00-00'),
(48, 6624, 'Fiyola Siska Putri', '', '', '', 'default.jpg', '$2y$10$l6gWA4c4psY/WcuzB3o4EeYhf1C0QVYgWa9zsIkpFSj4MF6PQj1b2', 2, 1, '0000-00-00'),
(49, 6593, 'Hikmah Rizki Lainatus Shifa', '', '', '', 'default.jpg', '$2y$10$IkSL9wC19zoebt6dypipw.e0QfzTYo4H2QY5RJ0huA3SeB3hXPxpW', 2, 1, '0000-00-00'),
(50, 2582, 'Hengki Irawan', '', '', '', 'default.jpg', '$2y$10$tpZ9f9hCZ/qQhyeSI0weE.1oissTSp4rk9J0EXgAzYtk1ey9ey1CC', 2, 1, '0000-00-00'),
(51, 6618, 'Armaini', '', '', '', 'default.jpg', '$2y$10$XJF9ZuvNVlds4OzSsnpE5eYxhZpLUzIga18fZ6qLoPk5lWc38Te5e', 2, 1, '0000-00-00'),
(52, 6650, 'Yesyi Shophia', '', '', '', 'default.jpg', '$2y$10$dyjVmBMs8UkclGUHRgXh7eQbKR6tuDWQK.kjBT28WQdhvLhCqQBn.', 2, 1, '0000-00-00'),
(53, 9823, 'Wellyngthon Oktavianus Sijabat', '', '', '', 'default.jpg', '$2y$10$UwamwyZFS7RMz6l8S5QAnuZindXVQCk6NrO5miGC5xc1D3VUZ11DS', 2, 1, '0000-00-00'),
(54, 191284, 'Yoed Fauzi Hasda', '', '', '', 'default.jpg', '$2y$10$JrvEaesKibvpnuLY6PB7wuJxjjz0ia1CuF3A.cVR6febhteXorX6m', 2, 1, '0000-00-00'),
(55, 190052, 'Mila Rosa Purnomo', '', '', '', 'default.jpg', '$2y$10$KHMMKnx0YmiS19WrUfjy2evl5YNOjWgnH0/ZDemIIWlM8KmaX.x/2', 2, 1, '0000-00-00'),
(56, 190059, 'Indah Kurnia Marvi', '', '', '', 'default.jpg', '$2y$10$/FtIEfWuEaKwGAvybjx.DeIm60clxwMzt4nA3K4q5gj1RPvM1cfnK', 2, 1, '0000-00-00'),
(57, 191111, 'Putri Utami Wulandari', '', '', '', 'default.jpg', '$2y$10$Mg0ODDWvnanahNq4HFjFVOdkYoNqUYDrKopF86kUwgahVn0A8Z/vS', 2, 1, '0000-00-00'),
(58, 191112, 'Viony Altha', '', '', '', 'default.jpg', '$2y$10$E/FNE2GNqA063Mu8BmZsZONtRdLsbfD7bgCrMHjiDwfGj18f4N53y', 2, 1, '0000-00-00'),
(59, 200554, 'Atika Syahira', '', '', '', 'default.jpg', '$2y$10$ucB/UNydyw7kkYDInaEPfOHdFYOARLrKlUqZ7Ad1rxoRqme3wMpKa', 2, 1, '0000-00-00'),
(60, 200505, 'Dela Nabila Kasnur', '', '', '', 'default.jpg', '$2y$10$RePjYRgO93XqGxUw9a7Lh.Hsbrg70DBN.7QQh8hfqTeQLuh8PKzce', 2, 1, '0000-00-00'),
(61, 200533, 'Kevien Keggin', '', '', '', 'default.jpg', '$2y$10$3lo6nKf9Al/.44bh/C.UVOd0DlLCL0F.W.3YykEWCcjwz02Rf2IM.', 2, 1, '0000-00-00'),
(62, 201265, 'Qorry Aulia Yudha', '', '', '', 'default.jpg', '$2y$10$zebF0t4NJkXCXchm4ZLzf.wrk1E21piSF7JSSj08Ht0TcN8a20Iei', 2, 1, '0000-00-00'),
(63, 1222, 'Handyka Dwiska Putra', '', '', '', 'default.jpg', '$2y$10$QKTfMhfB1qbQPp6rXqT/2eRAwGUKPgxjwsATS.4FMuFTXSmKW4K3u', 2, 1, '0000-00-00'),
(64, 12, 'kelvin', '', '', '', 'default.jpg', '$2y$10$p3wCcJnLi.3VH5H4VYgGh.MqyzQb2I/gSl9Wh3GeMk7SAw3oyXu9C', 2, 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tr_pinjam`
--
ALTER TABLE `tr_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tr_pinjam`
--
ALTER TABLE `tr_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
