-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2017 pada 08.38
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id_agenda` int(11) NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `id_kat_agenda` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `agenda`, `tgl_agenda`, `id_kat_agenda`) VALUES
(1, 'coba', '2017-05-07', 2),
(2, 'tes', '2017-08-24', 3),
(3, 'imunisasi', '2017-07-15', 3),
(4, 'pemeriksaan ibu hamil', '2017-07-18', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nip`, `nama`, `jabatan`, `unit`, `golongan`) VALUES
('19640713 198903 1 01', 'Ruyanto, S.E', 'Kepala Subag .TU', 'Staff Administrasi', 'III C'),
('19660915 198801 1001', 'Moh. Fauzi, S. KM', 'Nutrision ', 'Gizi', 'III D'),
('19680423 198903 1 00', 'Sapto Santoso, S.KM', 'Perawat', 'Rawat Inap', 'III D'),
('19680425 200212 1 00', 'Dr. Aris Triyanto', 'Kepala UTPD / Pimpinan BLUD', 'BP. Umum ', 'IV B'),
('19680624 199101 1 00', 'Muslimin, S.KM', 'Dokter Umum', 'P2P', 'III B'),
('19691123 198912 2 00', 'Betty Setyowati, S. ST', 'Bidan ', 'KB ', 'III D'),
('19700219 199103 2 00', 'Sarini, A.Md. Keb', 'Bidan ', 'PONET', 'III D'),
('19701106 199402 2 00', 'Wiji Astuti, A.Md.Keb', 'Analisis Kesehatan ', 'Laborat', 'III D'),
('19710509 198912 2 00', 'Mufridah, A.Md. Keb ', 'Bidan', 'PONET', 'III D'),
('19730715 199303 2 00', 'Kusniati A.Md.Keb', 'Bidan ', 'Imunisasi ', 'III D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_agenda`
--

CREATE TABLE IF NOT EXISTS `kategori_agenda` (
`id_kat_agenda` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_agenda`
--

INSERT INTO `kategori_agenda` (`id_kat_agenda`, `nama`) VALUES
(1, 'Harian'),
(2, 'Bulanan'),
(3, 'tahunan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surat`
--

CREATE TABLE IF NOT EXISTS `kategori_surat` (
  `id_kat_surat` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_surat`
--

INSERT INTO `kategori_surat` (`id_kat_surat`, `nama`) VALUES
('005', 'Undangan'),
('440', 'Kesehatan'),
('441', 'Pembinaan Kesehatan'),
('441.1', 'Gizi'),
('441.2', 'Mata'),
('441.3', 'Jiwa'),
('441.4', 'Kanker'),
('441.5', 'Usaha Kegiatan Sekolah (UKS)'),
('441.6', 'Perawatan'),
('441.7', 'Penyuluhan Kesehatan Masyarakat (PKM)'),
('441.8', 'Pekan Imunisasi Nasional'),
('442', 'Obat - Obatan '),
('442.1', 'Pengadaan'),
('442.2', 'Penyimpanan'),
('443', 'Penyakit Menular'),
('443.1', 'Pencegahan'),
('443.2', 'Pemberantasan dan Pencegahan Penyakit Menular Langsung (P2ML)'),
('443.21', 'Kusta'),
('443.22', 'Kelamin'),
('443.23', 'Frambosia'),
('443.24', 'TBC / AIDS / HIV'),
('443.3', 'Epidemiologi dan Karantina (Epidka)'),
('443.31', 'Kholera'),
('443.32', 'Imunisasi'),
('443.33', 'Survailense'),
('443.34', 'Rabies (Anjing Gila) Antraks'),
('443.4', 'Pemberantasan & Pencegahan Penyakit Menular SumberBinatang (P2B)'),
('443.41', 'Malana '),
('443.42', 'Dengue Faemorrhagic Fever (Demam Berdarah HDF)'),
('443.43', 'Filaria'),
('443.44', 'Serangga'),
('443.5', 'Hygiene Sanitasi '),
('443.51', 'Tempat-tempat Pembuatan dan Penjualan Makanan dan Minumam (TPPMM)'),
('443.52', 'Sarana Air Minum dan Jamban Keluarga (Samijaga)'),
('443.53', 'Pestidida');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `nomer_surat` varchar(20) NOT NULL,
  `id_kat_surat` int(20) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `alamat_penerima` text NOT NULL,
  `perihal` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`nomer_surat`, `id_kat_surat`, `tgl_keluar`, `alamat_penerima`, `perihal`, `foto`, `id_user`) VALUES
('0906/12/XX/2017', 440, '2017-02-12', 'Pemalang', 'Kesehatan Masyarakat', 'http://localhost/surat/assets/images/surat_keluar/0b470056-3b5e-4f05-ad1c-62d02f587f311.jpg', 3),
('41654654', 2, '2017-06-14', 'geag', 'gege', 'http://localhost/surat/assets/images/surat_keluar/022.jpg', 1),
('sss', 1, '2017-07-15', 'ss', 'aa', 'http://localhost/surat/assets/images/surat_keluar/', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `nomer_surat` varchar(20) NOT NULL,
  `id_kat_surat` int(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `alamat_pengirim` text NOT NULL,
  `perihal` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`nomer_surat`, `id_kat_surat`, `tgl_masuk`, `alamat_pengirim`, `perihal`, `foto`, `id_user`) VALUES
('07/23/123/2017', 441, '2017-09-09', 'pemalang', 'pemeriksaan makanan di posyandu', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170720_113604.jpg', 3),
('082242829925', 1, '2017-06-06', 'pemalang ', 'peri kecil', 'http://localhost/surat/assets/images/surat_masuk/18-19.jpg', 1),
('111/11', 442, '2017-06-09', 'Jln, Nusa Indah', 'Ulang tahun gue', 'http://localhost/surat/assets/images/surat_masuk/f933b1b6-7808-4ce6-bb4d-422167af7c87.png', 3),
('12/IV/231/005', 6, '2017-09-09', 'pemalang', 'coba', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170710_111120.jpg', 1),
('123', 5, '2017-07-28', 'xx', 'xss', 'http://localhost/surat/assets/images/surat_masuk/IMG_y8p7vb1.jpg', 2),
('123/09/2017/V', 1, '2017-10-20', 'TEGAL', 'PENYULUHAN KB', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170709_120635.jpg', 3),
('123/09/X/2017', 5, '2017-12-08', 'Puskesmas Slawi ', 'Pengangkatan Ketua Umum Baru', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170719_020632.jpg', 2),
('123/iv', 1, '2017-07-08', 'ddd', 'dd', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170702_1039351.jpg', 2),
('dc', 2, '2017-07-27', 'dc', 'dc', 'http://localhost/surat/assets/images/surat_masuk/IMG_20170718_083409.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` char(1) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`, `foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'a', ''),
(2, 'super Admin', 'super', 'b72f2e56cb6752ba73612fa5ce88b3b0', 's', 'http://localhost/surat/assets/images/profil/'),
(3, 'yuniar', 'yuniar', 'b72f2e56cb6752ba73612fa5ce88b3b0', 'c', 'http://localhost/surat/assets/images/profil/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
 ADD PRIMARY KEY (`id_kat_agenda`);

--
-- Indexes for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
 ADD PRIMARY KEY (`id_kat_surat`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
 ADD PRIMARY KEY (`nomer_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
 ADD PRIMARY KEY (`nomer_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
MODIFY `id_kat_agenda` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
