-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Décembre 2017 à 17:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `easyprint`
--

-- --------------------------------------------------------

--
-- Structure de la table `article_item`
--

CREATE TABLE `article_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(100) NOT NULL,
  `article_type_id` int(10) UNSIGNED NOT NULL,
  `statut` enum('actif','inactif') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

CREATE TABLE `article_type` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `statut` enum('actif','inactif') NOT NULL DEFAULT 'actif',
  `category_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article_type`
--

INSERT INTO `article_type` (`id`, `label`, `statut`, `category_id`, `url`) VALUES
(1, 'Cartes de visite standard', 'actif', 1, 'cartes_de_visite_standard'),
(7, 'Cartes de visite Deluxe', 'actif', 1, 'cartes_de_visite_deluxe'),
(8, 'Cartes de visite kraft', 'actif', 1, 'carte_de_visite_kraft'),
(9, 'Cartes de visite Soft Touch', 'actif', 1, 'cartes_de_visite_soft_touch'),
(10, 'Cartes de visite effet Nacré', 'actif', 1, 'cartes_de_visite_effet_nacre'),
(11, 'Porte-cartes de visite', 'actif', 1, 'porte_cartes_de_visite'),
(12, 'Cartes de visite ultra-épaisses', 'actif', 1, 'cartes_de_visite_ultra_epaisses'),
(13, 'Cartes de visite à tranche colorée', 'actif', 1, 'cartes_de_visite_a_tranche_coloree'),
(14, 'Tailles et formes des cartes de visite', 'inactif', 1, 'tailles_et_formes_des_cartes_de_visite'),
(15, 'Cartes de visite avec finitions premium', 'inactif', 1, 'cartes_de_visite_avec_finitions_premium'),
(16, 'Services graphique', 'inactif', 1, 'services_graphique'),
(17, 'Coques Samsung Galaxy', 'actif', 2, 'coques_samsung_galaxy'),
(18, 'Coques iPhone', 'actif', 2, 'coques_iphone');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `statut` enum('actif','inactif') NOT NULL DEFAULT 'actif',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `label`, `statut`, `created_at`, `url`) VALUES
(1, 'Cartes de Visite', 'actif', '2017-11-23 14:09:46', 'cartes_de_visite'),
(2, 'Coques pour téléphone', 'actif', '2017-11-23 15:30:47', 'coques_pour_telephone'),
(3, 'Sacs et vêtements', 'actif', '2017-11-23 17:52:42', 'sacs_et_vetements');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `mail_user` varchar(100) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `username_user` varchar(255) DEFAULT NULL,
  `firstname_user` varchar(255) DEFAULT NULL,
  `lastname_user` varchar(255) DEFAULT NULL,
  `id_user_type` int(2) NOT NULL DEFAULT '1',
  `state` enum('active','inactive','deleted') NOT NULL DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `mail_user`, `password_user`, `username_user`, `firstname_user`, `lastname_user`, `id_user_type`, `state`) VALUES
(1, 'zefzef@zefzef.Ze', '$2y$10$gK8n0UdVgTlz233svzBIjOhgdYmNGNts5ymcEanxXPknkRRZPbq4e', NULL, NULL, NULL, 1, 'inactive'),
(2, 'dzdzazdza@azdaz.az', '$2y$10$UkQ3wGHXTY6OpkY/I099j.kkuoIWHEbSEdOSa5rR6obftby1t1sty', NULL, NULL, NULL, 1, 'inactive'),
(3, 'fzefzfez@zefzef.ZEF', '$2y$10$jaLCYcVAplakD4LhkQIB9uTqy2r50VlAdoZWxuuCxZzMj.butZ3Km', NULL, NULL, NULL, 1, 'inactive'),
(4, 'zefze@zefz.ze', '$2y$10$tHkP4pYopoC8e4opc.R6U.RYIJcFNUlK3QZKKPHwccj1ksI9HGx2W', NULL, NULL, NULL, 1, 'inactive'),
(5, 'gergerg@erger.Rg', '$2y$10$iyLM1cE7.fYBWb1OZTcEIOSXiLakoAFVrJ0OINMIoG4.pQwAbQMgO', NULL, NULL, NULL, 1, 'inactive'),
(6, 'azdazdazd@azdazdaz.AZd', '$2y$10$7LKYSFudO6eSAYrVcHFpRe4RolhwiXPiRrZqOpk4LymFWvUuLkP86', NULL, NULL, NULL, 1, 'inactive'),
(7, 'qsdqsd@qsdqsd.sqdq', '$2y$10$/0OCFgfn7UdqKqnUNHQXveLK/UAu8Wu3D1hRZMK.d7zzMGeug/19i', NULL, NULL, NULL, 1, 'inactive'),
(8, 'sdcsdc@sdcs.sdc', '$2y$10$6KpJ9YdAJuRlBSCsNAhRJOkUbt6MYE7PKLpwGODu6VZ7.NZcPq1DG', NULL, NULL, NULL, 1, 'inactive'),
(9, 'dvdfv@dvdf.dfv', '$2y$10$rMetEwakyJJFDdFz3UKujuRkhBVcnoHyyOqN3sc7j8mFTwuupQOUy', NULL, NULL, NULL, 1, 'inactive'),
(10, 'fezfz@zef.zef', '$2y$10$sAmgXkKhSuEnBBuq18f6.OPFyyO9tjlMGtML3TX9PFxBqAtN6Q5cq', NULL, NULL, NULL, 1, 'inactive'),
(11, 'sqdqsd@dqs.qs', '$2y$10$jk/XuW.xXn0Wd/auN/tuUOfu5ULoTvMbdkM5ax/KJfOhy0kuPj8uq', NULL, NULL, NULL, 1, 'inactive'),
(12, 'qscsqc@qscqs.qsc', '$2y$10$WQj2Lg9RKpMK.9eYQvYDTuWbf1RdIEH8C1.iHSOUDzCCzpsWZ2Zk.', NULL, NULL, NULL, 1, 'inactive'),
(13, 'qscqsc@cqs.qsc', '$2y$10$5e60qxSYb3vfS95lZQm5GueByGnV/chj9HEUqam3FRcO7tyOKXPNe', NULL, NULL, NULL, 1, 'inactive'),
(14, 'qsdqsd@sdqs.qsd', '$2y$10$p5ai3a.0.Prf0Ap.fGG7c.kRCoYbFp0D..CnureWQHy0wRJQ6oSgu', NULL, NULL, NULL, 1, 'inactive'),
(15, 'scsdc@dscdsc.sdc', '$2y$10$0OyPi8Nvg2KmzYN4GmyoAeybDdpq0Lq7NUxG9dqgPpSWkpR45DdbW', NULL, NULL, NULL, 1, 'inactive'),
(16, 'grgergerg@ergerg.Erg', '$2y$10$tfQ3yS4fTXZ2qo7Zchdjge2AX8DMQaSnviZ6mAsvGQAmfE8Rx6oiu', NULL, NULL, NULL, 1, 'inactive'),
(17, 'zefezf@zdze.ZEf', '$2y$10$QPQxHFjsDQrPhb/dBxX/K.7SMW0Uyllfqpix8LKfpSgu3dOo/igia', NULL, NULL, NULL, 1, 'inactive'),
(18, 'admin@admin.com', '$2y$10$jzXzQikygjPxWr6nYSZF7O/rfR71l8HNvmHCEPuF7Nkjxia5YNR36', NULL, NULL, NULL, 1, 'inactive'),
(19, 'drole@lol.Com', '$2y$10$kJwfD7encAUy523ADzG9fermDfXPoCDnEhNlQvKtlQCI7KEPmVEoe', NULL, NULL, NULL, 1, 'inactive'),
(20, 'lol@lol.com', '$2y$10$U.txNRBY6OmhszZFiQgRsO2pWwqSnNMxrAkyOQDm0xDGa84C5B0/W', NULL, NULL, NULL, 1, 'inactive'),
(21, 'drole@drole.Com', '$2y$10$adcNCPV4vkraY4EIkqAp5O8bKzhc8pkroJLHP8jp8673EP9U2pVWC', NULL, NULL, NULL, 1, 'inactive'),
(22, 'ghn@ezf.com', '$2y$10$3gJTJT5b1hgJng17otwg7uCj5MXhn8QfT461x1bOzqzpo/61D1/su', NULL, NULL, NULL, 1, 'inactive'),
(23, 'ezgg@egze.com', '$2y$10$xpZhDe6bLexuYVfvN7tjtO21YlxOqdNTaS32QkaJ7tCYROibixu..', 'ygbh', 'yvhbj', 'vgbhj', 1, 'inactive'),
(24, 'fgez@zeg.com', '$2y$10$RfMivGXXqNn7ftwP1J8Jd.2ONT7nG4l61gEDn7MCaIy6i.sZoibkq', NULL, NULL, NULL, 1, 'inactive'),
(25, 'zgze@gzeg.com', '$2y$10$SjyO/KhNC1JZfGcKOzYOTOGGtr2sjTAnHTA9f6x.Btw0xsw2UJobq', 'gz', 'ezgz', 'ezf', 1, 'inactive'),
(26, 'fat@fat.com', '$2y$10$uzORjhHWn3Otb19V5ZdwluBmtuAhhd8SG/yVPiyUIIiXYYNAMj0HO', 'fat', 'fat', 'fat', 1, 'inactive'),
(27, 'new@hot.com', '$2y$10$43mNTxnMsd3hclJLmrF6UeM2si5oxX7ra0ASO56FhEAc9kRFjcaga', 'user', 'user', 'user', 1, 'inactive');

-- --------------------------------------------------------

--
-- Structure de la table `user_type`
--

CREATE TABLE `user_type` (
  `id_user_type` int(10) UNSIGNED NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_type`
--

INSERT INTO `user_type` (`id_user_type`, `label`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article_item`
--
ALTER TABLE `article_item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_user_type`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article_item`
--
ALTER TABLE `article_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article_type`
--
ALTER TABLE `article_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_user_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
