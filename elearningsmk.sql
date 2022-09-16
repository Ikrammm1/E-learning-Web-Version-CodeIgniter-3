-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2022 pada 10.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearningsmk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`) VALUES
(1, 'ikram'),
(2, 'Admin SMKN 2 Barabai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(5) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `NIP`, `nama`, `nohp`, `gender`) VALUES
(1, 'guru', 'Guru Dummy', '08123123', 'Laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_mapel`
--

CREATE TABLE `kelas_mapel` (
  `id_kelas_mapel` int(4) NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `id_mapel` int(4) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_mapel`
--

INSERT INTO `kelas_mapel` (`id_kelas_mapel`, `NIP`, `id_mapel`, `kelas`, `token`, `gambar`) VALUES
(1, 'guru', 3, 'X-MM', 'XMM', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id_kelas_siswa` int(4) NOT NULL,
  `id_kelas_mapel` int(4) NOT NULL,
  `NISN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`id_kelas_siswa`, `id_kelas_mapel`, `NISN`) VALUES
(1, 1, 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(4) NOT NULL,
  `code` varchar(15) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `code`, `nama_mapel`, `keterangan`, `semester`) VALUES
(1, 'PA1', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 1),
(2, 'PPKN1', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 1),
(3, 'BIND1', 'Bahasa Indonesia', 'Muatan Nasional', 1),
(4, 'MTK1', 'Matematika', 'Muatan Nasional', 1),
(5, 'PA2', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 2),
(6, 'PPKN2', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 2),
(7, 'BIND2', 'Bahasa Indonesia', 'Muatan Nasional', 2),
(8, 'MTK2', 'Matematika', 'Muatan Nasional', 2),
(9, 'PA3', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 3),
(10, 'PPKN3', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 3),
(11, 'BIND3', 'Bahasa Indonesia', 'Muatan Nasional', 3),
(12, 'MTK3', 'Matematika', 'Muatan Nasional', 3),
(13, 'PA4', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 4),
(14, 'PPKN4', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 4),
(15, 'BIND4', 'Bahasa Indonesia', 'Muatan Nasional', 4),
(16, 'MTK4', 'Matematika', 'Muatan Nasional', 4),
(17, 'PA5', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 5),
(18, 'PPKN5', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 5),
(19, 'BIND5', 'Bahasa Indonesia', 'Muatan Nasional', 5),
(20, 'MTK5', 'Matematika', 'Muatan Nasional', 5),
(21, 'PA6', 'Pendidikan Agama dan Budi Pekerti', 'Muatan Nasional', 6),
(22, 'PPKN6', 'Pendidikan Pancasila dan Kewarganegaraan', 'Muatan Nasional', 6),
(23, 'BIND6', 'Bahasa Indonesia', 'Muatan Nasional', 6),
(24, 'MTK6', 'Matematika', 'Muatan Nasional', 6),
(25, 'BING1', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 1),
(26, 'BING2', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 2),
(27, 'BING3', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 3),
(28, 'BING4', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 4),
(29, 'BING5', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 5),
(30, 'BING6', 'Bahasa Inggris dan Bahasa Asing lainnya', 'Muatan Nasional', 6),
(31, 'SIND1', 'Sejarah Indonesia', 'Muatan Nasional', 1),
(32, 'SIND2', 'Sejarah Indonesia', 'Muatan Nasional', 2),
(33, 'SB1', 'Seni Budaya', 'Muatan Kewilayahan', 1),
(34, 'SB2', 'Seni Budaya', 'Muatan Kewilayahan', 2),
(35, 'PENJASKES1', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'Muatan Kewilayahan', 1),
(36, 'PENJASKES2', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'Muatan Kewilayahan', 2),
(37, 'PENJASKES3', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'Muatan Kewilayahan', 3),
(38, 'PENJASKES4', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'Muatan Kewilayahan', 4),
(39, 'PAQ1', 'Pendidikan Al Qur\'an', 'Muatan Kewilayahan', 1),
(40, 'PAQ2', 'Pendidikan Al Qur\'an', 'Muatan Kewilayahan', 2),
(41, 'SKD1', 'Simulasi dan Komunikasi Digital', 'Muatan Bidang Keahlian', 1),
(42, 'FSK1', 'Fisika', 'Muatan Bidang Keahlian', 1),
(43, 'KMA1', 'Kimia', 'Muatan Bidang Keahlian', 1),
(44, 'BIO1', 'Biologi', 'Muatan Bidang Keahlian ATP/H', 1),
(45, 'SKD2', 'Simulasi dan Komunikasi Digital', 'Muatan Bidang Keahlian', 2),
(46, 'FSK2', 'Fisika', 'Muatan Bidang Keahlian', 2),
(47, 'KMA2', 'Kimia', 'Muatan Bidang Keahlian', 2),
(48, 'BIO2', 'Biologi', 'Muatan Bidang Keahlian ATP/H', 2),
(49, 'GTO1', 'Gambar Teknik Otomotif', 'Dasar Program Keahlian TKRO', 1),
(50, 'TDO1', 'Teknologi Dasar Otomotif', 'Dasar Program Keahlian TKRO', 1),
(51, 'PDTO1', 'Pekerjaan Dasar Teknik Otomotif', 'Dasar Program Keahlian TKRO', 1),
(52, 'SISKOM1', 'Sistem Komputer', 'Dasar Program Keahlian MM', 1),
(53, 'KJD1', 'Komputer dan Jaringan Dasar', 'Dasar Program Keahlian MM', 1),
(54, 'PROGD1', 'Pemrograman Dasar', 'Dasar Program Keahlian MM', 1),
(55, 'DDG1', 'Dasar Desain Grafis', 'Dasar Program Keahlian MM', 1),
(56, 'DBT1', 'Dasar-dasar Budidaya Tanaman', 'Dasar Program Keahlian ATP/H', 1),
(57, 'AMP1', 'Alat Mesin Pertanian', 'Dasar Program Keahlian ATP/H', 1),
(58, 'PTAN1', 'Pembiakan Tanaman', 'Dasar Program Keahlian ATP/H', 1),
(59, 'GTO2', 'Gambar Teknik Otomotif', 'Dasar Program Keahlian TKRO', 2),
(60, 'TDO2', 'Teknologi Dasar Otomotif', 'Dasar Program Keahlian TKRO', 2),
(61, 'PDTO2', 'Pekerjaan Dasar Teknik Otomotif', 'Dasar Program Keahlian TKRO', 2),
(62, 'SKOM2', 'Sistem Komputer', 'Dasar Program Keahlian MM', 2),
(63, 'KJD2', 'Komputer dan Jaringan Dasar', 'Dasar Program Keahlian MM', 2),
(64, 'PROGD2', 'Pemrograman Dasar', 'Dasar Program Keahlian MM', 2),
(65, 'DDG2', 'Dasar Desain Grafis', 'Dasar Program Keahlian MM', 2),
(66, 'DBT2', 'Dasar-dasar Budidaya Tanaman', 'Dasar Program Keahlian ATP/H', 2),
(67, 'AMP2', 'Alat Mesin Pertanian', 'Dasar Program Keahlian ATP/H', 2),
(68, 'PTAN2', 'Pembiakan Tanaman', 'Dasar Program Keahlian ATP/H', 2),
(69, 'PMKR3', 'Pemeliharaan Mesin Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 3),
(70, 'PSPTKR3', 'Pemeliharaan Sasis dan Pemindah Tenaga Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 3),
(71, 'PKKR3', 'Pemeliharaan Kelistrikan Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 3),
(72, 'PKK3', 'Produk Kreatif dan Kewirausahaan', 'Kompetensi Keahlian ', 3),
(73, 'PMKR4', 'Pemeliharaan Mesin Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 4),
(74, 'PSPTKR4', 'Pemeliharaan Sasis dan Pemindah Tenaga Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 4),
(75, 'PKKR4', 'Pemeliharaan Kelistrikan Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 4),
(76, 'PKK4', 'Produk Kreatif dan Kewirausahaan', 'Kompetensi Keahlian ', 4),
(77, 'PMKR5', 'Pemeliharaan Mesin Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 5),
(78, 'PSPTKR5', 'Pemeliharaan Sasis dan Pemindah Tenaga Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 5),
(79, 'PKKR5', 'Pemeliharaan Kelistrikan Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 5),
(80, 'PKK5', 'Produk Kreatif dan Kewirausahaan', 'Kompetensi Keahlian ', 5),
(81, 'PMKR6', 'Pemeliharaan Mesin Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 6),
(82, 'PSPTKR6', 'Pemeliharaan Sasis dan Pemindah Tenaga Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 6),
(83, 'PKKR6', 'Pemeliharaan Kelistrikan Kendaraan Ringan', 'Kompetensi Keahlian TKRO', 6),
(84, 'PKK6', 'Produk Kreatif dan Kewirausahaan', 'Kompetensi Keahlian ', 6),
(85, 'DGP3', 'Desain Grafis Percetakan', 'Kompetensi Keahlian MM', 3),
(86, 'DGP4', 'Desain Grafis Percetakan', 'Kompetensi Keahlian MM', 4),
(87, 'DMI5', 'Desain Media Interaktif', 'Kompetensi Keahlian MM', 5),
(88, 'DMI6', 'Desain Media Interaktif', 'Kompetensi Keahlian MM', 6),
(89, 'TADD3', 'Teknik Animasi 2D dan 3D', 'Kompetensi Keahlian MM', 3),
(90, 'TADD4', 'Teknik Animasi 2D dan 3D', 'Kompetensi Keahlian MM', 4),
(91, 'TPAV5', 'Teknik Pengolahan Audio Video', 'Kompetensi Keahlian MM', 5),
(92, 'TPAV6', 'Teknik Pengolahan Audio Video', 'Kompetensi Keahlian MM', 6),
(93, 'PLDPTP3', 'Persiapan Lahan Dan Penanaman Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 3),
(94, 'PKJTP3', 'Pembibitan dan Kultur Jaringan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 3),
(95, 'PPTP3', 'Pemeliharaan dan Pengelolaan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 3),
(96, 'PPPTP3', 'Panen dan Pasca Panen Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 3),
(97, 'PL3', 'Pemetaan Lahan', 'Kompetensi Keahlian ATP', 3),
(98, 'PLDPTP4', 'Persiapan Lahan Dan Penanaman Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 4),
(99, 'PKJTP4', 'Pembibitan dan Kultur Jaringan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 4),
(100, 'PPTP4', 'Pemeliharaan dan Pengelolaan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 4),
(101, 'PPPTP4', 'Panen dan Pasca Panen Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 4),
(102, 'PL4', 'Pemetaan Lahan', 'Kompetensi Keahlian ATP', 4),
(103, 'PLDPTP5', 'Persiapan Lahan Dan Penanaman Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 5),
(104, 'PKJTP5', 'Pembibitan dan Kultur Jaringan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 5),
(105, 'PPTP5', 'Pemeliharaan dan Pengelolaan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 5),
(106, 'PPPTP5', 'Panen dan Pasca Panen Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 5),
(107, 'PL5', 'Pemetaan Lahan', 'Kompetensi Keahlian ATP', 5),
(108, 'PLDPTP6', 'Persiapan Lahan Dan Penanaman Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 6),
(109, 'PKJTP6', 'Pembibitan dan Kultur Jaringan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 6),
(110, 'PPTP6', 'Pemeliharaan dan Pengelolaan Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 6),
(111, 'PPPTP6', 'Panen dan Pasca Panen Tanaman Perkebunan', 'Kompetensi Keahlian ATP', 6),
(112, 'PL6', 'Pemetaan Lahan', 'Kompetensi Keahlian ATP', 6),
(113, 'ATP3', 'Agribisnis Tanaman Pangan', 'Kompetensi Keahlian ATPH', 3),
(114, 'ATS3', 'Agribisnis Tanaman Sayuran', 'Kompetensi Keahlian ATPH', 3),
(115, 'ATB3', 'Agribisnis Tanaman Buah', 'Kompetensi Keahlian ATPH', 3),
(116, 'ATH3', 'Agribisnis Tanaman Hias', 'Kompetensi Keahlian ATPH', 3),
(117, 'PKJT3', 'Pembibitan dan Kultur Jaringan Tanaman', 'Kompetensi Keahlian ATPH', 3),
(118, 'ATP4', 'Agribisnis Tanaman Pangan', 'Kompetensi Keahlian ATPH', 4),
(119, 'ATS4', 'Agribisnis Tanaman Sayuran', 'Kompetensi Keahlian ATPH', 4),
(120, 'ATB4', 'Agribisnis Tanaman Buah', 'Kompetensi Keahlian ATPH', 4),
(121, 'ATH4', 'Agribisnis Tanaman Hias', 'Kompetensi Keahlian ATPH', 4),
(122, 'PKJT4', 'Pembibitan dan Kultur Jaringan Tanaman', 'Kompetensi Keahlian ATPH', 4),
(123, 'ATP5', 'Agribisnis Tanaman Pangan', 'Kompetensi Keahlian ATPH', 5),
(124, 'ATS5', 'Agribisnis Tanaman Sayuran', 'Kompetensi Keahlian ATPH', 5),
(125, 'ATB5', 'Agribisnis Tanaman Buah', 'Kompetensi Keahlian ATPH', 5),
(126, 'ATH5', 'Agribisnis Tanaman Hias', 'Kompetensi Keahlian ATPH', 5),
(127, 'PKJT5', 'Pembibitan dan Kultur Jaringan Tanaman', 'Kompetensi Keahlian ATPH', 5),
(128, 'ATP6', 'Agribisnis Tanaman Pangan', 'Kompetensi Keahlian ATPH', 6),
(129, 'ATS6', 'Agribisnis Tanaman Sayuran', 'Kompetensi Keahlian ATPH', 6),
(130, 'ATB6', 'Agribisnis Tanaman Buah', 'Kompetensi Keahlian ATPH', 6),
(131, 'ATH6', 'Agribisnis Tanaman Hias', 'Kompetensi Keahlian ATPH', 6),
(132, 'PKJT6', 'Pembibitan dan Kultur Jaringan Tanaman', 'Kompetensi Keahlian ATPH', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `konten` text NOT NULL,
  `id_kelas_mapel` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(6) NOT NULL,
  `NISN` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` enum('otomotif','multimedia','ATP','ATPH') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `NISN`, `nama_siswa`, `nohp`, `gender`, `jurusan`) VALUES
(1, 'siswa', 'siswa Dummy', '08123123', 'Perempuan', 'multimedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3000, 'Siswa', 'siswa', 'siswa'),
(5000, 'admin', 'admin', 'admin'),
(6000, 'guru', 'guru', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `NIP` (`NIP`);

--
-- Indeks untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  ADD PRIMARY KEY (`id_kelas_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indeks untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`),
  ADD KEY `id_kelas` (`id_kelas_mapel`),
  ADD KEY `NISN` (`NISN`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kelas_mapel` (`id_kelas_mapel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  MODIFY `id_kelas_mapel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  MODIFY `id_kelas_siswa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6002;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas_mapel`
--
ALTER TABLE `kelas_mapel`
  ADD CONSTRAINT `id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `NISN` FOREIGN KEY (`NISN`) REFERENCES `siswa` (`NISN`),
  ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas_mapel`) REFERENCES `kelas_mapel` (`id_kelas_mapel`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `id_kelas_mapel` FOREIGN KEY (`id_kelas_mapel`) REFERENCES `kelas_mapel` (`id_kelas_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
