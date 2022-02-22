-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 07:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cover_path` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `cover_path`, `description`, `price`) VALUES
(1, 'Mushoku Tensei: Jobless Reincarnation Light Novel', 'LN1', 'Kicked out by his family and wandering the streets, an unemployed 34-year-old shut-in thinks he\'s hit rock-bottom--just as he\'s hit and killed by a speeding truck! Awakening to find himself reborn as an infant in a world of swords and sorcery, but with the memories of his first life intact, Rudeus Greyrat is determined not to repeat his past mistakes. He\'s going to make the most of this reincarnation as he sets off on the adventure of a second lifetime!', 8.32),
(2, 'Ascendance of a Bookworm Light Novel', 'LN2', 'A young woman who loves books dies and is reborn in another world as Myne, a sickly child from a poor family. Worst of all, there are almost no books in this world! So Myne decides that she\'ll just have to make her own and become a librarian.', 7.85),
(3, 'How a Realist Hero Rebuilt the Kingdom Light Novel', 'LN3', '\"\"O, Hero!\"\"\r\nWith that cliched line, Kazuya Souma found himself summoned to another world and his adventure--did not begin.\r\nAfter he presents his plan to strengthen the country economically and militarily, the king cedes the throne to him...?!', 7.85),
(4, 'Guide to Raising a Nation Out of Debt', 'LN4', 'The prince of this small and weak kingdom strives for only one thing: selling out his country and living a quiet life in leisure! Sadly, the greatest obstacle he will ever face is his own genius...! As he achieves ever greater accomplishments, he earns more and more favor with the people of his kingdom...which makes fulfilling his own dreams all the harder!!!', 8.68),
(5, 'My Quiet Blacksmith Life in Another World', 'LN5', 'After saving an injured cat, middle-aged, overworked programmer Eizo is rewarded with a quiet life as a blacksmith in another world. His newfound skills turn out to be god-tier, and the weapons he makes are strong enough to turn the tides of war.', 7.85),
(6, 'So I\'m a Spider, So What? Light Novel', 'LN6', 'I used to be a normal high school girl but in the blink of an eye, I woke up in a place I\'ve never seen before and-and I was reborn as a spider?! How could something that\'s nothing more than a tiny spider (that\'s me) possibly survive in literally the worst dungeon ever? Are there no rules? There should be some rules! Who the hell is responsible for this? SHOW YOUR FACE!', 8.55),
(7, 'EIGHTY-SIX Light Novel', 'LN7', 'A War Without Casualties. The Republic of San Magnolia has long been under attack from the neighboring Giadian Empire\'s army of unmanned drones known as the Legion. After years of painstaking research, the Republic finally developed autonomous drones of their own, turning the one-sided struggle into a war without casualties-or at least, that\'s what the government claims. In truth, there is no such thing as a bloodless war. Beyond the fortified walls protecting the eighty-five Republic territories lies the \"\"nonexistent\"\" Eighty-Sixth Sector. The young men and women of this forsaken land are branded the Eighty-Six and, stripped of their humanity, pilot the \"\"unmanned\"\" weapons into battle...', 8.56);

-- --------------------------------------------------------

--
-- Table structure for table `books_genres`
--

CREATE TABLE `books_genres` (
  `entry_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `books_genres`
--
ALTER TABLE `books_genres`
  ADD PRIMARY KEY (`entry_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books_genres`
--
ALTER TABLE `books_genres`
  MODIFY `entry_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_genres`
--
ALTER TABLE `books_genres`
  ADD CONSTRAINT `books_genres_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `books_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
