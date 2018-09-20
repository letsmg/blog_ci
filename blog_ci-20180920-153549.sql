--
-- DbNinja v3.2.7 for MySQL
--
-- Dump date: 2018-09-20 18:39:23 (UTC)
-- Server version: 10.1.34-MariaDB
-- Database: blog_ci
--

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

CREATE DATABASE `blog_ci` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog_ci`;

--
-- Structure for table: artigos
--
CREATE TABLE `artigos` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usu` int(11) DEFAULT NULL,
  `titulo` int(11) DEFAULT NULL,
  `conteudo` int(11) DEFAULT NULL,
  `dt_publicacao` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_artigo`),
  KEY `new_index_1` (`id_usu`),
  CONSTRAINT `fkey_dcrekvxmzd` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure for table: preferencias
--
CREATE TABLE `preferencias` (
  `id_preferencia` int(11) NOT NULL AUTO_INCREMENT,
  `num_destaques` int(11) DEFAULT NULL,
  `cor_tema` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_preferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure for table: usuarios
--
CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL,
  `nivel` tinyint(1) DEFAULT '0' COMMENT '0 padrão, 1 admin, 2 HIERARCA',
  PRIMARY KEY (`id_usu`),
  UNIQUE KEY `new_index_1` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;


--
-- Data for table: artigos
--
LOCK TABLES `artigos` WRITE;
ALTER TABLE `artigos` DISABLE KEYS;

-- Table contains no data

ALTER TABLE `artigos` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: preferencias
--
LOCK TABLES `preferencias` WRITE;
ALTER TABLE `preferencias` DISABLE KEYS;

-- Table contains no data

ALTER TABLE `preferencias` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: usuarios
--
LOCK TABLES `usuarios` WRITE;
ALTER TABLE `usuarios` DISABLE KEYS;

INSERT INTO `usuarios` (`id_usu`,`nome`,`email`,`senha`,`nivel`) VALUES (19,'asdf','luizedmg@gmail.com','$2y$10$ZQm1TtB.tas.99Sn3o0m9e9yLoKLcuO9ABw7I6lvAuvAAX62RYWWy',NULL);

ALTER TABLE `usuarios` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

