-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Cze 2024, 14:10
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
  `Tytul` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Opis` varchar(500) COLLATE utf8mb4_polish_ci NOT NULL,
  `Data` date NOT NULL,
  `Miejscowość` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `ID_uzytkownika` int(11) NOT NULL,
  `Kontakt` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `korki`
--

INSERT INTO `korki` (`ID_korkow`, `Tytul`, `Opis`, `Data`, `Miejscowość`, `ID_uzytkownika`, `Kontakt`) VALUES
(1, 'Matematyka', 'Oferuję korepetycje z matematyki na poziomie szkoły średniej. Pomogę przygotować się do matury oraz zrozumieć trudne zagadnienia.', '2024-06-27', 'Łódź', 19, '111 222 333 Discord: abcdefg'),
(3, 'Fizyka', 'Prowadzę korepetycje z fizyki dla uczniów szkoły średniej. Skuteczne przygotowanie do egzaminów i pomoc w bieżących problemach.', '2024-06-18', 'Łódź', 19, '111 222 333 Discord: abcdefg'),
(4, 'Język Angielski', 'Oferuję korepetycje z języka angielskiego na każdym poziomie zaawansowania. Przygotowanie do egzaminów, konwersacje, pomoc w zadaniach domowych.', '2024-06-20', 'Łódź', 19, '987 654 321 Discord: pqrsuvw'),
(5, 'Chemia', 'Oferuję korepetycje z chemii dla uczniów szkół średnich. Przygotowanie do egzaminów maturalnych oraz pomoc w zrozumieniu trudnych zagadnień.', '2024-06-28', 'Łódź', 5, '222 333 444 Discord: lmnopqr');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `ID_ogloszenia` int(11) NOT NULL,
  `tytul` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Opis` varchar(500) COLLATE utf8mb4_polish_ci NOT NULL,
  `Zdjecie` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`ID_ogloszenia`, `tytul`, `Opis`, `Zdjecie`) VALUES
(6, 'Juwenalia 2024', 'Największe studenckie święto na uczelni, pełne koncertów, imprez plenerowych, konkursów i wspólnej zabawy. Odbędzie się 13 maja 2024 roku.', 'http://localhost/piokck/blogimg/juwe.jpg'),
(18, 'Targi Pracy 2024', 'Zapraszamy na Targi Pracy, które odbędą się 21 marca 2024 roku. Doskonała okazja do znalezienia pracy lub stażu.', 'http://localhost/piokck/blogimg/tragii.jpeg'),
(19, 'Festiwal Nauki i Techniki 2024', 'Zapraszamy na Festiwal Nauki i Techniki, który odbędzie się 9 września 2023 roku. Wiele ciekawych wykładów i prezentacji.', 'http://localhost/piokck/blogimg/festw.jpeg'),
(20, 'Kongres Innowacji Sierpień 2023', 'VI Kongres Innowacji w Energetyce odbędzie się 17 sierpnia 2023 roku. Dołącz do nas i poznaj najnowsze innowacje.', 'http://localhost/piokck/blogimg/kong.png'),
(21, 'Dni Otwarte 2024', 'Dni Otwarte Politechniki Łódzkiej odbędą się 14 marca 2024 roku. Zapraszamy wszystkich zainteresowanych studiami na naszej uczelni.', 'http://localhost/piokck/blogimg/dn.jpg'),
(22, 'Warsztaty Programistyczne', 'Zapraszamy na warsztaty programistyczne, które odbędą się 10 lipca. Będzie to doskonała okazja, aby nauczyć się podstaw programowania oraz poznać najnowsze technologie. Warsztaty są otwarte dla wszystkich studentów.', 'http://localhost/piokck/images/warsztaty.jpg'),
(23, 'Wystawa Projektów Studenckich', 'Zapraszamy na wystawę projektów studenckich, która odbędzie się 5 sierpnia. Studenci zaprezentują swoje projekty z różnych dziedzin, w tym inżynierii, informatyki i sztuki. Przyjdź i zobacz, nad czym pracują twoi koledzy!', 'http://localhost/piokck/images/wystawa.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID_uzytkownika` int(11) NOT NULL,
  `typ` int(1) NOT NULL DEFAULT 0,
  `Imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Haslo` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `Rok_studiow` int(20) NOT NULL,
  `Kierunek` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Profil` varchar(50) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID_uzytkownika`, `typ`, `Imie`, `Nazwisko`, `Email`, `Haslo`, `Rok_studiow`, `Kierunek`, `Profil`) VALUES
(5, 1, 'Michał', 'Urbaniak', 'admin@wp.pl', '$2y$10$KVEa2GeYsmshJtBcFaJBHe5tszweeyRE1RXYZVlNX2sd.IOGGN2HO', 2, 'Informatyka', NULL),
(6, 0, 'Jan', 'Nowak', 'uzytkownik@wp.pl', '$2y$10$i1v0mk6V80E.DyWwAOy2lOLdPQCuvHVl2JXt.w7TkOuakse0uOlfK', 1, 'Informatyka', NULL),
(19, 1, 'Owner', 'Owner', 'admin@vp.pl', '$2y$10$EycPfcaQYBnNuysGhHIVHOp.AJy61KT1VSzpNyl5Bm3Pbsjzk9KDa', 2, 'Informatyka', NULL);

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
-- AUTO_INCREMENT dla tabeli `korki`
--
ALTER TABLE `korki`
  MODIFY `ID_korkow` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `ID_ogloszenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID_uzytkownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
