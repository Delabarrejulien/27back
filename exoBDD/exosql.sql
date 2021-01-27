-- CREATE TABLE `languages`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `language` VARCHAR(40)
-- );

-- CREATE TABLE `tools`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `tool` VARCHAR(40)
-- );

-- CREATE TABLE `frameworks`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `name` VARCHAR(40)
-- );

-- CREATE TABLE `libraries`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `library` VARCHAR(40)
-- );

-- CREATE TABLE `ide`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `idename` VARCHAR(40)
-- );

-- DROP TABLE`frameworks`;

-- CREATE TABLE IF NOT EXISTS `frameworks`(
-- `id` INT PRIMARY KEY AUTO_INCREMENT,
-- `name` VARCHAR(40)
-- );



-- CREATE DATABASE IF NOT EXISTS `codex`;


-- CREATE TABLE IF NOT EXISTS `clients`(
-- `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
-- `lastName` VARCHAR(40),
-- `firstName` VARCHAR(40),
-- `birthDate` DATETIME,
-- `address` VARCHAR(40),
-- `firstPhoneNumber` INT,
-- `secondPhoneNumber` INT,
-- `mail` VARCHAR(40)
-- );

-- ALTER TABLE `languages` ADD COLUMN `versions` VARCHAR(40);

-- ALTER TABLE `frameworks` ADD COLUMN `versions` INT;

-- ALTER TABLE `languages` CHANGE `versions` `version` VARCHAR(40);

-- ALTER TABLE `frameworks` CHANGE `name` `framework` VARCHAR(40);

-- ALTER TABLE `frameworks` CHANGE `framework` `framework` VARCHAR(10);

-- ALTER TABLE `clients` DROP COLUMN `secondPhoneNumber`;

-- ALTER TABLE `clients` CHANGE `firstPhoneNumber` `PhoneNumber` VARCHAR(40) ;

--  ALTER TABLE `clients` ADD COLUMN `zipCode` VARCHAR (40);

--  ALTER TABLE `clients` ADD COLUMN `city` VARCHAR (40);

-- INSERT INTO `languages` (language,version) 
-- VALUES 
-- ('PHP', 'version 5.2'),
-- ('PHP', 'version 5.4'),
-- ('HTML', 'version 5.1'),
-- ('JavaScript', 'version 6'),
-- ('JavaScript', 'version 7'),
-- ('JavaScript', 'version 8'),
-- ('PHP', 'version 7');


-- TRUNCATE TABLE `frameworks`;

-- INSERT INTO `frameworks` (framework,version) 
-- VALUES 
-- ('Symfony', 'version 2.8'),
-- ('Symfony', 'version 3'),
-- ('Jquery', 'version 1.6'),
-- ('Jquery', 'version 2.10');



-- SELECT * FROM `languages` ;

--  SELECT * FROM `languages` WHERE language='PHP';

--  SELECT * FROM `languages` WHERE language='PHP' OR language='javaScript';

-- SELECT * FROM `languages` WHERE id IN (3,5,7) ;
 
--  SELECT * FROM `languages` WHERE language='javaScript'LIMIT 2;

--  SELECT * FROM `languages` WHERE language!='PHP';

--  SELECT * FROM `languages` ORDER BY language;



-- ___________________________________________

-- CREATE TABLE IF NOT EXISTS `ide` (
-- `id` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
-- `name` VARCHAR(40) NOT NULL,
-- `version` VARCHAR(10) NOT NULL,
-- `date` DATE NOT NULL,
-- PRIMARY KEY (`id`)
-- )
-- ENGINE=INNODB;

-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('Eclipse', '3.3', '2007-06-01');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('Eclipse', '3.5', '2009-06-01');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('Eclipse', '3.6', '2010-06-01');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('Eclipse', '3.7', '2011-06-01');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('Eclipse', '4.3', '2013-06-13');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('NetBeans', '7', '2011-04-01');
-- INSERT INTO `ide` (`name`, `version`, `date`) VALUES ('NetBeans', '8.2', '2016-10-03');


-- __________________________________



--  SELECT * FROM `frameworks` WHERE `version` LIKE '%2.%';

-- SELECT * FROM `ide` WHERE date BETWEEN '2010-01-01' AND '2011-12-31';

-- SELECT * FROM `frameworks` WHERE `id` IN (1,3) ;



-- DELETE  FROM `languages` WHERE `language` = 'HTML' ;


-- UPDATE `frameworks`
-- SET `framework` = REPLACE(`framework`, 'Symfony' , 'Symfony2')
-- WHERE `framework` LIKE '%Symfony%';

-- UPDATE `languages`
-- SET version = REPLACE(version, 'version 6', 'version 5.1');




-- ________________________________________________



-- -- Création de la base
-- CREATE DATABASE IF NOT EXISTS `development`;
-- -- On se positione dans la base nouvellement créé
-- USE `development`;
-- -- Création de la table languages
-- CREATE TABLE IF NOT EXISTS `languages` (
-- `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
-- `name` VARCHAR(40) NOT NULL,
-- PRIMARY KEY (`id`)
-- )ENGINE=INNODB;
-- -- Création de la table frameworks qui contient une clé étrangère
-- CREATE TABLE IF NOT EXISTS `frameworks` (
-- `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
-- `name` VARCHAR(40) NOT NULL,
-- `languagesId` INT NOT NULL,
-- PRIMARY KEY (`id`)
-- )ENGINE=INNODB;
-- -- Insertion des données dans la table languages
-- INSERT INTO `languages` (`name`) VALUES ('Assembleur');
-- INSERT INTO `languages` (`name`) VALUES ('C');
-- INSERT INTO `languages` (`name`) VALUES ('C++');
-- INSERT INTO `languages` (`name`) VALUES ('Java');
-- INSERT INTO `languages` (`name`) VALUES ('HTML');
-- INSERT INTO `languages` (`name`) VALUES ('CSS');
-- INSERT INTO `languages` (`name`) VALUES ('JavaScript');
-- INSERT INTO `languages` (`name`) VALUES ('PHP');
-- INSERT INTO `languages` (`name`) VALUES ('C#');
-- INSERT INTO `languages` (`name`) VALUES ('VB');
-- INSERT INTO `languages` (`name`) VALUES ('Python');
-- INSERT INTO `languages` (`name`) VALUES ('Ruby');
-- INSERT INTO `languages` (`name`) VALUES ('Swift');
-- -- Insertion des données dans la table frameworks
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Qt',3);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('SDK Android',4);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Bootstrap',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Foundation',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('KNACSS',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Avalanche',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Miligram',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Skeleton',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Hoisin',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Inuit',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Mimic',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Ministrap',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Lotus',6);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Jquery',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Angular',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('ReactJS',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Vue.js',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Ember.js',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Meteor.js',7);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Laravel',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Symfony',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('CodeIgniter',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Yii',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Phalcon',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Lumen',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Silex',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Slim',8);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('.NET',9);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('.NET',10);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Django',11);
-- INSERT INTO `frameworks` (`name`,`languagesId`) VALUES ('Ruby On Rails',12);



SELECT `frameworks`.`name` `languages`.`name` FROM `languages` LEFT JOIN `languagesid`;

SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID