-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddwallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `kategorija_id` int(10) UNSIGNED NOT NULL,
  `naziv_kategorije` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tip_transakcije` tinyint(4) NOT NULL,
  `racun` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`kategorija_id`, `naziv_kategorije`, `tip_transakcije`, `racun`) VALUES
(1, 'Izlazak', 1, 1),
(2, 'Hrana', 1, 1),
(3, 'Posao', 0, 1),
(4, 'Ustedjevina', 0, 1),
(5, 'Posao 2', 0, 1),
(8, 'Posao 3', 0, 1),
(12, 'sdfsdfsd', 0, 2),
(15, 'Kucni racuni', 1, 2),
(16, 'Kategorija petar', 0, 28),
(17, 'Petar kat', 0, 28),
(19, 'Elektronika', 1, 28),
(21, 'Mica kat', 0, 29),
(22, 'Mica 2', 0, 29),
(23, 'Knjige', 1, 29),
(24, 'Nova kategorija', 0, 31),
(25, 'Naocare', 1, 1),
(26, 'test', 0, 34);

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `racun_id` int(10) UNSIGNED NOT NULL,
  `valuta` enum('EUR','RSD') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`racun_id`, `valuta`, `user_id`, `naziv`) VALUES
(1, 'EUR', 1, 'Devizni racun'),
(2, 'RSD', 1, 'Dinarski racun'),
(21, 'EUR', 20, 'A2'),
(22, 'RSD', 1, 'A3'),
(28, 'EUR', 24, 'Peksa racun'),
(29, 'RSD', 25, 'Mica'),
(31, 'RSD', 26, 'Darjin racun'),
(33, 'EUR', 2, 'Devizni racun'),
(34, 'RSD', 27, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `transakcija`
--

CREATE TABLE `transakcija` (
  `transakcija_id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `datum` datetime NOT NULL,
  `vrednost` decimal(10,0) UNSIGNED NOT NULL,
  `tip_transakcije` tinyint(4) NOT NULL,
  `racun_id` int(10) UNSIGNED NOT NULL,
  `kategorija_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transakcija`
--

INSERT INTO `transakcija` (`transakcija_id`, `naziv`, `datum`, `vrednost`, `tip_transakcije`, `racun_id`, `kategorija_id`) VALUES
(2, 'Izlazak vikend', '2020-01-01 00:00:00', '300', 1, 1, 2),
(3, 'Dzeparac', '2020-01-01 00:00:00', '500', 0, 1, 1),
(4, 'Hrana', '2022-06-04 00:00:00', '200', 1, 1, 1),
(7, 'Knjige', '2022-06-05 00:00:00', '200', 1, 1, 1),
(9, 'Povisica', '2022-06-01 00:00:00', '800', 0, 1, 2),
(10, 'Dodatni posao', '2022-06-05 08:12:54', '350', 0, 1, 5),
(11, 'Posao', '2022-06-05 08:12:54', '333', 0, 2, 12),
(12, 'Hrana', '2022-06-05 11:33:50', '200', 1, 2, 15),
(13, 'Trans 1', '2022-06-08 12:46:20', '500', 0, 31, 24),
(14, 'Kupovina', '2022-06-08 11:27:18', '10', 1, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Damjan', 'damjan123'),
(2, 'Darja', 'darja123'),
(3, 'Nikola', 'nikola123'),
(4, 'Marko', 'Marko1998.98'),
(5, 'Nebojsa', 'neba19989897'),
(6, 'Miki', 'miki123'),
(7, 'Mile', 'asdasd'),
(8, 'kjadskjas', 'asdasd'),
(9, 'adassad', 'adasdas'),
(10, 'sadasd', 'asdasd'),
(11, 'Ajde', 'asdasd'),
(12, 'Aaaa', 'damjan123'),
(13, 'asdas', 'dsaas'),
(14, 'saas', 'damjan123'),
(15, 'Moras', 'damjan123'),
(16, 'Proba', 'damjan123'),
(18, 'Pls', 'pls'),
(20, 'A1', 'a1'),
(21, 'ProveraRacun', 'provera'),
(22, 'Proba', 'Ajde'),
(24, 'Petar', 'petar'),
(25, 'Milica', 'mica'),
(26, 'Novi korisnik', 'korisnik123'),
(27, 'Test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`kategorija_id`),
  ADD KEY `racun_id_idx` (`racun`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`racun_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `transakcija`
--
ALTER TABLE `transakcija`
  ADD PRIMARY KEY (`transakcija_id`),
  ADD KEY `racun_id_idx` (`racun_id`),
  ADD KEY `kategorija_id_idx` (`kategorija_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `kategorija_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
  MODIFY `racun_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `transakcija`
--
ALTER TABLE `transakcija`
  MODIFY `transakcija_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD CONSTRAINT `racun` FOREIGN KEY (`racun`) REFERENCES `racun` (`racun_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transakcija`
--
ALTER TABLE `transakcija`
  ADD CONSTRAINT `kategorija_id` FOREIGN KEY (`kategorija_id`) REFERENCES `kategorija` (`kategorija_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `racun_id` FOREIGN KEY (`racun_id`) REFERENCES `racun` (`racun_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
