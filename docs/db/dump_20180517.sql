CREATE DATABASE  IF NOT EXISTS `projetointegrador` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projetointegrador`;
-- MySQL dump23052018 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projetointegrador
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `sexo` char(1) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` varchar(15) NOT NULL,
  `uf` varchar(2) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (9,'Gabriel','050.595.489-59','5145123','M','gabriel@gmail.com','(61) 3517-4582','(61) 9547-5621','Ceilandia','072.252-48','DF');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `decoracao`
--

DROP TABLE IF EXISTS `decoracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `decoracao` (
  `iddecoracao` int(11) NOT NULL AUTO_INCREMENT,
  `festa_idfesta` int(11) NOT NULL,
  `item_decoracao_iditem_decoracao` int(11) NOT NULL,
  `valor` varchar(1000) NOT NULL,
  PRIMARY KEY (`iddecoracao`),
  KEY `fk_Festa_has_Item_Decoracao_Item_Decoracao1_idx` (`item_decoracao_iditem_decoracao`),
  KEY `fk_Festa_has_Item_Decoracao_Festa1_idx` (`festa_idfesta`),
  CONSTRAINT `fk_Festa_has_Item_Decoracao_Festa1` FOREIGN KEY (`festa_idfesta`) REFERENCES `festa` (`idfesta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Festa_has_Item_Decoracao_Item_Decoracao1` FOREIGN KEY (`item_decoracao_iditem_decoracao`) REFERENCES `item_decoracao` (`iditem_decoracao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `decoracao`
--

LOCK TABLES `decoracao` WRITE;
/*!40000 ALTER TABLE `decoracao` DISABLE KEYS */;
/*!40000 ALTER TABLE `decoracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `festa`
--

DROP TABLE IF EXISTS `festa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `festa` (
  `idfesta` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `horario` double NOT NULL,
  `numeroconvidados` varchar(1000) DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `decoracao_iddecoracao` int(11) NOT NULL,
  `tipo_festa_id_tp_festa` int(11) NOT NULL,
  PRIMARY KEY (`idfesta`),
  KEY `fk_Festa_Cliente_idx` (`cliente_idcliente`),
  KEY `fk_festa_tipo_festa1_idx` (`tipo_festa_id_tp_festa`),
  CONSTRAINT `fk_Festa_Cliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_festa_tipo_festa1` FOREIGN KEY (`tipo_festa_id_tp_festa`) REFERENCES `tipo_festa` (`id_tp_festa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festa`
--

LOCK TABLES `festa` WRITE;
/*!40000 ALTER TABLE `festa` DISABLE KEYS */;
/*!40000 ALTER TABLE `festa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `festa_has_funcionarios`
--

DROP TABLE IF EXISTS `festa_has_funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `festa_has_funcionarios` (
  `festa_idfesta` int(11) NOT NULL,
  `funcionarios_idfuncionarios` int(11) NOT NULL,
  PRIMARY KEY (`festa_idfesta`,`funcionarios_idfuncionarios`),
  KEY `fk_Festa_has_Funcionarios_Funcionarios1_idx` (`funcionarios_idfuncionarios`),
  KEY `fk_Festa_has_Funcionarios_Festa1_idx` (`festa_idfesta`),
  CONSTRAINT `fk_Festa_has_Funcionarios_Festa1` FOREIGN KEY (`festa_idfesta`) REFERENCES `festa` (`idfesta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Festa_has_Funcionarios_Funcionarios1` FOREIGN KEY (`funcionarios_idfuncionarios`) REFERENCES `funcionarios` (`idfuncionarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festa_has_funcionarios`
--

LOCK TABLES `festa_has_funcionarios` WRITE;
/*!40000 ALTER TABLE `festa_has_funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `festa_has_funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `idfuncionarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` decimal(20,0) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `experiencia` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `uf` varchar(2) NOT NULL,
  PRIMARY KEY (`idfuncionarios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` VALUES (1,'Teste','613.516.565-11','5465465','(61) 3584-7514',0,'Taguatinga','teste@gmail.com','dj','M','DF');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_decoracao`
--

DROP TABLE IF EXISTS `item_decoracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_decoracao` (
  `iditem_decoracao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`iditem_decoracao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_decoracao`
--

LOCK TABLES `item_decoracao` WRITE;
/*!40000 ALTER TABLE `item_decoracao` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_decoracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `musica`
--

DROP TABLE IF EXISTS `musica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `musica` (
  `idmusica` int(11) NOT NULL AUTO_INCREMENT,
  `artista` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  PRIMARY KEY (`idmusica`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musica`
--

LOCK TABLES `musica` WRITE;
/*!40000 ALTER TABLE `musica` DISABLE KEYS */;
INSERT INTO `musica` VALUES (1,'Gustavo Lima','sertenajo'),(5,'Red Hot Chili Pepers','rock');
/*!40000 ALTER TABLE `musica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `musica_has_festa`
--

DROP TABLE IF EXISTS `musica_has_festa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `musica_has_festa` (
  `musica_idmusica` int(11) NOT NULL,
  `festa_idfesta` int(11) NOT NULL,
  PRIMARY KEY (`musica_idmusica`,`festa_idfesta`),
  KEY `fk_Musica_has_Festa_Festa1_idx` (`festa_idfesta`),
  KEY `fk_Musica_has_Festa_Musica1_idx` (`musica_idmusica`),
  CONSTRAINT `fk_Musica_has_Festa_Festa1` FOREIGN KEY (`festa_idfesta`) REFERENCES `festa` (`idfesta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Musica_has_Festa_Musica1` FOREIGN KEY (`musica_idmusica`) REFERENCES `musica` (`idmusica`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `musica_has_festa`
--

LOCK TABLES `musica_has_festa` WRITE;
/*!40000 ALTER TABLE `musica_has_festa` DISABLE KEYS */;
/*!40000 ALTER TABLE `musica_has_festa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_festa`
--

DROP TABLE IF EXISTS `tipo_festa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_festa` (
  `id_tp_festa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tp_festa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_festa`
--

LOCK TABLES `tipo_festa` WRITE;
/*!40000 ALTER TABLE `tipo_festa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_festa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-17 22:34:06
