-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Sep 2023 pada 11.51
-- Versi server: 10.2.44-MariaDB-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bork7743_boram`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `2.2.2-1`
--

CREATE TABLE `2.2.2-1` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `internasioanl` text DEFAULT NULL,
  `nasional` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `manfaat` text DEFAULT NULL,
  `durasi` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `lokal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `4.1.2.5`
--

CREATE TABLE `4.1.2.5` (
  `id` int(11) NOT NULL,
  `dosen` text DEFAULT NULL,
  `ps` text DEFAULT NULL,
  `pt` text DEFAULT NULL,
  `p_lain` text DEFAULT NULL,
  `sks` text DEFAULT NULL,
  `p2m` text DEFAULT NULL,
  `sendirii` text DEFAULT NULL,
  `lain` text DEFAULT NULL,
  `beban` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `8.2.2`
--

CREATE TABLE `8.2.2` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `ketua` text DEFAULT NULL,
  `tim` text DEFAULT NULL,
  `anggota` text DEFAULT NULL,
  `mahasiswa` text DEFAULT NULL,
  `idreee` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `8.2.2`
--

INSERT INTO `8.2.2` (`id`, `kode`, `judul`, `ketua`, `tim`, `anggota`, `mahasiswa`, `idreee`) VALUES
(0, '8.2.2', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `nisn` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nisn`, `username`, `password`, `level`) VALUES
(1, 'syamsul', '12132414132', 'syamsul', '564d5ea829ce8977fb848c0a654c7888', 'admin'),
(2, 'Administrator', '21323213', 'admin802', 'debc70edd685c8e96307e288e7a4e497', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id` int(11) NOT NULL,
  `prodi` text DEFAULT NULL,
  `jurusan` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `akredi` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `ketua` text DEFAULT NULL,
  `dosen` text DEFAULT NULL,
  `mahasiswa` text DEFAULT NULL,
  `libat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id`, `kode`, `judul`, `nama`, `ketua`, `dosen`, `mahasiswa`, `libat`) VALUES
(0, '7.2.2', 'g', 'g', 'g', 'g', 'g', 'g');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ami`
--

CREATE TABLE `ami` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nip` text DEFAULT NULL,
  `level` enum('ami') DEFAULT NULL,
  `file` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ami`
--

INSERT INTO `ami` (`id`, `nama`, `nik`, `nip`, `level`, `file`, `jk`, `username`, `password`) VALUES
(1, 'syamsul', NULL, '3123', 'ami', 'Catatan Kimia Kelas 10 - Struktur Atom.jpg', 'laki-laki', 'sul12', 'f0f7443be50206e2c849e8b50ef67ca9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id`, `judul`, `file`, `kode`) VALUES
(3, 'UPPS', 'Bukti Registrasi Data Mahasiswa PTIK UNM.pdf', NULL),
(6, 'UPPS', 'SK TM DAN TB 2023-2024-2.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpl`
--

CREATE TABLE `cpl` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `semester` text DEFAULT NULL,
  `mk` text DEFAULT NULL,
  `n_mk` text DEFAULT NULL,
  `teori` text DEFAULT NULL,
  `praktikum` text DEFAULT NULL,
  `praktik` text DEFAULT NULL,
  `pt` text DEFAULT NULL,
  `upps` text DEFAULT NULL,
  `ps` text DEFAULT NULL,
  `sesuaian` text DEFAULT NULL,
  `perangkat` text DEFAULT NULL,
  `sks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cpl`
--

INSERT INTO `cpl` (`id`, `kode`, `semester`, `mk`, `n_mk`, `teori`, `praktikum`, `praktik`, `pt`, `upps`, `ps`, `sesuaian`, `perangkat`, `sks`) VALUES
(0, '6.1.2.2', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dalam_n`
--

CREATE TABLE `dalam_n` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `jk_p` text DEFAULT NULL,
  `regulker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dana`
--

CREATE TABLE `dana` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `dana` text DEFAULT NULL,
  `j_dana` text DEFAULT NULL,
  `tes` text DEFAULT NULL,
  `tes1` text DEFAULT NULL,
  `tes2` text DEFAULT NULL,
  `rata` text DEFAULT NULL,
  `pengguna` text DEFAULT NULL,
  `penilitian` text DEFAULT NULL,
  `ketua` text DEFAULT NULL,
  `sumber` text DEFAULT NULL,
  `judul` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dana`
--

INSERT INTO `dana` (`id`, `kode`, `dana`, `j_dana`, `tes`, `tes1`, `tes2`, `rata`, `pengguna`, `penilitian`, `ketua`, `sumber`, `judul`) VALUES
(0, '5.1.2.1', 'k', 'k', 'k', 'k', 'k', 'k', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtps`
--

CREATE TABLE `dtps` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `j_dts` text DEFAULT NULL,
  `reguler` text DEFAULT NULL,
  `dosen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ilmiah`
--

CREATE TABLE `ilmiah` (
  `id` int(11) NOT NULL,
  `mahasiswa` text DEFAULT NULL,
  `judul` text DEFAULT NULL,
  `jumlah` text DEFAULT NULL,
  `jasa` text DEFAULT NULL,
  `produk` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `identitas` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ipk9`
--

CREATE TABLE `ipk9` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `lulus` text DEFAULT NULL,
  `minimun` text DEFAULT NULL,
  `rata` text DEFAULT NULL,
  `maksumin` text DEFAULT NULL,
  `mahasiswa` text DEFAULT NULL,
  `prestasi` text DEFAULT NULL,
  `waktu` text DEFAULT NULL,
  `inernasional` text DEFAULT NULL,
  `nasional` text DEFAULT NULL,
  `lokal` text DEFAULT NULL,
  `jumla` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karier`
--

CREATE TABLE `karier` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `kependidikan` text DEFAULT NULL,
  `kegiatan` text DEFAULT NULL,
  `pelaksana` text DEFAULT NULL,
  `bulan` text DEFAULT NULL,
  `waktu` text DEFAULT NULL,
  `tempat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `keuangan` text NOT NULL,
  `sarana` text NOT NULL,
  `prasaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `keuangan`, `sarana`, `prasaran`) VALUES
(1, 'Tabel 5.1.2.1  Pemerolehan Dana', '5.1.2.1', ''),
(2, 'Tabel 5.1.2.2 Penggunaan Dana', '5.1.2.2', ''),
(3, 'Tabel 5.1.2.3  Dana Penelitian', '5.1.2.3', ''),
(4, 'Tabel 5.1.2.4 Dana PkM', '5.1.2.4', ''),
(5, 'Tabel 5.2.2.1 Data Prasarana Pendidikan', '5.2.2.1', ''),
(6, 'Tabel 5.2.2.2 Data Sarana Pendidikan', '5.2.2.2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerja`
--

CREATE TABLE `kinerja` (
  `id` int(11) NOT NULL,
  `file` text DEFAULT NULL,
  `bulanan` text DEFAULT NULL,
  `tahunan` text DEFAULT NULL,
  `tgl` text DEFAULT NULL,
  `history` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkn`
--

CREATE TABLE `kkn` (
  `id` int(11) NOT NULL,
  `kegiatan` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kkn`
--

INSERT INTO `kkn` (`id`, `kegiatan`, `unit`, `status`) VALUES
(0, 'Tabel 8.2.2 Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam PkM', '8.2.2', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompotensi`
--

CREATE TABLE `kompotensi` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `dosen` text DEFAULT NULL,
  `keahlian` text DEFAULT NULL,
  `kegiatan` text DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `waktu` text DEFAULT NULL,
  `manfaat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliah`
--

CREATE TABLE `kuliah` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tes` text DEFAULT NULL,
  `tes1` text DEFAULT NULL,
  `tes2` text DEFAULT NULL,
  `jumlah` text DEFAULT NULL,
  `rata-rata` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `minat` text DEFAULT NULL,
  `bakat` text DEFAULT NULL,
  `penelaran` text DEFAULT NULL,
  `pembinaan` text DEFAULT NULL,
  `keporfesian` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `luar`
--

CREATE TABLE `luar` (
  `id` int(11) NOT NULL,
  `luaran` text DEFAULT NULL,
  `tridharma` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `luar`
--

INSERT INTO `luar` (`id`, `luaran`, `tridharma`) VALUES
(1, 'Tabel 9.1.2.1 IPK Lulusan', '9.1.2.1'),
(2, 'Tabel 9.1.2.2 Prestasi Mahasiswa', '9.1.2.2'),
(3, 'Tabel 9.1.2.3 Masa Studi, Kelulusan Tepat Waktu, dan Keberhasilan Studi', '9.1.2.3'),
(4, 'Tabel 9.1.2.4 Tracer Study, Waktu Tunggu Mendapatkan Pekerjaan Pertama', '9.1.2.4'),
(5, 'Tabel 9.1.2.5 Tingkat Relevansi Pekerjaan', '9.1.2.5'),
(6, 'Tabel 9.1.2.6 Tingkat Kepuasan Pengguna Lulusan', '9.1.2.6'),
(7, 'Tabel 9.2.2.1 Publikasi DTPS dan Mahasiswa', '9.2.2.1'),
(8, 'Tabel 9.2.2.2 Karya Ilmiah DTPS dan Mahasiswa yang Disitasi', '9.2.2.2'),
(9, 'Tabel 9.2.2.3 Produk atau Jasa DTPS dan Mahasiswa yang Diadopsi oleh Masyarakat', '9.2.2.3'),
(10, 'Tabel 9.2.2.4 Produk atau Jasa DTPS dan Mahasiswa yang Ber-HKI atau Paten', '9.2.2.4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `luar_n`
--

CREATE TABLE `luar_n` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `negeri` text DEFAULT NULL,
  `jk_l` text DEFAULT NULL,
  `jk_p` text DEFAULT NULL,
  `reguler` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nik` text NOT NULL,
  `tgl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nik`, `tgl`) VALUES
(2, 'Tabel 3.1.2.2 Mahasiswa Reguler', '3.1.2.2', ''),
(3, 'Tabel 3.1.2.3.1 Calon Mahasiswa Dalam Negeri ', '3.1.2.3.1', ''),
(4, 'Tabel 3.1.2.3.2 Calon Mahasiswa Luar Negeri', '3.1.2.3.2', ''),
(5, 'Tabel 3.2.2 Program layanan dan pembinaan minat, bakat, penalaran, kesejahteraan, dan keprofesian mahasiswa', '3.2.2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masa`
--

CREATE TABLE `masa` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `mahasiswa` text DEFAULT NULL,
  `akhir` text DEFAULT NULL,
  `akhir1` text DEFAULT NULL,
  `akhir2` text DEFAULT NULL,
  `akhir3` text DEFAULT NULL,
  `akhir4` text DEFAULT NULL,
  `akhir5` text DEFAULT NULL,
  `akhir6` text DEFAULT NULL,
  `tes` text DEFAULT NULL,
  `studi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pamon`
--

CREATE TABLE `pamon` (
  `id` int(11) NOT NULL,
  `tatapamon` text NOT NULL,
  `tatakelola` text NOT NULL,
  `kerjasma` text NOT NULL,
  `mitra` text DEFAULT NULL,
  `internasional` text DEFAULT NULL,
  `nasional` text DEFAULT NULL,
  `lokal` text DEFAULT NULL,
  `kerjasama` text DEFAULT NULL,
  `manfaat` text DEFAULT NULL,
  `durasi` text DEFAULT NULL,
  `bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pamon`
--

INSERT INTO `pamon` (`id`, `tatapamon`, `tatakelola`, `kerjasma`, `mitra`, `internasional`, `nasional`, `lokal`, `kerjasama`, `manfaat`, `durasi`, `bukti`) VALUES
(2, 'Tabel 2.2.2 Data Kerja Sama - Bidang Pendidikan', '2.2.2-1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tabel 2.2.2 Data Kerja Sama - Bidang Penelitian', '2.2.2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Tabel 2.2.2 Data Kerja Sama - Bidang Pengabdian kepada Masyarakat (PkM)', '2.2.2-3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Tabel 2.2.2 Data Kerja Sama - Bidang Pengembangan Kelembagaan: SDM, Sarana/Prasarana, Publikasi, HKI, Paten, Teknologi Pembelajaran, dll.', '2.2.2-4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `kurikulum` text NOT NULL,
  `akademik` text NOT NULL,
  `profesi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `kurikulum`, `akademik`, `profesi`) VALUES
(1, 'Tabel 6.1.2.2 Mata Kuliah, CPL, dan Perangkat Pembelajaran', '6.1.2.2', ''),
(2, 'Tabel 6.2.2.2 Integrasi Hasil Penelitian dan PkM dalam Proses Pembelajaran', '6.2.2.2', ''),
(3, 'Tabel 6.5.2.2 Jumlah Mahasiswa Bimbingan dan Frekuensi Pertemuan', '6.5.2.2', ''),
(4, 'Tabel 6.5.2.4 Jumlah Mahasiswa Bimbingan Magang Kependidikan dan Frekuensi Pertemuan', '6.5.2.4', ''),
(5, 'Tabel 6.5.2.6 Jumlah Mahasiswa Bimbingan Tugas Akhir atau Skripsi dan Frekuensi Pertemuan', '6.5.2.6', ''),
(6, 'Tabel 6.6.2.1 Kegiatan Akademik di Luar Perkuliahan', '6.6.2.1', ''),
(7, 'Tabel 6.6.2.2 Dosen Tamu dan Tenaga Ahli', '6.6.2.2', ''),
(8, 'Tabel 6.7.2 Kepuasan Mahasiswa', '6.7.2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilitian`
--

CREATE TABLE `penilitian` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `jenis` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilitian`
--

INSERT INTO `penilitian` (`id`, `judul`, `jenis`, `status`) VALUES
(1, 'Tabel 7.2.2 Aktivitas, Relevansi, dan Pelibatan Mahasiswa dalam Penelitian', '7.2.2', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkm`
--

CREATE TABLE `pkm` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `dosen` text DEFAULT NULL,
  `pkm` text DEFAULT NULL,
  `kuliah` text DEFAULT NULL,
  `integrasi` text DEFAULT NULL,
  `jumlah` text DEFAULT NULL,
  `semester` text DEFAULT NULL,
  `periode` text DEFAULT NULL,
  `ts` text DEFAULT NULL,
  `ts1` text DEFAULT NULL,
  `ts2` text DEFAULT NULL,
  `rata` text DEFAULT NULL,
  `ts3` text DEFAULT NULL,
  `ts4` text DEFAULT NULL,
  `ts5` text DEFAULT NULL,
  `rata3` text DEFAULT NULL,
  `program` text DEFAULT NULL,
  `pertemuan` text DEFAULT NULL,
  `keg` text DEFAULT NULL,
  `frekuensi` text DEFAULT NULL,
  `hasil` text DEFAULT NULL,
  `bukti` text DEFAULT NULL,
  `lembanga` text DEFAULT NULL,
  `kepakaran` text DEFAULT NULL,
  `waktu` text DEFAULT NULL,
  `bukti1` text DEFAULT NULL,
  `dtps` text DEFAULT NULL,
  `layanan` text DEFAULT NULL,
  `sarana` text DEFAULT NULL,
  `tindak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prasarana`
--

CREATE TABLE `prasarana` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `jenis` text DEFAULT NULL,
  `jumla` text DEFAULT NULL,
  `luas` text DEFAULT NULL,
  `sd` text DEFAULT NULL,
  `sw` text DEFAULT NULL,
  `terawat` text DEFAULT NULL,
  `t_terawat` text DEFAULT NULL,
  `pengguna` text DEFAULT NULL,
  `sarana` text DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `upps` text DEFAULT NULL,
  `kwalitas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `dosen` text DEFAULT NULL,
  `prestasi` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `internasional` text DEFAULT NULL,
  `nasional` text DEFAULT NULL,
  `lokal` text DEFAULT NULL,
  `bukti` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `prodi` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `akreditasi` text DEFAULT NULL,
  `tgl` text NOT NULL,
  `sta` text NOT NULL,
  `ft` text NOT NULL,
  `ket12` text NOT NULL,
  `sumberl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `file`, `ket`, `status`, `akreditasi`, `tgl`, `sta`, `ft`, `ket12`, `sumberl`) VALUES
(1, 'Pendidikan Teknik Mesin', 'S1', '248/DIKTI/Kep/1996', 'UNGGUL', '811/SK/LAMDIK/Ak/S/XII/2022', '3/27/2028', 'Masih berlaku', 'FT', '', 'PDDIKTI/LAMDIK'),
(2, 'Pendidikan Teknik Elektronika', 'S1', '5667/D/T/K-N/2011', 'A', '3132/SK/BAN-PT/Akred/S/XI/2018', '11/21/2023', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(3, 'Pendidikan Teknik Otomotif', 'S1', '4881/D/T/2004', 'UNGGUL', '739/SK/LAMDIK/Ak/S/XI/2022', '11/28/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/LAMDIK'),
(4, 'Pendidikan Teknik Informatika & Komputer', 'S1', '1584/D/T/2009', 'B', '1525/SK/BAN-PT/Akred/S/V/2019', '5/14/2024', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(5, 'Teknik Elektronika', 'D-III', '242/DIKTI/Kep/1997', 'B', '187/SK/BAN-PT/Akred/Dipl-III/I/2018', '1/9/2023', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(6, 'Pendidikan Teknologi Pertanian', 'S1', '974/E/T/2011', 'UNGGUL', '8000/SK/BAN-PT/Ak/S/X/2022', '10/18/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(7, 'Teknik Elektro', 'D-III', '242/DIKTI/Kep/1997', 'B', '1153/SK/BAN-PT/Akred/Dipl-III/V/2018', '5/2/2023', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(8, 'Mesin Otomotif', 'D-III', '3431/D/T/K-N/2010', 'B', '2619/SK/BAN-PT/Akred/Dipl-III/IX/2018', '9/18/2023', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(9, 'Teknik Mesin', 'D-III', '242/DIKTI/Kep/1997', 'B', '4565/SK/BAN-PT/Akred/Dipl-III/XII/2017', '12/5/2022', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(10, 'Teknik Sipil Bangunan Gedung', 'D-III', '242/DIKTI/Kep/1997', 'B', '5036/SK/BAN-PT/Akred/Dipl-III/XII/2017', '12/27/2022', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(11, 'Pendidikan Teknik Elektro', 'S1', '248/DIKTI/Kep/1996', 'UNGGUL', '776/SK/LAMDIK/Ak/S/XI/2022', '12/27/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/LAMDIK'),
(12, 'Pendidikan Teknik Bangunan', 'S1', '248/DIKTI/Kep/1996', 'UNGGUL', '2989/SK/BAN-PT/Akred/S/V/2021', '5/18/2026', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(13, 'Pendidikan Kesejahteraan Keluarga', 'S1', '248/DIKTI/Kep/1996', 'B', '3277/SK/BAN-PT/Ak-PPJ/S/V/2020', '5/24/2025', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(14, 'Pendidikan Vokasional Mekatronika', 'S1', '4397/A4.1/HK/2017', 'BAIK', '6020/SK/BAN-PT/Akred/S/VI/2021', '6/2/2026', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(15, 'Tata Busana', 'D-III', '242/DIKTI/Kep/1997', 'BAIK', '6687/SK/BAN-PT/Ak/D3/X/2022', '10/4/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(16, 'Tata Boga', 'D-III', '242/DIKTI/Kep/1997', 'BAIK', '7838/SK/BAN-PT/Ak.KP/D3/X/2022', '7/9/2024', 'Masih berlaku', 'FT', 'Akan ditutup', 'PDDIKTI/BAN-PT'),
(17, 'Teknik Komputer', 'S1', '4353/A4.1/HK/2017', 'BAIK', '13280/SK/BAN-PT/Akred/S/XII/2021', '12/15/2026', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(18, 'Arsitektur', 'S1', '15/M/2020', 'BAIK', '9677/SK/BAN-PT/Ak/S/XI/2022', '11/22/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(19, 'Teknik Elektronika', 'D-IV', '1062/KPT/I/2019', 'BAIK', '  8447/SK/BAN-PT/Ak/STr/X/2022', '10/25/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(20, 'Mesin Otomotif', 'D-IV', '1062/KPT/I/2019', 'BAIK', '877/SK/BAN-PT/Ak/STr/III/2023', '14 Maret 2028.', 'Masih berlaku ', 'FT', '', 'PDDIKTI/BAN-PT'),
(21, 'Teknik Mesin', 'D-IV', '1062/KPT/I/2019', 'BAIK', '6697/SK/BAN-PT/Ak/STr/X/2022', '10/4/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(22, 'Teknik Elektro', 'D-IV', '1062/KPT/I/2019', 'BAIK', '2108/SK/BAN-PT/Ak-PKP/ST/III/2022', '10/30/2027', 'Menunggu Proses', 'FT', '', 'PDDIKTI/BAN-PT'),
(23, 'Teknik Sipil Bangunan Gedung', 'D-IV', '1062/KPT/I/2019', 'BAIK', '888/SK/BAN-PT/Ak/STr/III/2023', '14 Maret 2028', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT'),
(24, 'Tata Boga', 'D-IV', '1062/KPT/I/2019', 'BAIK', '5778/SK/BAN-PT/Ak/STr/VIII/2022', '8/30/2027', 'Masih berlaku', 'FT', '', 'PDDIKTI/BAN-PT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `kependidikan` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `bidang` text DEFAULT NULL,
  `pendidikan` text DEFAULT NULL,
  `unit` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ps`
--

CREATE TABLE `ps` (
  `id` int(11) NOT NULL,
  `dosen_t` text DEFAULT NULL,
  `nidn` text DEFAULT NULL,
  `tgl` text DEFAULT NULL,
  `sertifikat` text DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `gelar` text DEFAULT NULL,
  `pt` text DEFAULT NULL,
  `bidang` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ps`
--

INSERT INTO `ps` (`id`, `dosen_t`, `nidn`, `tgl`, `sertifikat`, `jabatan`, `gelar`, `pt`, `bidang`, `kode`) VALUES
(0, 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', '4.1.2.2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ps1`
--

CREATE TABLE `ps1` (
  `id` int(11) NOT NULL,
  `dosen_t` text DEFAULT NULL,
  `nidn` text DEFAULT NULL,
  `tgl` text DEFAULT NULL,
  `sertifikat` text DEFAULT NULL,
  `jabatan` text DEFAULT NULL,
  `gelar` text DEFAULT NULL,
  `pt` text DEFAULT NULL,
  `bidang` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reguler`
--

CREATE TABLE `reguler` (
  `id` int(11) NOT NULL,
  `tahun` text DEFAULT NULL,
  `tampung` int(225) DEFAULT NULL,
  `pendaftar` text DEFAULT NULL,
  `lulus` text DEFAULT NULL,
  `baru` text DEFAULT NULL,
  `mahas` text DEFAULT NULL,
  `kode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reguler`
--

INSERT INTO `reguler` (`id`, `tahun`, `tampung`, `pendaftar`, `lulus`, `baru`, `mahas`, `kode`) VALUES
(0, 'j', 0, 'j', 'j', 'j', 'j', '3.1.2.2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spmi`
--

CREATE TABLE `spmi` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nip` text DEFAULT NULL,
  `level` enum('spmi') DEFAULT NULL,
  `file` text DEFAULT NULL,
  `jk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `upps1`
--

CREATE TABLE `upps1` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `pendidikan` text DEFAULT NULL,
  `penilitian` text DEFAULT NULL,
  `pkm` text DEFAULT NULL,
  `publikasi` text DEFAULT NULL,
  `inevstasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upps1`
--

INSERT INTO `upps1` (`id`, `kode`, `tahun`, `pendidikan`, `penilitian`, `pkm`, `publikasi`, `inevstasi`) VALUES
(2, 'UPPS-2', 'q', 'q', 'q', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `kode` text DEFAULT NULL,
  `n_program` text DEFAULT NULL,
  `j_program` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `n_sk` text DEFAULT NULL,
  `tgl_sk` text DEFAULT NULL,
  `t_kad` text DEFAULT NULL,
  `j_mahasiswa` text DEFAULT NULL,
  `dtps` text DEFAULT NULL,
  `ipk` text DEFAULT NULL,
  `studi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `kode`, `n_program`, `j_program`, `status`, `n_sk`, `tgl_sk`, `t_kad`, `j_mahasiswa`, `dtps`, `ipk`, `studi`) VALUES
(2, 'UPPS-1', 'w', 'w', 'w', 'w', 'ww', 'w', 's', 's', 's', 's');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `upps1`
--
ALTER TABLE `upps1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `upps1`
--
ALTER TABLE `upps1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
