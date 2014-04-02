DROP TABLE IF EXISTS `zero_articles`;
CREATE TABLE `zero_articles` 
(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title varchar(255) NOT NULL,
	author varchar(50) NOT NULL,
	content text NOT NULL,
	tags varchar(255) NOT NULL,
	mysql_timestamp timestamp UNIQUE DEFAULT CURRENT_TIMESTAMP,
	posted_on DATETIME NOT NULL,
	images varchar(1000) NULL,
	links varchar(1000) NULL,
	video varchar(1000) NULL,
	files varchar(1000) NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `zero_articles` (`id`, `title`, `author`, `content`, `tags`, `posted_on`)
VALUES (1, 'This is a test title', 'decemvre', 'This is a test article content', 'HTML5, CSS3', '1000-01-01 00:00:00');