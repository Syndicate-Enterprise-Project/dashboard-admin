-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2024 pada 11.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enterprise2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogpost`
--

CREATE TABLE `blogpost` (
  `ID_blog` int(10) NOT NULL,
  `judul_blog` varchar(255) NOT NULL,
  `kategori_blog` varchar(255) NOT NULL,
  `isi_blog` text NOT NULL,
  `gambar_blog` varchar(255) NOT NULL,
  `terbit_blog` datetime NOT NULL DEFAULT current_timestamp(),
  `ID_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blogpost`
--

INSERT INTO `blogpost` (`ID_blog`, `judul_blog`, `kategori_blog`, `isi_blog`, `gambar_blog`, `terbit_blog`, `ID_pegawai`) VALUES
(28, 'Pembunuhan', 'Artikel', '<div>terjadi pembunuhan di bengkuring</div>', '663dbde82173a.png', '2024-05-10 14:25:44', 1),
(29, 'Berita Unmul Meledak', 'Berita', '<div>unmul meledak gara gara pertambangan</div>', '663dbe330c9b8.png', '2024-05-10 14:26:59', 1),
(30, 'Promo dalaman bebahan besi', 'Promo', '<div>kini telah hadir dalaman berbahan besi</div>', '663dbe6b78dea.jpg', '2024-05-10 14:27:55', 1),
(31, 'Review ganja perjuangan', 'Review', '<div>katanya ges ganja di perjuangan itu enak banget</div>', '663dbea6f0eff.png', '2024-05-10 14:28:54', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `ID_foto` int(11) NOT NULL,
  `eks_depan` varchar(255) NOT NULL,
  `eks_belakang` varchar(255) NOT NULL,
  `interior` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `ID_galeri` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`ID_galeri`, `foto`, `video`) VALUES
(6, '663dd4b784f19.jpg', '-'),
(9, '-', 'https://www.youtube.com/embed/GbcBmWt1mQQ?si=Bhc0vbwVbl65M3cL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langganan`
--

CREATE TABLE `langganan` (
  `ID_langganan` int(11) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `langganan`
--

INSERT INTO `langganan` (`ID_langganan`, `email_pelanggan`) VALUES
(1, 'awangarissaputra@gmail.com'),
(2, 'noviantis112@gmail.com'),
(3, 'dinnuhoni.trahutomo@gmail.com'),
(4, 'mhddiansyah46@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `ID_mobil` int(10) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `tipe_mobil` varchar(50) NOT NULL,
  `tahun_mobil` varchar(4) NOT NULL,
  `mesin_mobil` varchar(12) NOT NULL,
  `transmisi_mobil` varchar(8) NOT NULL,
  `tenaga_mobil` varchar(30) NOT NULL,
  `bb_mobil` varchar(7) NOT NULL,
  `penggerak_mobil` varchar(20) NOT NULL,
  `warna_mobil` varchar(30) NOT NULL,
  `harga_mobil` int(11) NOT NULL,
  `gambar_mobil` varchar(255) NOT NULL,
  `gambar_interior` varchar(255) NOT NULL,
  `gambar_eksterior` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`ID_mobil`, `nama_mobil`, `tipe_mobil`, `tahun_mobil`, `mesin_mobil`, `transmisi_mobil`, `tenaga_mobil`, `bb_mobil`, `penggerak_mobil`, `warna_mobil`, `harga_mobil`, `gambar_mobil`, `gambar_interior`, `gambar_eksterior`) VALUES
(18, 'Omoda 1', 'SUV Kecil', '2024', '1500cc', 'CVT', '112 HP & 138 Nm', 'Hybrid', '(4x2) FWD', 'Blue Turquoise', 500000000, '663cfc8fd25cd.png', '663cfc8fd29ab.jpg', '663cfc8fd2c0e.png'),
(19, 'Tiggo 1', 'SUV Medium', '2015', '1500cc', 'DCT', '112 HP & 138 Nm', 'Listrik', '(4x2) RWD', 'Black Platinum', 250000000, '663cfcfde8b1a.png', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_pegawai` int(10) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `hp_pegawai` varchar(15) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `password_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`ID_pegawai`, `nama_pegawai`, `hp_pegawai`, `email_pegawai`, `password_pegawai`) VALUES
(1, 'adminnnn', '085163235033', 'admin@gmail.com', '$2y$10$eFlZoBUaCB7c27TrO8gjAeglrplYYJ8qCj.10G9imMAUK0jsElLg6'),
(3, 'Lisya', '085163235033', 'admin@gmail.com', '$2y$10$75dMWSgySlcLfBp8tyNUq.1NKv8Kj7EpphNQQ6/f.Ju30UZK6rrie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `ID_penjualan` char(10) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nama` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_pembayaran` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`ID_penjualan`, `tgl_penjualan`, `tgl_pemesanan`, `nama`, `warna`, `harga`, `jenis_pembayaran`) VALUES
('CBPP-04001', '2023-04-12', '2023-04-02', 'Tiggo 8 Pro Premium (4x2) AT', 'Violet Amethyst', 596800000, 'CASH'),
('CBPP-04002', '2023-04-13', '2023-04-13', 'Omoda 5 RZ (4x2) AT', 'Blue Turquoise', 375800000, 'CASH'),
('CBPP-04003', '2023-04-17', '2023-04-13', 'Omoda 5 RZ (4x2) AT Two Tone', 'White Howlite Black', 426800000, 'CASH'),
('CBPP-04004', '2023-04-17', '2023-04-13', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 421800000, 'CREDIT'),
('CBPP-04005', '2023-04-28', '2023-03-17', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 421800000, 'CASH'),
('CBPP-05004', '2023-05-31', '2023-03-08', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 418000000, 'CREDIT'),
('CBPP-05005', '2023-05-31', '2023-05-25', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 427800000, 'CASH'),
('CBPP-06001', '2023-06-19', '2023-06-07', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CBPP-06002', '2023-06-22', '2023-06-17', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CBPP-06003', '2023-06-27', '2023-05-09', 'Omoda 5 Z (4x2) AT', 'White Howlite', 351800000, 'CASH'),
('CBPP-06004', '2023-06-28', '2023-06-19', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 427800000, 'CASH'),
('CBPP-07001', '2023-07-21', '2023-07-11', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CASH'),
('CBPP-08001', '2023-08-04', '2023-08-03', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CASH'),
('CSMD-02001', '2023-02-10', '2023-01-03', 'Tiggo 7 Pro Premium (4x2) AT Two Tone', 'Red Ruby Black', 448700000, 'CASH'),
('CSMD-02002', '2023-02-13', '2023-01-23', 'Tiggo 7 Pro Premium (4x2) AT Two Tone', 'Red Ruby Black', 448700000, 'CREDIT'),
('CSMD-02003', '2023-02-15', '2023-02-14', 'Tiggo 8 Pro Premium (4x2) AT', 'Violet Amethyst', 596800000, 'CASH'),
('CSMD-02004', '2023-02-17', '2023-01-29', 'Tiggo 8 Pro Premium (4x2) AT', 'Black Platinum', 596800000, 'CREDIT'),
('CSMD-02005', '2023-02-21', '2023-01-14', 'Tiggo 7 Pro Premium (4x2) AT', 'Red Ruby', 443200000, 'CREDIT'),
('CSMD-03001', '2023-03-30', '2023-02-24', 'Tiggo 7 Pro Premium (4x2) AT', 'Blue Turquoise', 443200000, 'CREDIT'),
('CSMD-03002', '2023-03-30', '2023-02-24', 'Tiggo 7 Pro Premium (4x2) AT Two Tone', 'Red Ruby Black', 448700000, 'CREDIT'),
('CSMD-03003', '2023-03-31', '2023-03-10', 'Tiggo 7 Pro Premium (4x2) AT Two Tone', 'Red Ruby Black', 453200000, 'CASH'),
('CSMD-04001', '2023-04-12', '2023-03-13', 'Omoda 5 RZ (4x2) AT Two Tone', 'White Howlite Black', 419800000, 'CASH'),
('CSMD-04002', '2023-04-13', '2023-04-03', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 421800000, 'CREDIT'),
('CSMD-04003', '2023-04-18', '2023-03-05', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 413000000, 'CASH'),
('CSMD-04004', '2023-04-27', '2023-04-25', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 421800000, 'CREDIT'),
('CSMD-05001', '2023-05-06', '2023-04-18', 'Omoda 5 RZ (4x2) AT Two Tone', 'White Howlite Black', 426800000, 'CREDIT'),
('CSMD-05002', '2023-05-09', '2023-05-08', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 421800000, 'CASH'),
('CSMD-05003', '2023-05-10', '2023-04-27', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 426800000, 'CREDIT'),
('CSMD-05011', '2023-05-24', '2023-05-20', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CSMD-06001', '2023-06-03', '2023-05-21', 'Tiggo 8 Pro Premium (4x2) AT', 'Silver Granite', 596800000, 'CASH'),
('CSMD-06002', '2023-06-09', '2023-05-23', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CASH'),
('CSMD-06003', '2023-06-12', '2023-06-03', 'Tiggo 8 Pro Premium (4x2) AT', 'Grey Morganite', 596800000, 'CREDIT'),
('CSMD-06004', '2023-06-16', '2023-06-08', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 427800000, 'CREDIT'),
('CSMD-06005', '2023-06-17', '2023-06-05', 'Tiggo 7 Pro Premium (4x2) AT Two Tone', 'Red Ruby Black', 453200000, 'CREDIT'),
('CSMD-06006', '2023-06-28', '2023-06-16', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CSMD-07001', '2023-07-15', '2023-06-30', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CSMD-07002', '2023-07-17', '2023-06-15', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 427800000, 'CREDIT'),
('CSMD-07003', '2023-07-22', '2023-07-17', 'Tiggo 8 Pro Premium (4x2) AT', 'Violet Amethyst', 596800000, 'CREDIT'),
('CSMD-07004', '2023-07-21', '2023-07-20', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 427800000, 'CASH'),
('CSMD-07005', '2023-07-31', '2023-07-24', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CSMD-08001', '2023-08-09', '2023-07-31', 'Tiggo 8 Pro Premium (4x2) AT', 'Grey Morganite', 596800000, 'CASH'),
('CSMD-08002', '2023-08-10', '2023-04-05', 'Omoda 5 RZ (4x2) AT', 'Black Platinum', 427800000, 'CREDIT'),
('CSMD-08003', '2023-08-25', '2023-03-06', 'Omoda 5 RZ (4x2) AT', 'Grey Morganite', 427800000, 'CASH'),
('CSMD-08004', '2023-08-29', '2023-08-29', 'Omoda 5 RZ (4x2) AT', 'White Howlite', 427800000, 'CASH'),
('CSMD-08005', '2023-08-30', '2023-08-04', 'Tiggo 7 Pro Comfort (4x2) AT', 'Blue Turquoise', 393700000, 'CREDIT'),
('CSMD-08006', '2023-08-31', '2023-07-15', 'Tiggo 8 Pro Premium (4x2) AT', 'Black Platinum', 596800000, 'CREDIT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis`
--

CREATE TABLE `servis` (
  `ID_service` int(10) NOT NULL,
  `kategori_servis` varchar(255) DEFAULT NULL,
  `pelanggan_servis` varchar(255) DEFAULT NULL,
  `hp_service` varchar(13) DEFAULT NULL,
  `antrian_service` varchar(50) DEFAULT NULL,
  `jadwal_service` datetime DEFAULT NULL,
  `pesan` text NOT NULL,
  `ID_pegawai` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `servis`
--

INSERT INTO `servis` (`ID_service`, `kategori_servis`, `pelanggan_servis`, `hp_service`, `antrian_service`, `jadwal_service`, `pesan`, `ID_pegawai`) VALUES
(44, 'Kelistrikan', 'Novan', '085163235033', 'May-08-0017', '2024-05-21 00:00:00', 'awd', 1),
(45, 'Kelistrikan', 'Novan', '085163235033', 'May-08-0018', '2024-05-16 00:00:00', '2', 1),
(46, 'Pengecekan Rem', 'Novan', '085163235033', 'May-08-0019', '2024-05-28 00:00:00', '3', 1),
(47, 'Kelistrikan', 'Novan', '085163235033', 'May-08-0020', '2024-05-16 00:00:00', 'test', 1),
(49, 'Pilih Jenis Servis', 'Novan', '085163235033', 'May-08-0025', '2024-05-18 00:00:00', 'pesan', 1),
(51, 'Pengecekan Rem', 'Novan', '085163235033', 'May-08-0032', '2024-05-29 00:00:00', 'awd', 1),
(52, 'Perbaikan Suspensi', 'Novan', '085163235033', 'May-08-0033', '2024-05-17 00:00:00', 'anak kontol', 1),
(53, 'Perbaikan Suspensi', 'Novan', '085163235033', 'May-08-0034', '2024-05-17 00:00:00', 'aswdawd', 3),
(54, 'Perbaikan Suspensi', 'Novan', '085163235033', 'May-08-0035', '2024-05-17 00:00:00', 'aswdawd', 3),
(55, 'Pengecekan Rem', 'Novan', '085163235033', 'May-08-0036', '2024-05-31 00:00:00', 'fauzan anak anjing', 3),
(56, 'Pengecekan Rem', 'Novan', '085163235033', 'May-08-0037', '2024-05-31 00:00:00', 'fauzan anak anjing', 1),
(57, 'Perbaikan Suspensi', 'Novan', '085163235033', 'May-08-0038', '2024-05-30 00:00:00', 'testing notif', 1),
(58, 'Perbaikan Suspensi', 'Novan', '085163235033', 'May-08-0039', '2024-05-15 00:00:00', 'testing', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`ID_blog`),
  ADD KEY `FK_ID_pegawai_blogpost` (`ID_pegawai`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`ID_foto`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`ID_galeri`);

--
-- Indeks untuk tabel `langganan`
--
ALTER TABLE `langganan`
  ADD PRIMARY KEY (`ID_langganan`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID_mobil`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_pegawai`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`ID_penjualan`);

--
-- Indeks untuk tabel `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`ID_service`),
  ADD KEY `FK_ID_pegawai` (`ID_pegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `ID_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `ID_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `langganan`
--
ALTER TABLE `langganan`
  MODIFY `ID_langganan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `ID_mobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_pegawai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `servis`
--
ALTER TABLE `servis`
  MODIFY `ID_service` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blogpost`
--
ALTER TABLE `blogpost`
  ADD CONSTRAINT `FK_ID_pegawai_blogpost` FOREIGN KEY (`ID_pegawai`) REFERENCES `pegawai` (`ID_pegawai`);

--
-- Ketidakleluasaan untuk tabel `servis`
--
ALTER TABLE `servis`
  ADD CONSTRAINT `FK_ID_pegawai` FOREIGN KEY (`ID_pegawai`) REFERENCES `pegawai` (`ID_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
