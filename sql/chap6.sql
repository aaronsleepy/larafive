CREATE TABLE posts(
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  title VARCHAR(255),
  body TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
