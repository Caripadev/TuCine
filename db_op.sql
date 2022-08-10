-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2022 a las 03:33:22
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_op`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulos` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(110) NOT NULL,
  `id_categoria` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulos`, `descripcion`, `texto`, `imagen`, `id_categoria`) VALUES
(1, 'titulo1', 'descripcion 1', 'hola1', '0', 0),
(2, 'titulo2', 'descripcion2', 'hola2', '0', 0),
(3, 'titulo3', 'descripcion3', 'hola3', '0', 0),
(4, 'titulo4', 'dacripcion4', 'hoal4', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastname`, `city`, `state`, `postalcode`, `country`, `email`, `message`) VALUES
(1, 'Leonardo Said', 'Caripa Monzon', 'Barinas', 'Barinas', '5201', 'Albania', 'leo@leo.com', '123'),
(2, 'Leonardo Said', 'Caripa Monzon', 'Barinas', 'Barinas', '5201', 'Andorra', 'leonardosaid02@gmail.com', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `term` tinyint(1) NOT NULL,
  `oauth_pro` varchar(100) NOT NULL,
  `oauthid` varchar(100) NOT NULL,
  `locale` varchar(20) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `level`, `phone`, `pass`, `term`, `oauth_pro`, `oauthid`, `locale`, `picture`, `url`, `created_date`) VALUES
(1, 'Leonardo Said', 'Caripa Monzon', 'leo@leo.com', 2, '04141234567', '$2y$10$N.PjYy2afhCaahLOBLfF3eWGlMDUzYUuq46r77kxwX7mcJUrTmlHC', 0, '', '', '', '', '', '0000-00-00 00:00:00'),
(11, 'John Doe', '', 'johndoe@example.com', 0, '2026550143', '', 0, '', '', '', '', '', '2019-05-08 17:32:00'),
(21, 'David Deacon', '', 'daviddeacon@example.com', 0, '2025550121', '', 0, '', '', '', '', '', '2019-05-08 17:28:44'),
(31, 'Sam White', '', 'samwhite@example.com', 0, '2004550121', '', 0, '', '', '', '', '', '2019-05-08 17:29:27'),
(40, 'test', 'last', 'test@test.com', 1, '04145555555', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 0, '', '', '', 'https://lh3.googleusercontent.com/a/AATXAJzAd6owSnkLZjZsXQ15RS-4Ch7IX8vEP-PHeqYj=s96-c', '', '0000-00-00 00:00:00'),
(41, 'Leonardo Said', 'Caripa Monzon', 'l@l.com', 0, '04145699670', '$2y$10$1lLFF1GBtZG35fqOY3XEtu9OCfjgFQIo67TqI8YDA4FWX.Sco9UOC', 0, '', '', '', '', '', '0000-00-00 00:00:00'),
(43, 'Leonardo Said', 'Caripa Monzon', 'leonardosaid02@gmail.com', 0, '', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 0, 'google', '111384759224104932258', 'es', 'https://lh3.googleusercontent.com/a-/AOh14GhCTL2ctuS8XCgX-1SJXS1L2w6PFRUxtOcqoY4uYg=s96-c', '', '2022-05-27 18:02:47'),
(51, 'Ricky Waltz', '', 'rickywaltz@example.com', 0, '7862342390', '', 0, '', '', '', '', '', '2019-05-09 19:16:00'),
(61, 'Arnold Hall', '', 'arnoldhall@example.com', 0, '5089573579', '', 0, '', '', '', '', '', '2019-05-09 19:17:00'),
(71, 'Toni Adams', '', 'alvah1981@example.com', 0, '2603668738', '', 0, '', '', '', '', '', '2019-05-09 19:19:00'),
(81, 'Donald Perry', '', 'donald1983@example.com', 0, '7019007916', '', 0, '', '', '', '', '', '2019-05-09 19:20:00'),
(91, 'Joe McKinney', '', 'nadia.doole0@example.com', 0, '6153353674', '', 0, '', '', '', '', '', '2019-05-09 19:20:00'),
(101, 'Angela Horst', '', 'angela1977@example.com', 0, '3094234980', '', 0, '', '', '', '', '', '2019-05-09 19:21:00'),
(111, 'James Jameson', '', 'james1965@example.com', 0, '4002349823', '', 0, '', '', '', '', '', '2019-05-09 19:32:00'),
(121, 'Daniel Deacon', '', 'danieldeacon@example.com', 0, '5003423549', '', 0, '', '', '', '', '', '2019-05-09 19:33:00'),
(411, 'Colin Chaplin', '', 'colinchaplin@example.com', 0, '2022550178', '', 0, '', '', '', '', '', '2019-05-08 17:29:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=412;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
