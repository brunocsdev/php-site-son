-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema php_son_admin
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema php_son_admin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `php_son_admin` DEFAULT CHARACTER SET utf8 ;
USE `php_son_admin` ;

-- -----------------------------------------------------
-- Table `php_son_admin`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_son_admin`.`pages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `php_son_admin`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `php_son_admin`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `pages_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_pages_idx` (`pages_id` ASC) VISIBLE,
  CONSTRAINT `fk_users_pages`
    FOREIGN KEY (`pages_id`)
    REFERENCES `php_son_admin`.`pages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
