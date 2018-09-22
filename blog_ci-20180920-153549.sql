--
-- DbNinja v3.2.7 for MySQL
--
-- Dump date: 2018-09-22 02:53:57 (UTC)
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

CREATE DATABASE `blog_ci` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blog_ci`;

--
-- Structure for table: artigos
--
CREATE TABLE `artigos` (
  `id_artigo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usu` int(11) DEFAULT NULL,
  `img_destaque` varchar(100) DEFAULT NULL,
  `titulo` varchar(70) DEFAULT NULL,
  `subtitulo` varchar(70) DEFAULT NULL,
  `secao` varchar(250) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `subtitulo2` varchar(250) DEFAULT NULL,
  `secao2` varchar(250) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `subtitulo3` varchar(250) DEFAULT NULL,
  `secao3` varchar(250) DEFAULT NULL,
  `img3` varchar(100) DEFAULT NULL,
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
  `nome_blog` varchar(50) DEFAULT NULL,
  `num_destaques` int(11) DEFAULT NULL,
  `cor_tema` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_preferencia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

