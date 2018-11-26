-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2018 at 04:14 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--
CREATE database projet;
USE projet;

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appartenir`
--

CREATE TABLE `appartenir` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `prix_journee` int(11) NOT NULL,
  `lien_photo` varchar(45) NOT NULL,
  `statut` enum('dispo','loue','reserve') NOT NULL,
  `etat` enum('neuf','abime') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateur` varchar(45) NOT NULL,
  `id_article` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `promo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `proposition`
--

CREATE TABLE `proposition` (
  `id` int(11) NOT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo1` varchar(200) DEFAULT NULL,
  `photo2` varchar(200) DEFAULT NULL,
  `stade` enum('proposition','offre','valide') NOT NULL DEFAULT 'proposition',
  `date_propo` date NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `louer`
--

CREATE TABLE `louer` (
  `id` int(11) NOT NULL,
  `date_location` date NOT NULL,
  `date_butoire` date NOT NULL,
  `date_reelle` date NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `action_id` int(11) NOT NULL,
  `point_relais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `point_relais`
--

CREATE TABLE `point_relais` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `horaire` varchar(45) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `sexe` enum('H','F') NOT NULL DEFAULT 'H',
  `mail` varchar(45) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `statut` enum('utilisateur','admin') NOT NULL DEFAULT 'utilisateur',
  `etat` enum('fidele','lambda') NOT NULL DEFAULT 'lambda'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `vendre`
--

CREATE TABLE `vendre` (
  `id` int(11) NOT NULL,
  `date_vente` date NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Indexes for table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`);

--
-- Indexes for table `louer`
--
ALTER TABLE `louer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `point_relais_id` (`point_relais_id`);

--
-- Indexes for table `point_relais`
--
ALTER TABLE `point_relais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendre`
--
ALTER TABLE `vendre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_id` (`action_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appartenir`
--
ALTER TABLE `appartenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `louer`
--
ALTER TABLE `louer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `point_relais`
--
ALTER TABLE `point_relais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendre`
--
ALTER TABLE `vendre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  ADD CONSTRAINT `action_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `appartenir_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

--
-- Constraints for table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `louer_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
  ADD CONSTRAINT `louer_ibfk_2` FOREIGN KEY (`point_relais_id`) REFERENCES `point_relais` (`id`);

--
-- Constraints for table `proposition`
--
ALTER TABLE `proposition`
  ADD CONSTRAINT `proposition_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `vendre`
--
ALTER TABLE `vendre`
  ADD CONSTRAINT `vendre_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`);
