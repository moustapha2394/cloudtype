-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 14 sep. 2019 à 18:17
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cloudtype`
--

-- --------------------------------------------------------

--
-- Structure de la table `cloud`
--

CREATE TABLE `cloud` (
  `ID` int(11) NOT NULL,
  `nom_du_projet` varchar(255) NOT NULL,
  `date_de_creation` date NOT NULL,
  `description` text NOT NULL,
  `propriete` varchar(255) NOT NULL,
  `type_de_projet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `functions`
--

CREATE TABLE `functions` (
  `ID` int(11) NOT NULL,
  `name_func` varchar(255) NOT NULL,
  `function` text NOT NULL,
  `date_de_creation` date NOT NULL,
  `derniere_modif` datetime NOT NULL,
  `auteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `functions`
--

INSERT INTO `functions` (`ID`, `name_func`, `function`, `date_de_creation`, `derniere_modif`, `auteur`) VALUES
(3, 'funct.js', 'var btnNewF = document.querySelector(\'.newfunc\');\r\nvar boite = document.querySelector(\'.boiteF\');\r\nvar closebtn = document.querySelector(\'.boiteF .fermer\');\r\nvar codepart = document.querySelector(\'.boiteF .codepart\');\r\nvar table = document.querySelector(\'.table\');\r\nvar container = document.querySelectorAll(\".container, nav, header\");\r\nvar gris = document.querySelector(\'#wrapper\');\r\n	function etat(l=0) {\r\n		if (l==1) {\r\n		boite.style.display=\'block\';\r\n		table.style.display=\'none\';\r\n		for (let i = 0; i < container.length; i++) {	\r\n			container[i].style.filter=\'blur(2px)\';\r\n		}\r\n		gris.style.display=\'block\';\r\n		}\r\n		else {\r\n			boite.style.display=\'none\';\r\n			table.style.display=\'contents\';\r\n			for (let i = 0; i < container.length; i++) {	\r\n				container[i].style.filter=\'blur(0)\';\r\n			}\r\n			gris.style.display=\'none\';\r\n		}\r\n	}\r\n	function cc(){\r\n		etat(1);\r\n		\r\n	}\r\n	\r\n	function close(){\r\n		codepart.value=\"\";\r\n		etat(0);\r\n	}\r\n	closebtn.addEventListener(\'click\',close);\r\n	btnNewF.addEventListener(\'click\',cc);\r\n	gris.addEventListener(\'click\',etat);', '2019-09-10', '2019-09-10 00:00:00', 'cloudtype'),
(4, ',bl', ';hkn', '2019-09-10', '2019-09-10 00:00:00', 'cloudtype'),
(5, 'bonjour ', 'coucou', '2019-09-10', '2019-09-10 00:00:00', 'cloudtype'),
(6, 'bonjour', 'oui\r\n\r\n', '2019-09-10', '2019-09-10 00:00:00', 'Moustapha'),
(7, 'susu', 'susu', '2019-09-10', '2019-09-10 11:34:12', 'Moustapha'),
(8, 'GetSizeName', 'function GetSizeName($octet)\r\n{\r\n    Array contenant les differents unités \r\n    $unite = array(\'octet\',\'ko\',\'mo\',\'go\');\r\n    \r\n    if ($octet < 1000) // octet\r\n    {\r\n        return $octet.$unite[0];\r\n    }\r\n    elseif ($octet >=1000 && $octet < 1000000) // ko\r\n    {\r\n        $ko = round($octet/1024,2);\r\n        return $ko.$unite[1];\r\n    }\r\n    elseif ($octet < 1000000 && $octet < 1000000000) // Mo \r\n    {\r\n        $mo = round($octet/(1024*1024),2);\r\n        return $mo.$unite[2];\r\n    }\r\n    else // Go \r\n    {\r\n        $go = round($octet/(1024*1024*1024),2);\r\n        return $go.$unite[3];    \r\n    }\r\n}', '2019-09-10', '2019-09-10 11:45:18', 'Moustapha'),
(9, 'kiss', '&lt;kiss&gt;', '2019-09-10', '2019-09-10 11:50:35', 'Moustapha'),
(10, 'oui', 'ouiiiuiu\r\nouiuo\r\nopuj', '2019-09-14', '2019-09-14 11:48:48', 'cloudtype'),
(11, 'sosososo', 'sisisisis', '2019-09-14', '2019-09-14 17:41:24', 'cloudtype');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID`, `pseudo`, `password`) VALUES
(1, 'cloudtype', '123890'),
(3, 'cloudtype', '123890'),
(4, 'Moustapha', 'AzErty');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cloud`
--
ALTER TABLE `cloud`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cloud`
--
ALTER TABLE `cloud`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `functions`
--
ALTER TABLE `functions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
