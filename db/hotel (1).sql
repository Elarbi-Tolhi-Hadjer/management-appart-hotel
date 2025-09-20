-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 avr. 2025 à 02:52
-- Version du serveur : 9.1.0
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `AbonnementId` bigint NOT NULL,
  `Nom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` double NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` enum('active','in-active') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`AbonnementId`, `Nom`, `Prix`, `Description`, `Status`) VALUES
(1, 'Basic', 5000, 'Accès libre à la salle, Pas de cours collectifs, Pas de coaching personnalisé', 'active'),
(2, 'Premium', 10000, 'Accès libre à la salle, Cours collectifs, Coaching personnalisé', 'active'),
(3, 'VIP', 15000, 'Accès illimité, Cours collectifs, Coaching personnalisé, Suivi nutritionnel, Entraînements privés', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id` int NOT NULL,
  `nom_client` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `type_abonnement` enum('Basic','Premium','VIP') COLLATE utf8mb4_general_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `statut` enum('Actif','Expiré') COLLATE utf8mb4_general_ci DEFAULT 'Actif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `ID` bigint NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID`, `FirstName`, `LastName`, `Email`, `Message`) VALUES
(1, 'Karim', 'Benzema', 'karim@gmail.com', 'Projet bien organisé..... Cool !'),
(2, 'Amine', 'Zidane', 'amine@gmail.com', 'Super travail !'),
(3, 'haroun', 'haddad', 'haroun@gmail.com', 'nice hotel');

-- --------------------------------------------------------

--
-- Structure de la table `event_booking`
--

CREATE TABLE `event_booking` (
  `BookingId` bigint NOT NULL,
  `EventId` bigint NOT NULL,
  `User_id` bigint NOT NULL,
  `Date` date NOT NULL,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Event_date` date NOT NULL,
  `NoOfGuest` varchar(50) NOT NULL,
  `EventTime` time NOT NULL,
  `Package` bigint NOT NULL,
  `Amount` double NOT NULL,
  `Email` text NOT NULL,
  `Phone_number` bigint NOT NULL,
  `Status` enum('Rejected','Cancelled','Paid','Booked','CheckedOut') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `event_booking`
--

INSERT INTO `event_booking` (`BookingId`, `EventId`, `User_id`, `Date`, `Modified_date`, `Event_date`, `NoOfGuest`, `EventTime`, `Package`, `Amount`, `Email`, `Phone_number`, `Status`) VALUES
(12, 18, 5, '2025-10-12', '2025-10-12 15:04:50', '2025-10-14', '200-250', '09:00:00', 8, 16000, 'karim@gmail.com', 8574526352, 'Rejected'),
(13, 22, 5, '2025-08-04', '2025-08-06 15:06:29', '2025-08-14', '250-300', '09:30:00', 8, 9600, 'karim@gmail.com', 8574859652, 'CheckedOut'),
(14, 19, 15, '2025-10-12', '2025-10-12 15:11:32', '2025-12-09', '100-200', '09:00:00', 8, 16000, 'amine@gmail.com', 8563526352, 'Paid'),
(15, 20, 15, '2025-10-12', '2025-10-12 15:12:02', '2025-11-20', '200-250', '10:00:00', 4, 8000, 'amine@gmail.com', 7545859652, 'Paid');

-- --------------------------------------------------------

--
-- Structure de la table `event_list`
--

CREATE TABLE `event_list` (
  `EventId` int NOT NULL,
  `EventTypeId` int DEFAULT NULL,
  `Status` enum('active','inactive') DEFAULT NULL,
  `Booking_status` enum('Available','Booked') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `general_settings`
--

CREATE TABLE `general_settings` (
  `ID` bigint NOT NULL,
  `Name` text NOT NULL,
  `Address_line1` text NOT NULL,
  `Address_line2` text NOT NULL,
  `City` varchar(10) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Zip_code` bigint NOT NULL,
  `Email` text NOT NULL,
  `Phone_number` bigint NOT NULL,
  `Telephone_number` bigint NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `general_settings`
--

INSERT INTO `general_settings` (`ID`, `Name`, `Address_line1`, `Address_line2`, `City`, `State`, `Country`, `Zip_code`, `Email`, `Phone_number`, `Telephone_number`, `Description`) VALUES
(1, 'Appart Hôtel xxxx', 'Adresse : Avenue Khaled Ibn Walid 27', 'Montagne', '31000 ', 'Oran', 'Algérie', 600015, 'appartxxxx@gmail.com', 213658968555, 2135456789, 'Découvrez Appart Hôtel xxxx, votre destination idéale pour le luxe et le confort à Oran. Avec des équipements modernes, un design élégant et des services personnalisés, nous vous garantissons un séjour inoubliable, que ce soit pour affaires ou loisirs. Réservez facilement en ligne, par téléphone ou via une agence de voyage.');

-- --------------------------------------------------------

--
-- Structure de la table `gym_booking`
--

CREATE TABLE `gym_booking` (
  `BookingId` bigint NOT NULL,
  `UserId` bigint NOT NULL,
  `SubscriptionId` bigint NOT NULL,
  `BookingDate` date NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` enum('Active','Cancelled','Expired') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gym_subscription`
--

CREATE TABLE `gym_subscription` (
  `SubscriptionId` int NOT NULL,
  `SubscriptionType` enum('VIP','Premium','Basic') NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Duration` int NOT NULL COMMENT 'Durée en jours',
  `Benefits` text NOT NULL,
  `Status` enum('Active','Inactive') DEFAULT 'Active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gym_type`
--

CREATE TABLE `gym_type` (
  `SubscriptionId` int NOT NULL,
  `SubscriptionName` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Cost` int NOT NULL,
  `Status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `gym_type`
--

INSERT INTO `gym_type` (`SubscriptionId`, `SubscriptionName`, `Description`, `Cost`, `Status`) VALUES
(1, 'VIP', '✅ Accès illimité\n✅ Cours collectifs\n✅ Coaching personnalisé\n✅ Suivi nutritionnel\n✅ Entraînements privés', 15000, 'active'),
(2, 'Premium', '✅ Accès libre à la salle\n✅ Cours collectifs\n✅ Coaching personnalisé', 10000, 'active'),
(3, 'Basic', '✅ Accès libre à la salle\n❌ Cours collectifs\n❌ Coaching personnalisé', 5000, 'active');

-- --------------------------------------------------------

--
-- Structure de la table `room_booking`
--

CREATE TABLE `room_booking` (
  `BookingId` bigint NOT NULL,
  `RoomId` bigint NOT NULL,
  `User_id` bigint NOT NULL,
  `Date` date NOT NULL,
  `Modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `NoOfGuest` varchar(50) NOT NULL,
  `Amount` double NOT NULL,
  `Email` text NOT NULL,
  `Phone_number` bigint NOT NULL,
  `Status` enum('Rejected','Cancelled','Paid','Booked','CheckedOut') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `room_booking`
--

INSERT INTO `room_booking` (`BookingId`, `RoomId`, `User_id`, `Date`, `Modified_date`, `CheckIn`, `CheckOut`, `NoOfGuest`, `Amount`, `Email`, `Phone_number`, `Status`) VALUES
(27, 20, 5, '2025-10-12', '2025-10-12 15:01:44', '2025-10-13', '2025-10-15', '2', 4000, 'karim@gmail.com', 8596526352, 'Paid'),
(28, 13, 5, '2025-10-12', '2025-10-12 15:02:20', '2025-10-20', '2025-10-22', '1', 2400, 'karim@gmail.com', 8542526352, 'Cancelled'),
(29, 21, 5, '2025-10-12', '2025-10-12 15:05:32', '2025-11-03', '2025-11-05', '1', 4000, 'karim@gmail.com', 8596857452, 'Rejected'),
(30, 22, 15, '2025-10-12', '2025-10-12 15:08:36', '2025-12-02', '2025-12-03', '1', 1750, 'amine@gmail.com', 9685745241, 'Paid'),
(31, 13, 15, '2025-10-12', '2025-10-12 15:09:00', '2025-11-11', '2025-11-13', '2', 2400, 'amine@gmail.com', 7485965263, 'Cancelled'),
(32, 16, 15, '2025-10-12', '2025-10-12 15:09:31', '2025-11-18', '2025-11-20', '2', 3600, 'amine@gmail.com', 9652635241, 'Paid'),
(33, 29, 15, '2025-10-12', '2025-10-12 15:10:07', '2025-10-14', '2025-10-23', '1', 31500, 'amine@gmail.com', 8541526352, 'Paid'),
(34, 18, 15, '2025-10-12', '2025-10-12 15:10:42', '2025-11-11', '2025-11-13', '2', 3600, 'amine@gmail.com', 8585968563, 'Booked');

-- --------------------------------------------------------

--
-- Structure de la table `room_list`
--

CREATE TABLE `room_list` (
  `RoomId` bigint NOT NULL,
  `RoomTypeId` bigint NOT NULL,
  `RoomNumber` bigint NOT NULL,
  `Status` enum('active','in-active') NOT NULL,
  `Booking_status` enum('Booked','Available') NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `room_list`
--

INSERT INTO `room_list` (`RoomId`, `RoomTypeId`, `RoomNumber`, `Status`, `Booking_status`) VALUES
(13, 11, 1, 'active', 'Available'),
(14, 11, 2, 'active', 'Available'),
(15, 11, 3, 'active', 'Available'),
(16, 12, 4, 'active', 'Booked'),
(17, 11, 5, 'active', 'Available'),
(18, 12, 6, 'active', 'Booked'),
(19, 12, 7, 'active', 'Available'),
(20, 13, 8, 'active', 'Booked'),
(21, 13, 9, 'active', 'Available'),
(22, 14, 10, 'active', 'Booked'),
(23, 14, 11, 'active', 'Available'),
(24, 14, 12, 'active', 'Available'),
(25, 15, 13, 'active', 'Available'),
(26, 15, 14, 'active', 'Available'),
(27, 16, 15, 'active', 'Available'),
(28, 18, 16, 'active', 'Available'),
(29, 17, 17, 'active', 'Booked'),
(30, 16, 18, 'active', 'Available'),
(31, 17, 19, 'active', 'Available'),
(32, 15, 20, 'active', 'Available');

-- --------------------------------------------------------

--
-- Structure de la table `room_payment`
--

CREATE TABLE `room_payment` (
  `PaymentId` bigint NOT NULL,
  `BookingId` bigint NOT NULL,
  `PaymentType` enum('Cash','Net Banking','Credit Card','Debit Card') NOT NULL,
  `PaymentDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Amount` decimal(10,2) NOT NULL,
  `Status` enum('Pending','Paid','Failed') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `room_payment`
--

INSERT INTO `room_payment` (`PaymentId`, `BookingId`, `PaymentType`, `PaymentDate`, `Amount`, `Status`) VALUES
(1, 27, 'Net Banking', '2025-10-12 00:00:00', 4000.00, 'Paid'),
(2, 32, 'Net Banking', '2025-10-12 00:00:00', 3600.00, 'Paid'),
(3, 30, 'Net Banking', '2025-10-12 00:00:00', 1750.00, 'Paid'),
(4, 33, 'Debit Card', '2025-10-12 00:00:00', 31500.00, 'Paid');

-- --------------------------------------------------------

--
-- Structure de la table `room_type`
--

CREATE TABLE `room_type` (
  `RoomTypeId` bigint NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `RoomImage` text NOT NULL,
  `Description` text NOT NULL,
  `Cost` double NOT NULL,
  `Status` enum('active','in-active') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `room_type`
--

INSERT INTO `room_type` (`RoomTypeId`, `RoomType`, `RoomImage`, `Description`, `Cost`, `Status`) VALUES
(11, 'Chambre Familiale', 'away.jpg', 'TV écran plat 32 pouces, Cuisine équipée, Serviettes, Tables à manger', 1200, 'active'),
(12, 'Chambre pour Célibataires', 'F.jpg', 'Articles de toilette, Mini-bar, Téléphone', 1800, 'active'),
(13, 'Suites Présidentielles', 'A.jpg', 'Penderie avec cintres, TV écran plat HD, Téléphone', 2000, 'active'),
(14, 'Chambre Classique', 'accomadation.jpg', 'Penderie avec cintres, TV écran plat HD, Téléphone', 1750, 'active'),
(15, 'Chambre Club', 'A.jpg', 'Penderie avec cintres, Service en chambre 24h/24, Ordinateur et accès Internet', 1680, 'active'),
(16, 'Chambre Deluxe', 'classic.jpg', 'Penderie avec cintres, TV écran plat HD, Téléphone', 1900, 'active'),
(17, 'Super Deluxe', 'club.jpg', 'TV écran plat 32 pouces, TV écran plat HD, Mini-bar, Téléphone', 3500, 'active'),
(18, 'Luxury', 'super.jpg', 'Penderie avec cintres, TV écran plat 32 pouces, Mini-bar, Téléphone', 3500, 'active');

-- --------------------------------------------------------

--
-- Structure de la table `users_details`
--

CREATE TABLE `users_details` (
  `UserId` bigint NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `ProfileImage` varchar(255) NOT NULL DEFAULT 'user.png',
  `Status` enum('active','in-active') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users_details`
--

INSERT INTO `users_details` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `ContactNo`, `Gender`, `ProfileImage`, `Status`) VALUES
(1, 'haddad', 'Haroun', 'Haroun@gmail.com', '123', '6515123455', 'male', '7eaa3f5e-75ac-45b7-96df-91f47ebbbb03.png', 'active'),
(2, 'admin', 'admin', 'admin@gmail.com', '123', '9656859685', 'male', '1.jpg', 'in-active'),
(5, 'Karim', 'Benzema', 'karim@gmail.com', '123', '9636636363', 'male', '2.jpeg', 'active'),
(9, 'Amine', 'Zidane', 'amine@gmail.com', '123', '9636636363', 'female', '2.jpeg', 'in-active'),
(11, 'Kamel', 'Daoud', 'kamel@gmail.com', '123', '9636636363', 'male', 'images.jpg', 'active'),
(15, 'Rachid', 'Boukhari', 'rachid@gmail.com', '1234', '8563526352', 'female', '4.jpg', 'active');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`AbonnementId`);

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`BookingId`),
  ADD KEY `FK_User` (`User_id`),
  ADD KEY `FK_RoomBooking` (`EventId`);

--
-- Index pour la table `event_list`
--
ALTER TABLE `event_list`
  ADD PRIMARY KEY (`EventId`);

--
-- Index pour la table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `gym_booking`
--
ALTER TABLE `gym_booking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Index pour la table `gym_subscription`
--
ALTER TABLE `gym_subscription`
  ADD PRIMARY KEY (`SubscriptionId`);

--
-- Index pour la table `gym_type`
--
ALTER TABLE `gym_type`
  ADD PRIMARY KEY (`SubscriptionId`);

--
-- Index pour la table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`BookingId`),
  ADD KEY `FK_User` (`User_id`),
  ADD KEY `FK_RoomBooking` (`RoomId`);

--
-- Index pour la table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`RoomId`),
  ADD KEY `FK_RoomType` (`RoomTypeId`);

--
-- Index pour la table `room_payment`
--
ALTER TABLE `room_payment`
  ADD PRIMARY KEY (`PaymentId`),
  ADD KEY `Fk_Booking` (`BookingId`);

--
-- Index pour la table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`RoomTypeId`);

--
-- Index pour la table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `AbonnementId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `BookingId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `event_list`
--
ALTER TABLE `event_list`
  MODIFY `EventId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `ID` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gym_booking`
--
ALTER TABLE `gym_booking`
  MODIFY `BookingId` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gym_subscription`
--
ALTER TABLE `gym_subscription`
  MODIFY `SubscriptionId` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gym_type`
--
ALTER TABLE `gym_type`
  MODIFY `SubscriptionId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `BookingId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `RoomId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `room_payment`
--
ALTER TABLE `room_payment`
  MODIFY `PaymentId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `RoomTypeId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `UserId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `room_list`
--
ALTER TABLE `room_list`
  ADD CONSTRAINT `FK_RoomType` FOREIGN KEY (`RoomTypeId`) REFERENCES `room_type` (`RoomTypeId`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `room_payment`
--
ALTER TABLE `room_payment`
  ADD CONSTRAINT `Fk_Booking` FOREIGN KEY (`BookingId`) REFERENCES `room_booking` (`BookingId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
