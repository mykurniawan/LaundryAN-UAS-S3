-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 01:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeniscucian`
--

CREATE TABLE `jeniscucian` (
  `idJC` int(11) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeniscucian`
--

INSERT INTO `jeniscucian` (`idJC`, `paket`, `harga`) VALUES
(1, 'Pakaian', 2000),
(2, 'Selimut', 6000),
(4, 'Karpet', 7000),
(5, 'Jaket', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `tmember`
--

CREATE TABLE `tmember` (
  `idMember` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `notelepon` varchar(25) NOT NULL,
  `jeniskelamin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tmember`
--

INSERT INTO `tmember` (`idMember`, `nama`, `alamat`, `notelepon`, `jeniskelamin`) VALUES
(2, 'Yohanes', 'Mojokerto', '086572980', 'Laki - laki'),
(3, 'Lula', 'Jakarta Barat', '21213332', 'Perempuan'),
(4, 'Retno', 'Malang', '94205', 'Perempuan'),
(5, 'Sudirman', 'jalan A', '1345552124', 'Laki - laki'),
(6, 'Dian', 'Mojokerto', '2143134', 'Laki - laki'),
(7, 'Rifki', 'Blimbing', '0876578543', 'Laki - laki'),
(8, 'Bagus', 'jalan A', '0865722341', 'Laki - laki'),
(9, 'Renata', 'jalan A', '0938223741', 'Perempuan'),
(11, 'Dian', 'Sampang Madura', '086572', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `torder`
--

CREATE TABLE `torder` (
  `idOrder` int(11) NOT NULL,
  `member` int(11) NOT NULL,
  `jeniscucian` int(11) NOT NULL,
  `berat` int(13) NOT NULL,
  `status` int(11) NOT NULL,
  `tglMasuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `torder`
--

INSERT INTO `torder` (`idOrder`, `member`, `jeniscucian`, `berat`, `status`, `tglMasuk`) VALUES
(5, 4, 2, 7, 4, '2023-01-09'),
(17, 9, 4, 7, 4, '2023-01-05'),
(22, 7, 1, 3, 1, '2023-01-01'),
(27, 2, 1, 8, 1, '2023-01-10'),
(34, 11, 5, 5, 4, '2023-01-08'),
(35, 2, 1, 4, 1, '2023-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `toutlet`
--

CREATE TABLE `toutlet` (
  `idOutlet` int(11) NOT NULL,
  `namaOutlet` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `teleponOutlet` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toutlet`
--

INSERT INTO `toutlet` (`idOutlet`, `namaOutlet`, `alamat`, `teleponOutlet`) VALUES
(1, 'Outlet1A', 'Kediri', '08637356'),
(2, 'Outlet1B', 'Wonogiri', '0863754');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `orderan` int(11) NOT NULL,
  `paketc` varchar(20) NOT NULL,
  `hargaperkg` int(10) NOT NULL,
  `beratc` varchar(20) NOT NULL,
  `tglM` date DEFAULT NULL,
  `bayar` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `atasnama` varchar(50) NOT NULL,
  `karyawan` varchar(50) NOT NULL,
  `tempatoutlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `orderan`, `paketc`, `hargaperkg`, `beratc`, `tglM`, `bayar`, `tgl`, `atasnama`, `karyawan`, `tempatoutlet`) VALUES
(54, 22, 'Pakaian', 2000, '3 kg', '2023-01-01', 6000, '2023-01-11', 'Rifki', 'josepK ', 1),
(55, 27, 'Pakaian', 2000, '8 kg', '2023-01-10', 16000, '2023-01-11', 'Yohanes', 'josepK ', 1),
(56, 5, 'Selimut', 6000, '7 kg', '2023-01-09', 42000, '2023-01-11', 'Retno', 'josepK ', 1),
(57, 17, 'Karpet', 7000, '7 kg', '2023-01-05', 49000, '2023-01-11', 'Renata', 'admin1', 1),
(58, 34, 'Jaket', 4000, '5 kg', '2023-01-08', 20000, '2023-01-11', 'Dian', 'admin1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tstatus`
--

CREATE TABLE `tstatus` (
  `idStatus` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tstatus`
--

INSERT INTO `tstatus` (`idStatus`, `keterangan`) VALUES
(1, 'Diterima'),
(2, 'Dicuci'),
(3, 'Selesai'),
(4, 'Dibayar'),
(5, 'Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `level` enum('admin','kasir','owner') NOT NULL,
  `jk` enum('Laki - Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `alamat`, `username`, `password`, `telepon`, `level`, `jk`) VALUES
(1, 'Kurniawan', 'Kediri, Jawa Timur', 'admin1', '81dc9bdb52d04dc20036dbd8313ed055', '086378843325', 'admin', 'Laki - Laki'),
(3, 'jon', 'Malang', 'jon', '81dc9bdb52d04dc20036dbd8313ed055', '085678843337', 'kasir', 'Laki - Laki'),
(13, 'Ryan', 'Pasuruan', 'ownerK', '81dc9bdb52d04dc20036dbd8313ed055', '086378811125', 'owner', 'Laki - Laki'),
(17, 'hadid', 'Mojokerto', 'hadiKasir ', '81dc9bdb52d04dc20036dbd8313ed055', '0987532345', 'kasir', 'Laki - Laki'),
(18, 'juned', 'Mojoroto', 'juned', '81dc9bdb52d04dc20036dbd8313ed055', '0891011', 'kasir', 'Laki - Laki'),
(19, 'Elsa', 'Blimbing', 'Elsa ', '81dc9bdb52d04dc20036dbd8313ed055', '0987123', 'kasir', 'Perempuan'),
(20, 'josep', 'Sengkaling', 'josepK ', '81dc9bdb52d04dc20036dbd8313ed055', '089108934', 'kasir', 'Laki - Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeniscucian`
--
ALTER TABLE `jeniscucian`
  ADD PRIMARY KEY (`idJC`);

--
-- Indexes for table `tmember`
--
ALTER TABLE `tmember`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `torder`
--
ALTER TABLE `torder`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `mo` (`member`),
  ADD KEY `ojc` (`jeniscucian`),
  ADD KEY `os` (`status`);

--
-- Indexes for table `toutlet`
--
ALTER TABLE `toutlet`
  ADD PRIMARY KEY (`idOutlet`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `ot` (`orderan`),
  ADD KEY `to` (`tempatoutlet`);

--
-- Indexes for table `tstatus`
--
ALTER TABLE `tstatus`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeniscucian`
--
ALTER TABLE `jeniscucian`
  MODIFY `idJC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tmember`
--
ALTER TABLE `tmember`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `torder`
--
ALTER TABLE `torder`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `toutlet`
--
ALTER TABLE `toutlet`
  MODIFY `idOutlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tstatus`
--
ALTER TABLE `tstatus`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `torder`
--
ALTER TABLE `torder`
  ADD CONSTRAINT `torder_ibfk_1` FOREIGN KEY (`member`) REFERENCES `tmember` (`idMember`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `torder_ibfk_3` FOREIGN KEY (`status`) REFERENCES `tstatus` (`idStatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `torder_ibfk_4` FOREIGN KEY (`jeniscucian`) REFERENCES `jeniscucian` (`idJC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`orderan`) REFERENCES `torder` (`idOrder`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`tempatoutlet`) REFERENCES `toutlet` (`idOutlet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
