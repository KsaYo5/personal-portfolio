-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 10:31 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `tytul` varchar(255) DEFAULT NULL,
  `data_premiery` date DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `okladka` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lista`
--

INSERT INTO `lista` (`id`, `tytul`, `data_premiery`, `opis`, `okladka`) VALUES
(1, 'Incepcja', '2010-07-16', 'Incepcja to film science fiction w reżyserii Christophera Nolana, który eksploruje temat snów, rzeczywistości i manipulacji. Akcja skupia się wokół złodzieja, który wtargnął do umysłu biznesmena, aby wszczepić myśl o zmianie decyzji dotyczącej dziedziczenia.', 'https://as.repertuary.pl/images/dbimages/film_6994_original_1.jpg'),
(2, 'Matrix', '1999-03-31', 'Matrix to kultowy film science fiction, którego akcja obraca się wokół rzeczywistości, iluzji i kontroli. Bohaterem jest Neo, który dowiaduje się, że świat, w którym żyje, jest symulacją komputerową stworzoną przez maszyny.', 'https://www.popkultura.info.pl/media/image/matrix-reaktywacja-okladka.jpg'),
(3, 'Interstellar', '2014-11-07', 'Interstellar to film opowiadający o próbie ocalenia ludzkości przed zagładą na skutek wyczerpania zasobów Ziemi. Załoga statku kosmicznego wyrusza w podróż międzygwiezdną w poszukiwaniu nowego domu dla ludzkości.', 'https://m.media-amazon.com/images/I/A1JVqNMI7UL._AC_UF1000,1000_QL80_.jpg'),
(4, 'Skazani na Shawshank', '1994-09-10', 'Skazani na Shawshank to historia Andyego Dufresne, bankiera skazanego na dożywocie za morderstwo swojej żony i jej kochanka, który stara się utrzymać nadzieję i godność w brutalnym środowisku więziennym.', 'https://fwcdn.pl/fpo/10/48/1048/6925401.3.jpg'),
(5, 'Ojciec chrzestny', '1972-03-14', 'Ojciec chrzestny to epicki film opowiadający historię mafijnego rodu Corleone. Przepełniony zdradą, lojalnością, przemocą i honorowym kodeksem, film prezentuje wstrząsający obraz podziemnego świata.', 'https://play-lh.googleusercontent.com/RGpGfDyLdkWJXC3p1wA2kzoczV_MfBynJUmrRW3-oFJ8_jt7rJDN984TRhi7sKBEzDEbuQwhQIevIPCqSg'),
(6, 'Lista Schindlera', '1993-12-15', 'Lista Schindlera to film oparty na prawdziwej historii Oskara Schindlera, niemieckiego biznesmena, który uratował ponad 1000 Żydów podczas Holocaustu, zatrudniając ich w swojej fabryce.', 'https://fwcdn.pl/fpo/12/11/1211/7876866.3.jpg'),
(7, 'Nietykalni', '2011-11-02', '\n\"Nietykalni\" to poruszająca opowieść o niezwykłej przyjaźni między dwoma bardzo różnymi ludźmi: Philippem, bogatym arystokratą sparaliżowanym od szyi w dół, oraz Drissem, charyzmatycznym młodym mężczyzną z przedmieść, który zostaje jego opiekunem. Pomimo swoich różnic, obaj odnajdują w sobie wspólny język i wzajemnie się inspirują, przekraczając granice społeczne i kulturowe. Film jest pełen humoru, emocji i przesłania o znaczeniu przyjaźni i akceptacji.', 'https://fwcdn.pl/fpo/33/90/583390/7441162.3.jpg'),
(8, 'Forrest Gump', '1994-07-06', 'Forrest Gump to opowieść o życiu mężczyzny o niskim ilorazie inteligencji, który przypadkowo uczestniczy w wielu kluczowych wydarzeniach w historii Stanów Zjednoczonych w latach 60. i 70.', 'https://fwcdn.pl/fpo/09/98/998/8021615.3.jpg'),
(9, 'Leon zawodowiec', '1994-09-14', 'Leon zawodowiec to historia ekscentrycznego zabójcy na zlecenie, który nawiązuje nietypową więź z młodą sąsiadką po tym, jak jej rodzina zostaje zamordowana przez korumpowanego policjanta.', 'https://www.gloskultury.pl/wp-content/uploads/2016/07/leon.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
