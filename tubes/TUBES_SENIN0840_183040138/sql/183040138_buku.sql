
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `183040138_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `foto` char(20) NOT NULL,
  `judul` char(42) NOT NULL,
  `tahun` year(4) NOT NULL,
  `penulis` char(42) NOT NULL,
  `penerbit` char(42) NOT NULL,
  `kategori` char(42) NOT NULL,
  `harga` char(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`foto`, `judul`, `tahun`, `penulis`, `penerbit`, `kategori`, `harga`) VALUES
('d.jpg', 'dilan 1990', 1990, 'Pidi Baiq', 'Motekar', 'Romantis', '56000'),
('fk.jpg', 'Filosofi Kopi', 2010, 'Dee Lestari', 'Hehahe kopi', 'Drama', '90000'),
('5.jpg', '5 cm', 2005, 'lima bersaudara', '', '', '');