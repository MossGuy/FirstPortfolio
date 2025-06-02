DROP DATABASE IF EXISTS `milan_portfolio_db`;

CREATE DATABASE `milan_portfolio_db`;

USE `milan_portfolio_db`;

CREATE TABLE `gebruikers` (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gebruikersnaam VARCHAR(255) NOT NULL,
    wachtwoord VARCHAR(255) NOT NULL
);

INSERT INTO `gebruikers`(gebruikersnaam, wachtwoord) VALUES
('W3rkgev3r2938', SHA1('L0r3m1psum#_596')),
('easteregg', SHA1('y0u*Are#aw3some!'));
