-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2024 pada 17.28
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
-- Struktur dari tabel `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_bayar` bigint(20) NOT NULL,
  `nominal_bayar` bigint(20) DEFAULT NULL,
  `total_bayar` bigint(20) DEFAULT NULL,
  `waktu_bayar` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bayar`
--

INSERT INTO `tb_bayar` (`id_bayar`, `nominal_bayar`, `total_bayar`, `waktu_bayar`) VALUES
(2311101829134, 200000, 196000, '2023-11-11 07:49:03'),
(2311101830432, 8000000, 300000, '2023-11-11 01:29:18'),
(2311101838709, 80000, 75000, '2023-11-11 01:32:29'),
(2311102242535, 20000, 18000, '2023-11-11 01:44:34'),
(2311110901143, 60000, 50000, '2023-11-11 02:02:53'),
(2311111441116, 400000000000000, 360000, '2023-11-11 07:44:59'),
(2311111453496, 304000, 300000, '2023-11-11 12:19:47'),
(2311121127592, 2000000, 1020000, '2023-11-12 04:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_menu`
--

CREATE TABLE `tb_daftar_menu` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_menu` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stok` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_daftar_menu`
--

INSERT INTO `tb_daftar_menu` (`id`, `foto`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`) VALUES
(24, 'Mie Goreng.png', 'Mie aceh', 'Mie Asli Aceh yang menggunggah selera', 1, '25000', '10++'),
(25, '33.png', 'Burger', 'Burger Enak Dan lezat terbuat dari roti yang berkualitas', 1, '23000', '10++'),
(26, '10.png', 'Teh herbal', 'Teh herbal terbuat dari daun obat yang bisa menyembuhkan penyakit iri hati', 20, '9000', '10++'),
(27, '11.png', 'Boba', 'Terbuat dari susu prindapan yang murni dan sehat', 2, '30000', '9++'),
(29, 'miek.jpg', 'Mie Kwetiau', 'Lejattttt Dan bergiji', 1, '10000', '30++'),
(30, 'roti.jpeg', 'Roti Bakar', 'Roti Bakar Full Nikmat', 19, '10000', '10++');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_minuman`
--

CREATE TABLE `tb_daftar_minuman` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `nama_menu` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `stok` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_daftar_minuman`
--

INSERT INTO `tb_daftar_minuman` (`id`, `foto`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`) VALUES
(24, '5.png', 'Es Jeruk Nipis', 'Jeruk Nipis asli', 2, '25000', '7000'),
(25, '12.png', 'Jus Mangga', 'Ekstrak Mangga asli dari indramayu', 3, '23000', '12000'),
(26, '16622-10.png', 'Teh Herbal Anget', 'Teh herbal terbuat dari daun obat yang bisa menyembuhkan penyakit iri hati', 2, '9000', '10000'),
(27, '11.png', 'Boba', 'Terbuat dari susu prindapan yang murni dan sehat', 2, '30000', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_menu`
--

CREATE TABLE `tb_kategori_menu` (
  `id_kat_menu` int(11) NOT NULL,
  `jenis_menu` int(11) DEFAULT NULL,
  `kategori_menu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kategori_menu`
--

INSERT INTO `tb_kategori_menu` (`id_kat_menu`, `jenis_menu`, `kategori_menu`) VALUES
(1, 1, 'Nasi'),
(2, 2, 'Kopi'),
(3, 2, 'jus'),
(19, 1, 'Snack'),
(20, 2, 'Teh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_list_order`
--

CREATE TABLE `tb_list_order` (
  `id_list_order` int(11) NOT NULL,
  `menu` int(11) DEFAULT NULL,
  `kode_order` bigint(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `catatan` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_list_order`
--

INSERT INTO `tb_list_order` (`id_list_order`, `menu`, `kode_order`, `jumlah`, `catatan`, `status`, `total_harga`) VALUES
(1, 24, 2311101838709, 3, '', 5, 0),
(3, 26, 2311101829134, 9, 'enak bingit', 2, 0),
(5, 24, 2311101830432, 12, '', 2, 0),
(6, 26, 2311102242535, 2, 'cocok', 2, 0),
(7, 24, 2311110901143, 2, 'jangan pedas', 2, 0);

--
-- Trigger `tb_list_order`
--
DELIMITER $$
CREATE TRIGGER `cek_stok` BEFORE INSERT ON `tb_list_order` FOR EACH ROW BEGIN
    DECLARE v_stok INT;

    SELECT stok INTO v_stok FROM tb_daftar_menu WHERE id = NEW.menu;

    IF v_stok < NEW.jumlah THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Stok tidak mencukupi untuk menu ini.';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` bigint(20) NOT NULL DEFAULT 0,
  `pelanggan` varchar(200) DEFAULT NULL,
  `meja` int(11) DEFAULT NULL,
  `pelayan` int(11) DEFAULT NULL,
  `waktu_order` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `pelanggan`, `meja`, `pelayan`, `waktu_order`) VALUES
(2311101829134, 'Devan', 3, 1, '2024-01-02 15:18:31'),
(2311101830432, 'Akmal', 2, 1, '2024-01-02 15:18:31'),
(2311101838709, 'Rizky', 1, 1, '2024-01-02 15:18:31'),
(2311102242535, 'Asep', 5, 1, '2024-01-02 15:18:31'),
(2311110901143, 'Hafizd', 4, 1, '2024-01-02 15:18:31'),
(2401021556260, 'Boy', 2, 1, '2024-01-02 15:18:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `Nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `No_Hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `Nama`, `username`, `password`, `level`, `No_Hp`, `alamat`) VALUES
(1, 'Apoy', 'admin@admin.com', 'e00cf25ad42683b3df678c61f42c6bda', 1, '123456789016', 'Cirebon'),
(2, 'Kasir', 'Kasir@gmail.com', 'c7911af3adbd12a035b289556d96470a', 2, '123456789011', 'Sindang'),
(4, 'lolali', 'lola@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '0859688', 'Jatibarang'),
(5, 'Asep Saepullah', 'pelanggan@gmail.com', '7f78f06d2d1262a0a222ca9834b15d9d', 3, '0835688865', 'Lelea'),
(6, 'slebew', 'slebew@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '084311111', 'Legok'),
(7, 'Pelanggan', 'pelanggan@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2, '8744444', 'Lohbener');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `tb_daftar_menu`
--
ALTER TABLE `tb_daftar_menu`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_tb_daftar_menu_tb_kategori_menu` (`kategori`);

--
-- Indeks untuk tabel `tb_daftar_minuman`
--
ALTER TABLE `tb_daftar_minuman`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_tb_daftar_menu_tb_kategori_menu` (`kategori`);

--
-- Indeks untuk tabel `tb_kategori_menu`
--
ALTER TABLE `tb_kategori_menu`
  ADD PRIMARY KEY (`id_kat_menu`) USING BTREE;

--
-- Indeks untuk tabel `tb_list_order`
--
ALTER TABLE `tb_list_order`
  ADD PRIMARY KEY (`id_list_order`),
  ADD KEY `menu` (`menu`),
  ADD KEY `order` (`kode_order`) USING BTREE;

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`) USING BTREE,
  ADD KEY `FK_tb_daftar_menu_tb_kategori_menu` (`pelayan`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_menu`
--
ALTER TABLE `tb_daftar_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_minuman`
--
ALTER TABLE `tb_daftar_minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_menu`
--
ALTER TABLE `tb_kategori_menu`
  MODIFY `id_kat_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_list_order`
--
ALTER TABLE `tb_list_order`
  MODIFY `id_list_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_daftar_menu`
--
ALTER TABLE `tb_daftar_menu`
  ADD CONSTRAINT `FK_tb_daftar_menu_tb_kategori_menu` FOREIGN KEY (`kategori`) REFERENCES `tb_kategori_menu` (`id_kat_menu`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_list_order`
--
ALTER TABLE `tb_list_order`
  ADD CONSTRAINT `FK_tb_list_order_tb_daftar_menu` FOREIGN KEY (`menu`) REFERENCES `tb_daftar_menu` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_list_order_tb_order` FOREIGN KEY (`kode_order`) REFERENCES `tb_order` (`id_order`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `FK_tb_order_tb_user` FOREIGN KEY (`pelayan`) REFERENCES `tb_user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
