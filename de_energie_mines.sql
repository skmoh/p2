-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 avr. 2024 à 03:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `de_energie_mines`
--

-- --------------------------------------------------------

--
-- Structure de la table `acquesition`
--

CREATE TABLE `acquesition` (
  `id` int(11) NOT NULL,
  `type_dacquesition` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `acquesition`
--

INSERT INTO `acquesition` (`id`, `type_dacquesition`) VALUES
(1, 'Marche'),
(2, 'Marche 2');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `nom`, `password`) VALUES
(1, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(2, 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Numero_dinventaire` varchar(150) NOT NULL,
  `Numero_de_serie` varchar(115) NOT NULL,
  `type_dacquesition` varchar(150) NOT NULL,
  `Numero_dacquesition` varchar(115) NOT NULL,
  `lot` varchar(150) NOT NULL,
  `Article` varchar(150) NOT NULL,
  `Designantion` varchar(150) NOT NULL,
  `Marque` varchar(150) NOT NULL,
  `Modele` varchar(150) NOT NULL,
  `Etat` varchar(150) NOT NULL,
  `date_de_fin_garentie` date NOT NULL,
  `date_debut` date NOT NULL,
  `Entite` varchar(150) NOT NULL,
  `personne` varchar(150) NOT NULL,
  `commentaire` varchar(5000) NOT NULL,
  `Batiment` varchar(150) NOT NULL,
  `Etage` varchar(150) NOT NULL,
  `Bureau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Numero_dinventaire`, `Numero_de_serie`, `type_dacquesition`, `Numero_dacquesition`, `lot`, `Article`, `Designantion`, `Marque`, `Modele`, `Etat`, `date_de_fin_garentie`, `date_debut`, `Entite`, `personne`, `commentaire`, `Batiment`, `Etage`, `Bureau`) VALUES
('12345/GL', 'x', 'Marche', 'Marche/16/2019', 'lot 1:ordinateur et Imprimantes\r\n', 'article 1', 'Ecran', 'HP', '22\" 1680/1050', 'Affectation', '2024-04-30', '0000-00-00', 'Non definie', 'Non definie', '', 'B1', 'etage 1', 'bureau 4'),
('43205/GL', 'x', 'Marche', 'Marche /23/2004', 'lot 2:Eran', 'Armoire COMPAQ RACK', 'Armoire', 'COMPAQ', 'RACK', 'Affectation', '2030-04-10', '2017-04-18', 'Non definie', 'Non definie', '', 'b2', 'Etage 2', 'Bureau 3');

-- --------------------------------------------------------

--
-- Structure de la table `caracteristique_du_materiel`
--

CREATE TABLE `caracteristique_du_materiel` (
  `id` int(11) NOT NULL,
  `Numero_dinventaire` varchar(150) DEFAULT NULL,
  `Entite` varchar(255) DEFAULT NULL,
  `personne` varchar(255) DEFAULT NULL,
  `Commentaire` varchar(555) DEFAULT NULL,
  `date_debut` date NOT NULL,
  `Batiment` varchar(150) NOT NULL,
  `Etage` varchar(150) NOT NULL,
  `Bureau` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `caracteristique_du_materiel`
--

INSERT INTO `caracteristique_du_materiel` (`id`, `Numero_dinventaire`, `Entite`, `personne`, `Commentaire`, `date_debut`, `Batiment`, `Etage`, `Bureau`) VALUES
(0, '43205/GL', 'Non definie', 'Non definie', NULL, '2019-04-09', 'Batiment 1', 'Etage 2', 'Bureau 4');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `etat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `etat`) VALUES
(1, 'Affectation'),
(2, 'en stock neuf'),
(3, 'en stock disponible');

-- --------------------------------------------------------

--
-- Structure de la table `info_livraison`
--

CREATE TABLE `info_livraison` (
  `id` int(11) NOT NULL,
  `Numero_dinventaire` varchar(150) DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `Numero_bon_de_livraison` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `info_livraison`
--

INSERT INTO `info_livraison` (`id`, `Numero_dinventaire`, `date_livraison`, `Numero_bon_de_livraison`) VALUES
(0, '43205/GL', '2024-05-30', '23/2024');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(1, 'reda1234', 'reda1@gmail.com', 20, 'reda1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acquesition`
--
ALTER TABLE `acquesition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Numero_dinventaire`);

--
-- Index pour la table `caracteristique_du_materiel`
--
ALTER TABLE `caracteristique_du_materiel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Numero_dinventaire` (`Numero_dinventaire`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info_livraison`
--
ALTER TABLE `info_livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Numero_dinventaire` (`Numero_dinventaire`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acquesition`
--
ALTER TABLE `acquesition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `caracteristique_du_materiel`
--
ALTER TABLE `caracteristique_du_materiel`
  ADD CONSTRAINT `caracteristique_du_materiel_ibfk_1` FOREIGN KEY (`Numero_dinventaire`) REFERENCES `articles` (`Numero_dinventaire`);

--
-- Contraintes pour la table `info_livraison`
--
ALTER TABLE `info_livraison`
  ADD CONSTRAINT `info_livraison_ibfk_1` FOREIGN KEY (`Numero_dinventaire`) REFERENCES `articles` (`Numero_dinventaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
