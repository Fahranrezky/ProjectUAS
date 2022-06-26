-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2021 pada 13.57
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectthree`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`Product_ID`, `Name`, `Description`, `Price`, `Photo`) VALUES
(3, 'Álvaro Antonio García Morte', 'February 23, 1975', 46, '11.jpg'),
(4, 'Esther Acebo', 'January 19, 1983', 38, 'por2.jpg'),
(5, 'Alba González Villa', 'October 27, 1986', 35, 'pro1.jpg'),
(6, 'Itziar Ituño ', 'June 18, 1974', 47, '22.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`Username`, `Password`, `Full_Name`) VALUES
('Hannypertiwi', '12345', 'Hanny Pertiwi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contacts`
--

CREATE TABLE `tbl_contacts` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`Name`, `Email`, `Message`, `Subject`) VALUES
('Test', 'test@yahoo.com', 'This is a Test', 'Test'),
('Hannypertiwi', 'hannyprtw4@gmail.com', 'Semangat', 'Hannyprtw_');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `Photo_ID` int(11) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`Photo_ID`, `Photo`) VALUES
(1, 'rio.jpg'),
(2, 'tokyo.jpg'),
(4, 'Coffee.jpg'),
(5, 'coffee2.jpg'),
(6, 'coffee3.jpg'),
(7, '10.jpg'),
(8, '1.jpg'),
(9, '6.jpg'),
(10, '4.jpg'),
(11, '3.jpg'),
(12, '7.jpg'),
(13, '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE `tbl_info` (
  `Information_ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Content` varchar(2000) NOT NULL,
  `Photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_info`
--

INSERT INTO `tbl_info` (`Information_ID`, `Title`, `Content`, `Photo`) VALUES
(4, 'EL PROFESOR', 'Sergio Marquina, better known as The Professor (  es.  El Profesor ), is one of the main characters in the Netflix series Money Heist, portrayed by actor Álvaro Morte. He was the mastermind responsible for organizing the Royal Mint of Spain Heist and later oversaw the Bank of Spain Heist, which had been initially planned by Berlin. The Professor had been planning heists from a young age. At the age of 19, he stopped renewing his identity card, so that he would not be registered. ', 'plant.jpg'),
(5, 'BERLIN', 'Andrés de Fonollosa, better known by his code name Berlin, is one of the main characters in the Netflix series Money Heist, portrayed by actor Pedro Alonso. He is the second-in-command of the Royal Mint of Spain heist, but also planned the Bank of Spain heist years prior, which he shared with The Professor and Palermo. Before joining the Robbers of The Royal Mint of Spain, Berlin was a jewel thief, with twenty-seven robberies to his name of jewelry stores, auction houses, and armored vehicles. His biggest theft, before the Royal Mint of Spain, was 434 diamonds in Champs-Élysées, Paris. Somewhere in his life, he was recruited by his half brother to be the leader of the “greatest robbery ever”. He was trained in various things along with his fellow robbers, and he learned all the details of the heist. ', 'plant2.jpg'),
(6, 'NAIROBI', 'Ágata Jiménez, better known by her alias Nairobi is one of the main characters of the Netflix original series Money Heist played by actress Alba Flores. She was born as Ágata Jiménez. Due to her poor conditions, she learned to counterfeit money at 13. During her teenage years, she had a boyfriend, who she later became pregnant with. Her boyfriend left after he found out about the pregnancy. Jiménez gave birth to a boy, she named him Axel. However, when Axel was 3, child services took him away from her after finding out she was dealing drugs.[1] It is also revealed that she gave birth to a daughter. Prior to the first heist, The Professor and the robbers spend five months on Toledo in preparation for the heist at the Royal Mint of Spain. Everyone agrees to be codenamed after cities, because of the Professor\'s rule of no real names. Jiménez chose to be known as Nairobi. ', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`Photo_ID`);

--
-- Indeks untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`Information_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `Photo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `Information_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
