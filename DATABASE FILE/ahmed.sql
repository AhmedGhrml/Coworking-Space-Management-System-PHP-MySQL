-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 28 juil. 2020 à 14:33
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ahmed`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '32aa2fd87338e241978c48ab319641bc');

-- --------------------------------------------------------

--
-- Structure de la table `date_facture`
--

CREATE TABLE `date_facture` (
  `id` int(11) NOT NULL,
  `num_fact` varchar(8) NOT NULL,
  `date` varchar(10) NOT NULL,
  `acheteur` varchar(20) NOT NULL,
  `mat_fiscale` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_post` int(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` int(13) NOT NULL,
  `nom_prod` varchar(30) NOT NULL,
  `reference` varchar(10) NOT NULL,
  `qte_prod` int(30) NOT NULL,
  `un_prod` varchar(4) NOT NULL,
  `prix_un` int(30) NOT NULL,
  `ht` int(30) NOT NULL,
  `tva` varchar(10) NOT NULL,
  `tax` int(30) NOT NULL,
  `tc` int(30) NOT NULL,
  `supp` varchar(20) NOT NULL,
  `qte_supp` int(30) NOT NULL,
  `prix_unsup` int(30) NOT NULL,
  `totsup_ht` int(30) NOT NULL,
  `tax_sup` int(20) NOT NULL,
  `totsup_ttc` int(30) NOT NULL,
  `tot_ht` int(30) NOT NULL,
  `tot_ttc` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `date_facture`
--

INSERT INTO `date_facture` (`id`, `num_fact`, `date`, `acheteur`, `mat_fiscale`, `adresse`, `code_post`, `email`, `tel`, `nom_prod`, `reference`, `qte_prod`, `un_prod`, `prix_un`, `ht`, `tva`, `tax`, `tc`, `supp`, `qte_supp`, `prix_unsup`, `totsup_ht`, `tax_sup`, `totsup_ttc`, `tot_ht`, `tot_ttc`) VALUES
(6, '2019001', '2019-05-20', 'majid benabdallah', '46554', 'Rue Najd', 4072, 'majidblid@gmail.com', 92444889, 'Reservation Salle Reunion', '7654', 5, 'h', 5, 25, '.19', 2, 30, 'Chaise/CH', 4, 3, 12, 2, 14, 0, 0),
(7, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Coffee/Goblet', 0, 0, 0, 0, 0, 0, 0),
(8, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Coffee/Goblet', 0, 0, 0, 0, 0, 0, 0),
(9, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Coffee/Goblet', 0, 0, 0, 0, 0, 0, 0),
(10, '2019001', '2019-05-20', 'majid benabdallah', '46545', 'Rue Najd', 4070, 'majidblid@gmail.com', 2147483647, 'Resevation salle', '456', 5, 'h', 3, 15, '.19', 1, 18, 'Coffee/Goblet', 4, 1, 4, 1, 5, 19, 23),
(11, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(12, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(13, '', '', 'Big Yo', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(14, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(15, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(16, '123232', '2019-05-09', 'ahmed gharmoul', 'non', 'non', 0, 'non', 0, 'non', 'qsd', 50, '1', 5, 250, '.19', 4, 298, 'Chaise/CH', 10, 2, 20, 4, 24, 270, 321),
(17, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(18, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 76, 0, 'Aucun', 2, 200, 400, 76, 476, 400, 476),
(19, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(20, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(21, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0),
(22, '', '', '', '', '', 0, '', 0, '', '', 0, '', 0, 0, '.19', 0, 0, 'Aucun', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(21, 'ahmedgharmoul@gmail.com', '2019-05-16 15:27:55'),
(22, 'ahmedgharmoul@gmail.com', '2019-05-21 03:04:21'),
(23, 'ahmedgharmoul@gmail.com', '2019-05-21 03:04:42'),
(24, 'fdfsdf', '2019-05-21 03:05:34'),
(25, 'kom@kom.com', '2019-05-21 03:05:43'),
(26, 'kom@kom.com', '2019-05-21 03:06:37'),
(27, '', '2019-05-23 03:19:05'),
(28, '', '2019-05-23 03:19:31'),
(29, '', '2019-05-23 03:27:24'),
(30, '', '2019-05-23 03:27:29'),
(31, '', '2019-05-23 03:27:40'),
(32, 'bla@bla.com', '2019-05-25 14:54:23'),
(33, 'bla@bla.com', '2019-05-25 15:00:54'),
(34, 'bla@bla.com', '2019-05-25 15:02:11'),
(35, 'bla@bla.com', '2019-05-25 15:02:38'),
(36, '', '2019-06-03 12:27:07'),
(37, '', '2019-06-03 12:27:10'),
(38, '', '2019-06-25 09:15:49');

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `sujet`, `msg`) VALUES
(2, 'ahmed', 'ahmedgharmoul@gmail.com', 'djqsdhjqshd', 'jdqhsdqsjdh'),
(3, 'ahmed', 'dqslkjdqslkdj', 'dlqksjdlkj', 'dqlksjdlkqjsd'),
(4, 'ahla', 'ahla@gmail.com', 'ahla', 'ahla');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `inscription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `titre`, `description`, `date`, `image`, `inscription`) VALUES
(8, 'unity', 'ajzehkazjheljhdlkjdshfkjsdhflkjsdqhfljksj', '2019-05-14', '2.png', ''),
(9, 'test test ', 'sqdqsd', '2019-08-23', '1.png', ''),
(10, 'tes now at 6 am', 'sqdqkjsdhqjksldhjqskdqksdh', '2019-05-25', '58707962_2918972148113237_1379273526715875328_n.jpg', ''),
(11, 'hello', 'vkfjhdskjfh', '2019-05-19', '55861163_582222688854966_7551607706818183168_n.jpg', ''),
(12, 'test', 'test', '2019-05-05', '2.png', ''),
(13, 'test2', 'test2', '2019-06-14', 'img.jpg', ''),
(14, 'qsdqsd', 'dqsdqsd', '2019-06-02', '54524453_576269352887923_7520227340018778112_o.jpg', ''),
(15, 'Formation Unity | How to make your own Video Game', 'Formation Unity [ 30 / 31 Mars ] (Definition du logiciel - importation et réglage du mouvement - preparation du scene (texture+modélisation) - preparation de scenario du jeu - les interfaces ( gestion des boutons ) - Rendering  Prix : 40 dt', '2019-06-02', '54524453_576269352887923_7520227340018778112_o.jpg', ''),
(16, 'Formation Unity | How to make your own Video Game', 'Formation Unity [ 30 / 31 Mars ] (Definition du logiciel - importation et réglage du mouvement - preparation du scene (texture+modélisation) - preparation de scenario du jeu - les interfaces ( gestion des boutons ) - Rendering  Prix : 40 dt', '2019-06-02', '54524453_576269352887923_7520227340018778112_o.jpg', ''),
(17, 'Formation Unity | How to make your own Video Game', 'Formation Unity [ 30 / 31 Mars ] (Definition du logiciel - importation et réglage du mouvement - preparation du scene (texture+modélisation) - preparation de scenario du jeu - les interfaces ( gestion des boutons ) - Rendering  Prix : 40 dt', '2019-06-02', '54524453_576269352887923_7520227340018778112_o.jpg', ''),
(18, 'Formation Unity | How to make your own Video Game', 'test', '2019-06-14', '2.png', 'https://www.youtube.com/'),
(19, 'Formation Unity | How to make your own video game', 'Formation Unity [ 30 / 31 Mars ] (Definition du logiciel - importation et réglage du mouvement - preparation du scene (texture+modélisation) - preparation de scenario du jeu - les interfaces ( gestion des boutons ) - Rendering ', '2019-04-30', '2.png', ''),
(20, 'Formation Unity | How to make your own video game', 'Formation Unity [ 30 / 31 Mars ] (Definition du logiciel - importation et réglage du mouvement - preparation du scene (texture+modélisation) - preparation de scenario du jeu - les interfaces ( gestion des boutons ) - Rendering', '2019-03-30', '2.png', 'https://docs.google.com/forms/d/1wDB8I62E431elXWdnQ3hOkqOJM1LXK3lyLoWHcN6V80/edit');

-- --------------------------------------------------------

--
-- Structure de la table `expense`
--

CREATE TABLE `expense` (
  `id` int(10) NOT NULL,
  `pname` varchar(2000) NOT NULL,
  `pprice` float NOT NULL,
  `uid` int(3) NOT NULL,
  `date` date NOT NULL,
  `isdel` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `expense`
--

INSERT INTO `expense` (`id`, `pname`, `pprice`, `uid`, `date`, `isdel`) VALUES
(1, 'Potato Chips', 20, 1, '2018-03-08', 0),
(2, 'Chips', 20, 2, '2018-03-10', 1),
(3, 'Book', 400, 3, '2018-03-10', 0),
(4, 'Pen', 15, 3, '2018-01-10', 0),
(5, 'Laptop', 500000, 2, '2018-03-10', 0),
(0, 'this is an expense test', 1000, 0, '2019-05-25', 0),
(0, 'test', 1000, 0, '2019-06-25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `reciver`, `title`, `feedbackdata`, `attachment`) VALUES
(19, 'test@test.com', 'Admin', '??? ???? ???? ??????? ?? ????? ??????????', 'eazeaze', ' '),
(20, 'ahmedgharmoul@gmail.com', 'Admin', '??? ???? ???? ??????? ?? ????? ??????????', 'dklqsjdqslkdj', ' '),
(21, 'Admin', 'test@test.com', '', 'ok degla', ''),
(22, 'test@test.test', 'Admin', 'test', 'hello this is a message', ' '),
(23, 'Admin', 'test@test.test', '', 'hello this is a reply for your message\r\nbye', ''),
(24, 'test@test.test', 'Admin', 'test1', 'test1', ' '),
(25, 'Admin', 'test@test.test', '', 'test1 reply', ''),
(26, 'Admin', 'ahmedgharmoul@gmail.com', '', 'ahla wa sahla c est test', ''),
(27, 'Admin', 'final@final.com', '', 'hello final', ''),
(28, 'Admin', 'final@final.com', '', 'hello final', ''),
(29, 'Admin', 'final@final.com', '', 'hello final', ''),
(30, 'Admin', 'final@final.com', '', 'test test', ''),
(31, 'Admin', 'final@final.com', '', 'test test', ''),
(32, 'mahmoud', 'final@final.com', '', 'ahla', ''),
(33, 'test@test.com', 'final@final.com', '', 'ccwxcwxcwxcwxcwxc', ''),
(34, 'test@test.com', 'final@final.com', '', 'emchi', ''),
(35, 'test@test.com', 'final@final.com', '', 'e5er test', ''),
(36, 'final@final.com', 'test@test.com', '', 'this is a sender test', ''),
(37, 'test@test.com', 'final@final.com', '', 'hello this is a message from test', ''),
(38, 'admin', 'ahmedgharmoul@polytechnicien.tn', '', 'kqjdkqsjdkqjsd', ''),
(39, 'admin', 'ahmedgharmoul@polytechnicien.tn', '', 'kqjdkqsjdkqjsd', ''),
(40, 'mariam.guerdelli@gmail.com', 'ahmed@prof.tn', '', 'dkqljskdjqslkdjqlksdj', ''),
(41, 'mariam.guerdelli@gmail.com', 'ahmed@prof.tn', '', 'oiuoiuiouiouiou', '');

-- --------------------------------------------------------

--
-- Structure de la table `income`
--

CREATE TABLE `income` (
  `id` int(10) NOT NULL,
  `income` varchar(2000) NOT NULL,
  `tvalue` float NOT NULL,
  `uid` int(3) NOT NULL,
  `date` date NOT NULL,
  `isdel` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `income`
--

INSERT INTO `income` (`id`, `income`, `tvalue`, `uid`, `date`, `isdel`) VALUES
(1, 'Hack', 5000, 2, '2018-03-10', 1),
(2, 'Pocket Money', 1000, 3, '2018-03-10', 0),
(3, 'Won', 10000, 2, '2018-03-10', 0),
(0, 'this is a income test', 1000, 0, '2019-05-25', 1),
(0, 'this is an income test', 1500, 0, '2019-05-25', 0),
(0, 'edited', 2000, 0, '2019-05-25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(18, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-16 15:06:07'),
(19, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-16 15:06:58'),
(20, 'test@test.com', 'Admin', 'Create Account', '2019-05-16 15:07:49'),
(21, 'test@test.com', 'Admin', 'Send Feedback', '2019-05-16 15:10:35'),
(22, 'ahmedgharmoul@gmail.com', 'Admin', 'Send Feedback', '2019-05-16 15:14:05'),
(23, 'Admin', 'test@test.com', 'Send Message', '2019-05-16 15:15:13'),
(24, 'test@test.test', 'Admin', 'Create Account', '2019-05-16 15:17:14'),
(25, 'final@final.com', 'Admin', 'Create Account', '2019-05-16 15:34:32'),
(26, 'test@test.test', 'Admin', 'Send Feedback', '2019-05-17 09:16:10'),
(27, 'Admin', 'test@test.test', 'Send Message', '2019-05-17 09:19:01'),
(28, 'test@test.test', 'Admin', 'Send Feedback', '2019-05-17 09:45:13'),
(29, 'Admin', 'test@test.test', 'Send Message', '2019-05-17 09:45:36'),
(30, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-17 10:51:39'),
(31, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-17 10:54:19'),
(32, 'test@test.com', 'Admin', 'Open Space', '2019-05-17 10:55:44'),
(33, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-17 10:56:17'),
(34, 'test@test.com', 'Admin', 'Open Space', '2019-05-17 10:56:29'),
(35, 'test@test.com', 'Admin', 'Open Space', '2019-05-17 10:57:50'),
(36, 'test@test.com', 'Admin', 'Open Space', '2019-05-17 10:58:15'),
(37, 'walid@walid.com', 'Admin', 'Open Space', '2019-05-17 10:59:44'),
(38, 'mahmoud@gmail.com', 'Admin', 'Open Space', '2019-05-17 11:07:08'),
(39, 'mahmoud@gmail.com', 'Admin', 'Open Space', '2019-05-17 11:07:31'),
(40, 'mahmoud@gmail.com', 'Admin', 'Open Space', '2019-05-17 11:10:21'),
(41, 'mahmoud@gmail.com', 'Admin', 'Open Space', '2019-05-17 11:10:44'),
(42, 'dqsdqsd', 'Admin', 'Open Space', '2019-05-17 11:11:13'),
(43, 'dqsdqsd', 'Admin', 'Open Space', '2019-05-17 11:14:03'),
(44, 'dqsdqsd', 'Admin', 'Open Space', '2019-05-17 11:14:48'),
(45, 'dqsdqsd', 'Admin', 'Open Space', '2019-05-17 11:18:00'),
(46, 'majidblid@test.com', 'Admin', 'Open Space', '2019-05-17 13:45:42'),
(47, 'majidblid@test.com', 'Admin', 'Open Space', '2019-05-17 13:47:03'),
(48, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-18 16:46:21'),
(49, 'fdfsdf', 'Admin', 'Open Space', '2019-05-18 16:47:08'),
(50, 'test@heure.com', 'Admin', 'Open Space', '2019-05-19 10:32:46'),
(51, 'test@heure.com', 'Admin', 'Open Space', '2019-05-19 10:33:44'),
(52, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 10:34:53'),
(53, 'kom@kom.com', 'Admin', 'Open Space', '2019-05-19 10:42:40'),
(54, 'kom@kom.com', 'Admin', 'Open Space', '2019-05-19 10:43:09'),
(55, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:07:44'),
(56, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:10:00'),
(57, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:10:43'),
(58, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:12:48'),
(59, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:18:07'),
(60, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:18:48'),
(61, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:22:27'),
(62, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:24:37'),
(63, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:26:29'),
(64, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:28:41'),
(65, 'ahmedgharmoul@gmail.com', 'Admin', 'Open Space', '2019-05-19 11:29:21'),
(66, 'majidblid@gmail.com', 'Admin', 'Open Space', '2019-05-19 13:11:13'),
(67, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-20 13:20:45'),
(68, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-20 13:21:35'),
(69, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-20 13:25:41'),
(70, 'ahmedgharmoul@gmail.com', 'Admin', 'Create Account', '2019-05-20 13:38:59'),
(71, 'Ahmed Gharmoul', 'Admin', 'Reservation meeting/training', '2019-05-20 13:48:44'),
(72, 'Admin', 'ahmedgharmoul@gmail.com', 'Send Message', '2019-05-24 10:30:30'),
(73, 'Admin', 'final@final.com', 'Send Message', '2019-05-24 10:32:51'),
(74, 'Admin', 'final@final.com', 'Send Message', '2019-05-24 10:33:55'),
(75, 'Admin', 'final@final.com', 'Send Message', '2019-05-24 10:35:32'),
(76, 'Admin', 'final@final.com', 'Send Message', '2019-05-24 10:36:26'),
(77, 'Admin', 'final@final.com', 'Send Message', '2019-05-24 10:36:58'),
(78, 'mahmoud', 'final@final.com', 'Send Message', '2019-05-24 10:37:52'),
(79, 'test@test.com', 'final@final.com', 'Send Message', '2019-05-24 10:42:49'),
(80, 'test@test.com', 'final@final.com', 'Send Message', '2019-05-24 10:59:00'),
(81, 'test@test.com', 'final@final.com', 'Send Message', '2019-05-24 11:17:06'),
(82, 'final@final.com', 'test@test.com', 'Send Message', '2019-05-24 11:21:19'),
(83, 'test@test.com', 'final@final.com', 'Send Message', '2019-05-24 11:23:41'),
(84, 'test@test.com', 'Admin', 'Open Space', '2019-05-25 14:07:59'),
(85, 'test@test.com', 'Admin', 'Create Account', '2019-05-25 14:28:34'),
(86, 'bla@bla.com', 'Admin', 'Create Account', '2019-05-25 14:31:35'),
(87, 'bla@bla.com', 'Admin', 'Create Account', '2019-05-25 14:32:51'),
(88, 'bla@bla.com', 'Admin', 'Create Account', '2019-05-25 15:02:05'),
(89, 'djkqshd', 'Admin', 'Open Space', '2019-06-03 12:59:05'),
(90, 'testnv@gmail.com', 'Admin', 'Create Account', '2019-06-08 00:34:23'),
(91, 'ahmed@gmail.com', 'Admin', 'Open Space', '2019-06-22 17:48:13'),
(92, '789789789789789789', 'Admin', 'Open Space', '2019-06-22 17:51:00'),
(93, 'admin', 'ahmedgharmoul@polytechnicien.tn', 'Send Message', '2020-05-18 04:21:14'),
(94, 'admin', 'ahmedgharmoul@polytechnicien.tn', 'Send Message', '2020-05-18 04:21:59'),
(95, 'mariam.guerdelli@gmail.com', 'ahmed@prof.tn', 'Send Message', '2020-05-18 05:13:32'),
(96, 'mariam.guerdelli@gmail.com', 'ahmed@prof.tn', 'Send Message', '2020-05-18 05:15:46');

-- --------------------------------------------------------

--
-- Structure de la table `old_events`
--

CREATE TABLE `old_events` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `old_events`
--

INSERT INTO `old_events` (`id`, `titre`, `date`, `image`) VALUES
(2, 'Coffe talk par House Stark Coworking Space', '2019-03-30', 'coffe.jpg'),
(5, 'Design | Formation En Photoshop V1.0', '2019-02-16', '615px-photoshop_cc_icon.png'),
(6, 'Réunion de groupe \"Next Generation\"', '2019-05-15', '64754233_1300311856784963_5355348314260766720_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `openspace`
--

CREATE TABLE `openspace` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `heurea` text NOT NULL,
  `heured` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `openspace`
--

INSERT INTO `openspace` (`id`, `name`, `email`, `gender`, `mobile`, `heurea`, `heured`, `status`) VALUES
(1, 'Ahmed Gharmoul', 'dqsdqsd', 'Male', 87878787, '', '', 0),
(2, 'med ali klay', 'dqsdqsd', 'Male', 87878787, '', '', 0),
(3, 'last test', 'dqsdqsd', 'Female', 2147483647, '', '', 0),
(4, 'majid blid', 'majidblid@test.com', 'Student', 12345678, '', '', 0),
(5, 'majid blid', 'majidblid@test.com', 'Student', 12345678, '', '', 0),
(6, 'mahmoud el askri', 'ahmedgharmoul@gmail.com', 'Professional', 21513787, '', '', 0),
(8, 'test', 'ahmedgharmoul@gmail.com', 'Professional', 789456123, '05:04', '21:00', 0),
(9, 'test2', 'kom@kom.com', 'Professional', 789456123, '05:04', '21:00', 0),
(10, 'djkqshd', 'dqjksdhqskjhd@gmail.com', 'Professional', 8787, '04:05', '03:02', 1),
(11, '789789789789789789', 'ahmedgharmoul@gmail.com', 'Professional', 2147483647, '01:05', '04:01', 0);

-- --------------------------------------------------------

--
-- Structure de la table `privatedesk`
--

CREATE TABLE `privatedesk` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `profession` text NOT NULL,
  `email` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `privatedesk`
--

INSERT INTO `privatedesk` (`id`, `name`, `profession`, `email`, `mobile`, `status`) VALUES
(1, 'Ahmed Gharmoul', 'CTO', 'ahmedgharmoul@gmail.com', 123456789, 0),
(2, 'Majid blid', 'CEO', 'majidblid@gmail.com', 21546789, 0),
(3, '7', '7', 'ahmed@gmail.com', 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `trainingmeeting`
--

CREATE TABLE `trainingmeeting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `nbp` int(11) NOT NULL,
  `cafe` text NOT NULL,
  `comt` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trainingmeeting`
--

INSERT INTO `trainingmeeting` (`id`, `name`, `mobile`, `email`, `type`, `nbp`, `cafe`, `comt`, `status`) VALUES
(1, 'Ahmed Gharmoul', 55935796, 'ahmedgharmoul@gmail.com', 'Reunion', 12, 'oui', '121212', 0),
(2, 'Ahmed Gharmoul', 55935796, 'ahmedgharmoul@gmail.com', 'Reunion', 12, 'oui', '121212', 0),
(3, 'Ahmed Gharmoul', 55935796, 'ahmedgharmoul@gmail.com', 'Reunion', 12, 'oui', 'bonjour , la formation sera sur le developpement personelle , elle dura 30 heur , d\'ou chaque participant payera 50dt', 1),
(4, 'Ahmed Gharmoul', 55935796, 'ahmedgharmoul@gmail.com', 'Reunion', 12, 'oui', 'bonjour , la formation sera sur le developpement personelle , elle dura 30 heur , d\'ou chaque participant payera 50dt', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `jours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `status`, `jours`) VALUES
(21, 'Ahmed Gharmoul', 'ahmedgharmoul@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Male', '55935796', 'ezae', 'sans-titre.jpg', 1, 0),
(22, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', 'Male', '55935796', 'ezae', 'sans-titre.jpg', 1, 0),
(23, 'test', 'test@test.test', '098f6bcd4621d373cade4e832627b4f6', 'Male', '55935796', 'aaa', 'sans-titre.jpg', 1, 0),
(24, 'final', 'final@final.com', '2a1585a864d9e67627c6ae04c807a2c5', 'Female', '5555555', 'final', 'schumercrop-640x480.jpg', 1, 0),
(25, 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', 'Male', '454987987', 'test', 'logo-btc.jpg', 1, 0),
(27, 'bla', 'bla@bla.com', 'df5ea29924d39c3be8785734f13169c6', 'Male', '123456', 'bla', 'sans-titre.jpg', 1, 23),
(28, 'testnv', 'testnv@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'Male', '123456789', 'test', '55473450_418437708985444_1645841857353089024_n.jpg', 1, 26);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `date_facture`
--
ALTER TABLE `date_facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `old_events`
--
ALTER TABLE `old_events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `openspace`
--
ALTER TABLE `openspace`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `privatedesk`
--
ALTER TABLE `privatedesk`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trainingmeeting`
--
ALTER TABLE `trainingmeeting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `date_facture`
--
ALTER TABLE `date_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `old_events`
--
ALTER TABLE `old_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `openspace`
--
ALTER TABLE `openspace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `privatedesk`
--
ALTER TABLE `privatedesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `trainingmeeting`
--
ALTER TABLE `trainingmeeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
