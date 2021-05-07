-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 mai 2021 à 06:41
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE `admine` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ID_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admine`
--

INSERT INTO `admine` (`Fname`, `Lname`, `Email`, `Password`, `ID_client`) VALUES
('steve', 'vahsis', 'steve@gmail.com', 'steve123ABC', 1);

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `second_type` varchar(255) DEFAULT NULL,
  `prix` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `name`, `type`, `second_type`, `prix`) VALUES
(1, 'Chambre simple', 'Vue interieur', 'Null', 50),
(2, 'Chambre simple', 'Vue exterieur', 'Null', 70),
(3, 'Chambre double', 'lit double', 'Vue interiuer', 90),
(4, 'Chambre double', 'lit double', 'Vue exterieur', 120),
(5, 'Chambre double', '2 lit simple', 'Vue interieur', 90),
(6, 'appartement', 'Vue interieur', 'Null', 150),
(7, 'appartement', 'Vue exterieur', 'Null', 180),
(8, 'bangloaw', 'Vue interieur', 'Null', 200),
(9, 'bangloaw', 'Vue exteriuer', 'Null', 240);

-- --------------------------------------------------------

--
-- Structure de la table `choix chambre`
--

CREATE TABLE `choix chambre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_bient` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `choix chambre`
--

INSERT INTO `choix chambre` (`id`, `name`, `id_bient`) VALUES
(1, 'vue interieur', '	\r\nJH43260'),
(2, '2 lit double', 'JH123');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Total_Prix` int(11) DEFAULT NULL,
  `ID_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`Fname`, `Lname`, `Total_Prix`, `ID_client`) VALUES
('reda', 'reda', 2980, 'RR44AA23.V1'),
('salah', 'bobana', 4140, 'SB56HA21.V1'),
('steve', 'vahsis', 458, 'SV56ES1.V1');

-- --------------------------------------------------------

--
-- Structure de la table `client_child`
--

CREATE TABLE `client_child` (
  `Name` varchar(255) DEFAULT NULL,
  `Type_Choix` varchar(255) DEFAULT NULL,
  `ID_commande` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client_child`
--

INSERT INTO `client_child` (`Name`, `Type_Choix`, `ID_commande`) VALUES
('bebe', 'Without lit', 'SV56ES1.V1'),
('Adulte', 'Add Chambre', 'SV56ES1.V1'),
('bebe', 'Without lit', 'SB56HA21.V1'),
('Enfant', 'Add lit', 'SB56HA21.V1'),
('Enfant', 'Add lit', 'SB56HA21.V1'),
('Adulte', 'Add Chambre', 'SB56HA21.V1'),
('bebe', 'Without lit', 'RR44AA23.V1'),
('Enfant', 'Add lit', 'RR44AA23.V1'),
('Enfant', 'Add lit', 'RR44AA23.V1'),
('bebe', 'Without lit', 'SV56ES1.V1'),
('bebe', 'Add lit', 'SV56ES1.V1');

-- --------------------------------------------------------

--
-- Structure de la table `client_service`
--

CREATE TABLE `client_service` (
  `chambre` varchar(255) DEFAULT NULL,
  `Type_Chambre` varchar(255) DEFAULT NULL,
  `Second_Type_Chambre` varchar(255) DEFAULT NULL,
  `Pension` varchar(255) DEFAULT NULL,
  `Pension_Choix` varchar(255) DEFAULT NULL,
  `ID_commande` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client_service`
--

INSERT INTO `client_service` (`chambre`, `Type_Chambre`, `Second_Type_Chambre`, `Pension`, `Pension_Choix`, `ID_commande`) VALUES
('chambre_Simple', 'Vue exterieur', 'NULL', 'complete', 'NULL', 'SV56ES1.V1'),
('chambre_Double', 'lit double', 'Vue interieur', 'Demi', 'Petit dej/dej', 'SB56HA21.V1'),
('Appartement', 'Vue exterieur', 'NULL', 'complete', 'NULL', 'SB56HA21.V1'),
('chambre_Simple', 'Vue interieur', 'NULL', 'Demi', 'Petit dej/din', 'RR44AA23.V1'),
('chambre_Double', 'lit double', 'Vue exterieur', 'complete', 'NULL', 'RR44AA23.V1'),
('chambre_Simple', 'Vue interieur', 'NULL', 'sans', 'NULL', 'SV56ES1.V1'),
('chambre_Simple', 'Vue interieur', 'NULL', 'complete', 'NULL', 'SV56ES1.V1'),
('chambre_Simple', 'Vue interieur', 'NULL', 'complete', 'NULL', 'SV56ES1.V1');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'reda', 'aicha@gmail.com', 'craete element', 'hi faical how are u'),
(2, 'reda', 'aicha@gamil.com', 'craete element', 'hi faical how are u'),
(3, 'dssdytsdtyds', 'aicha@gmail.com', 'tezrez-ez', 'hhyzezyzytz eztyeztzz drerzyevcdfsdfrds'),
(4, 'faical', 'aicha@gmail.com', 'craete element', 'hhyzezyzytz eztyeztzz drerzyevcdfsdfrds dsdhds'),
(5, 'faical', 'bahsis@gmail.com', 'sdhjsdyuds', 'hyuzeyez ezuyzetuezuezutez'),
(6, 'sdsez', 'faical@gmail.com', 'h zehezyzeyuze', 'uiezizze ezyzeuzeyizeyezyez'),
(7, 'sdjsdjd', 'zeezez@gmail.com', 'zjuieziueziuezuiez', 'uiezuiezuiez zeuizeieziyez'),
(8, 'sdjsdjd', 'bahsis@gmail.com', 'zesddsdsd', 'sdjdskjdsjksdkjsdjkkjdskjsd'),
(9, 'sdjsdksdkj', 'dsjkdsjksd@gmail.com', 'sddssdddsds', 'hjdhjdhjsd sdhdshsdjhsdjhsdhjds'),
(10, 'jhsdjhsd', 'hjjhds@gmail.com', 'dshhjhjhjs', 'hdshjdshjds sdhjsdjhsdhjd');

-- --------------------------------------------------------

--
-- Structure de la table `pension`
--

CREATE TABLE `pension` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `second_choix` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pension`
--

INSERT INTO `pension` (`id`, `name`, `second_choix`, `prix`) VALUES
(1, 'complete', 'NUll', 90),
(2, 'demi', 'Petit dej/dej', 40),
(3, 'demi', 'petit dej/din', 28),
(4, 'sans', 'Null', 0);

-- --------------------------------------------------------

--
-- Structure de la table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `positions`
--

INSERT INTO `positions` (`id`, `Email`, `Password`, `role`) VALUES
(1, 'steve@gmail.com', 'steve123ABC', 'admine'),
(16, 'med@gmail.com', 'med123ABC', 'user_account'),
(18, 'yassine@gmail.com', 'yassineABC123', 'user_account'),
(20, 'nowfel@gmail.com', 'nofel123NOFEL', 'user_account'),
(21, 'redoin@gmail.com', 'red123ABC', 'user_account'),
(22, 'hajar@gmail.com', 'hajar123HAJAR', 'user_account'),
(23, 'reda@gmail.com', 'reda123ABC', 'user_account'),
(24, 'iman@gmail.com', 'iman123ABC', 'user_account'),
(25, 'fatima@gmail.com', 'fatima123ABC', 'user_account'),
(26, 'yassmine@gmail.com', 'yassmine123ABC', 'user_account'),
(27, 'omaima@gmail.com', 'omama123ABC', 'user_account'),
(28, 'amine@gmail.com', 'amineAE33', 'user_account'),
(29, 'hjdshjs@gmail.com', 'hjdshgsd6363DGD', 'user_account'),
(30, 'ommm@gmail.com', 'hfg655FFF', 'user_account'),
(31, 'aichakkkk@gmail.com', 'KKK888kkkk', 'user_account'),
(32, 'aichammm@gmail.com', 'hh777HHHHH', 'user_account'),
(33, 'faicampmpl@gmail.com', 'faical123FAICALjjj', 'user_account'),
(34, 'aichampmp@gmail.com', 'faical123FAICAL', 'user_account'),
(35, 'aichasdjksjkds@gmail.com', 'faical123H', 'user_account'),
(36, 'aichaklklkl@gmail.com', 'faical123FAICAL', 'user_account'),
(37, 'aichammmm@gmail.com', 'faical123FAICAL', 'user_account'),
(38, 'aicha@gmail.com', 'faical123FAICAL', 'user_account');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` text NOT NULL,
  `reclamation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id`, `name`, `email`, `sujet`, `reclamation`) VALUES
(2, 'reda', 'aicha@gmail.com', 'craete element', 'sdyuds yezuyeuyezyueuyez'),
(3, 'reda', 'aicha@gmail.com', 'craete element', 'sdyuds yezuyeuyezyueuyez'),
(4, 'faical', 'faical@gmail.com', 'reclamation service', 'you service is bad'),
(5, 'faical', 'faical@gmail.com', 'ejezuizeuiez', 'jueiuizeuiezuieiuz'),
(6, 'hjdshjds', 'jhjsdds@gmail.com', 'sdjdsjsdkj', 'hjhdjhdshjsd');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Date_start` char(255) DEFAULT NULL,
  `Date_end` char(255) DEFAULT NULL,
  `Day` int(11) DEFAULT NULL,
  `ID_commande` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Date_start`, `Date_end`, `Day`, `ID_commande`) VALUES
('2021-05-08', '2021-05-13', 5, 'SV56ES1.V1'),
('2021-05-03', '2021-05-12', 9, 'SB56HA21.V1'),
('2021-05-01', '2021-05-11', 10, 'RR44AA23.V1'),
('2021-04-29', '2021-05-12', 13, 'SV56ES1.V1'),
('2021-05-01', '2021-05-04', 3, 'SV56ES1.V1');

-- --------------------------------------------------------

--
-- Structure de la table `user_account`
--

CREATE TABLE `user_account` (
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `ID_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_account`
--

INSERT INTO `user_account` (`Fname`, `Lname`, `Email`, `PhoneNumber`, `Password`, `ID_client`) VALUES
('mohamed', 'hachimi', 'med@gmail.com', '+67765665', 'med123ABC', 16),
('yassine', 'tikioune', 'yassine@gmail.com', '+346346535', 'yassineABC123', 18),
('nowfel', 'benmansor', 'nowfel@gmail.com', '+346346535', 'nofel123NOFEL', 20),
('salah', 'bobana', 'redoin@gmail.com', '+74544333', 'red123ABC', 21),
('HAJAR', 'hajar', 'hajar@gmail.com', '+74544333', 'hajar123HAJAR', 22),
('reda', 'reda', 'reda@gmail.com', '+877675564', 'reda123ABC', 23),
('imane', 'haha', 'iman@gmail.com', '+437845634', 'iman123ABC', 24),
('fatima', 'abasi', 'fatima@gmail.com', '+437845634', 'fatima123ABC', 25),
('yassmine', 'ghhh', 'yassmine@gmail.com', '+437845634', 'yassmine123ABC', 26),
('omaima', 'abdollah', 'omaima@gmail.com', '+437845634', 'omama123ABC', 27),
('amine', 'aline', 'amine@gmail.com', '+437845634', 'amineAE33', 28),
('hjshjs', 'hjsdhjds', 'hjdshjs@gmail.com', '+437845634', 'hjdshgsd6363DGD', 29),
('aboqal', 'abdollah', 'ommm@gmail.com', '+437845634', 'hfg655FFF', 30),
('bahsis', 'aicha', 'aichakkkk@gmail.com', '+437845634', 'KKK888kkkk', 31),
('bahsis', 'aicha', 'aichammm@gmail.com', '+437845634', 'hh777HHHHH', 32),
('jkdjkssdjkds', 'kjsksdkjsdkjds', 'aichampmp@gmail.com', '+437845634', 'faical123FAICAL', 34);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admine`
--
ALTER TABLE `admine`
  ADD KEY `ID_client` (`ID_client`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `choix chambre`
--
ALTER TABLE `choix chambre`
  ADD PRIMARY KEY (`id`,`id_bient`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID_client`);

--
-- Index pour la table `client_child`
--
ALTER TABLE `client_child`
  ADD KEY `ID_commande` (`ID_commande`);

--
-- Index pour la table `client_service`
--
ALTER TABLE `client_service`
  ADD KEY `ID_commande` (`ID_commande`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pension`
--
ALTER TABLE `pension`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `ID_commande` (`ID_commande`);

--
-- Index pour la table `user_account`
--
ALTER TABLE `user_account`
  ADD KEY `ID_client` (`ID_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `choix chambre`
--
ALTER TABLE `choix chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `pension`
--
ALTER TABLE `pension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admine`
--
ALTER TABLE `admine`
  ADD CONSTRAINT `admine_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client_child`
--
ALTER TABLE `client_child`
  ADD CONSTRAINT `client_child_ibfk_1` FOREIGN KEY (`ID_commande`) REFERENCES `clients` (`ID_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client_service`
--
ALTER TABLE `client_service`
  ADD CONSTRAINT `client_service_ibfk_1` FOREIGN KEY (`ID_commande`) REFERENCES `clients` (`ID_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`ID_commande`) REFERENCES `clients` (`ID_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `user_account_ibfk_1` FOREIGN KEY (`ID_client`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
