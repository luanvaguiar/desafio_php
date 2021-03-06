-- MySQL Script generated by MySQL Workbench
-- Mon Oct 12 20:09:53 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema desafio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema desafio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `desafio` DEFAULT CHARACTER SET utf8 ;
USE `desafio` ;

-- -----------------------------------------------------
-- Table `desafio`.`tb_funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `desafio`.`tb_funcionarios` (
  `id_funcionarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `area_atoacao` VARCHAR(100) NOT NULL,
  `situacao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_funcionarios`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- ------------------------------------------------------
-- SCRIPTS
-- ------------------------------------------------------

use desafio; 

-- Inserção de Funcionários
INSERT INTO tb_funcionarios (nome, data_nascimento, area_atoacao, situacao) VALUES ( 'Luan Vinícios de Aguiar', '1997-07-02', 'Tecnologia da Informação', 'n');
SELECT id_funcionarios, nome, data_nascimento, area_atoacao, situacao FROM tb_funcionarios INNER JOIN tb_status on tb_funcionarios.tb_status_id_status = tb_status.id_status;

SELECT * FROM tb_funcionarios;