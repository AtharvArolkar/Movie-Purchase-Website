CREATE TABLE `moviename` ( 
	`movieid` INTEGER NOT NULL ,
	`moviename` VARCHAR(25) NOT NULL ,
	`seatsbooked` INTEGER NOT NULL ,
    'totalseats' INTEGER NOT NULL,
	`movdate` DATE NOT NULL ,
    'ratings' INTEGER NOT NULL
	PRIMARY KEY (`movieid`)
);
