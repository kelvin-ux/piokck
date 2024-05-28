-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Maj 2024, 17:21
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Baza danych: `kck/pio`
--

-- --------------------------------------------------------

-- Struktura tabeli dla tabeli `korki`
--

CREATE TABLE `korki` (
  `ID_korkow` int(11) NOT NULL,
  `Opis` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Data` date NOT NULL,
  `Miejscowość` varchar(30) NOT NULL,
  `ID_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `ID_ogloszenia` int(11) NOT NULL,
  `Opis` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Zdjecie` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID_uzytkownika` int(11) NOT NULL AUTO_INCREMENT,
  `Imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Rok_studiow` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `Kierunek` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`ID_uzytkownika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- Indeksy dla tabeli `korki`
ALTER TABLE `korki`
  ADD PRIMARY KEY (`ID_korkow`),
  ADD KEY `ID_uzytkownika` (`ID_uzytkownika`);

-- Indeksy dla tabeli `ogloszenia`
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`ID_ogloszenia`);

-- Ograniczenia dla tabeli `korki`
ALTER TABLE `korki`
  ADD CONSTRAINT `korki_ibfk_1` FOREIGN KEY (`ID_uzytkownika`) REFERENCES `uzytkownicy` (`ID_uzytkownika`);
COMMIT;
