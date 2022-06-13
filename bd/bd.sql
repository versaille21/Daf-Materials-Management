-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 11:59 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_0ges_matDAF`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `Id_agent` int(3) NOT NULL,
  `matricule` varchar(7) NOT NULL,
  `Id_Demandeur` int(2) NOT NULL,
  `nom_Agent` varchar(20) NOT NULL,
  `prenoms_Agent` varchar(40) NOT NULL,
  `Id_Fonction` int(1) NOT NULL,
  `id_role` int(2) NOT NULL,
  `password_Agent` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`Id_agent`, `matricule`, `Id_Demandeur`, `nom_Agent`, `prenoms_Agent`, `Id_Fonction`, `id_role`, `password_Agent`) VALUES
(2, '389534X', 8, 'ASSOUA', 'manizan ange', 1, 1, 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `agent_daf`
--

CREATE TABLE `agent_daf` (
  `id_agent_daf` int(3) NOT NULL,
  `matricule` varchar(7) NOT NULL,
  `nom_agent_daf` varchar(20) NOT NULL,
  `prenom_agent_daf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent_daf`
--

INSERT INTO `agent_daf` (`id_agent_daf`, `matricule`, `nom_agent_daf`, `prenom_agent_daf`) VALUES
(1, '205255P', 'ABOA', 'ABEY SIMPLICE'),
(2, '361879L', 'ADIKO ', 'ASSEU LYDIE-JOSEE'),
(3, '365602K', 'AGOH NEE', 'ZEREHOUE HONORINE'),
(4, '372117T', 'AKOI NEE', 'KRA ATTAOUA KOSSIA C'),
(5, '319946D', 'ALFA', 'NACIRON HUSSEIN'),
(6, '365655P', 'AMANE NEE', 'FIESSOU HORTENSE MARIE '),
(7, '491179S', 'AMESSAN', 'SOPIE ANGELE EMMANUELLE'),
(8, '447907Y', 'KONGOUE KPIN', 'ANGE-LEONTINE '),
(9, '291647E', 'ANOH', 'EUGENE'),
(10, '337273L', 'ASSOKO', 'HENRI JOEL'),
(11, '389534X', 'ASSOUA', 'MANIZAN ANGE BERTIN'),
(12, '419866S', 'ATTOSSI', 'KOUASSI DANIEL'),
(13, '997181G', 'AZILINON', 'FRANCK WILLIAMS IGNACIO'),
(14, '148327D', 'BAH', 'DEDJOGNON RENE'),
(15, '498487P', 'BAMBA', 'BABOU FELIX EVRARD'),
(16, '813304S', 'BAMBA', 'SENAN'),
(17, '323623V', 'BEDI NEE', 'YEVOU KISSI ANDRIENNE  '),
(18, '483716L', 'BLA', 'N\'DA AMENA PRISCA'),
(19, '997186D', 'BOGUI', 'GNANGROUAN CHRISTELLE FELICIE'),
(20, '323496P', 'BOHE NEE', 'DOHOU ANICETTE MOYESSEA'),
(21, '331228H', 'BOSSON ', 'YAH MARIE'),
(22, '368412F', 'BROU ', 'SONGO FLORENT'),
(23, '305630P', 'CAMARA NEE ', 'KAMARA SIATA'),
(24, '308679F', 'CISSE NEE ', 'SYLLA MALON FANNY'),
(25, '343823S', 'CISSE NEE ', 'SYLLA MAMINE  '),
(26, '483717M', 'COULIBALY ', 'GNIGUE AWA'),
(27, '997187E', 'COULIBALY', 'LEHGNIMIN MILAMAN ALIMATA '),
(28, '307368W', 'COULIBALY NEE ', 'TUO THIETIN EDWIGE'),
(29, '997147M', 'COULIBALY ', 'SANGA KASSOUM'),
(30, '159214F', 'DAGO  ', 'DOKPO'),
(31, '419872Y', 'DAO  ', 'MANI'),
(32, '323914R', 'DEMBELE ', 'ZONDEGUE'),
(33, '997180K', 'DEMBELE ', 'TILOKELE DJAKARIDJA'),
(34, '349997F', 'DEGNI ', 'INES FLORA'),
(35, '225042Y', 'DEGRE  ', 'KOUBLEHIRI ELISABETH'),
(36, '810098Y', 'DIABY', 'FANTA'),
(37, '482244S', 'DIALLO ', 'FOUSSENI'),
(38, '816511C', 'DIARRASSOUBA ', 'MARIAM'),
(39, '445738B', 'DJABOUNOU ', 'KOFFI KREME FRANCIS'),
(40, '337896N', 'DJEDJE  ', 'CELINE FLORA'),
(41, '298295D', 'DJOTTO ', 'LEBAKO YOLANDE'),
(42, '347314F', 'DOUMBIA ', 'LASSINA'),
(43, '823995H', 'FOFANA ', 'SOULEYMANE '),
(44, '394541T', 'GNAKOURI ', 'NAKA STEVE PIERRE'),
(45, '365797E', 'GNANDE  ', 'BLOA ABEL'),
(46, '366189E', 'GRAH  ', 'PAITAY AGNES'),
(47, '989575S', 'GOITA ', 'ABDOUL KADRI'),
(48, '236451S', 'GUEYE NEE ', 'HOUPHOUET PAULINE '),
(49, '814339V', 'HAIDARA ', 'CHERIF BANGALY'),
(50, '314721W', 'IRA ', 'SAM JOSE MARTIAL'),
(51, '435925P', 'JAMES ', 'MANUEL AMICHIA'),
(52, '419889S', 'KABRAN  ', 'KOUASSI'),
(53, '323122P', 'KABRAN  ', 'YEBOUA LOUIS PRIVAT'),
(54, '291272E', 'KAMBRI NEE ', 'KOUADIO N\'GORAN G'),
(55, '270547Q', 'KAMBRI ', 'OLLO'),
(56, '997182H', 'KANGA ', 'AHOU GWLADYS'),
(57, '483721R', 'KANGOUTE ', 'SAINDOU'),
(58, '323814M', 'KEBE  ', 'OUMAR'),
(59, '363258X', 'KEKE ', 'YORO WATONNE ROLAND'),
(60, '997170Y', 'KODO ', 'ESSOH IMELDA CAROLE'),
(61, '336873V', 'KOFFI ', 'AHOU JULIETTE'),
(62, '361825W', 'KOFFI NEE ', 'BOHOUSSOU AMOIN EVELYNE'),
(63, '304970K', 'KOFFI ', 'YAO JOSEPH'),
(64, '372575E', 'KOMAN ', 'LAURE GERALDINE'),
(65, '298803B', 'KONAN  ', 'AMLAN LEOCADIE'),
(66, '997184B', 'KONE ', 'AICHATA'),
(67, '483724L', 'KONE  ', 'FANTA TINDIO'),
(68, '483727P', 'KONE ', 'OUSMANE'),
(69, '416526A', 'KONDO ', 'KOUAKOU HERMAN RENAUD'),
(70, '338279T', 'KOUA ', 'KPINGNI ANGELE'),
(71, '298286C', 'KOUADIO ', 'ASSAMELAN AGATHE'),
(72, '997195E', 'KOUADIO ', 'BAH AKISSI AUDE ARMELLE'),
(73, '331108A', 'KOUADIO ', 'BROU MICHEL'),
(74, '348921H', 'KOUADIO ', 'KOUASSI GERARD'),
(75, '371739R', 'KOUADIO ', 'N\'GUESSAN KEVIN'),
(76, '359381P', 'KOUAKOU ', 'AFFOUE SYLVIE AGNES'),
(77, '307125T', 'KOUAKOU NEE ', 'BOUO VALERIE'),
(78, '270519L', 'KOUAMELAN ', 'TENA ROSALIE'),
(79, '243970M', 'KOUASSI NEE ', 'BONI AMOIN MONIQUE  '),
(80, '323316Z', 'LASME ', 'JULES'),
(81, '331684T', 'LE RUMEUR NEE ', 'ASSI LOYA TANOH G'),
(82, '989300K', 'LOA BI ', 'DJE BERNARD'),
(83, '322642F', 'LOUKOU NEE ', 'BOATENG AKISSI ANGELA'),
(84, '', 'MAHO ', 'SEA JEAN NICAISE'),
(85, '824799V', 'MAIGA ', 'SARAN ANGE'),
(86, '813343Y', 'MANIZAN ', 'ADJO MARIE-ANGE'),
(87, '343899F', 'NOKA NEE ', 'DAU DESSEKOS SONIA'),
(88, '332168E', 'N\'DORI ', 'ABONON ROGER'),
(89, '292425R', 'N\'DRI ', 'KOFFI ACHILLE'),
(90, '997183A', 'N\'GUETTIA ', 'KUMASSIA ADELINE '),
(91, '997193C', 'N\'GUESSAN ', 'AMA JOA PRISCA'),
(92, '491233Q', 'N\'TAKPE ', 'BOKA MARTIAL'),
(93, '266066J', 'OMBLEA NEE ', 'MANGALA HINA'),
(94, '435008S', 'OUATTARA ', 'FATOUMATA'),
(95, '447934J', 'OUATTARA ', 'GAOUSSOU'),
(96, '425249D', 'OUATTARA ', 'MAHIRI FANGTA MARIUS'),
(97, '349993B', 'OUATTARA NEE ', 'OKOBE CHARLINE '),
(98, '474489Y', 'OUATTARA ', 'ROCKYA REBECCA'),
(99, '372219R', 'OUATTARA ', 'SALAMATA'),
(100, '419250I', 'OUATTARA ', 'SITA'),
(101, '467450D', 'OUATTARA ', 'ZELE MARIAM'),
(102, '227950H', 'CONVAUD', 'PIERRE  PATRICE '),
(103, '337370R', 'SAMAKE', 'FATOUMATA'),
(104, '997185C', 'SANOGO', 'SOULEYMANE'),
(105, '483736Q', 'SIDIBE', 'ABOUBAKAR'),
(106, '343797G', 'SILUE NEE ', 'GNANAGO GNABAN CARINE-J'),
(107, '313531P', 'SOMAN ', ' N\'GUESSAN'),
(108, '997146L', 'SORHO ', 'GOZAN SEYDOU'),
(109, '824020P', 'SORO NEE ', 'COULIBALY TIEFIGUE SIRAMANE KOROTOUM'),
(110, '419254C', 'SYLLA ', 'KADIDIATOU'),
(111, '203116S', 'TANOH ', 'KOUAME ADOLPH'),
(112, '349118M', 'TANOH NEE ', 'KOUADIO KOUACOU AMENAN'),
(113, '997192B', 'TOTO ', 'EUGENE'),
(114, '997099R', 'TRA-LOU ', 'TINA ANNE SOPIE'),
(115, '485808U', 'TRAORE ', 'IBRAHIM SIBIRY'),
(116, '337003S', 'TRAORE ', 'TAMAKALI '),
(117, '337329C', 'VOLI BI ', 'BOTI ANTOINE'),
(118, '359940T', 'YABLE ', 'KRABA FRANCOS'),
(119, '989990X', 'YAO ', 'FRANCK MICHAEL'),
(120, '997194D', 'YEBOUE', 'YEBOUE'),
(121, '332594J', 'ZADI ', 'DOMENE DANIEL'),
(122, '', 'DIAKITE  ', 'MARIAMA '),
(123, '433904P', 'TASRE  ', 'MONNOUIN FERDINAND '),
(124, '', 'KOKOLA ', 'ORO DIANE REBECCA '),
(125, '331122P', 'KOUAMELA ', 'YABA EMILIENNE '),
(126, '', 'KOFFI ', 'ISSAC KOUAME ');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id_Article` int(10) NOT NULL,
  `lib_Article` varchar(100) NOT NULL,
  `descriptif` varchar(25) NOT NULL,
  `Id_Categorie` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id_Article`, `lib_Article`, `descriptif`, `Id_Categorie`) VALUES
(1, 'SPIRALE DE RELIURE PLUS GRAND ', 'UNITE', 1),
(2, 'AGRAPHEUSE 26/4', 'UNITE', 1),
(3, 'BOITE A STYLO', 'UNITE', 1),
(4, 'TAILLE-CRAYON', 'UNITE', 1),
(5, 'RUBAN ADHESIF  SCOTCH ', 'UNITE', 1),
(6, 'TAMPON A ENCRE', 'UNITE', 1),
(7, 'TROMBONNE', 'UNITE', 1),
(8, 'PUNAISE', 'UNITE', 1),
(9, 'PARAPHEUR', 'UNITE', 2),
(10, 'REGISTRE  ARRIVEE ', 'UNITE', 2),
(11, 'REGISTRE  DEPART ', 'UNITE', 2),
(12, 'CHEMISE A SANGLE', 'UNITE', 2),
(13, 'CHEMISE A RABAT', 'UNITE', 2),
(14, 'CAHIER TP  200 PAGES ', 'UNITE', 2),
(15, 'CARTON POUR RELIURE', 'UNITE', 2),
(16, 'COUVERTURE PLASTIQUE POUR RELIURE', 'UNITE', 2),
(17, 'ENVELOPPE KAKI  A7 ', 'PAQUET DE 25 UNITES', 2),
(18, 'ENVELOPPE KAKI  A4 ', 'PAQUET DE 25 UNITES', 2),
(19, 'ENVELOPPE KAKI  A3 ', 'PAQUET DE 25 UNITES', 2),
(20, 'ENVELOPPE BLANCHE  A7 ', 'PAQUET DE 25 UNITES', 2),
(21, 'ENVELOPPE BLANCHE  A6 ', 'PAQUET DE 25 UNITES', 2),
(22, 'ENVELOPPE BLANCHE  A5 ', 'PAQUET DE 25 UNITES', 2),
(23, 'BAC A RANGEMENT', 'UNITE', 2),
(24, 'MULTI PRISE', 'UNITE', 3),
(25, 'COMBINE TELEPHONIQUE', 'UNITE', 3),
(26, 'CORBEILLE', 'UNITE', 3),
(27, 'SWITCH', 'UNITE', 4),
(28, 'ONDULEUR', 'UNITE', 4),
(29, 'DISQUE DUR EXTERNE', 'UNITE', 4),
(30, 'SOURIS', 'UNITE', 4),
(31, 'CLE USB', 'UNITE', 4),
(32, 'CHAISE VISITEUR', 'UNITE', 5),
(33, 'FAUTEUIL AGENT', 'UNITE', 5),
(34, 'TONER C-EXV 33', 'UNITE', 6),
(35, 'ENCRE 83A', 'UNITE', 6),
(36, 'ENCRE 30A', 'UNITE', 6),
(37, 'ENCRE 201A  MAGENTA ', 'UNITE', 6),
(38, 'ENCRE 201A  JAUNE ', 'UNITE', 6),
(39, 'ENCRE 201A  CYAN ', 'UNITE', 6),
(40, 'ENCRE 201A  NOIR ', 'UNITE', 6),
(41, 'ENCRE 17A', 'UNITE', 6),
(42, 'ENCRE 507A  MAGENTA ', 'UNITE', 6),
(43, 'ENCRE 507A  JAUNE ', 'UNITE', 6),
(44, 'ENCRE 507A  CYAN ', 'UNITE', 6),
(45, 'ENCRE 507A  NOIR ', 'UNITE', 6),
(46, 'ENCRE 05A', 'UNITE', 6),
(47, 'STABULO  VERT ', 'UNITE', 1),
(48, 'STABULO  BLEU ', 'UNITE', 1),
(49, 'STABULO  ORANGE ', 'UNITE', 1),
(50, 'STABULO  JAUNE ', 'UNITE', 1),
(51, 'SPIRALE DE RELIURE  GRAND ', 'UNITE', 1),
(52, 'SPIRALE DE RELIURE  MOYEN ', 'UNITE', 1),
(53, 'SPIRALE DE RELIURE  PETIT ', 'UNITE', 1),
(54, 'PAIRE DE CISEAUX', 'UNITE', 1),
(55, 'CALCULATRICE', 'UNITE', 1),
(56, 'AGRAPHEUSE  8/4 ', 'UNITE', 1),
(57, 'AGRAPHEUSE  24/6 ', 'UNITE', 1),
(58, 'PERFORATEUR', 'UNITE', 1),
(59, 'CORRECTEUR ', 'UNITE', 1),
(60, 'ATTACHE 180mm', 'UNITE', 1),
(61, 'REGISTRE  12 MAINS ', 'UNITE', 1),
(62, 'REGISTRE  6 MAINS ', 'UNITE', 2),
(63, 'REGISTRE  5 MAINS ', 'UNITE', 1),
(64, 'REGISTRE  4 MAINS ', 'UNITE', 2),
(65, 'STYLO  VERT ', 'UNITE', 1),
(66, 'STYLO  ROUGE ', 'UNITE', 1),
(67, 'STYLO  NOIR ', 'UNITE', 1),
(68, 'STYLO  BLEU ', 'UNITE', 1),
(69, 'MARQUEUR  NOIR ', 'UNITE', 1),
(70, 'MARQUEUR  ROUGE ', 'UNITE', 1),
(71, 'MARQUEUR  VERT ', 'UNITE', 1),
(72, 'MARQUEUR  BLEU ', 'UNITE', 1),
(73, 'GOMME', 'UNITE', 1),
(74, 'CRAYON A PAPIER', 'UNITE', 1),
(75, 'AGRAPHE  24/6 ', 'PAQUET', 1),
(76, 'AGRAPHE  8/4 ', 'PAQUET', 1),
(77, 'COLLE POUR PAPIER', 'UNITE', 1),
(78, 'INTERCALAIRE  PLASTIQUE ', 'UNITE', 2),
(79, 'INTERCALAIRE  PAPIER ', 'UNITE', 2),
(80, 'SOUS CHEMISE', 'UNITE', 2),
(81, 'CHEMISE', 'UNITE', 2),
(82, 'CARTON D\'ARCHIVE', 'UNITE', 2),
(83, 'CLASSEUR', 'UNITE', 2),
(84, 'POST IT', 'PAQUET DE 10 UNITES', 2),
(85, 'PAPIER PADEX', 'ROULEAU', 2),
(86, 'CAHIER  300 PAGES ', 'UNITE', 2),
(87, 'CAHIER  200 PAGES ', 'UNITE', 2),
(88, 'BLOC NOTE', 'PAQUET DE 6 UNITES', 2),
(89, 'RAME DE PAPIER  A4 ', 'PAQUET', 2),
(90, 'OTE AGRAPHE', 'UNITE', 1),
(91, 'CHEMISE CARTONEE', 'UNITE', 1),
(92, 'PLASTIQUE A RELIURE', 'UNITE', 1),
(93, 'BB AGRAPHE', 'PAQUET', 1),
(94, 'REGLE', 'UNITE', 1),
(95, 'SCOTCH', 'UNITE', 1),
(96, 'BIC FEUTRE', 'UNITE', 1),
(97, 'ENCRE 26A', 'UNITE', 6),
(98, 'ENCRE 44A', 'UNITE', 6),
(99, 'ENCRE 410A  NOIR ', 'UNITE', 6),
(100, 'ENCRE 410A  CYAN ', 'UNITE', 6),
(101, 'ENCRE 410A  JAUNE ', 'UNITE', 6),
(102, 'ENCRE 410A  MAGENTA ', 'UNITE', 6),
(103, 'ENCRE 207A  NOIR ', 'UNITE', 6),
(104, 'ENCRE 207A  CYAN ', 'UNITE', 6),
(105, 'ENCRE 207A  JAUNE ', 'UNITE', 6),
(106, 'ENCRE 207A  MAGENTA ', 'UNITE', 6),
(107, 'CLE USB 32 Go', 'UNITE', 6),
(108, 'CLE USB 16 Go', 'UNITE', 6),
(109, 'CLE USB 08 Go', 'UNITE', 6),
(110, 'CLE USB 04 Go', 'UNITE', 6),
(111, 'CAHIER TP  300 PAGES ', 'UNITE', 6),
(112, 'ENVELOPPE KAKI  A5 ', 'UNITE', 1),
(113, 'ENCREUR', 'UNITE', 1),
(114, 'DATEUR', 'UNITE', 1),
(115, 'NUMEROTATEUR', 'UNITE', 1),
(116, 'MARQUEUR PERMANENT', 'UNITE', 1),
(117, 'SURLIGNEUR', 'UNITE', 1),
(118, 'BLANCO', 'UNITE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `Id_Categorie` int(2) NOT NULL,
  `lib_Categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`Id_Categorie`, `lib_Categorie`) VALUES
(1, 'FOURNITURES DE BUREAU'),
(2, 'PAPETERIE ET CLASSEMENT'),
(3, 'DIVERS'),
(4, 'MATERIELS INFORMATIQUES'),
(5, 'MOBILIER'),
(6, 'CONSOMMABLES INFORMATIQUES');

-- --------------------------------------------------------

--
-- Table structure for table `concerner`
--

CREATE TABLE `concerner` (
  `id_concerner` int(10) NOT NULL,
  `id_demande_mat` int(10) NOT NULL,
  `id_article` int(10) NOT NULL,
  `Qte` int(3) NOT NULL,
  `observation` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `demandeur`
--

CREATE TABLE `demandeur` (
  `Id_Demandeur` int(2) NOT NULL,
  `lib_demandeur` varchar(100) NOT NULL,
  `lib_court_demandeur` varchar(10) NOT NULL,
  `Id_Structure_Hierarchique` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demandeur`
--

INSERT INTO `demandeur` (`Id_Demandeur`, `lib_demandeur`, `lib_court_demandeur`, `Id_Structure_Hierarchique`) VALUES
(1, 'SERVICE DU SUIVI DES DEPENSES D\'ABONNEMENT ET DU MATERIEL', 'SSDAM', 1),
(2, 'SERVICE DE LA DOCUMENTATION ET DES ARCHIVES', 'SDA', 2),
(3, 'SERVICE DU SUIVI-EVALUATION DE L\'AUDIT ET DU CONTROLE INTERNE', 'SSACI', 4),
(4, 'SERVICE DE LA COMMUNICATION ET DES RELATIONS PUBLIQUES', 'SCRP', 4),
(5, 'SERVICE DE LA PLANNIFICATION STRATEGIQUE DE L\'ASSISTANCE QUALITE ET DES REVUES', 'SPSAQR', 4),
(6, 'SERVICE DE LA MODERNISATION DES PROCEDURES DE GESTION', 'SMPG', 2),
(7, 'SERVICE DES MOYENS GENERAUX', 'SMG', 2),
(8, 'SERVICE DES APPLICATIONS INFORMATIQUES', 'SAI', 3),
(9, 'SERVICE DU SUIVI DU PATRIMOINE IMMOBILIER', 'SSPI', 1),
(10, 'SERVICE DE L\'ASSISTANCE ET DU SUIVI BUDGETAIRE', 'SASB', 1),
(11, 'SERVICE COURRIER ', 'SC', 2),
(12, 'GESTION DU PATRIMOINE', 'GP', 1),
(13, 'SERVICE DE LA QUALITE ET DES REFORMES', 'SQR', 4),
(14, 'SECRETARIAT SOUS-DIRECTION DES SYSTEMES D\'INFORMATIONS', 'SSSI', 3),
(15, 'SERVICE DE LA MAINTENANCE ET DE L\'ASSISTANCE', 'SMA', 3),
(16, 'SDB/GESTION DU PATRIMOINE', 'SDB-GP', 1),
(17, 'SERVICE DU CONTROLE DE GESTION', 'SCG', 2),
(18, 'SERVICE DU SUIVI DE LA PERFORMANCE', 'SSP', 2),
(19, 'SECRETARIAT DIRECTION DES AFFAIRES FINANCIERES ', 'SDAF', 2),
(20, 'DIRECTEUR DES AFFAIRES FINANCIERES', 'DAF', 2),
(21, 'SERVICE DES ETUDES ET DE LA PLANIFICATION', 'SEP', 2),
(22, 'SERVICE DE L\'EXPLOITATION DES APPLICATIONS INFORMATIQUES', 'SEAI', 3),
(23, 'SERVICE DE L\'ELABORATION DU BUDGET ET DES ACTES BUDGETAIRES MODIFICATIFS', 'SEBABM', 1),
(24, 'SOUS-DIRECTION DES SYSTEMES D\'INFORMATIONS', 'SDSI', 3),
(25, 'SECRETARIAT SOUS-DIRECTION DE LA QUALITE ET DE LA COMMUNICATION', 'SSDQC', 4),
(26, 'SECRETARIAT SOUS-DIRECTION DU BUDGET ', 'SSDB', 1),
(27, 'SERVICE DES RESSOURCES HUMAINES ET DE L\'ACTION SOCIALE', 'SRHAS', 2),
(28, 'SERVICE DES STATISTIQUES BUDGETAIRES', 'SSB', 1),
(29, 'ASSISTANT DAF', 'ADAF', 2),
(30, 'SOUS DIRECTEUR DE LA QUALITE ET DE LA COMMUNICATION', 'SDQC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `demande_materiel`
--

CREATE TABLE `demande_materiel` (
  `Id_Demande_Mat` int(10) NOT NULL,
  `Id_Etat` int(1) NOT NULL,
  `date` date NOT NULL,
  `Id_Demandeur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `Id_Etat` int(1) NOT NULL,
  `lib_etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`Id_Etat`, `lib_etat`) VALUES
(1, 'EN ATTENTE'),
(2, 'TRANSMIS'),
(3, 'VALIDEE'),
(4, 'REJETEE');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `Id_Fonction` int(1) NOT NULL,
  `lib_Fonction` varchar(20) NOT NULL,
  `Lib_Court_Fonction` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`Id_Fonction`, `lib_Fonction`, `Lib_Court_Fonction`) VALUES
(1, 'AGENT', 'AGT'),
(2, 'CHEF DE SERVICE', 'CS'),
(3, 'SOUS-DIRECTEUR', 'SD'),
(4, 'DIRECTEUR', 'DAF'),
(5, 'chargé d\'étude', 'CE'),
(7, 'chargé d\'étude', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `lib_Role` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `niveau` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `lib_Role`, `slug`, `niveau`) VALUES
(1, 'Manager', 'admin', 2),
(2, 'Visiteur', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `structure_hierarchique`
--

CREATE TABLE `structure_hierarchique` (
  `Id_Structure_Hierarchique` int(2) NOT NULL,
  `lib_structure_hierarchique` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `structure_hierarchique`
--

INSERT INTO `structure_hierarchique` (`Id_Structure_Hierarchique`, `lib_structure_hierarchique`) VALUES
(1, 'SOUS-DIRECTION DU BUDGET'),
(2, 'SERVICES RATTACHES'),
(3, 'SOUS-DIRECTION DES SYSTEMES D\'INFORMATION'),
(4, 'SOUS-DIRECTION DE LA QUALITE ET DE LA COMMUNICATION'),
(5, 'SOUS-DIRECTION DU PILOTAGE DE LA PERFORMANCE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`Id_agent`),
  ADD UNIQUE KEY `Matricule` (`matricule`),
  ADD KEY `Id_Demandeur` (`Id_Demandeur`,`Id_Fonction`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `agent_daf`
--
ALTER TABLE `agent_daf`
  ADD PRIMARY KEY (`id_agent_daf`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id_Article`),
  ADD KEY `Id_Categorie` (`Id_Categorie`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id_Categorie`);

--
-- Indexes for table `concerner`
--
ALTER TABLE `concerner`
  ADD PRIMARY KEY (`id_concerner`),
  ADD KEY `id_demande_mat` (`id_demande_mat`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`Id_Demandeur`),
  ADD KEY `Id_Structure_Hierarchique` (`Id_Structure_Hierarchique`);

--
-- Indexes for table `demande_materiel`
--
ALTER TABLE `demande_materiel`
  ADD PRIMARY KEY (`Id_Demande_Mat`),
  ADD KEY `Id_Etat` (`Id_Etat`,`Id_Demandeur`);

--
-- Indexes for table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`Id_Etat`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`Id_Fonction`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `structure_hierarchique`
--
ALTER TABLE `structure_hierarchique`
  ADD PRIMARY KEY (`Id_Structure_Hierarchique`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `Id_agent` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agent_daf`
--
ALTER TABLE `agent_daf`
  MODIFY `id_agent_daf` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id_Categorie` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `concerner`
--
ALTER TABLE `concerner`
  MODIFY `id_concerner` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `Id_Demandeur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `demande_materiel`
--
ALTER TABLE `demande_materiel`
  MODIFY `Id_Demande_Mat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etat`
--
ALTER TABLE `etat`
  MODIFY `Id_Etat` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `Id_Fonction` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `structure_hierarchique`
--
ALTER TABLE `structure_hierarchique`
  MODIFY `Id_Structure_Hierarchique` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
