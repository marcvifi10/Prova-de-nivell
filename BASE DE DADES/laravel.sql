-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 18:47:57
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autors`
--

CREATE TABLE `autors` (
  `nom` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autors`
--

INSERT INTO `autors` (`nom`) VALUES
('Autor 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorials`
--

CREATE TABLE `editorials` (
  `nom` varchar(200) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `llibres` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorials`
--

INSERT INTO `editorials` (`nom`, `autor`, `llibres`) VALUES
('Editorial 1', 'Ejemplo autor', 'llibre 1, llibre 2, llibre 3...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llibres`
--

CREATE TABLE `llibres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preu` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `llibres`
--

INSERT INTO `llibres` (`id`, `nom`, `autor`, `editorial`, `preu`, `created_at`, `updated_at`) VALUES
(1, 'sd', 'asdf', 'sdf', '50.55', NULL, NULL),
(2, 'Ejemplo 1', 'Marc', 'ask', '40.00', NULL, NULL),
(3, 'Libro 1', 'dc', 'sdf', '5.55', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`nom`);

--
-- Indices de la tabla `llibres`
--
ALTER TABLE `llibres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `llibres`
--
ALTER TABLE `llibres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
