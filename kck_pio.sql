-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Cze 2024, 13:40
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kck_pio`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `korki`
--

CREATE TABLE `korki` (
  `ID_korkow` int(11) NOT NULL,
  `Opis` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Data` date NOT NULL,
  `Miejscowość` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `ID_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `ID_ogloszenia` int(11) NOT NULL,
  `Opis` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Zdjecie` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID_uzytkownika` int(11) NOT NULL,
  `Imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Rok_studiow` int(20) NOT NULL,
  `Kierunek` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Profil` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;


--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `korki`
--
ALTER TABLE `korki`
  ADD PRIMARY KEY (`ID_korkow`),
  ADD KEY `ID_uzytkownika` (`ID_uzytkownika`);

--
-- Indeksy dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`ID_ogloszenia`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID_uzytkownika`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `korki`
--
ALTER TABLE `korki`
  ADD CONSTRAINT `korki_ibfk_1` FOREIGN KEY (`ID_uzytkownika`) REFERENCES `uzytkownicy` (`ID_uzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
