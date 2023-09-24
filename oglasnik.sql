-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 05:18 PM
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
-- Database: `oglasnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ime` varchar(40) NOT NULL,
  `prezime` varchar(40) NOT NULL,
  `k_ime` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `lozinka` varchar(40) NOT NULL,
  `uloga` varchar(40) NOT NULL,
  `mob` int(10) NOT NULL,
  `vrsta_proizvoda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ime`, `prezime`, `k_ime`, `email`, `lozinka`, `uloga`, `mob`, `vrsta_proizvoda`) VALUES
('ana', 'kranjčec', 'anak', 'ana.kranjcec@gmail.com', 'ana123', 'admin', 0, 'povrće'),
('Dejan', 'Mihić', 'DMihić', 'dejan.mihic@gmail.com', 'dejo123', 'korisnik', 2147483647, 'meso, voce'),
('Nikola', 'Juzbašić', 'jbasic', 'jbasic@gmail.com', '1234', 'korisnik', 948473, 'Mesina'),
('Karlo', 'Kranjčec', 'kkranjcec', 'kranjcec.karlo@gmail.com', 'karlo1998', 'korisnik', 991234567, 'Meso, voce, povrce'),
('Karlo', 'Madžarević', 'kmadar', 'kmadar@gmail.com', '1234', 'korisnik', 988724626, 'Meso, povrće'),
('Leo', 'Franjić', 'lfranjic', 'leo.franjic@gmail.com', 'leo123', 'korisnik', 997654321, 'Meso'),
('Mihaela', 'Vrbanić', 'mahinapez', 'mahina.pezz@gmail.com', 'mihaela123', 'korisnik', 955076360, 'Meso, voće, povrće'),
('Marko', 'Mili', 'mmili', 'mmili@gmail.com', 'Mili', 'korisnik', 995854870, 'Mamutijebem'),
('Srđan', 'Lazić', 'slazic', 'slazic@gmail.com', 'srdan123', 'korisnik', 959876543, 'Voće'),
('Stjepan', 'Mrganić', 'smrganic', 'smrganic@gmail.com', 'mrga123', 'korisnik', 2147483647, 'Meso'),
('Test', 'Testić', 'test1', 'kranjcec.karlo@gmai.com', '1234', 'korisnik', 981234567, 'Meso');

-- --------------------------------------------------------

--
-- Table structure for table `oglasi`
--

CREATE TABLE `oglasi` (
  `k_ime` varchar(40) NOT NULL,
  `ime_oglasa` varchar(40) NOT NULL,
  `proizvodi` varchar(40) NOT NULL,
  `id_oglasa` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `oglasi`
--

INSERT INTO `oglasi` (`k_ime`, `ime_oglasa`, `proizvodi`, `id_oglasa`) VALUES
('mmili', 'med', 'domaći od bagrema', 2),
('mimi', 'Vrtni vrtovi', 'krastavci', 5),
('DMihić', 'hleb', 'hleb', 8),
('DMihić', 'grah', 'crveni grah', 9),
('lfranjic', 'KFC', 'spicy chicken wings', 11),
('smrganic', 'Sušeno meso', 'Kobasice, kulen, špek', 12),
('kmadar', 'vegan meat', 'soja ', 13),
('mmili', 'oglasno', 'meso', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`k_ime`);

--
-- Indexes for table `oglasi`
--
ALTER TABLE `oglasi`
  ADD PRIMARY KEY (`id_oglasa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oglasi`
--
ALTER TABLE `oglasi`
  MODIFY `id_oglasa` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
