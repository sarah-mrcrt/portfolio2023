-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 12 sep. 2022 à 18:07
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio2023`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_01_09_160615_create_projets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2022',
  `nbr_image` tinyint(1) NOT NULL DEFAULT '1',
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logiciels` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertises` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demarche` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decouvrir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projets_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `slug`, `date`, `nbr_image`, `tags`, `logiciels`, `expertises`, `mission`, `demarche`, `video_url`, `decouvrir`, `created_at`, `updated_at`) VALUES
(1, 'Abécédaire', 'Abecedaire', '2018', 1, 'Audiovisuel', 'Premiere Pro', 'Montage', 'En équipe, nous avons dû réaliser un abécédaire sur le champ lexical de l’IUT de Lens. Pour cela, nous devions prendre l’ensemble des photographies au sein de notre IUT, créer les cartons de chaque lettre et concevoir une bande son. En s’inspirant de Jean-Luc Godard, nous avons cherché à ressortir les lettres des photographies.', NULL, 'https://www.youtube.com/embed/2YlDveDyd4g', NULL, NULL, NULL),
(2, 'Chella man', 'Chella-man', '2018', 4, 'Print', 'Photoshop', 'Couverture sensible', 'Lors d’un cours d’esthétisme, j’ai dû réaliser la première et quatrième de couverture d’un livre monographique imaginaire d’un artiste. J’ai choisi Chella Man qui est une personnalité que j’aime beaucoup, car il est un symbole de bienveillance, d’ouverture d’esprit et de pouvoir. Il se caractérise en tant qu’artiste sourd, transgenre et juif pour faire passer des messages d’acceptation de soi et de l’autre.', NULL, NULL, NULL, NULL, NULL),
(3, 'Mouud', 'Mouud', '2020', 1, 'Digital', 'Laravel, HTML, CSS, JS, Bootstrap', 'Site web, UI & UX', 'Dans le cadre de notre cours de développement web, nous devions réaliser une plateforme de distribution musicale. Les fonctionnalités attendues : page utilisateur, suivre d’autres utilisateurs, rechercher des utilisateurs et des chansons, uploader et aimer des chansons, créer des playlists.', 'Au travers de ce projet, je voulais créer un site reposant où on peut exprimer ses émotions par la musique. Pour cela, j’ai choisi des couleurs chaleureuses créant une ambiance tamisée et les animations permettent de créer de la fluidité dans le parcours du site.', 'https://player.vimeo.com/video/657738305?h=73c5481bed', 'https://mouud.sarahmauriaucourt.fr/', NULL, NULL),
(4, 'Lockbook', 'lockbook', '2020', 1, 'Print', 'Indesign, Lightroom,Lumix GX9', 'Photographie', 'Réalisation d\'un journal de bord durant le confinement 2020.', 'Je me suis mise au défi de prendre l’ensemble des photographies au sein de ma chambre. En tant que lieu statique, chaque jour, je cherchais un nouveau point de vue et les éventuels changements (luminosité, contraste, …) qu’il pouvait avoir pour mes prises photographiques.', NULL, 'https://www.behance.net/gallery/133392623/Lockbook', NULL, NULL),
(5, 'now', 'now', '2021', 1, 'Audiovisuel', 'Premier Pro, After Effects, Protools, Photoshop', 'Direction Artistique | Prise de vue & de son | Montage | VFX', 'Dans le cadre de ma troisième année de Licence,nous avons dû réaliser en groupe un court-métrage. Celui-ci devant durer 5 minutes et abordant le thème « 2050 ».', 'En 2050, la France est tombée sous une dictature après les nombreux problèmes économiques et environnementaux que le monde a dû traverser. Anar, un jeune programmeur, va mettre en place une stratégie pour protester contre le régime actuel.', 'https://player.vimeo.com/video/559339399', 'https://www.behance.net/gallery/134235161/now-Court-mtrage', NULL, NULL),
(6, 'Grilles', 'Grilles', '2021', 4, 'Print', 'Illustrator', 'Design Graphique', 'Défi de 2 heures pour réaliser 3 affiches à partir d\'une grille.', 'Pour ce travail de composition sur une grille, 3 affiches ont été faites dont 1 figurative et 2 abstraites. Celle figurative utilise la grille pour réaliser un pixel art de la chaussure que je portais. Celles abstraites utilisent des formes géométriques de manière déstructurée.', NULL, NULL, NULL, NULL),
(7, 'Persona d\'Ingmar Bergman', 'Persona', '2021', 1, 'Print', 'Photoshop', 'Affiche', 'Réinterprétation de l\'affiche du film Persona d\'Ingmar Bergman. Comme dans le film, cette affiche explore la quête d\'identité.', 'Comme dans le film d’Ingmar Bergman, cette affiche explore l’identité personnelle au travers de la dépersonnalisation, volonté de se différencier et de se ressembler. Difficilement discernable, on retrouve les deux protagonistes de l’histoire par une superposition de sept photographies. Les effets de dégradé et de négatif ajoutent un aspect fantomatique.', NULL, 'https://www.behance.net/gallery/129927601/Persona-by-Ingmar-Bergman-Poster', NULL, NULL),
(8, 'Splash screen pasteque', 'Splash-screen-pasteque', '2021', 1, 'Digital', 'Adobe XD, Illustrator', 'UI & UX', 'Splash Screen animé d\'une interface mobile sur le thème de la pastèque.', NULL, 'https://player.vimeo.com/video/654248995', NULL, NULL, NULL),
(9, 'Audio Player', 'Audio-player', '2021', 1, 'Digital', 'Adobe XD', 'UI & UX', 'Dans le cadre d\'un cours d\'UI/UX design, nous devions réaliser un design original de player audio avec la transition animée entre deux musiques.', 'Repenser l\'interface d\'un player de musique, en lui donnant un style cybernétique par l\'utilisation du glassmorphism.', 'https://player.vimeo.com/video/654249675', NULL, NULL, NULL),
(10, 'Recette de cuisine asiatique', 'Recette-de-cuisine-asiatique', '2021', 1, 'Digital', 'Adobe XD', 'UI & UX', 'Interface mobile d\'une page de recette d\'une application mobile.', NULL, 'https://player.vimeo.com/video/657412628', NULL, NULL, NULL),
(11, 'Carte interactive', 'Carte-interactive', '2021', 1, 'Digital', 'Adobe XD', 'UI & UX', 'Découverte des espèces marines à travers une carte interactive.', NULL, 'https://player.vimeo.com/video/661780846', NULL, NULL, NULL),
(12, 'UP\'event', 'Up-event', '2021', 1, 'Digital', 'Figma, Indesign, Illustrator', 'Data, Prototypage, Application mobile, UI & UX', 'Développer un projet autour des thèmes relations humaines, réseaux et expertises ainsi que numérisation du monde.', 'Up\'event est une application mobile dédiée aux événements et sorties étudiantes dans la ville de Valenciennes. Sous forme ludique, l\'application invite les étudiants à proposer des rencontres et événements ou à participer à ceux de nos partenaires. Sous forme de calendrier et de carte, l\'application invite ses utilisateurs à se rencontrer, à partager leurs intérêts en dehors de leurs études et à marquer des points pour leur maison.', 'https://player.vimeo.com/video/662958130', 'https://www.behance.net/gallery/134945973/UPevent', NULL, NULL),
(13, 'G20 | Rome', 'Climat', '2021', 1, 'Print', ' Photoshop', 'Poster', 'Réappropriation du style graphique d\'Henryk Tomaszewski pour créer une affiche sur le thème du climat.', 'Réunis à Rome, les dirigeants du G20, on prit la pose devant la Fontaine de Trévi ou traditionnellement, on y jette des pièces pour réaliser un vœu. Cette photographie laisse imaginer qu’ils s’en remettent à la chance pour sauver la planète.', NULL, NULL, NULL, NULL),
(14, 'Affiches CCI Widmer', 'Affiche-CCI-Widmer', '2021', 2, 'Print', 'Illustrator', 'Poster', 'Dans la lignée de Widmer, ces affiches fictives d’une exposition 2022 au CCI mettent en avant des objets du quotidien.', NULL, NULL, NULL, NULL, NULL),
(15, 'Serres Royales de Laeken', 'Serres-Royales-de-Laeken', '2021', 1, 'Print | Digital', 'Adobe XD, Illustrator, Indesign, Photoshop', 'Identité de marque', 'Élaboration de la charte graphique de Laeken, en passant de la création de son logotype à sa déclinaison sur les supports de communication print et digitaux.', NULL, 'https://player.vimeo.com/video/662957351?h=529ce46bb9', 'https://www.behance.net/gallery/134289793/Serres-Royales-de-Laeken-Charte-Graphique', NULL, NULL),
(16, 'PRISM', 'PRISM', '2022', 1, 'Digital', 'Adobe XD, Illustrator, Indesign', 'Développement Web, UI & UX', 'L’application mobile PRISM propose de découvrir le parcours de l’artiste en s’immergeant dans la peau de celui-ci dans un processus complet de production-diffusion-exposition. L’utilisateur est invité à découvrir son contenu artistique partagé sur la plateforme, à l’échelle de l’artiste exposée au sein du musée. ', NULL, 'https://player.vimeo.com/video/745851852', NULL, NULL, NULL),
(17, 'Mergazine', 'Mergazine', '2022', 1, 'Print | Audiovisuel', 'After Effects | Photoshop | Illustrator |Indesign | Spline 3D', 'Motion Design', 'Par un teaser, promouvoir le Fanzine « Mergazine » qui met en avant la merguez. ', 'Pour l\'élaboration de ce teaser, je me suis challengé graphiquement en utilisant de nouveaux outils et procédés graphiques. Par cette première expérience sur After Effects, j\'ai pu maîtriser plusieurs techniques qu\'offre le logiciel.', 'https://www.youtube.com/embed/Kef9RlnXZjU', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
