-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Počítač: sql.endora.cz:3315
-- Vytvořeno: Úte 23. říj 2018, 11:47
-- Verze serveru: 5.6.28-76.1
-- Verze PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `studentgbnkopie`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `knih_knihovny`
--

CREATE TABLE IF NOT EXISTS `knih_knihovny` (
  `id` int(11) NOT NULL,
  `nazev` varchar(255) NOT NULL,
  `poznamky` text NOT NULL,
  `otevdoba` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `knih_knihovny`
--

INSERT INTO `knih_knihovny` (`id`, `nazev`, `poznamky`, `otevdoba`) VALUES
(1, 'English library', '', ''),
(2, 'Česká knihovna', '', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `knih_knihy`
--

CREATE TABLE IF NOT EXISTS `knih_knihy` (
  `id` int(11) NOT NULL,
  `nazev` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `evcislo` int(11) DEFAULT NULL,
  `vydani` int(3) DEFAULT NULL,
  `rokvydani` year(4) DEFAULT NULL,
  `nakladatelstvi` varchar(100) DEFAULT NULL,
  `level` int(1) NOT NULL,
  `vocabulary` varchar(100) NOT NULL,
  `zanr` varchar(100) DEFAULT NULL,
  `pocetstranek` int(6) DEFAULT NULL,
  `anotace` text,
  `poznamky` text,
  `knihovna` int(3) DEFAULT NULL,
  `datumpor` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vyrazeno` int(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `knih_knihy`
--

INSERT INTO `knih_knihy` (`id`, `nazev`, `autor`, `ISBN`, `evcislo`, `vydani`, `rokvydani`, `nakladatelstvi`, `level`, `vocabulary`, `zanr`, `pocetstranek`, `anotace`, `poznamky`, `knihovna`, `datumpor`, `vyrazeno`) VALUES
(87, 'Harry Potter a Relikvie smrti', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 626, '', '', 0, '0000-00-00 00:00:00', 0),
(86, 'Harry Potter a Princ dvojí krve', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 532, '', '', 0, '0000-00-00 00:00:00', 0),
(85, 'Harry Potter a Fénixův řád', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 795, '', '', 0, '0000-00-00 00:00:00', 0),
(84, 'Harry Potter a Ohnivý pohár', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 570, '', '', 0, '0000-00-00 00:00:00', 0),
(83, 'Harry Potter a Vězeň z Azkabanu', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 383, '', '', 0, '0000-00-00 00:00:00', 0),
(82, 'Harry Potter a Tajemná komnata', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 286, '', '', 0, '0000-00-00 00:00:00', 0),
(81, 'Harry Potter a Kámen mudrců', 'Rowlingová, Joanne Kate', '', 2147483647, 1, 2008, 'Albatros', 0, '', '', 284, '', '', 0, '0000-00-00 00:00:00', 0),
(95, 'HTML - začínáme programovat', 'Písek, Slavoj', '', 2147483647, 4, 2014, 'Grada', 0, '', '', 181, '', '', 0, '2016-12-29 08:06:55', 0),
(96, 'HTML - začínáme programovat', 'Písek, Slavoj', '', 123456789, 4, 2014, 'Grada', 0, '', '', 181, '', '', 0, '2016-12-29 15:09:16', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `knih_rezervace`
--

CREATE TABLE IF NOT EXISTS `knih_rezervace` (
  `id` int(11) NOT NULL,
  `id_kniha` int(11) NOT NULL,
  `email_uzivatel` varchar(255) NOT NULL,
  `datefrom` varchar(8) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `queued` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `knih_vypujcky`
--

CREATE TABLE IF NOT EXISTS `knih_vypujcky` (
  `id_kniha` int(11) NOT NULL,
  `email_uzivatel` varchar(255) NOT NULL,
  `id_knihovna` int(11) NOT NULL,
  `datum_vypujcky` date NOT NULL,
  `bor_months` int(2) NOT NULL,
  `datum_vraceni` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `knih_zanry`
--

CREATE TABLE IF NOT EXISTS `knih_zanry` (
  `id` int(11) NOT NULL,
  `zanr_cesky` varchar(40) NOT NULL,
  `zanr_anglicky` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='http://ftp.mgo.opava.cz/kry/jazyk_cesky/1.A/literatura/1-lit';

--
-- Vypisuji data pro tabulku `knih_zanry`
--

INSERT INTO `knih_zanry` (`id`, `zanr_cesky`, `zanr_anglicky`) VALUES
(1, 'sci-fi', 'science-fiction'),
(2, 'ostatní', 'other');

-- --------------------------------------------------------

--
-- Struktura tabulky `uzivatele`
--

CREATE TABLE IF NOT EXISTS `uzivatele` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `knih_knihovny`
--
ALTER TABLE `knih_knihovny`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `knih_knihy`
--
ALTER TABLE `knih_knihy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Klíče pro tabulku `knih_rezervace`
--
ALTER TABLE `knih_rezervace`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `knih_zanry`
--
ALTER TABLE `knih_zanry`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `knih_knihovny`
--
ALTER TABLE `knih_knihovny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pro tabulku `knih_knihy`
--
ALTER TABLE `knih_knihy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT pro tabulku `knih_rezervace`
--
ALTER TABLE `knih_rezervace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `knih_zanry`
--
ALTER TABLE `knih_zanry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pro tabulku `uzivatele`
--
ALTER TABLE `uzivatele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
