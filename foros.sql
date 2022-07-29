/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `foros` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `foros`;

CREATE TABLE IF NOT EXISTS `comentarios` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_coment` mediumtext NOT NULL,
  `com_date` datetime DEFAULT NULL,
  `com_user` int(11) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `com_user` (`com_user`),
  CONSTRAINT `FK_comentarios_usuarios` FOREIGN KEY (`com_user`) REFERENCES `usuarios` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `publi_id` int(11) NOT NULL AUTO_INCREMENT,
  `publi_titulo` varchar(255) NOT NULL,
  `publi_descri` mediumblob DEFAULT NULL,
  `publi_date` datetime NOT NULL,
  `publi_tema` int(11) NOT NULL,
  `publi_user` int(11) NOT NULL,
  `publi_com` int(11) NOT NULL,
  `publi_est` enum('Abierto','Cerrado') NOT NULL,
  PRIMARY KEY (`publi_id`) USING BTREE,
  KEY `publi_tema` (`publi_tema`),
  KEY `publi_com` (`publi_com`),
  KEY `publi_user` (`publi_user`),
  CONSTRAINT `FK_publicaciones_comentarios` FOREIGN KEY (`publi_com`) REFERENCES `comentarios` (`com_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_publicaciones_temas` FOREIGN KEY (`publi_tema`) REFERENCES `temas` (`tema_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_publicaciones_usuarios` FOREIGN KEY (`publi_user`) REFERENCES `usuarios` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `temas` (
  `tema_id` int(11) NOT NULL AUTO_INCREMENT,
  `tema_nombre` varchar(255) NOT NULL,
  `tema_desc` varchar(500) NOT NULL,
  `tema_img` mediumblob NOT NULL,
  PRIMARY KEY (`tema_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nombre` varchar(50) NOT NULL,
  `user_correo` varchar(50) NOT NULL,
  `user_cont` varchar(50) NOT NULL,
  `user_img` mediumblob DEFAULT NULL,
  `user_time` datetime NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
