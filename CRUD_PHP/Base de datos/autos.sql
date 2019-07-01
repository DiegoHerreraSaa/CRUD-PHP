-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-06-2019 a las 02:26:39
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `linea` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `año` year(4) NOT NULL,
  `precio` int(10) UNSIGNED NOT NULL,
  `kms` int(10) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `linea`, `marca`, `año`, `precio`, `kms`, `descripcion`) VALUES
(1, 'COBRA FACTORY FIVE', 'SHELBY', 1965, 54900, 4427, 'Motor Ford 351ci Windsor V8 con 391 pulgadas cubicas,  transmision manual Tremec TKO de 5 velocidades y un Ford 8.8 Posi Rear End.'),
(2, 'DAYTONA COUPE', 'SHELBY', 1965, 87900, 7958, 'Motor Ford V1 358ci Windsor V8 Crate Engine de \"Engine Factory\" que produce 400 hp, conectado a una transmisión manual Tremec TKO600 de 5 velocidades.'),
(3, 'CORVETTE L72', 'CHEVROLET', 1966, 119900, 84742, 'Corvette L72 427ci / 425hp con su Números completos de transmisión a juego. Debajo del capó se encuentran sus números que coinciden con el L72 427ci / 425hp V8 junto con sus números que coinciden con la transmisión manual de 4 velocidades Muncie y el extremo posterior Corvette Posi.'),
(4, 'FIREBIRD 400', 'PONTIAC', 1968, 45900, 7128, 'Motor V8 de Numbers Matching 400i, combinado con su carburador Quadrajet de Numbers Matching restaurado, y asociado con una transmisión automática TH400 de 3 velocidades y un extremo trasero de Pontiac de 10 pernos.'),
(5, 'CAMARO RESTOMOD', 'CHEVROLET ', 1969, 89900, 556, 'Motor LS1 V8 conectado a una transmisión automática 4L60E con actualizaciones de la etapa 2 que empujan toda la potencia al eje trasero.'),
(6, 'CHARGER', 'DODGE', 1969, 89900, 75500, 'Motor Dodge 383ci V8 emparejado con los números que coinciden con la transmisión manual de 4 velocidades A833.'),
(8, 'CUDA 440 SIX PACK TRIBUTE', 'PLYMOUTH', 1971, 90000, 12536, 'Motor Plymouth 440ci V8 con Six Pack, construido con un bloque 440 acanalado Hi-Po, y 6 - Pack de ingesta y carbohidratos.'),
(9, 'CONTINENTAL MARK IV', 'LINCOLN', 1974, 34900, 72273, 'Tanque de gasolina nuevo, líneas de combustible, frenos y líneas, radiador, compresor de A / C, bomba de dirección asistida, antena eléctrica, los engranajes de ventana de plástico fueron reemplazados por ruedas de metal hechas a mano'),
(10, 'PACER WAGON RESTOMOD', 'AMC', 1979, 32900, 81713, 'Tiene un motor GM Performance 350ci V8 Crate bajo su capó deslizante delantero atado a una transmisión automática de 3 velocidades.'),
(11, 'NSX', 'ACURA', 1991, 79900, 35780, 'El motor eléctrico de inyección de combustible C30A 3.0 litros V6 original se encuentra conectado a la transmisión manual de 5 velocidades original.'),
(12, 'VIPER RT/10', 'DODGE', 1995, 44900, 29624, 'Motor V10 8.0L de 415 caballos de fuerza funciona a la perfección y la transmisión de seis velocidades cambia tan suave como puede ser.'),
(13, 'CORVETTE GRAND SPORT', 'CHEVROLET', 1996, 42900, 3912, 'Motor LT4 V8 original conectado a la transmisión manual de 6 velocidades ZF.'),
(14, 'VIPER SRT10 COMMEMORATIVE EDITION', 'DODGE', 2005, 79900, 1370, 'Motor Dodge 8.3L V10 original que produce 505 hp, asociado a su transmisión manual de 6 velocidades.'),
(15, '3-WINDOW COUPE STREET ROD', 'FORD', 1934, 69900, 0, 'Motor GM 350 V8 con un sistema de inyección electrónica de combustible Ingles 8-Stack, conectado a una transmisión automática TH350 y un extremo trasero de cambio rápido Supermax de Speedway Engineering con una marcha de 3.25.'),
(16, 'COUPE STREET ROD', 'WILLYS', 1941, 84900, 1, '350ci V8 con un motor 671 Blower que se asocia con la transmisión automática TH400 de 3 velocidades.'),
(17, 'GT40 SUPERFORMANCE', 'FORD', 1965, 189900, 418, 'Motor nuevo de cajón V8 427ci de Ford Racing con inyección de combustible electrónica FAST Velocity 8 Stack impulsado por el sistema informático EZ-EFI de FAST. El 427 Crate Engine está asociado con la transmisión manual de 5 velocidades Quaife Racing.'),
(18, 'COBRA BACKDRAFT', 'SHELBY', 1965, 69900, 4192, 'Motor Ford 427ci Stroker V8 que empuja 535 hp / 545 tq y está asociado con una transmisión manual TKO600 manual de 5 velocidades Tremec.'),
(19, 'CORVETTE GRAND SPORT', 'CHEVROLET', 1996, 42900, 3912, 'Motor LT4 V8 original conectado a la transmisión manual de 6 velocidades ZF.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
