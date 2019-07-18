-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Čtv 18. čec 2019, 18:59
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `uzivatel`
--

INSERT INTO `uzivatel` (`id`, `jmeno`, `prijmeni`, `telefon`, `email`, `heslo`) VALUES
(26, 'Břetislav', 'Král', '732432543', 'bre@ta.cz', 'asdf'),
(27, 'Tamten', 'Hajnej', '843234543', 'tam@haj.ne', 'asdfg'),
(28, 'Tajny', 'Hajny', '843232919', 'tajny@hajny.ca', 'asdf'),
(29, 'Beny', 'Saryk', '843943', 'benysaryk@gmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Struktura tabulky `zakazky`
--

DROP TABLE IF EXISTS `zakazky`;
CREATE TABLE IF NOT EXISTS `zakazky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum_vytvoreni` date NOT NULL COMMENT 'datum vytvoreni zakazky',
  `max_cena` int(11) DEFAULT NULL COMMENT 'maximalni cena',
  `popis` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `zakazky`
--

INSERT INTO `zakazky` (`id`, `datum_vytvoreni`, `max_cena`, `popis`) VALUES
(1, '2019-07-18', 5000, 'Chyba levého předního světla - bliká'),
(2, '2019-07-18', 5000, 'Chyba levého předního světla - nebliká'),
(3, '2019-07-18', 25000, 'Chyba startování - nejede to'),
(4, '2019-07-20', 56030, 'Chyba stěračů - nejede to'),
(5, '2019-07-20', 56030, 'Chyba stěračů - stírají moc'),
(6, '2019-07-20', 56030, 'Klepe motor - moc');

-- --------------------------------------------------------

--
-- Struktura tabulky `zakaznik`
--

DROP TABLE IF EXISTS `zakaznik`;
CREATE TABLE IF NOT EXISTS `zakaznik` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nazev_firmy` text COLLATE utf8_czech_ci NOT NULL,
  `ico` int(9) NOT NULL,
  `telefon` int(15) NOT NULL,
  `adresa` text COLLATE utf8_czech_ci NOT NULL,
  `jednatel` text COLLATE utf8_czech_ci NOT NULL,
  `datum_registrace` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci COMMENT='seznam zákazníků';

--
-- Vypisuji data pro tabulku `zakaznik`
--

INSERT INTO `zakaznik` (`id`, `nazev_firmy`, `ico`, `telefon`, `adresa`, `jednatel`, `datum_registrace`) VALUES
(6, 'břeťa soft s.r.o.', 12345678, 722797874, 'L hosaka 19, Ostrava - Jih', 'Břetislav Král', '2019-07-04'),
(5, 'břeťa soft s.r.o.', 12345678, 722797874, 'L hosaka 19, Ostrava - Jih', 'Břetislav Král', '2019-07-04'),
(4, 'freak soft s.r.o.', 32158465, 722797874, 'L derata 19, Ostrava - Jih', 'Plav Král', '2019-07-04'),
(7, 'břeťa soft s.r.o.', 12345678, 722797874, 'L hosaka 19, Ostrava - Jih', 'Břetislav Král', '2019-07-04'),
(8, 'břeťa soft s.r.o.', 12345678, 722797874, 'L hosaka 19, Ostrava - Jih', 'Břetislav Král', '2019-07-04'),
(9, 'freak soft s.r.o.', 32158466, 722797874, 'L derata 19, Ostrava - Jih', 'Plav Král', '2019-07-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
