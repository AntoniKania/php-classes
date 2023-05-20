CREATE DATABASE IF NOT EXISTS myDB;
use myDB;

CREATE TABLE IF NOT EXISTS car(
    id int AUTO_INCREMENT NOT NULL,
    made varchar(255),
    model varchar(255),
    price double(10,2),
    production_year int,
    description varchar(255),
    PRIMARY KEY (id)
);


-- test to see if script was run
INSERT INTO car(made, model) VALUES ('Audi', 'A6');