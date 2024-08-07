use eoe_db ;

Drop table packages ;

CREATE TABLE packages (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    type_id INT NOT NULL ,
    type_name VARCHAR(255) NOT NULL ,

    name        VARCHAR(255) NOT NULL ,
    overview    VARCHAR(255) NOT NULL ,
    description TEXT NOT NULL ,
    location    VARCHAR(50) ,

    images       JSON NULL ,
    image_folder VARCHAR(255) NULL ,
    videos       JSON NULL ,
    video_folder VARCHAR(255) NULL ,

    filter       JSON NULL,
    category     JSON NULL,

    price        FLOAT NOT NULL ,

    enabled     INT NOT NULL DEFAULT 1 ,

    created_by  INT NULL ,
    update_by   INT NULL ,
    lastUpdate  TIMESTAMP ,
    add_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP ,
    create_time DATETIME COMMENT 'Create Time'   
);





INSERT INTO packages (type_id,type_name,name,overview,description,location,images,image_folder,videos,video_folder,filter,category,enabled) 
VALUES (1,'tours','Tour Pack 1','OverView','description','location','[""]','image_folder','[""]','video_folder','["hot deals", "sea sports"]','[""]',1);

INSERT INTO packages (type_id,type_name,name,overview,description,location,images,image_folder,videos,video_folder,filter,category,enabled) 
VALUES (1,'nilecruises','Tour Pack 1','OverView','description','location','[""]','image_folder','[""]','video_folder','["hot deals", "sea sports"]','[""]',1);

INSERT INTO packages (type_id,type_name,name,overview,description,location,images,image_folder,videos,video_folder,filter,category,enabled) 
VALUES (1,'excursions','Tour Pack 1','OverView','description','location','[""]','image_folder','[""]','video_folder','["hot deals", "sea sports"]','[""]',1);
