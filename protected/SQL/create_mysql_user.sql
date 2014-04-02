CREATE USER 'projectzero'@'localhost' IDENTIFIED BY 'zomgffs117781';

GRANT USAGE ON *.* TO  'projectzero'@'localhost' IDENTIFIED BY 'zomgffs117781' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

CREATE DATABASE IF NOT EXISTS `projectzero`;

GRANT ALL PRIVILEGES ON  `projectzero`.* TO 'projectzero'@'localhost';