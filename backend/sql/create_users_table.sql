CREATE TABLE `bookmymovie`.`users` ( 
	`name` VARCHAR(40) NOT NULL ,
	`email` VARCHAR(40) NOT NULL ,
	`phone` VARCHAR(13) NOT NULL ,
	`gender` ENUM('M','F','O') NOT NULL ,
	`birthdate` DATE NOT NULL ,
	`username` VARCHAR(20) NOT NULL ,
	`password` VARCHAR(20) NOT NULL ,
	PRIMARY KEY (`email`),
	UNIQUE (`username`)
);
