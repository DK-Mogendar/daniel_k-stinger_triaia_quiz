-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jan 26, 2023 at 07:40 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` enum('crime','science-fiction','Akademic') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ISBN` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency` enum('CHF','USD') COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` decimal(10,0) NOT NULL,
  `used` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `modification_date` date DEFAULT NULL,
  `modivication_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `author`, `genre`, `publisher`, `ISBN`, `price`, `currency`, `stock`, `used`, `modification_date`, `modivication_time`) VALUES
(1, 'ABC für anfänegr', 'Ein Buch für Anfaänger', 'ABC Schütze', 'Akademic', 'ABC Books', '987-3-16-148160-0', '10.00', 'CHF', '10', 'Yes', '2023-01-04', '08:47:28'),
(2, 'Dinosausier der Vorzeit', 'Super Coole Dinos', 'Hansi Muster', 'Akademic', 'Muster Dinos', '654-3-16-143360-0', '6.00', 'CHF', '1', 'No', '2023-05-19', '27:57:52'),
(3, 'Yes or No', 'Ein Buch über JA und Nein', 'Kurt Weisnicht ', 'crime', 'Komisch Verlag', '541-3-16-148160-0', '22.00', 'CHF', '2', 'No', '2023-01-11', '12:12:56'),
(4, 'Die grosse Versuchung', 'Spannender Krimmi', 'Petra Koing', 'science-fiction', 'CH Verlag', '987-3-16-148160-0', '37.95', 'CHF', '22', 'Yes', '2023-01-27', '56:13:34'),
(5, 'Weltgeschichte', 'Ein Buch über die Welt', 'Welt Weit', 'Akademic', 'Weltgeschiten Heiri', '987-3-16-148160-5', '4755.00', 'CHF', '11', 'Yes', '2023-01-13', '77:58:12'),
(6, 'Bücher Buch', 'Eine Geschichte über einen Bücherwurm', 'Bücher Wurm', 'crime', 'Wurmbücher Verlag', '987-3-16-177990-0', '22.20', 'CHF', '10', 'No', '2030-01-18', '28:58:30'),
(7, 'Welt der Wunder ', 'Alles über die Welt Wunder', 'Bücher Wurm Verlag', 'crime', 'Geilomatisch GMBH', '666-3-16-148160-0', '8.90', 'CHF', '22', 'Yes', '2023-01-04', '22:59:02'),
(8, 'Schule Schule', 'Ein Buch über Schule', 'Ioho Man', 'science-fiction', 'Kleo Verlag', '333-3-16-148160-0', '31.50', 'CHF', '2', 'no', '2023-01-04', '08:59:32'),
(9, 'Kulanten Kurs', 'Wissenswertes unber Kurenten', 'Oppo Test', 'Akademic', 'Test Oppo', '856-3-16-148160-0', '22.55', 'CHF', '42', 'Yes', '2034-12-31', '99:59:59'),
(10, 'Alles Klar', 'Nichts zum valsch verstehen', 'allses GMBH', 'science-fiction', 'alles GMBH', '987-3-17-148160-0', '23.00', 'CHF', '11', 'Yes', '2023-01-10', '08:29:26'),
(16, 'Nichts zu Lachen', 'Ein Buch über Langeweile', 'Gähn Schlafherr', 'crime', 'Müde Verlag', '554-3-16-148160-0', '15.50', 'CHF', '1', 'No', '2023-01-03', '13:41:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
