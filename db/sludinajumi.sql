-- php admin > project db > query (this) > submit query
-- paldies V. kungam par query garantijas remontu

CREATE TABLE ipasumi (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nosaukums VARCHAR(50) NOT NULL,
    cena INT NOT NULL,
    vieta VARCHAR(320) NOT NULL,
    stavs INT NOT NULL,
    istabskaits INT NOT NULL,
    platiba INT NOT NULL,
    apraksts VARCHAR(320) NOT NULL,
    users_id INT NOT NULL
);