-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 20:57:24
-- Versión del servidor: 10.4.32-MariaDB-log
-- Versión de PHP: 8.2.12
create database upnCursos;
use upnCursos;
    
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upncursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `identificador` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apaterno` varchar(50) NOT NULL,
  `amaterno` varchar(50) NOT NULL,
  `perfil` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexo` char(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `identificador`, `nombre`, `apaterno`, `amaterno`, `perfil`, `email`, `password`, `sexo`, `fecha_nacimiento`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '84216', 'Edgar', 'Degante', 'Aguilar', 1, 'edgar.degante.a@gmail.com', '$2y$10$sRBdtMqXnwg1PzpgeJDX6eWUFmn.5SdOtZ1gBOg2.00k.5art6MSq', 'm', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(3, '1000', 'Estudiante', 'Tec', 'De Teziutlán', 1, '1000@mail.com', '$2y$10$KR8OFdZ3wL0my7ZS9fyXIODDwU.US7f/3MWNWqeVGxshlSsGcm.Qa', 'f', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(4, '1001', 'Estudiante', 'GALVEZ', 'Tec', 1, 'estudiante1001@mail.com', '$2y$10$i.xtyOku4EVpRkmVJ731DeH8BrG6mxblWxLUB17gC.SSOWbd0TI/2', 'f', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(5, '1003', 'Estudiante', 'GALVEZ', 'Tec', 1, '1003@teziutlan.tecnm.mx', '$2y$10$YTvyS4PAef3tLQVZu7yNXO1bcFkDjuQV5e158h5NGKlf9bF/kQcju', 'f', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(6, '12345678', '', '', 'TEC', 1, 'masemoyv1@teziutlan.tecnm.mx', '$2y$10$wBbP.2p66iCJo/oE7D2xzuUTDJyR5POtyiPSqEFY5lI0zFILBkhvK', '', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(9, '123456', 'Camila', 'Example', 'Last Name', 1, 'Camila2@teziutlan.tecnm.mx', '$2y$10$wBbP.2p66iCJo/oE7D2xzuUTDJyR5POtyiPSqEFY5lI0zFILBkhvK', 'F', '1990-01-01', 1, '2024-03-10 10:43:34', NULL, NULL),
(10, '842165', '', '', '', 1, 'masemoyv1@gmail.com', '$2y$10$gnsCduLdGncYFJCYJ1pU6.nSXFaZxB1neX0HXZMkM5vXY8ZPPPvWe', '', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL),
(11, '842166', '', '', '', 1, 'masemoiv1@gmail.com', '$2y$10$NzHc5JbShNMVhKVLVHWi8ugFNID8BuNXgItkE6MIPncJrzOQKgVom', '', '0000-00-00', 1, '0000-00-00 00:00:00', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificador` (`identificador`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuario_perfil` (`perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
