-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2023 a las 16:12:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clarita`
--
CREATE DATABASE IF NOT EXISTS `clarita` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clarita`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` tinyint(4) NOT NULL,
  `nomAdmin` varchar(25) NOT NULL,
  `contraAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` tinyint(4) NOT NULL,
  `nomCliente` varchar(30) NOT NULL,
  `contraCliente` varchar(20) NOT NULL,
  `emailCliente` varchar(20) NOT NULL,
  `telCliente` varchar(15) NOT NULL,
  `fecha` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomCliente`, `contraCliente`, `emailCliente`, `telCliente`, `fecha`) VALUES
(1, 'Julian', '12345678', 'julianpro01709@gmail', '3145256242', '07/09/23'),
(2, 'Escobar Gaviria', '212223', 'julianc@gmail.com', '314535345435', '11/09/23'),
(3, 'Guerrero Mendez', '12345', 'guerreromendez@gmail', '3144244273', '11/09/23'),
(4, 'Diana Patricia Artunduaga Ibag', '3115216424', 'dianaartunduaga_30@g', '3144244273', '11/09/23'),
(5, 'Diana Patricia Artunduaga Ibag', '3115216424', 'dianaartunduaga_30@g', '3144244273', '11/09/23'),
(6, 'Diana Patricia Artunduaga Ibag', '3115216424', 'dianaartunduaga_30@g', '3144244273', '11/09/23'),
(7, 'Ibarra mi hija', '5t6hji8 u5', 'soyhijadejulian@gmai', '3142232323', '11/09/23'),
(8, 'julianesunaputa', 'julianputo', 'julianlaputa@gmail.c', '2323213', '11/09/23'),
(9, 'Julian', '1234567890', 'melomacarena@gmail.c', '31442424223', '14/09/23'),
(10, 'Daniela Galeano Huepa', '12345678', 'danielagaleano068@gm', '3104140377', '26/10/23'),
(11, 'Diana Carolina Marmolejo', '278917132288', 'dianacarmargar19@gma', '3143152200', '26/10/23'),
(12, 'andres', '2306', 'andrescamilocruzb@gm', '3013117434', '30/10/23'),
(13, 'andres', '2306', 'andrescamilocruzb@gm', '3013117434', '30/10/23'),
(14, 'andres camilo cruz bustos', '2306', 'andrescamilocruzb@gm', '3013117434', '30/10/23'),
(15, 'Lukas Ramirez', 'lukitaspro', 'lukitas@gmail.com', '3144244273', '30/10/23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` tinyint(4) NOT NULL,
  `nomProducto` varchar(70) NOT NULL,
  `Descripccion` varchar(240) NOT NULL,
  `valor` varchar(15) NOT NULL,
  `idServicios` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nomProducto`, `Descripccion`, `valor`, `idServicios`) VALUES
(1, 'Pasadia Carta', 'Almuerzo (plato a la carta) +jugo refigerio\r\n\r\nAcceso a las piscinas (Naturales y tratadas)\r\n\r\nTinto y agua (vasos) ', '30.000', 1),
(2, 'PASADIA INFANTIL: NIÑOS DE 4 A 8 AÑOS', 'Almuerzo plato a la carta (Pollo broaster o pollo a la milanesa) segun disponibilidad, acompañado de arroz, taza de sopa y ensalada + jugo refrigerio\r\n\r\nAcceso a las piscinas (Naturales y tratadas)', '20.000', 1),
(3, 'PASADIA ESPECIAL', 'Almuerzo plato especial + jugo refigerio\r\n\r\nAcceso a las piscinas (Naturales y tratadas)\r\n\r\nTinto y agua (vasos)', '35.000', 1),
(4, 'Bandeja Paisa', 'Arroz, frijol, carne molida, huevo frito, tajada, chorizo, arepa, aguacate, chicharron', '20.000', 5),
(5, 'Cerdo Ahumado 250gr', 'Lomo de cerdo ahumado acompañado de arroz, papas a la francesa y ensalada.', '20.000', 5),
(6, 'Chuleta de Cerdo 250gr', 'Chuleta de cerdo tipo Valluna (apanada), acompañado de arroz, papas a la francesa y ensalada.', '20.000', 5),
(7, 'Pechuga a la Plancha 250gr', 'Acompañado de arroz, papas a la francesa y ensalada.', '20.000', 5),
(8, 'Pollo al Broaster 250gr', 'Acompañado de arroz, papas a la francesa, ensalada y tasa de sopa.', '20.000', 5),
(9, 'Sancocho de Pollo 500gr', 'Sopa,pierna pernil, cocido(platano, papa, yuca, mazorca y auyama) acompañado de arroz y ensalada.', '20.000', 5),
(10, 'CERDO HAWAIANO (250gr)', 'Lomo de cerdo a la placha, bañado en salsa de piña, acompañado de arroz, papa a la francesa y ensalada.\r\n\r\n', '25.000', 5),
(11, 'COSTILLAS DE CERDO EN SALSA BBQ (250gr)\r\n', 'Acompañado de arroz, croquetas de yuca, papas a la francesa y ensalada.\r\n\r\n', '25.000', 5),
(12, 'CHURRASCO ARGENTINO (250gr)\r\n', 'Acompañado de arroz, croquetas de yuca, papas a la francesa y ensalada.\r\n\r\n', '25.000', 5),
(13, 'MOJARRA FRITA (500gr)\r\n', 'Acompañado de arroz, pataconas y ensalada.\r\n\r\n', '25.000', 5),
(14, 'MOJARRA SUDADA (500gr)\r\n', 'Acompañado de arroz, papa al vapor, yuca al vapor y ensalada.\r\n\r\n', '25.000', 5),
(15, 'PARRILLADA (250gr)\r\n', 'Acompañado de pataconas, croquetas de yuca, papas a la francesa, chorizo, res, cerdo, pollo y chicarron.\r\n\r\n', '25.000', 5),
(16, 'POLLO EN CHAMPIÑONES (250gr)\r\n', 'Pechuga de pollo bañada en salsa de champiñones, acompañado de arroz, papas a la francesa y ensalada.\r\n\r\n', '25.000', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idServicios` tinyint(4) NOT NULL,
  `nomServicios` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicios`, `nomServicios`) VALUES
(1, 'Pasadia'),
(2, 'Piscina'),
(3, 'Hospedaje'),
(4, 'Paquete de parejas'),
(5, 'Restaurante'),
(6, 'Eventos sociales y empres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idServicios` (`idServicios`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicios` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idServicios`) REFERENCES `servicios` (`idServicios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
