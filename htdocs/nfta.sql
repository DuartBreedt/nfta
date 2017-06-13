-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 09:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfta`
--

-- --------------------------------------------------------

--
-- Table structure for table `competingtable`
--

CREATE TABLE `competingtable` (
  `id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dogstable`
--

CREATE TABLE `dogstable` (
  `dog_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `club` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `callname` varchar(500) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `microchip` int(11) NOT NULL,
  `dog_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogstable`
--

INSERT INTO `dogstable` (`dog_id`, `parent_id`, `user_id`, `club`, `fullname`, `callname`, `sex`, `breed`, `microchip`, `dog_img`) VALUES
(1, 0, 1, 'wcftc', 'Cody', 'Doggo', 'female', 'irish setter', 1913, 'images/dogs/default-dog.jpg'),
(2, 0, 1, 'wcftc', 'Gus', 'Doggo', 'female', 'english setter', 4480, 'images/dogs/default-dog.jpg'),
(3, 0, 1, 'wcftc', 'Oliver', 'Doggo', 'male', 'english setter', 6991, 'images/dogs/default-dog.jpg'),
(4, 0, 1, 'wcftc', 'Bailey', 'Doggo', 'male', 'irish setter', 2863, 'images/dogs/default-dog.jpg'),
(5, 0, 1, 'wcftc', 'Milo', 'Doggo', 'male', 'irish setter', 4447, 'images/dogs/default-dog.jpg'),
(6, 0, 2, 'wcftc', 'Sophie', 'Doggo', 'female', 'english setter', 5204, 'images/dogs/default-dog.jpg'),
(7, 0, 2, 'wcftc', 'Daisy', 'Doggo', 'female', 'irish setter', 8795, 'images/dogs/default-dog.jpg'),
(8, 0, 2, 'wcftc', 'Bandit', 'Doggo', 'female', 'english setter', 4582, 'images/dogs/default-dog.jpg'),
(9, 0, 2, 'wcftc', 'Dixie', 'Doggo', 'male', 'english setter', 5462, 'images/dogs/default-dog.jpg'),
(10, 0, 2, 'wcftc', 'Boomer', 'Doggo', 'female', 'pointer', 2921, 'images/dogs/default-dog.jpg'),
(11, 0, 3, 'nftc', 'Buddy', 'Doggo', 'male', 'english setter', 5870, 'images/dogs/default-dog.jpg'),
(12, 0, 3, 'nftc', 'Sammy', 'Doggo', 'male', 'pointer', 6165, 'images/dogs/default-dog.jpg'),
(13, 0, 3, 'nftc', 'Rudy', 'Doggo', 'female', 'english setter', 1141, 'images/dogs/default-dog.jpg'),
(14, 0, 3, 'nftc', 'Sasha', 'Doggo', 'female', 'pointer', 2176, 'images/dogs/default-dog.jpg'),
(15, 0, 3, 'nftc', 'Cooper', 'Doggo', 'female', 'pointer', 9320, 'images/dogs/default-dog.jpg'),
(16, 0, 4, 'tvlftc', 'Samson', 'Doggo', 'male', 'english setter', 3830, 'images/dogs/default-dog.jpg'),
(17, 0, 4, 'tvlftc', 'Pepper', 'Doggo', 'male', 'irish setter', 4057, 'images/dogs/default-dog.jpg'),
(18, 0, 4, 'tvlftc', 'Angel', 'Doggo', 'male', 'pointer', 9150, 'images/dogs/default-dog.jpg'),
(19, 0, 4, 'tvlftc', 'Toby', 'Doggo', 'female', 'pointer', 3144, 'images/dogs/default-dog.jpg'),
(20, 0, 4, 'tvlftc', 'Teddy', 'Doggo', 'female', 'pointer', 3797, 'images/dogs/default-dog.jpg'),
(21, 0, 5, 'bftc', 'Dakota', 'Doggo', 'male', 'english setter', 4492, 'images/dogs/default-dog.jpg'),
(22, 0, 5, 'bftc', 'Riley', 'Doggo', 'male', 'irish setter', 9448, 'images/dogs/default-dog.jpg'),
(23, 0, 5, 'bftc', 'Ginger', 'Doggo', 'male', 'english setter', 2491, 'images/dogs/default-dog.jpg'),
(24, 0, 5, 'bftc', 'Jackson', 'Doggo', 'male', 'irish setter', 9171, 'images/dogs/default-dog.jpg'),
(25, 0, 5, 'bftc', 'Maximus', 'Doggo', 'male', 'irish setter', 2506, 'images/dogs/default-dog.jpg'),
(26, 0, 6, 'nftc', 'Casey', 'Doggo', 'female', 'english setter', 9023, 'images/dogs/default-dog.jpg'),
(27, 0, 6, 'nftc', 'Abby', 'Doggo', 'male', 'english setter', 2844, 'images/dogs/default-dog.jpg'),
(28, 0, 6, 'nftc', 'Coco', 'Doggo', 'female', 'irish setter', 2710, 'images/dogs/default-dog.jpg'),
(29, 0, 6, 'nftc', 'Luna', 'Doggo', 'male', 'english setter', 1645, 'images/dogs/default-dog.jpg'),
(30, 0, 6, 'nftc', 'Brandy', 'Doggo', 'male', 'pointer', 1905, 'images/dogs/default-dog.jpg'),
(31, 0, 7, 'wcftc', 'Max', 'Doggo', 'male', 'english setter', 8193, 'images/dogs/default-dog.jpg'),
(32, 0, 7, 'wcftc', 'Bear', 'Doggo', 'female', 'english setter', 3090, 'images/dogs/default-dog.jpg'),
(33, 0, 7, 'wcftc', 'Rusty', 'Doggo', 'female', 'irish setter', 1547, 'images/dogs/default-dog.jpg'),
(34, 0, 7, 'wcftc', 'Ruby', 'Doggo', 'female', 'irish setter', 5858, 'images/dogs/default-dog.jpg'),
(35, 0, 7, 'wcftc', 'Mia', 'Doggo', 'male', 'irish setter', 9467, 'images/dogs/default-dog.jpg'),
(36, 0, 8, 'nftc', 'Lilly', 'Doggo', 'female', 'english setter', 6261, 'images/dogs/default-dog.jpg'),
(37, 0, 8, 'nftc', 'Murphy', 'Doggo', 'female', 'english setter', 9978, 'images/dogs/default-dog.jpg'),
(38, 0, 8, 'nftc', 'Maggie', 'Doggo', 'male', 'irish setter', 3186, 'images/dogs/default-dog.jpg'),
(39, 0, 8, 'nftc', 'Jack', 'Doggo', 'male', 'pointer', 4364, 'images/dogs/default-dog.jpg'),
(40, 0, 8, 'nftc', 'Louie', 'Doggo', 'male', 'irish setter', 1249, 'images/dogs/default-dog.jpg'),
(41, 0, 9, 'tvlftc', 'Molly', 'Doggo', 'female', 'pointer', 7177, 'images/dogs/default-dog.jpg'),
(42, 0, 9, 'tvlftc', 'Beau', 'Doggo', 'female', 'english setter', 4690, 'images/dogs/default-dog.jpg'),
(43, 0, 9, 'tvlftc', 'Holly', 'Doggo', 'male', 'english setter', 8946, 'images/dogs/default-dog.jpg'),
(44, 0, 9, 'tvlftc', 'Gracie', 'Doggo', 'female', 'pointer', 5893, 'images/dogs/default-dog.jpg'),
(45, 0, 9, 'tvlftc', 'Madison', 'Doggo', 'female', 'irish setter', 3349, 'images/dogs/default-dog.jpg'),
(46, 0, 10, 'bftc', 'Penny', 'Doggo', 'female', 'english setter', 6885, 'images/dogs/default-dog.jpg'),
(47, 0, 10, 'bftc', 'Katie', 'Doggo', 'male', 'irish setter', 8430, 'images/dogs/default-dog.jpg'),
(48, 0, 10, 'bftc', 'Bella', 'Doggo', 'female', 'pointer', 4648, 'images/dogs/default-dog.jpg'),
(49, 0, 10, 'bftc', 'Samantha', 'Doggo', 'female', 'pointer', 3023, 'images/dogs/default-dog.jpg'),
(50, 0, 10, 'bftc', 'Annie', 'Doggo', 'male', 'pointer', 6937, 'images/dogs/default-dog.jpg'),
(51, 0, 11, 'bftc', 'Rosie', 'Doggo', 'male', 'irish setter', 8983, 'images/dogs/default-dog.jpg'),
(52, 0, 11, 'bftc', 'Lexi', 'Doggo', 'female', 'english setter', 2057, 'images/dogs/default-dog.jpg'),
(53, 0, 11, 'bftc', 'Zoe', 'Doggo', 'female', 'irish setter', 2588, 'images/dogs/default-dog.jpg'),
(54, 0, 11, 'bftc', 'Heidi', 'Doggo', 'male', 'english setter', 4192, 'images/dogs/default-dog.jpg'),
(55, 0, 11, 'bftc', 'Gizmo', 'Doggo', 'male', 'irish setter', 9928, 'images/dogs/default-dog.jpg'),
(56, 0, 12, 'tvlftc', 'Bruno', 'Doggo', 'male', 'pointer', 5550, 'images/dogs/default-dog.jpg'),
(57, 0, 12, 'tvlftc', 'Rocky', 'Doggo', 'male', 'english setter', 1718, 'images/dogs/default-dog.jpg'),
(58, 0, 12, 'tvlftc', 'Emma', 'Doggo', 'female', 'pointer', 6847, 'images/dogs/default-dog.jpg'),
(59, 0, 12, 'tvlftc', 'Harley', 'Doggo', 'male', 'irish setter', 1897, 'images/dogs/default-dog.jpg'),
(60, 0, 12, 'tvlftc', 'Dakota', 'Doggo', 'male', 'irish setter', 1927, 'images/dogs/default-dog.jpg'),
(61, 0, 13, 'wcftc', 'Lady', 'Doggo', 'male', 'pointer', 4475, 'images/dogs/default-dog.jpg'),
(62, 0, 13, 'wcftc', 'Duke', 'Doggo', 'female', 'irish setter', 8688, 'images/dogs/default-dog.jpg'),
(63, 0, 13, 'wcftc', 'Charlie', 'Doggo', 'female', 'irish setter', 2096, 'images/dogs/default-dog.jpg'),
(64, 0, 13, 'wcftc', 'Chloe', 'Doggo', 'male', 'irish setter', 5422, 'images/dogs/default-dog.jpg'),
(65, 0, 13, 'wcftc', 'Oscar', 'Doggo', 'male', 'pointer', 5841, 'images/dogs/default-dog.jpg'),
(66, 0, 14, 'nftc', 'Stella', 'Doggo', 'male', 'irish setter', 7757, 'images/dogs/default-dog.jpg'),
(67, 0, 14, 'nftc', 'Lucky', 'Doggo', 'male', 'english setter', 6459, 'images/dogs/default-dog.jpg'),
(68, 0, 14, 'nftc', 'Lola', 'Doggo', 'female', 'irish setter', 7228, 'images/dogs/default-dog.jpg'),
(69, 0, 14, 'nftc', 'Buster', 'Doggo', 'male', 'irish setter', 2001, 'images/dogs/default-dog.jpg'),
(70, 0, 14, 'nftc', 'Shelby', 'Doggo', 'female', 'irish setter', 4106, 'images/dogs/default-dog.jpg'),
(71, 0, 15, 'tvlftc', 'Jasmine', 'Doggo', 'female', 'pointer', 8578, 'images/dogs/default-dog.jpg'),
(72, 0, 15, 'tvlftc', 'Hunter', 'Doggo', 'male', 'pointer', 3232, 'images/dogs/default-dog.jpg'),
(73, 0, 15, 'tvlftc', 'Lily', 'Doggo', 'male', 'pointer', 8775, 'images/dogs/default-dog.jpg'),
(74, 0, 15, 'tvlftc', 'Zoey', 'Doggo', 'female', 'irish setter', 2623, 'images/dogs/default-dog.jpg'),
(75, 0, 15, 'tvlftc', 'Lulu', 'Doggo', 'female', 'pointer', 3916, 'images/dogs/default-dog.jpg'),
(76, 0, 16, 'bftc', 'Tucker', 'Doggo', 'female', 'english setter', 6934, 'images/dogs/default-dog.jpg'),
(77, 0, 16, 'bftc', 'Henry', 'Doggo', 'female', 'english setter', 6263, 'images/dogs/default-dog.jpg'),
(78, 0, 16, 'bftc', 'Missy', 'Doggo', 'male', 'irish setter', 6843, 'images/dogs/default-dog.jpg'),
(79, 0, 16, 'bftc', 'Luke', 'Doggo', 'female', 'pointer', 5410, 'images/dogs/default-dog.jpg'),
(80, 0, 16, 'bftc', 'Roxie', 'Doggo', 'female', 'english setter', 4002, 'images/dogs/default-dog.jpg'),
(81, 0, 17, 'wcftc', 'Jake', 'Doggo', 'female', 'pointer', 6212, 'images/dogs/default-dog.jpg'),
(82, 0, 17, 'wcftc', 'Joey', 'Doggo', 'male', 'pointer', 3277, 'images/dogs/default-dog.jpg'),
(83, 0, 17, 'wcftc', 'Bailey', 'Doggo', 'male', 'irish setter', 8522, 'images/dogs/default-dog.jpg'),
(84, 0, 17, 'wcftc', 'Shadow', 'Doggo', 'male', 'irish setter', 7592, 'images/dogs/default-dog.jpg'),
(85, 0, 17, 'wcftc', 'Zeus', 'Doggo', 'female', 'english setter', 9621, 'images/dogs/default-dog.jpg'),
(86, 0, 18, 'nftc', 'Princess', 'Doggo', 'male', 'pointer', 9035, 'images/dogs/default-dog.jpg'),
(87, 0, 18, 'nftc', 'Roxy', 'Doggo', 'male', 'pointer', 1661, 'images/dogs/default-dog.jpg'),
(88, 0, 18, 'nftc', 'Baxter', 'Doggo', 'female', 'english setter', 8569, 'images/dogs/default-dog.jpg'),
(89, 0, 18, 'nftc', 'Belle', 'Doggo', 'female', 'pointer', 9050, 'images/dogs/default-dog.jpg'),
(90, 0, 18, 'nftc', 'Sandy', 'Doggo', 'male', 'english setter', 8817, 'images/dogs/default-dog.jpg'),
(91, 0, 19, 'tvlftc', 'Casey', 'Doggo', 'female', 'pointer', 3139, 'images/dogs/default-dog.jpg'),
(92, 0, 19, 'tvlftc', 'Sparky', 'Doggo', 'female', 'irish setter', 6970, 'images/dogs/default-dog.jpg'),
(93, 0, 19, 'tvlftc', 'Romeo', 'Doggo', 'female', 'english setter', 8094, 'images/dogs/default-dog.jpg'),
(94, 0, 19, 'tvlftc', 'Bentley', 'Doggo', 'male', 'pointer', 9877, 'images/dogs/default-dog.jpg'),
(95, 0, 19, 'tvlftc', 'Winston', 'Doggo', 'male', 'pointer', 2510, 'images/dogs/default-dog.jpg'),
(96, 0, 20, 'bftc', 'Honey', 'Doggo', 'female', 'english setter', 8847, 'images/dogs/default-dog.jpg'),
(97, 0, 20, 'bftc', 'Sadie', 'Doggo', 'female', 'pointer', 1849, 'images/dogs/default-dog.jpg'),
(98, 0, 20, 'bftc', 'Sam', 'Doggo', 'male', 'pointer', 5761, 'images/dogs/default-dog.jpg'),
(99, 0, 20, 'bftc', 'Rocco', 'Doggo', 'female', 'english setter', 2516, 'images/dogs/default-dog.jpg'),
(100, 0, 20, 'bftc', 'Lucy', 'Doggo', 'female', 'irish setter', 7094, 'images/dogs/default-dog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventstable`
--

CREATE TABLE `eventstable` (
  `event_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `club` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventstable`
--

INSERT INTO `eventstable` (`event_id`, `name`, `description`, `date`, `club`) VALUES
(1, 'Field Trial May-17', 'Held at Tarkastad.', '2017-05-03', 'bftc'),
(2, 'Field Trial May-17', 'Held at Swellendam.', '2017-05-09', 'wcftc'),
(3, 'Field Trial May-17', 'Held at Stutterheim.', '2017-05-15', 'national');

-- --------------------------------------------------------

--
-- Table structure for table `galleriestable`
--

CREATE TABLE `galleriestable` (
  `gallery_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `club` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleriestable`
--

INSERT INTO `galleriestable` (`gallery_id`, `event_id`, `name`, `description`, `club`) VALUES
(1, 1, 'Field Trial May-17', 'Photos of trial held at Tarkastad.', 'bftc'),
(2, 2, 'Field Trial May-17', 'Photos of trial held at Swellendam.', 'wcftc'),
(3, 3, 'Field Trial May-17', 'Photos of trial held at Stutterheim.', 'national');

-- --------------------------------------------------------

--
-- Table structure for table `imagestables`
--

CREATE TABLE `imagestables` (
  `image_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `caption` varchar(1000) NOT NULL,
  `source` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resultstable`
--

CREATE TABLE `resultstable` (
  `result_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE `userstable` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_img` varchar(500) NOT NULL,
  `club` varchar(500) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`user_id`, `firstname`, `lastname`, `email`, `cell`, `password`, `profile_img`, `club`, `admin`) VALUES
(1, 'Duart', 'Breedt', 'duart@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'wcftc', 1),
(2, 'Edric', 'Domenic', 'edric@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'wcftc', 0),
(3, 'Wade', 'Konnor', 'wade@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'nftc', 0),
(4, 'Casey', 'Bysshe', 'casey@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'tvlftc', 0),
(5, 'Kaleb', 'Monte', 'kaleb@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'bftc', 0),
(6, 'Hugh', 'Gervase', 'hugh@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'nftc', 0),
(7, 'Geoffrey', 'Thurstan', 'geoffrey@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'wcftc', 0),
(8, 'Edmund', 'Sonnie', 'edmund@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'nftc', 0),
(9, 'Darden', 'Tibby', 'darden@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'tvlftc', 0),
(10, 'Dwayne', 'Roland', 'dwayne@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'bftc', 0),
(11, 'Harvey', 'Purdie', 'harvey@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'bftc', 0),
(12, 'Rodney', 'Winton', 'rodney@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'tvlftc', 0),
(13, 'Brandon', 'Cletus', 'brandon@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'wcftc', 0),
(14, 'Nathaniel', 'Kingsley', 'nathaniel@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'nftc', 0),
(15, 'Quincey', 'Bentley', 'quincey@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'tvlftc', 0),
(16, 'Clement', 'Norton', 'clement@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'bftc', 0),
(17, 'Holden', 'Grier', 'holden@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'wcftc', 0),
(18, 'Marvyn', 'Sefton', 'marvyn@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'nftc', 0),
(19, 'Boyce', 'Shaw', 'boyce@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'tvlftc', 0),
(20, 'Randy', 'Lambert', 'randy@gmail.com', '0987654321', 'Passw0rd', 'images/users/default-profile.png', 'bftc', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competingtable`
--
ALTER TABLE `competingtable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dog_id` (`dog_id`,`event_id`,`user_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `dogstable`
--
ALTER TABLE `dogstable`
  ADD PRIMARY KEY (`dog_id`),
  ADD KEY `user_id` (`user_id`,`club`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `eventstable`
--
ALTER TABLE `eventstable`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `galleriestable`
--
ALTER TABLE `galleriestable`
  ADD PRIMARY KEY (`gallery_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `imagestables`
--
ALTER TABLE `imagestables`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `resultstable`
--
ALTER TABLE `resultstable`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `event_id` (`event_id`,`dog_id`),
  ADD KEY `dog_id` (`dog_id`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competingtable`
--
ALTER TABLE `competingtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dogstable`
--
ALTER TABLE `dogstable`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `eventstable`
--
ALTER TABLE `eventstable`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleriestable`
--
ALTER TABLE `galleriestable`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `imagestables`
--
ALTER TABLE `imagestables`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resultstable`
--
ALTER TABLE `resultstable`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `competingtable`
--
ALTER TABLE `competingtable`
  ADD CONSTRAINT `competingtable_ibfk_1` FOREIGN KEY (`dog_id`) REFERENCES `dogstable` (`dog_id`),
  ADD CONSTRAINT `competingtable_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `eventstable` (`event_id`),
  ADD CONSTRAINT `competingtable_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `userstable` (`user_id`);

--
-- Constraints for table `dogstable`
--
ALTER TABLE `dogstable`
  ADD CONSTRAINT `dogstable_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `userstable` (`user_id`);

--
-- Constraints for table `resultstable`
--
ALTER TABLE `resultstable`
  ADD CONSTRAINT `resultstable_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `eventstable` (`event_id`),
  ADD CONSTRAINT `resultstable_ibfk_2` FOREIGN KEY (`dog_id`) REFERENCES `dogstable` (`dog_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
