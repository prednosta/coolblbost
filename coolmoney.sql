-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Čtv 27. čen 2019, 16:22
-- Verze serveru: 5.7.26
-- Verze PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `coolmoney`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `firma`
--

DROP TABLE IF EXISTS `firma`;
CREATE TABLE IF NOT EXISTS `firma` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ico` int(13) DEFAULT NULL,
  `nazev` text CHARACTER SET utf8 NOT NULL,
  `adresa` text CHARACTER SET utf8 NOT NULL,
  `telefon` int(15) DEFAULT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `datum_registrace` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatel`
--

DROP TABLE IF EXISTS `uzivatel`;
CREATE TABLE IF NOT EXISTS `uzivatel` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jmeno` text COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` text COLLATE utf8_czech_ci NOT NULL,
  `telefon` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `heslo` text COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatel`
--

INSERT INTO `uzivatel` (`id`, `jmeno`, `prijmeni`, `telefon`, `email`, `heslo`) VALUES
(26, 'Břetislav', 'Král', '732432543', 'bre@ta.cz', 'asdf'),
(27, 'Tamten', 'Hajnej', '843234543', 'tam@haj.ne', 'asdfg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
