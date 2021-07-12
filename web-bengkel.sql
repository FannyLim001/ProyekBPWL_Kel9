-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 05.07
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

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
  `harga_barang` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `kategori_barang` varchar(30) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merk_barang`, `harga_barang`, `stok_barang`, `kategori_barang`, `deskripsi_barang`) VALUES
(1, 'Yamalube Matic Oil', 'Yamaha', 45000, 10, 'Oli', 'Oli ini dibuat khusus untuk mesin motor matik 4-Tak generasi pertama yang memerlukan durability mesin untuk bekerja berat sehingga performa tetap terjaga. Kelebihan dari Yamalube Matic Oil\r\n1. Menjaga mesin matic tahan lama dengan aditif anti-karat'),
(2, 'GENZI TL', 'FDR', 235000, 10, 'Ban', 'Komponen ban dirancang khusus untuk punya daya cengkeram maksimal untuk penggunaan harian\r\nCocok untuk penggunaan di jalan beraspal'),
(3, 'Aspira Disc pad Yamaha Mio 2004-2008', 'Aspira', 30000, 10, 'Kampas Rem', 'Berfungsi untuk mencekram disc (cakram) sehingga tercipta pengurangan kecepatan\r\nBerkualitas dan bermutu tinggi\r\nPemakaian lebih awet'),
(4, 'Yuasa YTZ5S', 'Yuasa', 200000, 12, 'Aki Motor', 'kualitasnya yang baik, aki ini juga dibanderol dengan harga yang cukup terjangkau.'),
(5, 'Furukawa Battery FTZ5S', 'Furukawa Battery', 210000, 14, 'Aki Motor', 'Aki ini terbuat dari timah murni dan sudah disematkan teknologi anti-explode\r\nDengan tegangan sebesar 12 V dan kapasitas 3.5 Ah, Furukawa Battery FTZ5S biasa digunakan pada motor bebek dan skutik'),
(6, 'DID 428H-DS', 'DID', 370000, 8, 'Rantai Motor', 'Rantai ini memiliki kualitas yang bagus dan juga pemasangannya dapat dikatakan mudah\r\nDID juga memiliki rantai yang berwarna emas dan dapat menjadi pilihan Anda'),
(7, 'GR428SB', 'SSS', 120000, 9, 'Rantai Motor', 'Ranti motor merk ini memiliki banyak ukuran dan juga sudah dikenal sebagai rantai yang tahan lama dan bagus.'),
(8, 'RTD LED H6 M11G 2 Sisi', 'RTD', 52000, 24, 'Lampu LED Motor', 'Lampu RTD satu ini memiliki spesifikasi yang sangat bagus dan Tipe ini memiliki spesifikasi yang mendukung lampu dekat dan jauh serta dapat hidup dengan arus DC-18 Watt dan menggunakan tipe pemasangan PNP.'),
(9, 'Osram LED T19 M5 K1', 'Osram', 59000, 16, 'Lampu LED Motor', 'Osram LED T19 M5 K1 tawarkan adalah lampu LED dengan 12 V, 5/6 W, low beam-nya 5W dan untuk Hi’ nya 6W. Lampu ini juga hemat energi meski menghasilkan energi warna yang mencapai 6000 Kelvin.'),
(10, 'TDR TWIN IRIDIUM', 'TDR', 120000, 6, 'Busi Motor', 'Sesuai tipenya (twin iridium), busi ini mengusung 2 bagian material iridium. Yaitu pada CE dan GE, dengan tujuan supaya hantaran arus listrik dari CE ke Ge lebih baik dan kuat. Sehingga pembakaran jadi makin sempurna. CE-nya mengusung diameter 0,7 mm.'),
(11, 'DENSO IRIDIUM POWER', 'DENSO', 89000, 9, 'Busi Motor', 'Busi ini mengusung material iridium di bagian center electroda (CE). Dengan diameter CE terkecil dibanding kompetitornya, yakni 0,4 mm.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
