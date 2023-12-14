-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 00:53:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_cac_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tema` varchar(255) NOT NULL,
  `fecha_alta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(3, 'Carlos', 'Gardel', 'c_gardel@gmail.com', 'Abasto, mi bariio', '2023-11-09 00:31:32'),
(4, 'Anibal', 'Troilo', 'a_troilo@gmail.com', 'La pausa al respirar', '2023-11-09 00:34:29'),
(5, 'Tita', 'Merello', 't_merello@gmail.com', 'Todos son mis hijos', '2023-11-09 00:37:30'),
(6, 'Anibal', 'Lecter', 'a_lecter@gmail.com', 'Lo importante son los condimentos', '2023-11-09 00:39:18'),
(7, 'Marcel', 'Marceau', 'm-marceau@gmail.com', 'La importancia de la palabra', '2023-11-09 00:40:27'),
(8, 'Nina ', 'Hagen', 'n_hagen@gmail.com', 'Como seleccionar la mejor canción de cuna', '2023-11-09 00:42:35'),
(9, 'Pierre ', 'Nodoyuna', 'p_nodoyuna@gmail.com', 'Mi mejor amigo: Patán', '2023-11-09 00:44:32'),
(10, 'Dario', 'Barassi', 'd_barassi@gmail.com', 'Como caer simpático sin ser pesado', '2023-11-09 00:46:16'),
(11, 'Buster ', 'Keaton', 'b_keaton@gmail.com', 'Como sostener una cara de pocker', '2023-11-09 00:48:17'),
(12, 'Benito', 'Bodoque', 'b_bodoque@gmail.com', 'Mi vida en un callejón', '2023-11-09 00:48:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
