CREATE TABLE `bookmymovie`.`paymenthistory` ( 
    `username` VARCHAR(20) NOT NULL , 
    `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `moviename` VARCHAR(30) NOT NULL ,
    `ticketcount` INT NOT NULL ,
    `price` INT NOT NULL
) ENGINE = InnoDB; 