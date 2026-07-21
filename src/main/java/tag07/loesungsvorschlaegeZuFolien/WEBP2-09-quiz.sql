-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Mai 2021 um 04:30
-- Server-Version: 10.1.31-MariaDB
-- PHP-Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragen`
--

CREATE TABLE `fragen` (
  `ID` int(11) NOT NULL,
  `frage` varchar(250) NOT NULL,
  `antwort1` varchar(100) NOT NULL,
  `antwort2` varchar(100) NOT NULL,
  `antwort3` varchar(100) NOT NULL,
  `antwort4` varchar(100) NOT NULL,
  `richtig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `fragen`
--

INSERT INTO `fragen` (`ID`, `frage`, `antwort1`, `antwort2`, `antwort3`, `antwort4`, `richtig`) VALUES
(1, 'Wieviel ist 5 + 5?', 'Ca. 8', 'Ungefähr 9', 'Um die 10 rum', 'Woher soll ich das wissen?', 3),
(2, 'Was ist die Antwort auf die Frage nach dem Sinn des Lebens?\'', '15', '96', '7', '42', 4),
(4, 'Wie spät ist es um \"3/4 8\"?', '8:45', '7:45', '6:00', '9:00', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragen`
--
ALTER TABLE `fragen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fragen`
--
ALTER TABLE `fragen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
