-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 10 apr 2025 om 08:40
-- Serverversie: 5.7.44
-- PHP-versie: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Restaurant`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruikers`
--

CREATE TABLE `Gebruikers` (
  `Id` int(11) NOT NULL,
  `Naam` text NOT NULL,
  `Wachtwoord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Gebruikers`
--

INSERT INTO `Gebruikers` (`Id`, `Naam`, `Wachtwoord`) VALUES
(1, 'Joe', 'Wachtwoord');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Menu`
--

CREATE TABLE `Menu` (
  `Id` int(11) NOT NULL,
  `Naam` text NOT NULL,
  `Beschrijving` text,
  `Prijs` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Menu`
--

INSERT INTO `Menu` (`Id`, `Naam`, `Beschrijving`, `Prijs`) VALUES
(1, 'Rames \'Toko Rinus\'', 'Witte of gele rijst, 1x vleesgericht, 1x groente gerecht, acar campoer of ketimoen kroepoek', 9.75),
(2, 'Rames \'Speciaal\'', 'Nasi, bami of mihoen, 1x vleesgerecht, 1x groente gerecht, 1x eigerecht, acar campoer of ketimoen kroepoek', 12.75),
(3, 'Rames \'Vlees\'', 'Nasi, bami of mihoen, 2x vleesgerecht, acar campoer of ketimoen kroepoek', 12.25),
(4, 'Surinaams menu', 'Rotivel, kip, kouseband aardappel, gekookt ei en ketimoen (ook vegetarisch mogelijk)', 11.75),
(5, 'Rames \'Extra\'', 'Nasi, bami of mihoen, 1x vleesgerecht, 1x groentegerecht, acar campoer of ketimoen kroepoek', 11.25),
(6, 'Rames \'Top\'', 'Nasi, bami of mihoen, 2x vleesgerecht, 1x groente- of eigerecht, acar campoer of ketimoen kroepoek', 13.25),
(7, 'Gado Gado schotel', 'Knapperige groenten met lontong en satÃ©saus', 7.50),
(8, 'Soto ajam', 'Gevulde maaltijdsoep ajam, soeoen, taugÃ©, selderij, gebakken uitjes, gekookt ei en lontong', 7.75),
(17, 'Babi ketjap', 'gestoofd varkensvlees in zoete saus', 2.75),
(18, 'Babi pangang Spek', 'gegrilde speklappen in zoete asus', 2.75),
(19, 'Babi Pangang vlees', 'gegrild wit varkensvlees in zoete saus', 2.75),
(20, 'Rendang Rood', 'gesmoord rundvlees met sambal in kokosmelk pittig, bevat noten', 2.75),
(21, 'Daging Bali', 'zoet gesmoord rundvlees met ketjap en sambal mild/pittig, bevat noten, schaaldieren en soja', 2.75),
(22, 'Daging Smoor', 'zoet gesmoord rundvlees mild, bevat soja', 2.75),
(23, 'Gehaktballen chili', 'rundvlees balletjes in zoet/pittige chillisaus, bevat gluten en soja', 2.75),
(24, 'Rendang Geel', 'gesmoord rundvlees met koenjit in kokosmelk mild, bevat noten', 2.75),
(25, 'Daging Peteh', 'zoet gesmoord rundvlees met ketjap, sambal en petehbonen mild/pittig, bevat noten, schaaldieren en soja', 2.75),
(26, 'Gehaktballen in satÃ©saus', 'rundvlees balletjes in satÃ©saus mild, bevat gluten, pinda\'s en soja', 2.75),
(27, 'Gehaktballen mild', 'rundvlees balletjes in zoete saus mild, bevat gluten en soja', 2.75),
(28, 'Ayam Commandeur', 'gefrituurde kip in zoet/pittige chili saus, bevat gluten', 2.75),
(29, 'Ayam Kerrie', 'gesmoord kipgerecht met kerrie in kokossaus mild, bevat noten', 2.75),
(30, 'Ayam Goreng-satÃ©', 'gegrild kipgerecht in satÃ©saus, bevat pinda\'s & soja', 2.75),
(31, 'Ayam Pangang', 'gegrild kipgerecht in zoete saus, bevat soja', 2.75),
(32, 'Sticky Chicken', 'gegrilde drumsticks in zoet/pittige saus', 2.25),
(33, 'Ayam Smoor', 'zoet gesmoord kipgerecht mild, bevat soja', 2.75),
(34, 'Ayam Pedis', 'zeer pittig gesmoord kipgerecht met sambal pittig', 2.75),
(35, 'Ayam Ketjap', 'gegrild kipgerecht in kecapsaus, bevat soja', 2.75),
(36, 'Ayam Rotti', 'zeer pittig gesmoord kipgerecht in surinaamse kerrie', 2.75),
(37, 'Ayam Yellow Curry', 'gegrild kipgerecht in thaise gele curry saus mild/pittig, bevat noten', 2.75),
(38, 'Ikan Bali', 'gebakken makreel met ketjap en sambal mild/pittig, bevat gluten, melk, soja en vis', 3.25),
(39, 'Bakkeljauw', 'Pittig gezouten visfilet mild/pittig, bevat vis', 3.25),
(40, 'Ikan Pepesan', 'gestoomde makreel met o.a. koenjit en sambal mild/pittig, bevat noten, schaaldieren en vis', 3.25),
(41, 'SatÃ© Babi', 'varkensvlees mild, bevat soja (satÃ©saus bevat pinda\'s)', 6.75),
(42, 'SatÃ© Kambing', 'satÃ© van geitenvlees in ketjapsaus (alleen op bestelling) bevat vis', 8.75),
(43, 'SatÃ© Tahoe', 'tahoe spiesje in ketjapsaus (alleen op bestelling)', 6.50),
(44, 'SatÃ© Ayam', 'kippenvlees mild, bevat soja (satÃ©saus bevat pinda\'s)', 6.75),
(45, 'SatÃ© Udang', 'garnalen spiesje mild/pittig (alleen op bestelling vanaf 10 personen) bevat vis', 7.75);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Gebruikers`
--
ALTER TABLE `Gebruikers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Gebruikers`
--
ALTER TABLE `Gebruikers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `Menu`
--
ALTER TABLE `Menu`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
