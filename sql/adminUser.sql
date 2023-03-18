-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 18 mars 2023 à 15:04
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quaiantique`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

-- CREATE TABLE `user` (
--   `id` int(11) NOT NULL,
--   `email` varchar(180) NOT NULL,
--   `roles` longtext NOT NULL COMMENT '(DC2Type:json)',
--   `password` varchar(255) NOT NULL,
--   `name` varchar(50) NOT NULL,
--   `firstname` varchar(50) NOT NULL,
--   `phone_number` varchar(10) DEFAULT NULL,
--   `guest_booking` int(11) DEFAULT NULL,
--   `is_verified` tinyint(1) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `name`, `firstname`, `phone_number`, `guest_booking`, `is_verified`) VALUES
(1, 'ag.admin@lequaiantique.ellipseservices13.fr', '[\"ROLE_USER\",\"ROLE_ADMIN\"]', '$2y$13$tUgWHqNOGfRd.2AA9oPTaeXcGjz7bFHaZrNLo4kF3Twomoomj4TXa', 'GUICHARDON', 'Aurélie', NULL, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
