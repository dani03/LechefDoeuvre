-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 16 Avril 2018 à 23:18
-- Version du serveur :  5.7.21-0ubuntu0.17.10.1
-- Version de PHP :  7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CDEcommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(100) NOT NULL,
  `categorie_titre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_titre`) VALUES
(1, 'telephones'),
(2, '0.portables'),
(3, 'tablettes'),
(4, 'caméras');

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `marque_id` int(100) NOT NULL,
  `marque_titre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`marque_id`, `marque_titre`) VALUES
(1, 'samsung'),
(2, 'apple'),
(3, 'nikon'),
(4, 'one plus one');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `prod_id` int(100) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `quantité` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `product_id` int(100) NOT NULL,
  `product_titre` varchar(255) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_prix` int(255) NOT NULL,
  `product_marque` int(200) NOT NULL,
  `product_descrip` text NOT NULL,
  `product_image` text NOT NULL,
  `product_motcles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`product_id`, `product_titre`, `product_cat`, `product_prix`, `product_marque`, `product_descrip`, `product_image`, `product_motcles`) VALUES
(1, 'samsung galaxy S9', 1, 800, 1, ' nouveau samsung technologie avancée', 'balloteli.jpg', 'samsung, galaxy, telephones'),
(2, 'iphone X', 1, 1000, 2, 'iphone inventer l\'appareil photo', '1479776948517.jpg', 'apple, X, iphone'),
(3, 'nikon EM 35', 4, 40, 3, 'Appareil photo Nikon EM 35mm pour film de 1980 s-4000 px ultra performant.', 'nikon2.png', 'nikon, photo, appareil, pictures'),
(4, 'samsung galaxy S9', 1, 780, 1, 'Pour la première fois sur un smartphone, l\'appareil photo est doté d\'une double ouverture. Il peut ainsi s\'adapter ...\r\nSamsung · Android · Écran 5,8 po · Résolution de l\'appareil photo arrière: 12 MP · Résolution de la caméra avant: 8 MP · 4G LTE · 22h en conversation · 163 grammes · 64 GO · Réseau GSM.', 'samsungS9.png', 'samsung, galaxy, telephones'),
(5, 'iphone X', 1, 1000, 2, 'Un iPhone si immersif qu\'il s\'efface au profit de la seule expérience. Un iPhone si intelligent qu\'il réponde à un geste, à la ...\r\nApple · iOS · Résolution de l\'appareil photo arrière: 12 MP · Résolution de la caméra avant: 7 MP · 4G LTE · 21h en conversation · 174 grammes · 64 GO · Quadri-bande · Étanche', 'IPhone_X.png', 'apple, X, iphone, riche'),
(6, 'Macbook pro 2015', 2, 2300, 2, 'D\'une finesse et d\'une légèreté hors du commun, le MacBook Pro est encore plus rapide et plus puissant qu\'avant. Il arbore l\'écran plus lumineux et plus coloré. Et il est doté de la Touch Bar, une fine bande Multi-Touch en verre intégrée au clavier qui vous propose en temps réel les outils les plus adaptés à ce que vous faites. Innovant et créatif, le MacBook Pro a été inventé pour que vous puissiez tout réinventer.', 'mac.png', 'mac, macbook, apple , riche, mackbook air'),
(7, 'one plus one 6', 1, 350, 4, 'OnePlus · Android · Résolution de l\'appareil photo arrière: 20 MP · Résolution de la caméra avant: 16 MP · 4G LTE · 153 grammes · 64 GO · Réseau GSM · Réseau CDMA · Quadri-bande\r\n\r\nCapturez une photo parfaite, à chaque prise de vue. Le OnePlus 5 s\'adapte automatiquement à votre environnement, en optimisant la netteté et la clarté de votre prise de vue, pour une qualité professionnelle, automatisée. D\'une grande fiabilité, le mode Pro vous permet de personnaliser les réglages comme l\'ISO, la vitesse d\'obturation et bien d\'autres.', 'one.jpeg', 'one, 5, oneplusone'),
(8, 'samsung galaxy S8', 1, 999, 1, 'telephone samsung ', '1479776948517.jpg', 'samsung, galaxy, telephones');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pays` text NOT NULL,
  `user_ville` varchar(100) NOT NULL,
  `user_contact` int(11) NOT NULL,
  `user_photo` text NOT NULL,
  `user_adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`user_id`, `user_name`, `user_password`, `user_email`, `user_pays`, `user_ville`, `user_contact`, `user_photo`, `user_adresse`) VALUES
(1, 'Daniel', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 'issoasamedaniel@yahoo.fr', 'france', 'paris', 934234321, '1479776948517.jpg', 'ert');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`marque_id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `ip_adresse` (`session_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `marque_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
