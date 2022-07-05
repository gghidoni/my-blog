-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              5.7.33 - MySQL Community Server (GPL)
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database blog-db
CREATE DATABASE IF NOT EXISTS `blog-db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog-db`;

-- Dump della struttura di tabella blog-db.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.articles: ~0 rows (circa)

-- Dump della struttura di tabella blog-db.authors
CREATE TABLE IF NOT EXISTS `authors` (
  `idAuthor` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`idAuthor`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.authors: ~4 rows (circa)
INSERT INTO `authors` (`idAuthor`, `username`, `password`) VALUES
	(1, 'Mario', ''),
	(2, 'Gianni', ''),
	(9, 'Ale', '$2y$10$XzdJ06DWIdo.JOSIeiWD3uHaI79y/10fYlY.IEXemRlNfZg07.ZEO'),
	(10, 'pippo', '$2y$10$omJDB13mpsSs.7DWixHhb.vy2h7wa4uQTGnMfpXlZpinsF8hO8ixK'),
	(11, 'Sami', '$2y$10$34SmRgRS.mrZJJqSdab3F.1ZtUoCSVkCg5fE4lPOBYxeck3Sn6OuO');

-- Dump della struttura di tabella blog-db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategory` int(11) NOT NULL AUTO_INCREMENT,
  `titleCategory` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.categories: ~3 rows (circa)
INSERT INTO `categories` (`idCategory`, `titleCategory`) VALUES
	(1, 'Sport'),
	(2, 'Books'),
	(3, 'Films');

-- Dump della struttura di tabella blog-db.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `textComment` text NOT NULL,
  `ksPost` int(11) NOT NULL,
  PRIMARY KEY (`idComment`),
  KEY `ksPost` (`ksPost`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ksPost`) REFERENCES `posts` (`idPost`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.comments: ~12 rows (circa)
INSERT INTO `comments` (`idComment`, `textComment`, `ksPost`) VALUES
	(1, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.', 1),
	(2, 'error sit voluptatem accusantium.', 2),
	(3, 'Sed ut perspiciatis unde omnis iste natus error sit v', 2),
	(4, 'Ciao, mi chiamo Gianni!', 2),
	(5, 'pippo', 2),
	(6, 'ciao mondo', 2),
	(7, 'ciao', 2),
	(8, 'Ciao, mi chiamo Gianni!', 1),
	(9, 'ciao', 3),
	(10, 'ciao', 1),
	(11, 'prova', 3),
	(12, 'eccomi', 1),
	(13, 'ciao nuovo commento', 1),
	(14, 'dcsdff', 8);

-- Dump della struttura di tabella blog-db.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `titlePost` varchar(100) DEFAULT NULL,
  `contentPost` text,
  `datePost` date DEFAULT NULL,
  `ksAuthor` int(11) DEFAULT NULL,
  `ksCategory` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPost`),
  KEY `ksCategory` (`ksCategory`),
  KEY `ksAuthor` (`ksAuthor`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`ksAuthor`) REFERENCES `authors` (`idAuthor`),
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`ksCategory`) REFERENCES `categories` (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.posts: ~4 rows (circa)
INSERT INTO `posts` (`idPost`, `titlePost`, `contentPost`, `datePost`, `ksAuthor`, `ksCategory`) VALUES
	(1, 'Titolo del primo post', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', '2022-06-25', 1, 1),
	(2, 'Titolo del secondo post', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', '2022-06-22', 2, 2),
	(3, 'Titolo del terzo post', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', '2022-06-01', 1, 1),
	(7, 'Titolo di prova', 'contenuto di prova test test sqhdbdjhsavvsdvasdavdasvdasgd', '2007-05-22', 9, 2),
	(8, 'titolo articolo', 'dfsdgfiygsdfygsyfg', '2007-05-22', 11, 3);

-- Dump della struttura di tabella blog-db.poststags
CREATE TABLE IF NOT EXISTS `poststags` (
  `idPostTag` int(11) NOT NULL AUTO_INCREMENT,
  `ksPost` int(11) NOT NULL,
  `ksTag` int(11) NOT NULL,
  PRIMARY KEY (`idPostTag`),
  KEY `ksPost` (`ksPost`),
  KEY `ksTag` (`ksTag`),
  CONSTRAINT `poststags_ibfk_1` FOREIGN KEY (`ksPost`) REFERENCES `posts` (`idPost`),
  CONSTRAINT `poststags_ibfk_2` FOREIGN KEY (`ksTag`) REFERENCES `tags` (`idTag`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.poststags: ~4 rows (circa)
INSERT INTO `poststags` (`idPostTag`, `ksPost`, `ksTag`) VALUES
	(1, 1, 2),
	(2, 1, 3),
	(3, 2, 1),
	(4, 2, 4),
	(5, 7, 2),
	(6, 7, 3),
	(7, 7, 4),
	(8, 8, 1),
	(9, 8, 2),
	(10, 8, 3);

-- Dump della struttura di tabella blog-db.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `idTag` int(11) NOT NULL AUTO_INCREMENT,
  `titleTag` varchar(50) NOT NULL,
  PRIMARY KEY (`idTag`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dump dei dati della tabella blog-db.tags: ~5 rows (circa)
INSERT INTO `tags` (`idTag`, `titleTag`) VALUES
	(1, 'sea'),
	(2, 'happy'),
	(3, 'photo'),
	(4, 'facebook'),
	(5, 'tech'),
	(12, 'pippo');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
