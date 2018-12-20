-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2018 at 09:09 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `projet`
--

--
-- Dumping data for table `point_relais`
--

INSERT INTO `point_relais` (`id`, `nom`, `adresse`, `ouverture`, `fermeture`, `cp`, `ville`) VALUES
(6, 'Gare du nord', 'Gare du nord', '00:00:00', '00:00:00', '75000', 'Paris'),
(7, 'QG Chatelet', 'Chatelet les halles', '00:00:00', '00:00:00', '93000', 'Vaujours');

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `mdp`, `nom`, `prenom`, `adresse`, `sexe`, `mail`, `cp`, `ville`, `statut`, `etat`) VALUES
(16, 'Admin', '$2y$10$xuYXeLQev0U2RG8fTpat7.lBm/mW7Wqi39VNO9tQgZUeeVBbgL/mW', 'Adminstrateur', 'Ok go', 'toc toc toc', 'H', 'admin@gmail.com', '93410', 'Vaujours', 'admin', 'lambda'),
(17, 'User', '$2y$10$xuYXeLQev0U2RG8fTpat7.lBm/mW7Wqi39VNO9tQgZUeeVBbgL/mW', 'Vicky', 'Utilisateur', '111 rue de user', 'H', 'user@gmail.com', '93410', 'Vaujours', 'utilisateur', 'lambda'),
(21, 'Esu', '$2y$10$IlCwC6.iSHFbaPmPrY8W5u4D1ntiOs1YX74oRF05Qw64GSPEBKzPm', 'Chan', 'Esura', '50 rue de la plaine', 'F', 'esuchan@gmail.com', '92000', 'Kertos', 'utilisateur', 'lambda');

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `nom`, `description`, `prix_journee`, `lien_photo`, `statut`, `etat`) VALUES
(1, 'Protèges Tibia', 'Attaquez le terrain en toute confiance et en toute sécurité avec les derniers modèles de protège-tibias de l\'équipe de France', 25, 'https://boutique.foot.fr/27173-thickbox_default/protege-tibias-equipe-de-france-bleu-2018.jpg', 'dispo', 'neuf'),
(2, 'Raquette', 'Voici la raquette la plus exigeante mais la plus précise de la gamme eLocation', 230, 'https://www.tennispro.fr/media/catalog/product/cache/1/thumbnail/1200x/9df78eab33525d08d6e5fb8d27136e95/1/0/101257_1_5.jpg', 'dispo', 'neuf'),
(3, 'Skis Magiques', 'Les nouveaux skis vous permettant de vous téléporter durant une journée en montagne sans aucune limite, fini les tire-fesses', 999999, 'https://i2.cdscdn.com/pdt2/6/7/5/1/300x300/mp13268675/rw/ski-occasion-roxy-arc-en-ciel-fixations.jpg', 'dispo', 'neuf'),
(4, 'Luge de course', 'Une luge de course équipée d\'un volant pour une rapidité à toute épreuve', 8000, 'https://www.sportoza.fr/wp-content/uploads/2015/10/luge-neige-bois-plastique-sportoza-equipement-et-materiel-sport.jpg', 'dispo', 'neuf'),
(5, 'Ballon de football', 'Un ballon de football en or, revendez-le et vous serez millionaire. (oupas)', 77777, 'https://png2.kisspng.com/20180402/yfw/kisspng-ballon-d-or-2017-2014-fifa-ballon-d-or-ballon-d-or-balon-5ac2f121a2d373.893728001522725153667.png', 'reserve', 'neuf');

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `article_id`, `utilisateur_id`) VALUES
(1, 5, 16),
(2, 1, 17),
(3, 2, 17),
(4, 2, 17),
(5, 2, 17),
(6, 5, 17);

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `note`, `commentaire`, `id_utilisateur`, `id_article`) VALUES
(1, 5, 'La téléportation est infinie, c est juste incroyable, 5/5.', '16', '3');

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `promo`) VALUES
(1, 'Foot', 0),
(2, 'Tennis', 3),
(3, 'Hiver', 3),
(4, 'Été', 4);

--
-- Dumping data for table `louer`
--

INSERT INTO `louer` (`id`, `date_location`, `date_butoire`, `date_reelle`, `note`, `commentaire`, `action_id`, `point_relais_id`) VALUES
(3, '2018-12-18', '2019-01-17', '2018-12-18', NULL, NULL, 5, 6),
(4, '2018-12-18', '2018-12-26', NULL, NULL, NULL, 6, 6);

--
-- Dumping data for table `proposition`
--

INSERT INTO `proposition` (`id`, `titre`, `prix`, `description`, `photo1`, `photo2`, `stade`, `date_propo`, `utilisateur_id`) VALUES
(1, 'Vélo BTWIN', 99999, 'Un vélo unique, pas besoin de pédaler, il roule tout seul. Si vous roulez vous tombez!', 'http://buzzosphere.net/wp-content/uploads/2016/05/1-ibike.jpg', NULL, 'proposition', '2018-11-23', 16),
(3, 'Balles de tennis', 15, 'Des balles de tennis super légères et jamais utilisées.', NULL, NULL, 'valide', '2018-11-27', 17),
(5, 'it1', NULL, 'it1', NULL, NULL, 'proposition', '2018-11-27', 17);


--
-- Dumping data for table `vendre`
--

INSERT INTO `vendre` (`id`, `date_vente`, `action_id`) VALUES
(1, '2018-11-23', 1);

--
-- Dumping data for table `appartenir`
--

INSERT INTO `appartenir` (`id`, `categorie_id`, `article_id`) VALUES
(2, 2, 2),
(3, 4, 5),
(4, 3, 3),
(5, 3, 4),
(7, 1, 5),
(8, 1, 1);

