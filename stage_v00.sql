-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 jan. 2022 à 17:55
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stage_v00`
--

-- --------------------------------------------------------

--
-- Structure de la table `assistants`
--

CREATE TABLE `assistants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medecin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assistant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rendering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allDay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Caisse_Assurance_sociale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Caisse_Assurance_sociale_N` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mutuelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mutuelle_N` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motifs_de_consultation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Types_de_consultation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Allergie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Antécédent_médicaux` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Provenance_Médecin_traitant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lien_parenter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adresse_parenter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_parenter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RDV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medecin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `patient_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `color`, `rendering`, `allDay`, `date_naissence`, `duree`, `Adresse`, `email`, `Caisse_Assurance_sociale`, `Caisse_Assurance_sociale_N`, `Mutuelle`, `Mutuelle_N`, `Motifs_de_consultation`, `Types_de_consultation`, `Allergie`, `Antécédent_médicaux`, `Provenance_Médecin_traitant`, `profession`, `Lien_parenter`, `Adresse_parenter`, `tel_parenter`, `phone`, `CIN`, `validee`, `RDV`, `medecin_id`, `patient_id`, `created_at`, `updated_at`) VALUES
(2, 'réunion', '2021-09-18 09:30:00', '2021-09-18 10:00:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2021-09-17 16:16:36', '2021-09-19 16:17:01'),
(27, 'Patient', '2021-09-22 09:30:00', '2021-09-22 10:00:00', '#27ae60', NULL, NULL, '1987-06-12', NULL, 'Dolor accusantium od', 'rywyj@mailinator.com', 'Facere inventore ex', 'Molestias amet et e', 'Velit eaque cupidat', 'Rerum adipisicing ac', 'Provident dolorem d', 'Physique', 'Oui', NULL, NULL, 'Quis doloremque quis', 'Voluptatem voluptate', 'Aute rem aliquid ut', NULL, '+1 (939) 134-4392', 'Id culpa eos veri', 'true', 'true', 2, 3, '2021-09-18 22:22:15', '2021-09-19 16:19:19'),
(28, 'Patient', '2021-09-22 10:00:00', '2021-09-22 10:30:00', '#27ae60', NULL, NULL, '1986-05-23', NULL, 'Aute distinctio Obc', 'pyhise@mailinator.com', 'Est minima ut in ex', 'Reiciendis praesenti', 'Voluptatem veniam d', 'Quibusdam consequatu', 'Totam numquam id inv', 'Physique', 'Oui', NULL, NULL, 'Adipisicing ut rerum', 'Ex quam dignissimos', 'Aspernatur non labor', NULL, '+1 (555) 572-2735', 'Reprehenderit velit', 'true', 'true', 2, 3, '2021-09-18 22:22:40', '2021-09-20 15:42:42'),
(36, 'Patient01', '2021-09-22 13:00:00', '2021-09-22 13:30:00', '#27ae60', NULL, NULL, '2011-02-20', NULL, 'Et quisquam id volu', 'nuwi@mailinator.com', 'Molestias quo minima', 'Vero nihil dolore au', 'Dolore repudiandae i', 'Quasi architecto max', 'Proident sit exerc', 'En_ligne', 'Oui', NULL, NULL, 'Culpa in ut molesti', 'Irure nostrum ut id', 'Architecto est vita', NULL, '+1 (776) 716-7708', 'RE87767', 'true', 'true', 2, 9, '2021-09-19 16:22:01', '2021-09-19 16:22:12'),
(38, 'youssef', '2021-09-22 11:30:00', '2021-09-22 12:00:00', '#27ae60', NULL, NULL, '1980-09-19', NULL, 'Tempor molestias ita', 'dyjewobuva@mailinator.com', 'Ratione nostrud inve', 'Exercitationem bland', 'Elit sint exercita', 'Magnam accusantium c', 'Minus consequatur v', 'Physique', 'Oui', NULL, NULL, 'Reprehenderit aliqui', 'Ipsum incididunt dol', 'Eius cum laborum Ni', NULL, '+1 (469) 495-7803', 'Quis excepturi adipi', 'true', 'true', 2, 11, '2021-09-20 15:39:38', '2021-09-21 13:41:57'),
(45, 'Jour de Non disonibilitée', '2021-09-20 00:00:00', '2021-09-21 00:00:00', 'red', 'background', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, 2, NULL, '2021-09-21 14:40:40', '2021-09-21 14:40:40'),
(46, 'Jour de Non disonibilitée', '2021-09-22 00:00:00', '2021-09-23 00:00:00', 'red', 'background', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, 2, NULL, '2021-09-21 14:40:53', '2021-09-21 14:40:53'),
(47, 'Jour de Non disonibilitée', '2021-09-24 00:00:00', '2021-09-25 00:00:00', 'red', 'background', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, 2, NULL, '2021-09-21 14:41:03', '2021-09-21 14:41:03'),
(48, 'Patient', '2021-09-23 09:30:00', '2021-09-23 10:00:00', '#27ae60', NULL, NULL, '2001-08-14', NULL, 'Libero earum est qu', 'hosajis@mailinator.com', 'Hic et dolor officia', 'Enim recusandae Por', 'Ipsam dolorem volupt', 'Est nihil nisi sint', 'Ad ad optio quis in', 'Physique', 'Oui', NULL, NULL, 'Suscipit aliqua Hic', 'In ut omnis iure qui', 'Aliquam excepturi qu', NULL, '+1 (821) 408-3172', 'Necessitatibus eaque', 'true', 'true', 2, 3, '2021-09-21 14:41:34', '2021-09-21 14:41:51'),
(49, 'Patient', '2021-09-23 11:00:00', '2021-09-23 11:30:00', '#27ae60', NULL, NULL, '1992-11-01', NULL, 'Deleniti doloribus e', 'cyny@mailinator.com', 'Dolores quasi rerum', 'Quo magni sed in asp', 'Quia sit debitis off', 'Laboris est officia', 'Odit voluptatibus ha', 'Physique', 'Oui', NULL, NULL, 'Saepe architecto mag', 'Iste sed consectetur', 'Veniam animi minus', NULL, '+1 (879) 455-5755', 'Deleniti et consecte', 'true', 'true', 2, 3, '2021-09-21 15:35:13', '2021-09-21 15:35:30'),
(50, 'Patient', '2021-09-23 13:00:00', '2021-09-23 13:30:00', '#27ae60', NULL, NULL, '1972-09-16', NULL, 'Ea ut optio eum par', 'vasexom@mailinator.com', 'Ipsum nostrud sed r', 'Quo voluptatum quo s', 'Dolores obcaecati et', 'Fugiat maxime ex ex', 'Qui et exercitation', 'Physique', 'Oui', NULL, NULL, 'Omnis est voluptatem', 'Ea eos consequatur', 'Incididunt fugit ut', NULL, '+1 (814) 316-8442', 'Animi omnis quae nu', 'true', 'true', 2, 3, '2021-09-22 11:35:06', '2021-09-22 11:41:10'),
(51, 'Patient', '2021-09-23 10:30:00', '2021-09-23 11:00:00', '#27ae60', NULL, NULL, '2020-06-17', NULL, 'Ipsum qui ut sapien', 'gekuwijo@mailinator.com', 'Aspernatur eiusmod f', 'Nemo incididunt ut c', 'Minima ut perspiciat', 'Quia velit consequa', 'Ex exercitation labo', 'Physique', 'Oui', NULL, NULL, 'Eaque maiores incidi', 'Corporis Nam dolor a', 'Est autem velit quos', NULL, '+1 (756) 171-3247', 'Voluptatem fugiat au', 'true', 'true', 2, 3, '2021-09-22 11:40:31', '2021-09-22 11:41:56'),
(52, 'Patient', '2021-09-23 10:00:00', '2021-09-23 10:30:00', '#27ae60', NULL, NULL, '2017-09-07', NULL, 'Suscipit quod dolore', 'cebydy@mailinator.com', 'Commodo in ut provid', 'Eaque aut aut eligen', 'Eos laudantium sun', 'Rerum voluptates dol', 'Hic quo est excepte', 'Physique', 'Oui', NULL, NULL, 'Ut iusto qui fugit', 'Magna error vitae do', 'Illum dolore aut do', NULL, '+1 (139) 721-8598', 'Quia quaerat in est', 'true', 'true', 2, 3, '2021-09-22 20:17:04', '2021-09-22 20:39:21'),
(53, 'Patient', '2021-09-23 10:00:00', '2021-09-23 10:30:00', '#27ae60', NULL, NULL, '1994-08-30', NULL, 'Et aliquip maxime ad', 'miruvivad@mailinator.com', 'Cum aut et aute labo', 'Sunt non qui volupta', 'Modi ea sed deserunt', 'Quibusdam est non e', 'Sequi asperiores err', 'Physique', 'Oui', NULL, NULL, 'Deleniti voluptate d', 'Consequat In velit', 'Iusto officiis non d', NULL, '+1 (856) 503-2087', 'Asperiores est fugia', 'true', 'true', 2, 3, '2021-09-22 20:33:05', '2021-11-14 13:21:16'),
(56, 'Consectetur nisi ni', '1973-10-01 20:59:00', '1973-10-01 20:59:00', '#27ae60', NULL, NULL, '2021-11-12', NULL, NULL, 'fewoxow@mailinator.com', 'Eum velit aute et do', 'Dolore ut autem quid', 'Fugiat in architect', 'Voluptatem Consecte', 'A voluptates id mole', 'Physique', 'Non', 'Deleniti voluptatibu', 'Sit saepe ullamco h', 'Quas nisi reprehende', 'Rem veniam inventor', 'Ex est obcaecati ut', 'Qui non in sed sint', '+1 (339) 731-8139', 'Nostrum non exercita', 'true', 'true', 17, 17, '2021-11-12 15:47:55', '2021-11-12 15:51:59'),
(57, 'Jour de Non disonibilitée', '2021-11-12 00:00:00', '2021-11-22 00:00:00', 'red', 'background', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, 17, NULL, '2021-11-12 16:10:58', '2021-11-12 16:10:58'),
(58, 'Patient01', '2021-11-23 11:30:00', '2021-11-23 12:00:00', '#C8B410', NULL, NULL, '1997-01-12', NULL, 'Dicta quo ullam null', 'wavecama@mailinator.com', 'Saepe inventore simi', 'Quas ex quia dolor i', 'Nemo ex aut sunt no', 'A reprehenderit veni', 'Id at similique eni', 'Physique', 'Oui', NULL, NULL, 'Et aspernatur dolore', 'Soluta nostrum non a', 'Aut impedit ad ad v', NULL, '+1 (308) 258-2754', 'Veniam reprehenderi', NULL, 'true', 17, 9, '2021-11-12 16:11:45', '2021-11-12 16:11:45'),
(60, 'salam', '2021-11-14 12:30:00', '2021-11-14 13:00:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2021-11-13 15:03:17', '2021-11-13 15:03:35'),
(61, 'Jour de Non disonibilitée', '2021-11-17 00:00:00', '2021-11-19 00:00:00', 'red', 'background', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, 2, NULL, '2021-11-13 15:05:07', '2021-11-13 15:05:07'),
(63, 'Patient', '2021-11-16 11:30:00', '2021-11-16 12:00:00', '#27ae60', NULL, NULL, '1962-09-09', NULL, 'massira2 B N 904 Marrakech', 'samira@gmail.com', 'RMA', '10092', 'CNOPS', '8978', 'maladie grave au niveau de mo gastro', 'domicile', 'Oui', NULL, NULL, 'teacher', NULL, NULL, NULL, '0602834831', 'EE876566', 'true', 'true', 2, 3, '2021-11-14 13:01:44', '2021-11-14 13:25:51'),
(64, 'sana', '2021-11-19 11:00:00', '2021-11-19 11:30:00', '#C8B410', NULL, NULL, '1992-04-03', NULL, 'Hic sit qui iusto se', 'bejes@mailinator.com', 'RMA', '545454', 'CNOPS', '564545', 'gastro', 'En_ligne', 'Oui', NULL, NULL, 'Voluptatem debitis u', 'Alias aut nihil temp', 'Non rem tempor dolor', NULL, '+1 (457) 214-5006', 'F675765', NULL, 'true', 2, 25, '2021-11-14 13:19:32', '2021-11-14 13:19:32'),
(66, 'réunion', '2021-11-19 13:00:00', '2021-11-19 13:30:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2021-11-14 13:20:55', '2021-12-25 13:35:46'),
(67, 'prendre cafée avec ami', '2021-11-21 12:00:00', '2021-11-21 13:30:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2021-11-14 13:27:26', '2021-11-14 13:27:26'),
(68, 'Hicham', '2021-11-20 10:43:00', '2021-11-20 10:43:00', '#C8B410', NULL, NULL, '1983-11-11', NULL, NULL, 'xygo@mailinator.com', 'Dolor irure animi e', 'Quis voluptas volupt', 'Dolores tenetur veri', 'Maxime et sint aliq', 'Velit laborum Quas', 'Physique', 'Oui', 'Totam enim velit te', 'Voluptas placeat ar', 'Sint culpa ut unde q', 'Laborum Doloribus r', 'Eos at minim quo la', 'Ea eveniet odit ass', '+1 (986) 914-7013', 'Aute duis quis moles', NULL, 'true', 2, 2, '2021-11-14 13:31:33', '2021-11-14 13:31:33'),
(69, 'Patient', '2021-11-19 14:00:00', '2021-11-19 14:30:00', '#C8B410', NULL, NULL, '2016-12-18', NULL, 'Similique facere nat', 'fyme@mailinator.com', 'Tenetur enim aperiam', 'Incididunt sequi imp', 'Exercitation ducimus', 'Eligendi aut deserun', 'Ut anim earum dolore', 'Physique', 'Oui', NULL, NULL, 'Architecto commodi e', 'Adipisci doloribus d', 'Et soluta sint ea re', NULL, '+1 (336) 826-1612', 'Sit accusamus rem qu', NULL, 'true', 2, 3, '2021-11-14 14:37:24', '2021-11-14 14:37:24'),
(71, 'lklkklk', '2022-01-06 13:30:00', '2022-01-06 14:00:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2022-01-04 17:14:52', '2022-01-04 17:15:00'),
(72, 'mlkjlkl', '2022-01-07 10:30:00', '2022-01-07 11:00:00', '#10AFC8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '2022-01-04 18:40:23', '2022-01-04 18:41:27');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2021_08_19_175746_create_events_table', 1),
(209, '2013_08_23_145539_create_specialitees_table', 2),
(210, '2014_10_12_000000_create_users_table', 2),
(211, '2014_10_12_100000_create_password_resets_table', 2),
(212, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(213, '2019_08_19_000000_create_failed_jobs_table', 2),
(214, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(215, '2021_08_13_211651_create_sessions_table', 2),
(216, '2021_08_26_101309_create_events_table', 2),
(217, '2021_09_06_111312_create_assistants_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('b1qU2XnvP4cjUr2cqiTIC1n3bxt5xpyKriEzIP7F', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidXBaek94bVZ0cUhKeVBtVFU0aTFVeVlaYnIxN0VxVU5mcThUMWs4ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZWRlY2luL0V2ZW50cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRDZzZtc3hmSi5yRmUvYUFWSVVxdHVlcGhwRWdiRUpaTHU0dFA5NUl1VjZsSW1xajZBc1MuYSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQ2c2bXN4ZkouckZlL2FBVklVcXR1ZXBocEVnYkVKWkx1NHRQOTVJdVY2bEltcWo2QXNTLmEiO30=', 1640442962),
('GCyKrl054ppA9gEULu9SKJkVI0MqxLjGJQVmmFDg', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZWdHOUM2OGZudHBZaFFJZlJCOG85ZFlWZk5yQU5LWEFYZDBFUklHYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZWRlY2luL2NhbGVuZGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJENnNm1zeGZKLnJGZS9hQVZJVXF0dWVwaHBFZ2JFSlpMdTR0UDk1SXVWNmxJbXFqNkFzUy5hIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRDZzZtc3hmSi5yRmUvYUFWSVVxdHVlcGhwRWdiRUpaTHU0dFA5NUl1VjZsSW1xajZBc1MuYSI7fQ==', 1641320022),
('IOtoPcfmmfFCczlIgYmyu3USsMyeNpaKNewx24Ip', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOEpJNmI0RzQ3c1ZxYlFjQ2theGtSVElGQW1YeGpROGdVc1lOb2dETSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tZWRlY2luL0V2ZW50cy82NC9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJENnNm1zeGZKLnJGZS9hQVZJVXF0dWVwaHBFZ2JFSlpMdTR0UDk1SXVWNmxJbXFqNkFzUy5hIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRDZzZtc3hmSi5yRmUvYUFWSVVxdHVlcGhwRWdiRUpaTHU0dFA5NUl1VjZsSW1xajZBc1MuYSI7fQ==', 1641325330),
('SnBXFS1osT1uUtYwYe3Xa4JxMwmb9yPwydzSDwLu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTNnN2dTdEQ0Z3ZPQTFYTm1JNlZhc1JNOXVnclNQSFZuV3Z4U1Q3ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640442765);

-- --------------------------------------------------------

--
-- Structure de la table `specialitees`
--

CREATE TABLE `specialitees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialitees`
--

INSERT INTO `specialitees` (`id`, `nom`) VALUES
(1, 'L\'allergologie'),
(2, 'l\'andrologie'),
(3, 'L\'anesthésiologie'),
(4, 'la cardiologie'),
(5, 'La neurologie'),
(6, 'L\'endocrinologie'),
(7, 'la gastro-entérologie'),
(8, 'la gériatrie'),
(9, 'la gynécologie'),
(10, 'L\'hématologie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Licence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Licence_N` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Getsion_RDV` tinyint(1) DEFAULT NULL,
  `Gestion_Calendrier` tinyint(1) DEFAULT NULL,
  `personnaliser_ajonda` tinyint(1) DEFAULT NULL,
  `gestion_Assistants` tinyint(1) DEFAULT NULL,
  `asistant` tinyint(1) DEFAULT NULL,
  `medcecin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Langue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_horaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_horaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialite_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `region_ville`, `date_naissence`, `Licence`, `Licence_N`, `Getsion_RDV`, `Gestion_Calendrier`, `personnaliser_ajonda`, `gestion_Assistants`, `asistant`, `medcecin_id`, `duree`, `Adresse`, `Langue`, `tarif`, `phone`, `CIN`, `start_horaire`, `end_horaire`, `specialite_id`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'badreddine', 'badreddine@gmail.com', '3', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, '20', NULL, NULL, '200', '0602834831', NULL, '09:00', '17:00', 1, NULL, '$2y$10$Cg6msxfJ.rFe/aAVIUqtuephpEgbEJZLu4tP95IuV6lImqj6AsS.a', NULL, NULL, NULL, NULL, NULL, '2021-09-17 14:30:21', '2021-12-24 16:54:12'),
(3, 'Patient', 'Patient@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+14276926604', 'EE735639', NULL, NULL, 1, NULL, '$2y$10$YVZrL92EgeSxvpaU8nqTyO/MdnAWdVPTB1MSVpHH.ewL15NKyHThm', NULL, NULL, NULL, NULL, NULL, '2021-09-17 16:12:14', '2021-09-17 16:12:14'),
(5, 'Soufian', 'Soufian@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '0698987657', 'EE97887665', NULL, NULL, 1, NULL, '$2y$10$4A0.6hNCM.H72GisjqEZFO6x8N97bXEEj5DM1OTIHpkJHhqv16fg2', NULL, NULL, NULL, NULL, NULL, '2021-09-18 17:00:30', '2021-09-18 17:00:30'),
(7, 'Samira', 'Samira@gmail.com', '3', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '300', '+1 (255) 592-2152', NULL, NULL, NULL, 1, NULL, '$2y$10$jq5FvZ44HLS84UOitk/c9OMoSxLAJhXGi7oppS1.5mN5UfxMBpFFS', NULL, NULL, NULL, NULL, NULL, '2021-09-18 17:44:29', '2021-09-18 17:44:29'),
(9, 'Patient01', 'Patient01@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+14276926604', 'E878754', NULL, NULL, 1, NULL, '$2y$10$Hr7sxfF7rrJwsckzQJ5X3.6n/vLsOkciwD.jwxrjaHXIPo/qxBSkW', NULL, NULL, NULL, NULL, NULL, '2021-09-19 16:21:26', '2021-09-19 16:21:26'),
(10, 'omar', 'omar@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+1 (718) 921-4118', 'E089789', NULL, NULL, 1, NULL, '$2y$10$quz5Wwmdd7AaJlIJ6LPUKOdd83CbkhIsj2U45jqToMf2PjrkbnjvG', NULL, NULL, NULL, NULL, NULL, '2021-09-20 14:27:50', '2021-09-20 14:27:50'),
(11, 'youssef', 'youssef@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+1 (811) 879-8261', 'EE453329', NULL, NULL, 1, NULL, '$2y$10$R3RWvXWurQBO8ZemRihkeeR9arS1rV34SHMvwHn8PiYlRsM61S/wS', NULL, NULL, NULL, NULL, NULL, '2021-09-20 15:24:57', '2021-09-20 15:24:57'),
(15, 'medecin dif', 'medecindif@gmail.com', '3', 'Guelmim_Oued_Noun', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '900', '+1 (103) 289-9282', NULL, NULL, NULL, 2, NULL, '$2y$10$WNOym9bqUvaYfDfjS4.tje69tGhWytDOJiiEa7C90/VA1JQtbYPPq', NULL, NULL, NULL, NULL, NULL, '2021-09-22 08:33:11', '2021-09-22 08:33:11'),
(17, 'milouda', 'milouda@gmail.com', '3', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, '200', '077777777', NULL, NULL, NULL, 1, NULL, '$2y$10$3pbKhnWWWVF5vlK0.SEDoekn.EZjK1Dxc70DF.MPczoqQxGGCjR.2', NULL, NULL, NULL, NULL, NULL, '2021-11-12 15:28:02', '2021-11-12 15:28:02'),
(19, 'Hope Fleming', 'MiloudaAsis@gmail.com', '3', NULL, '1970-08-30', 'Ea in ut vel in aut', 'Voluptate enim aut u', 1, 0, 1, NULL, 1, '17', NULL, 'Voluptas consectetur', 'francais espagnole ', NULL, '+1 (309) 711-7942', 'Illum dicta labore', NULL, NULL, 1, NULL, '$2y$10$xjtOaX.7QlRhmgAZqzk3A.0x5pK5R19SU0sWa6Carg646BisER/lu', NULL, NULL, NULL, NULL, NULL, '2021-11-12 15:58:42', '2021-11-12 15:58:42'),
(21, 'Vivian Leonard', 'badreddineAssis@gmail.com', '3', NULL, '1976-08-02', 'Aut Nam voluptatem i', 'Hic deserunt ipsa f', 1, 1, 0, NULL, 1, '2', NULL, 'Nobis occaecat quae', 'francais anglais ', NULL, '+1 (493) 404-6108', 'Qui doloremque odio', NULL, NULL, 1, NULL, '$2y$10$yQNFmXxQZvUQ4ZnHKRDCZO6QdhpNo21RqyrdIVYgUkrB0GtDVpyKK', NULL, NULL, NULL, NULL, NULL, '2021-11-13 14:45:27', '2021-11-13 14:45:27'),
(22, 'Admin', 'admin@mailinator.com', '1', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+1 (654) 486-6184', NULL, NULL, NULL, 1, NULL, '$2y$10$zRdnxs3Lno3uwjHtOq2t7..1VGL/4SDFH1yn3n3sN4HwCwf9wrZkW', NULL, NULL, NULL, NULL, NULL, '2021-11-13 14:49:20', '2021-11-13 14:49:20'),
(23, 'Patient', 'Patient03@mailinator.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+14276926604', 'Voluptatem eius dol', NULL, NULL, 1, NULL, '$2y$10$bTOcM46RDe6fcl1eSv1SSOBu926zDL.G3pLKVOuEfwg8db6dGyy/.', NULL, NULL, NULL, NULL, NULL, '2021-11-13 14:51:01', '2021-11-13 14:51:01'),
(24, 'Medecin', 'medecin03@mailinator.com', '3', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Deserunt non quae en', '+1 (137) 634-5425', NULL, NULL, NULL, 1, NULL, '$2y$10$GLnwT4JxKuCvaStQH8qW0uxO6BIGkNxM4FNGt9L.ml2WaQ37cBJVy', NULL, NULL, NULL, NULL, NULL, '2021-11-13 14:53:59', '2021-11-13 14:53:59'),
(25, 'sana', 'Sana@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '+14276926604', 'EE735639', NULL, NULL, 1, NULL, '$2y$10$j08m7sB41JfgDlitUFtLK.9.dpY19Smg78rH9eLdcd7i1K28vVUDK', NULL, NULL, NULL, NULL, NULL, '2021-11-14 13:14:39', '2021-11-14 13:14:39'),
(26, 'medecin', 'medecin@gmail.com', '2', 'Tanger_Tetouan_AlHoceima', NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '0777879797', 'CC765765', NULL, NULL, 1, NULL, '$2y$10$AB0Q/wwFm6Pp6nX18yrJbekWXyrsH9OioO9zM83Z2NW714/qoFEgK', NULL, NULL, NULL, NULL, NULL, '2021-12-21 19:05:42', '2021-12-21 19:05:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assistants`
--
ALTER TABLE `assistants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assistants_medecin_id_foreign` (`medecin_id`),
  ADD KEY `assistants_assistant_id_foreign` (`assistant_id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_medecin_id_foreign` (`medecin_id`),
  ADD KEY `events_patient_id_foreign` (`patient_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `specialitees`
--
ALTER TABLE `specialitees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_specialite_id_foreign` (`specialite_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assistants`
--
ALTER TABLE `assistants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `specialitees`
--
ALTER TABLE `specialitees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assistants`
--
ALTER TABLE `assistants`
  ADD CONSTRAINT `assistants_assistant_id_foreign` FOREIGN KEY (`assistant_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `assistants_medecin_id_foreign` FOREIGN KEY (`medecin_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_medecin_id_foreign` FOREIGN KEY (`medecin_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `events_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_specialite_id_foreign` FOREIGN KEY (`specialite_id`) REFERENCES `specialitees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
