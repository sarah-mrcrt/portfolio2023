-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- Hôte : 7p2ty.myd.infomaniak.com
-- Généré le :  ven. 21 jan. 2022 à 14:44
-- Version du serveur :  5.7.32-log
-- Version de PHP :  7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `7p2ty_portfolio2022`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_09_160615_create_projets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'projetX',
  `image` tinyint(1) NOT NULL DEFAULT '1',
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logiciels` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2022',
  `mission` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demarche` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decouvrir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `url`, `image`, `tags`, `logiciels`, `date`, `mission`, `services`, `demarche`, `video`, `decouvrir`, `created_at`, `updated_at`) VALUES
(1, 'Abécédaire', 'abecedaire', 1, 'Vidéo', 'Premiere Pro', '2018', 'En équipe, nous avons dû réaliser un abécédaire sur le champ lexical de l’IUT de Lens. Pour cela, nous devions prendre l’ensemble des photographies au sein de notre IUT, créer les cartons de chaque lettre et concevoir une bande son. En s’inspirant de Jean-Luc Godard, nous avons cherché à ressortir les lettres des photographies.', 'Montage', 'NULL', 'https://www.youtube.com/embed/2YlDveDyd4g', 'NULL', NULL, NULL),
(2, 'Chella man', 'chella_man', 4, 'Print', 'Photoshop', '2018', 'Lors d’un cours d’esthétisme, j’ai dû réaliser la première et quatrième de couverture d’un livre monographique imaginaire d’un artiste. J’ai choisi Chella Man qui est une personnalité que j’aime beaucoup, car il est un symbole de bienveillance, d’ouverture d’esprit et de pouvoir. Il se caractérise en tant qu’artiste sourd, transgenre et juif pour faire passer des messages d’acceptation de soi et de l’autre.', 'Couverture sensible', 'NULL', 'NULL', 'NULL', NULL, NULL),
(3, 'Mouud', 'mouud', 1, 'Web', 'Laravel, HTML, CSS, JS, Bootstrap', '2020', 'Dans le cadre de notre cours de développement web, nous devions réaliser une plateforme de distribution musicale. Les fonctionnalités attendues : page utilisateur, suivre d’autres utilisateurs, rechercher des utilisateurs et des chansons, uploader et aimer des chansons, créer des playlists.', 'Site web, UI & UX', 'Au travers de ce projet, je voulais créer un site reposant où on peut exprimer ses émotions par la musique. Pour cela, j’ai choisi des couleurs chaleureuses créant une ambiance tamisée et les animations permettent de créer de la fluidité dans le parcours du site.', 'NULL', 'https://mouud.sarahmauriaucourt.fr/', NULL, NULL),
(4, 'Lockbook', 'lockbook', 1, 'Print', 'Indesign, Lightroom,Lumix GX9', '2020', 'Réalisation d\'un journal de bord durant le confinement 2020.', 'Photographie', 'Je me suis mise au défi de prendre l’ensemble des photographies au sein de ma chambre. En tant que lieu statique, chaque jour, je cherchais un nouveau point de vue et les éventuels changements (luminosité, contraste, …) qu’il pouvait avoir pour mes prises photographiques.', 'NULL', 'https://www.behance.net/gallery/133392623/Lockbook', NULL, NULL),
(5, 'now', 'now', 1, 'Vidéo', 'Premier Pro, After Effects, Protools, Photoshop, Illustrator', '2021', 'Réaliser un film court sur le thème 2050.', 'Prise de vue et son, Support de communication', 'En 2050, la France est tombée sous une dictature après les nombreux problèmes économiques et environnementaux que le monde a dû traverser. Anar, un jeune programmeur, va mettre en place une stratégie pour protester contre le régime actuel.', 'https://player.vimeo.com/video/559339399', 'https://www.behance.net/gallery/134235161/now-Court-mtrage', NULL, NULL),
(6, 'Grilles', 'grilles', 4, 'Print', 'Illustrator', '2021', 'Défi de 3 heures pour réaliser 3 affiches à partir d\'une grille.', 'Création libre', 'Pour ce travail de composition sur une grille, 3 affiches ont été faites dont 1 figurative et 2 abstraites. Celle figurative utilise la grille pour réaliser un pixel art de la chaussure que je portais. Celles abstraites utilisent des formes géométriques de manière déstructurée.', 'NULL', 'NULL', NULL, NULL),
(7, 'Persona d\'Ingmar Bergman', 'persona', 1, 'Print', 'Photoshop', '2021', 'Réinterprétation de l\'affiche du film Persona d\'Ingmar Bergman. Comme dans le film, cette affiche explore la quête d\'identité.', 'Affiche', 'Comme dans le film d’Ingmar Bergman, cette affiche explore l’identité personnelle au travers de la dépersonnalisation, volonté de se différencier et de se ressembler. Difficilement discernable, on retrouve les deux protagonistes de l’histoire par une superposition de sept photographies. Les effets de dégradé et de négatif ajoutent un aspect fantomatique.', 'NULL', 'https://www.behance.net/gallery/129927601/Persona-by-Ingmar-Bergman-Poster', NULL, NULL),
(8, 'Splash Screen', 'splash_screen_watermelon', 1, 'Web', ' XD, Illustrator', '2021', 'Splash Screen animé d\'une interface mobile sur le thème de la pastèque.', 'UI & UX', 'NULL', 'https://player.vimeo.com/video/654248995', 'NULL', NULL, NULL),
(9, 'Audio Player', 'audio_player', 1, 'Web', ' XD', '2021', 'Dans le cadre d\'un cours d\'UI/UX design, nous devions réaliser un design original de player audio avec la transition animée entre deux musiques.', 'UI & UX', 'Repenser l\'interface d\'un player de musique, en lui donnant un style cybernétique par l\'utilisation du glassmorphism.', 'https://player.vimeo.com/video/654249675', 'NULL', NULL, NULL),
(10, 'Recette de cuisine asiatique', 'asian_recipe', 1, 'Web', ' XD', '2021', 'Interface mobile d\'une page de recette d\'une application mobile.', 'UI & UX', 'NULL', 'https://player.vimeo.com/video/657412628', 'NULL', NULL, NULL),
(11, 'Carte interactive', 'carte_interactive', 1, 'Web', ' XD', '2021', 'Découverte des espèces marines à travers une carte interactive.', 'UI & UX', 'NULL', 'https://player.vimeo.com/video/661780846', 'NULL', NULL, NULL),
(12, 'UP\'event', 'up_event', 1, ' Web', 'Figma, Indesign, Illustrator', '2021', 'Développer un projet autour des thèmes relations humaines, réseaux et services ainsi que numérisation du monde.', 'Data, Prototypage, Application mobile, UI & UX', 'Up\'event est une application mobile dédiée aux événements et sorties étudiantes dans la ville de Valenciennes. Sous forme ludique, l\'application invite les étudiants à proposer des rencontres et événements ou à participer à ceux de nos partenaires. Sous forme de calendrier et de carte, l\'application invite ses utilisateurs à se rencontrer, à partager leurs intérêts en dehors de leurs études et à marquer des points pour leur maison.', 'https://player.vimeo.com/video/662958130', 'https://www.behance.net/gallery/134945973/UPevent', NULL, NULL),
(13, 'G20 | Rome', 'climat', 1, 'Print', ' Photoshop', '2021', 'Réappropriation du style graphique d\'Henryk Tomaszewski pour créer une affiche sur le thème du climat.', 'Poster', 'Réunis à Rome, les dirigeants du G20, on prit la pose devant la Fontaine de Trévi ou traditionnellement, on y jette des pièces pour réaliser un vœu. Cette photographie laisse imaginer qu’ils s’en remettent à la chance pour sauver la planète.', 'NULL', 'NULL', NULL, NULL),
(14, 'Affiches CCI', 'widmer', 2, 'Print', 'Illustrator', '2021', 'Dans la lignée de Widmer, ces affiches fictives d’une exposition 2022 au CCI mettent en avant des objets du quotidien.', 'Poster', 'NULL', 'NULL', 'NULL', NULL, NULL),
(15, 'Serres Royales de Laeken', 'serres_royales_laeken', 1, 'Print Web', 'Illustrator, Indesign, Photoshop', '2021', 'Élaboration de la charte graphique de Laeken, en passant de la création de son logotype à sa déclinaison sur les supports de communication print et digitaux.', 'Identité de marque', 'NULL', 'https://player.vimeo.com/video/662957351', 'https://www.behance.net/gallery/134289793/Serres-Royales-de-Laeken-Charte-Graphique', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'mauriaucourt.sarah@gmail.com', NULL, '$2y$10$.0SgsymBhEoet/1vQJC9XetXAgzXCdOjdT094WlmD1nDIrNSyh3rW', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
