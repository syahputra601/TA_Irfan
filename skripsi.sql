-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Sep 2018 pada 17.45
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_rekam`
--

CREATE TABLE IF NOT EXISTS `detail_rekam` (
`id_detailrekam` int(11) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `kode_obat` varchar(15) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `resep` varchar(200) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `detail_rekam`
--

INSERT INTO `detail_rekam` (`id_detailrekam`, `no_rm`, `kode_obat`, `diagnosa`, `resep`, `keluhan`, `keterangan`) VALUES
(11, 'RM-000001', 'OB004', 'Panas Dingin', '2x sehari sebelum makan.', 'Panas dingin di sekujur tubuh.', 'Harap obat dihabiskan.'),
(12, 'RM-000002', 'OB002', 'Perut kembung dan selalu mengeluarkan air liur.', '3x sehari sebelum makan.', 'Mual - mual dan lemas.', 'Harap habiskan obat.'),
(13, 'RM-000003', 'OB003', 'Mata merah dan kepala sakit.', '2x sehari sebelum makan.', 'Sakit kepala.', 'Harap Habiskan obat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kode_dokter` varchar(6) NOT NULL,
  `nama_dokter` varchar(25) NOT NULL,
  `no_telpdokter` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `no_telpdokter`) VALUES
('DT001', 'Syahputra', '081299865462'),
('DT002', 'Irfan', '082212319767'),
('DT003', 'Hasan', '083876598788'),
('DT004', 'Halimah', '082297976888'),
('DT005', 'Firman', '082299755484');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `nip` varchar(30) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl_kunjungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`nip`, `nama_pasien`, `kelamin`, `alamat`, `no_telp`, `tgl_kunjungan`) VALUES
('150442020021', 'Ahmad Fadillah', 'Laki-laki', 'Kemanggisan', '081231239912', '2018-10-17'),
('150442020023', 'Lina Qarlina', 'Perempuan', 'Keamanan', '082213881922', '2018-05-16'),
('150442020026', 'Ahmad Farhan', 'Laki-laki', 'Sungai Bambu', '089912312312', '2018-07-18'),
('150442020029', 'Gina Oktaviani', 'Perempuan', 'Cengkareng', '081213218879', '2018-08-23'),
('150442020033', 'Muhammad Bagus Farhan', 'Laki-laki', 'Tanjung Priuk', '081233123611', '2018-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `no_rm` varchar(15) NOT NULL,
  `kode_dokter` varchar(7) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rm`, `kode_dokter`, `nip`, `tgl_pemeriksaan`) VALUES
('RM-000001', 'DT001', '150442020021', '2018-09-01'),
('RM-000002', 'DT002', '150442020023', '2018-09-06'),
('RM-000003', 'DT003', '150442020026', '2018-08-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE IF NOT EXISTS `tbl_obat` (
  `kode_obat` varchar(6) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `tipe_obat` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode_obat`, `nama_obat`, `tipe_obat`, `jumlah`) VALUES
('OB001', 'Panadol Merah', 'Kapsul', '15'),
('OB002', 'Promagh', 'Kapsul', '25'),
('OB003', 'Paramex', 'Kapsul', '6'),
('OB004', 'Panadol Biru', 'Kapsul', '12'),
('OB005', 'Scots Emoltion', 'Cair', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'irfan', 'admin', 'irfan123', 1),
(3, 'firman', 'firman', 'firman13', 0),
(5, 'denis', 'denis', 'denis123', 1),
(10, 'putra', 'putra', 'putra123', 1),
(11, 'Pratama', 'pratama', 'pratama123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_rekam`
--
ALTER TABLE `detail_rekam`
 ADD PRIMARY KEY (`id_detailrekam`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
 ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
 ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_rekam`
--
ALTER TABLE `detail_rekam`
MODIFY `id_detailrekam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
