# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.25)
# Base de Dados: devedores
# Tempo de Geração: 2021-07-12 15:06:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela devedores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devedores`;

CREATE TABLE `devedores` (
  `id_devedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `cpf` char(11) NOT NULL DEFAULT '',
  `endereco` varchar(128) NOT NULL,
  `data_nascimento` date NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id_devedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `devedores` WRITE;
/*!40000 ALTER TABLE `devedores` DISABLE KEYS */;

INSERT INTO `devedores` (`id_devedor`, `nome`, `cpf`, `endereco`, `data_nascimento`, `updated`)
VALUES
	(13,'Marcos Fernando Schiavinatti','54543534534','Rua Vergueiro - Vila Nair, São Paulo - SP, Brasil','0034-04-30','2021-07-11 18:51:38'),
	(14,'Raquel Rodrigues de Oliveira','36580858869','Rua Antonio Carlos de Almeida','2000-10-10','2021-07-11 18:53:50');

/*!40000 ALTER TABLE `devedores` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela dividas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dividas`;

CREATE TABLE `dividas` (
  `id_divida` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_titulo` text NOT NULL,
  `valor` float NOT NULL,
  `data_vencimento` date NOT NULL,
  `devedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id_divida`),
  KEY `fk_dividas_devedores1_idx` (`devedor_id`),
  CONSTRAINT `fk_dividas_devedores1` FOREIGN KEY (`devedor_id`) REFERENCES `devedores` (`id_devedor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `dividas` WRITE;
/*!40000 ALTER TABLE `dividas` DISABLE KEYS */;

INSERT INTO `dividas` (`id_divida`, `descricao_titulo`, `valor`, `data_vencimento`, `devedor_id`)
VALUES
	(1,'teste',444,'2000-02-10',14),
	(2,'teste',3,'2000-10-10',13),
	(3,'ola teste',80,'2000-10-10',14),
	(4,'teste',9.9,'2000-02-10',14);

/*!40000 ALTER TABLE `dividas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
