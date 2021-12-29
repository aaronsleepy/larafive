CREATE TABLE posts(
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  title VARCHAR(255),
  body TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE authors(
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  email VARCHAR(255) NOT NULL ,
  password VARCHAR(60) NOT NULL
) ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;