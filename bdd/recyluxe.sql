-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 08 jan. 2024 à 12:16
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recyluxe`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `prix` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `description`, `prix`) VALUES
(1, 'Sacoche Prada Nylon', 'images/PradaBag.jpg', 'Sacoche Prada Etat 8/10. ', '500'),
(2, 'Bonnet CP Compagny', 'images/bonnetCP.jpg', 'Bonnet neuf jamais porté étiquette encore accroché à l\'article.', '60'),
(4, 'Vintage Prada Sacoche', 'images/vintagePrada.jpg', 'Article 7/10, interieur un peu usé mais sinon le reste de la sacoche est nickel.', '200'),
(6, 'Col Roulé Stone Island M', 'images/colroulestone.jpg', 'Col roulé en excellent état 9.5/10. Taille M convient également pour un taille L. Aucune trace d\'usure sur le pull. Patch Stone Island également quasi neuf', '130'),
(7, 'Pull Bleu Marine AMI Paris S', 'images/bleuAmi.jpg', 'Pull dans un bon état il à souvent été porté mais avec soin, taille S. Etat 7/10 (petit accroc au niveau de la manche droite). ', '80'),
(8, 'Veste Mi-Saison Stone Island L', 'images/jacketStone.jpg', 'Veste en très bon état 8.5/10. Taille L convient également pour un XL. Aucune trace d\'usure mais il y\'a un accroc a l\'intérieur de la veste donc il n\'est pas facilement visible. Prix neuf 800€', '369'),
(9, 'Pull Maille Stone Island S', 'images/pullStone.jpg', 'Pull en état 9/10 donc très bon état. Pas de trace particulières mais l\'article à été porté 1 ans. Taille S. ', '140'),
(10, 'Jogging Amiri 16ans', 'images/joggingAmiri.jpg', 'Jogging amiri taille enfant (16 ans), couleur noire. Etat neuf avec étiquette.', '100'),
(11, 'Sweatshirt CP Company', 'images/sweatCP.jpg', 'Sweat cp compagny bleu marine 6/10. Il a malheureusement été délavé suite aux multiples lavages, il tend un peu vers le violet. ', '60'),
(12, 'Cardigan Gris AMI taille XL', 'images/pullAmi.jpg', 'Cardigan quasiment neuf d\'état 9/10. Aucune trace d\'usure présente. Aucun défaut sur les boutons également.', '130');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, '180230', '$2y$10$9F0/p5ZVYVPRFMNIwpfGQ.Ifs/TztkYuyfi7swIpphU7pkebYkOZS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
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
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
