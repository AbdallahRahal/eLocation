-- --------------------------------------------------------

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `nom`, `prenom`, `adresse`, `sexe`, `mail`, `cp`, `ville`, `statut`, `etat`) VALUES
(16, 'Admin', 'aaa', 'Adminstrateur', 'Ok go', 'toc toc toc', 'H', 'admin@gmail.com', '93410', 'Vaujours', 'admin', 'lambda'),
(17, 'User', 'bbb', 'Vicky', 'Utilisateur', '111 rue de user', 'H', 'user@gmail.com', '93410', 'Vaujours', 'utilisateur', 'lambda');

-- --------------------------------------------------------

--
-- Dumping data for table `point_relais`
--

INSERT INTO `point_relais` (`id`, `nom`, `adresse`, `horaire`, `cp`, `ville`) VALUES
(1, 'QG Chatelet', 'Chatelet les halles', '10:80', '93000', 'Vaujours');

-- --------------------------------------------------------

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `promo`) VALUES
(1, 'foot', 2),
(2, 'tennis', 3),
(3, 'hiver', 3),
(4, 'ete', 4);

-- --------------------------------------------------------

--
-- Dumping data for table `article`
--


INSERT INTO `article` (`id`, `nom`, `description`, `prix_journee`, `lien_photo`, `statut`, `etat`) VALUES
(1, 'tibia', 'pour le foot', 20, '', 'dispo', 'neuf'),
(2, 'raquette', 'de tenis', 30, '', 'dispo', 'neuf'),
(3, 'skis magiques', 'des skis vous permettant de vous teleporter durant une journee en montagne', 999999, '', 'dispo', 'neuf'),
(4, 'luge plate', 'Une luge plate vous permettant de prendre de la vitesse en descente', 1, '', 'dispo', 'neuf'),
(5, 'ballon de football', 'Un ballon de football en or, cassez le et vous serez sdf à cause de la caution', 99995, '', 'dispo', 'neuf');

-- --------------------------------------------------------

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `article_id`, `utilisateur_id`) VALUES
(1, 5, 16);

-- --------------------------------------------------------

--
-- Dumping data for table `appartenir`
--


INSERT INTO `appartenir` (`id`, `categorie_id`, `article_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 4, 5),
(4, 3, 3),
(5, 3, 4);

-- --------------------------------------------------------

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `note`, `commentaire`, `id_utilisateur`, `id_article`) VALUES
(1, 5, 'La teleportation est infinie, c\'est juste incroyable, 5/5.', 16, 3);



-- --------------------------------------------------------

--
-- Dumping data for table `ligne_proposition`
--

INSERT INTO `ligne_proposition` (`id`, `nom`, `prix`, `description`, `stade`, `num_proposition_id`) VALUES
(1, 'velo btwin', 100, 'Un velo pas cher, pas besoin de pedaler il roule tout seul, si vous roulez vous tombez.', 'proposition', 1);

-- --------------------------------------------------------

--
-- Dumping data for table `louer`
--

INSERT INTO `louer` (`id`, `date_location`, `date_butoire`, `date_reelle`, `note`, `commentaire`, `action_id`, `point_relais_id`) VALUES
(1, '2018-11-21', '2018-11-24', '2018-11-23', 4, 'Vraiment bien merci ', 1, 1);

-- --------------------------------------------------------

--
-- Dumping data for table `num_proposition`
--

INSERT INTO `num_proposition` (`id`, `nom`, `date_propo`, `utilisateur_id`) VALUES
(1, 'velo btwin', '2018-11-23', 16);



-- --------------------------------------------------------

--
-- Dumping data for table `vendre`
--

INSERT INTO `vendre` (`id`, `date_vente`, `action_id`) VALUES
(1, '2018-11-23', 1);
