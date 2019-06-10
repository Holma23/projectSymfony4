-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 16 mai 2019 à 16:36
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ahlemps4`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE `actuality` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`id`, `title`, `description`, `image`) VALUES
(41, 'explicabo aut repellat', 'Est aut aspernatur sint tempore minima qui. Sit sint molestias cum maxime amet deserunt. Aliquid distinctio eum in aut voluptas quod voluptate.', 'https://lorempixel.com/640/480/?42903'),
(42, 'aut sapiente ipsam', 'Et quos repellendus nihil aliquam explicabo sit. Voluptates porro dolorem earum quia. Cupiditate et est voluptatum architecto.', 'https://lorempixel.com/640/480/?49145'),
(43, 'quibusdam aliquid non', 'Architecto molestias molestiae numquam accusamus natus aut voluptas animi. Et quibusdam est velit animi aut. Facilis aut optio temporibus dolor molestiae quos consequatur.', 'https://lorempixel.com/640/480/?98588'),
(44, 'consequatur est at', 'Recusandae autem numquam est quaerat et. Sint ipsam unde itaque quisquam optio reprehenderit asperiores. Eos aperiam libero beatae impedit.', 'https://lorempixel.com/640/480/?61831'),
(45, 'velit saepe ad', 'Vel ut sint provident ipsa. Impedit voluptas quam et nesciunt. Velit itaque optio corporis ad.', 'https://lorempixel.com/640/480/?20760'),
(46, 'reiciendis magnam officiis', 'Commodi alias cupiditate hic at repudiandae quisquam. Debitis eum incidunt est quos inventore tenetur. Quia quisquam sequi quibusdam in.', 'https://lorempixel.com/640/480/?69328'),
(47, 'quos aut voluptatibus', 'Non mollitia blanditiis reiciendis est totam. Incidunt expedita facilis architecto fuga ut omnis eligendi. Veniam aperiam corporis autem tenetur hic placeat eveniet ratione.', 'https://lorempixel.com/640/480/?50251'),
(48, 'error voluptas quia', 'Asperiores maiores cupiditate quia. Voluptatem facilis laboriosam voluptate vel sed. Omnis veniam voluptatem vero perferendis deleniti nihil molestiae laborum.', 'https://lorempixel.com/640/480/?34005'),
(49, 'ex labore ut', 'Quia vel laudantium explicabo neque et. Debitis et accusantium necessitatibus et vel. Voluptatem aspernatur quam accusamus et culpa ipsa.', 'https://lorempixel.com/640/480/?87125'),
(50, 'itaque quibusdam nihil', 'Tempora et adipisci sint dolore fugit nulla natus. Rem unde vero eius dolores quia. Odio quibusdam labore non.', 'https://lorempixel.com/640/480/?85906'),
(51, 'incidunt ducimus saepe', 'Recusandae voluptatem at repudiandae voluptas quas autem doloremque reprehenderit. Fuga minima ut quo fuga non. Beatae quis non et consequatur dicta et.', 'https://lorempixel.com/640/480/?83026'),
(52, 'rerum odio perferendis', 'Error vitae aut qui minus. Nam sequi aliquid possimus omnis quisquam qui et. Ratione in molestiae magni iusto accusamus ipsum deserunt.', 'https://lorempixel.com/640/480/?29786'),
(53, 'non et odit', 'Ex cumque voluptates quaerat rerum aut. Sint voluptatem eum placeat aperiam dolore. Odit maxime quis rerum quo ut doloribus ut.', 'https://lorempixel.com/640/480/?45756'),
(54, 'rerum voluptate dolore', 'Qui itaque aut et porro deserunt. Iste laudantium sint magnam sunt nobis accusamus deserunt. Atque modi id consequatur qui neque ut.', 'https://lorempixel.com/640/480/?60700'),
(55, 'officiis voluptas quo', 'Ipsa rerum eum qui quisquam rerum quas id. Hic velit rerum saepe exercitationem vel autem adipisci. Et ab quisquam sequi eum rerum sapiente consequatur.', 'https://lorempixel.com/640/480/?36540'),
(56, 'culpa quis dolorem', 'Iste nihil est rerum eum ipsum. Qui laborum repellendus molestias et ut recusandae. Molestias totam in quas deleniti ducimus.', 'https://lorempixel.com/640/480/?43405'),
(57, 'est voluptas pariatur', 'Molestias et harum qui aliquid. Dicta dolorum enim eius quia. Nam et consequuntur aut.', 'https://lorempixel.com/640/480/?29713'),
(58, 'sequi illo magnam', 'Iste quam et neque minima perspiciatis dolor beatae itaque. Voluptatem velit dolorem et non voluptatem libero porro. Quam esse et aut sit perspiciatis et odit laudantium.', 'https://lorempixel.com/640/480/?34677'),
(59, 'non cumque quaerat', 'Ab ut quod doloremque molestiae illum. Qui porro doloremque debitis omnis molestias deleniti ipsam. Magnam voluptates nostrum magnam nihil explicabo qui.', 'https://lorempixel.com/640/480/?71492'),
(60, 'sit doloremque esse', 'Consectetur sed animi omnis atque omnis qui corrupti veritatis. Deserunt in quis pariatur fuga. Facere adipisci cumque molestiae incidunt aliquam saepe fuga.', 'https://lorempixel.com/640/480/?73701'),
(61, 'eos autem qui', 'Et corporis esse hic consequatur quo et. Explicabo dicta harum voluptas velit vel velit ut. Quibusdam possimus doloribus laudantium rerum qui id cumque.', 'https://lorempixel.com/640/480/?72541'),
(62, 'et eum aspernatur', 'Eum quae architecto sunt molestias et. Molestiae mollitia sed magnam eligendi sed qui. Qui aut facilis voluptas eveniet.', 'https://lorempixel.com/640/480/?20812'),
(63, 'veniam velit qui', 'Ex sit rerum mollitia dolorum. Earum molestias cupiditate quisquam deserunt maxime. Qui cum modi eum ut corrupti.', 'https://lorempixel.com/640/480/?65786'),
(64, 'eos itaque dicta', 'Est exercitationem iste et. Et maiores expedita est doloribus iste. Dolorem velit perspiciatis excepturi harum et dolorem.', 'https://lorempixel.com/640/480/?68578'),
(65, 'sint et ut', 'Et nisi id itaque facere. Beatae ad sapiente autem. Dignissimos laudantium dolorem et recusandae et qui nostrum voluptate.', 'https://lorempixel.com/640/480/?84840'),
(66, 'praesentium aliquam commodi', 'Debitis omnis qui quia molestiae qui maiores omnis. Nobis velit rerum pariatur saepe deleniti. Quia quis non voluptatem qui et tenetur enim.', 'https://lorempixel.com/640/480/?15961'),
(67, 'nam beatae assumenda', 'Assumenda aut mollitia ad est sunt esse impedit. Consequatur quaerat dolorum quia amet perspiciatis itaque. Perferendis omnis at a aut illum numquam ab.', 'https://lorempixel.com/640/480/?41691'),
(68, 'eos sed qui', 'Facilis veritatis impedit qui laboriosam. Quo odit consequuntur saepe autem voluptatum assumenda itaque quia. Ab nesciunt quasi veniam mollitia explicabo.', 'https://lorempixel.com/640/480/?25229'),
(69, 'in eius laborum', 'Sed iure beatae omnis amet distinctio minus. Non non non cumque. Ea natus ut consequatur nesciunt commodi tempora velit.', 'https://lorempixel.com/640/480/?36653'),
(70, 'qui non aut', 'Eos consequatur mollitia velit consequuntur aliquam autem quam. Nesciunt quo quidem asperiores ipsum. Magni qui placeat blanditiis nostrum.', 'https://lorempixel.com/640/480/?84051'),
(71, 'dolorem quod odit', 'Autem aut aut in est nobis. Debitis dolores voluptatem vero aspernatur. Sit cum sit aut corporis provident rerum.', 'https://lorempixel.com/640/480/?24408'),
(72, 'quis fugit consequatur', 'Deserunt distinctio quia necessitatibus error. Molestiae aut beatae quam. Aut sunt exercitationem perspiciatis dolorem est.', 'https://lorempixel.com/640/480/?60569'),
(73, 'voluptatem illo minima', 'Ab non delectus exercitationem sunt mollitia. Amet ut iure commodi facere et in. Id molestiae est impedit repellendus est quasi est incidunt.', 'https://lorempixel.com/640/480/?33173'),
(74, 'commodi cupiditate labore', 'Asperiores ex et facilis hic laudantium unde. Praesentium nam adipisci officiis ut et dolor perferendis. Laborum quae consectetur quia quis dolorem vero perspiciatis commodi.', 'https://lorempixel.com/640/480/?85994'),
(75, 'sequi dolorem nesciunt', 'Omnis sint facere voluptate ipsam. Provident non rerum dolores recusandae deleniti officia. Rerum eaque molestiae nulla ut ipsam.', 'https://lorempixel.com/640/480/?13340'),
(76, 'maiores quis occaecati', 'Sint dolorum dicta voluptatem quia sequi quo. Cupiditate corrupti ut iusto voluptate. Vel sit et deleniti aut.', 'https://lorempixel.com/640/480/?26797'),
(77, 'et consequatur nulla', 'Consequatur qui dolor et reprehenderit ut. Quis voluptas qui consequatur natus repellat quam. Tenetur non sed ipsam iste.', 'https://lorempixel.com/640/480/?78437'),
(78, 'quaerat qui veniam', 'Eum sit quos commodi provident est ut est. Molestiae molestiae exercitationem eaque nisi officia. Et qui consequuntur earum repellendus ab est eum nulla.', 'https://lorempixel.com/640/480/?16135'),
(79, 'corrupti provident sequi', 'Culpa et et atque autem corrupti perferendis et. Commodi omnis repellat quos. Et et animi animi qui nam nobis.', 'https://lorempixel.com/640/480/?46200'),
(80, 'et ratione vel', 'Quas necessitatibus dolorem eum possimus ipsa. Ea provident molestiae itaque in odio et est. Ut dicta et voluptatem nam vero.', 'https://lorempixel.com/640/480/?24232');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE `conge` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nbre_jour` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `user_id`, `nbre_jour`, `date`, `nature`, `etat`) VALUES
(1, NULL, 5, '2020-04-05 00:00:00', 'maladie', 'en cours'),
(2, 15, 4, '2020-06-05 00:00:00', 'maladie', 'en cours'),
(3, 15, 4, '2020-05-05 00:00:00', 'maladie', 'en cours'),
(4, 15, 3, '2020-06-05 00:00:00', 'fgfgfg', 'en cours'),
(5, 15, 2, '2020-06-05 00:00:00', 'test', 'en cours'),
(6, 15, 5, '2020-06-05 00:00:00', 'jhjhjhj', 'en cours'),
(7, 15, 5, '2020-05-05 00:00:00', 'gghhgh', 'en cours'),
(8, 15, 4, '2020-05-05 00:00:00', 'ghjhjhj', 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `file`, `titre`, `description`, `user_id`) VALUES
(23, 'fcc649957dc5c880e142c77a5558240a.pdf', 'test', 'test', NULL),
(24, '83d5394cb9527d2d928a2b58f4822f26.pdf', 'dkjkfdgfg', 'fgfgffgfgfhgh', NULL),
(25, '68404c8e0511bd4efdb578dad2df87d3.pdf', 'jhhhjj', 'hjhjhjjhjhj', NULL),
(26, '340484e844373df28b191d7cf67b5603.pdf', 'test test', 'tessssssssssssssssssssssst', NULL),
(27, '1a87474753af4a795574b5845e901496.pdf', 'bnb,nb,n', ',nH,hjku', NULL),
(28, '68fbbd9f35baa9ffe0cfdb4c2c983256.pdf', 'ytyt', 'jyjh', NULL),
(29, '980cec342b5e24225722fad7326ae430.pdf', 'ytyt', 'jyjh', NULL),
(30, 'ace833de537b32e7a852748b073c117a.pdf', 'ytyt', 'jyjh', NULL),
(31, '9ecd7e9a4d47ff2ccdbfa0b56f84b8c6.pdf', 'ytyt', 'jyjh', NULL),
(32, 'fdd75356af6783eef0dafd87b60c2fda.pdf', 'ytyt', 'jyjh', NULL),
(33, '1993d7343f317eaf21e40232063b52b0.pdf', 'hjjhj', 'jhjhhjhj', NULL),
(34, 'df8bb650f360841292bf8a544b2dfc10.pdf', 'fgfgfg', 'fggfgg', NULL),
(35, '450b1bbed84efef8f9e1736013fad080.pdf', 'ghghg', 'ghghhgh', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190514093456', '2019-05-14 09:55:31'),
('20190514100000', '2019-05-14 10:00:12'),
('20190514100204', '2019-05-14 10:02:15'),
('20190514100319', '2019-05-14 10:03:28');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `roles` tinytext COLLATE utf8mb4_unicode_ci COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `token`, `enable`, `roles`) VALUES
(15, 'aziz', 'aziz', 'aziz', '$2y$12$V.fHezhf9dYGGUDV5Aa2dOVCC47.hNuKeFb78tic3kFjNVTOiLC0e', 'ahlem.ben-abderrazak@talan.com', NULL, 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}'),
(17, 'ahlem', 'ahlem', 'ahlem', '$2y$12$d.KimIGMVM/LBr.SZXFnoObQ5j5drffR6tnd5dHB9.mzFcKLsFkxa', 'ahlem.benabderrazak@esprit.tn', NULL, 1, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conge`
--
ALTER TABLE `conge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2ED89348A76ED395` (`user_id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B66FFE92A76ED395` (`user_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actuality`
--
ALTER TABLE `actuality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `conge`
--
ALTER TABLE `conge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `FK_2ED89348A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `FK_B66FFE92A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
