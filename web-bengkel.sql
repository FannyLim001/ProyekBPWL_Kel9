-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2021 pada 20.42
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk_barang` varchar(50) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `kategori_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merk_barang`, `id_supplier`, `harga_barang`, `stok_barang`, `kategori_barang`, `deskripsi_barang`, `gambar`) VALUES
(1, 'Yamalube Matic Oil', 'Yamaha', 1, 45000, 10, 'Oli', 'Oli ini dibuat khusus untuk mesin motor matik 4-Tak generasi pertama yang memerlukan durability mesin untuk bekerja berat sehingga performa tetap terjaga. Kelebihan dari Yamalube Matic Oil\r\n1. Menjaga mesin matic tahan lama dengan aditif anti-karat', 'yamalube.jpg'),
(2, 'GENZI TL', 'FDR', 2, 235000, 10, 'Ban', 'Komponen ban dirancang khusus untuk punya daya cengkeram maksimal untuk penggunaan harian\r\nCocok untuk penggunaan di jalan beraspal', 'genzi.jpg'),
(3, 'Aspira Disc pad Yamaha Mio 2004-2008', 'Aspira', 3, 30000, 10, 'Kampas Rem', 'Berfungsi untuk mencekram disc (cakram) sehingga tercipta pengurangan kecepatan\r\nBerkualitas dan bermutu tinggi\r\nPemakaian lebih awet', 'aspira.jpg'),
(4, 'Yuasa YTZ5S', 'Yuasa', 4, 200000, 12, 'Aki Motor', 'kualitasnya yang baik, aki ini juga dibanderol dengan harga yang cukup terjangkau.', 'yuasa.jpg'),
(5, 'Furukawa Battery FTZ5S', 'Furukawa Battery', 5, 210000, 14, 'Aki Motor', 'Aki ini terbuat dari timah murni dan sudah disematkan teknologi anti-explode\r\nDengan tegangan sebesar 12 V dan kapasitas 3.5 Ah, Furukawa Battery FTZ5S biasa digunakan pada motor bebek dan skutik', 'furukawa.jpg'),
(6, 'DID 428H-DS', 'DID', 6, 370000, 8, 'Rantai Motor', 'Rantai ini memiliki kualitas yang bagus dan juga pemasangannya dapat dikatakan mudah\r\nDID juga memiliki rantai yang berwarna emas dan dapat menjadi pilihan Anda', 'did.jpg'),
(7, 'GR428SB', 'SSS', 7, 120000, 9, 'Rantai Motor', 'Ranti motor merk ini memiliki banyak ukuran dan juga sudah dikenal sebagai rantai yang tahan lama dan bagus.', 'gr4.jpg'),
(8, 'RTD LED H6 M11G 2 Sisi', 'RTD', 8, 52000, 24, 'Lampu LED Motor', 'Lampu RTD satu ini memiliki spesifikasi yang sangat bagus dan Tipe ini memiliki spesifikasi yang mendukung lampu dekat dan jauh serta dapat hidup dengan arus DC-18 Watt dan menggunakan tipe pemasangan PNP.', 'rtd.jpg'),
(9, 'Osram LED T19 M5 K1', 'Osram', 9, 59000, 16, 'Lampu LED Motor', 'Osram LED T19 M5 K1 tawarkan adalah lampu LED dengan 12 V, 5/6 W, low beam-nya 5W dan untuk Hi’ nya 6W. Lampu ini juga hemat energi meski menghasilkan energi warna yang mencapai 6000 Kelvin.', 't19.jpg'),
(10, 'TDR TWIN IRIDIUM', 'TDR', 10, 120000, 6, 'Busi Motor', 'Sesuai tipenya (twin iridium), busi ini mengusung 2 bagian material iridium. Yaitu pada CE dan GE, dengan tujuan supaya hantaran arus listrik dari CE ke Ge lebih baik dan kuat. Sehingga pembakaran jadi makin sempurna. CE-nya mengusung diameter 0,7 mm.', 'tdr.jpg'),
(11, 'DENSO IRIDIUM POWER', 'DENSO', 11, 89000, 9, 'Busi Motor', 'Busi ini mengusung material iridium di bagian center electroda (CE). Dengan diameter CE terkecil dibanding kompetitornya, yakni 0,4 mm.', 'denso.jpg'),
(12, 'Ban Swallow 60/90-14 Stream SP', 'Swallow', 1, 103000, 7, 'Ban', 'Ban Swallow 60/90-14 Stream SP Bukan Tubeless Ban Motor adalah ban motor tubetype berukuran 60/90-14 yang cocok digunakan saat kondisi kering maupun basah.', 'ban_swallow.jpg'),
(13, 'RACING Knalpot Power Boom ROB1 RCB1 End Cup V', 'Yamaha', 1, 1550000, 3, 'Aksesoris', 'RACING Knalpot Power Boom ROB1 RCB1 End Cup V Carbon Knalpot Standar NMAX merupakan Knalpot Standar Racing Power Boom ROB1 RCB1 End Cup V dengan Model Carbon dapat digunakan pada motor.', 'knalpot.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `email`, `password`) VALUES
(1, 'Rey', 'rey22@gmail.com', 'rey2222'),
(2, 'Faizil', 'Faizilhayuk@gmail.com', 'fazil1122'),
(3, 'Kunglao', 'Kunglao11@gmail.com', 'kunglao11'),
(4, 'Yuri ', 'Yuriii@gmail.com', 'yurii1212'),
(5, 'Toni', 'ToniRe@gmail.com', 'toniiiy'),
(6, 'Renaldo', 'Renaldow@gmail.com', 'renaldooo12'),
(7, 'Ucok', 'Uucok@gmail.com', 'ucok12'),
(8, 'Akbar', 'Akbarz@gmail.com', 'akbar2121'),
(9, 'Fani', 'Faniiy@gmail.com', 'fani21'),
(10, 'Pami', 'Pamii@gmail.com', 'pamii20'),
(17, 'Kiana', 'kiana@gmail.com', 'kiana76'),
(19, 'Siesta', 'siesta@gmail.com', 'siesta98');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `jml_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `id_barang`, `id_supplier`, `tgl_beli`, `jml_beli`) VALUES
(1, 3, 2, '2021-04-13', 5),
(2, 6, 5, '2021-04-15', 3),
(3, 2, 10, '2021-05-09', 6),
(5, 11, 11, '2021-07-06', 12),
(6, 10, 10, '2021-07-07', 4),
(7, 3, 3, '2021-07-08', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_jual` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `jml_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_jual`, `id_barang`, `id_member`, `tgl_jual`, `jml_jual`) VALUES
(1, 2, 9, '2021-01-04', 4),
(2, 8, 10, '2021-02-01', 2),
(3, 4, 1, '2021-02-03', 2),
(4, 9, 6, '2021-03-14', 2),
(5, 4, 3, '2021-04-01', 1),
(6, 5, 7, '2021-05-17', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Hilda', 'hilda@gmail.com', 'Ganti Produk', 'Halo, saya ingin menukar satu produk yang saya salah beli, apakah masih bisa?'),
(2, 'Riko', 'riko@gmail.com', 'Login tidak berfungsi', 'Permisi, saya sudah memiliki akun di website ini, namun pada saat saya ingin login yang muncul adalah error 404. Mohon diperbaiki secepatnya, saya perlu membeli barang'),
(3, 'Kiky', 'kiky@gmail.com', 'Hutang', 'Apakah disini menerima sistem hutang?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `kota_supplier` varchar(30) NOT NULL,
  `alamat_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `kota_supplier`, `alamat_supplier`) VALUES
(1, 'PT. YAMAHA', 'Pekanbaru', 'Jl. Nangka'),
(2, 'PT. STAR PARTS', 'Bandung', 'Jl. Soekarno Hatta '),
(3, 'PT. Calispo Jaya Abadi', 'Pekanbaru', 'Jl. Soekarno Hatta'),
(4, 'PT. YUASA BATTERY INDONESIA', 'Banten', 'Jl.Thamrin'),
(5, 'PT. Furukawa Indonesia', 'Karawang', 'Jl.Harapan II'),
(6, 'PT. DAIDO INDONESIA', 'Bekasi', 'Jl. Jawa '),
(7, 'PT. TIGA SAKTI', 'Jakarta Utara', 'Jl. Danau Sunter'),
(8, 'PT. RAYTON INDONESIA', 'Jakarta Barat', 'Jl. Toyib'),
(9, 'PT. OSRAM INDONESIA', 'Jakarta Pusat', 'Jl. Senen Raya'),
(10, 'PT. TDR ', 'Jl. Swadaya IV', 'Jakarta Pusat'),
(11, 'PT. DENSO INDONESIA', 'Bekasi', 'Jl. Kalimantan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$iowsGNXtoHluJpJsajUs6.SW/ZIlK7QUi63NTJi4MppzgircSLj82', 'fIimqvGDJGXMbY5Wba4qsAR6yaRMNz45mmGUwr0P2AvmJyJPLX3adjPFXrzU', '2021-07-20 08:37:10', '2021-07-20 08:37:10'),
(2, 'Rey', 'member', 'rey22@gmail.com', NULL, '$2y$10$8pYOzA73sGxITAAskyahLO8qrKMpSDY3ZuGOIyWEizwKqALQ2BSm6', NULL, '2021-07-20 08:50:45', '2021-07-20 08:50:45'),
(3, 'Fazil', 'member', 'Fazilhayuk@gmail.com', NULL, '$2y$10$.MCyoJMGWCIUrIbjHlRHbuW6seauHTk4LctnLmfm6r.LqWUMg..kG', NULL, '2021-07-19 23:21:02', '2021-07-19 23:21:02'),
(4, 'Kunglao', 'member', 'Kunglao11@gmail.com', NULL, '$2y$10$zohlogcWIJFBjtQEgz4FMuNd2Lp.RFvvaTsSPeIzPsPr29HpRJnQe', NULL, '2021-07-19 23:22:09', '2021-07-19 23:22:09'),
(5, 'Yuri', 'member', 'Yuriii@gmail.com', NULL, '$2y$10$TMleAVg.2VwsRgsu/cAB/O3qrgIET4nzGcVRaTQ.vMjBHJ2i17FuO', NULL, '2021-07-19 23:23:07', '2021-07-19 23:23:07'),
(6, 'Toni', 'member', 'ToniRe@gmail.com', NULL, '$2y$10$VyIeIllx7DVCv8a/FQByX.PVlRBGpIsOvtUobO37qKONQ82fJ.pR2', NULL, '2021-07-19 23:23:53', '2021-07-19 23:23:53'),
(7, 'Renaldo', 'member', 'Renaldow@gmail.com', NULL, '$2y$10$uo1liByPXmnIHkC7tgGuGeGW9vITUeo0eW.LHGsfhb2lwIv4c76CW', NULL, '2021-07-19 23:24:18', '2021-07-19 23:24:18'),
(8, 'Ucok', 'member', 'Uucok@gmail.com', NULL, '$2y$10$aPDYfzilV42IF3gU/4lVHuUws6rG.JqDN57t3zshk.Dhs/weafOpe', NULL, '2021-07-19 23:24:41', '2021-07-19 23:24:41'),
(9, 'Akbar', 'member', 'Akbarz@gmail.com', NULL, '$2y$10$RFM0gWgw1XrIwOMNAfXZsut1PDvKgezPhWwaqGMZGnnLpacpPu7ny', NULL, '2021-07-19 23:25:02', '2021-07-19 23:25:02'),
(10, 'Fani', 'member', 'Faniiy@gmail.com', NULL, '$2y$10$YuwgxrwBmEyTtYvJJ74f6OA1L5Vo788eC13UAzvTS1DkZZuBglb6.', NULL, '2021-07-19 23:25:23', '2021-07-19 23:25:23'),
(11, 'Pami', 'member', 'Pamii@gmail.com', NULL, '$2y$10$faM6kPEblVeSsqPPbfuEF.TGELq6rUV5ZrtaWQBizA4MGfcjMDN.u', NULL, '2021-07-19 23:25:46', '2021-07-19 23:25:46'),
(12, 'Kiana', 'member', 'kiana@gmail.com', NULL, '$2y$10$4Dd6yWjPQoaHiwmCjApYyutXVj1Bh60tHaLP/4V3r/W3zLdvd29.i', NULL, '2021-07-19 23:30:25', '2021-07-19 23:30:25'),
(13, 'Siesta', 'member', 'siesta@gmail.com', NULL, '$2y$10$yxL6Fiu4eZ0kTSy6hsv1Y.ZxeFBTtGbBZHRuq57UCsRbEs2dJ//36', NULL, '2021-07-19 23:34:05', '2021-07-19 23:34:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_id_supplier2` (`id_supplier`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `fk_id_barang_supplier` (`id_barang`),
  ADD KEY `fk_id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `fk_id_member` (`id_member`),
  ADD KEY `fk_id_barang` (`id_barang`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_id_supplier2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_id_barang_supplier` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
