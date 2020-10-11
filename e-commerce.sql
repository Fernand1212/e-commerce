
--

INSERT INTO `categorias` (`idCategoria`, `catNombre`, `created_at`, `updated_at`) VALUES
(1, 'niño', '2020-03-09 21:37:33', '2020-03-09 21:37:33'),
(2, 'Adulto', '2020-03-09 21:49:30', '2020-03-09 21:49:30');


--

INSERT INTO `marcas` (`idMarca`, `mkNombre`, `Eslogan`, `mkImagen`, `created_at`, `updated_at`) VALUES
(2, 'Nike', 'Vea aquí los ultimos modelos', 'Bfk2JlO2opZuJNHdKWqTDbYgJXRpcXR7r2ablkLA.jpeg', '2020-03-09 21:45:38', '2020-03-09 21:45:38'),
(3, 'Adidas', 'Todos los talles y colores', '0p7AL310OTN1MFDDgHFJ1fnVzaXlzSeVtXmo93Zz.jpeg', '2020-03-09 21:48:16', '2020-03-09 21:48:16'),
(4, 'Vans', 'El calzado estrella', 'zGNOIp7JWQXZJ8NDMNeRPBKbf8jeXWzohvjH6BiN.png', '2020-03-09 21:48:36', '2020-03-09 21:48:36'),
(5, 'Converse', 'Unicas en su clase', '3xCYL9lWIVC9AJMdRJL1pX4CA9YfjilogCS3a1A5.jpeg', '2020-03-09 21:49:00', '2020-03-09 21:49:00');


--

INSERT INTO `productos` (`idProducto`, `prdNombre`, `prdPrecio`, `marca`, `categorias`, `prdPresentacion`, `prdStock`, `prdImagen`, `created_at`, `updated_at`) VALUES
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `apellido`, `ciudad`, `barrio`, `postal`, `direccion`, `nacimiento`, `alias`, `telefono`, `avatar`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zoe', 'asdasd@asd.com', NULL, '$2y$10$6FvUjZNe8s47jAPSpP7cEu9JYUt9vrw96JmzAZ87oMaE3D6s7/ERy', 'sdasdasf', 'sdhghuout6', 'sertfugiy6dr', '1245', '123456', 2000, 'Zoe123', '15456218416', 'howzLFg8fQZeOhitRthPqDT6Tx6q0Xt0WXXCx9Sk.jpeg', 'admin', NULL, '2020-03-09 21:31:20', '2020-03-09 21:31:20'),
(2, 'zoe', 'felipa@asd.com', NULL, '$2y$10$PBPQSR2cifUVA8KS4yaC9uzWhdywjVgiWu.fBgxV8nqZ6N7mGJUVm', 'asdasda', 'sedghjhytf', 'cvbnjbgrexr', '1235', '123456', 2000, 'felipa', '123151351325', 'FtuCS4DeR04VooT8Cx0I1J0KvbGY7I0fu7Ep7GNW.jpeg', 'admin', NULL, '2020-03-10 01:19:43', '2020-03-10 01:19:43');

-
