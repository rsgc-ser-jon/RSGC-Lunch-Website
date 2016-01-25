-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mrgogor3_RRUSR
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mrgogor3_RRUSR` ;

-- -----------------------------------------------------
-- Schema mrgogor3_RRUSR
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mrgogor3_RRUSR` DEFAULT CHARACTER SET utf8 ;
USE `mrgogor3_RRUSR` ;

-- -----------------------------------------------------
-- Table `mrgogor3_RRUSR`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RRUSR`.`user` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RRUSR`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pw` VARCHAR(255) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mrgogor3_RRUSR`.`restaurant`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RRUSR`.`restaurant` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RRUSR`.`restaurant` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `walkingdistance` INT NULL,
  `adress` VARCHAR(45) NOT NULL,
  `expense` INT NULL,
  `description` VARCHAR(300) NULL,
  `menu` VARCHAR(1000) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mrgogor3_RRUSR`.`rating`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mrgogor3_RRUSR`.`rating` ;

CREATE TABLE IF NOT EXISTS `mrgogor3_RRUSR`.`rating` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servTime` INT NULL,
  `date` DATETIME NOT NULL,
  `starRating` INT NULL,
  `comment` VARCHAR(300) NULL,
  `user_id` INT NOT NULL,
  `restaurant_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_rating_user_idx` (`user_id` ASC),
  INDEX `fk_rating_restaurant1_idx` (`restaurant_id` ASC),
  CONSTRAINT `fk_rating_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `mrgogor3_RRUSR`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rating_restaurant1`
    FOREIGN KEY (`restaurant_id`)
    REFERENCES `mrgogor3_RRUSR`.`restaurant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
