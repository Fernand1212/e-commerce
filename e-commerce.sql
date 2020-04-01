-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2020 a las 19:57:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-commerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` bigint(20) UNSIGNED NOT NULL,
  `catNombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `catNombre`, `created_at`, `updated_at`) VALUES
(1, 'niño', '2020-03-09 21:37:33', '2020-03-09 21:37:33'),
(2, 'Adulto', '2020-03-09 21:49:30', '2020-03-09 21:49:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_producto`
--

CREATE TABLE `compras_producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` bigint(20) UNSIGNED NOT NULL,
  `mkNombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Eslogan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mkImagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `mkNombre`, `Eslogan`, `mkImagen`, `created_at`, `updated_at`) VALUES
(2, 'Nike', 'Vea aquí los ultimos modelos', 'Bfk2JlO2opZuJNHdKWqTDbYgJXRpcXR7r2ablkLA.jpeg', '2020-03-09 21:45:38', '2020-03-09 21:45:38'),
(3, 'Adidas', 'Todos los talles y colores', '0p7AL310OTN1MFDDgHFJ1fnVzaXlzSeVtXmo93Zz.jpeg', '2020-03-09 21:48:16', '2020-03-09 21:48:16'),
(4, 'Vans', 'El calzado estrella', 'zGNOIp7JWQXZJ8NDMNeRPBKbf8jeXWzohvjH6BiN.png', '2020-03-09 21:48:36', '2020-03-09 21:48:36'),
(5, 'Converse', 'Unicas en su clase', '3xCYL9lWIVC9AJMdRJL1pX4CA9YfjilogCS3a1A5.jpeg', '2020-03-09 21:49:00', '2020-03-09 21:49:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2020_02_26_091253_create_users_table', 1),
(9, '2020_02_29_182717_create_marcas_table', 1),
(10, '2020_02_29_184137_create_categorias_table', 1),
(11, '2021_02_29_165707_create_productos_table', 1),
(12, '2022_03_01_195011_create_compras_producto_table', 1),
(13, '2020_03_29_090239_create_carrito_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `prdNombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdPrecio` int(11) NOT NULL,
  `marca` bigint(20) UNSIGNED NOT NULL,
  `categoria` bigint(20) UNSIGNED NOT NULL,
  `prdPresentacion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdStock` int(11) NOT NULL,
  `prdImagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `marca`, `categoria`, `prdPresentacion`, `prdStock`, `prdImagen`, `created_at`, `updated_at`) VALUES
(2, 'Nike Air Max 97', 4500, 2, 1, 'qwertuiohasfhmklkytresasfbnmk', 100, '4PQcYwRTUgBVcfV7XmwERDhItBgaSuqV5UaQdQnu.jpeg', '2020-03-09 21:47:41', '2020-04-01 19:41:44'),
(3, 'Nike Air Max Oketo', 4500, 2, 2, 'olkjhgfdsadrghjkllñlkjh', 50, '2W5eD2bUtwoln08Nlsu3xySZZXM8tJEUYfGXKOcD.jpeg', '2020-03-09 21:50:11', '2020-03-09 21:50:11'),
(4, 'Adidas New', 3000, 3, 2, 'lkhgfcxszaaxsdfhujilkjmnbvcdxsf', 70, 'LNKHuT7LMmhQQadLjKQqak5BWLCK1S84qL2kKSWs.jpeg', '2020-03-10 01:09:36', '2020-04-01 19:43:51'),
(5, 'Adidas No New', 5000, 3, 1, 'ehiugreuhugrerthjgresrgjbhgreth', 30, '3zk0Q2bHJbf4KWmpy3Mi0z05pLvVJvxKd9jcglKN.jpeg', '2020-03-10 01:21:10', '2020-03-10 01:21:10'),
(10, 'Chuck Taylor All Star HI', 6545, 5, 2, 'hfdazsdrfyujkigyfdseawdrtyjjh', 2333, 'eIVisJZMYACdiZ8GdyMHTWarVUj8qkCGBhtexgDj.jpeg', '2020-03-31 21:24:28', '2020-04-01 19:40:46'),
(11, 'Chuck Taylor All Star Lift', 6000, 5, 2, 'sdfhmjhfawserethnbvbv', 100, 'ZLhBDFZc18VuyhHhZClxmaC6b7SIsdZYibWs6Cei.jpeg', '2020-04-01 19:42:17', '2020-04-01 19:42:17'),
(12, 'Vans New', 4000, 4, 1, 'khfgdafgtjkhjnfsd5rtwewsxc', 202, 'JkQuILqTYSkxJcLiGni9wrmGwHg2raOSnsc0rHWD.jpeg', '2020-04-01 19:44:46', '2020-04-01 19:46:31'),
(13, 'Vans No New', 5500, 4, 2, 'yhtrfedsdvfgthjukilop', 200, 'QC2E1MJLFoOTpEboT9THY4Wzr68N1O37Asb0BeK1.jpeg', '2020-04-01 19:45:33', '2020-04-01 19:45:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimiento` year(4) NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `apellido`, `ciudad`, `barrio`, `postal`, `direccion`, `nacimiento`, `alias`, `telefono`, `avatar`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zoe', 'asdasd@asd.com', NULL, '$2y$10$6FvUjZNe8s47jAPSpP7cEu9JYUt9vrw96JmzAZ87oMaE3D6s7/ERy', 'sdasdasf', 'sdhghuout6', 'sertfugiy6dr', '1245', '123456', 2000, 'Zoe123', '15456218416', 'howzLFg8fQZeOhitRthPqDT6Tx6q0Xt0WXXCx9Sk.jpeg', 'admin', NULL, '2020-03-09 21:31:20', '2020-03-09 21:31:20'),
(2, 'zoe', 'felipa@asd.com', NULL, '$2y$10$PBPQSR2cifUVA8KS4yaC9uzWhdywjVgiWu.fBgxV8nqZ6N7mGJUVm', 'asdasda', 'sedghjhytf', 'cvbnjbgrexr', '1235', '123456', 2000, 'felipa', '123151351325', 'FtuCS4DeR04VooT8Cx0I1J0KvbGY7I0fu7Ep7GNW.jpeg', 'admin', NULL, '2020-03-10 01:19:43', '2020-03-10 01:19:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrito_producto_id_foreign` (`producto_id`),
  ADD KEY `carrito_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `compras_producto`
--
ALTER TABLE `compras_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compras_producto_producto_id_foreign` (`producto_id`),
  ADD KEY `compras_producto_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

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
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `productos_marca_foreign` (`marca`),
  ADD KEY `productos_categoria_foreign` (`categoria`);

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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `compras_producto`
--
ALTER TABLE `compras_producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `idMarca` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compras_producto`
--
ALTER TABLE `compras_producto`
  ADD CONSTRAINT `compras_producto_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_producto_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_foreign` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_marca_foreign` FOREIGN KEY (`marca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
