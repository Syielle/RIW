-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 23 Mars 2017 à 10:21
-- Version du serveur :  5.5.42
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `wild`
--

-- --------------------------------------------------------

--
-- Structure de la table `chaussure`
--

CREATE TABLE `chaussure` (
  `id` int(11) NOT NULL,
  `modele` varchar(64) CHARACTER SET utf8 NOT NULL,
  `marque` int(11) NOT NULL,
  `foulee` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `couleur` enum('noir','blanc','bleu','rose','vert','rouge','jaune','orange','violet') NOT NULL,
  `prix` float(5,2) NOT NULL,
  `poids` int(255) NOT NULL,
  `genre` enum('Homme','Femme') NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `url_image` text,
  `id_promo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chaussure`
--

INSERT INTO `chaussure` (`id`, `modele`, `marque`, `foulee`, `surface`, `couleur`, `prix`, `poids`, `genre`, `description`, `url_image`, `id_promo`) VALUES
(1, 'Element Athletic', 1, 3, 2, 'noir', 59.90, 210, 'Femme', 'Motive-toi et repousse tes limites à chaque run avec cette chaussure de running femmes équipée de boost™ pour t''offrir un confort exceptionnel. Elle possède une doublure en mesh respirante et une semelle intermédiaire SUPERCLOUD™ offrant un excellent amorti. Sa semelle extérieure est munie d''encoches de flexion placées anatomiquement pour plus de souplesse et favoriser les mouvements naturels.', 'http://www.adidas.co.uk/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw7487258a/zoom/AF6474_01_standard.jpg?sw=2000&sfrm=jpg', NULL),
(2, 'Ultra Boost Uncaged', 1, 3, 1, 'bleu', 179.95, 300, 'Femme', 'Cours le meilleur run de ta vie avec cette chaussure femmes conçue avec le matériau d’amorti exceptionnel boost™ et une tige ajustée. Plus tu mets d’énergie dans ta course, plus tu en as en retour : sa semelle intermédiaire révolutionnaire te propulse dans ta foulée pour plus de vitesse et de légèreté. Sa tige adidas Primeknit à renforts internes épouse la forme du pied, et offre une sensation de souplesse et de légèreté unique. La semelle extérieure élastique STRETCHWEB s’adapte à ta foulée.', 'http://www.solelinks.com/wp-content/uploads/2016/07/Ultra-Boost-Uncaged-W-Frost-01.jpg', NULL),
(3, 'Adizero Takumi', 1, 1, 2, 'noir', 159.95, 295, 'Femme', 'Depuis 2005, adidas by Stella McCartney crée des collections alliant performance, couleurs, matières premium et soucis du détail. Un compromis parfait entre fonctionnalité et féminité. Conçue pour la vitesse, la chaussure adizero Takumi signée adidas by Stella McCartney possède un poids plume pour favoriser l’agilité durant les sprints et les fractionnés. Cette chaussure de running est conçue en mesh léger aéré avec une semelle souple.', 'http://www.wigglestatic.com/product-media/5360112069/Adidas-Adizero-Takumi-Ren-3-Shoes-AW15-Racing-Running-Shoes-Black-Blue-White-AW15-B22876.jpg?w=2000&h=2000&a=7', NULL),
(4, 'Fkyknit Racer', 4, 3, 3, 'noir', 160.00, 170, 'Homme', 'La chaussure de running mixte Nike Flyknit Racer offre une tenue légère et adaptée avec une semelle extérieure en caoutchouc spécifique pour la course qui garantit une adhérence exceptionnelle, du premier au dernier kilomètre. \r\n\r\nLa technologie Nike Flyknit s''inspire des indications des coureurs désireux de posséder une chaussure aussi confortable qu''une chaussette et procurant la sensation de courir pieds nus. Nike a entrepris une mission de quatre années durant lesquelles des programmeurs, des ingénieurs et des designers ont réfléchi à la création de la technologie nécessaire à la réalisation de l''empeigne en maille dotée de propriétés statiques pour la structure et la durabilité. Ensuite, le placement précis des zones de maintien, de souplesse et de respirabilité (le tout d''un seul tenant) a été repensé. Résultat : une empeigne quasiment sans couture, ajustée et ultra-légère.', 'http://images3.nike.com/is/image/DotCom/PDP_HERO_ZOOM/526628_012_C_PREM/chaussure-de-running-mixte-flyknit-racer.jpg', NULL),
(5, 'Air Zoom Vomero 12', 4, 2, 1, 'noir', 140.00, 334, 'Homme', 'CONFORT EXCEPTIONNEL. FOULÉE DYNAMIQUE.\r\nLa chaussure de running Nike Air Zoom Vomero 12 pour Homme offre un amorti moelleux et dynamique pour une vitesse optimale.\r\nCONFORT ABSOLU\r\nLe col confortable offre un maintien amorti de la cheville et la semelle de propreté épaisse crée une sensation de moelleux extrême.\r\nULTRA-DYNAMIQUE\r\nLes unités Nike Zoom Air au talon et à l''avant-pied offrent une foulée réactive et dynamique qui vous propulsera de kilomètre en kilomètre.\r\nABSORPTION DES CHOCS\r\nLe motif d''adhérence plus léger et plus résistant offre un meilleur retour d''énergie que les versions précédentes, avec un nouveau caoutchouc sur le côté qui amortit les chocs.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_ZOOM/863762_001_A_PREM/chaussure-de-running-air-zoom-vomero-12-pour.jpg', NULL),
(6, 'Air Max 2017 iD', 4, 3, 2, 'vert', 230.00, 275, 'Homme', 'La chaussure de running Nike Air Max 2017 iD associe légèreté, maintien, respirabilité et amorti exceptionnel pour vous offrir un confort optimal du premier au dernier kilomètre.\r\n\r\nL''unité Air-Sole révolutionnaire de Nike a été intégrée aux chaussures de la marque à la fin des années 70. En 1987, la Nike Air Max 1 était pour la première fois dotée d''un coussin d''air visible au talon. Désormais, en plus de ressentir le confort de la technologie Air-Sole, chacun pouvait également le voir en action. Depuis, les chaussures Nike Air Max nouvelle génération connaissent un succès constant auprès des athlètes et des collectionneurs, grâce à leurs combinaisons de couleurs saisissantes et à leur légèreté, qui offre une foulée parfaitement amortie.', 'http://render.nikeid.com/ir/render/nikeidrender/AMax20171611_v1?obj=/s/shadow/shad&show&color=000000&obj=/s/g7&color=141414&show&obj=/s/g1&color=141414&show&obj=/s/g8&color=ffffff&show&obj=/s/g9&color=141414&show&obj=/s/g6&color=141414&show&obj=/s/g14&color=bcc6cc&show&obj=/s/g13&color=bcc6cc&show&obj=/s/g15&color=bcc6cc&show&obj=/s/g3/black&show&obj=/s/g5/solid&color=edede9&show&obj=/s/g10/2tone&color=141414&show&obj=/s/g12/solid&color=141414&show&obj=/s/g17/solid&color=141414&show&obj=/s/g11&color=bcc6cc&show&obj=/s/g18&color=ffffff&show&obj=/s/g23&color=000001&show&obj=/s/g24/black&show&obj=/s&req=object&fmt=png-alpha&wid=1500', NULL),
(7, 'Free RN iD', 4, 1, 2, 'bleu', 135.00, 283, 'Homme', 'La chaussure de running Nike Free RN iD offre plus de maintien que toutes les autres chaussures de running Nike Free sans faire de compromis sur la liberté de mouvement naturelle. Elle possède un nouveau motif de semelle extérieure révolutionnaire qui permet à la chaussure de s''étirer, se plier et se rétracter avec votre pied à chaque foulée. ', 'http://render.nikeid.com/ir/render/nikeidrender/freeRN1603c_v1?obj=/s/shadow/shad&show&color=000000&obj=/s/g7&color=134a9c&show&obj=/s/g9&color=134a9c&show&obj=/s/g14&color=a0a6af&show&obj=/s/g23&color=141414&show&obj=/s/g1/heather&color=1c3e8d&show&obj=/s/g5/solid&color=1d46a6&show&obj=/s/g15/fade&color=1c3e8d&show&obj=/s/g13/solid&color=141414&show&obj=/s/g16&color=1c3e8d&show&obj=/s/g4&color=1c3e8d&show&obj=/s/g8&color=1c43af&show&obj=/s/g17&color=ffffff&show&obj=/s/g18&color=44464a&show&obj=/s/g10/solid&color=244da5&show&obj=/s/g12/heather&color=1c3e8d&show&obj=/s&req=object&fmt=png-alpha&wid=640', NULL),
(8, 'Lunarepic Low Flyknit', 4, 2, 2, 'orange', 160.00, 272, 'Homme', 'CONFORT RESPIRANT, FOULÉE SANS EFFORT.\r\nLa chaussure de running Nike LunarEpic Low Flyknit pour Homme est légère et respirante avec un amorti ciblé pour un run sans effort et une sensation de souplesse sous le pied.\r\nMAINTIEN EN TOUTE LÉGÈRETÉ\r\nL''empeigne Flyknit respirante et souple enveloppe votre pied pour une tenue seconde peau. Les zones ciblées offrent un maintien en toute légèreté là où vous en avez le plus besoin.\r\nDÉROULÉ FLUIDE\r\nLa semelle intermédiaire Lunarlon souple et profilée comporte des découpes au laser sur les côtés qui se réduisent pendant la foulée, pour offrir des transitions parfaitement fluides du talon aux orteils.\r\nSENSATION RÉVOLUTIONNAIRE\r\nLa semelle extérieure découpée au laser canalisant la pression amplifie l''amorti précisément là où vous en avez besoin, puis répartit l''impact sur l''ensemble du pied, pour un confort et une fluidité d''exception.', 'http://images.nike.com/is/image/DotCom/PDP_HERO/843764_804_A_PREM/chaussure-de-running-lunarepic-low-flyknit-pour.jpg', NULL),
(9, 'Lunarglide 8', 4, 1, 1, 'rouge', 130.00, 275, 'Homme', 'La chaussure de running Nike LunarGlide 8 pour Homme assure maintien et respirabilité ainsi qu''un amorti exceptionnel pour vous aider à dépasser vos records de distance sans difficultés. Le mesh tissé offre confort et aération, tandis que la technologie Flywire suit les contours de votre pied pour un maintien sûr.\r\nLa semelle intermédiaire Lunarlon souple et profilée comporte des découpes réalisées avec précision au laser sur les côtés qui se réduisent à chaque fois que le pied touche le sol, pour une foulée ultra-fluide.\r\nLa plate-forme Dynamic Support améliore encore le confort et la stabilité, sans vous alourdir. ', 'http://images.nike.com/is/image/DotCom/PDP_HERO/843725_802_A_PREM/chaussure-de-running-lunarglide-8-pour.jpg', NULL),
(10, 'Lunar Skyelux', 4, 3, 2, 'blanc', 100.00, 267, 'Homme', 'Parfaitement rembourrée, la chaussure de running Nike Lunar Skyelux pour Homme présente un col confortable et une mousse souple sous le pied pour une sensation de bien-être incroyable et un maintien optimal en toute légèreté.\r\nAMORTI SOUPLE\r\nLa semelle intermédiaire en mousse à double densité amortit chaque pas tandis que les renforts techniques sous le pied absorbent les chocs. Le col doux et rembourré épouse la cheville pour un confort et un maintien durables.\r\nCONFORT RESPIRANT\r\nLe chausson en mesh respirant vous permet de glisser naturellement dans la chaussure pour une tenue confortable digne d''une chaussette sans distraction.\r\nMAINTIEN OPTIMAL\r\nLa technologie Flywire est intégrée aux lacets pour envelopper le pied et garantir un bon maintien latéral.', 'http://images.nike.com/is/image/DotCom/PDP_HERO/855808_100_A_PREM/chaussure-de-running-lunar-skyelux-pour.jpg', NULL),
(11, 'Air Zoom Odyssey 2', 4, 1, 1, 'noir', 150.00, 317, 'Homme', 'STABILITÉ, SOUPLESSE ET RAPIDITÉ.\r\nLa chaussure de running Nike Air Zoom Odyssey 2 pour Homme offre un amorti doux et réactif et une plus grande stabilité pour vous propulser jusqu''à la ligne d''arrivée.\r\nAMORTI PERFORMANT\r\nLes unités Nike Zoom Air au talon et à l''avant-pied assurent un amorti près du sol dynamique, idéal pour les courses rapides.\r\nSTABILITÉ AMÉLIORÉE\r\nLa semelle intermédiaire en mousse à triple densité et la plate-forme de maintien dynamique s''associent pour ralentir le taux de pronation, afin de garder votre pied bien en place lors de la foulée et d''offrir une plus grande stabilité.\r\nMAINTIEN CONFORTABLE\r\nL''empeigne Flymesh respirante comporte des câbles Flywire pour un maintien confortable. Les câbles ont été revisités et sont désormais plats et larges pour accompagner les mouvements du pied et apporter un meilleur maintien.', 'http://images3.nike.com/is/image/DotCom/PDP_HERO_ZOOM/844545_001_C_PREM/chaussure-de-running-air-zoom-odyssey-2-pour.jpg', NULL),
(12, 'Air Zoom Pegasus 33 Shield', 4, 1, 2, 'vert', 130.00, 306, 'Homme', 'La chaussure de running Nike Air Zoom Pegasus 33 Shield pour Homme offre une sensation de vitesse et un amorti performant avec des éléments conçus pour résister aux intempéries qui vous permettent de rester au sec et à l''aise lors de vos courses d''hiver.\r\nDÉPERLANT\r\nLa finition DWR (résistante et déperlante) et le chausson intérieur déperlant vous permettent de garder les pieds au sec par tous les temps.\r\nAMORTI PERFORMANT\r\nLes unités Nike Zoom Air au talon et à l''avant-pied garantissent une foulée performante et dynamique tout en douceur.\r\nADHÉRENCE PAR TOUS LES TEMPS\r\nCaoutchouc collant pour assurer une adhérence durable sur les surfaces mouillées.', 'http://images3.nike.com/is/image/DotCom/PDP_HERO/849564_300_C_PREM/chaussure-de-running-air-zoom-pegasus-33-shield-pour.jpg', NULL),
(13, 'Lunarepic Flyknit Shield', 4, 2, 1, 'rouge', 200.00, 241, 'Homme', 'La chaussure de running Nike LunarEpic Flyknit Shield pour Homme offre la même foulée fluide et la tenue seconde peau avec un tissu Flyknit déperlant et un motif d''adhérence revisité pour ne pas laisser le mauvais temps vous ralentir.\r\nDÉPERLANT\r\nL''empeigne Flyknit mi-montante offre la même tenue seconde peau ajustée avec un revêtement déperlant pour parcourir tous vos kilomètres hivernaux au sec.\r\nDÉROULÉ FLUIDE\r\nLa semelle intermédiaire Lunarlon souple et profilée comporte des découpes au laser sur les côtés qui se réduisent pendant la foulée, pour offrir des transitions parfaitement fluides du talon aux orteils.\r\nADHÉRENCE AMÉLIORÉE\r\nLa semelle extérieure canalisant la pression présente des renforts Lunarlon dans les zones clés pour vous garantir un amorti ciblé et un motif d''adhérence revisité qui permet d''adhérer sur les surfaces humides.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_S/849664_600_A_PREM/chaussure-de-running-lunarepic-flyknit-shield-pour.jpg', NULL),
(14, 'Air Zoom Pegasus 33 Shield iD', 4, 2, 2, 'noir', 160.00, 270, 'Femme', 'VITESSE ET PROTECTION CONTRE LES INTEMPÉRIES\r\nAvec son amorti dynamique et léger, la chaussure de running Nike Air Zoom Pegasus 33 Shield iD vous procure une sensation de vitesse intense dès que vous accélérez. Sa protection durable contre les intempéries et une adhérence renforcée en font la chaussure de running idéale par temps de pluie.\r\n- Unités Nike Zoom Air au talon et à l''avant-pied pour une foulée douce et dynamique\r\n- Semelle extérieure en caoutchouc collant pour une adhérence durable sur les surfaces mouillées\r\n- Rainures flexibles pour une liberté de mouvement plus naturelle ', 'http://render.nikeid.com/ir/render/nikeidrender/Peg33SHield1609_v1?obj=/s/shadow/shad&show&color=000000&obj=/s/g1&color=141414&show&obj=/s/g3&color=141414&show&obj=/s/g9/solid&color=141414&show&obj=/s/g7&color=141414&show&obj=/s/g2/solid&color=141414&show&obj=/s/g5/mid&color=ffffff&show&obj=/s/g6&color=a0a6af&show&obj=/s/g8&color=ffffff&show&obj=/s/g11&color=141414&show&obj=/s/g13&color=535559&show&obj=/s/g14&color=141414&show&obj=/s/g26&color=ffffff&show&obj=/s/g12&color=2d8d9b&show&obj=/s/g17&color=141414&show&obj=/s/g22&color=141414&show&obj=/s/g24&color=141414&show&obj=/s/g30&color=161616&show&obj=/s/g29&color=535559&show&obj=/s/g31&color=ffffff&show&obj=/s/g15/reflect&color=5cb7ae&show&obj=/s/g27&color=c4cae4&show&obj=/s&req=object&fmt=png-alpha&wid=640', NULL),
(15, 'Flyknit Racer', 4, 3, 1, 'rouge', 160.00, 170, 'Femme', 'La chaussure de running Nike Flyknit Racer offre une tenue légère et adaptée avec une semelle extérieure en caoutchouc spécifique pour la course qui garantit une adhérence exceptionnelle, du premier au dernier kilomètre. \r\nMAINTIEN TOUT EN LÉGÈRETÉ\r\nL''empeigne Flyknit simple couche enveloppe votre pied dans une tenue seconde peau pour un soutien incroyable en toute légèreté.\r\nSYSTÈME ADAPTIVE FIT\r\nLa technologie Dynamic Flywire s''adapte à votre pied pour une tenue sur-mesure et un maintien sécurisé.\r\nADHÉRENCE OPTIMALE\r\nUne semelle extérieure en caoutchouc gaufré à motif en losange conçue spécialement pour la course offre une adhérence durable.', 'http://images.nike.com/is/image/DotCom/PDP_HERO/526628_608_A_PREM/chaussure-de-running-mixte-flyknit-racer.jpg?wid=1140&hei=1140&fmt=jpeg&qlt=85&bgc=F5F5F5', NULL),
(16, 'Air Max 2017', 4, 3, 2, 'rose', 190.00, 290, 'Femme', 'Conçue spécifiquement pour offrir maintien et respirabilité exactement où vous en avez besoin, la chaussure de running Nike Air Max 2017 pour Femme combine une empeigne Flymesh à l''amorti confortable d''une unité Max Air couvrant toute la longueur du pied.\r\n\r\nL''unité Air-Sole révolutionnaire de Nike a été intégrée aux chaussures de la marque à la fin des années 70. En 1987, la Nike Air Max 1 était pour la première fois dotée d''une unité Air-Sole visible au talon. Désormais, en plus de ressentir le confort de la technologie Air-Sole, chacun pouvait également le voir en action. Depuis, les chaussures Nike Air Max nouvelle génération connaissent un succès constant auprès des athlètes et des collectionneurs, grâce à leurs combinaisons de couleurs saisissantes et à leur légèreté, qui offre une foulée parfaitement amortie.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_S/849560_502_A_PREM/chaussure-de-running-air-max-2017-pour.jpg', NULL),
(17, 'Free RN', 4, 1, 2, 'blanc', 110.00, 170, 'Femme', 'Plus amortie que la Nike Free RN Motion Flyknit, la chaussure de running Nike Free RN pour Femme présente un nouveau motif de semelle intermédiaire qui s''étend, se plie et se rétracte avec votre pied à chaque pas. Son empeigne en mesh respirante et légère permet à vos pieds de rester au frais et à l''aise du début à la fin.\r\nBOUGEZ NATURELLEMENT\r\nLa semelle intermédiaire Nike Free nouvelle génération s''étend dans de nombreuses directions grâce à un tout nouveau motif tri-star, ajoutant un nouveau degré de souplesse qui permet à vos pieds de bouger avec plus de dynamisme à chaque foulée. Le talon est arrondi pour imiter la forme de votre pied et rouler naturellement sur le sol.\r\nAMORTI SOUPLE\r\nPlus souple que les versions précédentes, la nouvelle semelle intermédiaire offre un amorti exceptionnellement confortable et une durabilité en toute légèreté pendant des kilomètres.\r\nMAINTIEN SOUPLE ET RESPIRANT\r\nLe mesh tissé procure légèreté, maintien souple et confort respirant. Les câbles Flywire sont intégrés aux lacets et peuvent être ajustés pour une tenue personnalisée.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_S/831509_100_A_PREM/chaussure-de-running-free-rn-pour.jpg', NULL),
(18, 'Lunarglide 8', 4, 1, 1, 'noir', 130.00, 227, 'Femme', 'DOUCEUR. MAINTIEN. SANS EFFORT.\r\nLa chaussure de running Nike LunarGlide 8 pour Femme assure maintien et respirabilité ainsi qu''un amorti exceptionnel pour vous aider à dépasser vos records de distance sans difficultés.\r\nTENUE RESPIRANTE ET MODULABLE\r\nLe mesh tissé offre confort et aération, tandis que la technologie Flywire suit les contours de votre pied pour un maintien sûr.\r\nDÉROULÉ FLUIDE\r\nLa semelle intermédiaire Lunarlon souple et profilée comporte des découpes réalisées avec précision au laser sur les côtés qui se réduisent à chaque fois que le pied touche le sol, pour une foulée ultra-fluide.\r\nMAINTIEN TOUT EN LÉGÈRETÉ\r\nLa plate-forme Dynamic Support améliore encore le confort et la stabilité, sans vous alourdir.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_S/843726_001_A_PREM/chaussure-de-running-lunarglide-8-pour.jpg', NULL),
(19, 'Flyknit Air Max', 4, 2, 1, 'orange', 250.00, 300, 'Femme', 'LA DERNIÈRE ÉTAPE POUR UN AMORTI ULTIME\r\nLa chaussure de running Nike Flyknit Air Max pour Femme allie un soutien ultra-léger à un maximum d''amorti grâce à son unité Max Air souple et son empeigne Flyknit tissée d''un seul tenant.\r\nAMORTI FLEXIBLE MAXIMUM\r\nL''unité Max Air sur toute la longueur offre une souplesse inégalée tout en apportant un amorti maximum pour un confort optimal lorsque vous courez. Sa construction tubulaire permet une meilleure circulation de l''air sous le pied pour encourager les transitions du talon jusqu''au bout des orteils.\r\nMAINTIEN ULTRA-LÉGER\r\nL''empeigne Flyknit ultra-légère épouse la forme de votre pied pour un bon maintien et un confort optimal. Confectionnée uniquement à l''aide de fil de polyester, la structure moulée à une seule couche offre une respirabilité, une souplesse et un maintien exceptionnels là où vous en avez le plus besoin.\r\nFOULÉE SOUPLE\r\nLa semelle extérieure à motif gaufré plus légère a été redessinée pour mieux répartir votre poids pour une foulée plus souple et une meilleure adhérence.', 'http://images.nike.com/is/image/DotCom/PDP_COPY_S/620659_406/chaussure-de-running-flyknit-air-max-pour.jpg', NULL),
(20, 'Lunar Skyelux', 4, 3, 2, 'bleu', 100.00, 218, 'Femme', 'MAINTIEN AJUSTÉ. UN MAXIMUM DE CONFORT.\r\nParfaitement rembourrée, la chaussure de running Nike Lunar Skyelux pour Femme présente un col confortable et une mousse souple sous le pied pour une sensation de bien-être incroyable et un maintien optimal en toute légèreté.\r\nAMORTI SOUPLE\r\nLa semelle intermédiaire en mousse à double densité amortit chaque pas tandis que les renforts techniques sous le pied absorbent les chocs. Le col doux et rembourré épouse la cheville pour un confort et un maintien durables.\r\nCONFORT RESPIRANT\r\nLe chausson en mesh respirant vous permet de glisser naturellement dans la chaussure pour une tenue confortable digne d''une chaussette sans distraction.\r\nMAINTIEN OPTIMAL\r\nLa technologie Flywire est intégrée aux lacets pour envelopper le pied et garantir un bon maintien latéral.', 'http://images.nike.com/is/image/DotCom/PDP_HERO/855810_402_A_PREM/chaussure-de-running-lunar-skyelux-pour.jpg?wid=1140&hei=1140&fmt=jpeg&qlt=85&bgc=F5F5F5', NULL),
(21, 'Air Zoom Elite 9', 4, 3, 3, 'noir', 120.00, 190, 'Femme', 'ULTRA-LÉGÈRE ET RÉACTIVE\r\nLa chaussure de running Nike Air Zoom Elite 9 pour Femme offre une foulée dynamique avec un amorti proche du sol et un tissu en mesh léger et respirant pour vous aider à réaliser vos runs les plus rapides.\r\nCONFORT RESPIRANT\r\nLe tissu Flymesh sans coutures est léger et favorise la circulation de l''air pour un confort durable et une sensation de fraîcheur.\r\nFOULÉE DYNAMIQUE\r\nL''unité Nike Zoom Air à l''avant-pied crée une foulée vive et réactive pour rebondir à chaque pas.\r\nADHÉRENCE DURABLE\r\nLa semelle extérieure ultra-fine offre une adhérence durable et une excellente protection contre les chocs pour avaler les kilomètres.', 'http://images.nike.com/is/image/DotCom/PDP_HERO_S/863770_001_A_PREM/chaussure-de-running-air-zoom-elite-9-pour.jpg', NULL),
(22, 'Lunarepic Flyknit', 4, 2, 1, 'noir', 180.00, 184, 'Femme', 'LE RUNNING NE SERA PLUS JAMAIS LE MÊME.\r\nDéveloppée pour écrire le futur du Running et pour ceux qui osent relever les défis, la chaussure de running Nike LunarEpic Flyknit pour Femme offre une foulée incroyablement fluide et un maintien seconde peau à peine perceptible.\r\nNE FAIRE QU''UN AVEC LA CHAUSSURE\r\nL''empeigne Flyknit mi-montante a été imaginée pour agir comme une extension naturelle de votre jambe pour vous faire oublier les kilomètres. La conception d''une seule pièce presque sans coutures est tissée plus lâche là où plus de respirabilité et d''élasticité sont nécessaires pour votre pied et votre cheville, et plus serrée aux endroits qui exigent plus de résistance et de maintien.\r\nDÉROULÉ FLUIDE\r\nLa semelle intermédiaire Lunarlon souple et profilée comporte des découpes au laser sur les côtés qui se réduisent pendant la foulée, pour offrir des transitions parfaitement fluides du talon aux orteils.\r\nSENSATION RÉVOLUTIONNAIRE\r\nLa semelle extérieure est dotée de coussinets Lunarlon en 3D pour un amorti ciblé et une accroche exceptionnelle. Les découpes au laser sur les coussinets permettent d''amortir les chocs en les répartissant plus uniformément sur tout votre pied.', 'http://images.nike.com/is/image/DotCom/PDP_HERO/818677_007_C_PREM/chaussure-de-running-lunarepic-flyknit-pour.jpg', NULL),
(23, 'Free RN Motion Flyknit', 4, 3, 3, 'noir', 150.00, 164, 'Femme', 'SOUPLESSE DYNAMIQUE. NATURELLEMENT SUPÉRIEURE.\r\nOffrant la foulée la plus naturelle de Nike à ce jour, la chaussure de running Nike Free RN Motion Flyknit pour Femme présente une empeigne Flyknit assurant souplesse et maintien et un nouveau motif de semelle intermédiaire révolutionnaire qui permet à la chaussure de s''étendre, se plier et se rétracter avec votre pied à chaque pas, pour vous permettre de bouger plus librement que jamais auparavant.\r\nUNE LIBERTÉ DE MOUVEMENT NATURELLE SUPÉRIEURE\r\nLa semelle intermédiaire Nike Free nouvelle génération s''étend dans de nombreuses directions grâce à un tout nouveau motif tri-star, ajoutant un nouveau degré de souplesse qui procure un maximum de dynamisme à chaque foulée. Le talon est arrondi pour imiter la forme de votre pied et rouler naturellement sur le sol.\r\nAMORTI AMÉLIORÉ\r\nLa semelle intermédiaire double densité est constituée d''un cœur en mousse plus souple directement sous le pied et d''une structure en mousse plus ferme pour offrir un confort amorti et une durabilité accrue pour une foulée fluide et naturelle.\r\nUNE CHAUSSURE CONFORTABLE\r\nLa technologie Flyknit résistante à une seule couture comprend un fil en polyester extensible pour une tenue de compression qui suit parfaitement les mouvements de votre pied lorsque vous courez. Les câbles Flywire tissés au niveau de l''empeigne peuvent être serrés via les lacets pour un maintien dynamique qui accompagne vos mouvements.', 'http://images3.nike.com/is/image/DotCom/PDP_HERO/834585_001_C_PREM/chaussure-de-running-free-rn-motion-flyknit-pour.jpg', NULL),
(24, 'Energy Boost 3', 1, 3, 1, 'noir', 159.90, 290, 'Femme', 'La semelle Boost™ dans ces chaussures de running pour femmes absorbe la force de chaque foulée et vous le retourne sous forme d''une course chargée d''énergie. Une technologie flexible et adaptée qui, combinée à la semelle Boost™, crée une chaussure de running neutre et légèrep our toutes les coureuses.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw3be9f196/zoom/BB5789_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(25, 'Adizero Adios', 1, 3, 3, 'orange', 149.90, 280, 'Femme', 'Aborde chaque run comme une compétition et repousse tes propres limites. Conçue pour la vitesse, cette chaussure de running femmes est équipée de la technologie boost™ offrant un retour d’énergie infini. Sa tige en mesh respirant assure un chaussant ajusté pour plus de confort et de maintien. La semelle extérieure souple épouse les mouvements du pied.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw182b89f1/zoom/BA7948_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(26, 'Metarun', 2, 3, 1, 'noir', 250.00, 281, 'Femme', 'ASICS et l''Institut des sciences du sport présentent la MetaRun, conçue intelligemment dans le but d''en faire la meilleure chaussure de course de fond.\r\n\r\nProfilée et adaptée à votre style de course personnel, la MetaRun utilise les dernières technologies exclusives ASICS pour vous offrir la toute première chaussure de running réactive. Il faut le voir pour le croire.\r\n\r\nElle présente cinq nouvelles technologies : FlyteFoam, AdaptTruss, Jacquard Mesh, MetaClutch et X-GEL.', 'https://asics.scene7.com/is/image/asics/T691N_9099_0010256029_RT_AEB?$product$', NULL),
(27, 'Gel Kayano', 2, 2, 2, 'bleu', 190.00, 265, 'Femme', 'La GEL-KAYANO 23 pour femmes est légère et conçue pour les courses sur longues distances. Cette chaussure de course sur route emblématique a derrière elle plus de 20 ans de succès passés à assurer la stabilité et le confort des surpronateurs sur les longues distances. Et le dernier kilomètre se parcourt aussi confortablement que le premier grâce à son amorti FlyteFoam exceptionnel et à sa semelle intermédiaire renforcée en fibres, qui aide la chaussure à retrouver sa forme initiale après l''impact au sol. Plus vous déroulez le pied, plus il gagne en stabilité. \r\n\r\nCette chaussure est dotée du système Impact Guidance System (IGS) pour s''adapter aux mouvements naturels de vos pieds et à votre morphologie, et la semelle intermédiaire en SpEVA et FlyteFoam assure le rebondi. Chaque impact est amorti grâce à ASICS GEL à l''arrière et à l''avant du pied, et le système Dynamic Duomax offre la stabilité. Idéale pour les courses sur longue distance, la GEL-KAYANO 23 est parfaite pour les surpronateurs à la recherche d''une chaussure de course sur route stable.', 'http://www.asics.com/fr/fr-fr/gel-kayano/p/0010266037.9678', NULL),
(28, 'Gel Nimbus 19', 2, 1, 2, 'rouge', 180.00, 295, 'Femme', 'Avalez les kilomètres tout en soulageant vos pieds grâce à la chaussure légère GEL-Nimbus 19, désormais avec ajustement et confort améliorés. Cette chaussure de course longue distance pour femmes offre un amorti exceptionnel grâce à la semelle intermédiaire FluidRide 2.0, à la couche inférieure FlyteFoam et à la couche supérieure SpEVA, qui apportent un meilleur amorti tout en réduisant la dégradation de la semelle intermédiaire.\r\n\r\nConçue pour les coureurs à pronation neutre, la chaussure GEL-Nimbus 19 pour femmes comporte un talon en gel visible positionné plus près du pied, qui rend chaque foulée plus fluide, plus douce et plus confortable, que vous vous prépariez pour un semi-marathon ou un marathon. Une tige Fluid en mesh à plusieurs couches s''adapte aux différents mouvements de la peau de votre pied.\r\n\r\nEn raison d''améliorations apportées au design, les experts recommandent de commander la GEL-Nimbus 19 1/2 pointure plus grande.', 'https://asics.scene7.com/is/image/asics/T750N_9093_0010291326_RT_AEB?$product$', NULL),
(29, 'GT 2000-5', 2, 2, 1, 'rose', 140.00, 263, 'Femme', 'Enchaînez les kilomètres avec une chaussure légère, solide et résistante qui vous accompagnera dans toutes vos courses longue distance. Idéale pour les supinateurs, la chaussure GT-2000 5 pour femmes vous aide à atteindre vos objectifs quel que soit votre rythme, en assurant un parfait maintien de votre pied, de la ligne de départ jusqu''à la zone de récupération post-course.\r\n\r\nChaque réception se fait plus en douceur grâce à l''amorti en GEL à l''arrière du pied, tandis que le système FluidRide offre une combinaison optimale de rebondi et d''amorti avec un poids allégé et une résistance exceptionnelle. Et vous profitez d''un meilleur maintien grâce aux bandes élastiques intégrées à la tige, qui enveloppent le milieu de votre pied.', 'https://asics.scene7.com/is/image/asics/T757N_2001_0010291339_RT_AEB?$product$', NULL),
(30, 'Gel Cumulus 18', 2, 3, 1, 'noir', 140.00, 255, 'Femme', 'Votre pied rebondit mieux que jamais sur le sol avec la GEL-CUMULUS 18, grâce à sa semelle intermédiaire FluidRide 2.0 plus légère et plus souple. Cette chaussure de running pour femmes donne plus de puissance à vos impulsions.\r\n\r\nDe jour comme de nuit, vous obtenez les mêmes performances d''élite de cette chaussure à amorti. Votre pied rebondit mieux que jamais sur le sol avec la semelle intermédiaire plus légère et plus souple. Le SpEVA offre un amorti supplémentaire et vos impulsions sont plus puissantes grâce à sa semelle compensée plus droite sous le gros orteil.', 'https://asics.scene7.com/is/image/asics/T6C8N_9093_0010266063_RT?$product$', NULL),
(31, 'Fuzex', 2, 3, 1, 'noir', 130.00, 260, 'Femme', 'Profitez des avantages de cette chaussure qui allie légèreté, protection et amorti. Grâce à sa semelle fuzeGEL, si légère qu''elle s''étend de l''avant à l''arrière du pied, vous pouvez courir sur de longues distances.\r\n\r\nLe fuzeGEL à l''arrière du pied est visible au niveau du talon, à travers sa semelle intermédiaire en Solyte. Et vous sentez davantage le sol sous vos pieds grâce à son talon abaissé de 8 mm, plus bas que celui des chaussures de course sur route.', 'https://asics.scene7.com/is/image/asics/T689N_9090_0010256025_FR_AEB?$product$', NULL),
(32, 'GEL-NOOSA TRI 11', 2, 1, 2, 'rose', 140.00, 275, 'Femme', 'Échappez à la foule sur l''aire de transition et positionnez-vous sur la route pour courir les 42 derniers kilomètres. La nouvelle GEL-NOOSA TRI 11 est facile à enfiler et encore plus facile à porter : elle est idéale pour gagner quelques secondes sur la seconde transition, et plus encore pendant la course proprement dite.\r\n\r\nEnfilez-la rapidement grâce à sa languette qui ne glisse pas et à ses lacets élastiques à serrage rapide. Une fois sur la route, gagnez en vitesse grâce à son système de propulsion trusstic, et courez avec efficacité jusqu''à la ligne d''arrivée grâce à la technologie stabilisatrice intégrée à la semelle intermédiaire.', 'http://www.asics.com/fr/fr-fr/gel-noosa-tri%C2%A011/p/0010256001.1721', NULL),
(33, 'Gel Pulse 8', 2, 3, 2, 'bleu', 100.00, 280, 'Femme', 'Améliorez vos temps sur vos parcours de running préférés avec la GEL-PULSE 8, très confortable. Chaque réception se fait plus en douceur avec cette chaussure de course pour femmes, grâce à son amorti à l''arrière et à l''avant du pied. Et votre pied se déroule avec fluidité jusqu''à l''impulsion grâce à sa semelle intermédiaire Super SpEVA, dont l''excellente élasticité vous aide à accélérer et à dynamiser vos poussées.', 'https://asics.scene7.com/is/image/asics/T6E6N_6706_0010266076_RT?$product$', NULL),
(34, 'Gel Sonoma 2 G-TX', 2, 3, 3, 'bleu', 100.00, 268, 'Femme', 'Partez courir chaque semaine quel que soit le temps avec la GEL-SONOMA 2 G-TX, parfaitement imperméable. Courez dans les meilleures conditions grâce à son amorti sous le talon, avec cette chaussure qui tire toute sa solidité de sa tige résistante et renforcée et de sa semelle durable.', 'https://asics.scene7.com/is/image/asics/T688N_5820_0010256023_RT_AEB?$product$', NULL),
(35, 'Gel Fortitude 7', 2, 2, 2, 'bleu', 130.00, 255, 'Femme', 'Profitez d''un soutien et d''un amorti irréprochables avec la GEL-FORTITUDE, plus grande que nature. Quelle que soit la force de l’impact au sol, la FORTITUDE met la course de fond à votre portée.\r\n\r\nVous profiterez de l''amorti qu''il vous faut pour supporter l''impact de la réception. Et sa technologie stabilisatrice sur la semelle intermédiaire empêche votre voûte plantaire de s''affaisser, vous permettant de prendre des impulsions plus efficaces.', 'https://asics.scene7.com/is/image/asics/T5G7N_3293_0010248267_RT?$product$', NULL),
(36, 'Duramo 7', 1, 2, 2, 'noir', 64.90, 213, 'Femme', 'Donne du peps à ton run avec cette chaussure de running femmes. Elle est équipée d''un amorti ADIPRENE® sur toute la longueur pour plus de réactivité, d''une tige respirante en mesh et d''une semelle de propreté souple en EVA.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw228ca431/zoom/BA7389_01_standard.jpg?sw=2000&sfrm=jpg', NULL),
(37, 'Supernova', 1, 1, 1, 'orange', 139.90, 225, 'Femme', 'Repousse tes limites de distance avec cette chaussure femmes. Elle possède une semelle intermédiaire boost™ combinée à une semelle extérieure STRETCHWEB souple pour une foulée rapide et dynamique. Dotée d''une tige en mesh technique avec des empiècements sans coutures pour le confort et la ventilation, elle affiche un renfort au talon pour un chaussant plus naturel.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwf74c3669/zoom/BB6039_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(38, 'Mana Bounce', 1, 3, 3, 'blanc', 79.90, 235, 'Femme', 'Conçue pour offrir un amorti dynamique et un maintien optimal, cette chaussure de running femmes sans couture te garantit un maximum de confort. La technologie BOUNCE™ assure un amorti exceptionnel à chaque foulée, tandis que la tige respirante en mesh avec empiècement imprimé permet un maintien ciblé.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw70254c33/zoom/B39027_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(39, 'Alphabounce Lux', 1, 3, 2, 'blanc', 89.90, 230, 'Femme', 'Un modèle conçu pour repousser ses limites à chaque run, avec détermination et concentration. Équipée d’une semelle intermédiaire BOUNCE™, cette chaussure de running garantit un maximum de confort et d''amorti. Présentant une construction adaptée aux pieds des femmes, elle est dotée d''une tige sans coutures FORGEDMESH pour le confort et la souplesse. Un talon légèrement plus étroit offre un chaussant ajusté. Sa semelle extérieure résistante assure une durabilité exceptionnelle.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwa0bc24b1/zoom/B39271_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(40, 'Element Athletic', 1, 3, 1, 'noir', 59.90, 210, 'Femme', 'Motive-toi et repousse tes limites à chaque run avec cette chaussure de running femmes équipée de boost™ pour t''offrir un confort exceptionnel. Elle possède une doublure en mesh respirante et une semelle intermédiaire SUPERCLOUD™ offrant un excellent amorti. Sa semelle extérieure est munie d''encoches de flexion placées anatomiquement pour plus de souplesse et favoriser les mouvements naturels.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw5143a0a3/zoom/BA7913_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(41, 'Duramo 7', 1, 3, 3, 'noir', 64.00, 246, 'Homme', 'Donne du peps à ton run avec cette chaussure de running hommes. Elle est équipée de la technologie ADIPRENE® sur toute la longueur pour plus de réactivité, d''une tige respirante en mesh et d''une semelle de propreté souple en EVA.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw1f88c04a/zoom/BA7384_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(42, 'Adizero Adios 3', 1, 3, 2, 'bleu', 149.00, 250, 'Homme', 'Certains courent pour améliorer leur endurance. Pour toi, seule la vitesse compte. Avec son design léger et profilé, cette chaussure hommes est conçue pour la compétition. Dotée d''une semelle intermédiaire boost™ à retour d''énergie, elle présente une tige en mesh aéré avec des empiècements pour un maximum de maintien, de respirabilité et de légèreté. La technologie TORSION® SYSTEM offre un maintien ciblé. Sa semelle extérieure en caoutchouc ultra-résistant assure une excellente adhérence sur les routes sèches ou glissantes.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw6a45c97b/zoom/BA7949_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(43, 'Alphabounce', 1, 3, 1, 'noir', 109.00, 243, 'Homme', 'Trouve ton rythme avec cette chaussure hommes au design souple et confortable. Sa tige sans couture FORGEDMESH et sa doublure textile assurent un chaussant ajusté. Dotée d’une semelle intermédiaire BOUNCE™, elle garantit un amorti confortable tout en souplesse pour toujours plus d’endurance.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw6ddd8fcf/zoom/BB9048_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(44, 'Fluid Cloud', 1, 2, 2, 'noir', 69.00, 245, 'Homme', 'Parfaite pour ton run quotidien, cette chaussure de running hommes te garantit un confort durable. Sa semelle intermédiaire cloudfoam assure un amorti dynamique, tandis que la tige en mesh offre une ventilation optimale. Elle est dotée d’une semelle extérieure résistante', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwb96722f9/zoom/BB1711_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(45, 'Mana Bounce 2.0', 1, 1, 3, 'jaune', 79.00, 240, 'Homme', 'Repousse tes limites avec cette chaussure de running hommes conçue pour offrir un confort durable. Sa semelle intermédiaire BOUNCE™ garantit un amorti dynamique. La tige sans couture en mesh serré est doté d’un empiècement imprimé pour un confort personnalisé.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw9717cd4c/zoom/B39022_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(46, 'SpringBlade Solyce', 1, 3, 3, 'noir', 179.00, 271, 'Homme', 'Cours encore plus vite ! Grâce à sa semelle extérieure springblade™ qui permet de stocker et de relâcher un maximum d''énergie, cette chaussure de running hommes est conçue pour booster ton run. Dotée d’une tige textile résistante, elle assure un maintien optimal grâce à ses empiècements synthétiques.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw2bbc6bfe/zoom/AQ7930_01_standard.jpg?sw=2000&sfrm=jpg', NULL),
(47, 'Energy Boost 3', 1, 2, 3, 'blanc', 159.00, 310, 'Homme', 'Voici la chaussure qui a révolutionné le concept d''amorti. Conçue avec la technologie boost™ offrant un retour d''énergie infini, cette version hommes possède une tige techfit® qui assure un chaussant souple et ajusté. Ultra-légère, elle est conçue pour les coureurs à foulée universelle qui souhaitent repousser leurs limites à chaque run.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwa249db75/zoom/AQ5960_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(48, 'Response Plus', 1, 3, 2, 'noir', 119.00, 260, 'Homme', 'Bénéficie d’un amorti dynamique tout au long de ton run avec cette chaussure de running hommes. Elle est équipée de la technologie boost™ offrant un retour d’énergie infini à chaque foulée. Dotée d’une tige en mesh aéré avec des empiècements sans couture, elle assure une ventilation et un confort supérieurs. Sa semelle extérieure STRETCHWEB s''adapte parfaitement à ta foulée.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwd230ccf6/zoom/BB2982_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(49, 'Nova Bounce', 1, 3, 1, 'vert', 99.00, 287, 'Homme', 'Varie les types d’entraînement avec cette chaussure hommes, aussi adaptée à un petit run quotidien qu’à une longue course. Elle est dotée de la technologie BOUNCE™ offrant un maximum d''énergie et de confort.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dw9dbc8a1c/zoom/BY3019_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(50, 'Ultra Boost', 1, 3, 3, 'bleu', 179.00, 280, 'Homme', 'Cours le meilleur run de ta vie avec cette chaussure de running hommes conçue avec le matériau d’amorti exceptionnel boost™ et dotée d’une tige épousant la forme du pied. Plus tu mets d’énergie dans ta course, plus tu en as en retour : sa semelle intermédiaire te propulse dans ta foulée pour plus de vitesse et de légèreté. Sa tige adidas Primeknit épouse les mouvements de ton pied à chaque phase de la foulée. Le renfort de soutien assure un ajustement parfait. La semelle extérieure élastique STRETCHWEB s’adapte à ta foulée.', 'http://www.adidas.fr/dis/dw/image/v2/aagl_prd/on/demandware.static/-/Sites-adidas-products/default/dwec3da907/zoom/BA8844_01_standard.jpg?sw=500&sfrm=jpg', NULL),
(51, 'Metarun', 2, 3, 1, 'noir', 250.00, 285, 'Homme', 'ASICS et l''Institut des sciences du sport présentent la MetaRun, conçue intelligemment dans le but d''en faire la meilleure chaussure de course de fond.\r\n\r\nProfilée et adaptée à votre style de course personnel, la MetaRun utilise les dernières technologies exclusives ASICS pour vous offrir la toute première chaussure de running réactive. Il faut le voir pour le croire.\r\n\r\nElle présente cinq nouvelles technologies : FlyteFoam, AdaptTruss, Jacquard Mesh, MetaClutch et X-GEL.', 'https://asics.scene7.com/is/image/asics/T641N_9099_0010256028_RT_AEB?$product$', NULL),
(52, 'Gel-Nimbus 19', 2, 1, 2, 'bleu', 180.00, 315, 'Homme', 'Avalez les kilomètres tout en soulageant vos pieds grâce à la chaussure légère GEL-Nimbus 19, désormais avec ajustement et confort améliorés. Cette chaussure de course longue distance pour hommes offre un amorti exceptionnel grâce à la semelle intermédiaire FluidRide 2.0, à la couche inférieure FlyteFoam et à la couche supérieure SpEVA, qui apportent un meilleur amorti tout en réduisant la dégradation de la semelle intermédiaire.\r\n\r\nConçue pour les coureurs à pronation neutre, la chaussure GEL-Nimbus 19 pour hommes comporte un talon en gel visible positionné plus près du pied, qui rend chaque foulée plus fluide, plus douce et plus confortable, que vous vous prépariez pour un semi-marathon ou un marathon. Une tige Fluid en mesh à plusieurs couches s''adapte aux différents mouvements de la peau de votre pied.\r\n\r\nEn raison d''améliorations apportées au design, les experts recommandent de commander la GEL-Nimbus 19 1/2 pointure plus grande.', 'https://asics.scene7.com/is/image/asics/T700N_4907_0010291322_RT_AEB?$product$', NULL),
(53, 'Gel Kayano', 2, 2, 2, 'orange', 180.00, 325, 'Homme', 'La GEL-KAYANO 23 pour hommes est légère et conçue pour les courses sur longues distances. Cette chaussure de course sur route emblématique a derrière elle plus de 20 ans de succès passés à assurer la stabilité et le confort des surpronateurs sur les longues distances. Et le dernier kilomètre se parcourt aussi confortablement que le premier grâce à son amorti FlyteFoam exceptionnel et à sa semelle intermédiaire renforcée en fibres, qui aide la chaussure à retrouver sa forme initiale après l''impact au sol. Plus vous déroulez le pied, plus il gagne en stabilité. \r\n\r\nCette chaussure est dotée du système Impact Guidance System (IGS) pour s''adapter aux mouvements naturels de vos pieds et à votre morphologie, et la semelle intermédiaire en SpEVA et FlyteFoam assure le rebondi. Chaque impact est amorti grâce à ASICS GEL à l''arrière et à l''avant du pied, et le système Dynamic Duomax offre la stabilité. Idéale pour les courses sur longue distance, la GEL-KAYANO 23 est parfaite pour les surpronateurs à la recherche d''une chaussure de course sur route stable.', 'https://asics.scene7.com/is/image/asics/T646N_0990_0010266033_RT_AEB?$product$', NULL),
(54, 'GT-2000 5', 2, 2, 1, 'noir', 140.00, 310, 'Homme', 'Enchaînez les kilomètres avec une chaussure légère, solide et résistante qui vous accompagnera dans toutes vos courses longue distance. Idéale pour les surpronateurs, la chaussure GT-2000 5 vous aide à atteindre vos objectifs quel que soit votre rythme, en assurant un parfait maintien de votre pied, de la ligne de départ jusqu''à la zone de récupération post-course.\r\n\r\nChaque réception se fait plus en douceur grâce à l''amorti en GEL à l''arrière du pied, tandis que le système FluidRide offre une combinaison optimale de rebondi et d''amorti avec un poids allégé et une résistance exceptionnelle. Et vous profitez d''un meilleur maintien grâce aux bandes élastiques intégrées à la tige, qui enveloppent le milieu de votre pied.', 'https://asics.scene7.com/is/image/asics/T707N_9099_0010291335_RT_AEB?$product$', NULL),
(55, 'DynaFlyte', 2, 3, 3, 'bleu', 160.00, 220, 'Homme', 'La DYNAFLYTE pour hommes est votre modèle d''entrée de gamme dans la catégorie de course rapide. Outre l''amorti GEL à l''arrière du pied pour amortir chaque pas sans poids supplémentaire, la DYNAFLYTE est dotée de la technologie Impact Guidance System (IGS) qui lui permet de s''adapter au mouvement naturel de vos pieds et à votre anatomie. Grâce aux bandes 3M réfléchissantes, vous êtes visible lorsque la luminosité est faible, et avec la technologie Guidance Line, votre pied est soutenu et guidé du premier impact à l''impulsion.\r\n\r\nPropulsez-vous en avant avec la semelle intermédiaire plus réactive FlyteFoam sur toute la longueur de la chaussure et soyez certain que vos pieds restent ventilés et frais grâce à une empeigne respirante sans coutures. La DYNAFLYTE est idéale pour la pronation neutre et les coureurs rapides sur n''importe quelle distance.\r\n', 'https://asics.scene7.com/is/image/asics/T6F3Y_4249_0010266085_FR_AEB?$product$', NULL),
(56, 'Gel Sonoma 3', 2, 3, 3, 'bleu', 85.00, 325, 'Homme', 'La chaussure GEL-Sonoma 3 pour hommes est une chaussure de trail dotée de nombreuses caractéristiques spécifiques au trail, garantissant stabilité et soutien sur tous les terrains. Le talon en GEL et une semelle intermédiaire EVA offrent un excellent amorti et une réception en douceur sur les trails relativement faciles. La semelle extérieure conçue spécialement pour le trail procure adhérence et stabilité sur les terrains accidentés et par temps humide. \r\n\r\nConçue pour courte et moyenne distance, la GEL-Sonoma 3 est une chaussure résistante dotée d''une tige protectrice renforcée et de bandes réfléchissantes 3M pour une meilleure visibilité dans l''obscurité. ', 'https://asics.scene7.com/is/image/asics/T724N_4990_0010291374_FR_AEB?$product$', NULL),
(57, 'Gel Foundation 12', 2, 1, 1, 'noir', 130.00, 310, 'Homme', 'Profitez d''une chaussure de course qui combine maintien et amorti extrêmes. La FOUNDATION vous soutient sur de longues distances, quelle que soit la force de l’impact au sol. Parmi nos chaussures, c''est celle qui offre le plus de maintien ; elle intègre également la technologie Dynamic DuoMax dans la semelle intermédiaire.\r\n\r\nVous pouvez supporter de hauts niveaux d''impact au sol grâce à son amorti extrême. Et votre voûte plantaire ne s''affaissera pas sous la pression grâce à sa technologie stabilisatrice qui vous permet de prendre des impulsions plus puissantes.', 'https://asics.scene7.com/is/image/asics/T5H1N_9093_0010248269_RT?$product$', NULL),
(58, 'Gel Quantum 360cm', 2, 2, 2, 'orange', 190.00, 298, 'Homme', 'Savourez chaque foulée avec la GEL-QUANTUM 360 CM, chaussure de running haute technologie pour hommes Chameleon Mesh, qui change de couleur selon l''angle de vue. Enfilez-les pour courir 5 ou 10 km et glissez-les dans votre sac de sport pour vos exercices de cardio sur tapis roulant.\r\n\r\nProfitez d''un confort à 360° grâce à l''amorti en GEL de l''arrière à l''avant de la chaussure. Accélérez et dynamisez vos impulsions grâce aux intercalaires de propulsion sur toute la longueur la semelle. Et profitez du maintien et de la souplesse dont vous avez besoin grâce à sa tige en mesh spécialement conçue.', 'https://asics.scene7.com/is/image/asics/T6G1N_4101_0010266093_RT_AEB?$product$', NULL),
(59, 'Gel Kinsei 6', 2, 1, 2, 'bleu', 210.00, 325, 'Homme', 'Atteignez tous vos objectifs de chrono avec la chaussure GEL-Kinsei 6 pour hommes, qui donne de la puissance à vos impulsions. Propulsez-vous grâce à sa semelle intermédiaire FluidRide 2.0, plus élastique, et mettez le turbo grâce aux intercalaires de propulsion sur la semelle d''usure. Adaptée à tous les coureurs, la chaussure GEL-Kinsei 6 est le choix idéal pour les coureurs à pronation neutre.\r\n\r\nProfitez d''une sensation de douceur même sur les routes les plus dures grâce à son amorti en GEL à l''arrière et à l''avant. Avec la GEL-Kinsei 6, sentez la différence offerte par sa semelle confortable X40 dès la première fois où vous l''enfilez. Son chaussant ajusté épouse la partie supérieure de votre pied.\r\n', 'https://asics.scene7.com/is/image/asics/T644N_4200_0010258859_RT_AEB?$product$', NULL);
INSERT INTO `chaussure` (`id`, `modele`, `marque`, `foulee`, `surface`, `couleur`, `prix`, `poids`, `genre`, `description`, `url_image`, `id_promo`) VALUES
(60, 'Gel Cumulus 18 G-TX', 2, 3, 1, 'orange', 150.00, 330, 'Homme', 'La chaussure de course sur route GEL-CUMULUS 18 G-TX pour hommes vous permettra de parcourir confortablement des distances moyennes ou longues tout en gardant les pieds au sec par mauvais temps. Grâce à l''empeigne sans coutures en Gore-Tex, qui la rend à la fois imperméable et respirante, la pluie, la neige fondue et les flaques persistantes feront partie de votre aventure de running puisque rien n''arrêtera votre course. \r\n\r\nLa membrane Gore-Tex empêche l''eau de pénétrer dans la chaussure tout en permettant l''évacuation de la chaleur et de la transpiration, pour que vos pieds soient toujours ventilés, au frais et au sec. Ces propriétés de gestion de l''humidité, associées à la semelle intérieure ComforDry amovible – qui fournit amorti et propriétés antimicrobiennes – offrent à vos pieds un environnement plus sain.  \r\n\r\nConçue pour les coureurs à pronation neutre, la GEL-CUMULUS 18 G-TX est dotée d''un confort amélioré sous le pied ; chaque pas est soutenu et amorti. La technologie Impact Guidance System est dotée d''un ensemble de composants pour améliorer la foulée naturelle du pied de la réception à l''impulsion, tandis qu''une semelle intermédiaire FluidRide fournit d''excellentes caractéristiques de rebond et d''amorti sans poids supplémentaire.  \r\n\r\nLa technologie ASICS GEL visible à l''arrière et à l''avant du pied atténue le choc lors de l''impact et de l''impulsion et facilite les mouvements sur tous les plans à chaque étape de la foulée. Ceux qui courent dans l''obscurité apprécieront les détails réfléchissants qui les rendent visibles par faible luminosité.', 'https://asics.scene7.com/is/image/asics/T6D3N_9093_0010266068_RT?$product$', NULL),
(61, 'Wave Prophecy 6', 3, 3, 1, 'jaune', 220.00, 370, 'Homme', 'Une sensation de course unique grâce à la combinaison Wave Infinity et U4iC. Mizuno a développé le premier amorti entièrement mécanique et écologique pour offrir au coureur l’une des chaussures les plus dynamiques et protectrices. Le système Wave Infinity offre une sensation et une expérience de course à pied unique!', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waveprophecy6_44_02.jpg', NULL),
(62, 'Wave Creation 18', 3, 1, 2, 'noir', 190.00, 360, 'Homme', 'Confort et robustesse pour le coureur lourd.\r\n\r\nCe concentré de technologies offre un confort exceptionnel et un amorti sans égal grâce à la plaque Wave Infinity au talon. La partie avant garantit une meilleure stabilité dans vos appuis.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_wavecreation18_54_02.jpg', NULL),
(63, 'Wave Enigma 6', 3, 2, 1, 'vert', 170.00, 340, 'Homme', 'Vous allez ressentir le plaisir de la course avant même d''avoir démarré votre séance de running, avec la MIZUNO Wave Enigma 6. Le déroulé du pied est excellent, grâce à la flexibilité de la technologie SmoothRide. La semelle intermédiaire U4icX offre un amorti sans égal tout en limitant le poids de la chaussure.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waveenigma6_01_02.jpg', NULL),
(64, 'Wave Paradox 3', 3, 3, 2, 'bleu', 150.00, 325, 'Homme', 'Un excellent contrôle et maintien du pied sans avoir à sacrifier la souplesse et le dynamisme. La plaque Wave accompagne le mouvement du pied sans le contraindre.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waveparadox3_03_02.jpg', NULL),
(65, 'Wave Rider 20', 3, 1, 2, 'orange', 145.00, 290, 'Homme', 'Envie de sensations, de courses effrénées, et de parcours inédits ? La Wave Rider 20 s''adresse aux runners occasionnels comme confirmés, et n''a plus à démontrer ses qualités, même pour un usage intensif. Souplesse, confort, et amorti sont aux rendez-vous grâce à une technologie de pointe. C''est l''occasion de dépasser vos limites et de vivre une expérience unique.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waverider20_01_02_2.jpg', NULL),
(66, 'Wave Inspire 13', 3, 3, 1, 'bleu', 140.00, 310, 'Homme', 'Compromis parfait entre amorti, dynamisme et soutien de voûte plantaire. Ce modèle offre un déroulé du pied tout en souplesse et assure un bon maintien sur longue distance.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waveinspire13_03_02.jpg', NULL),
(67, 'Wave Ultima 8', 3, 2, 2, 'jaune', 130.00, 300, 'Homme', 'Un modèle entièrement relooké offrant confort, amorti et légèreté.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waveultima8_19_02.jpg', NULL),
(68, 'Synchro MX2', 3, 1, 2, 'noir', 100.00, 295, 'Homme', 'Une chaussure d’entrainement très confortable et design offrant un très bon amorti grâce à sa mousse en double densité.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_synchromx2_49_02.jpg', NULL),
(69, 'Wave Sayonara 4', 3, 1, 1, 'jaune', 130.00, 250, 'Homme', 'Une chaussure d’entraînement rapide, légère, souple et dynamique. Drop spécifique de 10mm pour une foulée plus naturelle, efficace et dynamique. Nouvelle semelle U4IC qui permet de réduire de 30% le poids de la semelle intermédiaire tout en conservant des propriétés de durabilité et d’absorption des chocs exceptionnelles.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_wavesayonara4_01_02.jpg', NULL),
(70, 'Wave Catalyst', 3, 3, 3, 'vert', 130.00, 265, 'Homme', 'Un modèle léger, dynamique et stable pour la compétition et les entrainements rapides et fractionnés.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_wavecatalyst_04_02.jpg', NULL),
(71, 'Wave Enigma 6', 3, 2, 1, 'bleu', 170.00, 280, 'Femme', 'Prête pour une séance de running intensive ? Que ce soit sur route ou sur chemin, la MIZUNO Wave Enigma 6 va vous procurer des sensations intenses grâce aux nombreuses technologies mises en œuvre : flexibilité avec la semelle DynamotionFit, amorti avec la plaque Wave et la semelle U4IC Euphoric, respirabilité avec le système de ventilation et le nylon Airmesh.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_waveenigma6_27_02.jpg', NULL),
(72, 'Wave Rider 20', 3, 1, 2, 'bleu', 145.00, 245, 'Femme', 'Envie de sensations, de courses effrénées, et de parcours inédits ? La Wave Rider 20 s''adresse aux runners occasionnels comme confirmés, et n''a plus à démontrer ses qualités, même pour un usage intensif. Souplesse, confort, et amorti sont aux rendez-vous grâce à une technologie de pointe. C''est l''occasion de dépasser vos limites et de vivre une expérience unique.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/m/_/m_waverider20_01_02_1_1.jpg', NULL),
(73, 'Wave Prophecy 5', 3, 3, 1, 'rouge', 220.00, 300, 'Femme', 'Une sensation de course unique grâce à la combinaison Wave Infinity et U4iC. Mizuno a développé le premier amorti entièrement mécanique et écologique pour offrir au coureur l’une des chaussures les plus dynamiques et protectrices. Le système Wave Infinity offre une sensation et une expérience de course à pied unique!', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_propphecy5_67_02.jpg', NULL),
(74, 'Wave Inspire 13', 3, 3, 1, 'rose', 140.00, 260, 'Femme', 'Compromis parfait entre amorti, dynamisme et soutien de voûte plantaire. La Wave Inspire 13 offre un déroulé du pied tout en souplesse et assure un bon maintien sur longue distance.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_waveinspire13_03_02.jpg', NULL),
(75, 'Wave Creation 18', 3, 1, 2, 'bleu', 190.00, 305, 'Femme', 'Ce concentré de technologies offre un confort exceptionnel et un amorti sans égal grâce à la plaque Wave Infinity au talon. La partie avant garantit une meilleure stabilité dans vos appuis.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_wavecreation18_60_02.jpg', NULL),
(76, 'Wave Paradox', 3, 3, 2, 'bleu', 150.00, 280, 'Femme', 'Un excellent contrôle et maintien du pied sans avoir à sacrifier la souplesse et le dynamisme. La plaque Wave accompagne le mouvement du pied sans le contraindre.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_waveparadox3_60_02.jpg', NULL),
(77, 'Synchro MX', 3, 1, 2, 'rose', 100.00, 245, 'Femme', 'La polyvalence sans compromis sur le confort et la stabilité ! C''est ce que vous apporte la MIZUNO MX, chaussure de sport idéale pour une séance de running comme pour un cours de fitness. La semelle U4icX, renforcée par la technologie SmoothRide, vous procure une grande sensation de confort et une parfaite stabilité.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_synchromx_04_02.jpg', NULL),
(78, 'Wave Ultima 8', 3, 2, 2, 'bleu', 130.00, 260, 'Femme', 'MIZUNO Wave ULTIMA 8, un modèle entièrement relooké offrant confort, amorti et légèreté.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_ultima8_03_02_1.jpg', NULL),
(79, 'Wave Catalyst', 3, 3, 3, 'rouge', 130.00, 230, 'Femme', 'Un modèle léger, dynamique et stable pour la compétition et les entrainements rapides et fractionnés.', 'http://www.mizunoshop.fr/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/w/_/w_wavecatalyst_31_02.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `membre` int(11) NOT NULL,
  `item_1` int(11) NOT NULL,
  `item_2` int(11) DEFAULT NULL,
  `item_3` int(11) DEFAULT NULL,
  `item_4` int(11) DEFAULT NULL,
  `item_5` int(11) DEFAULT NULL,
  `item_6` int(11) DEFAULT NULL,
  `pointure1` int(11) NOT NULL,
  `pointure2` int(11) DEFAULT NULL,
  `pointure3` int(11) DEFAULT NULL,
  `pointure4` int(11) DEFAULT NULL,
  `pointure5` int(11) DEFAULT NULL,
  `pointure6` int(11) DEFAULT NULL,
  `nbitem1` int(11) NOT NULL,
  `nbitem2` int(11) DEFAULT NULL,
  `nbitem3` int(11) DEFAULT NULL,
  `nbitem4` int(11) DEFAULT NULL,
  `nbitem5` int(11) DEFAULT NULL,
  `nbitem6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `foulee`
--

CREATE TABLE `foulee` (
  `id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `foulee`
--

INSERT INTO `foulee` (`id`, `type`) VALUES
(1, 'Pronatrice'),
(2, 'Supinatrice'),
(3, 'Universelle');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(1, 'Adidas'),
(2, 'Asics'),
(3, 'Mizuno'),
(4, 'Nike');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `civilite` enum('M','Mme') NOT NULL,
  `nom` varchar(128) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(128) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(128) CHARACTER SET utf8 NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL,
  `date_naissance` date NOT NULL,
  `pays` varchar(255) NOT NULL,
  `cp` int(11) NOT NULL,
  `ville` varchar(128) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `cp_adresse` varchar(256) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `civilite`, `nom`, `prenom`, `mdp`, `email`, `date_naissance`, `pays`, `cp`, `ville`, `adresse`, `cp_adresse`, `telephone`, `admin`) VALUES
(1, 'M', 'admin', 'admin', 'administrateur', 'admin', '0000-00-00', '', 0, '', '1', '', '', 1),
(2, 'M', 'Habert', 'Emeline', 'MotDePasse', 'pouicloid@gmail.com', '0000-00-00', '', 50000, 'Saint-Lo', '7', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `membre` int(11) NOT NULL,
  `item_1` int(11) NOT NULL,
  `item_2` int(11) DEFAULT NULL,
  `item_3` int(11) DEFAULT NULL,
  `item_4` int(11) DEFAULT NULL,
  `item_5` int(11) DEFAULT NULL,
  `item_6` int(11) DEFAULT NULL,
  `pointure1` int(11) NOT NULL,
  `pointure2` int(11) DEFAULT NULL,
  `pointure3` int(11) DEFAULT NULL,
  `pointure4` int(11) DEFAULT NULL,
  `pointure5` int(11) DEFAULT NULL,
  `pointure6` int(11) DEFAULT NULL,
  `nbitem1` int(11) NOT NULL,
  `nbitem2` int(11) DEFAULT NULL,
  `nbitem3` int(11) DEFAULT NULL,
  `nbitem4` int(11) DEFAULT NULL,
  `nbitem5` int(11) DEFAULT NULL,
  `nbitem6` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pointure`
--

CREATE TABLE `pointure` (
  `id` int(11) NOT NULL,
  `taille` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pointure`
--

INSERT INTO `pointure` (`id`, `taille`) VALUES
(1, 38),
(2, 39),
(3, 40),
(4, 41),
(5, 42),
(6, 43),
(7, 44),
(8, 45);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `chaussure` int(11) NOT NULL,
  `pourcentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `surface`
--

CREATE TABLE `surface` (
  `id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `surface`
--

INSERT INTO `surface` (`id`, `type`) VALUES
(1, 'asphalte'),
(2, 'chemin'),
(3, 'piste');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chaussure`
--
ALTER TABLE `chaussure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chaussure1` (`marque`),
  ADD KEY `fk_chaussure2` (`foulee`),
  ADD KEY `fk_chaussure3` (`surface`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `fk_commande1` (`membre`),
  ADD KEY `fk_commande2` (`item_1`),
  ADD KEY `fk_commande3` (`item_2`),
  ADD KEY `fk_commande4` (`item_3`),
  ADD KEY `fk_commande5` (`item_4`),
  ADD KEY `fk_commande6` (`item_5`),
  ADD KEY `fk_commande7` (`item_6`),
  ADD KEY `fk_commande8` (`pointure1`),
  ADD KEY `fk_commande9` (`pointure2`),
  ADD KEY `fk_commande10` (`pointure3`),
  ADD KEY `fk_commande11` (`pointure4`),
  ADD KEY `fk_commande12` (`pointure5`),
  ADD KEY `fk_commande13` (`pointure6`);

--
-- Index pour la table `foulee`
--
ALTER TABLE `foulee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_panier1` (`membre`),
  ADD KEY `fk_panier2` (`item_1`),
  ADD KEY `fk_panier3` (`item_2`),
  ADD KEY `fk_panier4` (`item_3`),
  ADD KEY `fk_panier5` (`item_4`),
  ADD KEY `fk_panier6` (`item_5`),
  ADD KEY `fk_panier7` (`item_6`),
  ADD KEY `fk_panier8` (`pointure1`),
  ADD KEY `fk_panier9` (`pointure2`),
  ADD KEY `fk_panier10` (`pointure3`),
  ADD KEY `fk_panier11` (`pointure4`),
  ADD KEY `fk_panier12` (`pointure5`),
  ADD KEY `fk_panier13` (`pointure6`);

--
-- Index pour la table `pointure`
--
ALTER TABLE `pointure`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_promotion1` (`chaussure`);

--
-- Index pour la table `surface`
--
ALTER TABLE `surface`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chaussure`
--
ALTER TABLE `chaussure`
  ADD CONSTRAINT `fk_chaussure1` FOREIGN KEY (`marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `fk_chaussure2` FOREIGN KEY (`foulee`) REFERENCES `foulee` (`id`),
  ADD CONSTRAINT `fk_chaussure4` FOREIGN KEY (`surface`) REFERENCES `surface` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_commande1` FOREIGN KEY (`membre`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `fk_commande10` FOREIGN KEY (`pointure3`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_commande11` FOREIGN KEY (`pointure4`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_commande12` FOREIGN KEY (`pointure5`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_commande13` FOREIGN KEY (`pointure6`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_commande2` FOREIGN KEY (`item_1`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande3` FOREIGN KEY (`item_2`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande4` FOREIGN KEY (`item_3`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande5` FOREIGN KEY (`item_4`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande6` FOREIGN KEY (`item_5`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande7` FOREIGN KEY (`item_6`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_commande8` FOREIGN KEY (`pointure1`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_commande9` FOREIGN KEY (`pointure2`) REFERENCES `pointure` (`id`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_panier1` FOREIGN KEY (`membre`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `fk_panier10` FOREIGN KEY (`pointure3`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_panier11` FOREIGN KEY (`pointure4`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_panier12` FOREIGN KEY (`pointure5`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_panier13` FOREIGN KEY (`pointure6`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_panier2` FOREIGN KEY (`item_1`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier3` FOREIGN KEY (`item_2`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier4` FOREIGN KEY (`item_3`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier5` FOREIGN KEY (`item_4`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier6` FOREIGN KEY (`item_5`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier7` FOREIGN KEY (`item_6`) REFERENCES `chaussure` (`id`),
  ADD CONSTRAINT `fk_panier8` FOREIGN KEY (`pointure1`) REFERENCES `pointure` (`id`),
  ADD CONSTRAINT `fk_panier9` FOREIGN KEY (`pointure2`) REFERENCES `pointure` (`id`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `fk_promotion1` FOREIGN KEY (`chaussure`) REFERENCES `chaussure` (`id`);
