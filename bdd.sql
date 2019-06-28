-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 28 juin 2019 à 11:03
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tchernobyl`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_article` mediumtext,
  `paragraph_one` varchar(255) DEFAULT NULL,
  `paragraph_two` longtext,
  `paragraph_three` longtext,
  `paragraph_four` longtext,
  `paragraph_five` longtext,
  `paragraph_six` longtext,
  `paragraph_seven` longtext,
  `paragraph_eight` longtext,
  `paragraph_nine` longtext,
  `paragraph_ten` longtext,
  `paragraph_eleven` longtext,
  `paragraph_twelve` longtext,
  `paragraph_thirteen` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `date_article`, `paragraph_one`, `paragraph_two`, `paragraph_three`, `paragraph_four`, `paragraph_five`, `paragraph_six`, `paragraph_seven`, `paragraph_eight`, `paragraph_nine`, `paragraph_ten`, `paragraph_eleven`, `paragraph_twelve`, `paragraph_thirteen`) VALUES
(1, 'Un génie nucléaire', '', '2019-06-21 14:45:06', 'En 1976,', 'Il devient membre de l’Académie des sciences de L’URSS.', 'Il participe à la commission gouvernementale formée en urgence par le président soviétique Gorbatchev suite à l’explosion de Tchernobyl. Il est en charge des équipes scientifiques et techniques sur le site de la catastrophe', 'Il co-signe le rapport d’août 1986 sur les causes de l’explosion.', '', '', '', '', '', '', '', NULL, NULL, NULL),
(2, 'Tchernobyl', '', '2019-06-26 22:54:42', 'Le 26 avril 1986 à 1h23 du matin', 'Le réacteur n°4 de la centrale nucléaire de Tchernobyl explose', 'suite à un test du système de refroidissement de secours', '12 heures après l’explosion de la centrale,  M. Legassov fut nommé à la commission spéciale du gouvernement', 'Les 2 premiers jours, aucune information n’est communiquée au gouvernement de l’URSS, alors paralysé dans ses décisions', 'Pourtant, le taux de radioactivité détecté dans la ville de Pripiat est préoccupant', 'Les autorités, pour ne pas paniquer les foules, cache la réelle gravité de l’explosion', '30h après l’accident, 135 000 personnes menacées par les radiations quittent la zone interdite en bus. Ils ne le savent pas encore mais ils ne pourront jamais y revenir. ', '“J’ai su que la ville avait été évacuée mais je ne trouvais pas la force de leur dire la vérité. Si nous leur avions dit qu’ils partaient définitivement, ils auraient mis trop de temps, à préparer leurs affaires. Alors nous leur avons fait croire que c’était seulement temporaire.”', 'Legassov se voit alors investi la tâche de déterminer  les causes de l’explosion et part sur le terrain pour constater l’ampleur de la catastrophe.', '', NULL, NULL, NULL),
(3, 'Un rapport alarmant', 'Legasov, grâce à la présence de graphite sur le toit de la centrale, confirme l’explosion du coeur du réacteur \r\n\r\n\r\n', '2019-06-26 14:38:40', 'Le taux de radioactivité prélevé est alors très préoccupant', 'Une question se pose ensuite pour le scientifique,', 'Comment l’accident nucléaire a-t-il pu se produire ?', 'Personnel incompétents', 'Un test de sécurité prévu sur le réacteur n°4 de la centrale le 25 avril, a été reporté 10h plus tard. La puissance thermique du réacteur a été réduite de 1 000 à 200 MW.', 'Anatoli Diatlov et son équipe ont alors commis une série d’erreurs lors du déroulé du test en violant les procédures de sécurité du réacteur.', 'Materiel défectueux', 'Réacteur RBMK', 'Le cœur des reacteurs rbmk est instable en dessous de 700 MWth.', 'En clair, à faible puissance le réacteur devient difficilement contrôlable.', 'L’explosion de Tchernobyl s’est produite, précisément, lors d’un essai à faible puissance c’est-à-dire dans un contexte d’instabilité de ce réacteur.', 'Les réacteurs autres que RBMK toute réaction nucléaire tendant à l’emballement est, par conception du réacteur, automatiquement ralentie.', 'Les ingénieurs russes connaissaient cette instabilité', ''),
(4, 'Politique', 'Lors de son discours au procès,', '2019-06-26 23:12:49', 'Legassov reproche a l’union soviétique de produire des réacteurs qui ne respectent pas les normes de sécurité, malgré l’alerte de nombreux scientifiques. ', 'Cette négligence s’explique par le climat de guerre froide qui régnait à l’époque de la construction de la centrale. ', 'La course à la technologie entre l’URSS et les Etats unis a incité le bloc de l’est à précipiter la construction de la centrale en négligeant certaines normes de sécurité importantes', 'Legassov a exprimé sa désillusion concernant la gestion de la catastrophe par les autorités russes.', '“Des robots biologiques”', 'Afin de ne pas divulguer le réel taux de radioactivité  aux yeux de la scène internationale  ', 'l’Union soviétique préfère sacrifier des hommes.', 'Ce sont donc les “liquidateurs” composés d’hommes volontaires pour la plupart qui s’exposeront mortellement aux radiations afin de décontaminer la région de tchernobyl.', 'Dans les années 1980, le cœur du pouvoir n\'est pas au Kremlin mais à la direction d\'un des services de renseignement parmi les plus redoutables au monde: le KGB. ', 'Pour éviter la divulgation  d’informations concernant la dangerosité de l’accident  à l’étranger, \r\nLes scientifiques qui enquêtent sur les causes de l’explosion du réacteur sont espionnés et intimidés par les services secrets soviétiques.\r\n', 'Ces tentatives de dissuasion n’empêchont pas Légasov de révéler au grand jour la responsabilité de l’Etat dans l’affaire “Tchernobyl” lors du procès des ingénieurs sur lesquels les autorités reportent toute la responsabilité de l’accident.', '', '', ''),
(26, 'La mort de Legasov', 'Fortement irradié lors des ses actions à Tchernobyl, la santé de Legassov se détériore.', '2019-06-27 03:27:09', 'Il enregistre alors un testament dans lequel il dévoile toute la vérité sur Tchernobyl', 'il fait part de sa désillusion vis à vis du gouvernement soviétique alors qu’il enquêtait sur la catastrophe.', 'Legassov rapporte dans ses cassettes, que le gouvernement avait tenté de dissimuler des informations complètes concernant l’affaire.', 'le 22 avril 1988', 'Le scientifique est retrouvé pendu à son domicile, deux ans après la plus grande catastrophe nucléaire de l’histoire.', 'Le 20 Septembre 1996,', 'Valery Legassov reçoit le titre de “Héros de la Fédération de Russie”. Celui ci est enfin reconnu par l’union soviétique pour son travail, mais surtout son investissement dans l’affaire Tchernobyl.', 'D’après l’Académie des sciences de New York, ', '985.000 décès à travers le monde sont attribuables aux retombées de l’accident nucléaire de Tchernobyl', 'alors que le chiffre officiel de l’Organisation Mondial de la Santé (OMS) est encore aujourd’hui de 48 morts.', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `rang` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `mail`, `rang`) VALUES
(1, 'admin', '$argon2i$v=19$m=1024,t=2,p=2$RmV5S3FKZ1o2TnduUzBGZw$k30VoJRoXLxO0Rsuib95p4sVkrujWICvZmiyfQro7wA', 'admin@admin.fr', '1'),
(2, 'Teddy', '$argon2i$v=19$m=1024,t=2,p=2$RmV5S3FKZ1o2TnduUzBGZw$k30VoJRoXLxO0Rsuib95p4sVkrujWICvZmiyfQro7wA', 'teddy@teddy.com', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
