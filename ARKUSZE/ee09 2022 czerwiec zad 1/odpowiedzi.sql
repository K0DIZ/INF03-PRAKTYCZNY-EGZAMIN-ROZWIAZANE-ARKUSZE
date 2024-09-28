-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lut 2024, 09:24
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
-- Baza danych: `forumpsy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id` int(10) UNSIGNED NOT NULL,
  `Pytania_id` int(10) UNSIGNED NOT NULL,
  `konta_id` int(10) UNSIGNED NOT NULL,
  `odpowiedz` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id`, `Pytania_id`, `konta_id`, `odpowiedz`) VALUES
(1, 1, 4, 'Jeśli pies nie był nigdy czesany to zacznij czesać mięciutką szczotką. Tak aby piesek nie zraził się do tego zabiegu.'),
(2, 1, 5, 'Bardzo delikatnie czesz łapki i brodę i ogonek.'),
(3, 1, 9, 'Nagradzaj spokój. Dopiero jak zauwazysz że pies nie stresuje się przy czesaniu można stopniowo zacząć czesać i trymować.'),
(4, 2, 2, 'Przede wszystkim wyrzuć te wszystkie rzeczy na których psy śpią'),
(5, 2, 7, 'Musisz dokładnie poodkurzać mieszkanie, dywany, chodniki, mable, zasłony oraz dodatkowo wytrzepać, i przede wszystkim dokładnie poodkurzać zakamarki.'),
(6, 2, 5, 'Dla psów dostępne są również szampony owadobójcze. '),
(7, 2, 9, 'Psy powinny też chodzić bez przerwy w obroży owadobójczej, dodatkowo powinny być zakropione kroplami tzw. spot-on.'),
(8, 1, 5, 'Przyda Ci się także wysoki stół, na którym postawisz pieska.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
