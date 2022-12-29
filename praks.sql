-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2022 pada 17.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `praks`
--

CREATE TABLE `praks` (
  `id` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position` varchar(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `praks`
--

INSERT INTO `praks` (`id`, `name`, `email`, `address`, `gender`, `position`, `status`) VALUES
('0', 'sssss@gmail.com', 'sssssssssss', 'male', 'eeeeeeeeee', 'fulltime', 'Submit'),
('aaaaaaaaaaa', 'aaaaaa', 'aaaaa', 'male', 'aaaaaaaaaa', 'fulltime', 'Submit'),
('aldo', 'aldo@gmail.com', 'juraganan 1 no.43', 'male', 'developer', 'fulltime', 'Submit'),
('romi', 'romi@gmail.com', 'jalan cemara', 'male', 'web', 'parttime', 'Submit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `praks`
--
ALTER TABLE `praks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`name`,`email`,`address`,`gender`,`position`,`status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
