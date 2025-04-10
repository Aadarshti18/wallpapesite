-- phpMyAdmin SQL Dump for a Wallpaper Website (like Pexels)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Charset settings
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `project`

-- -----------------------
-- Table: admin
-- -----------------------

CREATE TABLE `admin` (
  `id` TINYINT(4) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `pwd` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'a@gmail.com', '1234');

-- -----------------------
-- Table: category (Wallpaper Categories)
-- -----------------------

CREATE TABLE `category` (
  `id` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Landscape'),
(2, 'Abstract'),
(3, 'Animals'),
(4, 'Architecture'),
(5, 'Nature'),
(6, 'Technology'),
(7, 'Minimal'),
(8, 'Space'),
(9, 'Food');

-- -----------------------
-- Table: subcategory (Optional - like subgenres)
-- -----------------------

CREATE TABLE `subcategory` (
  `id` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `subcategory` VARCHAR(100) NOT NULL,
  `category_id` SMALLINT(6) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`category_id`) REFERENCES `category`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample subcategories
INSERT INTO `subcategory` (`id`, `subcategory`, `category_id`) VALUES
(1, 'Mountains', 1),
(2, 'Desert', 1),
(3, 'Galaxy', 8),
(4, 'Modern Buildings', 4),
(5, 'Wildlife', 3);

-- -----------------------
-- Table: wallpapers (Main Wallpaper Content)
-- -----------------------

CREATE TABLE `wallpapers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `description` TEXT,
  `image` VARCHAR(255) NOT NULL,
  `category_id` SMALLINT(6) DEFAULT NULL,
  `subcategory_id` SMALLINT(6) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`category_id`) REFERENCES `category`(`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory`(`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;

-- Restore charset settings
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
