
use eoe_db ;

DROP TABLE packages ;

CREATE TABLE packages(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    Name	VARCHAR(300) ,
    Section	VARCHAR(100) ,
    Category VARCHAR(100) ,	
    SubCategory	VARCHAR(100) ,
    Overview	TEXT,
    Description TEXT ,
    ImageFolder	VARCHAR(300) ,
    VideoFolder	VARCHAR(300) ,
    Filter TEXT 

) COMMENT '';

LOAD DATA INFILE 'd:/eoe.csv'
INTO TABLE packages
FIELDS TERMINATED BY ';'
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

SELECT * from packages ;
