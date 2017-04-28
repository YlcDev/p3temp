-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 28 Avril 2017 à 17:21
-- Version du serveur :  5.7.17
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet3`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `add_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `content`, `add_date`) VALUES
(1, 'Preface', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-08'),
(2, 'Chapitre 1', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-10'),
(3, 'Chapitre 2', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-12'),
(4, 'Chapitre 3', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-12'),
(5, 'Chapitre 4', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-14'),
(6, 'Chapitre 5', 'admin', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem illum inventore labore molestias odit optio placeat qui repellat temporibus vero. Adipisci aperiam consequatur expedita iure iusto nesciunt officiis totam ut.', '2017-04-16');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `user`, `password`, `is_active`) VALUES
(1, 'john', 'john', 1),
(2, 'jane', 'jane', 1),
(3, 'bob', 'bob', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
