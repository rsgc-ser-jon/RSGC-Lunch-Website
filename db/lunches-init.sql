-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mrgogor3_RR
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mrgogor3_RR` ;

-- -----------------------------------------------------
-- Schema mrgogor3_RR
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mrgogor3_RR` DEFAULT CHARACTER SET utf8 ;
USE `mrgogor3_RR` ;

-- -----------------------------------------------------
-- Table `mrgogor3_RR`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RR`.`user` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RR`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pw` VARCHAR(255) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mrgogor3_RR`.`restaurant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RR`.`restaurant` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RR`.`restaurant` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `timeToWalk` INT NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `description` TEXT(2000) NOT NULL,
  `menu` VARCHAR(1000) NULL,
  `imageName` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mrgogor3_RR`.`rating`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RR`.`rating` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RR`.`rating` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `starRating` INT NOT NULL,
  `user_id` INT NOT NULL,
  `restaurant_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_rating_user_idx` (`user_id` ASC),
  INDEX `fk_rating_restaurant1_idx` (`restaurant_id` ASC),
  CONSTRAINT `fk_rating_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mrgogor3_RR`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rating_restaurant1`
    FOREIGN KEY (`restaurant_id`)
    REFERENCES `mrgogor3_RR`.`restaurant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
