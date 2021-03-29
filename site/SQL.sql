-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 02 juil. 2018 à 21:27
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chef`
--

INSERT INTO `chef` (`id`, `user`, `mdp`) VALUES
(1, 'chef', 'chef');

-- --------------------------------------------------------

--
-- Structure de la table `Menu`
--

CREATE TABLE `Menu` (
  `id` int(11) NOT NULL,
  `entree` varchar(20) NOT NULL,
  `plat` varchar(20) NOT NULL,
  `dessert` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Menu`
--

INSERT INTO `Menu` (`id`, `entree`, `plat`, `dessert`) VALUES
(1, 'samoussas', 'parmentier', 'entremet');

-- --------------------------------------------------------

--
-- Structure de la table `Plat`
--

CREATE TABLE `Plat` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `type` varchar(20) NOT NULL,
  `ingredient` varchar(200) NOT NULL,
  `allergene` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Plat`
--

INSERT INTO `Plat` (`id`, `nom`, `prix`, `type`, `ingredient`, `allergene`) VALUES
(1, 'cheese cake', 7.99, 'dessert', 'tofu, lait de coco, noix de coco, vanille, biscuits sans gluten, margarine,creme de coco, chocolat noir', ' ok ok ok ok'),
(2, 'fraisier', 8.99, 'dessert', 'framboises, crème de coco,eau,agar-agar,dattes, pistaches,amandes,huile de coco, sirop d\'agave', ''),
(3, 'entremet', 8.99, 'dessert', 'tofu,creme de marroon, agar-agar, méringue, jus de citron, sucre ,fécule, cacao, aquafaba', ''),
(4, 'panacota', 8.99, 'dessert', 'lait de coco,fécule,agar-agar,vanille,fruits rouges,sirop d\'agave', ''),
(5, 'lasagnes', 14.99, 'plat', 'lasagne sans oeufs, coulis de tomates,soja,huile d\'olive,oignon,ail,herbe de provence,origan,muscade,curcuma,sel et poivre,bouillon de légume bio, lait de soja nature,maizena', '.jajz. alabbb alabbb alabbb'),
(6, 'salade', 6.99, 'entree', 'courge, chou, citron,huile d\'olive,vinaigre de pomme', '.jajz.'),
(7, 'samoussas', 6.99, 'entree', 'feuilles de bricks, pommes de terre, petits pois, carottes, curry, curcuma,cumin,soja,sel, poivre', 'jajz'),
(8, 'sushi', 6.99, 'entree', 'riz,vinaigre de pomme,sucre de canne,betrave, avocat, carottes,graines de sésame Blanc et noir,d\'algues nori, sel marin, huile de olive', ''),
(9, 'ratatouille', 7.99, 'entree', 'aubergine,courgette,tomates,oignon,poivron vert et rouge, sel, huile d\'olive,origan,romarin,thym,persil', ''),
(10, 'omelette', 13.99, 'plat', 'pommes de terre, oignon émincé,farine de pois chiches,eau, soupe de persil, ail hachée,thym séché, sel et poivre', ''),
(11, 'mélange de choux', 14.99, 'plat', 'variétés différents de choux,  tofu, huile d\'olive, épices, fromage végétal', ''),
(12, 'brouillade', 14.99, 'plat', 'tofu,oignon rouge, céleri, gingembre,curcuma,cumin,paprika,vin blanc, zeste de citron,poivre noir,persil, huile d\'olive extra vierge', ''),
(13, 'spaghettis', 14.99, 'plat', 'carottes, oignon, gousses d\'ail, champignons, soja,citron, cumin,cacahuètes, huile de sésame', 'soja,fruits à coques'),
(14, 'rougail', 13.99, 'plat', 'tofu,tomates,oignon,ail,huile d\'olive,curcuma,gingembre,piment,sel,poivre,citron', ''),
(15, 'parmentier', 12.99, 'plat', 'pommes de terre, protéines de soja, lait de soja, huile d\'olive, coulis de tomate, chapelure, tamari, curcuma,ail, oignon, herbes de provence, sel et poivre', 'soja,jajz'),
(16, 'hamburger', 14.99, 'plat', 'betterave, pois chiches, flocons d\'avoine, champignons, oignon, ail, sésame,paprika', ''),
(17, 'paella', 13.99, 'plat', 'riz, protéines de soja texturées, eau, poivron rouge,poivron jaune,petits pois, curcuma, concentré de tomates, huile d\'olive, bouillon de légumes bio', ''),
(18, 'curry', 14.99, 'plat', 'ail,oignon,gingembre, pommes de terre,carottes, poivron rouge, courgette, petits pois,épinard, curry,curcuma,coriande,lait de coco, soja, sirop d\'érable,huile de sésame', 'soja, sésame'),
(19, 'cookies', 8.99, 'dessert', 'farine, sucre de canne,huile d\'olive, soupe de compote de pommes, soupe de lait végétal, vinaigre de cidre, fleur d\'oranger, bicarbonate', 'gluten'),
(20, 'falafels', 6.99, 'entree', 'pois chiches, café de cumin, curcuma, curry, farine complète, huile végétale, huile d\'olive, sel, poivre, coriande, persil,feuilles de menthe,tomates séchées', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Plat`
--
ALTER TABLE `Plat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Plat`
--
ALTER TABLE `Plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
