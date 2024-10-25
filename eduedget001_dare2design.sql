-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 06:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduedget001_dare2design`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(250) NOT NULL,
  `event_name` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `description`, `picture`, `link`, `type`) VALUES
(1, 'LMIT InvenTeam VIP Showcase', 'Come and checkout the current progress made by LMIT InventTeam. The will be at SPARK on Feb. 12, 5.30-7.00 pm   ', '310923-event.jpg', '', 'current');

-- --------------------------------------------------------

--
-- Table structure for table `index_page_content`
--

CREATE TABLE `index_page_content` (
  `id` int(250) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `subheading` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `row_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invention_log`
--

CREATE TABLE `invention_log` (
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `invention_name` varchar(255) NOT NULL,
  `solved_problem` varchar(1000) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `invention_log`
--

INSERT INTO `invention_log` (`user_id`, `team_id`, `invention_name`, `solved_problem`, `dateTime`) VALUES
(107, 205, 'Test1', 'Test1', '2021-06-27 14:05:24'),
(107, 205, 'Test2', 'Test2', '2021-06-27 14:05:40'),
(252, 205, 'Demo Invent', 'Problem of invention', '2021-06-28 07:29:12'),
(252, 205, 'Demo Invent', 'Problem of invention 2', '2021-06-28 07:29:36'),
(252, 205, 'Demo Invent', 'Problem of invention 2', '2021-06-28 07:46:03'),
(252, 205, 'Demo Invent', 'Problem of invention 2', '2021-06-28 07:48:00'),
(0, 205, 'FFT', 'asasa', '2021-06-28 20:04:02'),
(255, 205, 'test', 'tst', '2021-06-29 00:12:24'),
(107, 205, ' The name of the invention:', 'The problem that it solves:', '2021-06-29 12:30:22'),
(252, 205, 'sasa', 'asasas', '2021-07-01 12:33:11'),
(252, 205, 'AAAA', 'AAAA', '2021-07-01 12:33:28'),
(252, 205, 'AAAA', 'AAAA', '2021-07-02 22:41:10'),
(252, 205, 'AAAA', 'AAAA', '2021-07-06 22:37:05'),
(256, 205, 'reinnervate', 'People need an easy and safe solution to relieve their exhaustion', '2021-07-07 01:24:21'),
(256, 205, 'reinnervate', 'People need an easy and safe solution to relieve their exhaustion', '2021-07-07 01:24:31'),
(256, 205, 'reinnervate', 'People need an easy and safe solution to relieve their exhaustion', '2021-07-07 17:37:48'),
(261, 205, 'How to use this Invention Log', 'The Invention Log is not a book report that is created after you are done. Rather, it is a diary that is continuously filled in as you work on your invention. Follow the steps of the invention process and fill out the various pages as you work on them. When you are done with a page, print your name and the datebr at the bottom. If you need extra space for any section, make copies of the Blank Page (Page 17) and use that for any purpose. Once you are done, put the pages in the order in which you did them and staple them to make a complete Invention Log. This log will also be used as part of the final presentation and needs to be filled in using complete sentences (except for things like a list of materials). Teams share one Invention Log and should attach signatures of all inventors.', '2021-07-08 03:22:41'),
(252, 205, 'Umam', 'Umam', '2021-07-08 11:01:20'),
(259, 205, 'Umam', 'Umma', '2021-07-08 12:24:35'),
(259, 205, 'Umam', 'Umma', '2021-07-08 12:33:37'),
(259, 205, 'Umam', 'UMAM', '2021-07-08 15:36:13'),
(259, 205, 'Umam', 'UMAM', '2021-07-08 15:36:31'),
(251, 205, 'aamir', 'Acces', '2021-07-08 19:17:27'),
(259, 205, 'aamir', 'Acces', '2021-07-08 19:23:19'),
(259, 205, 'aamir', 'Acces', '2021-07-08 20:07:06'),
(259, 205, 'aamir-XABC', 'Acces', '2021-07-08 20:09:21'),
(261, 205, 'test', 'tst', '2021-07-08 20:44:29'),
(261, 205, 'test', 'tst', '2021-07-08 20:57:09'),
(261, 205, 'test', 'tst', '2021-07-08 20:57:17'),
(261, 205, 'test', 'tst', '2021-07-08 20:59:04'),
(261, 205, 'test', 'tst', '2021-07-08 21:01:20'),
(261, 205, 'test', 'tst', '2021-07-08 21:02:00'),
(260, 205, 'test', 'tst', '2021-07-08 21:02:49'),
(260, 205, 'test', 'tst', '2021-07-08 21:03:31'),
(260, 205, 'test', 'tst', '2021-07-08 21:06:22'),
(260, 205, 'test', 'tst', '2021-07-08 21:08:35'),
(260, 205, 'testwert', 'tstwer', '2021-07-08 21:09:16'),
(261, 205, 'test', 'tst', '2021-07-08 21:10:59'),
(261, 205, 'test', 'tst', '2021-07-08 21:12:00'),
(261, 205, 'test', 'tst', '2021-07-08 21:13:01'),
(261, 205, 'test', 'tst', '2021-07-08 21:14:18'),
(261, 205, 'test', 'tst', '2021-07-08 21:15:42'),
(261, 205, 'test', 'tst', '2021-07-08 21:16:58'),
(260, 205, 'test', 'tst', '2021-07-08 21:30:58'),
(261, 205, 'test', 'tst', '2021-07-08 21:34:56'),
(261, 205, 'Preethi', 'pe', '2021-07-08 21:35:05'),
(260, 205, 'Preethi', 'pe', '2021-07-09 06:45:43'),
(260, 205, 'Preethi', 'pe', '2021-07-09 20:32:21'),
(260, 205, 'Preethi', 'pe', '2021-07-09 21:12:44'),
(261, 205, 'Preethi', 'pe', '2021-07-09 22:02:13'),
(261, 205, 'Preethi', 'pe', '2021-07-10 17:04:44'),
(261, 205, 'Preethi', 'pe', '2021-07-10 17:07:33'),
(261, 205, 'Preethi', 'pe', '2021-07-10 17:10:22'),
(261, 205, 'Preethi', 'pe', '2021-07-10 17:12:55'),
(261, 205, 'Preethi', 'pe', '2021-07-10 17:15:28'),
(261, 205, 'Preethi', 'pe', '2021-07-10 21:02:25'),
(261, 205, 'Preethi', 'pe', '2021-07-12 17:15:44'),
(261, 205, 'Preethi', 'pe', '2021-07-12 19:56:42'),
(261, 205, 'Preethi', 'pe', '2021-07-12 20:24:44'),
(261, 205, 'Preethi', 'pe', '2021-07-12 21:01:04'),
(261, 205, 'Preethi', 'pe', '2021-07-13 07:45:46'),
(261, 205, 'Preethi', 'pe', '2021-07-13 08:00:35'),
(261, 205, 'Preethi', 'pe', '2021-07-13 17:54:14'),
(261, 205, 'Preethi', 'pe', '2021-07-13 20:58:54'),
(261, 205, 'Preethi', 'pe', '2021-07-13 21:01:33'),
(261, 205, 'Preethi', 'pe', '2021-07-13 21:25:36'),
(261, 205, 'Preethi', 'pe', '2021-07-13 21:29:35'),
(261, 205, 'Preethi', 'pe', '2021-07-13 22:21:58'),
(261, 205, 'Preethi', 'pe', '2021-07-14 07:01:17'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-14 16:15:50'),
(270, 216, 'Team 4', 'sticky hands', '2021-07-14 19:02:25'),
(286, 207, 'Team 9', 'Later', '2021-07-14 19:03:01'),
(288, 207, 'Team 9', 'Oversleeping', '2021-07-14 19:03:39'),
(275, 208, 'Team 10', 'The coffee was spilling out of the cup holder on the umbrella.', '2021-07-14 19:07:32'),
(293, 211, 'Team 6', 'People expressing their negative emotions in a physical and emotional way', '2021-07-14 19:09:27'),
(295, 212, 'Team 7', 'Later', '2021-07-14 19:15:31'),
(292, 207, 'Team 9', 'over sleeping', '2021-07-14 19:19:25'),
(287, 209, 'Team 8', 'algae growth in the fish tanks being out of control ', '2021-07-14 19:23:23'),
(288, 207, 'Team 9', 'Oversleeping', '2021-07-14 19:35:35'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-14 19:46:15'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-15 02:16:28'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-15 02:18:06'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-15 02:28:29'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-17 20:37:59'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-17 20:39:57'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 00:50:10'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 01:58:44'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 07:05:03'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 07:59:04'),
(292, 207, 'Team 9', 'Later', '2021-07-19 19:30:22'),
(272, 218, 'Team 5a ', 'Later', '2021-07-19 19:30:24'),
(272, 218, 'Team 5a ', 'Later', '2021-07-19 19:30:49'),
(264, 215, 'Team 2', 'later', '2021-07-19 19:30:51'),
(270, 216, 'Team 4', 'Later', '2021-07-19 19:39:10'),
(304, 213, 'Team 1', 'later', '2021-07-19 19:39:26'),
(276, 211, 'Team 6', 'Later', '2021-07-19 19:49:48'),
(289, 211, 'Team 6', 'Later', '2021-07-19 19:50:29'),
(276, 211, 'Team 6', 'Later', '2021-07-19 19:50:46'),
(275, 208, 'Team 10', 'Later', '2021-07-19 19:51:37'),
(292, 207, 'Team 9', 'Later', '2021-07-19 19:54:43'),
(293, 211, 'Team 6', 'Later', '2021-07-19 19:54:55'),
(292, 207, 'Team 9', 'Later', '2021-07-19 19:55:01'),
(276, 211, 'Team 6', 'Later', '2021-07-19 19:57:02'),
(284, 209, 'Team 8', 'later', '2021-07-19 19:57:54'),
(285, 212, 'Team 7', 'Later', '2021-07-19 19:58:49'),
(290, 208, 'Team 10', 'Later', '2021-07-19 19:58:59'),
(278, 209, 'Team 8', 'later', '2021-07-19 19:59:49'),
(288, 207, 'Team 9', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2021-07-19 20:00:35'),
(285, 212, 'Team 7', 'Later', '2021-07-19 20:01:00'),
(295, 212, 'Team 7', 'Later', '2021-07-19 20:08:59'),
(264, 215, 'Team 2', 'later', '2021-07-19 20:17:48'),
(272, 218, 'Team 5a ', 'Later', '2021-07-19 20:18:56'),
(272, 218, 'Team 5a ', 'Later', '2021-07-19 20:20:36'),
(270, 216, 'Team 4', 'Later', '2021-07-19 20:22:00'),
(274, 217, 'Team 5', 'Later', '2021-07-19 20:24:06'),
(270, 216, 'Team 4', 'Later', '2021-07-19 20:25:23'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 20:36:55'),
(263, 217, 'Team 5', 'Later', '2021-07-19 20:49:45'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 21:55:46'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-07-19 22:47:03'),
(261, 205, 'Dummy project team 23', 'This is a dummy project', '2021-07-19 22:47:45'),
(264, 215, 'Zoominears', 'Students not being able to see or hear because they are at the back of the classroom.', '2021-07-20 19:26:53'),
(276, 211, 'Team 6', 'Later', '2021-07-21 17:44:04'),
(291, 215, 'Team 2', 'later', '2021-07-24 19:13:58'),
(291, 215, 'Team 2', 'later', '2021-07-24 22:49:43'),
(291, 215, 'Team 2', 'later', '2021-07-24 22:49:44'),
(291, 215, 'Team 2', 'later', '2021-07-24 23:40:29'),
(291, 215, 'Team 2', 'later', '2021-07-25 18:42:05'),
(291, 215, 'Team 2', 'later', '2021-07-26 01:07:02'),
(291, 215, 'Team 2', 'later', '2021-07-26 01:30:05'),
(291, 215, 'Team 2', 'later', '2021-07-26 01:36:16'),
(295, 212, 'Team 7', 'Later', '2021-07-26 19:07:39'),
(290, 208, 'Team 10', 'Later', '2021-07-26 19:07:41'),
(292, 207, 'Team 9', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2021-07-26 19:07:42'),
(275, 208, 'Team 10', 'Later', '2021-07-26 19:10:25'),
(278, 209, 'the algae vak', 'it solves the problem of dirty water', '2021-07-26 19:12:03'),
(293, 211, 'Team 6', 'Later', '2021-07-26 19:21:37'),
(297, 209, 'Team 8', 'later', '2021-07-26 19:25:38'),
(289, 211, 'Team 6', 'Later', '2021-07-27 18:51:40'),
(276, 211, 'Team 6', 'Later', '2021-07-27 19:22:07'),
(289, 211, 'anti stress cube', 'negative emotions damaging something or someone', '2021-07-27 19:24:38'),
(261, 205, 'Dummy project team\'', 'This is a dummy project\'', '2021-08-05 16:11:15'),
(261, 205, 'Dummy project team\'', 'This is a dummy project\'', '2021-08-05 16:22:13'),
(308, 219, 'Sleep ', 'The problem we\'re trying to solve is people having trouble sleeping because of the light of the room or maybe its too dark or too bright our  product helps with that. Some people might need to hear certain sounds or see certain lights because some colors make it easier to fall asleep . Since people tend to lack sleep it can get unhealthy or some people can be angry because they\'re tired or might not get enough work done because they\'re tired and our product will be able to help with all of that.', '2021-08-05 18:03:58'),
(311, 220, 'Scapers', 'Gaming in most cases is not an active activity. Gamers use joysticks or pointers of some kind to interact with the game. Develop a game where the gamer interacts with their hands movements and gestures.', '2021-08-05 18:30:11'),
(308, 219, 'Fortis Falcons', 'The problem we\'re trying to solve is people having trouble sleeping because of the light of the room or maybe its too dark or too bright our  product helps with that. Some people might need to hear certain sounds or see certain lights because some colors make it easier to fall asleep . Since people tend to lack sleep it can get unhealthy or some people can be angry because they\'re tired or might not get enough work done because they\'re tired and our product will be able to help with all of that.', '2021-08-05 18:34:42'),
(310, 222, 'Be different ', 'we are making jibbits that have a meaning to you or someone to you we also let you design your own jibbits because who better then your self to design something you like ', '2021-08-05 18:44:35'),
(313, 221, 'Portable baby sleeping bed', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-05 18:49:57'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-08-06 16:36:28'),
(257, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-09 18:18:40'),
(314, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-09 18:22:53'),
(315, 223, 'SHD.', 'Its a helmet designed for racing.', '2021-08-09 19:31:21'),
(315, 223, 'SHD.', 'Its a helmet designed for racing.SHD: Shark Helmet Designers', '2021-08-09 19:31:55'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-08-10 16:04:30'),
(261, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2021-08-10 16:17:21'),
(261, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2021-08-10 16:17:40'),
(257, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2021-08-10 16:19:26'),
(257, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-10 16:43:50'),
(314, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-10 18:12:14'),
(257, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-10 18:25:21'),
(257, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-10 18:28:21'),
(311, 220, 'Scapers', 'Gaming in most cases is not an active activity. Gamers use joysticks or pointers of some kind to interact with the game. Develop a game where the gamer interacts with their hands movements and gestures.', '2021-08-10 18:32:46'),
(315, 223, 'SHD.', 'A Helmet built for protection.Also built with unique Aerodynamics. ', '2021-08-10 19:23:25'),
(257, 223, 'SHD.', 'Its a helmet designed for racing.', '2021-08-10 19:25:14'),
(312, 219, 'Fortis Falcons', 'The problem we\'re trying to solve is people having trouble sleeping because of the light of the room or maybe its too dark or too bright our  product helps with that. Some people might need to hear certain sounds or see certain lights because some colors make it easier to fall asleep . Since people tend to lack sleep it can get unhealthy or some people can be angry because they\'re tired or might not get enough work done because they\'re tired and our product will be able to help with all of that.', '2021-08-10 19:32:04'),
(314, 221, 'Portable baby sleeping pad ', 'Combining different things all into one to find ways to help infants sleep easier.', '2021-08-10 20:10:38'),
(257, 219, 'Fortis Falcons', 'The problem we\'re trying to solve is people having trouble sleeping because of the light of the room or maybe its too dark or too bright our  product helps with that. Some people might need to hear certain sounds or see certain lights because some colors make it easier to fall asleep . Since people tend to lack sleep it can get unhealthy or some people can be angry because they\'re tired or might not get enough work done because they\'re tired and our product will be able to help with all of that.', '2021-08-13 23:14:31'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-09-19 01:27:05'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-09-19 01:27:54'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2021-09-19 01:28:20'),
(261, 205, 'Dummy project team ', 'This is a dummy project', '2021-09-19 01:32:10'),
(317, 226, 'Quick Cook Team', 'This project will create a robot cook to cook the cooker cookly', '2021-09-22 00:03:10'),
(257, 218, 'Team 5a ', 'Later', '2021-11-17 18:18:56'),
(257, 205, 'Dummy project team', 'This is a dummy project', '2021-11-25 01:45:00'),
(270, 216, 'Team 4', 'Later', '2021-12-19 02:22:13'),
(330, 227, 'Zayan-Jackie', 'Foggy glasses while wearing a mask', '2022-01-03 23:46:57'),
(319, 228, 'RohitTeam', 'Project description', '2022-01-05 04:08:30'),
(257, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-06 09:22:05'),
(341, 232, 'Champion', 'later', '2022-01-08 18:57:23'),
(346, 233, 'hij', 'gyu', '2022-01-08 18:57:37'),
(341, 232, 'Champion', 'later', '2022-01-08 19:03:08'),
(340, 232, 'Champion', 'later', '2022-01-09 05:55:31'),
(340, 232, 'Champion', 'later', '2022-01-09 06:45:57'),
(340, 232, 'Champion', 'later', '2022-01-09 06:46:58'),
(340, 232, 'Champion', 'later', '2022-01-09 06:48:59'),
(340, 232, 'Champion', 'later', '2022-01-09 06:49:24'),
(340, 232, 'Champion', 'later', '2022-01-10 08:48:15'),
(340, 232, 'Champion', 'later', '2022-01-10 08:51:41'),
(340, 232, 'Champion', 'later', '2022-01-10 08:53:06'),
(340, 232, 'Champion', 'later', '2022-01-10 08:54:27'),
(340, 232, 'Champion', 'later', '2022-01-10 09:01:12'),
(340, 232, 'Champion', 'later', '2022-01-10 09:13:01'),
(340, 232, 'Champion', 'later', '2022-01-10 20:17:01'),
(340, 232, 'Champion', 'later', '2022-01-10 20:23:56'),
(340, 232, 'Champion', 'later', '2022-01-11 06:21:38'),
(340, 232, 'Champion', 'later', '2022-01-11 06:39:37'),
(340, 232, 'Champion', 'later', '2022-01-11 06:45:13'),
(340, 232, 'Champion', 'later', '2022-01-11 06:51:39'),
(340, 232, 'Champion', 'later', '2022-01-11 07:17:14'),
(332, 231, 'Solar stoves', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-01-12 03:49:50'),
(349, 234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-01-13 21:23:49'),
(344, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-14 22:15:23'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-14 22:27:49'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-14 22:30:22'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-15 01:55:05'),
(340, 232, 'Little-Champ', 'Forget about finishing the work on time.', '2022-01-15 16:49:36'),
(334, 232, 'Little-Champ', 'Forget about finishing the work on time.', '2022-01-15 16:59:18'),
(340, 232, 'Little-Champ', 'Forget about finishing the work on time.', '2022-01-15 17:03:39'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-15 17:52:03'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-15 17:54:24'),
(346, 233, 'Shortage of natural gas ', 'ways to produce gas and to overcome the shortage of natural gas', '2022-01-15 17:58:49'),
(344, 235, 'Soul Survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-15 18:29:59'),
(344, 235, 'Soul Survivors', 'Our prototype avoids car accidents by using ultrasonic sensor to identify obstacle and move around them.', '2022-01-15 18:36:41'),
(343, 236, 'Automatic Weekly Pill Box', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule and we don\'t have to set the alarm.', '2022-01-15 18:37:55'),
(398, 237, 'Lights On', 'A majority of people have a problem with reading anywhere without light, especially at night. This prototype allows someone to read anywhere where there\'s no light.', '2022-01-15 19:11:35'),
(349, 234, 'CHAMPS HERE', 'The prototype is a stick that saves a blind person from tripping and falling. iThe stick informs a blind person about the obstacles infront of them as they walk.for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-01-15 19:25:18'),
(322, 238, 'cleaning br ', 'The problem that it solves: having a door monitor that checks the bathroom everytime someone comes out or someone that locks the door everytime someone comes in and locks it back when they go out so we can see who us dirtying up the bathroom.', '2022-01-15 22:45:06'),
(323, 239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-01-16 01:22:46'),
(322, 238, 'carlos hatchett ', 'The problem that it solves: having a door monitor that checks the bathroom everytime someone comes out or someone that locks the door everytime someone comes in and locks it back when they go out so we can see who us dirtying up the bathroom.', '2022-01-16 01:48:21'),
(323, 239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-01-16 01:50:18'),
(324, 240, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-01-16 19:32:48'),
(324, 240, '  Where are the buses ', 'The problem that solves is - when students are on the bus each student as headphones assign to each seat they sitting in and it helps them not be bored and each students can listen to whatever song on the bus in they headphones this is a way so we can have more bus driver because reason we don\'t because they find students disrespectful and when they leave trash we have a auto clean on the bus that cleans it . ', '2022-01-16 23:34:11'),
(326, 241, 'Nylese Hood', 'Lunch ladies wonâ€™t have to direct 5 people in the lunchroom', '2022-01-17 00:02:15'),
(329, 242, 'Anti- fogging wipes and spray', 'Fogging glasses ', '2022-01-17 00:40:12'),
(330, 227, 'Zayan-Jackie', 'Foggy glasses while wearing a mask', '2022-01-17 01:08:31'),
(326, 241, 'Nylese Hood', 'Lunch ladies wonâ€™t have to direct 5 people in the lunchroom', '2022-01-17 01:26:50'),
(323, 239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-01-17 07:54:21'),
(323, 239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-01-17 08:41:19'),
(332, 231, 'Solar', 'vvvv', '2022-01-17 19:26:14'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-01-17 19:28:35'),
(399, 238, 'carlos hatchett ', 'The problem that it solves: having a door monitor that checks the bathroom everytime someone comes out or someone that locks the door everytime someone comes in and locks it back when they go out so we can see who us dirtying up the bathroom.', '2022-01-19 01:45:47'),
(331, 229, 'HemanthTeam', 'The contamination in recyclables renders them useless for recycling.', '2022-01-19 03:55:58'),
(332, 231, 'Solar', 'vvvv', '2022-01-19 04:04:58'),
(270, 230, 'Liamâ€™s sea plastic product ', 'Plastic getting into our oecan', '2022-01-19 04:07:31'),
(332, 231, 'Solar', 'vvvv', '2022-01-19 05:48:45'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-01-19 06:11:51'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-01-19 06:12:27'),
(332, 231, 'Solar', 'vvvv', '2022-01-19 19:17:53'),
(332, 231, 'Solar', 'vvvv', '2022-01-19 19:18:53'),
(287, 209, 'Algae Vak', 'later', '2022-01-20 20:17:21'),
(353, 208, 'Umbrella Cup Holder ', 'Later', '2022-01-20 22:05:01'),
(291, 215, 'Zoom n Hear', 'Problem to solve in logbook', '2022-01-20 22:30:31'),
(412, 243, 'Tank Bed Cleaner', 'To clean the fish tank bed', '2022-01-20 23:13:10'),
(349, 234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-01-21 20:02:19'),
(349, 234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-01-21 21:23:53'),
(345, 235, 'soul survivors', 'A prototype which is used to avoide accident by using ultra sonic sensor', '2022-01-22 10:51:48'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-22 16:13:07'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-01-22 16:44:04'),
(349, 234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-01-22 18:28:23'),
(332, 231, 'Solar', 'vvvv', '2022-01-24 00:54:37'),
(287, 209, 'Algae Vak', 'later', '2022-01-24 19:18:14'),
(290, 208, 'Umbrella Cup Holder ', 'Later', '2022-01-24 19:33:14'),
(290, 208, 'The Umbrella Cup Holder', 'Later', '2022-01-24 19:37:33'),
(264, 215, 'Zoom n\' Hear', 'later', '2022-01-24 19:55:06'),
(290, 208, 'The Umbrella Cup Holder', 'Later', '2022-01-24 20:06:21'),
(290, 208, 'The Umbrella Cup Holder', 'Later', '2022-01-24 20:16:12'),
(264, 215, 'Zoom n\' Hear', 'later', '2022-01-24 20:17:20'),
(290, 208, 'The Umbrella Cup Holder', 'Later', '2022-01-24 20:23:48'),
(267, 216, 'Icecream Catcher Cookie', 'Later', '2022-01-24 20:29:57'),
(264, 215, 'Icecream Catcher Cookie', 'Later', '2022-01-24 20:36:22'),
(291, 215, 'Zoom n\' Hear', 'later', '2022-01-24 20:37:04'),
(267, 216, 'Icecream Catcher Cookie', 'Later', '2022-01-24 20:43:08'),
(275, 208, 'The Umbrella Cup Holder', 'Later', '2022-01-24 20:45:42'),
(272, 218, 'Icecream Catcher Cookie', 'getting your hands dirty', '2022-01-24 21:02:09'),
(272, 218, 'Icecream Catcher Cookie', 'getting your hands dirty', '2022-01-24 21:03:55'),
(274, 217, 'Anti Soginator', 'Soggy Cereal (Our prototype canâ€™t hold liquid. I thought we hit failure).', '2022-01-24 21:15:01'),
(266, 214, 'Shimmer', 'Later', '2022-01-24 21:28:38'),
(266, 214, 'Shimmer', 'Frizzy hair', '2022-01-24 21:28:57'),
(303, 213, 'Bully Band', 'Bullying in schools', '2022-01-24 21:50:05'),
(303, 213, 'Bully Band', 'Bullying in schools', '2022-01-24 21:50:33'),
(291, 215, 'Zoom n\' Hear', 'later', '2022-01-24 22:28:45'),
(267, 216, 'Icecream Catcher Cookie', 'Later', '2022-01-24 22:30:55'),
(291, 215, 'Zoom n\' Hear', 'later', '2022-01-24 22:35:24'),
(287, 209, 'Algae Vak', 'later', '2022-01-24 23:04:29'),
(287, 209, 'Algae Vak', 'later', '2022-01-24 23:30:30'),
(287, 209, 'Algae Vak', 'later', '2022-01-24 23:39:43'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 00:24:08'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 00:25:02'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 00:36:35'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 00:36:42'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:12:52'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:21:26'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:25:39'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:31:07'),
(276, 211, 'Anti Stress Cube', 'Later', '2022-01-25 23:36:25'),
(276, 211, 'Anti Stress Cube', 'Later', '2022-01-25 23:49:44'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:51:18'),
(286, 207, 'Wakey-Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-01-25 23:53:30'),
(270, 230, 'LiamTeam', 'Project des', '2022-01-26 04:09:15'),
(332, 231, 'Solar', 'vvvv', '2022-01-26 04:20:47'),
(332, 231, 'Solar', 'vvvv', '2022-01-26 04:22:55'),
(331, 229, 'HemanthTeam', 'The contamination in recyclables renders them useless for recycling.', '2022-01-26 07:30:29'),
(331, 229, 'HemanthTeam', 'Project ', '2022-01-26 23:22:28'),
(276, 211, 'Anti Stress Cube', 'Later', '2022-01-27 21:55:33'),
(276, 211, 'Anti Stress Cube', 'Later', '2022-01-27 22:08:23'),
(295, 212, 'Lack of Sleep', 'Later', '2022-01-27 22:43:15'),
(295, 212, 'Lack of Sleep', 'Later', '2022-01-27 23:10:13'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-28 20:56:40'),
(339, 232, 'Little-Champ', 'We are working on task reminding that will reminding the work. on time if we forgot to complete it.', '2022-01-29 16:24:17'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-29 18:02:11'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-29 18:08:58'),
(398, 237, 'Lights On', 'A majority of people in a lot of places in the world have a problem with reading without any lights, especially at night. This prototype allows someone to read anywhere while its dark.', '2022-01-29 18:16:32'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-01-29 19:45:41'),
(346, 233, 'Smarter way to produce gas ', 'ways to produce gas and to overcome the shortage of natural gas', '2022-01-29 22:16:15'),
(270, 230, 'P.B.Vac', 'Preventing plastics from getting into the ocean.', '2022-01-29 23:10:24'),
(339, 232, 'Little-Champ', 'We are working on task reminder that will reminding the work on time if we forgot to complete it.', '2022-01-30 16:52:17'),
(339, 232, 'Little-Champ', 'We are working on task reminder that will reminding the work on time if we forgot to complete it.', '2022-01-30 17:34:22'),
(339, 232, 'Little-Champ', 'We are working on time reminding that will reminding the work on time if we forgot to complete it.', '2022-01-30 18:35:44'),
(346, 233, 'Shortage of natural gas ', 'ways to produce gas and to overcome the shortage of natural gas', '2022-01-30 18:43:42'),
(295, 212, 'Lack of Sleep', 'Later', '2022-01-31 22:25:31'),
(295, 212, 'Lack of Sleep', 'Later', '2022-01-31 22:27:30'),
(295, 212, 'Lack of Sleep', 'Later', '2022-01-31 22:29:37'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-01 06:32:51'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-02 02:23:59'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-02 02:30:31'),
(414, 229, 'Demo Team', 'This is a dummy project\'', '2022-02-03 06:00:18'),
(414, 229, 'Demo Team', 'This is a dummy project\'', '2022-02-03 06:05:04'),
(418, 244, 'Demo Team', 'This is a dummy project\'', '2022-02-03 06:10:37'),
(414, 244, 'Demo Team', 'This is a dummy project\'', '2022-02-03 06:13:19'),
(414, 244, 'Demo Team', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2022-02-03 06:13:42'),
(414, 229, 'HemanthTeam', 'Project ', '2022-02-03 06:15:35'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-03 06:17:23'),
(319, 228, 'RohitTeam', 'Project description', '2022-02-03 07:52:05'),
(339, 232, 'Little-Champ', 'We are working on task reminding that will reminding the work on time if we forgot to complete it.', '2022-02-03 20:27:17'),
(340, 232, 'Little-Champ', 'We are working on time reminding that will reminding the work on time if we forgot to complete it.', '2022-02-04 21:41:59'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-02-05 16:53:47'),
(367, 245, ' Amoni and Jason', '.', '2022-02-05 20:37:51'),
(369, 246, ':  Food Flipper', '.The problem that it solves:The food flipper solves the problem of burning your food on the stove. The food flipper is a great way to flip pancakes, grilled cheeses, eggs, steaks and burgers. ', '2022-02-05 21:21:38'),
(370, 248, 'Autumn Pernell', 'Racial Discrimmination in Face Recognition Technology', '2022-02-05 21:36:50'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-06 22:40:48'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-06 23:06:22'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-07 03:44:47'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-07 03:57:43'),
(270, 230, 'LiamTeam', 'Project des', '2022-02-08 05:43:37'),
(270, 230, 'PBVac', 'Preventing plastic bags from getting into the ocean', '2022-02-08 05:44:26'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-09 04:34:14'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-09 04:34:47'),
(399, 239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', '2022-02-09 23:11:31'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-12 03:33:02'),
(343, 236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', '2022-02-12 16:08:39'),
(270, 216, 'Icecream Catcher Cookie', 'Prevents melted ice cream from getting on your hands', '2022-02-13 00:16:05'),
(270, 216, 'Icecream Catcher Cookie', 'Prevents melted ice cream from getting on your hands', '2022-02-13 00:38:35'),
(270, 216, 'Icecream Catcher Cookie', 'Later', '2022-02-13 20:54:16'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-14 07:24:12'),
(288, 249, 'Shaker Waker ', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-02-14 19:32:26'),
(288, 249, 'Shaker Waker ', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '2022-02-14 20:25:41'),
(399, 241, 'Nylese Hood', 'Lunch ladies wonâ€™t have to direct 5 people in the lunchroom', '2022-02-14 23:47:27'),
(399, 242, 'Scapers', 'Gaming in most cases is not an active activity. Gamers use joysticks or pointers of some kind to interact with the game. Develop a game where the gamer interacts with their hands movements and gestures.', '2022-02-14 23:53:43'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-15 07:37:23'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-17 03:16:17'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-17 04:46:09'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-17 04:46:11'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-17 04:46:12'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-17 04:46:13'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-17 04:46:13'),
(270, 230, 'PBVac', 'Helping to prevent plastic bags from getting into the ocean.', '2022-02-17 21:31:45'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-18 03:19:18'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-18 19:02:19'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-02-18 22:56:21'),
(319, 228, 'RohitTeam', 'Project description', '2022-02-19 00:49:57'),
(331, 229, 'HemanthTeam', 'Project ', '2022-02-19 05:46:06'),
(319, 228, 'Book2Braille', 'Thereâ€™s just something special about the feel of a real book in your hands; nothing quite like the joy of laying with your feet up and reading that great page-turner you found at the library. Alas! The visually impaired face a real barrier in enjoying this experience. There are 33 million visually impaired people in the world, yet less than 1 % of published books are available in Braille. Furthermore, Braille books and assistive technology are expensive and inconvenient. This leaves a majority of printed books and reading material inaccessible for the visually impaired. This is the problem I am trying to solve.', '2022-02-19 06:51:32'),
(319, 228, 'Book2Braille', 'Book2Braille Converter', '2022-02-19 22:00:47'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-02-20 02:31:22'),
(272, 218, 'Icecream Catcher Cookie', 'Getting your hands dirty in camps', '2022-02-22 07:43:01'),
(272, 218, 'Multi Glove', 'dirty hands at camping', '2022-02-22 07:52:47'),
(271, 216, 'Icecream Catcher Cookie', 'Later', '2022-02-22 08:01:42'),
(271, 216, 'Icecream Catcher Cookie', 'Later', '2022-02-22 08:34:30'),
(272, 216, 'Icecream Catcher Cookie', 'Melting ice cream and sticky hands.', '2022-02-22 08:34:56'),
(311, 220, 'Gesture Capture', 'Gaming in most cases is not an active activity. Gamers use joysticks or pointers of some kind to interact with the game. Develop a game where the gamer interacts with their hands movements and gestures.', '2022-02-22 09:21:07'),
(266, 214, 'Shimmer', 'Frizzy hair', '2022-02-22 20:09:29'),
(272, 208, 'The Umbrella Cup Holder', 'People having full hands and spilling their coffee.', '2022-02-23 06:02:59'),
(272, 209, 'Algae Vak', 'The algae keeps growing out of control in fish tanks', '2022-02-23 06:24:56'),
(272, 212, 'Lack of Sleep', 'not getting enough sleep because your mind is all riled up.', '2022-02-23 06:37:35'),
(346, 233, 'Shortage of natural gas ', 'way to produce gas and to overcome the shortage of natural gas', '2022-02-23 20:25:22'),
(344, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-02-26 15:20:51'),
(345, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-02-26 15:22:17'),
(340, 232, 'Little-Champ', 'We are working on task reminding that will reminding the work on time if we forgot to complete it.', '2022-02-26 15:41:10'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-02-28 04:24:52'),
(365, 250, 'Beeping buddy', 'TBD', '2022-02-28 13:21:33'),
(293, 211, 'Anti Stress Cube', 'Later', '2022-02-28 13:43:44'),
(365, 211, 'Anti Stress Cube', 'People expressing negative emotions by damaging someone and/or something', '2022-02-28 13:44:41'),
(265, 214, 'Shimmer', 'Frizzy hair', '2022-02-28 19:56:00'),
(295, 212, 'Lack of Sleep', 'not getting enough sleep because your mind is all riled up.', '2022-02-28 20:54:37'),
(365, 209, 'Algae Vak', 'The algae keeps growing out of control in fish tanks', '2022-02-28 21:58:29'),
(346, 233, 'single home bio gas plant ', 'produces cooking gas from waste material and overcome the shortage of natural gas', '2022-03-03 20:29:51'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-03-04 07:21:19'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-03-05 06:31:14'),
(348, 234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', '2022-03-06 02:29:12'),
(344, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-03-09 01:15:41'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-03-11 06:43:19'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-03-19 02:11:24'),
(344, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-03-21 12:24:35'),
(344, 235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', '2022-03-21 12:29:59'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-03-24 05:03:30'),
(270, 216, 'Icecream Catcher Cookie', 'Melting ice cream and sticky hands', '2022-03-28 01:13:04'),
(270, 216, 'Icecream Catcher Cookie', 'Melting ice cream and sticky hands', '2022-04-05 20:21:08'),
(252, 251, 'DemoTeam', 'Demo Team Project', '2022-04-07 11:08:11'),
(252, 251, 'DemoTeam', 'Demo Team Project', '2022-04-07 11:24:26'),
(252, 251, 'DemoTeam', 'Demo Team Project', '2022-04-07 12:02:48'),
(252, 251, 'DemoTeam', 'Demo Team Project', '2022-04-07 17:07:46'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-04-26 00:19:41'),
(332, 231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '2022-04-26 04:51:52'),
(252, 251, 'DemoTeam', 'Demo Team Project', '2022-04-28 00:14:59'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-04-29 00:37:14'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-06 04:33:33'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-07 02:15:09'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-11 01:36:44'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-12 01:47:02'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-12 03:13:07'),
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-05-12 03:16:39');
INSERT INTO `invention_log` (`user_id`, `team_id`, `invention_name`, `solved_problem`, `dateTime`) VALUES
(331, 229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '2022-09-14 18:25:00'),
(261, 205, 'SOHAIL INVENT', 'This is a dummy project created on Sep 12, 2023', '2023-09-13 02:27:16'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2023-09-19 23:34:20'),
(261, 205, 'Dummy project team - Mohid ', 'This is a dummy project - Hilal Roohan', '2023-09-19 23:37:40'),
(261, 205, 'Dummy project team - Mohid ', 'This is a dummy project - Hilal Roohan', '2023-09-19 23:40:36'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2023-09-20 00:08:02'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2023-09-20 00:18:45'),
(261, 205, 'Dummy project team', 'This is a dummy project', '2023-09-23 02:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `mentors_pic`
--

CREATE TABLE `mentors_pic` (
  `id` int(250) NOT NULL,
  `mentor_name` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mentors_pic`
--

INSERT INTO `mentors_pic` (`id`, `mentor_name`, `qualification`, `picture`) VALUES
(1, 'ECA-Mentor', 'Engg', '257155-ecaemulogo_horz.jpg'),
(2, 'ECA-Mentor', 'Engg', '264334-ecaemulogo_horz.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `practicing`
--

CREATE TABLE `practicing` (
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `idea` mediumtext NOT NULL,
  `problems_affected` mediumtext NOT NULL,
  `solution` mediumtext NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `practicing`
--

INSERT INTO `practicing` (`user_id`, `team_id`, `idea`, `problems_affected`, `solution`, `dateTime`) VALUES
(107, 205, 'asasas ', 'asas ', 'zxzxzx', '2021-06-27 19:49:07'),
(107, 205, 'asaPPP ', 'asas  ', 'zxzxzx', '2021-06-27 19:50:05'),
(107, 205, 'asaPPP  ', 'asas   ', 'zxzxzx', '2021-06-27 20:06:30'),
(0, 205, 'Be prepared to answer questions. Here are some questions that you might be asked in the Judging  ', 'Circle by the judges or fellow students. To help you prepare, you might want to write down some of the important parts  ', 'parts of your answers so that you have them when you practice giving your presentation.', '2021-06-28 07:38:13'),
(252, 205, 'qwerty ', 'qwert ', 'qwert', '2021-07-03 19:59:18'),
(0, 205, 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic  ', 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic  ', 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic ', '2021-07-08 03:28:43'),
(261, 205, 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic  ', 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic  ', 'Now is a great time to discover one of the top universities in Michigan. Our diverse and intellectually dynamic ', '2021-07-08 03:36:23'),
(259, 205, 'AAA ', 'AAA ', 'AAA', '2021-07-08 12:31:15'),
(259, 205, 'AAA  ', 'AAA  ', 'AAA', '2021-07-08 12:32:08'),
(261, 205, 'er ', 'wer ', 'er', '2021-07-08 21:17:58'),
(261, 205, 'er  ', 'wer  ', 'er', '2021-07-10 17:09:13'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 00:02:32'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 00:08:43'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 02:08:48'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 17:04:15'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.     ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.     ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 17:42:44'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.      ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.      ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 21:26:48'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.       ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.       ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 21:30:16'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.        ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.        ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-13 22:22:39'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.         ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.         ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-14 07:18:27'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.          ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.          ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-14 16:30:28'),
(261, 205, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.           ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.           ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-07-17 20:46:36'),
(261, 205, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-07-18 20:16:12'),
(261, 205, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-07-18 20:32:30'),
(261, 205, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-07-19 02:40:06'),
(261, 205, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-07-19 07:38:51'),
(261, 205, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-07-19 21:57:43'),
(264, 215, ' ', ' ', '', '2021-07-20 19:34:30'),
(276, 211, '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n ', '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n ', '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n', '2021-07-21 17:46:57'),
(276, 211, ' ', ' ', '', '2021-07-21 17:50:27'),
(289, 211, ' ', ' ', '', '2021-07-27 20:26:23'),
(261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2021-08-05 16:17:56'),
(261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2021-08-05 16:24:42'),
(310, 222, ' ', ' ', '', '2021-08-05 19:54:51'),
(340, 232, ' ', ' ', '', '2022-01-11 06:59:45'),
(349, 234, ' ', ' ', '', '2022-01-13 21:29:43'),
(340, 232, ' ', ' ', '', '2022-01-15 17:13:13'),
(323, 239, '<p>1</p>\r\n ', '<p>1</p>\r\n ', '<p>1</p>\r\n', '2022-01-16 02:10:44'),
(323, 239, '<p>1</p>\r\n ', '<p>1</p>\r\n ', '<p>1</p>\r\n', '2022-01-16 02:13:44'),
(323, 239, '<p>1</p>\r\n ', '<p>1</p>\r\n ', '<p>1</p>\r\n', '2022-01-16 02:15:18'),
(323, 239, '<p>1</p>\r\n ', '<p>1</p>\r\n ', '<p>1</p>\r\n', '2022-01-16 17:42:19'),
(323, 240, ' ', ' ', '', '2022-01-16 19:53:54'),
(324, 240, ' ', ' ', '', '2022-01-16 23:50:30'),
(324, 242, ' ', ' ', '', '2022-01-17 01:04:28'),
(330, 227, ' ', ' ', '', '2022-01-17 01:24:44'),
(340, 239, ' ', ' ', '', '2022-01-17 08:46:25'),
(340, 239, ' ', ' ', '', '2022-01-17 08:48:53'),
(340, 239, ' ', ' ', '', '2022-01-17 09:03:23'),
(340, 245, ' ', ' ', '', '2022-01-18 08:07:47'),
(290, 208, ' ', ' ', '', '2022-01-24 20:01:14'),
(264, 215, '<p><strong>Help&nbsp; students have a successful school year.</strong></p>\r\n ', '<p><strong>&nbsp;Any students sitting in the back of the classroom. </strong></p>\r\n ', '<p><strong>We thought of our problem and then different things to help.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-01-24 20:12:36'),
(264, 215, '<p><strong>Help&nbsp; students have a successful school year.</strong></p>\r\n ', '<p><strong>&nbsp;Any students sitting in the back of the classroom. </strong></p>\r\n ', '<p><strong>We thought of our problem and then different things to help.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-01-24 20:18:22'),
(267, 216, '<p><strong>ingrid</strong></p>\r\n ', '<p><strong>people and children that eat ice cream.</strong></p>\r\n ', '<p><strong>we thought we could make a shield for your hands.</strong></p>\r\n', '2022-01-24 20:54:29'),
(267, 218, ' ', ' ', '', '2022-01-24 21:10:46'),
(266, 214, ' ', ' ', '', '2022-01-24 21:44:42'),
(303, 213, ' ', ' ', '', '2022-01-24 22:00:42'),
(414, 244, '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n ', '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n ', '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n', '2022-02-03 06:12:51'),
(367, 245, '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I think and come up with the idea because i been seen so much drunk and driving to so that why think this it was any idea to solve</p>\r\n ', ' ', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; How did I come up with the solution? I think first because I can see around us people who are drunk at some time so that&#39;s how I came up with my solution.I think and come up with the idea because i been seen so much drunk and driving to so that why think this it was any idea to solve</p>\r\n', '2022-02-05 21:09:09'),
(367, 246, ' ', ' ', '', '2022-02-05 21:31:08'),
(367, 248, ' ', ' ', '', '2022-02-05 21:50:56'),
(331, 229, ' ', ' ', '', '2022-02-07 04:13:11'),
(270, 230, ' ', ' ', '', '2022-02-08 05:55:27'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-12 04:35:49'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-14 08:05:26'),
(270, 230, '<p>I came up with this idea by talking to my coach and doing a survey of my friends and relatives.</p>\r\n ', '<p>This problem affects the wildlife in the ocean.</p>\r\n ', '<p>I thought of a bunch of different solutions to the problem of plastic bags in the ocean and this solution was the best for me.</p>\r\n', '2022-02-17 21:42:13'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-18 03:41:56'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-18 05:29:57'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-18 19:18:26'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-18 19:31:04'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-18 21:31:51'),
(332, 231, '<p>By brain storming posible solutions and chosing to make high powered house appliences consume DC instead of AC.</p>\r\n ', '<p>This problem affects people without the money for electricity or natural gas.</p>\r\n ', '<p>I brian stormed posible solutions by interveiwing potential consumers.</p>\r\n', '2022-02-18 22:21:51'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up that solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-19 06:21:24'),
(319, 228, '<p>Please refer to previous sections.</p>\r\n ', '<p>Please refer to previous sections.</p>\r\n ', '<p>Please refer to previous sections.</p>\r\n', '2022-02-19 07:22:20'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-02-20 03:40:06'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-03-05 06:32:07'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-03-11 06:44:44'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-03-11 06:46:29'),
(332, 231, '<p>By brain storming posible solutions and chosing to make high powered house appliences consume DC instead of AC.</p>\r\n ', '<p>This problem affects people without the money for electricity or natural gas.</p>\r\n ', '<p>I brian stormed posible solutions by interveiwing potential consumers.</p>\r\n', '2022-03-24 05:09:31'),
(332, 231, '<p>By brain storming posible solutions and chosing to make high powered house appliences consume DC instead of AC.</p>\r\n ', '<p>This problem affects people without the money for electricity or natural gas.</p>\r\n ', '<p>I brian stormed posible solutions by interveiwing potential consumers.</p>\r\n', '2022-04-26 00:20:51');
INSERT INTO `practicing` (`user_id`, `team_id`, `idea`, `problems_affected`, `solution`, `dateTime`) VALUES
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is very low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-05-07 03:07:19'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-05-07 03:12:47'),
(331, 229, '<p>I came up with the idea of this invention by combining a bunch of my earlier ideas.&nbsp;I used the earlier ideas that cleaned the insides of plastics using a pressure washer. I also used an earlier idea of a compactor to reduce the volume of the recyclables. I also used a variation of the earlier idea of a scanner to sort the materials. I also saw a video online a while ago that raised trashcans from underground and used that idea to allow half the design to be underground.&nbsp;</p>\r\n ', '<p>My problem affects people in both developed, developing, and underdeveloped countries. Especially developing countries because developing countries are still developing their recycling infrastructure so they will be ready to incorporate untraditional methods into their infrastructure. But this problem only affects nations that use single-stream recycling instead of multi-stream recycling because the problem of contamination is low in multi-stream recycling.&nbsp;</p>\r\n ', '<p>I thought up the solution to my problem by thinking outside the box. I saw that all my previous ideas were solving part of the criteria so I thought is there a way to combine them all. So I went through a few different ideas of how that could work. I also remember about a smart recycling bin that would sense what you threw away, was and put it in its correct bin. So I thought of a similar invention but for the community level. That&#39;s how I landed on my current design.&nbsp;</p>\r\n', '2022-05-12 03:39:37'),
(261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2023-09-23 02:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `practicing_partb`
--

CREATE TABLE `practicing_partb` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `materials22` longtext DEFAULT NULL,
  `building2` longtext DEFAULT NULL,
  `better_materials2` longtext DEFAULT NULL,
  `users2` longtext DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `practicing_partb`
--

INSERT INTO `practicing_partb` (`id`, `user_id`, `team_id`, `materials22`, `building2`, `better_materials2`, `users2`, `datetime`) VALUES
(1, 261, 205, 'This is test1 ', 'This is test2 ', 'This is test3', 'This is test4', '2021-07-13 17:06:23'),
(2, 261, 205, 'This is test1  ', 'This is test2  ', 'This is test3', 'This is test4', '2021-07-13 17:06:37'),
(3, 261, 205, 'This is test1   ', 'This is test2   ', 'This is test3', 'This is test4', '2021-07-13 17:42:47'),
(4, 261, 205, 'This is test1    ', 'This is test2    ', 'This is test3', 'This is test4', '2021-07-13 21:26:52'),
(5, 261, 205, 'This is test1     ', 'This is test2     ', 'This is test3', 'This is test4', '2021-07-13 22:22:43'),
(6, 261, 205, 'This is test1      ', 'This is test2      ', 'This is test3', 'This is test4', '2021-07-14 07:18:33'),
(7, 261, 205, 'This is test1       ', 'This is test2       ', 'This is test3', 'This is test4', '2021-07-14 16:30:32'),
(8, 261, 205, 'This is test1        ', 'This is test2        ', 'This is test3', 'This is test4', '2021-07-17 20:46:43'),
(9, 261, 205, '<p>This is test1</p>\r\n ', '<p>This is test2</p>\r\n ', '<p>This is test3</p>\r\n', '<p>This is test4</p>\r\n', '2021-07-18 20:29:32'),
(10, 261, 205, '<p>This is test1</p>\r\n ', '<p>This is test2</p>\r\n ', '<p>This is test3</p>\r\n', '<p>This is test4</p>\r\n', '2021-07-18 20:32:34'),
(11, 261, 205, '<p>This is test1</p>\r\n ', '<p>This is test2</p>\r\n ', '<p>This is test3</p>\r\n', '<p>This is test4</p>\r\n', '2021-07-19 02:56:54'),
(12, 261, 205, '<p>This is test1</p>\r\n ', '<p>This is test2</p>\r\n ', '<p>This is test3</p>\r\n', '<p>This is test4</p>\r\n', '2021-07-19 07:38:56'),
(13, 261, 205, '<p>This is test1</p>\r\n ', '<p>This is test2</p>\r\n ', '<p>This is test3</p>\r\n', '<p>This is test4</p>\r\n', '2021-07-19 21:57:46'),
(14, 264, 215, ' ', ' ', '', '', '2021-07-20 19:34:34'),
(15, 276, 211, '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n ', '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n ', '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n', '<p>Draw a model (a sketch or drawing) of the invention you are thinking about building. Label all the important parts and features. Explain how the invention will work. If you need more space, use another blank page.</p>\r\n', '2021-07-21 17:47:05'),
(16, 276, 211, ' ', ' ', '', '', '2021-07-21 17:50:38'),
(17, 289, 211, ' ', ' ', '', '', '2021-07-27 20:26:26'),
(18, 261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2021-08-05 16:18:11'),
(19, 261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2021-08-05 16:24:51'),
(20, 340, 232, ' ', ' ', '', '', '2022-01-11 06:59:50'),
(21, 349, 234, ' ', ' ', '', '', '2022-01-13 21:29:57'),
(22, 340, 232, ' ', ' ', '', '', '2022-01-15 17:13:21'),
(23, 323, 239, ' ', ' ', '', '', '2022-01-16 02:15:23'),
(24, 323, 239, ' ', ' ', '', '', '2022-01-16 02:15:24'),
(25, 323, 239, ' ', ' ', '', '', '2022-01-16 17:42:33'),
(26, 324, 240, '<p><strong>I.O.T and&nbsp; my school</strong></p>\r\n ', '<p><strong>Teacher and i.o.t </strong></p>\r\n ', '', '', '2022-01-16 19:55:24'),
(27, 324, 240, '<p><strong>I.O.T and&nbsp; my school</strong></p>\r\n ', '<p><strong>Teacher and i.o.t </strong></p>\r\n ', '', '', '2022-01-16 23:50:39'),
(28, 329, 242, ' ', ' ', '', '', '2022-01-17 01:04:43'),
(29, 330, 227, ' ', ' ', '', '', '2022-01-17 01:24:51'),
(30, 323, 239, ' ', ' ', '', '', '2022-01-17 08:49:29'),
(31, 323, 239, ' ', ' ', '', '', '2022-01-17 09:03:49'),
(32, 340, 239, ' ', ' ', '', '', '2022-01-17 09:09:37'),
(33, 323, 245, ' ', ' ', '', '', '2022-01-18 08:07:59'),
(34, 290, 208, ' ', ' ', '', '', '2022-01-24 20:01:22'),
(35, 264, 215, ' ', ' ', '', '', '2022-01-24 20:15:27'),
(36, 264, 215, ' ', ' ', '', '', '2022-01-24 20:18:26'),
(37, 267, 216, '<p><strong>home and the 3d printer.</strong></p>\r\n ', ' ', '', '', '2022-01-24 20:56:19'),
(38, 272, 218, ' ', ' ', '', '', '2022-01-24 21:10:51'),
(39, 266, 214, ' ', ' ', '', '', '2022-01-24 21:44:45'),
(40, 303, 213, ' ', ' ', '', '', '2022-01-24 22:00:46'),
(41, 418, 244, '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n ', '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n ', '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n', '<p><em>Lorem ipsum</em>&nbsp;is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>\r\n', '2022-02-03 06:13:01'),
(42, 367, 245, ' ', ' ', '', '', '2022-02-05 21:09:53'),
(43, 369, 246, ' ', ' ', '', '', '2022-02-05 21:31:53'),
(44, 370, 248, ' ', ' ', '', '', '2022-02-05 21:51:03'),
(45, 331, 229, ' ', ' ', '', '', '2022-02-07 04:13:24'),
(46, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-12 04:53:10'),
(47, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-14 08:05:34'),
(48, 270, 230, '<p>Lowes and Amazon.</p>\r\n ', '<p>My dad.&nbsp; He cut the wood for me and got the nails started.</p>\r\n ', '<p>Maybe a plastic box instead of wood so it would be lighter.</p>\r\n', '', '2022-02-17 21:43:12'),
(49, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-18 03:42:02'),
(50, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-18 05:30:03'),
(51, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-18 19:18:31'),
(52, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-18 19:31:11'),
(53, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-18 21:31:55'),
(54, 332, 231, ' ', ' ', '', '<p>Due to weater conditions I was unable to test my design and had to base my hypothosis of&nbsp;my scientific knowledge rather than live testing.&nbsp;</p>\r\n', '2022-02-18 22:38:17'),
(55, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only presenting the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-19 06:21:34'),
(56, 319, 228, '<p>Please refer to previous sections.</p>\r\n ', '<p>Please refer to previous sections.</p>\r\n ', '<p>Please refer to previous sections.</p>\r\n', '<p>Please refer to previous sections.</p>\r\n', '2022-02-19 07:22:35'),
(57, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only a demo prototype of the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-02-20 03:45:10'),
(58, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only a demo prototype of the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-03-05 06:32:11'),
(59, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only a demo prototype of the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-03-11 06:44:50'),
(60, 332, 231, ' ', ' ', '', '<p>Due to weater conditions I was unable to test my design and had to base my hypothosis of&nbsp;my scientific knowledge rather than live testing.&nbsp;</p>\r\n', '2022-03-24 05:09:40'),
(61, 332, 231, '<p>Peter&#39;s true value hardware and Amazon.</p>\r\n ', '<p>My dad helped me with the invention when we sodered the copper tubbing.</p>\r\n ', '<p>I could have used light weight metal insdead of wood for the frame.</p>\r\n', '<p>Due to weater conditions I was unable to test my design and had to base my hypothosis of&nbsp;my scientific knowledge rather than live testing.&nbsp;</p>\r\n', '2022-03-24 05:17:38'),
(62, 332, 231, '<p>Peter&#39;s true value hardware and Amazon.</p>\r\n ', '<p>My dad helped me with the invention when we sodered the copper tubbing.</p>\r\n ', '<p>I could have used light weight metal insdead of wood for the frame.</p>\r\n', '<p>Due to weater conditions I was unable to test my design and had to base my hypothosis of&nbsp;my scientific knowledge rather than live testing.&nbsp;</p>\r\n', '2022-04-26 00:20:54'),
(63, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only a demo prototype of the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-05-07 03:13:10'),
(64, 331, 229, '<p>The materials for the prototype I built were all from household objects since this year I&#39;m only a demo prototype of the water part of the design.&nbsp;</p>\r\n ', '<p>My dad didn&#39;t help me build the prototype because it is mainly for demonstration purposes but he did help me find errors in my idea and what to do to correct them. My mentor Harinee Addepalli helped me a lot with refining my solution. Dr. Vivek another one of my mentors helped me a lot with identifying my problem.&nbsp;</p>\r\n ', '<p>If I was building the actual invention I would have had to use household items. So I would use real sheet metal and have high-quality motors to spin the inner container. I would also use industry-grade materials to build the trashcan/compactors.</p>\r\n', '<p>My parents have looked at my demo prototype and they said that I need to make sure the motors are covered up so no water gets onto it and damages it. But other than that they said that it looked good. I showed it to my mentors and they both said that I needed to make sure the piping for the water worked since it is a bit complicated when I would build a working prototype.</p>\r\n', '2022-05-12 03:39:41'),
(65, 261, 205, '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n ', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '<p>What problem are you trying to solve? The more specific you are in describing the problem, the better your solution will be. How did you come up with the problem&#39;?</p>\r\n', '2023-09-23 02:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_first_name` varchar(100) DEFAULT NULL,
  `student_last_name` varchar(100) DEFAULT NULL,
  `student_grade` varchar(100) DEFAULT NULL,
  `student_school_name` varchar(100) DEFAULT NULL,
  `student_school_district` varchar(100) DEFAULT NULL,
  `student_school_county` varchar(100) DEFAULT NULL,
  `t_shirt_size` varchar(100) DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  `photo_consent` int(11) DEFAULT NULL,
  `photo_consent_form` varchar(1000) DEFAULT NULL,
  `video_exp_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stut_tot`
--

CREATE TABLE `stut_tot` (
  `jaid` int(10) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total` decimal(22,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t`
--

CREATE TABLE `t` (
  `project_team_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `GROUP_CONCAT(tu.first_name)` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `GROUP_CONCAT(email)` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t`
--

INSERT INTO `t` (`project_team_name`, `GROUP_CONCAT(tu.first_name)`, `GROUP_CONCAT(email)`) VALUES
('Recycled Truss Reinforced Road', 'Tareq,Bryan,Yaseen', 'tareq.khan@emich.edu,bwhitlo1@emich.edu,director@nedscholars.org'),
('Phsyics simulator', 'Laura,Emily,Leon', 'lschubri@emich.edu,ealderm2@emich.edu,lbryson@emich.edu'),
('Low-Cost, 3D Printed Hand', 'Abhijeet,Herman,Vernnaliz', 'hoshing.abhijeet@gmail.com,htang2@emich.edu,vcarrasq@emich.edu'),
('Foldable Mobility Walker (FEET)', 'Abhijeet,Laura,Vernnaliz', 'hoshing.abhijeet@gmail.com,lschubri@emich.edu,vcarrasq@emich.edu'),
('Recycled Plastic Textile (RePlasto)', 'Nick,Swetha,Yaseen', 'nbutkevi@emich.edu,ssadinen@emich.edu,director@nedscholars.org'),
('App Connected Voltage Divider', 'Tareq,Brendon,Kaitlyn', 'tareq.khan@emich.edu,bkociba@emich.edu,kkotcher@emich.edu'),
('Detachable Sole Running Shoe', 'Steve,Vernnaliz,Thomas', 'rohdesteve@gmail.com,vcarrasq@emich.edu,scoutseuby@yahoo.com'),
('The Weigh Can', 'Herman,Tareq,Emily', 'htang2@emich.edu,tareq.khan@emich.edu,ealderm2@emich.edu'),
('Fast Braille Design', 'Steve,Aaron,Jessica', 'rohdesteve@gmail.com,aczapla@emich.edu,jdiestel@emich.edu'),
('Saftey Shade', 'Swetha,Amanda,Boarman', 'ssadinen@emich.edu,astasik@emich.edu,lboarman@emich.edu'),
('Record Player: Reused Electronics', 'Tareq,Bryan,Leah ', 'tareq.khan@emich.edu,bwhitlo1@emich.edu,lhuyser@emich.edu'),
('Biofuel Jet Engine', 'Batoul,Herman,Chapman', 'babdalla@emich.edu,htang2@emich.edu,mchapm13@emich.edu'),
('Bike Prototype', 'Herman,Thomas,Boarman', 'htang2@emich.edu,scoutseuby@yahoo.com,lboarman@emich.edu'),
('Plant H2O Sitter', 'Aaron,Alexander,Amanda', 'aczapla@emich.edu,aneal10@emich.edu,astasik@emich.edu'),
('Solar Charger', 'Rachel ,Rachel ,Yaseen', 'rrhodes7@emich.edu,rrhodes7@emich.edu,director@nedscholars.org'),
('Life Guard', 'Jaya,Lexie,Rebecca', 'jayasharmajdh@gmail.com,amcclos1@emich.edu,rlee38@emich.edu'),
('Trash Boat', 'Lexie,Rachel ,Yaseen', 'amcclos1@emich.edu,rrhodes7@emich.edu,director@nedscholars.org'),
('Methane Detector', 'Naheed,Lexie,Rebecca', 'naheedakhter1@yahoo.com,amcclos1@emich.edu,rlee38@emich.edu'),
('Grip Rings', 'Aaron,Alexander,Boarman', 'aczapla@emich.edu,aneal10@emich.edu,lboarman@emich.edu'),
('Multipurpose Side Runner', 'Steve,Laura,Vernnaliz', 'rohdesteve@gmail.com,lschubri@emich.edu,vcarrasq@emich.edu'),
('Collapse-o-Can', 'Nick,Alexander,Kaitlyn', 'nbutkevi@emich.edu,aneal10@emich.edu,kkotcher@emich.edu'),
('Sunny Side Up', 'Bryan,Chapman,Emily', 'bwhitlo1@emich.edu,mchapm13@emich.edu,ealderm2@emich.edu'),
('Team Charger', 'Herman,Chapman,Kaitlyn', 'htang2@emich.edu,mchapm13@emich.edu,kkotcher@emich.edu'),
('Prepa', 'Amanda,Bryan,Leah ', 'astasik@emich.edu,bwhitlo1@emich.edu,lhuyser@emich.edu'),
('Leaf Me Alone', 'Abhijeet,Laura,Jessica', 'hoshing.abhijeet@gmail.com,lschubri@emich.edu,jdiestel@emich.edu'),
('EcoRinse', 'Nick,Batoul,Peyton', 'nbutkevi@emich.edu,babdalla@emich.edu,pbergma2@emich.edu'),
('Cardboard ATM', 'Peyton,Alexander,Emily', 'pbergma2@emich.edu,aneal10@emich.edu,ealderm2@emich.edu'),
('Magnet Power', 'Abhijeet,Batoul,Thomas', 'hoshing.abhijeet@gmail.com,babdalla@emich.edu,scoutseuby@yahoo.com'),
('RTCA', 'Thomas,Brendon,Leah ', 'scoutseuby@yahoo.com,bkociba@emich.edu,lhuyser@emich.edu'),
('RID', 'Bryan,Chapman,Leah ', 'bwhitlo1@emich.edu,mchapm13@emich.edu,lhuyser@emich.edu'),
('AstroTrack', 'Steve,Laura,Peyton', 'rohdesteve@gmail.com,lschubri@emich.edu,pbergma2@emich.edu'),
('UrbaGrow', 'Nick,Swetha,Jessica', 'nbutkevi@emich.edu,ssadinen@emich.edu,jdiestel@emich.edu'),
('The Dumper Helper', 'Batoul,Brendon,Kaitlyn', 'babdalla@emich.edu,bkociba@emich.edu,kkotcher@emich.edu'),
('Doggy Door', 'Peyton,Amanda,Leon', 'pbergma2@emich.edu,astasik@emich.edu,lbryson@emich.edu'),
('Terratracer', 'Aaron,Brendon,Leah ', 'aczapla@emich.edu,bkociba@emich.edu,lhuyser@emich.edu'),
('Solar Turtle', 'Abhijeet,Brendon,Emily', 'hoshing.abhijeet@gmail.com,bkociba@emich.edu,ealderm2@emich.edu'),
('Perceive the Puzzle', 'Aaron,Jessica,Leon', 'aczapla@emich.edu,jdiestel@emich.edu,lbryson@emich.edu'),
('Ink Remover', 'Batoul,Alexander,Leon', 'babdalla@emich.edu,aneal10@emich.edu,lbryson@emich.edu'),
('ProClothing', 'Peyton,Boarman,Jessica', 'pbergma2@emich.edu,lboarman@emich.edu,jdiestel@emich.edu'),
('Universal Guitar Case', 'Tareq,Kaitlyn,Leon', 'tareq.khan@emich.edu,kkotcher@emich.edu,lbryson@emich.edu'),
('Water Fountain Filter', 'Swetha,Boarman,Chapman', 'ssadinen@emich.edu,lboarman@emich.edu,mchapm13@emich.edu'),
('Water Purifier', 'Nick,Swetha,Amanda', 'nbutkevi@emich.edu,ssadinen@emich.edu,astasik@emich.edu'),
('Quick Clasp Shoe', 'Steve,Vernnaliz,Thomas', 'rohdesteve@gmail.com,vcarrasq@emich.edu,scoutseuby@yahoo.com'),
('Soft Speak', 'Lisa,Jon,Kunal', 'spencerlisaj@gmail.com,jonathanhspencer@outlook.com,kbanerji@emich.edu'),
('Motor Shoe', 'Jaya,Naheed,Rachel ', 'jayasharmajdh@gmail.com,naheedakhter1@yahoo.com,rrhodes7@emich.edu'),
('Rennervate: Instant Fatigue Reducer', 'Jaya,Naheed,Rebecca', 'jayasharmajdh@gmail.com,naheedakhter1@yahoo.com,rlee38@emich.edu'),
('Iot uses for daily needs ', 'Jaya,Lexie,Rebecca', 'jayasharmajdh@gmail.com,amcclos1@emich.edu,rlee38@emich.edu'),
('WIZEN', 'Jaya,Naheed,Rachel ', 'jayasharmajdh@gmail.com,naheedakhter1@yahoo.com,rrhodes7@emich.edu'),
('Portable Notes', 'Lisa,Jon,Kunal', 'spencerlisaj@gmail.com,jonathanhspencer@outlook.com,kbanerji@emich.edu'),
('Rain Water Filter', 'Naheed,Lexie,Rebecca', 'naheedakhter1@yahoo.com,amcclos1@emich.edu,rlee38@emich.edu'),
('Kids Habit Developer for switching off light', 'Lisa,Jon,Kunal', 'spencerlisaj@gmail.com,jonathanhspencer@outlook.com,kbanerji@emich.edu'),
('Child Habit Developer', 'Lisa,Jon,Kunal', 'spencerlisaj@gmail.com,jonathanhspencer@outlook.com,kbanerji@emich.edu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_judge_assessment`
--

CREATE TABLE `tbl_judge_assessment` (
  `id` int(10) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `identifying_understanding` decimal(11,2) DEFAULT NULL,
  `ideating` decimal(11,2) DEFAULT NULL,
  `designing_building` decimal(11,2) DEFAULT NULL,
  `testing_refinging` decimal(11,2) DEFAULT NULL,
  `value_propoition` decimal(11,2) DEFAULT NULL,
  `market_potential` decimal(11,2) DEFAULT NULL,
  `social_value` decimal(11,2) DEFAULT NULL,
  `originality` decimal(11,2) DEFAULT NULL,
  `logbook` decimal(11,2) DEFAULT NULL,
  `display_board` decimal(11,2) DEFAULT NULL,
  `prototype` decimal(11,2) DEFAULT NULL,
  `online_pitch` decimal(11,2) DEFAULT NULL,
  `question_asked` longtext DEFAULT NULL,
  `live_qa` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_judge_assessment`
--

INSERT INTO `tbl_judge_assessment` (`id`, `team_id`, `user_id`, `identifying_understanding`, `ideating`, `designing_building`, `testing_refinging`, `value_propoition`, `market_potential`, `social_value`, `originality`, `logbook`, `display_board`, `prototype`, `online_pitch`, `question_asked`, `live_qa`) VALUES
(298, 244, 421, '4.50', '5.50', '4.00', '6.50', '4.50', '3.50', '2.00', '5.00', '2.50', NULL, '5.00', '4.50', '', NULL),
(299, 211, 439, '13.00', '0.00', '4.00', '0.00', '4.00', '5.00', '4.00', '5.00', '3.00', NULL, '3.00', '0.00', 'How is your invention sustainable?\r\nWhy did you give up on the waterproofing?\r\nWhat is your power source for the LED lights?\r\nDo you need the blood pressure sensor (very expensive) to continue?\r\nI\'m looking forward to seeing the device and watching your online pitch.', NULL),
(300, 216, 439, '13.00', '7.00', NULL, '7.00', '3.50', '4.00', '4.00', '7.00', '9.00', NULL, '2.50', '13.00', 'How is yours different from the Drip Drop you found online?\r\nDoes your cookie shield work only with pointy cones?\r\n', NULL),
(301, 220, 439, '13.00', '7.00', '3.50', '4.00', '3.50', '3.50', '4.50', '7.00', '4.00', NULL, '3.50', '13.00', 'What solutions to the problem did you try at first before you came up with this idea?\r\nWhat did you find on Google/Amazon to compare?\r\nTell us more about the rules of the game and how it works.', NULL),
(302, 228, 439, '14.00', '9.50', '9.00', '9.00', '4.00', '4.50', '4.50', '9.50', '9.50', NULL, '4.50', '14.00', 'Is LDPE easy to obtain? \r\nWhat fluid do you use?\r\nWhat size of the font is needed for this to work according to your image?\r\nIs the image data stored and then processed into Braille? \r\nHow many Braille letters does the prototype use? ', NULL),
(303, 231, 439, '13.50', '8.50', '9.50', '8.50', '4.50', '4.00', '4.50', '8.50', '9.00', NULL, '4.50', '14.00', 'How long does it take to bring your stove up to cooking heat?\r\nWhat solution do you have for regulating the heat? ', NULL),
(304, 217, 437, '10.50', '5.00', '5.00', '0.00', '2.00', '1.50', '0.00', '7.00', '0.00', NULL, '0.00', '5.00', 'How does this bowl differ from any bowl I can buy at the store? ', NULL),
(305, 220, 437, '15.00', '10.00', '7.00', '4.50', '3.00', '3.00', '4.00', '7.00', '5.00', NULL, '4.00', '6.50', 'I have seen something like this before. How does this differ and is more useful for disabled people? ', NULL),
(306, 229, 437, '15.00', '10.00', '10.00', '10.00', '5.00', '5.00', '5.00', '10.00', '10.00', NULL, '5.00', '15.00', 'How soon can you make this a reality? ', NULL),
(307, 243, 437, '3.50', '6.50', '0.00', '0.00', '1.50', '0.00', '1.00', '8.00', '1.50', NULL, '3.50', '3.00', 'Who is the audience for this invention? \r\nIs this more work than cleaning a fish tank? ', NULL),
(308, 221, 429, '7.50', '7.00', '3.00', '1.00', '4.50', '1.50', '1.50', '7.50', '5.00', NULL, '2.00', '4.50', 'What did you use to make the sounds/vibrations?\r\nHave you tested the product for safety?\r\nWhat are the age/weight restrictions of the product?\r\nWhat environmental impact does your product make?\r\nHow important is your product to a wide scale market?\r\n\r\nTips:\r\nCreate a visual blueprint of the parts of your product.\r\nExplain your design process.\r\nPractice before you do your final recording.\r\n', NULL),
(309, 230, 429, '15.00', '10.00', '10.00', '9.50', '4.00', '4.00', '5.00', '9.00', '9.00', NULL, '5.00', '14.00', 'This presentation and idea are fantastic. It is a great base start to a product that could be very helpful. The only things I would consider is: a. How could you better your design? b. Where do the bags go for disposal? c. What is the market like for this product?', NULL),
(310, 213, 429, '9.00', '3.00', '2.00', '2.00', '1.00', '1.00', '1.00', '5.00', '4.00', NULL, '2.50', '7.50', 'This is a great start. Consider diving more into the design of your product and how it was constructed. Adding a detailed drawing of a blueprint could be helpful. I would also do some more research into how your product is different from other competitors and how much it is needed by the target audience. ', NULL),
(311, 216, 427, '13.50', '8.00', '9.00', '8.50', '3.50', '2.50', '3.00', '9.00', '3.00', NULL, '4.00', '10.50', 'Great job! What a completely unique and original idea that has a simple and cute solution. I especially enjoyed your cookie shield model and several visual aids to help your pitch flow and stay organized. However, I wish I was able to meet Ingrid and Grant who were also involved in this invention but not introduced or present in your pitch.\r\nI also noticed that your Logbook was not fully complete and utilized during your pitch. The logbook helps you organize your ideas, research, design, and communicate the purpose of your invention. I also value your contribution to making an invention that is reusable/edible because of the environmental impact plastic materials have on our planet. ', NULL),
(312, 209, 427, '4.50', '3.00', '4.00', '3.00', '1.50', '2.00', '1.50', '4.50', '1.50', NULL, '5.00', '9.00', 'The Algae Vac that is used for pools and fish tanks is a good invention idea! I especially valued the prototype model of the vac you presented in your pitch. You included a very detailed description of how the vac would work and kill the algae it removes. \r\nYour logbook was not properly utilized for the invention process of the Algae vac. Most of the logbook was left empty, lacked detail in areas, and made it difficult to understand your team\'s research and invention process. I also wish I would have been able to meet Drew and Noah in your video pitch, who are involved in your team as well.\r\n Your video pitch, while very entertaining, was not very long and did not include much information on the invention other than its components and how it works. I wish I would have been able to hear about how you came up with this idea. Do you have a fish tank or pool at home that has a problem with Algae? I also wonder if you did research to see if there was a similar product already on the market. What makes your product unique or stand out?\r\n\r\n', NULL),
(313, 208, 428, '14.00', '9.00', '9.00', '8.00', '4.00', '4.00', '3.00', '9.00', '7.00', NULL, '4.00', '13.00', 'This is a very useful innovation and I could definitely see this being used by many consumers. I appreciate how your umbrella cup holder is more involved than the two other ones you found in your research process. Your design has a pouch attached and allows for less spillage with the liquid in the cup as well. After watching your video pitch and reading through your logbook, I have a couple questions: Does any size cup fit in the cup holder? Does the clip stay on with only tape or is something else holding it in place? Considering you have more time in your video and if you were to move on to the next round, I would suggest talking about who you interviewed and what they said when you asked them about what they think you should have added to your design to make it the best umbrella cup holder possible. Lastly, in your logbook, be clear about what is included in the price of $35 (cup holder, clip, pouch) and what the consumer would have to purchase separately (umbrella, cup, etc.). Also, I would darken the image of the model in question five of the logbook; it was hard to see. Overall, this is a great project design and I wish you both the best of luck!', NULL),
(314, 212, 428, '9.00', '7.00', '3.00', '0.00', '2.00', '2.00', '3.00', '8.00', '3.00', NULL, '0.00', '0.00', 'I think this a great idea, but I just need more information. I was unable to view the video pitch, and I do not know if this was a technical error or if the video was simply not submitted yet. I am unclear on what the product actually is, but I think adding a video pitch and including more detail in the logbook overall will help to get a better understanding of what the innovation is all about. Was your group able to find any research on if a light box does in fact help people calm down enough to fall asleep? Also, where did you check to see if this had not been done before? Include this information in the logbook and video pitch if there is enough time. In the logbook on question number five for â€œdraw a model,â€ use more descriptive words and possibly include a drawing or picture instead of just saying â€œwe did it.â€ I do like your idea of adding a speaker to it so you can close your eyes and not have to look at it for it to work. The only concern I have with this is that it would be too similar to a white noise machine and if it would be feasible or not. Keep working on the details of this project and pushing through the design process. I am interested to see how it turns out in the end.', NULL),
(315, 216, 428, '14.00', '9.00', '8.00', '7.00', '3.00', '4.00', '4.00', '10.00', '7.00', NULL, '4.00', '13.00', 'This is a very clever idea! I have never heard of something like this before and it would be useful to prevent getting sticky fingers or dripping on your shirt while eating an ice cream cone. Overall, you both did an excellent job on your video pitch. You got my attention and made me want to keep listening to what you had to say. Some suggestions would be to zoom in on your notecards or make them bigger because they were a little difficult to read. Another suggestion would be to make the image of your design a little darker in the video and talk about it more, so we are able to see it for a longer period of time. I really enjoyed hearing your process of how you tested the product and the feedback you received to come to the final conclusion of making the â€œice cream catcher cookie.â€ I saw in the logbook that one of the potential issues with the design is that the melting ice cream might make the cone/cookie soft. Were you able to come up with any edits or solutions for this? Having a reusable plastic option would be beneficial for this issue and would also give people the option if they do not want to have a cookie with their ice cream. Some final notes are to add some more detail in your logbook about the materials for the invention, the testing and evaluating, and any problems and how to make it better. Thank you for sharing your ideas with us and good luck with the rest of your invention process.', NULL),
(316, 221, 428, '7.00', '6.00', '4.00', '4.00', '4.00', '3.00', '4.50', '8.00', '5.00', NULL, '5.00', '10.00', 'There is definitely a need for this product. Having the sound, lighting, and vibration that are often needed to help a baby fall asleep and stay asleep all in one product would be beneficial for many parents. I like how you described it as being portable, affordable, easy to operate, and washable, but I want to know a little more about the actual product itself and how it functions. Were you able to find any research on products similar to it and how yours would be different than them? Were you able to interview a potential market that would use this? With the amount of time left you had for your video, you could talk more about the product information, how you improved upon each rough draft you created, and any other additional details that would help someone to understand your innovation better. Your logbook provided some more information about the â€œbaby pillow pad.â€ Similar to your video pitch, keep working on adding a little bit more about the product in your logbook to make it more clear. Keep up the good work on this project and best of luck to you both!', NULL),
(317, 219, 427, '11.50', '8.00', '6.50', '4.50', '3.50', '3.00', '1.50', '7.00', '3.00', NULL, '5.00', '11.00', 'Wonderful Job! This is a very original and unique invention that your team created for people who struggle to sleep. I found the description of the prototype, in your video pitch, insightful and detailed regarding the invention\'s parts. \r\nThe logbook, which contains all the necessary details of your invention and your teams\' processes, was not fully complete. I wish I was able to read about why you chose this invention, why your invention is better than the products already on the market (white noise machine), and the steps that occurred during the invention and design process. Although, your video pitch was very brief and lacked key details of your overall invention, I appreciated your team dynamic and how much fun you seem to have had producing the video!', NULL),
(318, 228, 427, '15.00', '10.00', '10.00', '10.00', '5.00', '5.00', '5.00', '10.00', '10.00', NULL, '5.00', '15.00', 'You did an exemplary job and should be proud of the work you have done, Rohit! You had a well thought out, well researched, concise presentation that highlighted a product that could make a real difference in the world. \r\nThe introduction, noted in your invention logbook, stood out to me because of how altruistic your ideas are to have thought about visually impaired individuals during a time such as the COVID pandemic. Your logbook also includes extensive detail of your invention/design process, social impacts, testing procedure, and research you\'ve conducted while creating the Book2Braille product. \r\nOverall, I believe that you have invented a product that will truly make a difference for a large population with the little resources and products that support them. I am confident that you will proceed to the next round of the competition, and I wish you good luck in your bright future!', NULL),
(319, 212, 433, '10.00', '9.50', '2.00', '1.00', '0.00', '2.00', '1.00', '5.00', '3.00', NULL, '0.00', '0.00', 'I liked your ideas about how to relax the mind, so people can sleep better. I appreciate that you listed your other possible solutions to this problem, and I was really happy that you explained how you guys chose which solution to pursue. I need you to be a bit more specific though. Who is your calming light box for? How will it work? I\'m not sure what a calming light is. Is it some sort of blue light canceller or does it just dim the lights? I didn\'t see a drawing of your prototype, and there\'s no video. Over all, you all have a good start, but your logbook isn\'t finished. I can\'t give you points for sections that are left blank. This is true on big tests too; always try to write down some sort of answer. ', NULL),
(320, 221, 433, '14.00', '9.00', '5.00', '5.00', '2.50', '2.50', '4.00', '10.00', '3.00', NULL, '5.00', '15.00', 'I\'m really impressed with your work! This idea reminded me a little bit of electronic baby swings, but baby swings are not meant to be used by a sleeping infant. They just sooth the baby. Getting babies to go to and stay asleep has always been a challenge. I liked how you mentioned in your video pitch how your Nanaâ€™s been trying different ways to help your cousin sleep. This implied that you had discussions with her about how to help babies go to sleep. Thatâ€™s a form of research. I didnâ€™t see documented research in your logbook though. A big part of this project is documenting the process of inventing. Being able to reference research builds your credibility (ethos) as a speaker and author. You guys did really well!', NULL),
(321, 212, 436, '4.00', '2.00', '2.00', '2.00', '0.00', '0.00', '0.00', '2.00', '2.00', NULL, '1.00', '0.00', 'The idea of helping get better sleep was fantastic. There is a lot of information out there already for what type and color of light would be best to help sleep. This type of information could really help in developing your invention more. I like that after thinking more about just a light the thought was to add a speaker. This sounds a lot like something I saw on Amazon that had a sleep light and Bluetooth speaker. I would love to hear about how your invention is different. I was excited to see what you had developed, because there were no sketches in your log book. I also did not see a video pitch for your invention. I really think that your idea was great and with further development could positively impact people\'s lives. ', NULL),
(322, 213, 436, '10.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '8.00', '4.00', '1.00', '5.00', '13.00', 'The only question I have is how long will bully bands be able to glow? Overall your idea is well thought out. 							        ', NULL),
(323, 211, 429, '8.00', '7.00', '3.00', '1.00', '4.00', '1.50', '2.50', '2.00', '5.00', NULL, '0.00', '0.00', 'Your team has a good start to what could be a very useful product. I would like to see a working prototype of your cube as well as a video pitch of your product. It would also be interesting to see a blueprint drawing of how your product is made. \r\n\r\nCould you make this product with sustainable resources?\r\nHow could you lower the cost of your product?\r\nHow would you go about testing your product?', NULL),
(324, 219, 426, '5.00', '6.00', '5.00', '2.00', '4.00', '2.00', '1.00', '8.00', '3.00', NULL, '5.00', '7.00', 'This is a great invention, but I wish I knew more about it. For example, how did you come up with this invention? What products are already out there that can relate to this product? Also you only used about a sixth of your allotted pitch time, I think it would be great to include how your invention came to life and how it differs from products already on the market. ', NULL),
(325, 228, 426, '15.00', '10.00', '10.00', '10.00', '5.00', '5.00', '5.00', '10.00', '10.00', NULL, '5.00', '15.00', 'This is a great invention and I can definitely see that there is a need for this invention! You did a great job doing your research for this product! I noticed that you had a few people fill out a survey, I think it could be useful to have the questions and answers to the surveys included in your logbook. Keep up the great work!', NULL),
(326, 229, 426, '15.00', '10.00', '8.00', '10.00', '5.00', '5.00', '4.00', '10.00', '10.00', NULL, '5.00', '15.00', 'This is a really cool invention and would be great for everyone to have! I noticed you stated you talked to some professionals about products like this already, it may be useful to add what they stated to your logbook. I enjoyed the visuals that you had and how you included how your invention came to life! Keep up the good work!', NULL),
(327, 213, 433, '14.00', '5.00', '7.00', '4.00', '5.00', '3.00', '3.00', '10.00', '3.00', NULL, '5.00', '15.00', 'That\'s an interesting take on preventing bullying. I liked that you included problems and solutions about how bully bands would work in your logbook. How did you decide that bully bands are the best way to stop bullying? Did you have any other ideas at the beginning? It\'s always good to write down how you came up with an idea. ', NULL),
(328, 218, 433, '13.50', '7.00', '10.00', '10.00', '5.00', '3.50', '5.00', '10.00', '9.50', NULL, '5.00', '14.00', 'Great job! I could tell that you were a bit nervous during your video presentation. That\'s normal; most people are scared of giving speeches. Practicing your speech before hand with a friend helps. If you can read aloud what you want to say three times then you\'ll feel a little bit less nervous, and you won\'t say as many filler words like \"umm.\" I could tell that you had planned out what you wanted to talk about, but you didn\'t seem very sure about how to finish your speech. One way is to summarize why people would want to buy your Multi Gloves. This the moment for you to remind people why your invention is great. You worked hard and have a lot to be proud of; be confident! Youâ€™ve got this!', NULL),
(329, 215, 432, '7.00', '5.00', '2.00', '5.00', '5.00', '3.00', '2.50', '8.00', '2.50', NULL, '2.00', '6.00', 'This is a really cool idea for anyone sitting in the back of a classroom! I wonder how these would work if the student already wore glasses, would they be able to fit these over them? I would be interested to see the journey of your invention, and how you came up with the final product design.', NULL),
(330, 219, 432, '11.00', '8.00', '3.50', '2.00', '4.00', '4.00', '2.00', '2.00', '2.00', NULL, '4.50', '12.00', 'This is an interesting idea, but I have seen many products that are very similar. What makes your invention different from the other products? It was mentioned that this invention could help you sleep if the room was too bright, could you give more detail on this? I would have also liked to see the completed logbook to see the journey of your final product. ', NULL),
(331, 214, 436, '12.00', '10.00', '7.00', '9.00', '3.50', '4.00', '2.00', '5.00', '4.00', NULL, '4.50', '13.00', 'This looks like a great solution to frizzy hair. I wonder if a before and after picture would help your presentation and proving that your product works. I appreciate that you have put in the research into similar products, but explained how your product is different. I also appreciated that you explained the process that you went through and trials with different amounts of ingredients. ', NULL),
(332, 243, 432, '13.00', '8.00', '7.50', '7.50', '4.00', '2.00', '2.50', '7.50', '8.00', NULL, '4.00', '13.50', 'Great idea! When watching your video pitch, I noticed that you used a cleaning solution after you siphoned out the sand. I did not see this cleaning product in your logbook, did you create the cleaning solution or is this one that you can purchase at a store? If you are to move to the next round of competition and have the opportunity to re-record your pitch, I would be interested in seeing what the water would look like after sitting in the cleaning solution for an hour. ', NULL),
(333, 231, 436, '13.00', '8.00', '9.00', '8.00', '5.00', '5.00', '5.00', '8.00', '8.50', NULL, '4.50', '14.00', 'I really think that you have a great idea here. You clearly stated how your product can help energy consumption and those that are not able to pay for energy. You looked into other items on the market and then explained how yours was different. In your log book and video you spoke a lot about AC verses DC power, but I don\'t see how that applies to your product. The way that you choose to use copper tubing filled with liquid to help distribute the heat makes a lot of sense. I wonder what the pressure inside the copper will get to while cooking and what pressure copper tubing can accommodate. Is there a way to measure that or add an expansion chamber to accommodate the expansion? Excellent video and presentation. ', NULL),
(334, 216, 438, '11.00', '9.00', '8.00', '9.50', '4.00', '4.00', '3.50', '8.00', '5.00', NULL, '4.00', '13.00', 'Nice job. I really like this idea. This is a product that I would use and I love that it is edible. I wonder if it would be interesting to see how you could add variation to your invention. For example different types of cookies could be used. \r\nIn your log book it is easy to tell that you researched similar products. On page 12 of the logbook you wrote that your product would be different than others becauseâ€¦.. but did not answer how it would be different. I wonder if stating how your product would be different would be very beneficial.  I wonder if it would be a great idea in your logbook to complete the pages that describe your journey to creating your invention because it is such a cool invention and I am curious how you invented it!  \r\nIf you move to the next round and have a chance to rerecord your presentation, it would add value to create a display with all the pieces of paper you used throughout your presentation. It was a great idea to give credit to those who helped you at the end of the video. \r\n', NULL),
(335, 218, 438, '13.00', '9.00', '9.00', '8.50', '4.00', '4.00', '4.00', '9.00', '7.00', NULL, '5.00', '9.00', 'This is a really neat idea. I too, enjoy camping a lot. The little pouch on the glove is a great idea and you could store so many different things inside it. I think the glow in the dark paint is a very creative idea and adds another component to the multi glove. \r\nWhile the logbook is for your team, it is also seen and evaluated by judges. Completing the log book would add great value to your invention. I do appreciate the use of complete sentences throughout your log book and value the thoughtfulness you put into your invention. \r\nYour display board for your presentation was well done.  I enjoyed hearing about your process of finding the best gloves to use. \r\n', NULL),
(336, 220, 438, '12.50', '7.50', '8.00', '8.00', '4.00', '4.50', '4.00', '9.50', '7.50', NULL, '4.00', '13.00', 'This is a really cool idea and your facts during the presentation were very interesting. I love that you choose to make something that everyone can use, including people with disabilities. How do the gestures captured help someone play the video game? Is this idea something that could be incorporated with an Xbox Kinect? I wonder if your target audience could be expanded to include younger children.\r\nI enjoyed your video presentation.  If you move to the next round and have a chance to rerecord your presentation, it would add value to your presentation to discuss how you created the gesture capture. I also think it would add value if you were able to turn the lights off when you do the demonstration so it could be more clearly seen. I enjoyed the facts that you stated throughout your presentation.  I noticed your video was less than half the time allotted, remember your video can be up to 6 minutes if you wished to add a longer demonstration. \r\nWhile the logbook is for you, it is also seen and evaluated by the judges. Completing the log book would help a judge understand the steps you took to create the Gesture Capture. I think this invention has a lot of potential. Great job!\r\n', NULL),
(337, 249, 432, '15.00', '9.00', '9.00', '9.00', '5.00', '5.00', '5.00', '9.00', '9.00', NULL, '5.00', '15.00', 'This is an awesome idea and your video pitch was great! I do wonder, would the alarm turn back on if you got back into bed? If so, would this be considered a way to hit a \"snooze\" button?', NULL),
(338, 211, 438, '12.00', '7.00', '7.00', '7.00', '4.50', '4.50', '4.00', '7.00', '7.00', NULL, '3.50', '0.00', 'I really like the idea of your invention. I know fidget cubes are very popular and when combining a fidget cube with lights and music I think it will be a very marketable product. I would certainly purchase this product. Your product would be marketable to many different groups for different reasons such as: toy, entertainment, and stress relief.\r\n\r\nIf you are able to move to the next round and are able to record a presentation, it would add great value to your invention. Without a video or diagram I am not sure what the final product is supposed to look like. \r\n', NULL),
(339, 208, 430, '13.00', '7.00', '8.00', '7.00', '3.00', '3.00', '2.00', '10.00', '5.00', NULL, '5.00', '10.00', '', NULL),
(340, 214, 430, '11.00', '9.00', '7.00', '8.00', '5.00', '5.00', '4.00', '7.00', '3.00', NULL, '4.00', '9.00', '', NULL),
(341, 230, 430, '15.00', '10.00', '8.00', '8.00', '5.00', '5.00', '4.50', '10.00', '8.50', NULL, '5.00', '15.00', '', NULL),
(342, 209, 431, '5.50', '3.00', '5.00', '3.00', '2.00', '3.50', '3.00', '2.50', '4.00', NULL, '2.00', '3.50', '', NULL),
(343, 215, 434, '10.00', '5.00', '5.00', '5.00', '3.00', '3.50', '2.50', '7.00', '5.00', NULL, '2.50', '3.00', '', NULL),
(344, 218, 434, '11.00', '7.50', '8.50', '7.50', '4.00', '3.00', '4.00', '9.00', '8.50', NULL, '4.00', NULL, '', NULL),
(345, 243, 434, '6.50', '5.00', '4.50', '5.00', '2.50', '2.00', '2.00', '4.00', '7.00', NULL, '2.50', '9.00', '', NULL),
(346, 249, 434, '13.00', '9.00', '9.00', '9.00', '4.00', '4.00', '4.00', '9.50', '8.50', NULL, '4.50', '13.50', '', NULL),
(347, 217, 431, '7.00', '3.00', '7.50', '3.00', '4.00', '3.50', '3.00', '6.00', '2.00', NULL, '4.50', '7.00', 'Your logbook appeared blank to the judge so do you have any of your design process records?', NULL),
(348, 230, 431, '9.00', '7.00', '5.00', '9.00', '4.00', '3.00', '4.00', '8.50', '8.50', NULL, '4.50', '15.00', '', NULL),
(349, 249, 431, '6.00', '4.50', '5.00', '7.00', '3.00', '4.00', '4.00', '8.00', '7.00', NULL, '4.00', '12.00', '', NULL),
(350, 208, 421, '8.00', '5.00', '7.50', '5.00', '2.50', '2.50', '2.50', '7.50', '5.00', NULL, '5.00', '12.50', 'It would be great to know how this problem impacts the two of you (or your family members, friends, etc) and how that motivated you to investigate this design. What does one do with the clip part once you are back inside or the rain stops? Is this really more useful or convenient than carrying a bag or putting items (phone, wallet, keys, etc) in your pockets. Or, put another way, why would someone want to use this instead of doing those things? $35 seems like a pretty steep price point for an add on feature. How did you arrive at that price? It is nice to have the option to customize the colors and patterns for the pouch. \r\n\r\nIf you move on to the next round, it would be nice to re-record your video in a quiet space without the background noise of others talking. Both of you start several of your sentences with \"um,\" which is something you could work on avoiding in another take of the video. Overall, though, you did a nice job in your presentation and construction of your prototype!', NULL),
(351, 214, 421, '10.00', '7.00', '5.00', '7.00', '3.00', '3.00', '2.50', '5.00', '5.00', NULL, '4.00', '10.00', 'Great product title! It would be great to know how this problem of frizzy hair impacts the four of you (or your family members, friends, etc) and how that motivated you to investigate this design. Here are some things that I wondered about as I watched your pitch: What ratio of each ingredient did you start with and how did you modify it each time as you tried to optimize the product? How will the product be packaged? Does it have a shelf life or expiration date? Why is having a scent an important criteria for you? Will the honey in the product attract bugs in the summer? Did you test the product with others? If so, what did they think of it? \r\n\r\nIf you move on to the next round, it would be nice to re-record your video and focus on not fidgeting with your name badges:) You had plenty of time left in your video to add more detail about the product design process. Overall, though, nice job!\r\n\r\n', NULL),
(352, 209, 435, '12.00', '3.00', '7.50', '5.00', '3.50', '1.50', '2.00', '6.50', '2.50', NULL, '5.00', '5.50', 'How much hydrogen would be in that little add on? \r\nHow many times should people be expected to use this in like a month?\r\nHow do you recommend people clean the tank itself? Does the Algae Vak just clean the water or is the Algae Vak strong enough to get the algae off of the sides and bottom of the tank itself?', NULL),
(353, 215, 435, '12.00', '10.00', '7.00', '5.00', '3.00', '1.50', '2.00', '10.00', '8.50', NULL, '4.00', '11.50', 'Do you think the glasses have one lens that moves to zoom in or multiple lenses?\r\nWould the speakers be double sided where itâ€™s a microphone on one side and a speaker on the other that is next to the ear?\r\n', NULL),
(354, 217, 435, '9.00', '1.00', '7.50', '5.50', '1.50', '2.00', '0.00', '10.00', '0.00', NULL, '4.50', '9.50', 'Is the prototype a bowl inside a bowl and you put the milk in the middle bowl and the cereal in the outside bowl?\r\nIf so, are there holes in the middle bowl?', NULL),
(355, 231, 435, '14.00', '10.00', '10.00', '10.00', '5.00', '4.50', '4.00', '9.00', '10.00', NULL, '5.00', '15.00', 'How heavy of a pot or container can your solar stove hold?\r\nWhere is the valve located to put water in and drain water out of the copper tubing?', NULL),
(356, 220, 421, '12.50', '3.00', '5.00', '3.00', '3.00', '4.00', '2.50', '10.00', '3.00', NULL, '4.50', '10.00', 'This is such a cool idea! I just wish that I knew more about it and could see more of it:) The screen shot you included in your logbook is very tiny, so if you move on in the competition, it would be good to enlarge it to be easily read in the document. Do you have more of the script for the game written? If so, it would be great to include that! It would also be very interesting to see video of you playing the game. While you did include some footage of you interacting with the game in the pitch, the angle that it was filmed at made it difficult to see. More video of you playing the game or screen shots would be a great addition to your pitch and logbook. Good use of statistics to provide context to the need for this product, though I do wonder if there are more recent updates to the 2016 data.\r\n\r\nOther things I wondered about as I watched the pitch: Did you get feedback from users of the game? If so, what were their comments? Did you use any feedback to improve or change the game? \r\n\r\nHow did you make the game? What software or programming did you use? Are there different story lines and/or levels? Can you play with others? Is it possible to win or is it more about the journey of playing? ', NULL),
(357, 228, 421, '15.00', '10.00', '10.00', '10.00', '5.00', '5.00', '5.00', '10.00', '10.00', NULL, '5.00', '15.00', 'What an absolutely fantastic product and pitch! Truly:)\r\n\r\nThe pdf version of your logbook did not upload correctly, so a large section in the middle did not display as you intended. It was all viewable, though, in the logbook copy. That will be something to keep an eye on for future rounds of the competition.\r\n\r\nYou did an impressive amount of research and interviews before starting the project. Did you do any interviews with potential users after you built your prototype to get feedback on it? That could be a nice addition to the project.\r\n\r\nAs I was watching your pitch, I found myself wondering about the comparison between the widespread availability of audiobooks to the limited availability of book printed in braille. Clearly, reading is different than listening and that might be a distinction you touch on in your logbook or the pitch video if you think you have time. Plus, your invention has the distinct advantage of being able to read any printed material, which is far superior to an audiobook. \r\n\r\nKeep up the good work! I\'m excited to see what the future holds for you:)\r\n', NULL),
(358, 229, 421, '15.00', '9.00', '10.00', '9.00', '4.50', '5.00', '5.00', '9.50', '9.00', NULL, '5.00', '14.00', 'Really cool idea and nice pitch! \r\n\r\nThe pdf version of your logbook did not upload correctly, so a large section in the middle did not display as you intended. Unfortunately, the logbook copy was linked to a different project so I wasn\'t able to view it there either. That will be something to keep an eye on for future rounds of the competition.\r\n\r\nA few things I wondered about as I watched your pitch: Approximately how big will this unit be? Is this something that you image apartment complexes, university dorms, etc. will purchase for their residents to use, or will it be sold direct to consumers? Or, do you think municipalities will purchase them for their residents?  How much trash/recycling can it handle per cycle? How long does a cycle take to run? Is the unit serviceable if a component breaks? What is the projected maintenance schedule? Based on projected wear and tear, how long will a unit last before needing to be replaced? How does the material come out at the end? Does someone need to transport the compacted cubes of trash or recycling to a can for pickup?\r\n\r\nIf you move on to further rounds of the competition, you might consider re-recording your pitch to slow down your rate of speech just a bit. You get going a little fast in places, which is easy to do when you have such a cool thing to talk about:) Also, there are a few typos on the last slide. You might also consider adding a reference slide or include all of your research references in your logbook. Overall, though, really super job!\r\n', NULL),
(360, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(361, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(362, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(363, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(364, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(365, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(366, 274, 607, '12.00', '7.50', '8.00', '8.00', '3.50', '5.00', '4.00', '9.50', '7.00', '0.00', '7.00', '2.00', 'Dear Students, \r\n\r\nI was truly impressed to learn that you are all teenagers! Initially, I thought this was a competition for undergraduate students. Your potential is evident, and I wanted to offer some feedback to help you further develop your presentation skills.\r\n\r\n1.	I acknowledge the effort you\'ve put into this project. However, the presentation fell short in effectively showcasing your work. Presentation is crucial to demonstrate the value of your efforts; otherwise, they risk being overlooked.\r\n\r\n2.	During the presentation, I noticed that you were essentially reading the text directly from the slides. A presentation should not simply regurgitate text but should utilize visuals, figures, and personal elaboration to convey your message effectively.\r\n\r\n3.	There was an imbalance in your presentation, with more time spent on identifying problems than on presenting solutions. Additionally, the beginning and ending of the video pitch could be refined for a stronger impact.\r\n\r\n4.	Moreover, consider refining the introduction and conclusion of your video pitch to create a stronger overall impression.\r\n\r\nI hope this feedback is helpful and encourages you to continue developing your skills. Remember, you have immense potential, and I have no doubt you will achieve great things in the future!\r\n\r\nBest Regards,\r\nAnas\r\n						        \r\n							        ', NULL),
(367, 275, 607, '11.00', '6.50', '6.50', '6.00', '4.00', '5.00', '4.50', '8.50', '1.00', '0.00', '2.00', '4.50', 'Dear Students,\r\n\r\nI believe your idea is unique and there is a gap in the market for something like your novel product. Although you presented well, there were no visuals or figures provided to help understand how the machine works. Additionally, the log book attached lacked details about the development and functioning of your product. While you may have worked hard on this project, it\'s important to focus on explaining your work in the easiest way possible to your audience.\r\n\r\nI trust that this feedback proves valuable and motivates you to further hone your skills. Keep in mind your tremendous potential, and I am confident that you will accomplish remarkable feats in the days ahead!\r\n\r\nBest Regards,\r\nAnas\r\n							        \r\n							        ', NULL),
(368, 275, 607, '14.00', '9.00', '8.00', '9.50', '4.50', '5.00', '3.50', '9.50', '7.50', '0.00', '9.50', '5.00', 'Dear Students,\r\n\r\nI want to express my sincere appreciation for the outstanding presentation you delivered. Frankly, it surpassed all expectations, especially considering your age. Watching you present was not only impressive but also a valuable learning experience for me, demonstrating how to effectively communicate ideas in a concise manner.\r\n\r\nWhile my expertise lies in civil engineering, I may not offer technical suggestions. However, I can assure you that the field offers vast opportunities for exploration and innovation. Your enthusiasm and talent are precisely what we need to propel our society forward and create a better world for all.\r\n\r\nKeep up the excellent work!\r\n\r\nBest regards,\r\nAnas				        ', NULL),
(369, 266, 607, '14.50', '7.50', '8.00', '8.00', '4.50', '4.50', '3.50', '8.00', '7.00', '0.00', '8.00', '5.00', 'Dear Students,\r\n\r\nI want to express my sincere appreciation for the outstanding presentation you delivered. Frankly, it surpassed all expectations, especially considering your age. Watching you present was not only impressive but also a valuable learning experience for me, demonstrating how to effectively communicate ideas in a concise manner.\r\n\r\nWhile my expertise lies in civil engineering, I may not offer technical suggestions. However, I can assure you that the field offers vast opportunities for exploration and innovation. Your enthusiasm and talent are precisely what we need to propel our society forward and create a better world for all.\r\n\r\nKeep up the excellent work!\r\n\r\nBest regards,\r\nAnas							        \r\n							        ', NULL);
INSERT INTO `tbl_judge_assessment` (`id`, `team_id`, `user_id`, `identifying_understanding`, `ideating`, `designing_building`, `testing_refinging`, `value_propoition`, `market_potential`, `social_value`, `originality`, `logbook`, `display_board`, `prototype`, `online_pitch`, `question_asked`, `live_qa`) VALUES
(370, 263, 607, '12.50', '8.00', '8.00', '8.00', '4.50', '4.50', '4.50', '9.50', '7.50', '0.00', '8.50', '0.00', 'Dear Students,\r\n\r\nThe idea you are currently working on has huge potential. I can say that for sure because I\'m currently involved in an entrepreneurial endeavor aimed at converting waste plastic into construction materials. Our startup, named ECO-REFIXERS, is currently incubated at Ghulam Ishaq Khan Institute of Engineering Sciences and Technology. The issue that we are facing is the same as yours because segregating any particular type of waste from a landfill site is quite challenging.\r\n\r\nThis is indeed a promising idea, and I highly recommend you continue working on it. Additionally, I\'d like to share a lesson I\'ve learned from my experience. Whenever proposing a solution, such as the one you did in this project, always consider the economic aspect of it as well. By this, I mean focusing on making the idea economically feasible and practical to implement. This is something I learned the hard way, which is why I\'m sharing it with you from my experience.\r\n\r\nFeel free to reach out to me at civilengineeranasahmed@gmail.com if you have any questions or need further assistance.\r\n\r\nBest regards,\r\nAnas\r\n				        ', NULL),
(371, 273, 607, '13.50', '8.50', '7.00', '7.00', '4.00', '4.00', '4.00', '9.00', '0.00', '0.00', '9.50', '5.00', 'Dear Students,\r\n\r\nYour \"Breath of Fresh Air\" project left me truly impressed! Your innovative approach combining plants and technology to clean the air is both ingenious and inspiring. Your teamwork and dedication shine brightly. Keep up the fantastic work! \r\n\r\nBest regards,\r\nAnas\r\n					        \r\n							        ', NULL),
(372, 255, 607, '14.50', '9.50', '9.50', '9.50', '4.50', '4.00', '4.50', '8.50', '7.50', '0.00', '10.00', '4.50', 'Dear Students,\r\n\r\nI am truly impressed by your project! Your innovative approach to tackling a significant environmental challenge is both ingenious and inspiring.\r\n\r\nI want to offer a suggestion for improvement in your presentation. While I acknowledge the effort you\'ve put into it, I noticed that there is a lot of text on every slide. Instead of relying heavily on text, consider utilizing visuals, figures, and personal elaboration to effectively convey your message.\r\n\r\nOverall, your work is fantastic! Your teamwork and dedication shine brightly. Keep up the excellent work!\r\n\r\nBest regards,\r\nAnas						        \r\n							        ', NULL),
(373, 266, 611, '1.00', '4.00', '2.00', '3.50', '2.50', '1.50', '1.50', '3.00', '1.50', '2.00', '2.00', '2.00', '							        \r\n							        ', NULL),
(374, 263, 611, '0.50', '1.00', '0.00', '0.00', '1.00', '1.00', '1.50', '1.50', '2.00', '0.00', '0.00', '0.50', '							        \r\n							        ', NULL),
(375, 255, 611, '2.50', '4.50', '3.50', '3.00', '2.50', '2.50', '4.50', '5.50', '7.00', '7.00', '4.00', '4.00', '							        \r\n							        ', NULL),
(376, 259, 611, '2.50', '5.50', '3.00', '4.50', '4.00', '3.50', '4.00', '8.00', '2.50', '4.00', '4.50', '3.50', '							        \r\n							        ', NULL),
(377, 274, 611, '2.00', '2.50', '4.00', '2.00', '2.50', '2.00', '4.00', '6.50', '2.50', '2.00', '5.00', '2.50', '							        \r\n							        ', NULL),
(378, 279, 611, '8.00', '7.50', '7.50', '9.50', '4.50', '4.50', '5.00', '8.00', '8.00', '7.00', '9.00', '5.00', '							        \r\n							        ', NULL),
(379, 253, 617, '1.00', '1.00', '1.00', '1.00', '1.00', '0.50', '0.50', '0.00', '0.50', '0.50', '0.50', '0.50', '							        \r\n					No Video Available.!		        ', NULL),
(380, 271, 617, '5.00', '6.00', '5.00', '7.00', '4.00', '4.00', '4.00', '6.00', '6.00', '5.00', '7.00', '4.00', 'Is the database limited to specific plant type?', NULL),
(381, 255, 617, '7.50', '7.00', '7.00', '7.00', '4.00', '4.00', '4.00', '7.00', '5.00', '3.00', '8.00', '3.00', '							        \r\n							        ', NULL),
(382, 274, 617, '4.00', '4.00', '4.00', '4.00', '3.00', '3.00', '3.00', '3.50', '4.00', '3.00', '6.00', '3.00', '							        \r\n							        ', NULL),
(383, 278, 617, '7.00', '8.00', '8.00', '8.00', '5.00', '4.50', '5.00', '7.00', '5.00', '6.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(384, 277, 605, '14.00', '8.00', '9.00', '7.00', '4.50', '4.50', '3.50', '4.50', '6.00', '4.00', '8.00', '3.50', '							        \r\n							        ', NULL),
(385, 259, 605, '7.00', '8.50', '7.50', '8.00', '3.50', '3.50', '4.50', '8.50', '8.00', '5.00', '8.00', '3.00', '							        \r\n							        ', NULL),
(386, 264, 605, '13.50', '8.50', '6.50', '6.50', '4.00', '4.00', '4.00', '8.50', '7.00', '3.50', '6.50', '4.00', '							        \r\n							        ', NULL),
(387, 273, 605, '9.00', '5.50', '6.00', '6.00', '3.00', '2.50', '4.00', '7.00', '4.50', '5.00', '8.00', '3.00', '							        \r\n							        ', NULL),
(388, 263, 625, '8.50', '9.00', '8.00', '9.00', '4.50', '4.00', '4.00', '8.50', '8.00', '6.50', '9.00', '4.00', '							        \r\n							        ', NULL),
(389, 255, 625, '8.50', '9.00', '8.00', '9.00', '4.50', '3.50', '4.00', '8.50', '8.00', '7.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(390, 273, 625, '7.50', '8.50', '9.50', '8.50', '4.50', '4.00', '4.00', '8.50', '0.00', '0.00', '0.00', '4.00', '							        							        \r\n							        							        ', NULL),
(391, 276, 625, '9.00', '8.50', '8.50', '8.00', '5.00', '4.50', '5.00', '8.50', '8.00', '7.00', '10.00', '0.00', '							        \r\n							        ', NULL),
(392, 273, 613, '9.00', '5.00', '6.00', '5.00', '2.50', '2.00', '3.00', '8.00', '0.00', '4.00', '7.00', '2.50', '							        \r\n							        ', NULL),
(393, 277, 613, '14.00', '9.00', '9.50', '9.00', '4.50', '4.50', '4.50', '8.00', '8.00', '0.00', '8.50', '4.00', '							        \r\n							        ', NULL),
(394, 278, 613, '13.00', '8.00', '7.50', '7.50', '4.00', '4.00', '4.00', '5.00', '8.00', '5.50', '8.00', '4.50', '							        \r\n							        ', NULL),
(395, 255, 613, '8.00', '5.00', '5.00', '5.00', '2.50', '2.50', '3.00', '6.00', '7.50', '3.00', '5.00', '3.50', '							        \r\n							        ', NULL),
(396, 279, 613, '15.00', '10.00', '10.00', '9.50', '5.00', '5.00', '5.00', '9.50', '8.00', '7.00', '10.00', '5.00', '							        \r\n							        ', NULL),
(397, 276, 613, '13.00', '7.50', '6.50', '7.00', '3.00', '3.00', '3.50', '6.00', '7.50', '4.00', '6.50', '4.00', '							        \r\n							        ', NULL),
(398, 263, 619, '6.00', '6.00', '5.50', '5.00', '3.00', '2.50', '2.50', '6.00', '6.50', '5.00', '5.50', '3.00', '							        \r\n							        ', NULL),
(399, 255, 619, '8.50', '8.50', '8.00', '8.00', '4.50', '4.00', '4.50', '8.00', '7.50', '6.50', '8.00', '4.50', '							        \r\n							        ', NULL),
(400, 276, 619, '6.00', '5.50', '5.00', '5.00', '3.00', '2.50', '2.50', '6.00', '6.00', '6.00', '5.50', '3.00', '							        \r\n							        ', NULL),
(401, 273, 619, '5.00', '6.00', '5.50', '5.50', '2.50', '2.00', '2.50', '6.00', '0.00', '4.00', '6.00', '3.50', '							        \r\n							        ', NULL),
(402, 277, 619, '7.00', '8.00', '8.00', '8.00', '4.00', '4.00', '4.50', '8.00', '7.50', '6.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(403, 279, 619, '8.00', '8.00', '8.00', '7.50', '4.00', '4.00', '4.00', '8.00', '7.50', '6.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(404, 279, 619, '8.00', '8.00', '8.00', '7.50', '4.00', '4.00', '4.00', '8.00', '7.50', '6.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(405, 275, 606, '11.00', '6.00', '8.00', '3.00', '4.00', '4.00', '4.00', '6.00', '4.00', '4.50', '3.00', '2.50', '							        \r\n							        ', NULL),
(406, 271, 606, '9.00', '5.50', '6.00', '2.00', '3.50', '4.00', '3.50', '7.00', '6.00', '5.00', '5.00', '2.50', '							        \r\n							        ', NULL),
(407, 276, 610, '5.00', '4.00', '4.00', '4.00', '3.00', '3.50', '3.50', '2.50', '7.00', '4.00', '3.50', '4.00', '							        \r\n							        ', NULL),
(408, 276, 610, '5.00', '4.00', '4.00', '4.00', '3.00', '3.50', '3.50', '2.50', '7.00', '4.00', '3.50', '4.00', '							        \r\n							        ', NULL),
(409, 273, 622, '13.00', '8.00', '6.50', '6.00', '3.50', '4.00', '4.50', '9.50', '8.00', '4.00', '8.00', '3.00', '							        \r\n							        ', NULL),
(410, 255, 606, '11.00', '7.50', '7.50', '5.50', '2.50', '2.50', '4.00', '7.00', '5.50', '4.50', '5.00', '2.50', '							        \r\n							        ', NULL),
(411, 276, 622, '7.00', '4.00', '4.00', '2.00', '3.00', '4.00', '4.50', '5.00', '1.00', '2.00', '1.00', '3.00', '							        \r\n							        ', NULL),
(412, 263, 610, '6.00', '8.00', '6.00', '7.00', '3.50', '4.00', '4.00', '4.50', '4.00', '5.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(413, 263, 610, '6.00', '8.00', '6.00', '7.00', '3.50', '4.00', '4.00', '4.50', '4.00', '5.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(414, 279, 622, '9.00', '7.50', '7.00', '6.50', '4.00', '5.00', '4.50', '7.00', '5.50', '3.00', '5.00', '4.00', '							        \r\n							        ', NULL),
(415, 278, 606, '12.00', '7.00', '7.50', '6.50', '2.50', '3.50', '4.00', '8.00', '2.50', '4.50', '6.00', '2.50', '							        \r\n							        ', NULL),
(416, 263, 610, '6.00', '7.00', '8.00', '6.00', '3.50', '4.00', '4.50', '4.50', '4.00', '5.00', '8.00', '4.50', '							        \r\n							        ', NULL),
(417, 259, 620, '1.00', '4.00', '1.00', '2.00', '0.50', '0.00', '0.50', '0.50', '2.50', '2.50', '6.50', '2.00', '							        \r\n							        ', NULL),
(418, 273, 610, '3.50', '5.00', '4.50', '4.50', '4.50', '4.00', '4.50', '3.00', '3.00', '4.00', '4.50', '4.50', '							        \r\n							        ', NULL),
(419, 259, 622, '4.00', '4.00', '2.00', '4.00', '1.00', '0.50', '4.00', '3.00', '4.00', '2.00', '2.00', '2.50', '							        \r\n							        ', NULL),
(420, 275, 620, '5.00', '6.00', '7.00', '6.00', '3.50', '2.50', '3.00', '5.50', '6.00', '5.00', '8.50', '4.50', '							        \r\n							        ', NULL),
(421, 277, 621, '7.00', '6.50', '8.50', '6.50', '3.00', '2.50', '3.50', '3.00', '2.50', '3.00', '2.50', '2.50', '							        							        \r\n							        							        ', NULL),
(422, 277, 621, '7.00', '6.50', '8.50', '6.50', '3.00', '2.50', '3.50', '3.00', '2.50', '3.00', '2.50', '2.50', '							        \r\n							        ', NULL),
(423, 274, 606, '13.00', '3.50', '7.00', '6.00', '3.00', '4.00', '4.00', '5.50', '5.50', '3.50', '7.00', '2.50', '							        \r\n							        ', NULL),
(424, 276, 620, '4.00', '5.00', '5.50', '3.50', '1.50', '1.50', '4.50', '5.00', '2.00', '2.00', '5.00', '3.50', '							        \r\n							        ', NULL),
(425, 266, 610, '3.50', '3.50', '3.50', '3.50', '4.00', '3.50', '4.00', '3.00', '3.00', '2.50', '2.00', '2.50', '							        \r\n							        ', NULL),
(426, 266, 610, '3.50', '3.50', '3.50', '3.50', '4.00', '3.50', '4.00', '3.00', '3.00', '2.50', '2.00', '2.50', '							        \r\n							        ', NULL),
(427, 266, 610, '3.50', '3.50', '3.50', '3.50', '4.00', '3.50', '4.00', '3.00', '3.00', '2.50', '2.00', '2.50', '							        \r\n							        ', NULL),
(428, 264, 622, '6.00', '7.00', '4.00', '5.00', '3.00', '3.00', '3.50', '5.50', '6.00', '3.00', '5.00', '3.00', '							        \r\n							        ', NULL),
(429, 266, 620, '3.00', '4.00', '5.00', '5.00', '3.00', '3.50', '3.50', '4.00', '3.00', '3.50', '5.00', '3.50', '							        \r\n							        ', NULL),
(430, 259, 610, '3.50', '2.50', '3.50', '3.00', '3.00', '4.00', '4.00', '3.00', '4.00', '3.50', '4.50', '4.50', '							        \r\n							        ', NULL),
(431, 279, 621, '11.00', '7.50', '8.00', '7.50', '4.50', '4.00', '4.50', '7.50', '6.00', '6.00', '8.00', '3.50', '							        \r\n							        ', NULL),
(432, 263, 620, '7.00', '8.00', '9.00', '8.00', '4.50', '4.50', '4.50', '5.50', '7.50', '7.00', '9.00', '4.00', '							        \r\n							        ', NULL),
(433, 271, 621, '14.00', '8.00', '9.00', '8.50', '4.50', '4.50', '4.50', '8.50', '7.00', '6.50', '8.50', '4.50', '							        \r\n							        ', NULL),
(434, 271, 620, '5.00', '5.00', '6.50', '6.00', '3.50', '3.00', '3.00', '5.00', '5.00', '4.00', '5.00', '3.00', '							        \r\n							        ', NULL),
(435, 276, 621, '5.50', '5.00', '5.00', '5.50', '2.50', '3.50', '3.00', '5.00', '5.00', '5.00', '4.00', '3.50', '							        \r\n							        ', NULL),
(436, 259, 621, '4.50', '5.50', '5.00', '5.00', '2.50', '2.50', '2.50', '5.50', '4.50', '4.00', '5.50', '3.50', '							        \r\n							        ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_judge_team`
--

CREATE TABLE `tbl_judge_team` (
  `id` int(10) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_judge_team`
--

INSERT INTO `tbl_judge_team` (`id`, `team_id`, `user_id`, `year`) VALUES
(388, 244, 415, '2022'),
(389, 244, 421, '2022'),
(390, 228, 439, '2022'),
(391, 220, 439, '2022'),
(392, 231, 439, '2022'),
(393, 211, 439, '2022'),
(394, 228, 426, '2022'),
(395, 228, 427, '2022'),
(396, 229, 421, '2022'),
(397, 229, 426, '2022'),
(398, 229, 437, '2022'),
(399, 216, 427, '2022'),
(400, 216, 428, '2022'),
(401, 216, 438, '2022'),
(402, 230, 429, '2022'),
(403, 230, 430, '2022'),
(404, 230, 431, '2022'),
(405, 249, 431, '2022'),
(406, 249, 432, '2022'),
(407, 249, 434, '2022'),
(408, 218, 433, '2022'),
(409, 218, 434, '2022'),
(410, 218, 438, '2022'),
(411, 231, 435, '2022'),
(412, 231, 436, '2022'),
(413, 220, 437, '2022'),
(414, 220, 438, '2022'),
(415, 220, 421, '2022'),
(416, 219, 426, '2022'),
(417, 219, 427, '2022'),
(418, 219, 432, '2022'),
(419, 221, 428, '2022'),
(420, 221, 429, '2022'),
(421, 221, 433, '2022'),
(422, 214, 421, '2022'),
(423, 214, 436, '2022'),
(424, 214, 430, '2022'),
(425, 215, 435, '2022'),
(426, 215, 432, '2022'),
(427, 215, 434, '2022'),
(428, 217, 437, '2022'),
(429, 217, 435, '2022'),
(430, 217, 431, '2022'),
(431, 213, 429, '2022'),
(432, 213, 433, '2022'),
(433, 213, 436, '2024'),
(434, 208, 428, '2022'),
(435, 208, 430, '2022'),
(436, 208, 421, '2022'),
(437, 243, 432, '2022'),
(438, 243, 434, '2022'),
(439, 243, 437, '2022'),
(440, 209, 435, '2022'),
(441, 209, 431, '2022'),
(442, 209, 427, '2022'),
(443, 211, 438, '2022'),
(444, 211, 429, '2022'),
(445, 212, 433, '2022'),
(446, 212, 436, '2022'),
(447, 212, 428, '2022'),
(448, 216, 439, '2022'),
(449, 228, 421, '2022'),
(451, 252, 436, '2024'),
(452, 253, 436, '2024'),
(455, 275, 608, '2024'),
(456, 271, 608, '2024'),
(457, 278, 608, '2024'),
(458, 273, 607, '2024'),
(459, 266, 607, '2024'),
(460, 263, 607, '2024'),
(461, 276, 610, '2024'),
(464, 275, 606, '2024'),
(465, 271, 606, '2024'),
(466, 255, 606, '2024'),
(467, 264, 609, '2024'),
(468, 266, 609, '2024'),
(470, 274, 609, '2024'),
(471, 277, 612, '2024'),
(472, 275, 612, '2024'),
(476, 277, 605, '2024'),
(477, 259, 605, '2024'),
(478, 264, 605, '2024'),
(483, 273, 613, '2024'),
(485, 277, 613, '2024'),
(486, 266, 611, '2024'),
(487, 263, 611, '2024'),
(488, 255, 611, '2024'),
(489, 259, 611, '2024'),
(490, 278, 613, '2024'),
(491, 274, 607, '2024'),
(492, 264, 608, '2024'),
(493, 263, 610, '2024'),
(495, 278, 606, '2024'),
(496, 274, 606, '2024'),
(497, 255, 613, '2024'),
(498, 259, 612, '2024'),
(499, 273, 605, '2024'),
(500, 273, 610, '2024'),
(501, 266, 610, '2024'),
(502, 264, 610, '2024'),
(503, 263, 612, '2024'),
(504, 259, 610, '2024'),
(505, 264, 605, '2024'),
(506, 278, 606, '2024'),
(507, 279, 613, '2024'),
(508, 276, 613, '2024'),
(510, 274, 611, '2024'),
(511, 279, 611, '2024'),
(512, 263, 609, '2024'),
(513, 255, 609, '2024'),
(514, 276, 609, '2024'),
(515, 278, 616, '2024'),
(516, 266, 616, '2024'),
(517, 259, 616, '2024'),
(518, 271, 616, '2024'),
(519, 275, 616, '2024'),
(520, 279, 616, '2024'),
(521, 253, 617, '2024'),
(522, 271, 617, '2024'),
(523, 255, 617, '2024'),
(524, 274, 617, '2024'),
(525, 278, 617, '2024'),
(526, 274, 618, '2024'),
(527, 264, 618, '2024'),
(528, 273, 618, '2024'),
(529, 277, 618, '2024'),
(531, 263, 619, '2024'),
(532, 255, 619, '2024'),
(533, 276, 619, '2024'),
(534, 273, 619, '2024'),
(535, 277, 619, '2024'),
(536, 279, 619, '2024'),
(538, 255, 607, '2024'),
(539, 275, 607, '2024'),
(540, 274, 623, '2024'),
(541, 266, 623, '2024'),
(542, 263, 623, '2024'),
(543, 264, 623, '2024'),
(545, 263, 625, '2024'),
(546, 255, 625, '2024'),
(547, 276, 625, '2024'),
(548, 273, 625, '2024'),
(549, 266, 626, '2024'),
(550, 278, 626, '2024'),
(551, 259, 626, '2024'),
(552, 275, 626, '2024'),
(553, 271, 626, '2024'),
(554, 279, 626, '2024'),
(555, 277, 621, '2024'),
(556, 279, 621, '2024'),
(557, 271, 621, '2024'),
(558, 276, 621, '2024'),
(559, 259, 621, '2024'),
(560, 273, 622, '2024'),
(561, 276, 622, '2024'),
(562, 279, 622, '2024'),
(563, 259, 622, '2024'),
(564, 264, 622, '2024'),
(565, 275, 620, '2024'),
(566, 271, 620, '2024'),
(567, 276, 620, '2024'),
(568, 259, 620, '2024'),
(569, 263, 620, '2024'),
(570, 266, 620, '2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_mentor`
--

CREATE TABLE `tbl_student_mentor` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `approve` int(11) NOT NULL DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_student_mentor`
--

INSERT INTO `tbl_student_mentor` (`id`, `student_id`, `mentor_id`, `approve`) VALUES
(111, 255, 250, 1),
(112, 256, 250, 1),
(115, 260, 257, 1),
(116, 261, 257, 1),
(117, 262, 353, 1),
(118, 263, 257, 1),
(119, 264, 350, 1),
(120, 265, 352, 1),
(121, 266, 352, 1),
(122, 267, 353, 1),
(123, 268, 353, 1),
(124, 269, 352, 1),
(125, 270, 353, 1),
(126, 271, 353, 1),
(127, 272, 350, 1),
(128, 273, 257, 1),
(129, 274, 351, 1),
(130, 275, 353, 1),
(131, 276, 354, 1),
(132, 277, 257, 1),
(133, 278, 354, 1),
(134, 279, 354, 1),
(135, 280, 353, 1),
(136, 281, 257, 1),
(137, 282, 354, 1),
(139, 284, 354, 1),
(140, 285, 354, 1),
(141, 286, 353, 1),
(142, 287, 354, 1),
(143, 288, 353, 1),
(144, 289, 354, 1),
(145, 290, 353, 1),
(146, 291, 350, 1),
(147, 292, 353, 1),
(148, 293, 354, 1),
(149, 294, 257, 1),
(150, 295, 354, 1),
(152, 297, 354, 1),
(153, 298, 354, 1),
(154, 299, 257, 1),
(156, 301, 257, 1),
(157, 302, 359, 1),
(158, 303, 350, 1),
(159, 304, 350, 1),
(161, 306, 350, 1),
(162, 307, 352, 1),
(163, 308, 399, 1),
(164, 309, 399, 1),
(165, 310, 399, 1),
(166, 311, 399, 1),
(167, 312, 399, 1),
(168, 313, 399, 1),
(169, 314, 399, 1),
(170, 315, 399, 1),
(172, 319, 257, 1),
(173, 320, 399, 1),
(174, 321, 399, 1),
(175, 322, 399, 1),
(176, 323, 399, 1),
(177, 324, 399, 1),
(178, 325, 399, 1),
(179, 326, 399, 1),
(180, 327, 399, 1),
(181, 328, 399, 1),
(182, 329, 399, 1),
(183, 330, 399, 1),
(184, 331, 250, 1),
(185, 332, 250, 1),
(186, 339, 334, 1),
(187, 340, 334, 1),
(188, 341, 334, 1),
(189, 342, 335, 1),
(190, 343, 335, 1),
(191, 344, 336, 1),
(192, 345, 336, 1),
(193, 346, 337, 1),
(194, 347, 337, 1),
(195, 348, 338, 1),
(196, 349, 338, 1),
(197, 358, 351, 1),
(198, 359, 350, 1),
(199, 360, 354, 1),
(200, 361, 254, 0),
(201, 362, 254, 0),
(202, 363, 254, 0),
(203, 364, 254, 1),
(204, 365, 356, 1),
(205, 366, 356, 1),
(206, 367, 399, 1),
(207, 368, 399, 1),
(208, 369, 399, 1),
(209, 370, 399, 1),
(210, 371, 399, 1),
(211, 372, 399, 1),
(212, 373, 399, 1),
(213, 374, 399, 1),
(214, 375, 399, 1),
(215, 376, 399, 1),
(216, 377, 399, 1),
(217, 378, 399, 1),
(218, 379, 399, 1),
(219, 380, 399, 1),
(220, 381, 399, 1),
(221, 382, 399, 1),
(222, 383, 399, 1),
(223, 384, 399, 1),
(224, 385, 399, 1),
(225, 386, 399, 1),
(226, 387, 399, 1),
(227, 388, 399, 1),
(228, 389, 399, 1),
(229, 390, 399, 1),
(230, 391, 399, 1),
(231, 392, 399, 1),
(232, 393, 399, 1),
(233, 399, 399, 1),
(234, 395, 399, 1),
(235, 396, 399, 1),
(236, 397, 399, 1),
(237, 398, 257, 1),
(238, 401, 357, 1),
(239, 402, 357, 1),
(240, 403, 357, 1),
(241, 404, 357, 1),
(242, 405, 357, 1),
(243, 406, 357, 1),
(244, 407, 357, 1),
(245, 408, 357, 1),
(246, 409, 357, 1),
(248, 411, 354, 1),
(249, 412, 354, 1),
(250, 413, 254, -1),
(251, 414, 250, 1),
(252, 416, 250, 1),
(253, 417, 250, 1),
(256, 270, 250, 1),
(260, 449, 250, 1),
(282, 488, 487, 1),
(283, 489, 487, 1),
(284, 490, 487, 1),
(285, 491, 487, 1),
(286, 492, 487, 1),
(287, 493, 487, 1),
(288, 494, 487, 1),
(289, 495, 487, 1),
(290, 497, 487, 1),
(291, 498, 487, 1),
(292, 499, 487, 1),
(293, 500, 487, 1),
(295, 502, 487, 1),
(296, 503, 487, 1),
(297, 504, 487, 1),
(298, 505, 487, 1),
(299, 506, 487, 1),
(300, 507, 487, 1),
(301, 496, 487, 1),
(302, 508, 447, 1),
(303, 510, 486, 1),
(304, 511, 486, 1),
(305, 512, 486, 1),
(306, 513, 486, 1),
(307, 514, 486, 1),
(308, 515, 486, 1),
(309, 517, 486, 1),
(310, 518, 486, 1),
(311, 519, 486, 1),
(312, 520, 486, 1),
(314, 522, 251, 1),
(315, 523, 486, 1),
(316, 524, 251, 1),
(317, 525, 486, 0),
(318, 526, 486, 1),
(319, 527, 486, 1),
(320, 528, 509, 1),
(321, 529, 509, 1),
(322, 530, 509, 1),
(323, 531, 450, -1),
(324, 532, 254, 1),
(325, 533, 251, 1),
(326, 534, 251, 1),
(327, 535, 251, 1),
(328, 537, 486, 1),
(329, 538, 486, 1),
(330, 540, 486, 1),
(331, 541, 251, 1),
(332, 542, 251, 1),
(333, 544, 486, 1),
(334, 546, 509, 1),
(335, 547, 486, 1),
(336, 548, 251, 1),
(337, 549, 486, 1),
(338, 550, 251, 1),
(339, 551, 251, 1),
(340, 553, 251, 1),
(341, 555, 251, 1),
(342, 556, 251, 1),
(343, 557, 251, 1),
(344, 558, 251, 1),
(345, 559, 251, 1),
(346, 560, 251, 1),
(347, 561, 251, 1),
(348, 562, 251, 1),
(349, 563, 251, 1),
(350, 564, 251, 1),
(352, 566, 251, 1),
(353, 567, 251, 1),
(354, 568, 251, 1),
(355, 569, 251, 1),
(356, 570, 251, 1),
(357, 571, 251, 1),
(358, 572, 251, 1),
(359, 573, 539, 1),
(360, 574, 251, 1),
(361, 575, 251, 1),
(362, 576, 539, 1),
(363, 577, 251, 1),
(364, 578, 251, 1),
(365, 579, 251, 1),
(366, 580, 251, 1),
(367, 581, 539, 1),
(368, 582, 486, 0),
(369, 583, 486, 1),
(370, 584, 251, 1),
(371, 585, 509, 1),
(372, 586, 251, 1),
(373, 587, 251, 1),
(374, 589, 250, 1),
(375, 590, 554, 1),
(376, 591, 251, 1),
(377, 592, 554, 1),
(378, 593, 552, 1),
(379, 594, 554, 1),
(380, 595, 251, 1),
(381, 596, 554, 1),
(382, 597, 554, 1),
(383, 599, 539, -1),
(384, 600, 250, -1),
(385, 601, 539, -1),
(386, 602, 250, -1),
(387, 603, 251, 1),
(388, 604, 486, 1),
(389, 630, 251, 1),
(390, 631, 251, 1),
(391, 632, 254, 0),
(392, 633, 254, 1),
(393, 634, 254, 1),
(394, 635, 254, 1),
(395, 636, 254, 1),
(396, 637, 254, 1),
(397, 638, 254, 1),
(398, 639, 254, 1),
(399, 640, 254, 1),
(400, 641, 254, 1),
(401, 642, 254, 1),
(402, 643, 254, 1),
(403, 644, 251, 1),
(404, 645, 254, 1),
(405, 646, 251, 1),
(406, 647, 251, 1),
(407, 648, 251, 1),
(408, 649, 251, 1),
(409, 650, 251, 1),
(410, 651, 251, 1),
(411, 652, 251, 1),
(412, 653, 251, 1),
(413, 654, 251, 1),
(414, 655, 251, 1),
(415, 656, 251, 1),
(416, 657, 251, 1),
(417, 658, 251, 1),
(418, 659, 251, 1),
(419, 660, 251, 1),
(420, 661, 251, 1),
(421, 662, 251, 1),
(422, 663, 250, -1),
(423, 664, 251, -1),
(424, 670, 454, -1),
(425, 671, 454, -1),
(426, 674, 588, -1),
(428, 677, 486, 1),
(429, 678, 486, 1),
(430, 679, 486, 1),
(431, 680, 486, 1),
(432, 681, 486, 1),
(433, 682, 486, 1),
(434, 683, 486, 1),
(435, 684, 486, 1),
(436, 685, 486, 1),
(437, 686, 486, 1),
(438, 687, 486, 1),
(439, 688, 486, 1),
(440, 689, 486, 1),
(441, 690, 486, 1),
(442, 691, 250, -1),
(443, 692, 250, -1),
(444, 693, 250, -1),
(445, 694, 486, 1),
(446, 695, 486, 1),
(447, 696, 250, -1),
(448, 697, 486, 1),
(449, 698, 486, 1),
(450, 699, 486, 0),
(451, 700, 486, 1),
(452, 701, 486, 1),
(453, 702, 486, 1),
(454, 703, 486, 1),
(455, 704, 486, 1),
(456, 705, 486, 1),
(457, 706, 486, 1),
(458, 707, 486, 1),
(459, 708, 486, 1),
(460, 709, 486, 1),
(461, 710, 486, 1),
(462, 713, 250, -1),
(463, 715, 539, -1),
(464, 716, 250, -1),
(465, 718, 509, -1),
(466, 719, 486, 1),
(467, 720, 486, 1),
(468, 721, 486, 1),
(469, 722, 486, 1),
(470, 723, 509, -1),
(471, 724, 717, 1),
(472, 725, 717, 1),
(473, 726, 717, 1),
(474, 727, 717, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(10) NOT NULL,
  `project_team_name` varchar(100) DEFAULT NULL,
  `project_description` longtext DEFAULT NULL,
  `log_book` varchar(1000) DEFAULT NULL,
  `trifold` char(1) DEFAULT NULL,
  `video_pitch` varchar(1000) DEFAULT NULL,
  `power_supply` char(1) DEFAULT NULL,
  `category` varchar(1000) NOT NULL,
  `year` varchar(10) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `project_team_name`, `project_description`, `log_book`, `trifold`, `video_pitch`, `power_supply`, `category`, `year`, `deleted`, `country`) VALUES
(205, 'Dummy project team', 'This is a dummy project', NULL, NULL, NULL, NULL, '3-5', '2023', 0, NULL),
(207, 'Wakey Shakey', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', NULL, NULL, NULL, NULL, '6-8', '2021', 0, NULL),
(208, 'The Umbrella Cup Holder', 'the problem of people having full hands and spilling their coffee during rain', 'Umbr _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=8FOu80M9aDk&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=1', NULL, '6-8', '2022', 0, NULL),
(209, 'Algae Vak', 'The algae keeps growing out of control in fish tanks', 'Algae_ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=TEjXTbDc38w&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=4', NULL, '6-8', '2022', 0, NULL),
(211, 'Anti Stress Cube', 'People expressing negative emotions by damaging someone and/or something', 'CubeInventionlog.pdf', NULL, NULL, NULL, '6-8', '2022', 0, NULL),
(212, 'Lack of Sleep', 'Later', NULL, NULL, NULL, NULL, '6-8', '2022', 0, NULL),
(213, 'Bully Band', 'Bullying in school', 'Bully _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=94zTHzpe4_U&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=3', NULL, '3-5', '2022', 0, NULL),
(214, 'Shimmer', 'Frizzy hair', 'Shimmer _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=vpDi1fHGoLw&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=2', NULL, '3-5', '2022', 0, NULL),
(215, 'Zoom n\' Hear', 'Hearing issues at the back of a classroom', 'ZoomnHear _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=BGsB6BaZmP4&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=10', NULL, '3-5', '2022', 0, NULL),
(216, 'Icecream Catcher Cookie', 'Melting ice cream and sticky hands', 'Icrecream _ Invention Logbook.pdf', NULL, '../test_upload/LiamIceCream.mp4', NULL, '3-5', '2022', 0, NULL),
(217, 'Anti Soginator', 'Soggy Cereal (Our prototype canâ€™t hold liquid. I thought we hit failure).', 'Sogin_ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=KdSNOCK9hX8&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=8', NULL, '3-5', '2022', 0, NULL),
(218, 'Multi Glove', 'dirty hands at camping', 'MGlove _ Invention Logbook.pdf', NULL, '../test_upload/Olivia.mp4', NULL, '3-5', '2022', 0, NULL),
(219, 'Fortis Falcons', 'The problem we\'re trying to solve is people having trouble sleeping because of the light of the room or maybe its too dark or too bright our  product helps with that. Some people might need to hear certain sounds or see certain lights because some colors make it easier to fall asleep . Since people tend to lack sleep it can get unhealthy or some people can be angry because they\'re tired or might not get enough work done because they\'re tired and our product will be able to help with all of that.', 'Fortis _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=rBcYNHk_MEU', NULL, '9-12', '2022', 0, NULL),
(220, 'Gesture Capture', 'Gaming in most cases is not an active activity. Gamers use joysticks or pointers of some kind to interact with the game. Develop a game where the gamer interacts with their hands movements and gestures.', 'GestureCapture_ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=2FfA_ZmLW-A', NULL, '9-12', '2022', 0, NULL),
(221, 'baby pillow pad ', 'Combining different things all into one to find ways to help infants sleep easier.', 'BabyPad _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=cNdopyfOsmU', NULL, '9-12', '2022', 0, NULL),
(222, 'Be different ', 'we are making jibbits that have a meaning to you or someone to you we also let you design your own jibbits because who better then your self to design something you like ', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(223, 'SHD.', 'Its a helmet designed for racing.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(224, 'Team name', 'Project Description', NULL, NULL, NULL, NULL, 'K-2', '2022', 1, NULL),
(225, 'Team nameKeep as Project Title', 'Delete 1', NULL, NULL, NULL, NULL, '3-5', '2022', 1, NULL),
(226, 'Quick Cook Team', 'This project will create a robot cook to cook the cooker cookly', NULL, NULL, NULL, NULL, 'K-2', '2022', 0, NULL),
(227, 'Zayan-Jackie', 'Foggy glasses while wearing a mask', NULL, NULL, NULL, NULL, '9-12', '2022', 1, NULL),
(228, 'Book2Braille', 'Book2Braille Converter\r\n', '../test_upload/Rohit Mahesh InventionConvention_logbook.pdf', NULL, '../test_upload/Book2Braille Video.mp4', NULL, '9-12', '2022', 0, NULL),
(229, 'Smart Contamination Recycling Aid', 'The problem I am trying to fix is 34 percent of waste is recycled but 25 percent of the recyclables are contaminated. Which reduces the already low recycling rate of 34 percent to only 25.5 percent. The material which would be going to recycling is now instead going to the trash. ', '../test_upload/Log Book.pdf', NULL, 'https://www.youtube.com/watch?v=cIF4KM_t_mg', NULL, '6-8', '2022', 0, NULL),
(230, 'PBVac', 'Helping to prevent plastic bags from getting into the ocean.', '../test_upload/Liam _ Invention Logbook.pdf', NULL, 'https://youtu.be/qIV-rycfGs4', NULL, '3-5', '2022', 0, NULL),
(231, 'Solar stove', 'Solar energy is expensive because of its conversion process so not many people use it', '../test_upload/SOlar.pdf', NULL, '../test_upload/video1964176400.mp4', NULL, '3-5', '2022', 0, NULL),
(232, 'Little-Champ', 'We are working on time reminding that will reminding the work on time if we forgot to complete it.', NULL, NULL, NULL, NULL, '3-5', '2022', 0, NULL),
(233, 'Shortage of natural gas ', 'ways to produce gas and to overcome the shortage of natural gas', NULL, NULL, NULL, NULL, '3-5', '2022', 0, NULL),
(234, 'CHAMPS HERE', 'We are interested to design a stick for a blind person in which we use some sensors which detect the obstacle and tell us about the details of the this obstacle which present in front of us.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(235, 'soul survivors', 'The obstacle avoidance robotic vehicle uses ultrasonic sensors for its movements. Whenever an obstacle comes ahead of it the ultrasonic waves are reflected from an object and that information is passed to the microcontroller. The microcontroller controls the motors left, right, back, front, based on ultrasonic signals.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(236, 'The Inveniots', 'Nowadays, people don\'t always remember to take  their medicine in their daily routine so we decided to invent an automatic pill box which will help them remember to take their medicine on time and also reminds them to fill it when it is going to be finished in weekly schedule.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(237, 'Lights On', 'A majority of people in a lot of places in the world have a problem with reading without any lights, especially at night. This prototype allows someone to read anywhere while its dark.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(238, 'carlos hatchett ', 'The problem that it solves: having a door monitor that checks the bathroom everytime someone comes out or someone that locks the door everytime someone comes in and locks it back when they go out so we can see who us dirtying up the bathroom.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(239, 'Eric Smith Jr', 'It solves a problem for bad food/food waste', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(240, 'Faith Rosier', 'Parker', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(241, 'Nylese Hood', 'Lunch ladies wonâ€™t have to direct 5 people in the lunchroom\r\n', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(242, 'Anti- fogging wipes and spray', 'Fogging glasses ', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(243, 'Drew-Noah', 'To clean the fish tank bed', '../test_upload/Fish _ Invention Logbook.pdf', NULL, 'https://www.youtube.com/watch?v=zydnrAMzV8g&list=PLflrdCtVUPg8MUnR01xJA7fOlx5et-n3e&index=5', NULL, '6-8', '2022', 0, NULL),
(244, 'Demo Team', 'demo', '../test_upload/emuinvent_logbook.pdf', NULL, '../test_upload/sample_640x360.mp4', NULL, '6-8', '2022', 0, NULL),
(245, ' Amoni and Jason', '.', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(246, 'Autumn Muillins, Andrea Luna-Valdez, Summer Leedy, Breanna Uribe.', 'The problem that it solves:The food flipper solves the problem of burning your food on the stove. The food flipper is a great way to flip pancakes, grilled cheeses, eggs, steaks and burgers. ', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(248, 'Autumn Pernell', 'Racial Discrimmination in Face Recognition Technology', NULL, NULL, NULL, NULL, '9-12', '2022', 0, NULL),
(249, 'Shaker Waker ', 'An alarm system that solves oversleeping. In attaches under a bed to make the bed vibrate and wake you up so you can be to things on time.  ', '../test_upload/LOGBOOK-Shakey Wakey.pdf', NULL, 'https://www.youtube.com/watch?v=JFGRLrbMG7I', NULL, '6-8', '2022', 0, NULL),
(250, 'Beeping buddy', 'TBD', NULL, NULL, 'https://www.youtube.com/watch?v=bE1jdCplHdY', NULL, '6-8', '2022', 0, NULL),
(251, 'DemoTeam', 'Demo Team Project', NULL, NULL, NULL, NULL, '', '2022', 0, NULL),
(252, 'test2024', 'testing2024', '957259-downloadsher.png', NULL, '464171-bandicam 2023-03-22 19-58-43-384.mp4', NULL, '9-12', '2024', 1, 'pakistan'),
(253, 'ECA Team1 Project', 'This is ECA first dummy project', '522059-Industry_40_Future_of_Productivity.pdf', NULL, '431174-FaizLastMushaira.mp4', NULL, '9-12', '2024', 0, 'pakistan'),
(255, 'Forestech', 'Objective:\r\nCreate a comprehensive Forest Monitoring System utilizing IoT technologies to monitor and analyze various environmental parameters crucial for forest health. The system integrates sensors, microcontrollers, and communication modules to collect and transmit real-time data to a central server, providing valuable insights for forest management.\r\n\r\nComponents:\r\n\r\nArduino Mega 2560 (Master):\r\n\r\nActs as the central hub for data aggregation and communication.\r\nInterfaces with various sensors and modules.\r\nEstablishes communication with the ESP8266 module using the TCA9548A I2C multiplexer.\r\nESP8266 (Slave):\r\n\r\nResponsible for wireless communication and data transmission.\r\nConnects to the Arduino Mega 2560 via I2C.\r\nSends collected data to a cloud server for remote monitoring.\r\nNeo6MV2 GPS Module:\r\n\r\nProvides real-time geographical coordinates, enabling accurate location tracking.\r\nEssential for monitoring forest areas and tracking changes over time.\r\n25DCV Solar Panel with 25-5DCV Buck Converter:\r\n\r\nPowers the system using solar energy, ensuring sustainability.\r\nThe buck converter regulates voltage to meet the power requirements of the components.\r\nAnalog Fire Sensor:\r\n\r\nDetects the presence of fire or smoke in the monitored area.\r\nTriggers alerts for immediate response in case of a potential forest fire.\r\nAnalog MQ-2 Gas Sensor:\r\n\r\nMonitors air quality by detecting various gases, including methane and carbon monoxide.\r\nHelps identify potential sources of pollution or gas leaks.\r\nWater-Level Sensor:\r\n\r\nMeasures the water level in nearby rivers or water bodies.\r\nAids in assessing the water resources available for firefighting or sustaining wildlife.\r\nSoil Moisture Sensor:\r\n\r\nMeasures soil moisture content to assess forest ground conditions.\r\nProvides data for better understanding of soil health and potential drought conditions.\r\nESP32 Camera Module:\r\n\r\nCaptures images or video footage of the monitored area.\r\nUseful for visual inspection, wildlife monitoring, and identifying potential threats.\r\nFunctionality:\r\n\r\nData Acquisition:\r\n\r\nSensors continuously collect data on GPS coordinates, temperature, humidity, gas levels, soil moisture, and water levels.\r\nWireless Communication:\r\n\r\nArduino Mega communicates with the ESP8266 using I2C for efficient data transfer.\r\nESP8266 transmits collected data to a cloud server through Wi-Fi for remote accessibility.\r\nAlert System:\r\n\r\nTriggers alerts in case of abnormal sensor readings, such as high gas levels or a sudden drop in soil moisture.\r\nNotifies relevant authorities about potential fire outbreaks.\r\nRemote Monitoring:\r\n\r\nData is stored in a cloud database, allowing stakeholders to monitor forest conditions remotely through a web or mobile application.\r\nEnergy Efficiency:\r\n\r\nSolar panel and buck converter ensure continuous power supply, making the system sustainable and eco-friendly.\r\nBenefits:\r\n\r\nEarly detection of forest fires and potential threats.\r\nReal-time monitoring of environmental conditions for better forest management.\r\nData-driven insights for informed decision-making.\r\nMinimizes manual intervention by automating data collection and transmission.\r\nPotential Enhancements:\r\n\r\nIntegration of machine learning algorithms for predictive analysis.\r\nImplementation of additional sensors for a more comprehensive dataset.\r\nDevelopment of a user-friendly dashboard for enhanced data visualization.\r\nThis IoT Forest Monitoring System provides a robust solution for safeguarding forests, ensuring timely response to environmental changes, and promoting sustainable forest management practices.', '535944-Simrah, Ayan, Huzaifa and Taha Deforestation Logbook 2023S.pdf', NULL, 'https://youtu.be/P8vygy9_Yd0', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(259, 'Water Savers', 'In this project we would work upon how we could save water from being polluted as it is an important resource.', '264167-Water Pollution.docx', NULL, 'https://youtu.be/URs2KzBeQmA', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(260, 'hilalteam', 'testing', '607701-2222.jpg', NULL, 'https://www.youtube.com/watch?v=PtQiiknWUcI&list=WL&index=1', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(263, 'EcoBin', 'EcoBin redefines waste management by harnessing IoT and machine learning capabilities. Featuring a sophisticated camera and sensors, it efficiently categorizes paper, plastic, metal, and glass waste. Powered by Python and deep learning models, EcoBin autonomously guides each item to its appropriate bin, optimizing recycling workflows. Supported by a user-friendly mobile app developed on Flutter and integrated with Firebase analytics, ', '378086-Pollution caused by inefficient waste management (2).docx', NULL, 'https://www.youtube.com/watch?v=a4w8AAH2mcQ', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(264, 'Learn & Earn Hub', 'Learn & Earn Hub is an innovative online platform dedicated to empowering teenagers by connecting them with valuable opportunities for skill development and earning. This platform serves as a dynamic bridge, linking motivated teens with reputable companies eager to collaborate on real-world projects. Learn & Earn Hub ensures the legitimacy of all participants, creating a secure environment for meaningful interactions. Companies can effortlessly post projects, manage collaborations, and engage with talented teens, while students gain access to a diverse array of projects, apply their skills, and track their progress seamlessly. Learn & Earn Hub is poised to become the ultimate destination, fostering a vibrant community where learning meets earning for the next generation of skilled individuals.', '115776-Learn & Earn Hub (Haniya n Abaan ) Logbook 2023S (1).pdf', NULL, 'https://youtu.be/8LipOsSjck8', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(266, 'Cyber-Safe', 'Cyber-Safe Is a app we made to bring impact on the increasing cases of cyber bullying. our app consists two main features first a case reporter and second the check on screen option, in the case report feature we simple take every detail from the user of the case and then report it to a action taker email in the second check on screen feature we keep an eye on the screen and take snips of anything that we see suspicious or irrelevant and then notify the user about it. this app cant remove cyber bullying but can help it decrease.', '258398-CyberBullying.pdf', NULL, 'https://youtu.be/P212s4LMBNY', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(271, 'BotaniScan', 'BotaniScan is an AI based application that can identify grape,apple and tomato plants by their leaves, detect leaf spot disease, and estimate the leaf water level in these plants using computer vision and machine learning techniques. This project will serve as a valuable tool for both hobbyist gardeners and professional botanists by providing real time information about these plants. Using cutting-edge technology, this software enables users to capture a single image of a plant using a camera connected through Arduino, and instantly receive accurate information about the presence of diseases.', NULL, NULL, 'https://youtu.be/mPMywAb3864', NULL, '9-12', '2024', 0, 'pakistan'),
(273, 'Breath of Fresh Air: Crafting a Portable Plant-Powered Air Purifier', '\"Breath of Fresh Air: Crafting a Portable Plant-Powered Air Purifier\" is a hands-on project for grade 9 students, combining science, technology, and creativity. Students design and build a portable air purifier integrating air-purifying plants to address environmental concerns. Through research, prototyping, and testing, students explore filtration methods, plant selection, and sustainable materials, fostering teamwork and problem-solving skills while promoting environmental awareness.', '501011-EMUINVENT LOGBOOK.pdf', NULL, 'https://youtu.be/2y9vkJkhTy0?si=3E1gyBtsmB7fRd-u', NULL, '9-12', '2024', 0, 'pakistan'),
(274, 'Transportation pollution ', 'Our project is about the pollution caused by transportation we have made a carpooling app that will help to reduce pollution caused by car engines so people will use fewer cars and join other driver', '378072-Transportation Pollution Logbook 2023S.pdf', NULL, 'https://youtu.be/EIPs_VbsRc8', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(275, 'Automated rotimaker', 'An automatic roti maker is a kitchen appliance designed to simplify the process of making rotis, a type of flatbread. Typically, it consists of a press mechanism that flattens dough into circular shapes and a gas heating element that cooks the rotis. Users place dough balls into the machine, which then automatically presses and cooks them, resulting in evenly cooked rotis without the need for manual rolling or flipping. These devices can save time and effort in the kitchen, especially for those who make rotisÂ frequently.', '104239-LOGBOOK OF AUTOMATED ROTIMAKER.docx', NULL, '663012-PRESENTATION.mp4', NULL, '9-12', '2024', 0, 'pakistan'),
(276, 'ECO VENTURE FLOW PRO', 'The idea of this project is to provide controlled pressure and volume breathing by a low cost ventilator using an AMBU bag, Arduino NANO and servo motor.', '668402-Team Vent NEDS Logbook 2023S.pdf', NULL, 'https://drive.google.com/drive/folders/1A708GkDDokbQaOsPcb79hSRtPSsPraCo?usp=drive_link', NULL, '9-12', '2024', 0, 'pakistan'),
(277, 'Heart Buddy Project', 'Meet Heart Buddy, our cool project. It is a portable ECG device with an Arduino UNO that keeps tabs \r\non your heart wherever you go. What makes it awesome? Well, it\'s not just a \r\ngadget. We will have a handy mobile app too! The device will check your \r\nheart\'s beat, and the app will turn it into easy-to-understand information. So, \r\nyou will not just watch your heart; you will really get what it\'s saying.\r\n', '351321-Heart Buddy Project Logbook NEDS.pdf', NULL, 'https://youtu.be/K4Szv80juXE', NULL, '9-12', '2024', 0, 'pakistan'),
(278, 'Scholar Boost', 'Our aim at Scholar Boost is to bridge educational disparities by providing a dedicated crowdfunding platform exclusively for education needs. Through transparency and collective generosity, we strive to create a network where individuals, organisations, and communities come together to uplift and transform lives, one educational opportunity at a time.', '947876-Scholar Boost (Access to Education)  Logbook 2023.pdf', NULL, 'https://www.youtube.com/watch?v=83c3SwpyDBY&ab_channel=Moeed', NULL, 'Utech-2', '2024', 0, 'pakistan'),
(279, 'Brain Controlled Wheelchair', 'This project aims to design and develop a brain-controlled wheelchair system that enables individuals with physical disabilities to navigate their environment independently and efficiently using their brain signals as input.', '664178-WheelChair.docx', NULL, 'https://youtu.be/8-xf3OuienY', NULL, '9-12', '2024', 1, 'pakistan'),
(280, 'Outdoor Cat feeder', 'A machine that detects the sound of a cat and lifts the lid off of a bowl of cat food. Makes it so that other animals like opossums and squirrels do not eat the food set out for the outdoor cat.', '613426-Outdoor Cat Feeder (online).pptx', NULL, 'https://youtu.be/Z6vxJwyZFYg', NULL, '6-8', '2024', 0, 'pakistan'),
(281, 'turtle history', 'using a turtle module to make it easier to go back home instead of searching through endless history or searching up the address.', '736626-Philip W_EMUiNVENT-TECHaTHON.pptx', NULL, 'https://youtu.be/8BASh5D16Ds', NULL, '3-5', '2024', 0, 'pakistan'),
(284, 'Brain Controlled Wheelchair', 'This project aims to design and develop a brain-controlled wheelchair system that enables individuals with physical disabilities to navigate their environment independently and efficiently using their brain signals as input.', '857887-BCW_FINALREPORT.pdf', NULL, 'https://youtu.be/PT3oPKS2pzE', NULL, '9-12', '2024', 0, 'pakistan'),
(285, 'yyy', 'lklkl', NULL, NULL, NULL, NULL, '6-8', '2024', 1, 'USA'),
(286, 'oook', 'kkkk', NULL, NULL, NULL, NULL, '6-8', '2024', 1, 'USA'),
(287, 'yyy', 'rdrdrdr', NULL, NULL, NULL, NULL, '9-12', '2024', 0, 'USA'),
(288, 'Vape and Pod Project 2', 'Vaping and pod use have surged among teenagers, often driven by social pressure and the desire to fit in. Though marketed as safer than smoking, these devices pose serious health risks, including nicotine addiction and lung damage. Raising awareness and offering support can help curb this growing trend among youth.', NULL, NULL, NULL, NULL, '9-12', '2024', 1, 'pakistan'),
(289, 'Anxiety', 'Anxiety', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(290, 'Vape and Pod Project 2', 'Vaping and pod use have surged among teenagers, often driven by social pressure and the desire to fit in. Though marketed as safer than smoking, these devices pose serious health risks, including nicotine addiction and lung damage. Raising awareness and offering support can help curb this growing trend among youth.', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(291, 'Fear of Failure', 'Fear of failure and not achieving good grades (many students might feel anxious and mental health will be affected )\r\n', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(292, 'Excess Screen Time', 'Spending too much time on screens, like watching cartoons on mobile devices, causes harmful rays from screens to affect their eyes. Spending excessive time on computers also has negative effects on their health, eyes,Â andÂ sleep.', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(293, 'Olg Age Engagment', 'Older adults possess valuable life experience, skills, and knowledge. However, they often face social isolation, marginalization, and decreased opportunities for engagement.', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(294, 'Vape and Pod Project 1', 'Vaping and pod use have surged among teenagers, often driven by social pressure and the desire to fit in. Though marketed as safer than smoking, these devices pose serious health risks, including nicotine addiction and lung damage. Raising awareness and offering support can help curb this growing trend among youth.', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(295, 'Online Fraud', 'Online fraud:( poses significant risks to individuals and businesses, leading to financial losses, identity theft, and erosion of trust in digital transactions.)\r\n', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(296, 'Digital Map', 'Digital map for better navigation', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(297, 'Food & Water Waste Management', 'Food Waste: A lot of food is wasted every day. In restaurants and homes, food is often thrown away, which leads to the wastage of resources.\r\nWater Scarcity: In many areas, people donâ€™t have access to clean drinking water. This problem is worsening because resources are decreasing while the need is increasing. Due to this water shortage, it is becoming increasingly difficult to manage, and an associated issue is that germs in the water are making the environment unhealthy.\r\n', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan'),
(298, 'Short News Article', 'Short news article', NULL, NULL, NULL, NULL, 'Utech-2', '2024', 0, 'pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(10) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student_first_name` varchar(100) DEFAULT NULL,
  `student_last_name` varchar(100) DEFAULT NULL,
  `student_grade` varchar(100) DEFAULT NULL,
  `student_school_name` varchar(1000) DEFAULT NULL,
  `student_school_district` varchar(100) DEFAULT NULL,
  `student_school_county` varchar(100) DEFAULT NULL,
  `t_shirt_size` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `photo_consent` int(11) DEFAULT NULL,
  `photo_consent_form` varchar(1000) DEFAULT NULL,
  `video_exp_link` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `team_id`, `student_id`, `student_first_name`, `student_last_name`, `student_grade`, `student_school_name`, `student_school_district`, `student_school_county`, `t_shirt_size`, `deleted`, `photo_consent`, `photo_consent_form`, `video_exp_link`) VALUES
(330, 229, 256, 'Suhani', 'D', '12', 'Saline High', 'District', NULL, NULL, 0, NULL, NULL, NULL),
(332, 205, 261, 'man', 'Dixit', '6', 'WAYE', 'WAYE', NULL, 'Youth Small', 0, 0, NULL, ''),
(333, 205, 260, 'hary', 'Mac', '6', 'School', 'District', NULL, NULL, 0, NULL, NULL, NULL),
(335, 215, 291, 'Caitlyn', 'OKeeffe', 'Select Student Grade', 'Saline Elementary School', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(336, 208, 290, 'Julianne', 'Saims', '7', 'Saline Middle School', 'Saline Area Schools', NULL, 'Adult Medium', 0, 0, NULL, ''),
(337, 211, 289, 'Logan', 'Rogers', '7', 'heritage', 'saline', NULL, 'Youth Large', 0, 0, NULL, ''),
(338, 207, 288, 'Mayur', 'Reddy', '7', 'Saline Middle School', 'Saline', NULL, 'Youth Small', 0, 0, NULL, ''),
(339, 209, 287, 'Joshua', 'Priebe', 'Select Student Grade', 'Saline Middle', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(340, 207, 286, 'Ethan', 'Moore', '8', 'Saline Middle School', 'Saline', NULL, 'Youth Small', 0, 0, NULL, ''),
(341, 212, 285, 'Robert', 'Mooney', '6', 'Saline Middle School', 'Saline', NULL, 'Adult Small', 0, 0, NULL, ''),
(345, NULL, 281, 'Lilly', 'Jacobs', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(346, 207, 280, 'Carmen', 'Harnish', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(348, 209, 278, 'Travis', 'Finch', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(349, NULL, 277, 'Samantha', 'DeVries', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(350, 211, 276, 'Lucas', 'Baird', '7', 'Saline Middle School', 'Saline Schools', NULL, 'Adult Small', 0, 0, NULL, ''),
(351, 208, 275, 'Abby', 'Austin', '8', 'Saline Middle School', 'Saline', NULL, 'Adult Medium', 0, 0, NULL, ''),
(352, 217, 274, 'Andrew', 'Xu', '3', 'Saline Elementary', 'Saline, MI', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(353, NULL, 273, 'Veronica', 'Woods', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(354, 218, 272, 'Olivia', 'Tiani', '3', 'Heritage ', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(355, 216, 271, 'Max', 'Tiani', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(356, 216, 270, 'Liam', 'Spencer', '5', 'Heritage Elementary', 'Saline', NULL, 'Youth Large', 0, 1, NULL, ''),
(357, 214, 269, 'Makayla', 'Sitarski', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(358, 216, 268, 'Ingrid', 'Schmitt', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(359, 216, 267, 'Grant', 'Schmitt', '3', 'Saline Elementary', 'Slaine, MI', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(360, 214, 266, 'Quinn', 'Myers', '4', 'Saline Elementary', 'Saline, MI', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(361, 214, 265, 'Allison', 'Miller', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(362, 215, 264, 'Grace', 'Leese', '2', 'Saline Elementary School', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(365, 207, 292, 'Nicholas', 'Petrovic', 'Select Student Grade', 'Saline middle school', 'Saline', NULL, 'Adult Small', 0, 1, NULL, ''),
(366, 211, 293, 'Gabe', 'Adams', '6', 'Saline Middle School', 'Saline Schools', NULL, 'Youth Large', 0, 0, NULL, ''),
(368, 212, 295, 'Lucy', 'Franckowski', '6', 'Saline Middle School', 'saline school district', NULL, 'Youth Large', 0, 0, NULL, ''),
(371, NULL, 299, 'henry', 'L', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(373, NULL, 301, 'Henry', 'Lizotte', '8', 'Saline Middle School', 'Saline Area Schools', NULL, 'Youth Large', 0, 0, NULL, ''),
(374, NULL, 300, 'henry', 'l', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(375, 213, 306, 'Nolan', 'Petrovic', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(376, 218, 305, 'ben', 'adams', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(377, 213, 304, 'Madilyn', 'Brigantic', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(378, 213, 303, 'noelle', 'harnish', '3', 'Saline Elementary', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(379, 213, 302, 'lauren', ' brigantic', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(380, 214, 307, 'Lily', 'Baird', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(381, 219, 309, 'adrian', 'rivas-murillo', '11', 'Ypsi High', 'YCS', NULL, 'Adult Medium', 0, 0, NULL, ''),
(382, 219, 308, 'keith', 'dunson', '11', 'Ypsi High', 'YCS', NULL, 'Youth Medium', 0, 0, NULL, ''),
(383, 220, 311, 'Tomia', 'Del Radio', '10', 'Ypsilanti High', 'Ypsilanti', NULL, 'Youth Medium', 0, 0, NULL, ''),
(384, 222, 310, 'Aliana', 'Black', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(385, 219, 312, 'Trenton', 'Jean-Gilles', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(386, 221, 314, 'Amirreyieh', 'cameron', '11', 'Ypsi High', 'YCS', NULL, 'Adult Small', 0, 0, NULL, ''),
(387, 221, 313, 'stephon', 'Bruce', 'Select Student Grade', 'Ypsi High', 'Ypsi', NULL, 'Select Student Shirt Size', 0, 0, NULL, 'https://www.youtube.com/watch?v=cNdopyfOsmU'),
(388, 223, 315, 'Mekah', 'Smith', '10', 'Ypsi High', 'YCS', NULL, 'Youth Small', 0, 0, NULL, ''),
(389, 226, 317, 'ert', 'dfg', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(390, NULL, 320, 'Antoino', 'Black', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(391, NULL, 327, 'Promise', 'Turman', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(392, NULL, 321, 'Aubria', 'Smith', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(393, 242, 329, 'Shakira', 'Sakina', '9', 'Ypsilanti High', 'Ypsilanti', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(394, NULL, 325, 'Jai_wan', 'Browning', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(395, 241, 326, 'Nylese', 'Hood', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(396, 242, 330, 'Zayan', 'Chughtai', '10', 'YH', 'Ypsi', NULL, 'Adult Medium', 0, 0, NULL, ''),
(397, NULL, 328, 'Roy', 'Tripp', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(398, 240, 324, 'Faith', 'Rosier', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(399, 238, 322, 'Carlos', 'Hatchett', 'Select Student Grade', 'Ypsilanti High School', 'Ypsi', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(400, 239, 323, 'Eric ', 'Smith', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(401, 231, 332, 'Jonathan ', 'Keeler', '5', 'Creekside Intermediate School', 'Dexter', NULL, 'Youth Large', 0, 0, '../test_upload/Photo-video waiver form1 (1).pdf', '../test_upload/video1964176400.mp4'),
(403, 228, 319, 'Rohit', 'Mahesh', '9', 'Salem High School', 'PCCS', NULL, 'Adult Small', 0, 0, '', 'https://youtu.be/UbpMToHEPF0'),
(404, 230, 270, 'Liam', 'Spencer', '4', 'Heritage Elementary', 'Saline', NULL, 'Youth Large', 0, 1, NULL, NULL),
(405, 234, 349, 'Hafiz Muhammad Shafay', 'Shakeel', '10', 'Convent Grammer School', 'West', NULL, 'Youth Large', 0, 0, NULL, ''),
(406, 234, 348, 'Muhammad Bilal', 'Arman', '12', 'Government degree science and commerce college', 'East', NULL, 'Youth Large', 0, 0, NULL, ''),
(407, 233, 346, 'Furqan', 'Abid', '5', 'Civil Aviation authority (CAA) ', 'Karachi,Pakistan', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(408, 233, 347, 'Affan', 'A', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(409, 235, 344, 'Anoosha', 'A', '12', 'Rehman children school', 'N/A', NULL, 'Adult Small', 0, 0, NULL, ''),
(410, 235, 345, 'Hammad', 'Shamim', '10', 'Ibrahim Ali sec. school', 'N/A', NULL, 'Youth Large', 0, 0, NULL, ''),
(411, 236, 343, 'Afifa', 'Akber', '9', 'Nasra School', 'Malir Karachi', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(412, 236, 342, 'Areesha', 'A', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(413, 232, 341, 'Zubia', 'Aslam', '4', 'S.M Hafiz-ur-Rehman', 'Karachi', NULL, 'Youth Small', 0, 0, NULL, ''),
(414, 232, 340, 'Eman', 'Shakir', '4', 'S.M Hafiz-ur-Rehman', 'Karachi', NULL, 'Youth Small', 0, 0, NULL, ''),
(415, 232, 339, 'Arham', 'Arman', '5', 'Rehman Children School', 'Karachi', NULL, 'Youth Small', 0, 0, NULL, ''),
(416, 250, 366, 'Brooklin', 'A', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(417, 250, 365, 'Ruth', 'A', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(418, NULL, 364, 'Kaynan', 'Hiatt', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(419, NULL, 363, 'Landan', 'Wilson', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(420, NULL, 362, 'Myah', 'Allen', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(421, NULL, 361, 'Jayden', 'Walker', 'Select Student Grade', 'Ypsi Middle', 'Ypsi', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(422, 212, 360, 'Luke', 'Franckowski', '7', 'Saline Middle School', 'Saline', NULL, 'Adult Small', 0, 0, NULL, ''),
(423, NULL, 359, 'Benjamin', 'Adams', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(424, 217, 358, 'Lloyd', 'Jacobs', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(425, 237, 398, 'Neil', 'Jain', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(426, NULL, 397, 'Wilmer', 'Andino Cantarero', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(427, NULL, 396, 'Tyrese', 'Rawls', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(428, NULL, 395, 'Terrell', 'Livingston', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(429, NULL, 393, 'Summer', 'Leedy', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(430, NULL, 392, 'Sophia', 'Madigan', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(431, NULL, 391, 'Saleha', 'Safdari', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(432, NULL, 390, 'Naima', 'Lewis', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(433, NULL, 389, 'Mikayla', 'Morris-Perry', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(434, NULL, 388, 'Michael', 'Hernandez Duque', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(435, NULL, 387, 'Mia', 'Jemison', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(436, NULL, 386, 'Marrell', 'Brown', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(437, NULL, 385, 'Lamauria', 'Goslee', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(438, NULL, 384, 'Kyerre', 'Fly', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(439, NULL, 383, 'Ky_shaun', 'Larsh-South', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(440, NULL, 382, 'Khalil', 'Fly', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(441, NULL, 381, 'Joseph', 'Smith', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(442, NULL, 380, 'Jason', 'Beag', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(443, NULL, 379, 'Janiya', 'Muttilib', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(444, NULL, 378, 'Giovanni', 'Miller', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(445, NULL, 377, 'Fatoumata', 'Kaba', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(446, NULL, 376, 'Eleanor', 'Madigan', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(447, NULL, 375, 'Deshawn', 'Addison', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(448, NULL, 373, 'Breanna', 'Uribe', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(449, NULL, 374, 'De_Shaun', 'Coleman', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(450, NULL, 372, 'Brandon', 'Dixon', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(451, NULL, 371, 'Ava', 'Dunson', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(452, 248, 370, 'Autumn ', 'Pernell', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(453, 246, 369, 'Autumn', 'Mullins', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(455, 245, 367, 'Amoni', 'M_munga Useni', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(456, 243, 411, 'Drew', 'Decaro', 'Select Student Grade', 'Saline Elementary School', 'Saline', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(457, NULL, 409, 'Andrew', 'Adams', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(458, NULL, 408, 'Angela', 'Aljaradi', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(459, NULL, 407, 'Elijah', 'Staimie', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(460, NULL, 406, 'Reth', 'Glisper', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(461, NULL, 405, 'Karmello', 'Scott', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(462, NULL, 404, 'Adreayn', 'A', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(463, NULL, 403, 'Markel', 'Deniels', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(464, NULL, 402, 'Angeli', 'Horne', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(465, NULL, 401, 'Sayvon', 'Djima', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(466, 243, 412, 'Noah Joseph', 'Millkey', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(467, 209, NULL, 'Drew', 'DeCaro', 'Select Student Grade', 'Saline Middle School', 'Saline', NULL, 'Select Student Grade', 0, NULL, NULL, NULL),
(468, 209, NULL, 'Noah', 'Millkey', '', 'Saline Middle School', 'Saline', '7', 'Select Student Grade', 0, NULL, NULL, NULL),
(469, 229, 331, 'Hemanth', 'Tavane', '8', 'School', 'District', NULL, 'Select Student Shirt Size', 0, 0, NULL, ''),
(470, NULL, 263, 'Grant', 'Jacobs', '9', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(471, NULL, 413, 'Aarna', 'Desai', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(472, 244, 418, 'demo', 'preethi', '5', 'DSCHOOL', 'SD', NULL, 'Youth Small', 0, 0, '../test_upload/Demo.pdf', ''),
(473, NULL, 417, 'SSohail', 'Aahmed', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(474, 249, 288, 'Mayur', 'Reddy', '7', 'Saline Middle School', 'Saline', NULL, 'Youth Small', 0, 0, NULL, NULL),
(477, 251, 252, 'Demo', 'Student', '3', 'SSS', 'DDD', NULL, NULL, 0, NULL, NULL, NULL),
(478, NULL, 449, 'Ayan', 'M. Zeeshan', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(479, NULL, 448, 'Ayan', 'M. Zeeshan', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(481, 253, 488, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(482, NULL, 449, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(483, NULL, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(485, NULL, 517, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(486, NULL, 512, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(487, 259, 510, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(488, 260, 532, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(489, 260, 364, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(490, NULL, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(491, NULL, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(496, NULL, 538, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(497, 263, 540, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(498, 263, 513, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(499, 264, 518, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(500, 264, 520, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(501, 259, 544, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(502, NULL, 549, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(503, 266, 523, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(504, 266, 526, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(505, NULL, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(506, NULL, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(507, NULL, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(508, NULL, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(509, NULL, 569, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(510, NULL, 569, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(511, NULL, 541, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(512, 271, 569, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(513, 271, 579, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(514, NULL, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(515, NULL, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(516, 271, 572, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(517, 273, 596, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(518, 271, 575, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(520, 274, 512, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(521, 255, 514, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(522, 255, 515, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(523, 255, 538, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(524, 274, 549, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(525, NULL, 541, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(526, NULL, 548, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(527, NULL, 550, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(528, NULL, 551, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(529, NULL, 584, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(530, NULL, 586, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(531, 275, 548, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(532, 275, 541, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(533, 275, 550, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(534, 275, 551, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(535, 275, 584, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(536, 275, 586, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(537, 273, 594, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(538, 273, 590, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(539, 273, 592, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(540, 273, 597, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(541, 276, 573, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(542, 276, 576, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(543, 276, 581, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(544, 274, 604, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(545, 277, 566, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(546, 277, 542, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(547, 277, 567, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(548, 277, 577, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(549, 277, 580, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(550, 278, 517, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(551, 278, 519, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(552, 278, 537, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(553, NULL, 559, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(554, NULL, 553, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(555, NULL, 561, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(556, NULL, 562, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(557, NULL, 563, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(558, NULL, 570, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(559, NULL, 571, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(560, NULL, 564, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(561, NULL, 557, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(562, NULL, 568, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(563, 280, 631, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(564, 281, 630, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(568, NULL, 662, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(569, 284, 571, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(570, 284, 553, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(571, 284, 557, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(572, 284, 559, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(573, 284, 561, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(574, 284, 562, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(575, 284, 563, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(576, 284, 564, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(577, 284, 570, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(578, 284, 662, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(579, NULL, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(580, NULL, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(581, 287, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(582, 287, 256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(583, NULL, 680, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(584, NULL, 677, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(585, NULL, 679, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(586, 289, 683, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(587, 289, 681, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(588, 289, 682, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(589, 290, 677, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(590, 290, 679, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(591, 290, 680, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(592, 291, 685, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(593, 291, 684, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(594, 291, 686, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(595, 292, 688, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(596, 292, 678, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(597, 292, 687, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(598, 293, 690, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(599, 293, 689, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(600, 294, 695, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(601, 294, 694, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(602, 294, 697, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(603, 295, 698, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(604, 295, 510, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(605, 296, 701, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(606, 296, 700, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(607, 296, 702, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(608, 295, 699, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(609, 295, 703, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(610, 297, 704, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(611, 297, 526, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(612, 298, 707, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(613, 298, 706, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(614, 298, 705, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(615, 297, 710, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member_1`
--

CREATE TABLE `tbl_team_member_1` (
  `id` int(10) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `student_first_name` varchar(100) DEFAULT NULL,
  `student_last_name` varchar(100) DEFAULT NULL,
  `student_grade` varchar(100) DEFAULT NULL,
  `student_school_name` varchar(1000) DEFAULT NULL,
  `student_school_district` varchar(100) DEFAULT NULL,
  `student_school_county` varchar(100) DEFAULT NULL,
  `t_shirt_size` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_mentor`
--

CREATE TABLE `tbl_team_mentor` (
  `id` int(10) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `school_district` varchar(1000) NOT NULL,
  `school_name` varchar(1000) NOT NULL,
  `school_county` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `judge_confirm` varchar(10) DEFAULT NULL,
  `interested` varchar(10000) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `is_approved` int(11) DEFAULT 0,
  `deleted` int(11) DEFAULT 0,
  `Year` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `user_type`, `category`, `judge_confirm`, `interested`, `address`, `is_approved`, `deleted`, `Year`, `profile_pic`) VALUES
(730, 'SuperUser', 'SuperUser', '3131232121', 'hilal123@gmail.com', '123', 'SuperUser', NULL, 'Y', NULL, NULL, 1, 0, '2024', NULL),
(731, 'student', 'test', '231312312', 'hilalstudent123@gmail.com', '123', 'Student', NULL, NULL, NULL, NULL, 1, 0, '2024', NULL),
(732, 'Mentor', 'test', '231312312', 'hilalmentor123@gmail.com', '123', 'Mentor', NULL, NULL, NULL, NULL, 1, 0, '2024', NULL),
(733, 'Judge', 'test', '231312312', 'hilalJudge123@gmail.com', '123', 'Mentor', NULL, NULL, NULL, NULL, 1, 0, '2024', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tt`
--

CREATE TABLE `tt` (
  `project_team_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `power_supply` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `log_book` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `video_pitch` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_grade` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_school_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_school_district` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_school_county` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `t_shirt_size` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mentor_first_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mentor_last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mentor_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tt`
--

INSERT INTO `tt` (`project_team_name`, `project_description`, `power_supply`, `category`, `log_book`, `video_pitch`, `student_name`, `student_grade`, `student_school_name`, `student_school_district`, `student_school_county`, `t_shirt_size`, `mentor_first_name`, `mentor_last_name`, `mentor_email`) VALUES
('Recycled Truss Reinforced Road', 'Using Recyclable plastics as part of road construction', 'N', '9-12', 'test_upload/Teodoru:Williams.pdf', 'https://www.youtube.com/watch?v=pfb-gWLmZxI', 'Gabriella Williams,Gabi Teodoru', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,M', 'Tom', 'Pachera\r', 'pachera@aaps.k12.mi.us'),
('Phsyics simulator', 'How computers can help teach physics concepts.', 'Y', '9-12', 'test_upload/Gankin:Park.pdf', 'https://www.youtube.com/watch?v=_PKrHbgpuZM', 'Aaron Gankin,Jonathan Park', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,XL', 'Tom', 'Pachera\r', 'pachera@aaps.k12.mi.us'),
('Low-Cost, 3D Printed Hand', 'Design and Build for a 3D Printer', 'N', '9-12', 'test_upload/Bradshaw:Asad.pdf', 'https://youtu.be/7LHvxti1xJ8', 'Hashim Asad,Parker Bradshaw', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,M', 'Tom', 'Pachera\r', 'pachera@aaps.k12.mi.us'),
('Foldable Mobility Walker (FEET)', 'Creating a walker that is highly portable.', 'N', '9-12', 'test_upload/Rupp:Mendoza.pdf', 'https://www.youtube.com/watch?v=8jxhgxgYkfQ', 'Anthony Mendoza,Matt Rupp', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,L', 'Tom', 'Pachera\r', 'pachera@aaps.k12.mi.us'),
('Recycled Plastic Textile (RePlasto)', 'Creating textiles from recyclable materials', 'N', '9-12', 'test_upload/RePlasto IC project.pdf', ' https://youtu.be/6JUlqHDij7w ', 'Dara Geva,Alaina Heetderks', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('App Connected Voltage Divider', 'Control your electrical signals remotely.', 'Y', '9-12', NULL, 'https://youtu.be/iFVjLhxtZBg', 'Wesley Barron', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'Small', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('Detachable Sole Running Shoe', 'Design and Test a running shoe with a removable sole', 'N', '9-12', 'test_upload/Evans:Hyde.pdf', 'https://www.youtube.com/watch?v=Ia_IYFZTCFU', 'Daniel Evans,Stevie Hyde', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'L,M', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('The Weigh Can', NULL, 'Y', '9-12', 'test_upload/Wang:ShiomiJensen.pdf', 'https://www.youtube.com/watch?v=33y1251nxJk', 'Oliver Wang,Oskar Shiomi Jensen', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,L', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('Fast Braille Design', 'Students create a method for creating braille signage using rapid prototyping equipment', 'N', '9-12', 'test_upload/Kirchmeier:Leal:Zhang.pdf', 'https://www.youtube.com/watch?v=mSGI5ySHuV4', 'Emma Kirchmeier,Wendi Zhang,Susana Leal', '12,12,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'M,M,M', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('Saftey Shade', 'A safety tool for schools and offices to deter would be assailiants from causing harm.', 'N', '9-12', 'test_upload/Villalobos:Linville.pdf', 'https://youtu.be/vzmULbUfuVM', 'Brandon Linville,Freddy Villalobos', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Record Player: Reused Electronics', 'A DiY Guide to recycling electrical components in a fun and exciting way', 'Y', '9-12', 'test_upload/hathaway:Darragh.pdf', 'https://youtu.be/j6Evd1aesY0', 'Iman Hathaway,Isaac Darragh', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Biofuel Jet Engine', 'Student exploration into constructing a jet engine which runs on biofuel', 'N', '9-12', 'test_upload/Eizadkhah:Sharma.pdf', 'https://youtu.be/RZloW-sAWqg', 'Bobak Eizadkhah,Ananya Sharma', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,Small', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Bike Prototype', 'Covered bike', 'N', '9-12', 'test_upload/IC notebook.pdf', 'https://www.youtube.com/watch?v=VzOKuR7R-uc', 'Shane Edson', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'XL', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Plant H2O Sitter', 'Automatic plant watering system that has mulitiple plant species settings', 'Y', '9-12', NULL, NULL, 'Langston Kitchen', '9', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'Small', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Solar Charger', 'Solar Charger with battery backup with USB port', 'Y', '6-8', NULL, NULL, 'Kendall Clavier,Sanna Sippola,Olivia Scherer,Charlena Jackson', '8,8,8,8', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne,Wayne', 'M,Small,Small,M', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Life Guard', 'Phone APP to contact emergency services', 'Y', '6-8', NULL, NULL, 'Sahara Senevirantne,Ava Debenedet,Sophia Marrs,Allieson Mayer', '8,8,8,8', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne,Wayne', 'Small,Small,Small,Small', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Trash Boat', 'Remote control boat to pick up trash in waterways', 'Y', '6-8', NULL, NULL, 'Josh Hepworth', '8', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'L', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Methane Detector', 'Greenhouse gas detector', 'Y', '6-8', NULL, NULL, 'Maya Kama,Michal Kama,Syver Bowles', '8,8,8', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'Small,Small,M', 'Bill', 'Campbell', 'campbellw@aaps.k12.mi.us'),
('Grip Rings', 'Grip rings are rubber rings that create a customizable grip on a drumstick to combat the effects of rain and sweat which diminish one\'s ability to control the drumstick.', 'N', '9-12', 'test_upload/Team Drum.pdf', 'https://youtu.be/xPDI6rpD4Cg\r\n', 'Katherine Ellis,Ben Kessler', '11,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'XL,M', 'Marty\r', 'Moreno\r', 'morenom@aaps.k12.mi.us'),
('Multipurpose Side Runner', 'A product that can be used as both a side runner for a truck/SUV and a storage container for large items.', 'N', '9-12', 'test_upload/Team Auto.pdf', 'https://youtu.be/YWSaLLm_eMQ\r\n', 'Ben Egelhof,Anna Kaganov,Bobby Feng,McDonough Dan', '12,10,11,10', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne,Wayne', 'M,Small,M,M', 'Marty\r', 'Moreno\r', 'morenom@aaps.k12.mi.us'),
('Collapse-o-Can', 'A collapsable outdoor garbage receptacle paired with a vertical, fan powered garbage chute that will elimanate excess garbage in urban areas.', 'N', '9-12', 'test_upload/Team Trash.pdf', 'https://www.youtube.com/channel/UCv2RJFL8Cu4e4oLsT9k7BRQ\r\n', 'Zach Pryor,Anthony Gibbons,Aidan Lee,Darayus Daboo', '11,11,11,11', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne,Wayne', 'L,L,M,M', 'Marty\r', 'Moreno\r', 'morenom@aaps.k12.mi.us'),
('Sunny Side Up', 'A product that uses visual stimuli to wake a person using a more natural process than traditional alarm clocks.', 'Y', '9-12', 'test_upload/Team Bed.pdf', 'https://youtu.be/CKEBFJVkKHI\r\n', 'Riley Goniwicha,Nolan McPherson,Vasil Vassilev,Ben Barish', '12,10,10,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne,Wayne', 'Small,M,Small,M', 'Marty\r', 'Moreno\r', 'morenom@aaps.k12.mi.us'),
('Team Charger', 'A product that prevents iPhone charger cords from breaking at the base.', 'N', '9-12', 'test_upload/Team Cable.pdf', 'https://youtu.be/SmMGrXVItrE\r\n', 'Austin Jacobs,Derrick Scurlock,Jackson Hall', '12,12,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'M,M,M', 'Marty\r', 'Moreno\r', 'morenom@aaps.k12.mi.us'),
('Prepa', 'An automatic cooking device', 'N', '9-12', 'test_upload/Log Book.pdf', 'https://www.youtube.com/watch?v=knBnx4OWf0k', 'Nick Kaipainen,Kenny Yue,Jacob Kelly', '12,12,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'L,XL,M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Leaf Me Alone', 'A mulit tool that expedites lawn clean up', 'N', '9-12', 'test_upload/Copy of S2 Logbook.pdf', 'https://www.youtube.com/watch?v=E7aE9odXJv4', 'Ben Zhao,Ben Zhang,Young Seo Lee', '12,12,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'L,Small,Small', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('EcoRinse', 'A system that seeks to minimize water waste in showers', 'N', '9-12', 'test_upload/Liz Li S2 Log Book.pdf', 'https://www.youtube.com/watch?v=23bJyvpfkcE', 'Liz Li', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'Small', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Cardboard ATM', 'Recycles Cardboard for Currency', 'N', '9-12', 'test_upload/Logbook- Darryl P and Edmond H.pdf', 'https://www.youtube.com/watch?v=LlP7ZcLg5oo', 'Darryl Phillips,Ed Hashem', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Magnet Power', 'A product that generates electricity with Magnents', 'N', '9-12', 'test_upload/Copy of  Log BookS2 -.pdf', 'https://www.youtube.com/watch?v=UVMIrHE8VEA', 'Allison Baker,Madison Bowers', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,Small', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('RTCA', 'Retractable Table Cover Attachment', 'N', '9-12', 'test_upload/Log Book .pdf', 'https://www.youtube.com/watch?v=hOWiRs7nwPM', 'Ryan Schulte,Kadin Sims', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'XL,L', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('RID', 'Respritory Illness Diagnosis Machine', 'N', '9-12', 'test_upload/Logbook.pdf', 'https://www.youtube.com/watch?v=czjaR8jcrJc', 'Rishi Hoskeri', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('AstroTrack', 'An approach to detect, recover, and characterize minor planets', 'N', '9-12', 'test_upload/Logbook Invention Convention 2020 Anirudh Cowlagi.pdf', 'https://www.youtube.com/watch?v=_KMu5nGw0Cw', 'Ani Cowlagi', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('UrbaGrow', 'Modular Urban Growing House', 'N', '9-12', 'test_upload/Logbook (1).pdf', 'https://www.youtube.com/watch?v=ESQK3_9GvUI', 'Joey Ryan,Zolan Baptista', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,L', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('The Dumper Helper', 'Dumps objects/material from the bed of a truck', 'N', '9-12', 'test_upload/Log Book (1).pdf', 'https://www.youtube.com/watch?v=mPhC7GJeblI', 'Noah Steele,Luke Carlson', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Doggy Door', 'Device that helps busy pet owners', 'N', '9-12', 'test_upload/Log Book (2).pdf', 'https://www.youtube.com/watch?v=YtZsQFrHguc', 'Scott Knudsen,Max Brodkey,Patrick Tibbetts', '12,12,12', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne,Wayne', 'L,L,XL', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Terratracer', 'A technique to track and characterize leaf coverage data', 'N', '9-12', 'test_upload/TerraTracer Logbook.pdf', 'https://www.youtube.com/watch?v=XBuu2GRdLEg', 'John Zou,Matt Kukucka', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Solar Turtle', 'Smaller version of Portable Solar Panels', 'N', '9-12', 'test_upload/S2 Logbook (1).pdf', 'https://www.youtube.com/watch?v=leDNG578sF4', 'Xavier Shumsky,Jessica Li', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,M', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Perceive the Puzzle', 'Portable EEG for autistic individuals', 'N', '9-12', 'test_upload/Perceive the Puzzle Logbook.pdf', 'https://www.youtube.com/watch?v=L4t8-fxyCQo&feature=youtu.be', 'Jadyn Smith,Siena Smith', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'Small,Small', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Ink Remover', 'Removes Ink from Paper', 'N', '9-12', 'test_upload/Q3 Engineering Project Logbook - Sheet1.pdf', 'https://www.youtube.com/watch?v=sjgSmKvugqk', 'Trevor Ables,Chris Van Alstine', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,L', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('ProClothing', 'Protective Clothing', 'N', '9-12', 'test_upload/Log Book Project #3.pdf', 'https://www.youtube.com/watch?v=bbbKA0fTqBs', 'Joel Schueerholz', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'L', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Universal Guitar Case', 'Universal Guitar Case for Multiple Guitars', 'N', '9-12', NULL, 'https://www.youtube.com/watch?v=HeLdOMCay0s', 'Tiago Nunes', '12', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'L', 'Rob\r', 'Cupit\r', 'cupitr@aaps.k12.mi.us'),
('Water Fountain Filter', 'Design a modular water filter for use in drinking fountains', 'N', '9-12', 'test_upload/Sara and Gemma.pdf', 'https://youtu.be/zEXenLQX9PM', 'Gemma Poulsen,Sara Soluk', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,Small', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('Water Purifier', 'Students develop a device for purifying unpotable water', 'N', '9-12', 'test_upload/Nicollette Knott - LogBook Submission.pdf', 'https://www.youtube.com/watch?v=MRsNnT_1Zl4', 'Dante Circola,Nicolette Knott', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,L', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('Quick Clasp Shoe', 'An innovative shoe design, where the user snaps the shoe onto the foot', 'N', '9-12', 'test_upload/Gavin LaHousse and Nolan Force - Logbook Submission.pdf', 'https://www.youtube.com/watch?v=vj1pmUtxTWE', 'Nolan Force,Gavin LaHousse', '12,12', 'Livonia Public Schools,Livonia Public Schools', 'Livonia Public Schools,Livonia Public Schools', 'Wayne,Wayne', 'M,L', 'Charlie', 'Centivany\r', 'centivanyc@aaps.k12.mi.us'),
('TBA', 'TBA', 'N', '', NULL, NULL, ' ', '', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', '', 'Bill\r', 'VanLoo\r', 'vanloo@aaps.k12.mi.us'),
('Kid Kutter', 'Our prototype is a child-safe knife. It allows children to be safe when handling sharp objects.', 'N', 'K-2', NULL, NULL, 'Yahya Nasser', 'K', 'Livonia Public Schools', 'Livonia Public Schools', 'Wayne', 'Youth Medium\r\n', 'Amy', 'Johnson', 'ajohns82@emich.edu'),
('Soft Speak', 'Device will monitor the level of sound of the user.', 'N', '3-5', NULL, NULL, 'Praseeda Munnagi,Sahasra Paruchuri', '2,4', 'Burns Park Elementary,Burns Park Elementary', 'Ann Arbor Public Schools,Ann Arbor Public schools', 'Washtenaw,Washtenaw', 'Child Small,Child Medium', 'Steve', 'Rohde', 'rohdesteve@gmail.com'),
('Motor Shoe', 'A conveyor belted shoe that doesn\'t need training to use (like heelys but stable). ', 'N', '6-8', NULL, 'test_upload/WhatsApp Video 2020-02-22 at 1.32.27 PM.mp4', 'Alice  Jiang', '7', 'Saline Middle School', 'Saline', 'Washtenaw', 'Adult Small', 'Steve', 'Rohde', 'rohdesteve@gmail.com'),
('Rennervate: Instant Fatigue Reducer', 'A device that removes fatigue instantly without any harmful side effects.', 'N', '6-8', NULL, NULL, 'Suhani Dalela', '8', 'Saline Middle School', 'Saline', 'Washtenaw', 'Adult Medium', 'Steve', 'Rohde', 'rohdesteve@gmail.com'),
('Iot uses for daily needs ', 'How can technology be used to solve everyday problems in the household. ', 'Y', '6-8', 'test_upload/emuinvent_logbookTanayPanja.docx', NULL, 'Tanay  Panja ', '6', 'Clague middle school ', 'Ann Arbor public school, Michigan  ', 'Washtenaw', 'Medium youth \r\n', 'Priyanka ', 'Meharia ', 'meharia@gmail.com'),
('WIZEN', 'The project is about organizing wires behind any electronic devices like (play station, Computer)', 'N', '6-8', 'test_upload/EM Poster -20191- Final.pdf', 'test_upload/FHD0036.MOV', 'Asishram Tamalampudi', '7\r\n', 'Tappan Middle School', 'Ann Arbor Public School', 'Wastenaw', 'Youth-Medium\r\n', 'Satish', 'Munnagi', 'satish.munnagi@gmail.com'),
('Portable Notes', 'Habit making device in checking schedules for kids', 'N', '3-5', NULL, 'test_upload/jayani.mp4', 'Jayani Tavane shivakumar', '3', 'Kings Elementary school', 'Ann Arbor Public Schools', 'Washtenaw', 'Child-Small\r\n', 'Abhijeet', 'Hoshing', 'hoshing.abhijeet@gmail.com'),
('Rain Water Filter', 'The problem that my invention solves is rainwater is getting polluted and getting into our rivers.', 'N', '6-8', NULL, NULL, 'Hemanth Tavane Shivakumar', '6', 'Clague Middle School', 'Ann Arbor Public Schools', 'Washtenaw', 'Adult Small\r\n', 'Abhijeet', 'Hoshing', 'hoshing.abhijeet@gmail.com'),
('Kids Habit Developer for switching off light', 'Get kids in the habit of turning light off by novel soft toy w/loop rod is fixed on the switch lever', 'N', '3-5', 'https://www.emich.edu/cob/events/emuinvent/documents/emuinvent_logbook.pdf', NULL, 'Abhidha Hoshing,Sreeansh Kurane', '3\r\n,4', 'Burns Park Elementary School,Bentley elementary', 'Ann Arbor Public Schools ,Plymouth Canton public school', 'Washtenaw,Wayne', 'Child Large,L(10-12)', 'Shiri', 'Vivek', 'svivek@emich.edu'),
('Sports Cone Organizer', 'Device to collect and organize sports cones.', 'N', 'K-2', NULL, NULL, 'Liam Spencer', '2', 'Woodland Meadows', 'Saline', 'Washtenaw', 'Kids Medium', 'Shiri', 'Vivek', 'svivek@emich.edu'),
('Child Habit Developer', 'prototype helps kids to perform their routine actions in right way using build in PIR motion sensors', 'N', '3-5', NULL, NULL, 'Sreeansh Kurane,Abhida Hoshing', '4,3', 'Bentley Elementary School,Burns Park Elementary School', 'Plymouth Canton public school ,Ann Arbor Public Schools', 'Wayne,Washtenaw', 'L(10-12),L(10-12)', 'Shiri', 'Vivek', 'svivek@emich.edu');

-- --------------------------------------------------------

--
-- Table structure for table `ttf`
--

CREATE TABLE `ttf` (
  `project_team_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mentor_name` varchar(201) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `grade` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ttf`
--

INSERT INTO `ttf` (`project_team_name`, `student_name`, `mentor_name`, `email`, `category`, `grade`) VALUES
('Recycled Truss Reinforced Road', 'Gabriella Williams,Gabi Teodoru', 'Tom Pachera\r', 'pachera@aaps.k12.mi.us', '9-12', '12,12'),
('Saftey Shade', 'Brandon Linville,Freddy Villalobos', 'Bill Campbell', 'campbellw@aaps.k12.mi.us', '9-12', '12,12'),
('Grip Rings', 'Katherine Ellis,Ben Kessler', 'Marty\r Moreno\r', 'morenom@aaps.k12.mi.us', '9-12', '11,12'),
('Sunny Side Up', 'Riley Goniwicha,Nolan McPherson,Vasil Vassilev,Ben Barish', 'Marty\r Moreno\r', 'morenom@aaps.k12.mi.us', '9-12', '12,10,10,12'),
('Team Charger', 'Austin Jacobs,Derrick Scurlock,Jackson Hall', 'Marty\r Moreno\r', 'morenom@aaps.k12.mi.us', '9-12', '12,12,12'),
('Prepa', 'Nick Kaipainen,Kenny Yue,Jacob Kelly', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12,12'),
('EcoRinse', 'Liz Li', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12'),
('Cardboard ATM', 'Darryl Phillips,Ed Hashem', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('RTCA', 'Ryan Schulte,Kadin Sims', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('RID', 'Rishi Hoskeri', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12'),
('AstroTrack', 'Ani Cowlagi', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12'),
('UrbaGrow', 'Joey Ryan,Zolan Baptista', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('The Dumper Helper', 'Noah Steele,Luke Carlson', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('Terratracer', 'John Zou,Matt Kukucka', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('Solar Turtle', 'Xavier Shumsky,Jessica Li', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('Perceive the Puzzle', 'Jadyn Smith,Siena Smith', 'Rob\r Cupit\r', 'cupitr@aaps.k12.mi.us', '9-12', '12,12'),
('Water Fountain Filter', 'Gemma Poulsen,Sara Soluk', 'Charlie Centivany\r', 'centivanyc@aaps.k12.mi.us', '9-12', '12,12'),
('Soft Speak', 'Praseeda Munnagi,Sahasra Paruchuri', 'Steve Rohde', 'rohdesteve@gmail.com', '3-5', '2,4'),
('Motor Shoe', 'Alice  Jiang', 'Steve Rohde', 'rohdesteve@gmail.com', '6-8', '7'),
('Rennervate: Instant Fatigue Reducer', 'Suhani Dalela', 'Steve Rohde', 'rohdesteve@gmail.com', '6-8', '8'),
('Rain Water Filter', 'Hemanth Tavane Shivakumar', 'Abhijeet Hoshing', 'hoshing.abhijeet@gmail.com', '6-8', '6'),
('Child Habit Developer', 'Sreeansh Kurane,Abhida Hoshing', 'Shiri Vivek', 'svivek@emich.edu', '3-5', '4,3');

-- --------------------------------------------------------

--
-- Table structure for table `ttq`
--

CREATE TABLE `ttq` (
  `judge_name` varchar(201) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `question_asked` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `project_team_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ttq`
--

INSERT INTO `ttq` (`judge_name`, `question_asked`, `project_team_name`) VALUES
('Jessica Durance', 'Have you tested your product on leaves or a similar item? If so, did it work as intended? \r\nHow did the rake portion perform compared to other rakes? \r\n,							Is there any other company or person who already provides this service? \r\nHow does the printing device work? \r\nHave you tested the device and did it work as planned? \r\nDo you have a prototype of the printer/device?\r\nWhat research did you do to understand this problem and possible solutions? \r\n\r\n\r\n							,What are the key differences between your invention and other greenhouses? \r\nDid your invention change at all once completed and testing was complete? \r\nIs there a number of how many people may want to invest and buy your product? ,Once completed and tested did your product perform as expected and if not what did you change or adjust? \r\nWhat are the key differences between your product and other products on the market? ,*Logbook not available online, is it in person? \r\nWhat materials are you thinking of using besides foam? \r\nWhat are the key differences between your product and others on the market? \r\n\r\n\r\n\r\n\r\n', 'Leaf Me Alone'),
('Leah  Huyser', 'Who is your target audience?  \r\nWhat made you decide to come up with your invention? (It is a great idea!)\r\nWhat steps did you have to follow to make your invention? \r\nWhat modifications did your invention go through (if any)?,If you were to create your own brand and distribute them yourselves, would you? \r\nWhat is the main reason you are inventing this product? \r\nDo you think that you could expand your target audience?,Would you create your own material for the cover instead if there was a larger budget for the project? \r\nWhat modifications were made to your prototype (if any) or are there any that you would go back and make?\r\n,What plans would make in order to reduce the cost to make this for people in need? \r\nWould you allow doctors to recommend this product or have it to sell their patients? ,Who would the target audience be?  Is there a specific group of people/profession this would be used with? \r\nWhat steps did you use to create this idea? \r\nWhat steps did you take to create the prototype? \r\nHow would you make changes or is there something that you would change to your invention?', 'Record Player: Reused Electronics'),
('Bryan Whitlow', '							I really like this idea! Michigan needs all the help it can get when it comes to the quality of its roads. \r\n\r\nI think your pitch was well thought out and had a lot of good information.   \r\n\r\nWould the use of the truss in the road decrease the occurrence of the formation of potholes?							,							This is a really cool and interesting idea. I think this would be a very good way to reduce e-waste. \r\n\r\nHow would you market this to the public so that rather than viewing this as a hassle, they would view this as better than buying new?\r\n\r\nAs much as I really like your idea it was rather hard to hear what you were saying in your pitch. It isn\'t necessarily your fault, it was the loudness of the background noise. \r\n							,							I think this is a cool idea. I think a lot of people could benefit from this invention. \r\n\r\nAlthough I thought you had a good pitch there were some points where it was hard to hear what was being said. \r\n\r\nMaybe I missed it, but what is the visible stimulus? I understand it is the light, but does it slowly turn on or does it flash? \r\n\r\nIf the light flashes rather than just turns on, how would this impact someone with light-triggered medical conditions like epilepsy? 							,							This is a cool invention! I could see this being used often. \r\n\r\nI thought you had a good pitch but there were some parts that were difficult to understand. I think this could be fixed with a bit of practice. \r\n\r\nI like who this is being marketed to. My only question is what are you thinking the retail price is going to be? 							,							I think this is an amazing idea! I am very impressed with how thought out this invention is. 							', 'Recycled Truss Reinforced Road'),
('Rachel  Rhodes', 'I didn\'t see anywhere how these shoes would be charged/ran - solar powered, battery operated, charged? And how long would/should a charge last? \r\nI noticed in your logbook, you added the story about being stuck in traffic in Philadelphia, maybe adding that story to the video pitch could make it more relatable to the viewers who have most likely also been in that similar situation. \r\n,I noticed in the logbook it was stated that there are \"no problems\" and the invention \"works as planned\" could you think of any ways the invention may not work as planned, for example, over time could the wires get tangled and messy in the mesh bag? Or if there are really no problems, how does your product work against those odds? \r\nIs there anything other than a mesh bag you could use that could work better with sustainability? Like a reusable shopping bag or a recycled material bag? Something that could be recycled or safer to dispose of?\r\nYou make this very relatable to adults that use consoles, but is there any way you could make it relatable other than that? Maybe for older adults what could they use this product for? \r\nWould attaching this product to a desk harm the desk? And can it be easily attatched/detached? \r\nI really enjoyed how you compared your products to similar products, but how yours is different and adds the disadvantages of similar products. Adding this to your video pitch could be a good idea!,Not submitted ,Not submitted ', 'Motor Shoe'),
('Kaitlyn Kotcher', 'Comments:\r\n* Great job guys! Your logbook was very detailed and provided me with a lot of information about your whole invention process. I loved getting to see how you tested the cable and how you decided to update your product based on your data collected.\r\n* I marked you guys down on the originality because I have seen other products out there they try to stop this issue of the phone chargers breaking. But I only did 1 point down because I haven\'t seen it to this extent that you guys went by building a cube for the cable to run through.\r\n* I marked you guys down on your online pitch because you had 4 minutes to explain your product to me and only used up 45 seconds. Additionally, only one person spoke in your group, I would have really loved to see each member explain a little bit in your pitch.\r\n\r\nQuestions:\r\n* What new concepts did you develop about charging cables during this invention?\r\n* What was the most difficult part of your invention process?\r\n* What caught you by surprise as you tested each version?,Comments:\r\n\r\nGreat job guys!\r\nIt looks like you started working on your invention process in late January, which means you must have worked very hard up until now with your product.\r\nYour online pitch was very detailed and thorough which I found very helpful. You included a background in products that are already on the market and explained how yours would be different. \r\nI took off points for the identifying and understanding category because I was looking for ways you knew this was a problem other than what was apparent in your own lives. An example might include asking other co-workers from your summer job if they had the same struggles as both of you. But I did appreciate hearing your own experience and why you guys wanted to pursue this product.\r\nMy main concern is with your logbook. You both really explained what your invention process in the video, however, it is not documented enough in the logbook. I would have loved to see data with other people having this problem. Your research that you found regarding this problem/product. I also would have loved to see how you guys tested your product, how you knew it was successful or not. I did, however, really appreciate the photos you included of your invention. It helped me visualize what it looks like and how it would be used.\r\n\r\nQuestions:\r\n* In your video, you mentioned that there were some difficulties when you came to building the product. What were some of those difficulties? How did you make it to your final product?\r\n* In what ways did you test the success of your invention?\r\n* What caught you by surprise when you went through this process.,Comments:\r\n\r\n* Your logbook and video were very detailed and organized, I really enjoyed reading it and watching what you all had to say. Nice job! \r\n* I took some points off on the identifying and understanding category because I was looking for ways you investigated that this garbage situation was a problem in urban areas. I see that you listed off the problem areas, but I was really looking for concrete data for how you knew those problems. An example of this could have been going around apartment buildings and asking their opinions of the current trash system in place. \r\n* I also took some points off of your display board because I was looking for a tri-fold board specifically with your information displayed. It appears to be just a big poster board. I appreciate all of the typed information and pictures you provide on your board, which makes understanding your process much easier. \r\n\r\nQuestions:\r\n* What problems did you face during your invention process?\r\n* How did you come up with the price and longevity of the product/\r\n* What did you enjoy most about the invention process?,Comments:\r\n\r\n* Nice work guys! You have a great product that you were able to easily explain so well. I was very impressed.\r\n* As you can see, I had to take a handful of points away for many different reasons. There is no logbook or display board first and foremost. * Additionally, I took off points in the invention process category because I was looking for ways you guys went about your invention process. I was looking for drawings or explanations for your design ideas. I also was looking for how you two modified your product as you went along in the process. I was also looking for ways you knew it this was a problem in your own lives. I really appreciated the resources you cited at the beginning of your video, but I wanted to see concrete data from your own life. For example, asking friends how often they forget to turn off a light or unplug something.\r\n* I took off points for originality because I have seen many products on the market that try to reduce energy usage. But I appreciate the route you guys took it, by going through an app that an individual can manipulate.\r\n* Lastly, for your online pitch I needed to see your faces as you were talking about your product.\r\n* Overall, your invention is very impressive and you both did an excellent job explaining what you created.\r\n\r\nQuestions:\r\n* What problems did you face during the invention process?\r\n* What did you enjoy the most throughout the invention process/\r\n* What was something that took you by surprise while working on your product?,Comments:\r\n\r\n* Nice work! you explained everything very well, you were detailed and thorough in you your online pitch, which helped me out in understanding your thought process.\r\n* I did not get a logbook, so I wasn\'t able to give you any points for that.\r\n* I took some points away for your online pitch because you went over the time limit a little bit.  \r\n* For your prototype, I was hoping for a further explanation of it, and how you knew it worked as a universal piece. \r\n* I took off points in the identifying and understanding category because I was looking for concrete data about how you knew this was a problem. An example might be asking friends that also play guitar to understand if they have the same issue and documenting their responses. \r\n* Overall, you did great at explaining your invention. I really enjoyed learning about the different products already out on the market, and how you would do it a little bit differently.\r\n\r\nQuestions:\r\n* What problems did you face during the invention process?\r\n* What did you enjoy most about the invention process?\r\n* During your research, did you discover anything that surprised you, or that you want to research more? ', 'Team Charger'),
('Lexie McCloskey', 'not submitted \r\n,not submitted\r\n,not submitted,Very insightful and informative proposition. Walked through step by step on each section of the proposal. Appeared to be very knowledgable on every aspect of his invention especially the market outlook of it. My only critique is to be more focused on the point of what you are trying to convey. The point was taken off because the video was over 4 minutes. ,An extremely creative way to get kids more active! It takes virtual reality to a whole new level with the incorporation of exercise!', 'Life Guard'),
('Aaron Czapla', ',,,,							I am unsure if there is a technological issue on my end, but at this point I have no material available to judge.							', 'Grip Rings'),
('Emily Alderman', 'I love the idea of making people more aware of the trash they are producing. How do you see your product impacting the way that people think about the waste they produce?\r\nWere you able to develop a working prototype for your invention?\r\nDo you have any ideas for ways that this product could be used as a public trash receptacle? (ex. in a park or other public space)\r\nI did not see a display board in your video. Do you have one prepared for the event?\r\n,Your product seems very original, are there any current products on the market that  use a similar method to wake people up?\r\nI would love to hear more about the research regarding the usage of light rather than sound to wake people up in the morning. Could you explain your findings on this?\r\n,I love the idea of paying people for recycling because it makes people more motivated. Do you intend for this to work similarly to bottle and can deposits like we have in Michigan or will the money come from another source?\r\nHow do you think this product could impact the way that we recycle? \r\nWhat makes your cardboard compressor unique compared to similar compressors that are currently on the market?\r\n\r\n,In what situations do you see this solar panel being the most useful?\r\nWhat types of products could be charged using your device?\r\nDoes the water impact the functionality of the product?,I would love to learn more about the problem you were facing that led you to developing this product. Could you explain more about the application of your product to problems people face?\r\nWere there any challenges you faced while developing the prototype for your product?\r\n\r\n\r\n\r\n\r\n', 'The Weigh Can'),
('Amanda Segerstrom', '							Would/could there be any application for this device outside of the school setting to make it more marketable to the general public or is this purely for classroom application and safety? \r\n\r\nHave you done any trials during a simulated lock down scenario?\r\n\r\nHave you found any research that suggest not be able to see into a classroom deters an assailant from entering?\r\n\r\n							,Does the cost of this product, at around $200, make it marketable to the population you are targeting (i.e. student)?\r\n\r\nIs this a device that has its own fridge/microwave unit or a device that relies on your existing fridge and or microwave? \r\n,							How does the thermal imaging keep out animals and or people with heat signatures that may be similar to a dog?\r\n\r\nWhat is the power source for this device? Is it a battery? a Wall plug? etc.\r\n\r\nIn the log book you suggest this is a product where items like wires are hidden inside the door, but in your video pitch you said you wanted minimal or no consumer installation? How is the device theoretically installed and is it discrete? \r\n\r\nDoes this device require a sliding glass door? Do you have research to show that this is more viable than a model that opens a hinge door? 							,Do you have a prototype?\r\n\r\nWhat kind of trials or testing have you done on your invention?\r\n\r\nWhat is the cost of your design? \r\n\r\nHow do you make your design available to those that need it? \r\n\r\nHow does your device differ from other types of available water filtration systems?\r\n,', 'Saftey Shade'),
('Rebecca Lee', 'How would this system be maintained?\r\nHow will I know that this is operating correctly?\r\nHow can I ensure that this will work 100% of the time?\r\n,Does this have to be done on a treadmill? Can your footsteps be tracked outside if you wanted to go outside and walk the 400 yards instead?\r\nCould the gamer explore other planets?\r\nHow will this invention keep the gamer engaged? \r\n,How will this product compete amongst other natural remidies to reduce fatigue?\r\nHow many times can this be used a day without being harmful?\r\nHow long will this feeling of energy from your product, last?,No submission,No submission ', 'Rain Water Filter'),
('Boarman Leah', ',The logbook and online pitch don\'t really seem to match up much, so how can you make things a little bit more clear?,,What will this design look like? What materials will you use as protective gear? ,How would you keep this sanitary if in a public setting? If it is not intended for public use, how would you make it more convenient to carry around?', 'Saftey Shade'),
('Chapman Mary', 'Did you examine the difference in cost of the production or accumulation of the new jet fuel in comparison with the old fuel? ,Can you explain how the visual stimulation wakes you up in a more natural way? ,Did you consider the charger overheating causing a fire hazard? If so, how did you change your invention so there was no fire hazards?,,What materials would you use other than duct tape to waterproof the seals on the water filtration device you have created?', 'Biofuel Jet Engine'),
('Peyton Bergmann', 'How feasible would this product be to the middle-class consumer?\r\n\r\nCould you see this product being used on a commercial scale in addition to the mentioned household purposes?\r\n\r\nHow long would you estimate an instillation of this product would take in the average household?,Do you know how much the payout would be per lb of cardboard?\r\n\r\nHow large would this machine be?,How would you explain the importance of this product to the average consumer?\r\n\r\nHow quickly could you see this product being implemented?\r\n\r\n,How expensive do you imagine one of these products being?\r\n\r\nHow difficult would this product be to install?,												What would be the price range for these products?\r\n\r\nHow concealable would they be under regular clothing?\r\n\r\n', 'EcoRinse');

-- --------------------------------------------------------

--
-- Table structure for table `t_students_2021`
--

CREATE TABLE `t_students_2021` (
  `project_team_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_first_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_grade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_school_name` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `student_school_district` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `t_students_2021`
--

INSERT INTO `t_students_2021` (`project_team_name`, `student_first_name`, `student_last_name`, `student_grade`, `student_school_name`, `student_school_district`) VALUES
('CleanCube', 'Praseeda', 'Munnagi', '3', 'Burns Park Elementary', 'Ann arbor public schools'),
('TAHAteam', 'Preethi', 'Chunduri', NULL, NULL, NULL),
('TAHAteam', 'Yaha', 'Ahmed', '5', 'AAAPS', 'AAAPS'),
('TAHAteam', 'Student', 'Ahmed', '3', 'AAPS', 'AAPS'),
('The SOS Mini', 'Khalid', 'Al-zawawi', '5', 'Michigan Islamic Academy', 'Ann Arbor'),
('The SOS Mini', 'Sammer', 'Moustafa', '5', 'Michigan Islamic Academy', 'Ann Arbor'),
('Rohit Mahesh', 'Rohit', 'Mahesh', '8', 'Pioneer Middle School', 'Plymouth-Canton Community School District'),
('The Mask Hat', 'Liam', 'Spencer', '3', 'Harvest  Elementary', 'Saline '),
('Saline Heritage RoboSwarm', 'Carter', 'Atkinson', '5', 'Heritage School', 'Saline Area Schools'),
('Saline Heritage RoboSwarm', 'Zachary', 'Malott', '5', 'Heritage School', 'Saline Area Schools'),
('Saline Heritage RoboSwarm', 'Myles', 'Ogdahl', '5', 'Heritage School', 'Saline Area Schools'),
('Saline Heritage RoboSwarm', 'Alisha', 'Sachdeva', '5', 'Heritage School', 'Saline Area Schools'),
('Saline Heritage RoboSwarm', 'Quinn', 'Myers', '4', 'Heritage School', 'Saline Area Schools'),
('Saline Heritage RoboSwarm', 'Kavin', 'Arul', '5', 'Heritage School', 'Saline Area Schools'),
('Toby Wright & Efe Akinci', 'Toby', 'Wright', '12', 'Skyline', 'Ann Arbor'),
('Toby Wright & Efe Akinci', 'Efe ', 'Akinci', '', 'Skyline', 'Ann Arbor'),
('ID Pen', 'Sophie', 'Getzen', '12', 'Huron High School', 'Ann Arbor'),
('ID Pen', 'Arman', 'Getzen', '12', 'Huron High School', 'Ann Arbor'),
('Portable Air Filtration Device', 'Owen', 'Sayer', '12', 'Huron High School', 'Ann Arbor '),
('Portable Air Filtration Device', 'James', 'Schrupp', '12', 'Huron High School', 'Ann Arbor '),
('Portable Air Filtration Device', 'Bennett', 'Den Houter', '12', 'Huron High School', 'Ann Arbor'),
('Portable Air Filtration Device', 'Mehmed', 'Uludag', '12', 'Huron High School', 'Ann Arbor'),
('Indoor Eating Bubble', 'Samantha', 'Hastie', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Indoor Eating Bubble', 'Donovan', 'Smith', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Indoor Eating Bubble', 'Caterina', 'Hart', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Indoor Eating Bubble', 'Kathryn', 'Meader', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('AI Music Tracker', 'Isaac', 'Madhavaram', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('AI Music Tracker', 'Michael', 'Hill-Carruthers', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('AI Music Tracker', 'Prathik', 'Guduri', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('AI Music Tracker', 'Josh', 'Cullen', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Automatic kelp elevator', 'Derek', 'Hwang', '12', 'Huron High School', 'Ann Arbor'),
('Automatic kelp elevator', 'Koen', 'van Nieuwstadt', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Automatic kelp elevator', 'Lucas ', 'Reading Sunol', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('BeatRunner', 'Evan', 'Ridenour', 'Select Student Grade', 'Huron High', 'Ann Arbor public schools'),
('BeatRunner', 'Peter', 'Stenger', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('BeatRunner', 'Rose', 'Basch', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('BeatRunner', 'Peter (@AAPS.K12)', 'Stenger', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('2 in 1 Mask', 'Kenneth', 'Gaffield', '12', 'Huron High School', 'Ann Arbor Public School'),
('2 in 1 Mask', 'Andre', 'Nguyen', 'Select Student Grade', 'Huron High School', 'Ann Arbor Public School'),
('Auto Door Sanitizer', 'Jackson', 'Den Houter', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Auto Door Sanitizer', 'Eric', 'Joseph', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Auto Door Sanitizer', 'Eli', 'Pinals', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Auto Door Sanitizer', 'Christopher', 'Johnston', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Skellies', 'Susan ', 'Xi', '12', 'Skyline', 'Ann Arbor'),
('Skellies', 'Ellie', 'Witten', '', 'Skyline', 'Ann Arbor'),
('Riverboat Clinic', 'Axel', 'Avram', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('The Dream Team', 'Natalie', 'Keating', '12', 'Skyline', 'Ann Arbor'),
('The Dream Team', 'Ian', 'Steele', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('The Dream Team', 'Chloe', 'Durkee', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('The Dream Team', 'Luke', 'McGinnis', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('Team Crank', 'Victor', 'Bian', '12', 'Skyline', 'Ann Arbor'),
('Team Crank', 'John ', 'Oginsky', '', 'Skyline', 'Ann Arbor'),
('Team Crank', 'Noah', 'Thompson', '', 'Skyline', 'Ann Arbor'),
('Team Crank', 'Timothy', 'Clatterbuck', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('Ice Tray', 'Judah', 'Wise', '12', 'Skyline', 'Ann Arbor'),
('Ice Tray', 'Bryan', 'Sabolich-Yi', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('Ice Tray', 'Paul', 'Tistle', '', 'Skyline', 'Ann Arbor'),
('Ice Tray', 'Darryl', 'Young', '', 'Skyline', 'Ann Arbor'),
('Smart Face Shield', 'Meera', 'Ramaswami', '11', 'Huron High School', 'Ann Arbor Public Schools'),
('Walking Shipping Container Home', 'Emma', 'Kaipainen', '11', 'Ann Arbor Huron High School', 'Ann Arbor Public Schools'),
('Rainwater Energy Generation', 'Cali', 'Streeter', '11', 'Huron High School', 'Ann Arbor Public Schools'),
('W-Arm', 'Elizabeth', 'Soroka', '11', 'Huron High School', 'AAPS'),
('Team Watta-Box', 'Zach', 'Pryor', '12', 'Pioneer', 'Ann Arbor'),
('Virtual Assimilation', 'Owen', 'Connell', '12', 'Skyline', 'Ann Arbor'),
('Blue Light Eye Protection', 'Evan', 'Eisman', '12', 'Skyline', 'Ann Arbor'),
('Austerberry & Takacs', 'Robin', 'Austerberry', 'Select Student Grade', 'Skyline', 'Ann Arbor'),
('Austerberry & Takacs', 'Valeria ', 'Takacs', '12', 'Skyline', 'Ann Arbor'),
('FruitFresh', 'Lena', 'Trang', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('FruitFresh', 'Veda', 'Srinivas', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('FruitFresh', 'Mihika', 'Thakurta', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('The Distance Detector ', 'Akshay', 'Sivakumar', '12', 'Huron Highschool ', 'Ann Arbor School district '),
('The Distance Detector ', 'Hamzah ', 'Al Thani ', '12', 'Huron Highschool ', 'Ann Arbor public school district '),
('Toilet Plunger', 'Easton ', 'Rem', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Toilet Plunger', 'Dimash', 'Umirbayev', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Toilet Plunger', 'Zoe', 'Solomon', '12', 'Huron High School', 'Ann Arbor Public Schools'),
('Jump Start', 'Dominic', 'Hines', '12', 'Skyline', 'Ann Arbor'),
('Jump Start', 'Chloe', 'Yang', '12', 'Skyline', 'Ann Arbor'),
('Jump Start', 'Quincy', 'Menz', '12', 'Skyline', 'Ann Arbor'),
('Jump Start', 'Laylah', 'Carrubba', '12', 'Skyline', 'Ann Arbor'),
('Search and Rescue Drone Universal Attachment System (SDUAS)', 'Adam', 'VanderMolen', '11', 'Huron High School', 'Ann Arbor Public Schools '),
('Search and Rescue Drone Universal Attachment System (SDUAS)', 'Sasha ', 'Lee', '11', 'Huron High School', 'Ann Arbor Public Schools '),
('3D Printing Filament Recycling System', 'Aidan', 'Edwards', '11', 'Huron High School', 'Ann Arbor'),
('3D Printing Filament Recycling System', 'Andres', 'Marquez-Collins', NULL, NULL, NULL),
('3D Printing Filament Recycling System', '', '', 'Select Student Grade', '', ''),
('The Cable Connector', 'Vaibhav', 'Ramaseshadri', 'Select Student Grade', 'Huron High School', 'Ann Arbor Public Schools'),
('Cord Clippers of Ypsi', 'Landon', 'McKinney', '9', 'Ypsilanti High School', 'Ypsilanti'),
('Cord Clippers of Ypsi', 'Derek', 'Mitter', '', 'Ypsilanti High School', 'Ypsilanti'),
('Cord Clippers of Ypsi', 'Emily', 'Nguyen', '', 'Ypsilanti High School', 'Ypsilanti'),
('Cord Clippers of Ypsi', 'Paul', 'Kiselev', '', 'Ypsilanti High School', 'Ypsilanti'),
('Ypsi Lint Trap', 'Hailey', 'Jackson-Baker', '9', 'Ypsilanti High School', 'Ypsilanti'),
('Ypsi Lint Trap', 'Julia', ' Walker', '', 'Ypsilanti High School', 'Ypsilanti');

-- --------------------------------------------------------

--
-- Table structure for table `web_inventor`
--

CREATE TABLE `web_inventor` (
  `id` bigint(20) NOT NULL,
  `inventor` longtext NOT NULL,
  `schoolnamegrade` longtext NOT NULL,
  `sig` longtext NOT NULL,
  `date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_inventor`
--

INSERT INTO `web_inventor` (`id`, `inventor`, `schoolnamegrade`, `sig`, `date`) VALUES
(1, 'asd', 'asd', 'ads', '2024-01-10'),
(2, 'asd', '', 'asd', ''),
(3, 'asd', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, 'asd', 'asd', 'asd', ''),
(7, 'asd', 'asd', 'asd', ''),
(8, 'asd', '', 'asd', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, 'asdasdsda', 'asd', 'asd', ''),
(12, 'asd', 'asd', 'asd', ''),
(13, 'asd', '', 'asd', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(17, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(18, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(19, 'Hilal', 'hhhhhh', 'HHHHH', '2024-01-12'),
(20, 'Qurat', 'qqqq', 'QQQQQQ', '2024-01-12'),
(21, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(22, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(23, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(24, 'Hilal', 'hhhhhh', 'HHHHH', '2024-01-12'),
(25, 'Qurat', 'qqqq', 'QQQQQQ', '2024-01-12'),
(26, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(27, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(28, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(29, 'Hilal', 'hhhhhh', 'HHHHH', '2024-01-12'),
(30, 'Qurat', 'qqqq', 'QQQQQQ', '2024-01-12'),
(31, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(32, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(33, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(34, 'Hilal', 'hhhhhh', 'HHHHH', '2024-01-12'),
(35, 'Roohan', 'qqqq', 'QQQQQQ', '2024-01-12'),
(36, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(37, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(38, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(39, 'Hilal', 'Hilal  3', 'HHHHH', '2024-01-12'),
(40, 'Roohan', 'qqqq', 'QQQQQQ', '2024-01-12'),
(41, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(42, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(43, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(44, 'Hilal', 'Hilal  3', 'HHHHH', '2024-01-12'),
(45, 'Roohan', 'qqqq', 'QQQQQQ', '2024-01-12'),
(46, 'Ali ', 'aaaa', 'AAAA', '2024-01-13'),
(47, 'Saab', 'sssss', 'SSSSSS', '2024-01-05'),
(48, 'Maaz', 'mmmm', 'MMMM', '2024-01-13'),
(49, 'Hilal', 'Hilal  3', 'HHHHH', '2024-01-12'),
(50, 'Roohan', 'qqqq', 'QQQQQQ', '2024-01-12'),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(102, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(107, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, 'asd', 'sad', 'asd', '2024-03-03'),
(112, 'asd', 'sad', 'asd', '2024-03-03'),
(113, 'sda', 'asd', 'sad', '2024-03-03'),
(114, 'sda', 'sda', 'dsa', '2024-03-03'),
(115, 'sda', 'sad', 'sad', '2024-03-03'),
(116, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(117, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(122, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(142, '', '', '', ''),
(143, '', '', '', ''),
(144, '', '', '', ''),
(145, '', '', '', ''),
(146, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(147, '', '', '', ''),
(148, '', '', '', ''),
(149, '', '', '', ''),
(150, '', '', '', ''),
(151, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(152, '', '', '', ''),
(153, '', '', '', ''),
(154, '', '', '', ''),
(155, '', '', '', ''),
(156, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(157, '', '', '', ''),
(158, '', '', '', ''),
(159, '', '', '', ''),
(160, '', '', '', ''),
(161, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(162, '', '', '', ''),
(163, '', '', '', ''),
(164, '', '', '', ''),
(165, '', '', '', ''),
(166, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(167, '', '', '', ''),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', '', '', ''),
(171, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(172, '', '', '', ''),
(173, '', '', '', ''),
(174, '', '', '', ''),
(175, '', '', '', ''),
(176, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(177, 'Mohid', '', '', ''),
(178, '', '', '', ''),
(179, '', '', '', ''),
(180, '', '', '', ''),
(181, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(182, 'Mohid', '', '', ''),
(183, '', '', '', ''),
(184, '', '', '', ''),
(185, '', '', '', ''),
(186, 'Hary Mac', 'Greenwood', 'HM', '2024-03-02'),
(187, 'Mohid', '', '', ''),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(192, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, 'Ali ', 'aaaa', 'AAAA', '2024-03-08'),
(197, 'Sajid', 'Khan', 'signature', '2024-03-13'),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_issue`
--

CREATE TABLE `web_issue` (
  `id` bigint(20) NOT NULL,
  `expert` longtext NOT NULL,
  `credentials` longtext NOT NULL,
  `identified` longtext NOT NULL,
  `problemface` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_issue`
--

INSERT INTO `web_issue` (`id`, `expert`, `credentials`, `identified`, `problemface`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, 'Mr Y', 'CAD', 'CAE AI', 'I am not suure'),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, 'Mr Y', 'CAD', 'CAE AI', 'I am not suure'),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, 'sda', 'sda', 'sda', 'sd'),
(45, 'sad', 'asd', 'sad', 'sad'),
(46, 'sad', 'asd', 'sda', 'sad'),
(47, 'sda', 'sda', 'sda', 'sd'),
(48, 'sad', 'asd', 'sad', 'sad'),
(49, 'sad', 'asd', 'sda', 'sad'),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, 'Mr Y', 'CAD', 'CAE AI', 'I am not suure'),
(54, '', '', '', ''),
(55, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_problem`
--

CREATE TABLE `web_problem` (
  `id` bigint(20) NOT NULL,
  `problem` longtext NOT NULL,
  `name1` longtext NOT NULL,
  `name2` longtext NOT NULL,
  `name3` longtext NOT NULL,
  `name4` longtext NOT NULL,
  `age1` longtext NOT NULL,
  `age2` longtext NOT NULL,
  `age3` longtext NOT NULL,
  `age4` longtext NOT NULL,
  `comment1` longtext NOT NULL,
  `comment2` longtext NOT NULL,
  `comment3` longtext NOT NULL,
  `comment4` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_problem`
--

INSERT INTO `web_problem` (`id`, `problem`, `name1`, `name2`, `name3`, `name4`, `age1`, `age2`, `age3`, `age4`, `comment1`, `comment2`, `comment3`, `comment4`) VALUES
(1, 'Customer are not agree to buy', 'Mohid', 'Roohan ', 'Hilal', '', '21', '20', '19', '', 'not interested', 'no Willing to buy', 'not interested', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Customer are not agree to buy', 'Mohid', 'Roohan ', 'Hilal', '', '21', '20', '19', '', 'not interested', 'no Willing to buy', 'not interested', ''),
(6, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Customer are not agree to buy', 'Mohid', 'Roohan ', 'Hilal', '', '21', '20', '19', '', 'not interested', 'no Willing to buy', 'not interested', ''),
(10, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Customer are not agree to buy', 'Mohid', 'Roohan ', 'Hilal', '', '21', '20', '19', '', 'not interested', 'no Willing to buy', 'not interested', ''),
(14, 'desription 2024', 'p24 1', 'p25 2', '', '', '65', '40', '', '', 'comments', 'NOthing', '', ''),
(15, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'Hello All', 'Mr X', '', '', '', '19', '', '', '', 'This is good', '', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'Girls Problem', 'Ayesha ', 'Laiba ', 'Hina', 'Maria', '45', '35', '65', '12', 'testing', 'testing', 'testing', 'testing'),
(34, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Girls Problem', 'Ayesha ', 'Laiba ', 'Hina', 'Maria', '45', '35', '65', '12', 'testing', 'testing', 'testing', 'testing'),
(38, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'sda', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'sad', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'dsa', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'das', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'sda', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'sad', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'dsa', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'das', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_statementoforiginality`
--

CREATE TABLE `web_statementoforiginality` (
  `id` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `teamId` int(11) NOT NULL,
  `date_updated` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_statementoforiginality`
--

INSERT INTO `web_statementoforiginality` (`id`, `userId`, `teamId`, `date_updated`) VALUES
(1, 1, 252, '2024-01-10 11:29:36.653893'),
(2, 1, 256, '2024-01-10 11:35:40.491356'),
(3, 1, 256, '2024-01-10 11:36:49.992877'),
(4, 1, 255, '2024-01-12 19:09:09.617790'),
(5, 1, 255, '2024-01-12 19:11:06.029643'),
(6, 1, 255, '2024-01-12 19:16:44.629085'),
(7, 1, 255, '2024-01-12 19:17:40.586813'),
(8, 1, 255, '2024-01-12 19:18:35.516054'),
(9, 1, 255, '2024-01-12 19:20:17.426523'),
(10, 1, 255, '2024-01-12 19:21:05.596122'),
(11, 267, 216, '2024-02-07 22:19:13.037054'),
(12, 1, 5, '2024-02-08 08:53:28.011439'),
(13, 1, 5, '2024-02-08 09:01:10.045046'),
(14, 261, 205, '2024-02-10 21:05:57.387546'),
(15, 256, 229, '2024-02-29 07:14:56.161139'),
(16, 319, 228, '2024-03-02 21:18:58.291904'),
(17, 260, 205, '2024-03-02 21:23:35.424081'),
(18, 256, 229, '2024-03-03 09:56:10.781101'),
(19, 256, 229, '2024-03-03 10:26:38.674965'),
(20, 256, 229, '2024-03-03 10:35:16.361018'),
(21, 256, 229, '2024-03-03 10:38:12.144679'),
(22, 256, 229, '2024-03-03 10:42:42.274398'),
(23, 267, 216, '2024-03-03 18:55:07.016532'),
(24, 256, 229, '2024-03-12 18:31:24.539819'),
(25, 256, 229, '2024-03-12 18:31:38.524555'),
(26, 261, 205, '2024-03-14 11:34:28.064943'),
(27, 261, 205, '2024-03-14 11:36:11.630615'),
(28, 261, 205, '2024-03-14 11:43:29.121171'),
(29, 261, 205, '2024-03-15 05:11:29.870019'),
(30, 261, 205, '2024-03-15 05:17:58.211539'),
(31, 261, 205, '2024-03-15 05:18:17.221132'),
(32, 261, 205, '2024-03-15 05:44:11.680342'),
(33, 261, 205, '2024-03-15 06:02:22.572380'),
(34, 261, 205, '2024-03-15 06:38:58.532562'),
(35, 261, 205, '2024-03-17 18:37:05.275412'),
(36, 261, 205, '2024-03-23 18:38:58.456445'),
(37, 261, 205, '2024-03-23 18:39:02.566278'),
(38, 261, 205, '2024-03-23 18:41:41.297387'),
(39, 256, 229, '2024-05-14 14:49:11.469252'),
(40, 256, 229, '2024-05-14 14:49:11.688025');

-- --------------------------------------------------------

--
-- Table structure for table `web_stepfour`
--

CREATE TABLE `web_stepfour` (
  `id` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `teamId` int(11) NOT NULL,
  `date_updated` datetime(6) NOT NULL,
  `blueprint` varchar(100) DEFAULT NULL,
  `teacher_name` longtext NOT NULL,
  `teacher_sign` longtext NOT NULL,
  `date` longtext NOT NULL,
  `sol_design_problem` longtext NOT NULL,
  `green_sol` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_stepfour`
--

INSERT INTO `web_stepfour` (`id`, `userId`, `teamId`, `date_updated`, `blueprint`, `teacher_name`, `teacher_sign`, `date`, `sol_design_problem`, `green_sol`) VALUES
(1, 1, 255, '2024-01-12 18:36:27.377995', '', 'Asad', 'AASSSS', '2024-01-12', '', ''),
(2, 1, 255, '2024-01-12 18:46:50.396769', '', 'Asad', 'AASSSS', '2024-01-12', '', ''),
(3, 1, 255, '2024-01-12 18:51:11.331525', '', 'Asad', 'AASSSS', '2024-01-12', '', ''),
(4, 1, 255, '2024-01-12 18:51:39.537432', '', 'Asad', 'AASSSS', '2024-01-12', 'e', 't'),
(5, 1, 252, '2024-01-12 20:47:18.115865', '', '', '', '', '', ''),
(6, 1, 252, '2024-01-12 20:49:11.775931', '', '', '', '', '', ''),
(7, 1, 252, '2024-01-12 20:53:24.084620', '', '', '', '', '', ''),
(8, 1, 5, '2024-02-08 08:55:06.465916', '', '', '', '', '', ''),
(9, 1, 5, '2024-02-08 08:55:18.396995', '', '', '', '', '', ''),
(10, 256, 229, '2024-02-29 07:16:23.241514', '', '', '', '', '', ''),
(11, 260, 205, '2024-03-02 21:26:44.100847', '', 'Muhammad', 'MSA', '2024-03-02', 'If you make major changes to your model, add more iterations to your first model (Model i1….Model i2)', 'Note here how your design can be more sustainable. If it uses less of the natural resources, or does not damage the environment, it is a sustainable solution?'),
(12, 260, 205, '2024-03-02 21:28:22.634636', '', 'Muhammad', 'MSA', '2024-03-02', 'If you make major changes to your model, add more iterations to your first model (Model i1….Model i2)', 'Note here how your design can be more sustainable. Is it a sustainable solution if it uses less of the natural resources, or does it not damage the environment?'),
(13, 256, 229, '2024-03-03 10:50:31.004243', '', '', '', '', '', ''),
(14, 256, 229, '2024-03-03 10:53:19.680382', '', 'Asad', 'ffff', '2024-03-05', '', ''),
(15, 267, 216, '2024-03-03 18:57:10.757228', '', 'dsa', 'sda', '2024-03-03', 'asd', 'sda'),
(16, 267, 216, '2024-03-03 18:58:34.151953', '', 'dsa', 'sda', '2024-03-03', 'asd', 'sda'),
(17, 267, 216, '2024-03-11 21:54:45.251097', '', '', '', '', '', ''),
(18, 261, 205, '2024-03-18 04:28:29.250394', '', 'Muhammad', 'MSA', '2024-03-02', 'If you make major changes to your model, add more iterations to your first model (Model i1….Model i2)', 'Note here how your design can be more sustainable. Is it a sustainable solution if it uses less of the natural resources, or does it not damage the environment?');

-- --------------------------------------------------------

--
-- Table structure for table `web_steptwo`
--

CREATE TABLE `web_steptwo` (
  `id` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `teamId` int(11) NOT NULL,
  `date_updated` datetime(6) NOT NULL,
  `problem_title` longtext NOT NULL,
  `problem_description` longtext NOT NULL,
  `describe_problem` longtext NOT NULL,
  `specific_solution` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_steptwo`
--

INSERT INTO `web_steptwo` (`id`, `userId`, `teamId`, `date_updated`, `problem_title`, `problem_description`, `describe_problem`, `specific_solution`) VALUES
(1, 1, 255, '2024-01-12 18:28:25.290086', '', '', '', ''),
(2, 1, 255, '2024-01-12 18:30:13.851024', 'Write Problem Title here', 'Write Problem Problem description', '', ''),
(3, 1, 255, '2024-01-12 18:35:18.918243', '', 'Write Problem Problem description', '', ''),
(4, 1, 255, '2024-01-12 19:27:19.497947', '', 'Write Problem Problem description', '', ''),
(5, 1, 5, '2024-02-08 08:54:37.379702', '', '', '', ''),
(6, 256, 229, '2024-02-29 07:15:20.614876', '', '', '', ''),
(7, 260, 205, '2024-03-02 21:25:02.363822', 'Problem title', 'Problem description Problem descriptionProblem description Problem description', 'describe the problem in great detail so ', 'Very specifically, list what do you want your solution to achieve? '),
(8, 256, 229, '2024-03-03 09:56:22.906420', '', '', '', ''),
(9, 256, 229, '2024-03-03 10:44:03.369910', '', '', '', ''),
(10, 256, 229, '2024-03-03 10:50:04.097316', '', '', '', ''),
(11, 267, 216, '2024-03-03 18:55:45.576404', 'sda', 'sad', 'sad', 'sad'),
(12, 267, 216, '2024-03-03 18:56:20.291331', '', 'sad', 'sad', 'sad'),
(13, 267, 216, '2024-03-11 21:10:13.650716', '', 'sad', 'sad', 'sad'),
(14, 261, 205, '2024-03-18 04:18:50.149870', '', 'Problem description Problem descriptionProblem description Problem description', 'describe the problem in great detail so ', 'Very specifically, list what do you want your solution to achieve? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `tbl_team_member_1`
--
ALTER TABLE `tbl_team_member_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `tbl_team_mentor`
--
ALTER TABLE `tbl_team_mentor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_inventor`
--
ALTER TABLE `web_inventor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_issue`
--
ALTER TABLE `web_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_problem`
--
ALTER TABLE `web_problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_statementoforiginality`
--
ALTER TABLE `web_statementoforiginality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_stepfour`
--
ALTER TABLE `web_stepfour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_steptwo`
--
ALTER TABLE `web_steptwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=616;

--
-- AUTO_INCREMENT for table `tbl_team_member_1`
--
ALTER TABLE `tbl_team_member_1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tbl_team_mentor`
--
ALTER TABLE `tbl_team_mentor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=734;

--
-- AUTO_INCREMENT for table `web_inventor`
--
ALTER TABLE `web_inventor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `web_issue`
--
ALTER TABLE `web_issue`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `web_problem`
--
ALTER TABLE `web_problem`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `web_statementoforiginality`
--
ALTER TABLE `web_statementoforiginality`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `web_stepfour`
--
ALTER TABLE `web_stepfour`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `web_steptwo`
--
ALTER TABLE `web_steptwo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD CONSTRAINT `fk5_name` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_team_member_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`);

--
-- Constraints for table `tbl_team_member_1`
--
ALTER TABLE `tbl_team_member_1`
  ADD CONSTRAINT `tbl_team_member_1_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`);

--
-- Constraints for table `tbl_team_mentor`
--
ALTER TABLE `tbl_team_mentor`
  ADD CONSTRAINT `fk4_name` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_name` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_team_mentor_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `tbl_team` (`id`),
  ADD CONSTRAINT `tbl_team_mentor_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
