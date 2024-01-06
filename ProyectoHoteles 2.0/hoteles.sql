

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE `hoteles`;
CREATE TABLE `hoteles` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `Nombre` varchar(26) NOT NULL,
  `CAT` varchar(3) DEFAULT NULL,
  `HAB` int(11) NOT NULL,
  `Poblacion` varchar(14) NOT NULL,
  `Direccion` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hoteles` (`Nombre`, `CAT`, `HAB`, `Poblacion`, `Direccion`) VALUES
('Abashiri (NH)', '3*', 168, '46013 Valencia', 'Avenida Ausias March,59'),
('Abba Acteon', '4*', 189, '46023 Valencia', 'Escultor Vicente Bertran Grimal, 2'),
('AC Valencia', '4*', 183, '46023 Valencia', 'Avenida de Francia,67'),
('Acta Atarazaans', '4*', 4, '46011 Valencia', 'Plaza Tribunal de las Aguas, 4'),
('Acta del Carmen', '3*', 5, '46003 Valencia', 'Blanquerias 11'),
('Ad Hoc Monumental Valencia', '3*', 8, '46003 Valencia', 'Boix, 4'),
('Alkazar', '1*', 18, '46002 Valencia', 'Mosen Femades, 11')

