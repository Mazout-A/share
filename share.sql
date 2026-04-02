-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 avr. 2026 à 14:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `share`
--

-- --------------------------------------------------------

--
-- Structure de la table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `price` decimal(10,6) NOT NULL,
  `is_indoor` tinyint(1) NOT NULL,
  `is_accessible` tinyint(1) NOT NULL,
  `participant_type` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `activities`
--

INSERT INTO `activities` (`id`, `partner_id`, `category_id`, `title`, `description`, `address`, `latitude`, `longitude`, `price`, `is_indoor`, `is_accessible`, `participant_type`, `start`, `end`, `created`, `modified`) VALUES
(1, 1, 1, 'Laser Game Spatial', 'Une bataille épique dans le noir avec des néons.', '12 rue de la Paix, Paris', '48.869', '2.331', 15.000000, 1, 1, 'Groupe', '2026-05-10 14:00:00', '2026-05-10 22:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(2, 1, 1, 'Randonnée Guidée', 'Découverte de la faune et la flore locale.', 'Sentier des Alpes, Annecy', '45.899', '6.129', 0.000000, 0, 0, 'Individuel', '2026-06-15 09:00:00', '2026-06-15 17:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(3, 1, 1, 'Cours de Cuisine Italienne', 'Apprenez à faire des pâtes fraîches maison.', '45 Rue de Rome, Marseille', '43.296', '5.369', 45.500000, 1, 1, 'Adulte', '2026-04-20 18:30:00', '2026-04-20 21:30:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(4, 1, 1, 'Atelier Poterie', 'Créez votre propre vase en argile.', '8 Place Bellecour, Lyon', '45.757', '4.832', 30.000000, 1, 1, 'Enfant/Adulte', '2026-05-12 10:00:00', '2026-05-12 12:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(5, 1, 1, 'Escape Game : Le Trésor', 'Retrouvez le trésor avant la fin du temps imparti.', '3 rue du Commerce, Bordeaux', '44.837', '-0.579', 25.000000, 1, 0, 'Groupe', '2026-07-01 14:00:00', '2026-07-01 23:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(6, 1, 1, 'Session Surf débutant', 'Apprendre les bases du surf sur la côte basque.', 'Plage de la Côte des Basques, Biarritz', '43.483', '-1.558', 50.000000, 0, 0, 'Individuel', '2026-08-05 08:00:00', '2026-08-05 10:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(7, 1, 1, 'Visite Musée du Louvre', 'Tour guidé des chefs-d\'œuvre du Louvre.', 'Rue de Rivoli, Paris', '48.860', '2.337', 17.000000, 1, 1, 'Tout public', '2026-04-18 10:00:00', '2026-04-18 18:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(8, 1, 1, 'Yoga en plein air', 'Séance de détente au lever du soleil.', 'Parc de la Tête d\'Or, Lyon', '45.779', '4.852', 10.000000, 0, 1, 'Individuel', '2026-06-22 07:00:00', '2026-06-22 08:30:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(9, 1, 1, 'Karting Electrique', 'Course de vitesse sur circuit indoor.', 'ZAC des Nations, Nantes', '47.218', '-1.553', 20.000000, 1, 1, 'Adolescent', '2026-05-30 15:00:00', '2026-05-30 20:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35'),
(10, 1, 1, 'Dégustation de Vins', 'Découvrez les cépages de la région.', 'Vignobles de St-Emilion', '44.894', '-0.155', 35.000000, 1, 0, 'Adulte', '2026-09-12 11:00:00', '2026-09-12 13:00:00', '2026-04-02 12:19:35', '2026-04-02 12:19:35');

-- --------------------------------------------------------

--
-- Structure de la table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `ticket_pdf` varchar(150) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL,
  `business_hours` varchar(255) NOT NULL,
  `price_display` decimal(10,2) NOT NULL,
  `accessibility` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `category_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cake_migrations`
--

CREATE TABLE `cake_migrations` (
  `id` int(11) NOT NULL,
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `plugin` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cake_migrations`
--

INSERT INTO `cake_migrations` (`id`, `version`, `migration_name`, `plugin`, `start_time`, `end_time`, `breakpoint`) VALUES
(1, 20260331085255, 'CreateCategories', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(2, 20260331085302, 'CreatePartners', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(3, 20260331090133, 'CreateUsers', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(4, 20260331090140, 'CreateActivities', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(5, 20260331090148, 'CreateBookings', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(6, 20260331090158, 'CreateReviews', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(7, 20260331090205, 'CreateGamifications', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(8, 20260331090224, 'CreateUserInterests', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(9, 20260331090229, 'CreateFavorites', NULL, '2026-03-31 11:28:59', '2026-03-31 11:28:59', 0),
(10, 20260401135116, 'CreateBusiness', NULL, '2026-04-01 17:15:58', '2026-04-01 17:15:58', 0),
(11, 20260401135257, 'UpdateActivities', NULL, '2026-04-01 17:15:58', '2026-04-01 17:15:58', 0),
(12, 20260401144621, 'CreateEvents', NULL, '2026-04-01 17:15:58', '2026-04-01 17:15:58', 0),
(13, 20260401145741, 'CreatePicture', NULL, '2026-04-01 17:15:58', '2026-04-01 17:15:58', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `business_id` int(11) NOT NULL,
  `player_min` int(11) NOT NULL,
  `player_max` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gamifications`
--

CREATE TABLE `gamifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `badges` int(11) NOT NULL,
  `partner_bookings_count` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`partner_bookings_count`)),
  `update` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `file` varchar(255) NOT NULL,
  `business_id` varchar(255) DEFAULT NULL,
  `event_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `bio` text DEFAULT NULL,
  `photo_url` varchar(150) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `bio`, `photo_url`, `status`, `created`, `modified`) VALUES
(1, 'lc.ioulian@gmail.com', '$2y$10$XPwbo/Err4lpsGT8m.p4VuTIDuim4lslGd6be8AjGQQpbkV5QN/xm', '', NULL, NULL, 'seul', '2026-04-02 09:25:10', '2026-04-02 09:25:10');

-- --------------------------------------------------------

--
-- Structure de la table `user_interests`
--

CREATE TABLE `user_interests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cake_migrations`
--
ALTER TABLE `cake_migrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `version_plugin_unique` (`version`,`plugin`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gamifications`
--
ALTER TABLE `gamifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_interests`
--
ALTER TABLE `user_interests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cake_migrations`
--
ALTER TABLE `cake_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gamifications`
--
ALTER TABLE `gamifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user_interests`
--
ALTER TABLE `user_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
