-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Sep 2019 pada 18.30
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomor6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `name`
--

CREATE TABLE `name` (
  `id_name` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `id_work` int(11) NOT NULL,
  `id_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `name`
--

INSERT INTO `name` (`id_name`, `name`, `id_work`, `id_salary`) VALUES
(1, 'Bintang', 1, 1),
(2, 'Tasya', 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salary`
--

CREATE TABLE `salary` (
  `id_salary` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `salary`
--

INSERT INTO `salary` (`id_salary`, `salary`) VALUES
(1, 10000000),
(2, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id_work` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `id_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id_work`, `name`, `id_salary`) VALUES
(1, 'Frontend Dev', 1),
(2, 'Backend Dev', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id_name`),
  ADD KEY `id_work` (`id_work`),
  ADD KEY `id_salary` (`id_salary`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id_salary`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id_work`),
  ADD KEY `id_salary` (`id_salary`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `name`
--
ALTER TABLE `name`
  ADD CONSTRAINT `name_ibfk_1` FOREIGN KEY (`id_work`) REFERENCES `work` (`id_work`),
  ADD CONSTRAINT `name_ibfk_2` FOREIGN KEY (`id_salary`) REFERENCES `salary` (`id_salary`);

--
-- Ketidakleluasaan untuk tabel `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`id_salary`) REFERENCES `salary` (`id_salary`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
