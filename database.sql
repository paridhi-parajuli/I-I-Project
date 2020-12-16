/* Create Database and Table */
create database events;

use events;


create table details
   (
   id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name varchar(20),
   event_date DATE,
   location varchar(20),
   organizer varchar(20)
   );