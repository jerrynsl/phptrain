drop database if exists adminaccounts;
create database adminaccounts;
use adminaccounts;

create table admin(
id int auto_increment,
adminname varchar(50),
password char(50),
primary key(id)
);

insert into admin values(1,'Vincent','lauciachang'),(2,'Melvin','daigorcarry'),(3,'Jeffrey','rich7'),(4,'Charles','lhm1234');

