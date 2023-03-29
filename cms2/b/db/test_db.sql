-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 mars 2023 kl 13:35
-- Serverversion: 10.4.24-MariaDB
-- PHP-version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `cms2`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `link_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `menu`
--

INSERT INTO `menu` (`ID`, `description`, `link_id`, `parent`) VALUES
(1, 'Start', 1, 0),
(2, 'Nyheter', 2, 0),
(3, 'Sport', 3, 2),
(4, 'Politik', 4, 2),
(5, 'Inrikes', 5, 4),
(6, 'Utrikes', 6, 4),
(7, 'fasd', 53, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `menu2`
--

CREATE TABLE `menu2` (
  `ID` int(11) NOT NULL,
  `description` text NOT NULL,
  `link_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `menu2`
--

INSERT INTO `menu2` (`ID`, `description`, `link_ID`) VALUES
(1, 'Start', 65),
(2, 'Uppgiften', 66),
(10, 'ny menypost', 66),
(11, 'Ny start', 68),
(12, 'Kontakt', 67),
(13, 'sd', 67),
(14, 'sd', 67);

-- --------------------------------------------------------

--
-- Tabellstruktur `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `headline` text NOT NULL,
  `text` text NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `profile_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `posts`
--

INSERT INTO `posts` (`ID`, `headline`, `text`, `visible`, `profile_ID`) VALUES
(67, 'Kontaktinformation', 'Tel: 070-123 45 67', 0, 0),
(68, 'Start', 'Välkommen välkommen<br>\r\nVår hemsida är ju jättefin\r\n\r\n\r\n', 0, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `profile`
--

CREATE TABLE `profile` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `mail` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumpning av Data i tabell `profile`
--

INSERT INTO `profile` (`ID`, `name`, `mail`, `level`) VALUES
(1, 'Lars', 'lars@mail.com', 1),
(2, 'Sven', 'sven@mail.com', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(5, 'sharbel', '202cb962ac59075b964b07152d234b70', 'sharbel');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT för tabell `menu2`
--
ALTER TABLE `menu2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT för tabell `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT för tabell `profile`
--
ALTER TABLE `profile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
