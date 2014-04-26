# Host: localhost  (Version: 5.5.16-log)
# Date: 2014-03-09 16:32:25
# Generator: MySQL-Front 5.3  (Build 2.53)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

#
# Source for table "clientes"
#

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `cpf` varchar(20) DEFAULT '',
  `rg` varchar(255) DEFAULT NULL,
  `dtnasc` date DEFAULT '0000-00-00',
  `cel` varchar(20) DEFAULT NULL,
  `cel2` varchar(20) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `civil` varchar(45) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `obs` text,
  `dataC` varchar(100) NOT NULL DEFAULT '',
  `tipo` int(11) DEFAULT '0',
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "clientes"
#

INSERT INTO `clientes` VALUES (1,'asdsad','sadasdasd','asdasdas','0000-00-00','asdasdsa','','','ViÃºvo','','','','','','','25/02/2014 12:11:07',2),(2,'FABIANO LIMA PEDRO','008.026.864-19','2401476 SSP/PB','1982-08-07','(83)8894-4829','(83)8796-8779','(83)3077-1498','casado','58434-086','RUA ONILDO RIBEIRO DE ASSIS, 246','SERROTÃƒO','CAMPINA GRANDE','PB','TESTE','25/02/2014 00:38:05',1);

#
# Source for table "conta"
#

DROP TABLE IF EXISTS `conta`;
CREATE TABLE `conta` (
  `idConta` int(11) NOT NULL AUTO_INCREMENT,
  `imovel` int(11) NOT NULL DEFAULT '0',
  `cliente` int(11) NOT NULL DEFAULT '0',
  `fiador` int(11) NOT NULL DEFAULT '0',
  `valor` decimal(10,2) DEFAULT NULL,
  `dtinicial` date DEFAULT '0000-00-00',
  `dtfinal` date DEFAULT '0000-00-00',
  `formaPgto` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `dataC` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idConta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "conta"
#

INSERT INTO `conta` VALUES (4,2,2,1,600.00,'2013-07-05','2014-07-05','1','2','09/03/2014 16:14:15'),(5,2,2,1,600.00,'2013-10-10','2014-10-10','3','2','09/03/2014 16:26:24');

#
# Source for table "imoveis"
#

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE `imoveis` (
  `idImovel` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `locacao` varchar(255) DEFAULT NULL,
  `tipoImovel` varchar(255) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL,
  `garagem` varchar(255) DEFAULT NULL,
  `internet` varchar(255) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(255) DEFAULT NULL,
  `obs` text,
  `dataC` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idImovel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "imoveis"
#

INSERT INTO `imoveis` VALUES (2,'APTO 101 - ED. FELIPE ALMEIDA','ResidÃªncial','Apartamento','2','600,00','garagem','internet','58434086','RUA ONILDO RIBEIRO DE ASSIS, 246','APTO 101','LIBERDADE','CAMPINA GRANDE','PB','TESTE 01','09/03/2014 10:36:41');

#
# Source for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `nacio` varchar(45) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `apelido` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `tell` varchar(50) DEFAULT NULL,
  `nascimento` varchar(45) DEFAULT NULL,
  `fixo` varchar(255) DEFAULT NULL,
  `ec` varchar(45) DEFAULT NULL,
  `funcao` varchar(45) DEFAULT NULL,
  `creci` varchar(45) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cep` int(11) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `num` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `nota` text,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (2,'FABIANO LIMA','008.026.864-19','',0,'FABIANO','fabianolima@dcomt.com.br','(83) 8894-4829','(83) 9173-2185','07/08/1982','(83) 3063-4263',NULL,'4','','fabiano','1308',58414,'AVENIDA JORNALISTA ASSIS CHATEAUBRIAND','300','LIBERDADE','PB','CAMPINA GRANDE','SALA 132, 1Âº ANDAR','');

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
