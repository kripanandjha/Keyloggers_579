-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 08:33 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `signature` longtext NOT NULL,
  `username` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `sent_to` varchar(50) NOT NULL,
  `sentat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `signature`, `username`, `users_id`, `sent_to`, `sentat`) VALUES
(1, 'nUIPXqLNGYVv/MBOQn3m+Q==\\n', 'nUIPXqLNGYVv/MBOQn3m+Q==\\n', 'q', 0, 'w', 'Wed Dec 07 10:19:30 PST 2016'),
(2, 'pT+Oozuqa4uKYCIp9nm+sA==\\n', 'pT+Oozuqa4uKYCIp9nm+sA==\\n', 'q', 0, 'w', 'Wed Dec 07 10:20:53 PST 2016'),
(3, 'cfjWJSuMXk89EUQFXuL++g==\\n', 'cfjWJSuMXk89EUQFXuL++g==\\n', 'q', 0, 'w', 'Wed Dec 07 10:47:06 PST 2016'),
(4, 'iSW9O9B3mvYoBI4DMAHyQQ==\\n', 'iSW9O9B3mvYoBI4DMAHyQQ==\\n', 'q', 0, 'w', 'Wed Dec 07 10:48:16 PST 2016'),
(5, 'mc+TrwAqgY1Lsg1Z5N6jIg==\\n', 'mc+TrwAqgY1Lsg1Z5N6jIg==\\n', 'w', 0, 'q', 'Wed Dec 07 11:01:46 PST 2016'),
(6, 'zdv9uPwk5xHMVHeo4IZlYQ==\\n', 'zdv9uPwk5xHMVHeo4IZlYQ==\\n', 'w', 0, 'q', 'Wed Dec 07 11:09:02 PST 2016'),
(7, '3UJNBtZ6mOHr1KkmyjP50A==\\n', '3UJNBtZ6mOHr1KkmyjP50A==\\n', 'w', 0, 'q', 'Wed Dec 07 11:09:15 PST 2016'),
(8, 'YQVu9aqhyy7O5PwFEIt4lw==\\n', 'YQVu9aqhyy7O5PwFEIt4lw==\\n', 'w', 0, 'q', 'Wed Dec 07 11:10:20 PST 2016'),
(9, 'yDNQb3p/iY+rtH2PvkCooQ==\\n', 'yDNQb3p/iY+rtH2PvkCooQ==\\n', 'q', 0, 'w', 'Wed Dec 07 11:13:50 PST 2016'),
(10, 'nUIPXqLNGYVv/MBOQn3m+Q==\\n', 'nUIPXqLNGYVv/MBOQn3m+Q==\\n', 'q', 0, 'w', 'Wed Dec 07 11:16:50 PST 2016'),
(11, 'bG40Vnw76drF4jiYDxvvvw==\\n', '', 'q', 0, 'w', 'Wed Dec 07 11:22:45 PST 2016');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privateKey` longtext NOT NULL,
  `publicKey` longtext NOT NULL,
  `salt` longtext NOT NULL,
  `iv` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `mobile`, `password`, `privateKey`, `publicKey`, `salt`, `iv`) VALUES
(17, 'q', 'q', '1', '$2y$10$/TOSXRqf4.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\\nTctyIwIDAQAB\\n', 'iKig7CVaPf0NN3dV2v7g4w==\\n', '+RWAugnC25ZLep7G9H3d9A==\\n'),
(18, 'w', 'w', '1', '$2y$10$LzzaOP.8lM5iS3roEozJ.ePrjnLD4JON1vmubp373b54h8F71w.fe', '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\\nZ2r6pQIDAQAB\\n', 'nizw232kh7p/RTqJ4V2e8Q==\\n', 'L1TorwH4CVHuN1n3I6rj0A==\\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
