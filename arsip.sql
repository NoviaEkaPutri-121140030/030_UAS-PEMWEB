-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 20.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(10) NOT NULL,
  `judul_buku` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` date DEFAULT NULL,
  `jumlah_halaman` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`, `jumlah_halaman`) VALUES
(101, 'The Hobbit', 'J.R.R. Tolkien', 'George Allen & Unwin', '1937-09-21', 310),
(111, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Scribner', '1925-05-10', 218),
(222, 'To Kill a Mockingbird', 'Harper Lee', 'J.B. Lippincott & Co.', '1960-07-11', 281),
(333, '1984', 'George Orwell', 'Secker & Warburg', '1949-06-08', 328),
(444, 'Pride and Prejudice', 'Jane Austen', 'T. Egerton, Whitehall', '1813-01-28', 279),
(555, 'The Catcher in the Rye', 'J.D. Salinger', 'Little, Brown and Company', '1951-07-16', 277),
(666, 'One Hundred Years of Solitude', 'Gabriel Garcia Marquez', 'Editorial Sudamericana', '1967-05-30', 417),
(777, 'Moby-Dick', 'Herman Melville', 'Harper & Brothers', '1851-10-18', 625),
(888, 'Brave New World', 'Aldous Huxley', 'Chatto & Windus', '1932-06-22', 311),
(999, 'The Lord of the Rings', 'J.R.R. Tolkien', 'George Allen & Unwin', '1954-07-29', 1178);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('aaa', 'aaa@gmail.com', '$2y$10$J5aaILIRj7s92htbwPa3oONCoEt3Nr0owq2y6/iI7XJz8QRgeD3ca'),
('asas', 'asasa@gmail.com', '$2y$10$aCBW6WyAb25vsL.z.xCg7e8DlFXAb9vyVuHifhxoHw8piPClN4m/e');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
