CREATE DATABASE CV_BUILDER;

USE CV_BUILDER;

mysql> CREATE TABLE signup(
    -> id INT NOT NULL AUTO_INCREMENT,
    -> firstname VARCHAR(255) NOT NULL,
    -> secondname VARCHAR(255) NOT NULL,
    -> username VARCHAR(255) NOT NULL UNIQUE,
    -> email VARCHAR(255) NOT NULL UNIQUE,
    -> password VARCHAR(255) NOT NULL,
    -> gender VARCHAR(255) NOT NULL,
    -> phone VARCHAR(255) NOT NULL UNIQUE,
    -> PRIMARY KEY(id)
    -> );

