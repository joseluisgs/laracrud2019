-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-02-2019 a las 19:25:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `LaraCRUD`
--
CREATE DATABASE IF NOT EXISTS `LaraCRUD` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `LaraCRUD`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_31_182119_create_productos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pepe@pepe.com', '$2y$10$ZCUWvQDREhMyiPN0oKYwiOX9E.dO7YyT2CBwPNW//bt0b.nEUCDAa', '2019-02-07 09:33:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `marca` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `tipo` enum('juego','consola') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'juego',
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `marca`, `modelo`, `precio`, `tipo`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Nintendo', 'The Legend of Zelda: Breath of the Wild', 53.89, 'juego', 'storage/f5ytTizzP1FWRfyXvjuf8oyIe1BkTVZ2Bns4narq.jpeg', NULL, '2019-02-04 19:24:29'),
(2, 'Nintendo', 'Nintendo Switch  Azul Neón/Rojo Neón', 308.99, 'consola', 'storage/CqfQs7qUJ6he7DBfKqgxwhEtFIaPPMKnHRbpv98d.jpeg', '2019-02-04 19:29:00', '2019-02-04 19:29:12'),
(3, 'Sony', 'God of War 4', 55.95, 'juego', 'storage/8VfbylKOtbT2c62lhgBWgMAcflSeLpwJsPNfnk7d.jpeg', '2019-02-04 19:32:11', '2019-02-04 19:44:17'),
(4, 'Sony', 'Playstation 4 White Edition', 289.90, 'consola', 'storage/qhFcn5J7QTJ6icqV3kyyEJu0vwOcTszSbpaT6oDm.jpeg', '2019-02-04 19:33:53', '2019-02-04 19:33:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('normal','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pepe', 'pepe@pepe.com', NULL, '$2y$10$PAoQJNKuqbF1KOsH1eT6r.kcvbR.8bp/xJXGa00Hhjeml3wyHlk2u', 'admin', 'storage/Ij8GSUFISUilu3abNr9i1JQ1NumNn6GJvP3voQl9.jpeg', 'CWrPuvtUtRQtrj235mcc552Jgqtha36r0rvenaeyFZgqhe5X51pqogaWdLqJ', NULL, '2019-02-07 12:56:01'),
(2, 'maria', 'maria@maria.com', NULL, '$2y$10$JLqFh.fc.sOg2sFQRg/iCOh7G7CuZJu.KoieVSTgSphRT2qRYqTBu', 'normal', 'storage/iYVRj4YvEIj1ow13bSYFgeIYfHp3fsqVhzNKkfiY.jpeg', 'QnTMFVVNS4rUjzVzmBqBSjV7NXGy8hfqMmOhFpcRdoRQIcCnM1fYkUCQc7rT', NULL, '2019-02-04 12:48:10'),
(3, 'marta', 'marta@marta.com', NULL, '$2y$10$u1dD2OxzIFOxY57RKQ0ZwOcjhEKQOtwSvzBacHhVLyuqoZ5G/Bkie', 'admin', 'storage/ElyaIwY8fUeJiG6WEiUF7ggOrBS6V47nmaSkLItd.jpeg', 'g7gCYC9EFQR5gOfsAD6bTzb3EUCJe0IzwcE3TdATlU1rB7fr1QIziJmv3gFk', '2019-02-03 13:11:22', '2019-02-04 12:48:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
