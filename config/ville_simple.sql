-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 déc. 2018 à 18:52
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `lat`, `lng`) VALUES
(10, 'adjame', 5.36507, -4.02357),
(11, 'attecoube', 5.33625, -4.04145),
(12, 'cocody', 5.36022, -3.96744),
(13, 'koumassi', 5.30298, -3.94194),
(14, 'marcory', 5.30271, -3.98274),
(15, 'plateau', 5.32332, -4.02357),
(16, 'portbouet', 5.27725, -3.8859),
(17, 'treichville', 5.29209, -4.01336),
(18, 'yopougon', 5.31767, -4.08999),
(19, 'abengourou', 6.7157, -3.48013),
(20, 'aboisso', 5.47451, -3.20308),
(21, 'adzope', 6.10715, -3.85535),
(22, 'agboville', 5.9355, -4.22308),
(23, 'agnibilekrou', 7.13028, -3.20308),
(24, 'anyama', 5.48771, -4.05166),
(26, 'beoumi', 7.67309, -5.57223),
(27, 'bingerville', 5.35036, -3.87571),
(28, 'bocanda', 7.06591, -4.49543),
(29, 'bondoukou', 8.04788, -2.80786),
(30, 'bongouanou', 6.6487, -4.20515),
(31, 'bonoua', 5.27118, -3.59393),
(33, 'boundiali', 9.51836, -6.48232),
(34, 'dabou', 5.32621, -4.36679),
(35, 'daloa', 6.88833, -6.43969),
(36, 'bouaflé', 6.98274, -5.74051),
(37, 'danané', 7.2676, -8.14478),
(38, 'daoukro', 7.0654, -3.95724),
(39, 'dimbokro', 6.65747, -4.71223),
(40, 'divo', 5.84154, -5.36255),
(41, 'douekoue', 6.74738, -7.36246),
(42, 'ferkessedougou', 9.5842, -5.19536),
(43, 'gagnoa', 6.15144, -5.95154),
(44, 'gohitafla', 7.48828, -5.88024),
(45, 'grandlahou', 5.13652, -5.02605),
(46, 'grandbassam', 5.22594, -3.75367),
(47, 'Grand-Bereby', 4.65137, -6.92205),
(48, 'guiglo', 6.54906, -7.49765),
(49, 'issia', 6.48761, -6.58368),
(50, 'jacqueville', 5.20598, -4.42335),
(52, 'katiola', 8.14023, -5.09631),
(53, 'korhogo', 9.46693, -5.61426),
(55, 'mbahiakro', 7.4548, -4.3411),
(58, 'mankono', 8.05991, -6.18983),
(59, 'odienne', 9.51888, -7.55722),
(60, 'oumé', 6.37413, -5.40966),
(61, 'sassandra', 4.95128, -6.09175),
(62, 'seguela', 7.96018, -6.6745),
(63, 'sinfra', 6.62334, -5.91456),
(64, 'soubré', 5.78662, -6.58902),
(65, 'tengrela', 10.482, -6.41306),
(66, 'tiassale', 5.90426, -4.82614),
(67, 'Toulepleu', 6.57956, -8.4102),
(68, 'toumodi', 6.55603, -5.01565),
(69, 'vavoua', 7.37506, -6.47699),
(70, 'yamoussoukro', 6.82762, -5.28934),
(71, 'zuenoula', 7.42404, -6.05204),
(72, 'Bouna', 9.27166, -2.99256),
(73, 'lakota', 5.85947, -5.67735),
(74, 'kani', 8.47784, -6.60504),
(75, 'man', 7.40643, -7.55722),
(76, 'dabakala', 8.36626, -4.43364),
(77, 'kong', 9.15102, -4.61018),
(78, 'Touba', 8.28417, -7.68194),
(79, 'bouake', 7.69047, -5.03905);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
