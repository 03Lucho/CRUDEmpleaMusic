/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `c-crea` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `c-crea`;

CREATE TABLE IF NOT EXISTS `administradores` (
  `idadministrador` int NOT NULL AUTO_INCREMENT,
  `email` varchar(500) NOT NULL DEFAULT '0',
  `contrasena` varchar(500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idadministrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `administradores` (`idadministrador`, `email`, `contrasena`) VALUES
	(1, 'luiszamudio@example.com', '123456321');

CREATE TABLE IF NOT EXISTS `agendas` (
  `idagenda` int NOT NULL AUTO_INCREMENT,
  `idaprendiz` int NOT NULL,
  `idclase` int NOT NULL,
  `fechaagendada` datetime NOT NULL,
  `fechahora` timestamp NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idagenda`),
  KEY `fkaprendizagenda` (`idaprendiz`),
  KEY `fkclasesagenda` (`idclase`),
  CONSTRAINT `fkaprendizagenda` FOREIGN KEY (`idaprendiz`) REFERENCES `aprendizes` (`idaprendiz`),
  CONSTRAINT `fkclasesagenda` FOREIGN KEY (`idclase`) REFERENCES `clases` (`idclase`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `agendas` (`idagenda`, `idaprendiz`, `idclase`, `fechaagendada`, `fechahora`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 1, 11, '2023-07-13 09:00:00', '2023-07-13 14:00:00', 'Clase de matemáticas avanzadas', NULL, NULL),
	(2, 2, 2, '2023-07-14 15:30:00', '2023-07-14 20:30:00', 'Lección de guitarra para principiantes', NULL, NULL),
	(3, 3, 13, '2023-07-15 17:00:00', '2023-07-15 22:00:00', 'Tutoría de inglés para nivel intermedio', NULL, NULL),
	(4, 17, 1, '2023-07-16 10:00:00', '2023-07-16 15:00:00', 'Sesión de yoga para relajación', NULL, NULL),
	(5, 5, 5, '2023-07-17 14:00:00', '2023-07-17 19:00:00', 'Entrenamiento de tenis para competición', NULL, NULL),
	(6, 6, 16, '2023-07-18 16:30:00', '2023-07-18 21:30:00', 'Clase de pintura al óleo', NULL, NULL),
	(7, 7, 7, '2023-07-19 11:00:00', '2023-07-19 16:00:00', 'Lección de piano para todos los niveles', NULL, NULL),
	(8, 8, 8, '2023-07-20 13:30:00', '2023-07-20 18:30:00', 'Tutoría de física para estudiantes universitarios', NULL, NULL),
	(9, 3, 19, '2023-07-21 09:30:00', '2023-07-21 14:30:00', 'Sesión de meditación para principiantes', NULL, NULL),
	(10, 10, 20, '2023-07-22 16:00:00', '2023-07-22 21:00:00', 'Entrenamiento de fútbol para niños', NULL, NULL),
	(11, 11, 11, '2023-07-23 12:00:00', '2023-07-23 17:00:00', 'Clase de canto para mejorar técnica vocal', NULL, NULL),
	(12, 12, 12, '2023-07-24 15:00:00', '2023-07-24 20:00:00', 'Lección de violín para estudiantes avanzados', NULL, NULL),
	(13, 11, 15, '2023-07-25 18:00:00', '2023-07-25 23:00:00', 'Tutoría de química para exámenes', NULL, NULL),
	(14, 14, 5, '2023-07-26 10:30:00', '2023-07-26 15:30:00', 'Sesión de pilates para fortalecimiento corporal', NULL, NULL),
	(15, 15, 2, '2023-07-27 14:30:00', '2023-07-27 19:30:00', 'Entrenamiento de natación para adultos', NULL, NULL),
	(16, 16, 20, '2023-07-28 16:00:00', '2023-07-28 21:00:00', 'Clase de ballet para niños y niñas', NULL, NULL),
	(17, 10, 10, '2023-07-29 11:30:00', '2023-07-29 16:30:00', 'Lección de saxofón para todos los niveles', NULL, NULL),
	(18, 8, 8, '2023-07-30 13:00:00', '2023-07-30 18:00:00', 'Tutoría de historia para estudiantes de secundaria', NULL, NULL),
	(19, 19, 3, '2023-07-31 09:30:00', '2023-07-31 14:30:00', 'Sesión de mindfulness para reducir el estrés', NULL, NULL),
	(20, 20, 10, '2023-08-01 17:00:00', '2023-08-01 22:00:00', 'Entrenamiento de baloncesto para jóvenes', NULL, NULL),
	(21, 11, 23, '2023-07-24 00:00:00', '2023-08-24 18:16:09', 'hjhgyuaffuyawd', '2023-08-25 01:22:39', '2023-08-25 01:22:39');

CREATE TABLE IF NOT EXISTS `aprendizes` (
  `idaprendiz` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefono` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Imagen` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `documento` varchar(12) DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`idaprendiz`),
  KEY `aprendizes_user_id_foreign` (`user_id`),
  CONSTRAINT `aprendizes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `aprendizes` (`idaprendiz`, `nombre`, `apellido`, `telefono`, `descripcion`, `created_at`, `updated_at`, `Imagen`, `documento`, `user_id`) VALUES
	(1, 'Juan', 'Pérez', '1234567890', 'Estudiante de música interesado en aprender piano', NULL, NULL, NULL, NULL, 0),
	(2, 'María', 'González', '9876543210', 'Apasionada por la guitarra y deseando mejorar mis habilidades', NULL, NULL, NULL, NULL, 0),
	(3, 'Luis', 'Rodríguez', '7891234560', 'Interesado en la batería y buscando un profesor', NULL, NULL, NULL, NULL, 0),
	(4, 'Laura', 'Hernández', '6549873210', 'Busco clases de saxofón para mejorar mis habilidades musicales', NULL, NULL, NULL, NULL, 0),
	(5, 'Carlos', 'Sánchez', '9873216540', 'Deseo aprender a tocar el bajo eléctrico', NULL, NULL, NULL, NULL, 0),
	(6, 'Miguel', 'Torres', '4561237890', 'Interesado en aprender piano y teoría musical', NULL, NULL, NULL, NULL, 0),
	(7, 'Carmen', 'Vargas', '7894561230', 'Busco clases de guitarra eléctrica para tocar rock', NULL, NULL, NULL, NULL, 0),
	(8, 'Pablo', 'Flores', '3217894560', 'Aspirante a compositor buscando conocimientos en armonía musical', NULL, '2023-08-16 22:59:28', '1692208768_399292.jpg', NULL, 0),
	(9, 'Isabel', 'Mendoza', '6541237890', 'Amante del jazz y buscando clases de improvisación', NULL, '2023-08-16 22:45:55', '1692207955__d2f45fb9-7f34-4fd2-a6df-50a7433f4334.jpg', NULL, 0),
	(10, 'Jorge', 'Ortega', '9874561230', 'Deseo aprender a tocar la flauta traversa', NULL, '2023-08-16 22:58:25', '1692208705_258107.jpg', '111111111', 0),
	(11, 'Elena', 'Ruiz', '1234567890', 'Estudiante de música clásica y deseando mejorar en el piano', NULL, '2023-08-15 03:17:56', '1692051476__c9b83294-aaf3-4eb9-8415-4be87604051c.jpg', NULL, 0),
	(12, 'Carlos', 'Silva', '7891234560', 'Apasionado por el canto lírico y buscando un profesor de canto', NULL, '2023-08-16 22:59:00', '1692208740__75fe1602-ae24-4836-810c-f44f40f06d84.jpg', NULL, 0),
	(13, 'Óscar', 'Rojas', '6549873210', 'Deseo aprender a tocar el piano de forma autodidacta', NULL, '2023-08-17 03:56:10', '1692226570_3-33069_kiln-of-the-first-flame-dark-souls-wallpaper.jpg', NULL, 0),
	(14, 'Clara', 'Fuentes', '3217894560', 'Interesada en clases de canto pop para cantar en eventos', NULL, NULL, NULL, NULL, 0),
	(15, 'erik', 'hernandes', '3221289083', 'Hola quiero aprender percusion', '2023-08-15 01:55:43', '2023-08-15 03:17:41', '1692051461__ca4214e7-b6a1-4e42-93e3-1f4e5e0c8c6f.jpg', NULL, 0),
	(16, 'Gabriel', 'Martinez', '3122904567', 'nuevo en musica', '2023-08-15 02:28:03', '2023-08-15 02:41:37', '1692049296_3819574.jpg', NULL, 0),
	(17, 'Juan', 'Motivar Moreno', '3208821875', 'Hola soy juan y me encanta la armónica', '2023-08-16 23:01:48', '2023-08-16 23:02:23', '1692208927__d2f45fb9-7f34-4fd2-a6df-50a7433f4334.jpg', NULL, 0);

CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tipo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcategoria`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `categorias` (`idcategoria`, `nombre`, `tipo`, `created_at`, `updated_at`) VALUES
	(1, 'Piano', 'Teclado', NULL, NULL),
	(2, 'Guitarra', 'Cuerdas', NULL, NULL),
	(3, 'Violin', 'Cuerdas', NULL, NULL),
	(4, 'Bateria', 'Percusion', NULL, NULL),
	(5, 'Flauta', 'Vientos', NULL, NULL),
	(6, 'Saxofon', 'Vientos', NULL, NULL),
	(7, 'Trompeta', 'Vientos', NULL, NULL),
	(8, 'Bajo', 'Cuerdas', NULL, NULL),
	(9, 'Violonchelo', 'Cuerdas', NULL, NULL),
	(10, 'Trombon', 'Vientos', NULL, NULL),
	(11, 'Clarinete', 'Vientos', NULL, NULL),
	(12, 'Arpa', 'Cuerdas', NULL, NULL),
	(13, 'Acordeon', 'Teclado', NULL, NULL),
	(14, 'Xilofono', 'Percusion', NULL, NULL),
	(15, 'Oboe', 'Vientos', NULL, NULL),
	(16, 'Tuba', 'Vientos', NULL, NULL),
	(17, 'Baritono', 'Vientos', NULL, NULL),
	(18, 'Platillos', 'Percusion', NULL, NULL),
	(19, 'Congas', 'Percusion', NULL, NULL),
	(20, 'Maracas', 'Percusion', NULL, NULL),
	(21, 'Piano', 'Teclado', NULL, NULL),
	(22, 'Guitarra', 'Cuerdas', NULL, NULL),
	(23, 'Violin', 'Cuerdas', NULL, NULL),
	(24, 'Bateria', 'Percusion', NULL, NULL),
	(25, 'Flauta', 'Vientos', NULL, NULL),
	(26, 'Saxofon', 'Vientos', NULL, NULL),
	(27, 'Trompeta', 'Vientos', NULL, NULL),
	(28, 'Bajo', 'Cuerdas', NULL, NULL),
	(29, 'Violonchelo', 'Cuerdas', NULL, NULL),
	(30, 'Trombon', 'Vientos', NULL, NULL),
	(31, 'Clarinete', 'Vientos', NULL, NULL),
	(32, 'Arpa', 'Cuerdas', NULL, NULL),
	(33, 'Acordeon', 'Teclado', NULL, NULL),
	(34, 'Xilofono', 'Percusion', NULL, NULL),
	(35, 'Oboe', 'Vientos', NULL, NULL),
	(36, 'Tuba', 'Vientos', NULL, NULL),
	(37, 'Baritono', 'Vientos', NULL, NULL),
	(38, 'Platillos', 'Percusion', NULL, NULL),
	(39, 'Congas', 'Percusion', NULL, NULL),
	(40, 'Maracas', 'Percusion', NULL, NULL),
	(41, 'Piano', 'Teclado', NULL, NULL),
	(42, 'Guitarra', 'Cuerdas', NULL, NULL),
	(43, 'Violin', 'Cuerdas', NULL, NULL),
	(44, 'Bateria', 'Percusion', NULL, NULL),
	(45, 'Flauta', 'Vientos', NULL, NULL),
	(46, 'Saxofon', 'Vientos', NULL, NULL),
	(47, 'Trompeta', 'Vientos', NULL, NULL),
	(48, 'Bajo', 'Cuerdas', NULL, NULL),
	(49, 'Violonchelo', 'Cuerdas', NULL, NULL),
	(50, 'Trombon', 'Vientos', NULL, NULL),
	(51, 'Clarinete', 'Vientos', NULL, NULL),
	(52, 'Arpa', 'Cuerdas', NULL, NULL),
	(53, 'Acordeon', 'Teclado', NULL, NULL),
	(54, 'Xilofono', 'Percusion', NULL, NULL),
	(55, 'Oboe', 'Vientos', NULL, NULL),
	(56, 'Tuba', 'Vientos', NULL, NULL),
	(57, 'Baritono', 'Vientos', NULL, NULL),
	(58, 'Platillos', 'Percusion', NULL, NULL),
	(59, 'Congas', 'Percusion', NULL, NULL),
	(60, 'Maracas', 'Percusion', NULL, NULL),
	(61, 'Piano', 'Teclado', NULL, NULL),
	(62, 'Guitarra', 'Cuerdas', NULL, NULL),
	(63, 'Violin', 'Cuerdas', NULL, NULL),
	(64, 'Bateria', 'Percusion', NULL, NULL),
	(65, 'Flauta', 'Vientos', NULL, NULL),
	(66, 'Saxofon', 'Vientos', NULL, NULL),
	(67, 'Trompeta', 'Vientos', NULL, NULL),
	(68, 'Bajo', 'Cuerdas', NULL, NULL),
	(69, 'Violonchelo', 'Cuerdas', NULL, NULL),
	(70, 'Trombon', 'Vientos', NULL, NULL),
	(71, 'Clarinete', 'Vientos', NULL, NULL),
	(72, 'Arpa', 'Cuerdas', NULL, NULL),
	(73, 'Acordeon', 'Teclado', NULL, NULL),
	(74, 'Xilofono', 'Percusion', NULL, NULL),
	(75, 'Oboe', 'Vientos', NULL, NULL),
	(76, 'Tuba', 'Vientos', NULL, NULL),
	(77, 'Baritono', 'Vientos', NULL, NULL),
	(78, 'Platillos', 'Percusion', NULL, NULL),
	(79, 'Congas', 'Percusion', NULL, NULL),
	(80, 'Maracas', 'Percusion', NULL, NULL),
	(81, 'Bonjo', 'Cuerda', '2023-08-17 00:38:47', '2023-08-17 00:38:47');

CREATE TABLE IF NOT EXISTS `clases` (
  `idclase` int NOT NULL AUTO_INCREMENT,
  `idprofesor` int NOT NULL,
  `idcategoria` int NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `costo` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horafin` time DEFAULT NULL,
  `horainicio` time DEFAULT NULL,
  `cupos` int NOT NULL,
  PRIMARY KEY (`idclase`),
  KEY `fkprofesorclase` (`idprofesor`),
  KEY `fkinstrumentosclases` (`idcategoria`) USING BTREE,
  CONSTRAINT `fkinstrumentosclases` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`),
  CONSTRAINT `fkprofesorclase` FOREIGN KEY (`idprofesor`) REFERENCES `profesores` (`idprofesor`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `clases` (`idclase`, `idprofesor`, `idcategoria`, `nombre`, `descripcion`, `costo`, `created_at`, `updated_at`, `fecha`, `horafin`, `horainicio`, `cupos`) VALUES
	(1, 10, 11, 'Clase de piano', 'Aprende a tocar el piano con un profesor experimentado', 50000, NULL, NULL, NULL, NULL, NULL, 5),
	(2, 2, 20, 'Lección de guitarra', 'Descubre los secretos de la guitarra de la mano de un experto', 40000, NULL, NULL, NULL, NULL, NULL, 2),
	(3, 13, 10, 'Tutoría de violín', 'Mejora tu técnica y expresión en el violín con un tutor profesional', 35000, NULL, NULL, NULL, NULL, NULL, 3),
	(4, 4, 1, 'Sesión de batería', 'Aprende a tocar la batería y desarrolla tu ritmo y coordinación', 30000, NULL, NULL, NULL, NULL, NULL, 4),
	(5, 20, 2, 'Entrenamiento de guitarra eléctrica', 'Mejora tus habilidades en la guitarra eléctrica con un entrenador especializado', 60000, '2023-08-31 17:52:16', '2023-08-31 17:52:18', '2023-09-11', '10:46:50', '11:46:53', 10),
	(6, 16, 5, 'Clase de flauta traversa', 'Aprende a tocar la flauta traversa y descubre su hermoso sonido', 35000, NULL, NULL, NULL, NULL, NULL, 5),
	(7, 1, 7, 'Lección de saxofón', 'Descubre y mejora tu técnica en el saxofón con un profesor de renombre', 450000, NULL, NULL, NULL, NULL, NULL, 6),
	(8, 3, 4, 'Tutoría de clarinete', 'Recibe apoyo y orientación en el aprendizaje del clarinete', 30000, NULL, NULL, NULL, NULL, NULL, 7),
	(9, 5, 5, 'Sesión de guitarra acústica', 'Explora el mundo de la guitarra acústica y aprende técnicas populares', 250000, NULL, NULL, NULL, NULL, NULL, 8),
	(10, 11, 16, 'Entrenamiento de violonchelo', 'Desarrolla tu habilidad y musicalidad en el violonchelo con un entrenador profesional', 50000, NULL, NULL, NULL, NULL, NULL, 9),
	(11, 19, 12, 'Clase de teclado', 'Aprende a tocar el teclado y descubre sus infinitas posibilidades musicales', 40000, NULL, NULL, NULL, NULL, NULL, 10),
	(12, 11, 18, 'Lección de bajo eléctrico', 'Descubre el groove del bajo eléctrico y aprende a crear líneas de bajo', 45000, NULL, NULL, NULL, NULL, NULL, 11),
	(13, 3, 20, 'Tutoría de trompeta', 'Mejora tu técnica y sonido en la trompeta con la ayuda de un tutor experimentado', 30000, NULL, NULL, NULL, NULL, NULL, 12),
	(14, 4, 19, 'Sesión de percusión', 'Explora la diversidad de los instrumentos de percusión y mejora tu ritmo', 250000, NULL, NULL, NULL, NULL, NULL, 11),
	(15, 20, 11, 'Entrenamiento de viola', 'Desarrolla tus habilidades en la viola y disfruta de su sonido cálido y profundo', 40000, '2023-08-31 17:52:17', '2023-08-31 17:52:19', '2023-10-12', '12:52:22', '06:42:22', 11),
	(16, 16, 13, 'Clase de arpa', 'Aprende a tocar el arpa y sumérgete en su belleza y expresividad musical', 35000, NULL, NULL, NULL, NULL, NULL, 13),
	(17, 17, 10, 'Lección de trombón', 'Mejora tu técnica y musicalidad en el trombón con la guía de un profesor experto', 500000, NULL, NULL, NULL, NULL, NULL, 14),
	(18, 8, 4, 'Tutoría de oboe', 'Recibe apoyo y asesoramiento en el aprendizaje del oboe', 30000, NULL, NULL, NULL, NULL, NULL, 15),
	(19, 2, 5, 'Sesión de guitarra flamenca', 'Explora el arte del flamenco y mejora tu técnica en la guitarra flamenca', 40000, NULL, NULL, NULL, NULL, NULL, 1),
	(20, 19, 7, 'Entrenamiento de violín eléctrico', 'Descubre el mundo moderno del violín eléctrico y mejora tu habilidad en él', 550000, NULL, NULL, NULL, NULL, NULL, 3),
	(21, 2, 46, 'saxofon', 'clase de saxofon', 20000, '2023-08-17 00:50:56', '2023-08-17 00:50:56', '2023-09-17', '15:00:00', '12:30:00', 4),
	(22, 2, 52, 'non', 'nnn', 121312, '2023-08-17 00:53:01', '2023-08-17 00:55:48', '2023-09-22', '16:02:00', '12:32:00', 5),
	(23, 2, 33, 'acordeon', 'hjghgjhghgjgd', 1000, '2023-08-17 00:55:39', '2023-08-25 01:22:39', '2023-09-30', '12:30:00', '11:11:00', 5),
	(24, 2, 73, 'andres', 'solo enseño', 20000, '2023-08-31 22:55:54', '2023-08-31 22:55:54', '2023-09-22', '16:59:00', '14:00:00', 7),
	(25, 2, 73, 'andres', 'solo enseño', 20000, '2023-08-31 22:58:32', '2023-08-31 22:58:32', '2023-09-02', '16:59:00', '14:00:00', 8),
	(26, 40, 73, 'Clase de acordeon', 'quien sabe', 20000, '2023-08-31 23:01:04', '2023-08-31 23:01:04', '2023-08-30', '18:07:00', '17:03:00', 9),
	(27, 40, 24, 'enseño lo que sea', 'Enseño semantica y todo lo basico', 50000, '2023-08-31 23:04:23', '2023-08-31 23:04:23', '2023-09-03', '16:06:00', '12:04:00', 9),
	(28, 40, 12, 'Oscar', 'quien sabe', 50000, '2023-08-31 23:07:27', '2023-08-31 23:07:27', '2023-09-10', '18:12:00', '14:08:00', 11),
	(29, 40, 36, 'anastasio', 'Enseño semantica y todo lo basico', 46000, '2023-08-31 23:08:58', '2023-08-31 23:08:58', '2023-09-06', '09:11:00', '05:21:00', 12),
	(30, 40, 12, 'Clase de acordeon', 'quien sabe', 50000, '2023-08-31 23:11:55', '2023-08-31 23:11:55', '2023-09-03', '19:16:00', '18:14:00', 6);

CREATE TABLE IF NOT EXISTS `comentarios` (
  `idcomentario` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `fechahora` datetime DEFAULT NULL,
  `descripcion` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `comentarios` (`idcomentario`, `tipo`, `fechahora`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Sugerencia', '2023-09-27 21:56:20', 'agregen lo de asistencia', '2023-09-28 02:56:20', '2023-09-28 02:56:20'),
	(2, 'Sugerencia', '2023-09-27 21:56:51', 'agregen lo de asistencia', '2023-09-28 02:56:51', '2023-09-28 02:56:51'),
	(3, 'Queja', '2023-09-27 21:58:12', 'no me gustan las clases', '2023-09-28 02:58:12', '2023-09-28 02:58:12'),
	(4, 'Reclamo', '2023-09-27 22:00:57', 'muchas clases', '2023-09-28 03:00:57', '2023-09-28 03:00:57');

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_09_25_185908_create_roles_table', 1),
	(7, '2023_09_25_190007_create_role_user_table', 1),
	(8, '2023_09_27_215440_agregar_columnas_a_tabla', 2);

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `profesores` (
  `idprofesor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefono` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(700) NOT NULL,
  `aniosexperiencia` int NOT NULL,
  `especialidad` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Imagen` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `documento` varchar(12) DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`idprofesor`),
  KEY `profesores_user_id_foreign` (`user_id`),
  CONSTRAINT `profesores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `profesores` (`idprofesor`, `nombre`, `apellido`, `telefono`, `descripcion`, `aniosexperiencia`, `especialidad`, `created_at`, `updated_at`, `Imagen`, `documento`, `user_id`) VALUES
	(1, 'Juan', 'Pérez', '123456789', 'Experto en desarrollo web', 5, 'Guitarra, violin y arpa', NULL, NULL, NULL, NULL, 0),
	(2, 'María', 'González', '987654322', 'Especialista en marketing digital', 8, 'Guitarra electrica y bateria', NULL, '2023-09-26 22:17:13', '1692821650_3893176.png', '1005609054', 3),
	(3, 'Pedro', 'López', '456789123', 'Ingeniero de software con experiencia en inteligencia artificial', 10, 'saxofon y tuba', NULL, NULL, NULL, NULL, 0),
	(4, 'Ana', 'Martínez', '321654987', 'Diseñadora gráfica con amplia experiencia en branding', 7, 'baritono', NULL, NULL, NULL, NULL, 0),
	(5, 'Luis', 'Rodríguez', '789123456', 'Experto en análisis de datos y machine learning', 6, 'flauta, tompeta y piano', NULL, NULL, NULL, NULL, 0),
	(6, 'Laura', 'Hernández', '654987321', 'Arquitecta con experiencia en diseño sostenible', 9, 'piano', NULL, NULL, NULL, NULL, 0),
	(7, 'Carlos', 'Sánchez', '987123654', 'Consultor financiero con experiencia en inversiones internacionales', 12, 'violonchelo', NULL, NULL, NULL, NULL, 0),
	(8, 'Sofía', 'Gómez', '123789456', 'Experta en gestión de proyectos y liderazgo de equipos', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(9, 'Miguel', 'Torres', '456123789', 'Desarrollador de aplicaciones móviles con experiencia en iOS y Android', 4, 'trombon y clarinete', NULL, NULL, NULL, NULL, 0),
	(10, 'Carmen', 'Vargas', '789456123', 'Especialista en redes sociales y estrategias de marketing digital', 6, 'maracas y congas', NULL, NULL, NULL, NULL, 0),
	(11, 'Pablo', 'Flores', '321789456', 'Ingeniero civil con experiencia en construcción de puentes y estructuras', 10, 'platillos, tuba y oboe', NULL, NULL, NULL, NULL, 0),
	(12, 'Isabel', 'Mendoza', '654123789', 'Diseñadora de moda con experiencia en pasarelas internacionales', 7, 'guitarra y violin', NULL, NULL, NULL, NULL, 0),
	(13, 'David', 'Ortega', '987456123', 'Experto en seguridad informática y hacking ético', 9, 'violin y arpa y xilofono', NULL, NULL, NULL, NULL, 0),
	(14, 'Elena', 'Ruiz', '123456789', 'Psicóloga especializada en terapia familiar', 8, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(15, 'Javier', 'Silva', '789123456', 'Chef internacional con experiencia en cocina fusión', 12, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(16, 'Paula', 'Navarro', '456789123', 'Investigadora científica en biología marina', 6, 'xilofono', NULL, NULL, NULL, '1231213243', 0),
	(17, 'Roberto', 'González', '321654987', 'Periodista con amplia experiencia en cobertura de conflictos internacionales', 11, 'acordeon', NULL, NULL, NULL, NULL, 0),
	(18, 'Patricia', 'Luna', '987321654', 'Abogada especializada en derechos humanos', 9, 'platillos y tuba', NULL, NULL, NULL, NULL, 0),
	(19, 'Óscar', 'Rojas', '654987321', 'Ingeniero eléctrico con experiencia en energías renovables', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(20, 'Clara', 'Fuentes', '123654987', 'Artista plástica con exposiciones en galerías de renombre', 7, 'clarinete', NULL, NULL, NULL, NULL, 0),
	(21, 'Juan', 'Pérez', '123456789', 'Experto en desarrollo web', 5, 'Guitarra, violin y arpa', NULL, NULL, NULL, NULL, 0),
	(22, 'María', 'González', '987654321', 'Especialista en marketing digital', 8, 'Guitarra electrica y bateria', NULL, NULL, NULL, NULL, 0),
	(23, 'Pedro', 'López', '456789123', 'Ingeniero de software con experiencia en inteligencia artificial', 10, 'saxofon y tuba', NULL, NULL, NULL, NULL, 0),
	(24, 'Ana', 'Martínez', '321654987', 'Diseñadora gráfica con amplia experiencia en branding', 7, 'baritono', NULL, NULL, NULL, NULL, 0),
	(25, 'Luis', 'Rodríguez', '789123456', 'Experto en análisis de datos y machine learning', 6, 'flauta, tompeta y piano', NULL, NULL, NULL, NULL, 0),
	(26, 'Laura', 'Hernández', '654987321', 'Arquitecta con experiencia en diseño sostenible', 9, 'piano', NULL, NULL, NULL, NULL, 0),
	(27, 'Carlos', 'Sánchez', '987123654', 'Consultor financiero con experiencia en inversiones internacionales', 12, 'violonchelo', NULL, NULL, NULL, NULL, 0),
	(28, 'Sofía', 'Gómez', '123789456', 'Experta en gestión de proyectos y liderazgo de equipos', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(29, 'Miguel', 'Torres', '456123789', 'Desarrollador de aplicaciones móviles con experiencia en iOS y Android', 4, 'trombon y clarinete', NULL, NULL, NULL, NULL, 0),
	(30, 'Carmen', 'Vargas', '789456123', 'Especialista en redes sociales y estrategias de marketing digital', 6, 'maracas y congas', NULL, NULL, NULL, NULL, 0),
	(31, 'Pablo', 'Flores', '321789456', 'Ingeniero civil con experiencia en construcción de puentes y estructuras', 10, 'platillos, tuba y oboe', NULL, NULL, NULL, NULL, 0),
	(32, 'Isabel', 'Mendoza', '654123789', 'Diseñadora de moda con experiencia en pasarelas internacionales', 7, 'guitarra y violin', NULL, NULL, NULL, NULL, 0),
	(33, 'David', 'Ortega', '987456123', 'Experto en seguridad informática y hacking ético', 9, 'violin y arpa y xilofono', NULL, NULL, NULL, NULL, 0),
	(34, 'Elena', 'Ruiz', '123456789', 'Psicóloga especializada en terapia familiar', 8, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(35, 'Javier', 'Silva', '789123456', 'Chef internacional con experiencia en cocina fusión', 12, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(36, 'Paula', 'Navarro', '456789123', 'Investigadora científica en biología marina', 6, 'xilofono', NULL, NULL, NULL, NULL, 0),
	(37, 'Roberto', 'González', '321654987', 'Periodista con amplia experiencia en cobertura de conflictos internacionales', 11, 'acordeon', NULL, NULL, NULL, NULL, 0),
	(38, 'Patricia', 'Luna', '987321654', 'Abogada especializada en derechos humanos', 9, 'platillos y tuba', NULL, NULL, NULL, NULL, 0),
	(39, 'Óscar', 'Rojas', '654987321', 'Ingeniero eléctrico con experiencia en energías renovables', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(40, 'Clara', 'Fuentes', '123654987', 'Artista plástica con exposiciones en galerías de renombre', 7, 'clarinete', NULL, NULL, NULL, NULL, 0),
	(41, 'Juan', 'Pérez', '123456789', 'Experto en desarrollo web', 5, 'Guitarra, violin y arpa', NULL, NULL, NULL, NULL, 0),
	(42, 'María', 'González', '987654321', 'Especialista en marketing digital', 8, 'Guitarra electrica y bateria', NULL, NULL, NULL, NULL, 0),
	(43, 'Pedro', 'López', '456789123', 'Ingeniero de software con experiencia en inteligencia artificial', 10, 'saxofon y tuba', NULL, NULL, NULL, NULL, 0),
	(44, 'Ana', 'Martínez', '321654987', 'Diseñadora gráfica con amplia experiencia en branding', 7, 'baritono', NULL, NULL, NULL, NULL, 0),
	(45, 'Luis', 'Rodríguez', '789123456', 'Experto en análisis de datos y machine learning', 6, 'flauta, tompeta y piano', NULL, NULL, NULL, NULL, 0),
	(46, 'Laura', 'Hernández', '654987321', 'Arquitecta con experiencia en diseño sostenible', 9, 'piano', NULL, NULL, NULL, NULL, 0),
	(47, 'Carlos', 'Sánchez', '987123654', 'Consultor financiero con experiencia en inversiones internacionales', 12, 'violonchelo', NULL, NULL, NULL, NULL, 0),
	(48, 'Sofía', 'Gómez', '123789456', 'Experta en gestión de proyectos y liderazgo de equipos', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(49, 'Miguel', 'Torres', '456123789', 'Desarrollador de aplicaciones móviles con experiencia en iOS y Android', 4, 'trombon y clarinete', NULL, NULL, NULL, NULL, 0),
	(50, 'Carmen', 'Vargas', '789456123', 'Especialista en redes sociales y estrategias de marketing digital', 6, 'maracas y congas', NULL, NULL, NULL, NULL, 0),
	(51, 'Pablo', 'Flores', '321789456', 'Ingeniero civil con experiencia en construcción de puentes y estructuras', 10, 'platillos, tuba y oboe', NULL, NULL, NULL, NULL, 0),
	(52, 'Isabel', 'Mendoza', '654123789', 'Diseñadora de moda con experiencia en pasarelas internacionales', 7, 'guitarra y violin', NULL, NULL, NULL, NULL, 0),
	(53, 'David', 'Ortega', '987456123', 'Experto en seguridad informática y hacking ético', 9, 'violin y arpa y xilofono', NULL, NULL, NULL, NULL, 0),
	(54, 'Elena', 'Ruiz', '123456789', 'Psicóloga especializada en terapia familiar', 8, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(55, 'Javier', 'Silva', '789123456', 'Chef internacional con experiencia en cocina fusión', 12, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(56, 'Paula', 'Navarro', '456789123', 'Investigadora científica en biología marina', 6, 'xilofono', NULL, NULL, NULL, NULL, 0),
	(57, 'Roberto', 'González', '321654987', 'Periodista con amplia experiencia en cobertura de conflictos internacionales', 11, 'acordeon', NULL, NULL, NULL, NULL, 0),
	(58, 'Patricia', 'Luna', '987321654', 'Abogada especializada en derechos humanos', 9, 'platillos y tuba', NULL, NULL, NULL, NULL, 0),
	(59, 'Óscar', 'Rojas', '654987321', 'Ingeniero eléctrico con experiencia en energías renovables', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(60, 'Clara', 'Fuentes', '123654987', 'Artista plástica con exposiciones en galerías de renombre', 7, 'clarinete', NULL, NULL, NULL, NULL, 0),
	(61, 'Juan', 'Pérez', '123456789', 'Experto en desarrollo web', 5, 'Guitarra, violin y arpa', NULL, NULL, NULL, NULL, 0),
	(62, 'María', 'González', '987654321', 'Especialista en marketing digital', 8, 'Guitarra electrica y bateria', NULL, NULL, NULL, NULL, 0),
	(63, 'Pedro', 'López', '456789123', 'Ingeniero de software con experiencia en inteligencia artificial', 10, 'saxofon y tuba', NULL, NULL, NULL, NULL, 0),
	(64, 'Ana', 'Martínez', '321654987', 'Diseñadora gráfica con amplia experiencia en branding', 7, 'baritono', NULL, NULL, NULL, NULL, 0),
	(65, 'Luis', 'Rodríguez', '789123456', 'Experto en análisis de datos y machine learning', 6, 'flauta, tompeta y piano', NULL, NULL, NULL, NULL, 0),
	(66, 'Laura', 'Hernández', '654987321', 'Arquitecta con experiencia en diseño sostenible', 9, 'piano', NULL, NULL, NULL, NULL, 0),
	(67, 'Carlos', 'Sánchez', '987123654', 'Consultor financiero con experiencia en inversiones internacionales', 12, 'violonchelo', NULL, NULL, NULL, NULL, 0),
	(68, 'Sofía', 'Gómez', '123789456', 'Experta en gestión de proyectos y liderazgo de equipos', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(69, 'Miguel', 'Torres', '456123789', 'Desarrollador de aplicaciones móviles con experiencia en iOS y Android', 4, 'trombon y clarinete', NULL, NULL, NULL, NULL, 0),
	(70, 'Carmen', 'Vargas', '789456123', 'Especialista en redes sociales y estrategias de marketing digital', 6, 'maracas y congas', NULL, NULL, NULL, NULL, 0),
	(71, 'Pablo', 'Flores', '321789456', 'Ingeniero civil con experiencia en construcción de puentes y estructuras', 10, 'platillos, tuba y oboe', NULL, NULL, NULL, NULL, 0),
	(72, 'Isabel', 'Mendoza', '654123789', 'Diseñadora de moda con experiencia en pasarelas internacionales', 7, 'guitarra y violin', NULL, NULL, NULL, NULL, 0),
	(73, 'David', 'Ortega', '987456123', 'Experto en seguridad informática y hacking ético', 9, 'violin y arpa y xilofono', NULL, NULL, NULL, NULL, 0),
	(74, 'Elena', 'Ruiz', '123456789', 'Psicóloga especializada en terapia familiar', 8, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(75, 'Javier', 'Silva', '789123456', 'Chef internacional con experiencia en cocina fusión', 12, 'violin y arpa', NULL, NULL, NULL, NULL, 0),
	(76, 'Paula', 'Navarro', '456789123', 'Investigadora científica en biología marina', 6, 'xilofono', NULL, NULL, NULL, NULL, 0),
	(77, 'Roberto', 'González', '321654987', 'Periodista con amplia experiencia en cobertura de conflictos internacionales', 11, 'acordeon', NULL, NULL, NULL, NULL, 0),
	(78, 'Patricia', 'Luna', '987321654', 'Abogada especializada en derechos humanos', 9, 'platillos y tuba', NULL, NULL, NULL, NULL, 0),
	(79, 'Óscar', 'Rojas', '654987321', 'Ingeniero eléctrico con experiencia en energías renovables', 8, 'oboe', NULL, NULL, NULL, NULL, 0),
	(80, 'Clara', 'Fuentes', '123654987', 'Artista plástica con exposiciones en galerías de renombre', 7, 'clarinete', NULL, NULL, NULL, NULL, 0),
	(81, 'Juan', 'Valdez', '22323', 'Hola soy gran licenciado', 3, 'Percusion', '2023-08-17 00:58:51', '2023-08-17 00:58:51', NULL, NULL, 0),
	(82, 'Juan', 'Valdez', '22323', 'Hola soy gran licenciado', 3, 'Percusion', '2023-08-17 01:00:46', '2023-08-17 01:00:46', NULL, NULL, 0),
	(83, 'Juan', 'Valdez', '22323', 'Hola soy gran licenciado', 3, 'Percusion', '2023-08-17 01:01:30', '2023-08-17 01:01:30', NULL, NULL, 0),
	(84, 'Juan', 'Valdez', '22323', 'Hola soy gran licenciado', 3, 'Percusion', '2023-08-17 01:02:14', '2023-08-17 01:02:14', NULL, NULL, 0),
	(85, 'Juan', 'Valdezz', '22323', 'Hola soy gran licenciado', 3, 'Percusion', '2023-08-17 01:03:08', '2023-08-17 01:06:29', '1692216389__75fe1602-ae24-4836-810c-f44f40f06d84.jpg', NULL, 0),
	(86, 'juan', 'martinez', '3112221312', 'enseño musica', 2, 'instrumentos', '2023-09-27 00:19:57', '2023-09-27 00:19:57', 'HTKjo6NyTXtG8fgg6w42OFqOxbl0mOCIEBKY4CUH.jpg', '1111111111', 4),
	(87, 'Oscar', 'lopez', '3112221312', 'maestro de musica', 3, 'cualquier cosa', '2023-10-04 23:16:37', '2023-10-04 23:16:37', '9Bca7MLlHfKjp152Cnx4V49v42urjCIayeZjzGdn.jpg', '1111111111', 5);

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'admin', NULL, NULL),
	(2, 'profesor', NULL, NULL),
	(3, 'aprendiz', NULL, NULL);

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
	(2, 2, 1, NULL, NULL),
	(3, 3, 2, NULL, NULL),
	(4, 4, 2, NULL, NULL),
	(5, 5, 2, NULL, NULL);

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Luis', 'luismiguelzamudiolopez@gmail.com', NULL, '$2y$10$NbkbalhS1o7t1O8vRn0fLO/5FFcsvHIej.NHQ5IIdloishX5DZlo.', NULL, '2023-09-26 01:18:32', '2023-09-26 01:18:32'),
	(3, 'Luis', 'luismiguelzamudio@gmail.com', NULL, '$2y$10$4LP48mgbBBnB2rijfcxQgOX9Yv1g9dOTYr8CCnsTYJHg6vtCcQIBm', NULL, '2023-09-26 02:04:39', '2023-09-26 02:04:39'),
	(4, 'Manuel', 'josemanuel@gmail.com', NULL, '$2y$10$xULuGr7ZUfscgRBXkqoWlezuEWdrMq.lSCvD0alBPayV3iYurcnXC', NULL, '2023-09-27 00:18:16', '2023-09-27 00:18:16'),
	(5, 'oscar', 'oscarl@gmail.com', NULL, '$2y$10$qGRvN3FowP9/jKeAMrGLKOy/ir/QbtGytx2nXU.5vB0pqP5UeFvyu', NULL, '2023-10-04 23:15:10', '2023-10-04 23:15:10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
