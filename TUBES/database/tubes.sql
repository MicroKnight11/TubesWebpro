-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 03:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `ddr4_sdram`
--

CREATE TABLE `ddr4_sdram` (
  `name` varchar(30) NOT NULL,
  `density` varchar(4) NOT NULL,
  `status` varchar(15) NOT NULL,
  `depth` varchar(5) NOT NULL,
  `width` varchar(3) NOT NULL,
  `temp` varchar(13) NOT NULL,
  `speed` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ddr4_sdram`
--

INSERT INTO `ddr4_sdram` (`name`, `density`, `status`, `depth`, `width`, `temp`, `speed`) VALUES
('MT40A1G4RH-083E', '4Gb', 'Production', '1Gb', 'x4', '0C to +95C', 'DDR4-2400'),
('MT40A1G4SA-075', '4Gb', 'Production', '1Gb', 'x4', '0C to +95C', 'DDR3-1333'),
('MT40A256M16GE-075E AAT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +105C', 'DDR4-2666'),
('MT40A256M16GE-075E AIT', '4Gb', 'Contact Factory', '256Mb', 'x16', '-40C to +95C', 'DDR4-2666'),
('MT40A256M16GE-075E AUT', '4Gb', 'Contact Factory', '256Mb', 'x16', '-40C to +125C', 'DDR4-2666'),
('MT40A256M16GE-075E IT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +95C', 'DDR4-2666'),
('MT40A256M16GE-083E AAT', '4Gb', 'Contact Factory', '256Mb', 'x16', '-40C to +105C', 'DDR4-2400'),
('MT40A256M16GE-083E AIT', '4Gb', 'Contact Factory', '256Mb', 'x16', '-40C to +95C', 'DDR4-2400'),
('MT40A256M16GE-083E AUT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +125C', 'DDR4-2400'),
('MT40A256M16GE-083E IT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +95C', 'DDR4-2400'),
('MT40A256M16LY-062E AAT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +105C', 'DDR4-3200'),
('MT40A256M16LY-062E AIT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +95C', 'DDR4-3200'),
('MT40A256M16LY-062E AUT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +125C', 'DDR4-3200'),
('MT40A256M16LY-062E IT', '4Gb', 'Production', '256Mb', 'x16', '-40C to +95C', 'DDR4-1600'),
('MT40A256M16LY-075', '4Gb', 'Production', '256Mb', 'x16', '0C to +95C', 'DDR4-1333'),
('MT40A512M8RH-075E AAT', '4Gb', 'Contact Factory', '512Mb', 'x8', '-40C to +105C', 'DDR4-2666'),
('MT40A512M8RH-075E AIT', '4Gb', 'Contact Factory', '512Mb', 'x8', '-40C to +95C', 'DDR4-2666'),
('MT40A512M8RH-083E', '4Gb', 'Production', '512Mb', 'x8', '0C to +95C', 'DDR4-2400'),
('MT40A512M8RH-083E AAT', '4Gb', 'Contact Factory', '512Mb', 'x8', '-40C to +105C', 'DDR4-2400'),
('MT40A512M8RH-083E AIT', '4Gb', 'Contact Factory', '512Mb', 'x8', '-40C to +95C', 'DDR4-2400'),
('MT40A512M8RH-083E IT', '4Gb', 'Production', '512Mb', 'x8', '-40C to +95C', 'DDR4-2400'),
('MT40A512M8SA-062', '4Gb', 'Production', '512Mb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A512M8SA-062 AAT', '4Gb', 'Production', '512Mb', 'x8', '-40C to +105C', 'DDR4-3200'),
('MT40A512M8SA-062 AIT', '4Gb', 'Production', '512Mb', 'x8', '-40C to +95C', 'DDR4-3200'),
('MT40A512M8SA-062 AUT', '4Gb', 'Production', '512Mb', 'x8', '-40C to +125C', 'DDR4-3200'),
('MT40A512M8SA-062 IT', '4Gb', 'Production', '512Mb', 'x8', '-40C to +95C', 'DDR4-3200'),
('MT40A512M8SA-075', '4Gb', 'Production', '512Mb', 'x8', '0C to +95C', 'DDR4-1333'),
('MT40A512M8WE-075E', '4Gb', 'Contact Factory', '512Mb', 'x8', '0C to +95C', 'DDR4-2666'),
('MT40A1G8SA-062E', '8Gb', 'Production', '1Gb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A1G8SA-062E AAT', '8Gb', 'Production', '1Gb', 'x8', '-40C to +105C', 'DDR4-3200'),
('MT40A1G8SA-062E AIT', '8Gb', 'Production', '1Gb', 'x8', '-40C to +95C', 'DDR4-3200'),
('MT40A1G8SA-062E AUT', '8Gb', 'Production', '1Gb', 'x8', '-40C to +125C', 'DDR4-3200'),
('MT40A1G8SA-062E IT', '8Gb', 'Production', '1Gb', 'x8', '-40C to +95C', 'DDR4-3200'),
('MT40A1G8SA-075', '8Gb', 'Production', '1Gb', 'x8', '0C to +95C', 'DDR4-2666'),
('MT40A1G8WE-075E AIT', '8Gb', 'Contact Factory', '1Gb', 'x8', '-40C to +95C', 'DDR4-2666'),
('MT40A1G8WE-083E', '8Gb', 'Production', '1Gb', 'x8', '0C to +95C', 'DDR4-2400'),
('MT40A1G8WE-083E AAT', '8Gb', 'Contact Factory', '1Gb', 'x8', '-40C to +105C', 'DDR4-2400'),
('MT40A1G8WE-083E AIT', '8Gb', 'Contact Factory', '1Gb', 'x8', '-40C to +95C', 'DDR4-2400'),
('MT40A1G8WE-083E AUT', '8Gb', 'Contact Factory', '1Gb', 'x8', '-40C to +125C', 'DDR4-2400'),
('MT40A1G8WE-083E IT', '8Gb', 'Production', '1Gb', 'x8', '-40C to +95C', 'DDR4-2400'),
('MT40A2G4SA-062E', '8Gb', 'Production', '2Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A2G4SA-075', '8Gb', 'Production', '2Gb', 'x4', '0C to +95C', 'DDR4-2666'),
('MT40A2G4WE-083E', '8Gb', 'Production', '2Gb', 'x4', '0C to +95C', 'DDR4-2400'),
('MT40A512M16JY-062E', '8Gb', 'Production', '512Mb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A512M16JY-062E IT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +95C', 'DDR4-3200'),
('MT40A512M16JY-075E AIT', '8Gb', 'Contact Factory', '512Mb', 'x16', '-40C to +95C', 'DDR4-2666'),
('MT40A512M16JY-083E', '8Gb', 'Production', '512Mb', 'x16', '0C to +95C', 'DDR4-2400'),
('MT40A512M16JY-083E AAT', '8Gb', 'Contact Factory', '512Mb', 'x16', '-40C to +105C', 'DDR4-2400'),
('MT40A512M16JY-083E AIT', '8Gb', 'Contact Factory', '512Mb', 'x16', '-40C to +95C', 'DDR4-2400'),
('MT40A512M16JY-083E AUT', '8Gb', 'Contact Factory', '512Mb', 'x16', '-40C to +125C', 'DDR4-2400'),
('MT40A512M16JY-083E IT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +95C', 'DDR4-2400'),
('MT40A512M16LY-062E', '8Gb', 'Production', '512Mb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A512M16LY-062E AAT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +105C', 'DDR4-3200'),
('MT40A512M16LY-062E AIT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +95C', 'DDR4-3200'),
('MT40A512M16LY-062E AT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +105C', 'DDR4-3200'),
('MT40A512M16LY-062E AUT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +125C', 'DDR4-3200'),
('MT40A512M16LY-062E IT', '8Gb', 'Production', '512Mb', 'x16', '-40C to +95C', 'DDR4-3200'),
('MT40A512M16LY-075', '8Gb', 'Production', '512Mb', 'x16', '0C to +95C', 'DDR4-2666'),
('MT40A512M16TB-062E', '8Gb', 'Production', '512Mb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A1G16KD-062E', '16Gb', 'Production', '1Gb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A1G16KNR-062E', '16Gb', 'Production', '1Gb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A1G16KNR-075', '16Gb', 'Production', '1Gb', 'x16', '0C to +95C', 'DDR4-2666'),
('MT40A1G16RC-062E', '16Gb', 'Production', '1Gb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A1G16RC-062E IT', '16Gb', 'Production', '1Gb', 'x16', '-40C to +95C', 'DDR4-3200'),
('MT40A1G16WBU-083E', '16Gb', 'Production', '1Gb', 'x16', '0C to +95C', 'DDR4-2400'),
('MT40A2G8JC-062E', '16Gb', 'Production', '2Gb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A2G8NEA-062E', '16Gb', 'Production', '2Gb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A2G8NRE-083E', '16Gb', 'Production', '2Gb', 'x8', '0C to +95C', 'DDR4-2400'),
('MT40A2G8VA-062E', '16Gb', 'Production', '2Gb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A2G8VA-062E IT', '16Gb', 'Production', '2Gb', 'x8', '-40C to +95C', 'DDR4-3200'),
('MT40A4G4DVN-062H', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A4G4DVN-068H', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-2933'),
('MT40A4G4DVN-075H', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-2666'),
('MT40A4G4JC-062E', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A4G4NRE-068', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-2933'),
('MT40A4G4VA-062E', '16Gb', 'Production', '4Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A2G16SKL-062E', '32Gb', 'Sampling', '2Gb', 'x16', '0C to +95C', 'DDR4-3200'),
('MT40A4G8BAF-062E', '32Gb', 'Production', '4Gb', 'x8', '0C to +95C', 'DDR4-3200'),
('MT40A8G4BAF-062E', '32Gb', 'Sampling', '8Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A8G4CLU-062H', '32Gb', 'Production', '8Gb', 'x4', '0C to +95C', 'DDR4-3200'),
('MT40A8G4CLU-068H', '32Gb', 'Production', '8Gb', 'x4', '0C to +95C', 'DDR4-2933'),
('MT40A8G4CLU-075H', '32Gb', 'Production', '8Gb', 'x4', '0C to +95C', 'DDR4-2666');

-- --------------------------------------------------------

--
-- Table structure for table `product_family`
--

CREATE TABLE `product_family` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_family`
--

INSERT INTO `product_family` (`id`, `name`) VALUES
(1, 'Advanced Solutions'),
(2, 'DRAM'),
(3, 'DRAM Modules'),
(4, 'Managed NAND'),
(5, 'Memory Cards'),
(6, 'Multichip Packages'),
(7, 'NAND Flash'),
(8, 'NOR Flash'),
(9, 'SSDs'),
(10, 'Ultra-Bandwidth Solutions');

-- --------------------------------------------------------

--
-- Table structure for table `product_technology`
--

CREATE TABLE `product_technology` (
  `id` int(2) NOT NULL,
  `name` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_technology`
--

INSERT INTO `product_technology` (`id`, `name`) VALUES
(1, 'Authenta'),
(2, 'DDR SDRAM'),
(2, 'DDR2 SDRAM'),
(2, 'DDR3 SDRAM'),
(2, 'DDR4 SDRAM'),
(2, 'LPDRAM'),
(2, 'LPDRAM'),
(2, 'RLDRAM'),
(2, 'SDRAM'),
(3, 'LRDIMM'),
(3, 'Mini-DIMM'),
(3, 'NVDIMM'),
(3, 'RDIMM'),
(3, 'SODIMM'),
(3, 'SORDIMM'),
(3, 'UDIMM'),
(3, 'VLP Mini-DIMM'),
(3, 'VLP RDIMM'),
(3, 'VLP UDIMM'),
(4, 'e.MMC'),
(4, 'e.MMC for Automotive'),
(4, 'Embedded USB'),
(4, 'Universal Flash Storage'),
(5, 'Industrial microSD Cards'),
(6, 'e.MMC-Based MCP'),
(6, 'NAND-Based MCP'),
(7, '3D NAND Flash'),
(7, 'Enterprise MLC'),
(7, 'FortisFlash'),
(7, 'MLC NAND Flash'),
(7, 'Serial NAND Flash'),
(7, 'SLC NAND Flash'),
(7, 'TLC NAND Flash'),
(8, 'Legacy NOR Flash'),
(8, 'MT25Q'),
(8, 'NOR Flash for Automotive'),
(8, 'Parallel NOR Flash'),
(8, 'Secure NOR Flash'),
(8, 'Serial NOR Flash'),
(8, 'Twin-Quad NOR Flash'),
(8, 'Wafer Level CSP and KGD NOR Flash'),
(8, 'Xccela Flash'),
(9, '1100'),
(9, '1300'),
(9, '2200'),
(9, '2210'),
(9, '2300'),
(9, '5100'),
(9, '5200'),
(9, '5210'),
(9, '5300'),
(9, '7300'),
(9, '9200'),
(9, '9300'),
(9, 'Client SSD'),
(9, 'Data Center SSD'),
(9, 'Industrial SSD'),
(9, 'NVMe SSD'),
(9, 'SATA SSDs'),
(9, 'Solid State Drives'),
(10, 'GDDR5'),
(10, 'GDDR6'),
(10, 'GDDR6X'),
(10, 'HBM2E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_family`
--
ALTER TABLE `product_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_technology`
--
ALTER TABLE `product_technology`
  ADD KEY `fk1` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_family`
--
ALTER TABLE `product_family`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_technology`
--
ALTER TABLE `product_technology`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`id`) REFERENCES `product_family` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
