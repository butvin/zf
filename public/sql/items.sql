CREATE TABLE items (
id int(11) NOT NULL auto_increment,
name varchar(100) NOT NULL,
email varchar(100) NOT NULL,
tel int NOT NULL,
title varchar(100) NOT NULL,
year int NOT NULL,
denomination float NOT NULL,
priceMin float NOT NULL,
priceMax float NOT NULL,
notes text NOT NULL,
PRIMARY KEY (id)
);