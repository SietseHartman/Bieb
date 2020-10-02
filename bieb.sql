-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2020 at 09:46 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bieb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boeks`
--

CREATE TABLE `boeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagina` decimal(3,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boeks`
--

INSERT INTO `boeks` (`id`, `name`, `description`, `pagina`, `created_at`, `updated_at`) VALUES
(21, 'Harry Potter en de Steen der Wijzen (boek)', 'Harry Potter en de Steen der Wijzen is het eerste deel van de populaire Harry Potterserie en is net zoals de zes opvolgende delen geschreven door de Britse schrijfster J.K. Rowling. De verhalen beschrijven het leven van een jonge tovenaar, genaamd Harry Potter.', '232', '2020-10-01 08:43:53', '2020-10-01 13:05:32'),
(22, 'Harry Potter en de Relieken van de Dood', 'Harry Potter en de Relieken van de Dood (Engels: Harry Potter and the Deathly Hallows) is het zevende en laatste boek uit de Harry Potterboekenreeks, geschreven door de Britse schrijfster J.K. Rowling.', '541', '2020-10-01 08:57:28', '2020-10-01 08:57:28'),
(23, 'Fantastic Beasts and Where to Find Them', 'Fantastic Beasts and Where to Find Them is een Brits-Amerikaanse fantasyfilm uit 2016 die geïnspireerd is op het gelijknamige boek van J.K. Rowling. De film is een spin-off van de Harry Potterfilmserie. Het script is geschreven door J.K. Rowling en is geregisseerd door David Yates, die ook de laatste vier Harry Potterfilms regisseerde. De film ging in première op 10 november 2016 op de Juilliard School in New York.', '128', '2020-10-01 09:35:24', '2020-10-01 09:35:24'),
(25, 'Spijt!', 'Spijt! is een boek van de Nederlandse schrijfster Carry Slee over een jongen die gepest wordt. In 1998 werd het boek bekroond met de Prijs van de Jonge Jury. Het boek werd verfilmd in 2013.', '144', '2020-10-02 06:18:16', '2020-10-02 06:18:16'),
(26, 'Welcome to Dead House', 'Welcome to Dead House is the first book in the original Goosebumps book series. It was first published in July of 1992 along with Stay Out of the Basement and Monster Blood, the second and third books. Additionally, it was re-released in 2010 as the thirteenth book under the Classic Goosebumps title, featuring new artwork by Brandon Dorman.\r\n\r\nThe plot follows Amanda and Josh Benson, who move with their parents into a creepy old house located in the strange town of Dark Falls where people are unlike any they have known before.\r\n\r\nThe original cover illustration by Tim Jacobus features an old house at night, with the front door slightly ajar, and a strange figure illuminated in the window.', '128', '2020-10-02 07:20:12', '2020-10-02 07:20:12'),
(27, 'The Haunted Mask', 'The Haunted Mask is the eleventh book in the original Goosebumps, the series of children\'s horror fiction novels created and written by R. L. Stine. The book follows Carly Beth, a girl who buys a Halloween mask from a store. After putting on the mask, she starts acting differently and discovers that the mask has become her face; she is unable to pull the mask off. R. L. Stine says he got the idea for the book from his son who had put on a Frankenstein mask he had trouble getting off.', '121', '2020-10-02 07:22:00', '2020-10-02 07:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_10_01_081223_create_boeks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boeks`
--
ALTER TABLE `boeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boeks`
--
ALTER TABLE `boeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
