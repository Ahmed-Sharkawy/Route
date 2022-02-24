CREATE DATABASE `store_management` COLLATE `utf8mb4_general_ci`;


CREATE TABLE `store` (
	`id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL ,
  `address` varchar(255) NOT NULL
) ENGINE = INNODB;

CREATE TABLE `supplier`(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `phone` INT UNSIGNED NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `brief_data` varchar(255)NOT NULL
) ENGINE = INNODB;

CREATE TABLE `product` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL ,
  `code` INT NOT NULL ,
  `description` TEXT NOT NULL,
  `price` float NOT NULL ,
  `supplier_id` INT NOT NULL,
) ENGINE = INNODB;

CREATE TABLE `store_product` (
	`store_id` int NOT NULL ,
  `product_id` int NOT NULL ,
  PRIMARY key(store_id , product_id),
  FOREIGN KEY (store_id) REFERENCES store(id),
  FOREIGN KEY (product_id) REFERENCES product(id)
	ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE = INNODB;