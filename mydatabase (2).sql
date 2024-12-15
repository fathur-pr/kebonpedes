-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2018 pada 16.02
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_datang`
--

CREATE TABLE `data_datang` (
  `id` int(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_surat_ket_pindah` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat_asal` varchar(50) DEFAULT NULL,
  `tanggal_kepindahan` date DEFAULT NULL,
  `alamat_tujuan` varchar(50) DEFAULT NULL,
  `kecamatan` enum('Bogor Selatan') DEFAULT NULL,
  `kelurahan` enum('Pakuan','Genteng','Kertamaya','Rancamaya','Cipaku','Muarasari','Harjasari','Bojongkerta','Ranggamekar','Empang','Lawanggintung','Mulyaharja','Pamoyanan','Cikaret','Batutulis','Bondongan') DEFAULT NULL,
  `jenis_kepindahan` enum('Kep. Keluarga','Kep. Kel Dan Seluruh Anggota Keluarga','Kep. Kel Dan Sebagian Anggota Keluarga','Anggota Keluarga') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_datang`
--

INSERT INTO `data_datang` (`id`, `nik`, `no_surat_ket_pindah`, `nama`, `jenis_kelamin`, `alamat_asal`, `tanggal_kepindahan`, `alamat_tujuan`, `kecamatan`, `kelurahan`, `jenis_kepindahan`) VALUES
(9, '320137211097003', '1234567890', 'Monkey D. Luffy', 'Laki-Laki', 'Komplek Inkopad Blok M13/06 RT', '2016-03-02', 'Perumahan Pondok Indah', 'Bogor Selatan', 'Rancamaya', 'Kep. Kel Dan Seluruh Anggota Keluarga'),
(10, '320137211097004', '0987654321', 'Nico Robin', 'Perempuan', 'Granada', '2016-11-30', 'Kp. Pamoyanan', 'Bogor Selatan', 'Pamoyanan', 'Kep. Kel Dan Seluruh Anggota Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelurahan`
--

CREATE TABLE `data_kelurahan` (
  `id` int(100) NOT NULL,
  `nama_kelurahan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelurahan`
--

INSERT INTO `data_kelurahan` (`id`, `nama_kelurahan`) VALUES
(1, 'Empang'),
(2, 'Bondongan'),
(3, 'Batutulis'),
(4, 'Lawanggintung'),
(5, 'Cikaret'),
(6, 'Mulyaharja'),
(7, 'Pamoyanan'),
(8, 'Ranggamekar'),
(9, 'Cipaku'),
(10, 'Pakuan'),
(11, 'Harjasari'),
(12, 'Muarasari'),
(13, 'Rancamaya'),
(14, 'Bojongkerta'),
(15, 'Kertamaya'),
(16, 'Genteng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` int(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelurahan` enum('Pakuan','Genteng','Kertamaya','Rancamaya','Cipaku','Muarasari','Harjasari','Bojongkerta','Ranggamekar','Empang','Lawanggintung','Mulyaharja','Pamoyanan','Cikaret','Batutulis','Bondongan') DEFAULT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Budha','Konghuchu','Lain-Lain') DEFAULT NULL,
  `pendidikan` enum('SD','SMP','SMA/SMK','D3','S1','S2','S3') DEFAULT NULL,
  `status` enum('Menikah','Belum Menikah','Duda','Janda') DEFAULT NULL,
  `kewarganegaraan` enum('WNI','WNA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelurahan`, `agama`, `pendidikan`, `status`, `kewarganegaraan`) VALUES
(4, '320137211097001', 'Irfan Maulana Hardi', 'Laki-Laki', 'Bogor', '2019-01-02', 'Komplek Sejahtera Selamanya', 'Rancamaya', 'Islam', 'S1', 'Belum Menikah', 'WNI'),
(6, '320137211097002', 'Awaliyah Armain', 'Perempuan', 'Jakarta', '2018-01-01', 'Kampung Cikondang RT01/02', 'Cikaret', 'Budha', 'SD', 'Menikah', 'WNA'),
(3, '320137211097009', 'Antonio Ferguso', 'Laki-Laki', 'Bogor', '2019-01-29', 'Komplek Sejahtera Selamanya', 'Rancamaya', 'Islam', 'S2', 'Belum Menikah', 'WNA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pindah`
--

CREATE TABLE `data_pindah` (
  `id` int(200) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat_asal` varchar(50) DEFAULT NULL,
  `kelurahan` enum('Pakuan','Genteng','Kertamaya','Rancamaya','Cipaku','Muarasari','Harjasari','Bojongkerta','Ranggamekar','Empang','Lawanggintung','Mulyaharja','Pamoyanan','Cikaret','Batutulis','Bondongan') DEFAULT NULL,
  `alamat_tujuan` varchar(50) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kabupaten_kota` varchar(20) DEFAULT NULL,
  `alasan_pindah` enum('Pekerjaan','Pendidikan','Keamanan','Kesehatan','Perumahan','Keluarga','Lain-Lain') DEFAULT NULL,
  `jenis_kepindahan` enum('Kep. Keluarga','Kep. Kel Dan Seluruh Anggota Keluarga','Kep. Kel Dan Sebagian Anggota Keluarga','Anggota Keluarga') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pindah`
--

INSERT INTO `data_pindah` (`id`, `nik`, `nama`, `jenis_kelamin`, `alamat_asal`, `kelurahan`, `alamat_tujuan`, `provinsi`, `kabupaten_kota`, `alasan_pindah`, `jenis_kepindahan`) VALUES
(14, '320137211097005', 'Sanji Sandoro', 'Laki-Laki', 'Komplek East Blue Blok E 03/03', 'Muarasari', 'Perumahan Grand Blue', 'DKI', 'Jakarta', 'Pekerjaan', 'Kep. Keluarga'),
(15, '320137211097007', 'Vivi Lavida', 'Perempuan', 'Komplek Arabasta Blok F 07/03 ', 'Bojongkerta', 'Perumahan Grand Blue', 'DKI', 'Jakarta', 'Pendidikan', 'Kep. Kel Dan Seluruh Anggota Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'batangasam@admin.com', '', NULL, NULL, NULL, 1268889823, 1513262134, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `password`, `full_name`) VALUES
(1, 'admin', 'admin', 'Admin 01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_datang`
--
ALTER TABLE `data_datang`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `data_kelurahan`
--
ALTER TABLE `data_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indeks untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_datang`
--
ALTER TABLE `data_datang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `data_kelurahan`
--
ALTER TABLE `data_kelurahan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_pindah`
--
ALTER TABLE `data_pindah`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
