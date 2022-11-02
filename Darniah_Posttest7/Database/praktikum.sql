-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 07.27
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_gamis`
--

CREATE TABLE `data_gamis` (
  `Resi` int(11) NOT NULL,
  `Nama_Gamis` varchar(255) NOT NULL,
  `Model_gamis` varchar(255) NOT NULL,
  `Stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_gamis`
--

INSERT INTO `data_gamis` (`Resi`, `Nama_Gamis`, `Model_gamis`, `Stok`) VALUES
(1, 'Kotak-Kotak', 'Ballotelly', '4'),
(2, 'Tali', 'Wolfis', '6'),
(4, 'Balon', 'Polos', '6'),
(5, 'susun', 'Polos', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `nama`, `password`) VALUES
(7, 'rahmi', '$2y$10$JcUT0VTkvaIJLKIEkUALDO31xHDiS/0DRK9Z2okIBbYxshGbs0mfi'),
(8, 'atul', '$2y$10$DGe4ZwLjlk9R4.38UdFzr.vrKlUnuJUY5Ord7ObSUeMg0uaE0kXiu'),
(9, 'atulo', '$2y$10$1RuI85sb0d1Jyzd5WlJY6utI6Ru5bPvyWUMuwV9OlZdas9Gg48iBC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_gamis`
--
ALTER TABLE `data_gamis`
  ADD PRIMARY KEY (`Resi`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_gamis`
--
ALTER TABLE `data_gamis`
  MODIFY `Resi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
