-- -----------------------------------------------------
-- Schema sapinoel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sapinoel` DEFAULT CHARACTER SET utf8 ;
USE `sapinoel` ;

-- -----------------------------------------------------
-- Table `sapinoel`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapinoel`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `last_name` VARCHAR(100) NOT NULL,
  `first_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapinoel`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapinoel`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order_number` VARCHAR(50) NOT NULL,
  `date` DATE NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_order`
    FOREIGN KEY (`id`)
    REFERENCES `sapinoel`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapinoel`.`cart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapinoel`.`cart` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_id` INT NOT NULL,
  `quantity` TINYINT(4) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_cart`
    FOREIGN KEY (`id`)
    REFERENCES `sapinoel`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapinoel`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapinoel`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(100) NOT NULL,
  `product_desc` LONGTEXT NOT NULL,
  `product_price` FLOAT NOT NULL,
  `product_img` VARCHAR(255) NOT NULL,
  `category_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapinoel`.`order_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapinoel`.`order_product` (
  `id_product` INT NOT NULL,
  `id_order` INT NOT NULL,
  CONSTRAINT `order_product`
    FOREIGN KEY (`id_product`)
    REFERENCES `sapinoel`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `order_order`
    FOREIGN KEY (`id_order`)
    REFERENCES `sapinoel`.`order` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `order_product_idx` ON `sapinoel`.`order_product` (`id_product` ASC) VISIBLE;

CREATE INDEX `order_order_idx` ON `sapinoel`.`order_product` (`id_order` ASC) VISIBLE;