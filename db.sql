create database ingagedb;
use ingagedb;
create user 'user'@'localhost' identified by '123';
grant all on ingagedb.* to 'user'@'localhost';
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `uName` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
);

DELIMITER //
CREATE PROCEDURE insertNewUser(IN firstname VARCHAR(50),IN lastname VARCHAR(50),IN username VARCHAR(20),IN email_address VARCHAR(50),IN gender VARCHAR(20),IN pass VARCHAR(50),IN dob date)
 BEGIN
 INSERT INTO user (fName,lName,uName,email,sex,password,date_of_birth) values(firstname,lastname,username,email_address,gender,pass,dob);
 END //
DELIMITER ;