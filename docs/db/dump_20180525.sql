-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema projetointegrador
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projetointegrador
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projetointegrador` DEFAULT CHARACTER SET utf8 ;
USE `projetointegrador` ;

-- -----------------------------------------------------
-- Table `projetointegrador`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(40) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `rg` VARCHAR(15) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `email` VARCHAR(50) NULL DEFAULT NULL,
  `telefone` VARCHAR(20) NULL DEFAULT NULL,
  `celular` VARCHAR(20) NULL DEFAULT NULL,
  `endereco` VARCHAR(50) NOT NULL,
  `cep` VARCHAR(15) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`item_decoracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`item_decoracao` (
  `id_item_decoracao` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_item_decoracao`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`decoracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`decoracao` (
  `id_decoracao` INT(11) NOT NULL AUTO_INCREMENT,
  `id_item_decoracao` INT(11) NOT NULL,
  `valor` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`id_decoracao`),
  INDEX `fk_Festa_has_Item_Decoracao_Item_Decoracao1_idx` (`id_item_decoracao` ASC),
  CONSTRAINT `fk_Festa_has_Item_Decoracao_Item_Decoracao1`
    FOREIGN KEY (`id_item_decoracao`)
    REFERENCES `projetointegrador`.`item_decoracao` (`id_item_decoracao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`especialidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`especialidade` (
  `id_especialidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_especialidade`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`tipo_festa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`tipo_festa` (
  `id_tp_festa` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tp_festa`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`festa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`festa` (
  `id_festa` INT(11) NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(45) NOT NULL,
  `dia` VARCHAR(10) NOT NULL,
  `horario` VARCHAR(10) NOT NULL,
  `numero_convidados` VARCHAR(1000) NULL DEFAULT NULL,
  `id_cliente` INT(11) NOT NULL,
  `decoracao_iddecoracao` INT(11) NOT NULL,
  `id_tp_festa` INT(11) NOT NULL,
  `id_decoracao` INT(11) NOT NULL,
  PRIMARY KEY (`id_festa`),
  INDEX `fk_Festa_Cliente_idx` (`id_cliente` ASC),
  INDEX `fk_festa_tipo_festa1_idx` (`id_tp_festa` ASC),
  INDEX `fk_festa_decoracao1_idx` (`id_decoracao` ASC),
  CONSTRAINT `fk_Festa_Cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `projetointegrador`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_festa_decoracao1`
    FOREIGN KEY (`id_decoracao`)
    REFERENCES `projetointegrador`.`decoracao` (`id_decoracao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_festa_tipo_festa1`
    FOREIGN KEY (`id_tp_festa`)
    REFERENCES `projetointegrador`.`tipo_festa` (`id_tp_festa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`funcionarios` (
  `id_funcionarios` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `rg` VARCHAR(15) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `celular` VARCHAR(20) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `id_especialidade` INT(11) NOT NULL,
  PRIMARY KEY (`id_funcionarios`),
  INDEX `fk_funcionarios_especialidade1_idx` (`id_especialidade` ASC),
  CONSTRAINT `fk_funcionarios_especialidade1`
    FOREIGN KEY (`id_especialidade`)
    REFERENCES `projetointegrador`.`especialidade` (`id_especialidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`festa_funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`festa_funcionarios` (
  `id_festa` INT(11) NOT NULL,
  `id_funcionarios` INT(11) NOT NULL,
  PRIMARY KEY (`id_festa`, `id_funcionarios`),
  INDEX `fk_Festa_has_Funcionarios_Funcionarios1_idx` (`id_funcionarios` ASC),
  INDEX `fk_Festa_has_Funcionarios_Festa1_idx` (`id_festa` ASC),
  CONSTRAINT `fk_Festa_has_Funcionarios_Festa1`
    FOREIGN KEY (`id_festa`)
    REFERENCES `projetointegrador`.`festa` (`id_festa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Festa_has_Funcionarios_Funcionarios1`
    FOREIGN KEY (`id_funcionarios`)
    REFERENCES `projetointegrador`.`funcionarios` (`id_funcionarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`musica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`musica` (
  `id_musica` INT(11) NOT NULL AUTO_INCREMENT,
  `artista` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_musica`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetointegrador`.`musica_festa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetointegrador`.`musica_festa` (
  `id_musica` INT(11) NOT NULL,
  `id_festa` INT(11) NOT NULL,
  PRIMARY KEY (`id_musica`, `id_festa`),
  INDEX `fk_Musica_has_Festa_Festa1_idx` (`id_festa` ASC),
  INDEX `fk_Musica_has_Festa_Musica1_idx` (`id_musica` ASC),
  CONSTRAINT `fk_Musica_has_Festa_Festa1`
    FOREIGN KEY (`id_festa`)
    REFERENCES `projetointegrador`.`festa` (`id_festa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Musica_has_Festa_Musica1`
    FOREIGN KEY (`id_musica`)
    REFERENCES `projetointegrador`.`musica` (`id_musica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
