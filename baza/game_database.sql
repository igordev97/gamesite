-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_title` varchar(64) NOT NULL,
  `game_description` text NOT NULL,
  `game_ganre` varchar(64) NOT NULL,
  `game_hdd` varchar(20) NOT NULL,
  `game_release_date` date NOT NULL,
  `game_can_i_run_it` varchar(128) NOT NULL,
  `game_download_url` varchar(128) NOT NULL,
  `game_img_cover` varchar(128) NOT NULL,
  `game_trailer_url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_title`, `game_description`, `game_ganre`, `game_hdd`, `game_release_date`, `game_can_i_run_it`, `game_download_url`, `game_img_cover`, `game_trailer_url`) VALUES
(7, 'Tomb Raider', 'Tomb Raider is set on Yamatai, an island from which Lara, who is untested and not yet the battle-hardened explorer she is in other titles in the series, must save her friends and escape while being hunted down by a malevolent cult. Camilla Luddington was hired to voice and perform as Lara Croft, replacing Keeley Hawes.', 'Avanture', '10', '2013-03-05', 'https://www.systemrequirementslab.com/cyri/requirements/tomb-raider/11576', 'magnet:?xt=urn:btih:7A7CDF98B9E69D056F5C9206EEDE588962E553B8&dn=TOMB+RAIDER+2013+-+Full+Game+for+PC+-+DirectPlay&tr=http%3A%2F%2', 'tombraider.jpg', 'https://www.youtube.com/embed/M4SG6DfVvLs?si=cTPT52hv6SrcdLfH'),
(8, 'God Of War', 'His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same. Kratos is a father again.', 'Avanture', '70', '2018-04-20', 'https://www.systemrequirementslab.com/cyri/requirements/god-of-war/21298', 'magnet:?xt=urn:btih:534E57A40A6E9494341D3ABE030431D41F83CD0E&dn=God+of+War+%28v1.0.12%29+%5BDODI+Repack%5D&tr=http%3A%2F%2Fp4p.a', 'gow.jpg', 'https://www.youtube.com/embed/K0u_kAWLJOA?si=RTYic5nY7oXvh-Jy'),
(9, 'Far Cry 5', 'Welcome to Hope County, Montana, the land of the free and brave, but also the home of a fanatical doomsday cult. Stand up to cult leader Joseph Seed and his siblings, the Heralds, to spark the fires of resistance and liberate the besieged community.', 'Action', '70', '2018-03-27', 'https://www.systemrequirementslab.com/cyri/requirements/far-cry-5/15464', 'magnet:?xt=urn:btih:7A7D23D3544071D2519A51B073E2CCB8528ABD57&dn=Far+Cry+5%3A+Gold+Edition+%5BP%5D+%5BRUS+%2B+ENG+%2F+RUS+%2B+ENG', 'far.jpg', 'https://www.youtube.com/embed/Kdaoe4hbMso?si=nnYW4IzMooreKWBX'),
(13, 'Far Cry 4', 'Far Cry 4  is the fourth game in the Far Cry series. The game is set in the fictional country of Kyrat, located in the Himalayan mountains.', 'Action', '50', '2014-11-17', 'https://www.systemrequirementslab.com/cyri/requirements/far-cry-4/12380', 'magnet:?xt=urn:btih:E3B6C190C7A1004A9EE71790726E58EAF38E79ED&dn=%5BFar.Cry.4.%5Bv1.03%5DProper.%5BRELOADED%5D.Repack-R.G.Mechani', 'far_cry_4.jpg', 'https://www.youtube.com/embed/6d60v1OErEY?si=QKu0Ne8bUlbih0UF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `game_title` (`game_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
