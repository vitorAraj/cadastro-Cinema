-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2025 at 07:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemax`
--

CREATE TABLE `cinemax` (
  `Id_user` int NOT NULL,
  `filme` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `horario` time NOT NULL,
  `cadeira` varchar(10) NOT NULL,
  `tipo_de_sessao` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idioma` varchar(25) NOT NULL,
  `dataCad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nome` varchar(40) NOT NULL,
  `preco` float NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cinemax`
--

INSERT INTO `cinemax` (`Id_user`, `filme`, `horario`, `cadeira`, `tipo_de_sessao`, `idioma`, `dataCad`, `Nome`, `preco`, `email`, `senha`) VALUES
(4, 'Clube da luta', '18:00:00', '3D', '2D', 'Dublado', '2025-04-01 13:08:25', 'Sara Oliveira', 30, 'Sara@gmail.com', '2222'),
(6, 'Oppenheimer', '18:00:00', '3C', '2D', 'Dublado', '2025-04-11 03:45:19', 'VITOR', 15, 'vitoraujomf5@gmail.com', '1234'),
(7, 'Django', '15:40:00', '3C', '3D', 'Dublado', '2025-06-16 18:32:12', 'vitor', 15, 'vitoraujomf5@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemax`
--
ALTER TABLE `cinemax`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemax`
--
ALTER TABLE `cinemax`
  MODIFY `Id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
