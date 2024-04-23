CREATE TABLE post (
  `id` INT NOT NULL AUTO_INCREMENT,  
  `title` VARCHAR(255) NOT NULL,
  `subtitle` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `author_url` VARCHAR(255) NOT NULL,
  `publish_date` TIMESTAMP NOT NULL,
  `image_url` VARCHAR(255) NOT NULL,
  `featured` TINYINT NOT NULL,
  `action` VARCHAR(255) NOT NULL,
  `queue` VARCHAR(255) NOT NULL,
  PRIMARY KEY(`id`)
);