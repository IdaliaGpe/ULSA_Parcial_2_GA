-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2023 a las 11:48:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine_club`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Aventura', 'aEdrtlp0r5q4vzIeRcgfVkvROspkk9RmzYV6lJOR.jpg', '2023-03-26 07:47:52', '2023-03-26 14:47:52'),
(12, 'Accion', 'uB0IpDZ0SeYet0J7k3LJ2c0NKB4nxwEjoM16FyvC.png', '2023-03-26 07:52:49', '2023-03-26 14:52:49'),
(13, 'Ficcion', 'nUWGN7YV2omya8rTOF24NDB3oTA4JVsSgrd59JLQ.jpg', '2023-03-26 07:53:16', '2023-03-26 14:53:16'),
(14, 'Terror', 'qvYtuKgtnQpIaMO5LdcMz3qI3e3Ot8M5IlsPdHnZ.png', '2023-03-26 07:57:10', '2023-03-26 14:57:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `año` year(4) NOT NULL,
  `tiempo` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `nombre`, `director`, `id_genero`, `año`, `tiempo`, `hora`, `fecha`, `foto`, `foto_2`, `created_at`, `updated_at`) VALUES
(2, 'Gato con botas: el último deseo', 'Joel Crawford', 5, 2022, '102', '13:55:00', '2023-03-23', 'wsyfAOt06Vq1tif1bjMKZagx7Xei5DaBcFqmPSu8.jpg', 'XNYBtYYdvclx7eD2VyQY2CO6ZvPAC4i5nmvKDcdy.jpg', '2023-03-26 08:00:18', NULL),
(3, 'Shrek para siempre', 'Mike Mitchell', 5, 2010, '93', '05:00:32', '2023-03-07', 'm6CENljTy8QBbmK0HrSYweAYdgWlIvX9Wg6Cxmud.jpg', '5zbtJ71jEiRMZWVQaxslGz3MDSwj76Kt8Qk9DLo9.jpg', '2023-03-26 08:02:12', NULL),
(4, 'Kimetsu no Yaiba: Mugen Ressha-hen', 'Haruo Sotozaki', 12, 2020, '117', '01:00:32', '2023-03-21', 'Lkm6ZJfiEmq6wgDForYerIYDTI4vhvbMRofGflwp.jpg', 'f3oPY5pvQqkkw4lHBNGkmlf6tAcT94W74IqkfLEg.jpg', '2023-03-26 08:02:12', NULL),
(5, 'Harry Potter and the Deathly Hallows – Part 2', 'David Yates', 13, 2011, '115', '13:55:00', '2023-03-16', 'b3h52W3GUNyjDGrgoErUOlb0SpNNec8WeSiLcEvD.jpg', 'yQWeg0rhPzdDIa8Y0ZR507CYMEFbjy5812WGUVYu.jpg', '2023-03-26 08:04:03', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `id_genero` int(11) NOT NULL,
  `año` year(4) NOT NULL,
  `tiempo` varchar(255) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `director`, `id_genero`, `año`, `tiempo`, `hora`, `fecha`, `foto`, `foto_2`, `created_at`, `updated_at`) VALUES
(2, 'Gato con botas: el último deseo', 'Joel Crawford', 5, 2022, '102', '13:55:00', '2023-03-15', 'wsyfAOt06Vq1tif1bjMKZagx7Xei5DaBcFqmPSu8.jpg', 'XNYBtYYdvclx7eD2VyQY2CO6ZvPAC4i5nmvKDcdy.jpg', '2023-03-26 07:47:04', '2023-03-26 14:47:04'),
(3, 'Shrek para siempre', 'Mike Mitchell', 5, 2010, '93', '05:48:00', '2023-05-29', 'm6CENljTy8QBbmK0HrSYweAYdgWlIvX9Wg6Cxmud.jpg', '5zbtJ71jEiRMZWVQaxslGz3MDSwj76Kt8Qk9DLo9.jpg', '2023-03-26 07:48:49', '2023-03-26 14:48:49'),
(13, 'Kimetsu no Yaiba: Mugen Ressha-hen', 'Haruo Sotozaki', 12, 2020, '117', '00:41:00', '2023-03-07', 'Lkm6ZJfiEmq6wgDForYerIYDTI4vhvbMRofGflwp.jpg', 'f3oPY5pvQqkkw4lHBNGkmlf6tAcT94W74IqkfLEg.jpg', '2023-03-26 07:49:37', '2023-03-26 14:49:37'),
(14, 'Harry Potter and the Deathly Hallows – Part 2', 'David Yates', 13, 2011, '115', '00:53:00', '2023-02-27', 'b3h52W3GUNyjDGrgoErUOlb0SpNNec8WeSiLcEvD.jpg', 'yQWeg0rhPzdDIa8Y0ZR507CYMEFbjy5812WGUVYu.jpg', '2023-03-26 08:04:14', '2023-03-26 15:04:14'),
(15, 'Robots', 'Chris Wedge', 5, 2005, '84', '00:55:00', '2023-03-30', 'Xf4XjBKPeo3uzh8wGScexDNFWcOGshcOniIQaxFJ.jpg', 'uKrBRFpbBvAAC44SEv3ngX1upxfcGvPaJJUald4d.jpg', '2023-03-26 14:52:29', '2023-03-26 14:52:29'),
(16, 'How to Train Your Dragon: The Hidden World', 'Dean DeBlois', 13, 2019, '104', '00:57:00', '2023-03-17', 'JCiF4cpub9RTuNlerHMbZRUdPz7BG7RVCbm1NQ2w.jpg', 'YUYNsQWPPMvLo6vcB5KvCGmrmN24SezlCzBYXj5S.jpg', '2023-03-26 14:54:04', '2023-03-26 14:54:04'),
(17, 'Piratas del Caribe: La venganza de Salazar', 'Nigel Phelps', 12, 2017, '129', '00:58:00', '2023-03-09', 'oyxDpSQ0KBoc7MqKf2YEDBxQ7VIBPLvVcQeLqVEH.jpg', '3T4gYiewwJgNRfuJBtGV085CnMcsmTTmhbn45DZr.jpg', '2023-03-26 14:54:54', '2023-03-26 14:54:54'),
(18, 'Charlie and the Chocolate Factory', 'Tim Burton', 13, 2005, '115', '00:58:00', '2023-03-15', 'bqBOWuyjMS78xuTf9Zf9WJTlikmXuS9wHBkhareI.jpg', 'VM8wDDjgvhNrQkLIfw3hDUW2WvotLUeexEkrDDzz.jpg', '2023-03-26 14:55:52', '2023-03-26 14:55:52'),
(19, 'Monster House', 'Gil Kenan', 14, 2006, '91', '12:29:00', '2023-04-07', 'Y6lRdKbg1sB7OttEoKKZPuYDLoai03AF8zrmgoZV.jpg', 'DYn5IQgYZIAzwUdq5ZQIDbRxDWt7lTPctQPk0RoO.jpg', '2023-03-26 14:56:57', '2023-03-26 14:56:57'),
(20, 'Finch', 'Miguel Sapochnik', 5, 2021, '115', '18:58:00', '2023-04-21', 'CZ2yAT7Sxc7S1BQApMZ8t6gftMu7FeeotFspzy3W.jpg', 'lc1uqjQBh5DhibP4l4xYv9gl7AavY3dq6bTiNFpu.jpg', '2023-03-26 14:58:07', '2023-03-26 14:58:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'Daney Arvayo', 'F13mz7vLPzaUfnfsEklWA1DIjiDJGds3als8DHv3.png', '2023-03-26 09:40:41', '2023-03-26 16:40:41'),
(4, 'Cesar Escobedo', 'PNMuIGfepWFdzGgb5pWTRiCz2UBVHSXNnWnqKq3C.png', '2023-03-26 15:39:48', '2023-03-26 15:39:48'),
(5, 'Idalia Padilla', '1sZHABGxNvzn1oBpV5111KfNIq14KQii6ZcJj0r8.jpg', '2023-03-26 09:41:07', '2023-03-26 16:41:07'),
(6, 'Cesar Amaya', 'bDSYhOfZMsgAWRSlN4numofg95uiqYVNeC0f96jO.png', '2023-03-26 16:41:32', '2023-03-26 16:41:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
