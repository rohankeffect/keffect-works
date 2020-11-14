-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2020 at 08:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `verified`, `token`, `email`, `password`) VALUES
(9, 'Rohan', 0, 'ec01e09a95c298a5cddbb3d61a2f940759764bc38964271eaaf50c7f02f9da2afc9b3b600fdc4f16826b3e399599a59438cc', 'rohantgeorge05@gmail.com', '$2y$10$HavtEvh69xcPNTlTW5mRR.vj4yC6xfvOiKXl6Bi640At25YnOUzO6'),
(16, 'Thomas', 0, 'ed651b41a5b7928468d87f6fc85be505398cd28ba9dd6ea492109b215bb7bbb6e46c121712e0c7b9f7af6228c8beba1c027a', 'thomas.keffect@gmail.com', '$2y$10$F12uPw/juD1fdi3MNyyLnexsPKmWPilXTpdMvKf1Imhurrrf.0n/m'),
(17, 'Rahul', 0, '9ca8d386bd91ef5198301fc1b088b489f7b2462328fa1061a203a9a5f76fe3f5a715f166ca594e6abb4bdc675e0d7d8711cf', 'rahulgeorge@gmail.com', '$2y$10$xGAVCyX5qL2XURwg/jfAruU4sYtUgiOsWGl1RpEsJBvIvk58KGJQ.'),
(18, 'Rohann', 0, 'eecd15b965d3d9bb7149ecec5e2ff3896986d7b5ef8deb5a16494232bb6985d922b5c95e9742d6132741615139d303aacc16', 'lola@gmail.com', '$2y$10$8DrBYywot.goeso9wjOVZeZ1apF4i3StJeJxtNn3q3Hyn492JP9H.'),
(19, 'rohant', 0, '1f15829d2ff12db407835241743fdbb21b07f1626d2124d0b3c110f3e9db7cba11398790764cba252097188cfeceff0a5a56', 'hello@keffectdigital.com', '$2y$10$DSKDNtFq6uwSKJW7XJ8AeOFIFzFhca09PtB.Ws1edPDtQQsD1gZeq'),
(20, 'rohant', 0, 'd649c367954b6ce2bb9fc847cfd075679567d2843f9b379d35da1329590d4ac59d15d4741f59624962c9cc64760d084c8b71', 'xxx@keffectdigital.com', '$2y$10$c0GW/EN1i5CtOEggAXJAsuNBSf4W1msDGiXVHnnJNXB6RkQtIyTg6'),
(21, 'midhun', 0, 'e5a95559af52b09f22b543397b91de528f0d43e03311761a2c1506b874504dbcd7bba6fe14e6b526bf3f5c23a456481c77fc', 'midhun@gmail.com', '$2y$10$V.pbnpkvi9jPs6DkxyUqNuEIl66NiOqwoouIJzo/FVZ3sOOOMNV1q'),
(22, 'aparna', 1, '424ffe02b39b81e55899eb43928664774c3671ab54e17d3169259ebd897fa9d82650bd0065434f7a250d856cb34667e530cb', 'ttvettuparambil@gmail.com', '$2y$10$Ysl0OTB9OZgJwvxAWCr8A.LcqCf4WQ9Tj/0GKHHbj8rDnXeiDXzby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
