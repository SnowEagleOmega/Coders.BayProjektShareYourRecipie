-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 19. Dez 2019 um 14:29
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `weihnachten`
--
CREATE DATABASE IF NOT EXISTS `weihnachten` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `weihnachten`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `vorname` varchar(100) DEFAULT NULL,
  `nachname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `account`
--

INSERT INTO `account` (`id`, `email`, `vorname`, `nachname`) VALUES
(57, 'dodo@dodo.com', 'Dodo', 'Dodomann');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezept`
--

CREATE TABLE `rezept` (
  `id` int(11) NOT NULL,
  `accountID` int(11) DEFAULT NULL,
  `rezeptname` varchar(100) DEFAULT NULL,
  `art` varchar(100) DEFAULT NULL,
  `zutaten` varchar(1000) DEFAULT NULL,
  `zubereitung` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `rezept`
--

INSERT INTO `rezept` (`id`, `accountID`, `rezeptname`, `art`, `zutaten`, `zubereitung`) VALUES
(1, 57, 'Punschkrapfen', 'Mehlspeise', 'Punsch\r\nKrapfen', 'Punsch mit Krapfen genieÃŸen\r\n'),
(2, 57, 'Punsch', 'Getraenk', 'Gluck', 'Gluck'),
(3, 57, 'Tester', 'Getraenk', 'goog', 'Drooop\r\n'),
(4, 57, 'Punschkrapfen', 'Mehlspeise', 'Glasur\r\nTeig', 'Glasur und Teig mischen'),
(5, 57, 'DOdo', 'Mehlspeise', 'DOdo', 'Dodo'),
(6, 57, 'Langos', 'Snack', '700g Mehl\r\n0.5l Milch\r\n10g Hefe\r\n1Prise Salz', 'FÃ¼r den Langosch bereiten wir zuerst ein Dampfel zu. Dazu einen Teil der lauwarmen Milch mit der Hefe verrÃ¼hren, etwas Mehl dazu bis es leicht bindet, und an einem warmen Ort 15 Min. gehen lassen.\r\nDanach abwechselnd das restliche Mehl und die Milch zugeben, salzen und kneten - geht am besten mit der KÃ¼chenmaschine mit einem Knethaken. Sobald ein eher fester Brotteig entsteht, den Teig mit Mehl bestÃ¤uben und wieder eine halbe Stunde an einem warmen Ort gehen lassen.\r\nAus dem Teig beliebig groÃŸe ca. 1,5 cm hohe, runde Teigfladen formen - am besten mit der Hand - der Rand kann dabei etwas hÃ¶her bleiben - den Teig mit ein wenig Ã–l bestreichen und nochmals fÃ¼r rund 20 Minuten gehen lassen.\r\nAnschlieÃŸend in einer beschichteten Pfanne das Ã–l (Fingerhoch) erhitzen und den Teig von beiden Seiten goldbraun (ca. 2 Min.) backen - funktioniert natÃ¼rlich auch sehr gut in einer Fritteuse. Die fertig gebackenen Langosch aus dem Fett nehmen und auf KÃ¼chenpapier abtropfen lassen.'),
(7, 57, 'DOdo', 'Mehlspeise', 'Dodo', 'Dodo');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `rezept`
--
ALTER TABLE `rezept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accountID` (`accountID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT für Tabelle `rezept`
--
ALTER TABLE `rezept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `rezept`
--
ALTER TABLE `rezept`
  ADD CONSTRAINT `rezept_ibfk_1` FOREIGN KEY (`accountID`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
