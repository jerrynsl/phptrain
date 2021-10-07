drop database if exists useraccounts;
create database useraccounts;
use useraccounts;

create table user(
id int auto_increment,
fname varchar(20),
lname varchar(20),
email varchar(50),
phonenumber varchar(50),
password char(41),
primary key(id)
);
insert into user values(1,'jeff','ng','hsadlfh@gmail.com','012365478','qweerrrt');