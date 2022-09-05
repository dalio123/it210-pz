-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pz`
--

-- --------------------------------------------------------

--
-- Table structure for table `adrese`
--

CREATE TABLE `adrese` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `ulica` varchar(100) NOT NULL,
  `pbroj` varchar(100) NOT NULL,
  `grad` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adrese`
--

INSERT INTO `adrese` (`id`, `ime`, `prezime`, `ulica`, `pbroj`, `grad`, `email`) VALUES
(3, 'Jovan', 'Jovanovic', 'Vojvode stepe 142', '11000', 'beograd', 'jojo@gmail.com'),
(6, 'David', 'Kandas', 'Darinka radovic 13', '11420', 'Smederevksa Palanka', 'dk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `artikli`
--

CREATE TABLE `artikli` (
  `Id` int(11) NOT NULL,
  `Artikl` varchar(255) NOT NULL,
  `Slika` varchar(255) NOT NULL,
  `Opis` varchar(255) NOT NULL,
  `Cena` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikli`
--

INSERT INTO `artikli` (`Id`, `Artikl`, `Slika`, `Opis`, `Cena`) VALUES
(2, 'Pearls and Jade', './img/art/pj.jpg', 'Ogrlica pearls and jade✨ slatkovodni biseri ✨ žad ✨ nerđajući čelik sa pozlatom  Dužina ogrlice je oko 36cm + 6cm lančić za produžetak  Cena: 1.900rsd', 1800),
(3, 'Gold dust moons', './img/art/gdm.jpg', 'Mindjuse gold dust moons ✨ polimerna glina ✨ nerđajući čelik (pozlata)', 800),
(7, 'Lorem ipsum', './img/art/cover.jpg', 'Lorem ipsum dolor amet', 500);

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `naslov` varchar(100) NOT NULL,
  `poruka` varchar(360) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `ime`, `prezime`, `naslov`, `poruka`, `tel`) VALUES
(1, 'David', 'Kandas', 'Lorem ipsum', 'type=\"submit\"', '+393772368311'),
(2, 'David', 'Jovanovic', 'Lorem ipsum', 'aqwsdsadasdasdsa', '+393772368311'),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, 'David', 'Kandas', 'Lorem ipsum', 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ip', '+393772368311'),
(6, 'Milan', 'milanovic', 'naslov', 'poruka', '+393772368311');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `artikl` varchar(255) NOT NULL,
  `cena` int(10) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id`, `artikl`, `cena`, `user_id`) VALUES
(68, 'Gold dust moons', 800, 'jojo@gmail.com'),
(70, 'Lorem ipsum', 500, 'dk@gmail.com'),
(71, 'Gold dust moons', 800, 'dk@gmail.com'),
(72, 'Lorem ipsum', 500, 'dk@gmail.com'),
(73, 'Pearls and Jade', 1800, 'dk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surrname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `grad` varchar(50) DEFAULT NULL,
  `pbroj` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surrname`, `email`, `password`, `is_admin`, `adresa`, `grad`, `pbroj`, `telefon`) VALUES
(6, 'David', 'Kandas', 'dk@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'Darinka Radovic 13', 'Smederevska palanka', '11420', '0612333537'),
(7, 'Jovan', 'Jovanovic', 'jojo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0, 'strahinjica bana 5', 'Smederevska palanka', '11420', '026314954'),
(8, 'Milance', 'milanovic', 'MM@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adrese`
--
ALTER TABLE `adrese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikli`
--
ALTER TABLE `artikli`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adrese`
--
ALTER TABLE `adrese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `artikli`
--
ALTER TABLE `artikli`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
