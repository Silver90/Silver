-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Creato il: Apr 27, 2015 alle 01:34
-- Versione del server: 5.6.24
-- Versione PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motosalone`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `moto`
--

CREATE TABLE IF NOT EXISTS `moto` (
  `id` int(11) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modello` varchar(50) NOT NULL,
  `potenza` decimal(10,0) DEFAULT NULL,
  `cilindrata` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `altezza_sella` varchar(10) NOT NULL,
  `categoria_emissione` varchar(7) NOT NULL,
  `cambio` varchar(10) NOT NULL,
  `tipo_cambio` varchar(10) NOT NULL,
  `consumo` varchar(10) NOT NULL,
  `tipologia` varchar(10) NOT NULL,
  `prezzo` varchar(10) NOT NULL,
  `immagine` blob
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `moto`
--

INSERT INTO `moto` (`id`, `marca`, `modello`, `potenza`, `cilindrata`, `peso`, `altezza_sella`, `categoria_emissione`, `cambio`, `tipo_cambio`, `consumo`, `tipologia`, `prezzo`, `immagine`) VALUES
(1, 'Honda', 'CBR 600 RR', '120', '599 cc', '186 kg', '823 mm', 'euro 3', '6 rapporti', 'meccanico', '20 km/l', 'stradale', '10.990,00', NULL),
(2, 'Honda', 'MSX 125', '10', '124,9 cc', '186 kg', '765 mm', 'euro 3', '4 rapporti', 'meccanico', '658 km/l', 'enduro', '3.150,00', NULL),
(3, 'Bmw', 'R 1200 R', '125', '1.170 cc', '198 kg', '760 mm', 'euro 3', '6 rapporti', 'meccanico', '22,2 km/l', 'stradale', '13.950,00', NULL),
(4, 'Bmw', 'C Evolution elettrico', '48', '- cc', '265 kg', '823 mm', 'euro 6', '-', 'automatico', '-', 'scooter', '15.750,00', NULL),
(5, 'Ducati', '1199 Panigale', '195', '1.198 cc', '165 kg', '830 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '32.990,00', NULL),
(6, 'Ducati', 'Hypermotard Sp', '110', '821,1  cc', '171 kg', '823 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'enduro', '14.990,00', NULL),
(7, 'Kawasaki', 'Ninja 636 ZX-6R', '131', '636 cc', '191 kg', '815 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '13.390,00', NULL),
(8, 'Kawasaki', 'J 300', '27', '299 cc', '191 kg', '823 mm', 'euro 3', '-', 'automatico', '-', 'scooter', '5.090,00', NULL),
(9, 'Piaggio', 'Beverly 300i.e.', '22', '278 cc', '165 kg', '790 mm', 'euro 3', '-', 'automatico', '-', 'scooter', '4.000,00', NULL),
(10, 'Piaggio', 'NRG Power DT', '4', '49,4 cc', '99 kg', '810 mm', 'euro 2', '-', 'automatico', '-', 'scooter', '2.090,00', NULL),
(11, 'MV Agusta', 'Brutale 675', '115', '675 cc', '169 kg', '810 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '9.670,00', NULL),
(12, 'MV Agusta', 'F4 1000 RR abs', '201', '998 cc', '185 kg', '830 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '26.200,00', NULL),
(13, 'Aprilia', 'RSV4 RF abs', '201', '999,6 cc', '180 kg', '840 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '21.590,00', NULL),
(14, 'Aprilia', 'Dorsoduro 750 abs', '95', '749,9 cc', '186 kg', '870 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'enduro', '8.950,00', NULL),
(15, 'Cagiva', 'Mito SP 525', '15', '124,6 cc', '129 kg', '760 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '5.161,00', NULL),
(16, 'Cagiva', 'Raptor 125', '15', '124,6 cc', '125 kg', '775 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '4.743,00', NULL),
(17, 'Harley-Davidson', 'Dyna Low Rider', '76', '1690 cc', '292 kg', '668 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '16.600,00', NULL),
(18, 'Harley-Davidson', 'CVO Street Glide', '0', '1801 cc', '380 kg', '669 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '39.000,00', NULL),
(19, 'Yamaha', 'FZ8 abs', '106', '779 cc', '211 kg', '815 mm', 'euro 3', '6 rapporti', 'meccanico', '-', 'stradale', '7.490,00', NULL),
(20, 'Yamaha', 'T-Max Iron Max', '0', '530 cc', '186 kg', '800 mm', 'euro 3', '-', 'automatico', '-', 'scooter', '11.290,00', NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `moto`
--
ALTER TABLE `moto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `moto`
--
ALTER TABLE `moto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
