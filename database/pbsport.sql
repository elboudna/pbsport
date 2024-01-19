-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 jan. 2024 à 21:55
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pbsport`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

DROP TABLE IF EXISTS `abonnements`;
CREATE TABLE IF NOT EXISTS `abonnements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `utilisateur_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('mensuel','annuel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abonnements_utilisateur_id_foreign` (`utilisateur_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `bannieres`
--

DROP TABLE IF EXISTS `bannieres`;
CREATE TABLE IF NOT EXISTS `bannieres` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bannieres`
--

INSERT INTO `bannieres` (`id`, `titre`, `sous_titre`, `image`, `url`, `created_at`, `updated_at`) VALUES
(3, 'Evènement à l\'approche', 'proche', '1704914909.png', 'https://itega.ca', '2024-01-11 00:28:29', '2024-01-11 00:28:29'),
(4, 'Nouveau Produit', 'Tshirt', '1704915016.jpg', 'https://itega.ca', '2024-01-11 00:30:16', '2024-01-11 00:30:16'),
(6, 'Emploie du temps', 'proche', '1705263087.png', 'https://youtube.ca', '2024-01-15 01:11:27', '2024-01-15 01:11:27');

-- --------------------------------------------------------

--
-- Structure de la table `coachs`
--

DROP TABLE IF EXISTS `coachs`;
CREATE TABLE IF NOT EXISTS `coachs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coachs`
--

INSERT INTO `coachs` (`id`, `nom`, `prenom`, `email`, `telephone`, `niveau`, `description`, `facebook`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Boudnaoui', 'Mehdi', 'medi.mtfi@gmail.com', '4383738291', 'Oui', 'Tennis Canada Niveau 4, Expert en statiques avancés, Spécialiste à l\'enseignement du service au tennis, Commentateur sur RDS & BAC en Sciences du Sport', 'https://www.facebook.com/ElBoudna', '1705277251.jpg', '2024-01-15 05:07:31', '2024-01-15 05:07:31'),
(4, 'Boudnaoui', 'Hamid', 'medi.mtfi@gmail.com', '4383738291', 'Non', 'Directeur et Entraîneur-chef du programme compétitif, Entraîneur-chef du programme élite d’été U10', 'https://www.facebook.com/ElBoudna', '1705277284.jpg', '2024-01-15 05:08:04', '2024-01-15 05:08:04'),
(2, 'Echeveria', 'Auristellatia', 'medi.mtfi@gmail.com', '4383738291', 'Oui', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.', 'https://www.facebook.com/ElBoudna', '1705276689.jpg', '2024-01-15 04:58:09', '2024-01-15 04:58:09'),
(5, 'Boudnaoui', 'Jacob', 'medi.mtfi@gmail.com', '4383738291', 'Oui', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', 'https://www.facebook.com/ElBoudna', '1705279245.jpg', '2024-01-15 05:40:45', '2024-01-15 05:40:45'),
(6, 'Boudnaoui', 'Roberto', 'medi.mtfi@gmail.com', '4383738291', 'Oui', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', 'https://www.facebook.com/ElBoudna', '1705297494.jpg', '2024-01-15 10:44:54', '2024-01-15 10:44:54');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('Tournoi','Bootcamp','Formation') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_joueur` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `heure` time NOT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `categorie` json NOT NULL,
  `niveau` enum('Débutant','Intermediaire','Avancé') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_restante` int(11) DEFAULT NULL,
  `date_limite_inscription` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `type`, `nom`, `description`, `nbr_joueur`, `date_debut`, `heure`, `lieu`, `adresse`, `prix`, `categorie`, `niveau`, `image`, `lien`, `email`, `telephone`, `place_restante`, `date_limite_inscription`, `created_at`, `updated_at`) VALUES
(1, 'Tournoi', 'Tournoi janvier', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 36, '2024-01-27 00:00:00', '10:00:00', 'Tennis 13', 'Laval', '40.00', '[\"Double mixte\", \"Double\"]', 'Intermediaire', '1705701139.png', NULL, 'medi.mtfi@gmail.com', '4383738291', NULL, '2024-01-19 00:00:00', '2023-12-26 03:04:40', '2024-01-20 02:52:27'),
(2, 'Bootcamp', 'Bootcamp Janvier #1', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 32, '2024-01-09 00:00:00', '18:00:00', 'Tennis 13', 'Autoroute Laval', '25.00', '[\"Double mixte\", \"Double\", \"Simple\"]', 'Intermediaire', '1703789502.jpg', NULL, 'medi.mtfi@gmail.com', '5555555555', NULL, NULL, '2023-12-28 23:51:42', '2023-12-28 23:51:42'),
(3, 'Tournoi', 'dezjferzjkfh', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', 31, '2022-01-01 00:00:00', '10:00:00', 'Tennis 13', 'Laval', '34.00', '[\"Double\"]', 'Débutant', '1703967149.jpg', NULL, 'medi.mtfi@gmail.com', '4383738291', NULL, NULL, '2023-12-28 23:54:44', '2023-12-31 01:12:29');

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

DROP TABLE IF EXISTS `galeries`;
CREATE TABLE IF NOT EXISTS `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `nom`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ottawa tournoi', '1704916974.jpg', '2024-01-11 01:02:54', '2024-01-11 01:02:54');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_imageable_id_imageable_type_index` (`imageable_id`,`imageable_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `imageable_id`, `imageable_type`, `chemin`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Models\\Produit', '74eVWJCEcxdPHngJT95RozeG7k5mQkPIkEjupSFb.jpg', '2023-12-28 06:36:47', '2023-12-28 06:36:47'),
(2, 2, 'Produit', 'i2LEeDN9fN6fNlEk98y25U5zuZqM3yGS4M6aoL8U.jpg', '2023-12-28 23:46:44', '2023-12-28 23:46:44'),
(3, 2, 'Produit', '6VR4f1YJnK3C0gX5s2tewggVCiP0L1RXY4x7m9fX.jpg', '2023-12-28 23:46:44', '2023-12-28 23:46:44'),
(4, 3, 'Produit', 'mvvolG32LNWnlr4NcI3ZtpBxhn21Q338QPkV9USt.jpg', '2024-01-15 11:44:13', '2024-01-15 11:44:13');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_09_11_201323_create_roles_table', 1),
(3, '2023_09_11_201423_create_utilisateurs_table', 1),
(4, '2023_09_15_180216_create_produits_table', 1),
(5, '2023_09_15_180235_create_images_table', 1),
(6, '2023_10_12_173729_create_stock_table', 1),
(7, '2023_10_12_174638_create_paniers_table', 1),
(8, '2023_10_12_174646_create_panier_produit_table', 1),
(9, '2023_10_24_172707_create_produit_types_table', 1),
(10, '2023_12_01_201058_create_evenements_table', 1),
(11, '2023_12_14_233507_create_coachs_table', 1),
(12, '2023_12_15_191629_create_galeries_table', 1),
(13, '2023_12_15_192149_create_abonnements_table', 1),
(14, '2024_01_10_180437_create_bannieres_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `utilisateur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paniers_utilisateur_id_foreign` (`utilisateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `paniers`
--

INSERT INTO `paniers` (`id`, `utilisateur_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-16 01:25:08', '2023-12-16 01:25:08');

-- --------------------------------------------------------

--
-- Structure de la table `panier_produit`
--

DROP TABLE IF EXISTS `panier_produit`;
CREATE TABLE IF NOT EXISTS `panier_produit` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `panier_id` bigint(20) UNSIGNED NOT NULL,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `quantite` int(11) NOT NULL,
  `taille` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `panier_produit_panier_id_foreign` (`panier_id`),
  KEY `panier_produit_produit_id_foreign` (`produit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `panier_produit`
--

INSERT INTO `panier_produit` (`id`, `panier_id`, `produit_id`, `quantite`, `taille`, `couleur`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'M', 'Noir', '2023-12-28 06:38:04', '2023-12-28 06:38:04'),
(2, 1, 1, 1, 'S', 'Noir', '2023-12-28 07:06:53', '2023-12-28 07:06:53');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `vedette` tinyint(1) NOT NULL DEFAULT '0',
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produits_type_id_foreign` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `vedette`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'Tshirt PBSport', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '20.00', 0, 1, '2023-12-28 06:36:46', '2023-12-28 06:36:46'),
(2, 'Raquette Pb Sport 2024', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem Ipsum', '150.00', 0, 3, '2023-12-28 23:46:44', '2023-12-28 23:47:04'),
(3, 'Tshirt PBSport', 'VFGFGDFHGHGFHD', '12.00', 0, 1, '2024-01-15 11:44:13', '2024-01-15 11:44:13');

-- --------------------------------------------------------

--
-- Structure de la table `produit_types`
--

DROP TABLE IF EXISTS `produit_types`;
CREATE TABLE IF NOT EXISTS `produit_types` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit_types`
--

INSERT INTO `produit_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Vetement', NULL, NULL),
(2, 'Chaussure', NULL, NULL),
(3, 'Raquette', NULL, NULL),
(4, 'Balle', NULL, NULL),
(5, 'Accessoire', NULL, NULL),
(6, 'Sac', NULL, NULL),
(7, 'Autre', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'joueur',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'joueur', NULL, NULL),
(2, 'coach', NULL, NULL),
(3, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `produit_id` bigint(20) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL,
  `taille` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `couleur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_produit_id_foreign` (`produit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `produit_id`, `stock`, `taille`, `couleur`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'S', 'Noir', '2023-12-28 06:37:39', '2023-12-28 06:37:47'),
(2, 1, 4, 'M', 'Noir', '2023-12-28 06:37:39', '2023-12-28 06:37:47'),
(3, 1, 0, 'L', 'Noir', '2023-12-28 06:37:39', '2023-12-28 06:37:39'),
(4, 1, 0, 'XL', 'Noir', '2023-12-28 06:37:39', '2023-12-28 06:37:39'),
(5, 1, 0, 'XXL', 'Noir', '2023-12-28 06:37:39', '2023-12-28 06:37:39'),
(6, 2, 10, '14mm', 'Noir', '2023-12-28 23:47:17', '2023-12-28 23:47:32'),
(7, 2, 12, '16mm', 'Noir', '2023-12-28 23:47:17', '2023-12-28 23:47:32'),
(8, 3, 4, 'S', 'Jaune', '2024-01-15 11:44:23', '2024-01-15 11:44:35'),
(9, 3, 0, 'M', 'Jaune', '2024-01-15 11:44:23', '2024-01-15 11:44:23'),
(10, 3, 3, 'L', 'Jaune', '2024-01-15 11:44:23', '2024-01-15 11:44:35'),
(11, 3, 0, 'XL', 'Jaune', '2024-01-15 11:44:23', '2024-01-15 11:44:23'),
(12, 3, 0, 'XXL', 'Jaune', '2024-01-15 11:44:23', '2024-01-15 11:44:23');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mot_de_passe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `niveau` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateurs_email_unique` (`email`),
  KEY `utilisateurs_image_id_foreign` (`image_id`),
  KEY `utilisateurs_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mot_de_passe`, `email`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `niveau`, `role_id`, `image_id`, `created_at`, `updated_at`) VALUES
(1, '$2y$10$b7QE3IV7BCEyZG4NHp2saevhBGfVCOGHoBSl788TqmQabMegWJ0Gu', 'medi.mtfi@gmail.com', 'Boudnaoui', 'El Mehdi', NULL, NULL, NULL, 3, NULL, '2023-12-16 01:25:08', '2023-12-16 01:25:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
