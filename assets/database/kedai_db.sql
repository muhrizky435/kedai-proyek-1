-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 03.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedai_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_masakan`
--

CREATE TABLE `kategori_masakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_masakan`
--

INSERT INTO `kategori_masakan` (`id`, `nama`) VALUES
(1, 'Italian Food'),
(2, 'Japanese Food'),
(3, 'Breakfast'),
(4, 'Snack'),
(5, 'Italian Food'),
(6, 'Chinese Food');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masakan`
--

CREATE TABLE `masakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(7) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masakan`
--

INSERT INTO `masakan` (`id`, `nama`, `id_kategori`, `harga`, `gambar`) VALUES
(1, 'Roti Bakar', 3, 10000, 'background_food_breakfast_83059_800x600.jpg'),
(2, 'Molen', 4, 5000, 'croissant_cakes_food_106664_800x600.jpg'),
(3, 'Roti Bakar India', 3, 10000, 'food_table_cafe_snack_sauce_coca_43756_800x600.jpg'),
(4, 'Pizza', 5, 25000, 'pizza_pastry_appetizing_104513_800x600.jpg'),
(5, 'Kwetiau', 6, 30000, 'meat_food_salad_dish_appetizing_70012_800x600.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meja`
--

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `no_meja` int(3) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `meja`
--

INSERT INTO `meja` (`id`, `no_meja`, `jumlah_kursi`, `status`) VALUES
(1, 1, 4, '1'),
(3, 2, 5, '0'),
(4, 3, 2, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ordermeja`
--

CREATE TABLE `ordermeja` (
  `id` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ordermeja`
--

INSERT INTO `ordermeja` (`id`, `no_meja`, `tanggal`, `keterangan`) VALUES
(1, 1, '2020-03-30', 'Tidak Ada'),
(2, 4, '2020-03-31', 'Dinner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`nama`, `alamat`) VALUES
('Restoran', 'Jln Raya Timur Wanadadi, Banjarnegara, Jawa Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$NYgbnscO0dm7Lfxkk.t3wendlzK21JKAEkb5mm7gQV7SW2hSBAT.y', NULL),
(5, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `masakan` varchar(100) NOT NULL,
  `total` varchar(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `masakan`, `total`, `no_meja`, `tanggal`, `harga`) VALUES
(1, 'Molen,Pizza', '4,1', 1, '2020-03-31', '5000,25000'),
(2, 'Molen,Kwetiau', '2,1', 3, '2020-03-31', '5000,30000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_masakan`
--
ALTER TABLE `kategori_masakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_meja` (`no_meja`);

--
-- Indeks untuk tabel `ordermeja`
--
ALTER TABLE `ordermeja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_masakan`
--
ALTER TABLE `kategori_masakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `masakan`
--
ALTER TABLE `masakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ordermeja`
--
ALTER TABLE `ordermeja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
