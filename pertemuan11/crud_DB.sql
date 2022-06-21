DROP DATABASE IF EXISTS crud_DB;
CREATE DATABASE crud_DB;
USE crud_DB;

CREATE TABLE user (
   id             INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   names          VARCHAR(50) NOT NULL,
   email          VARCHAR(50) NOT NULL,
   mobile         VARCHAR(15) NOT NULL
);
