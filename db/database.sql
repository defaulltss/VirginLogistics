-- PHPMYADMIN 

CREATE TABLE users (
    users_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    users_firstname VARCHAR(50) NOT NULL,
    users_lastname VARCHAR(50) NOT NULL,
    users_uid VARCHAR(320) NOT NULL,
    users_pwd CHAR(60) NOT NULL,
    type INT(11) NULL Default '0'
);