drop database if exists train;
create database train;
use train;

create table contact(
id int not null AUTO_INCREMENT,
email varchar(50) not null,
name varchar(50),
subject varchar(100),
description varchar(300), 
primary key(id));


insert into contact values (1,'jeffng@gmail.com','Ng Kar Chun','Why I am rich?','Can you all tell me why i can buy a nitendo switch without thinking?');
insert into contact values (2,'nicholasyong@e.newera.edu.my','Nicholas Yong','How can I get a gf?','Help! I need a gf please.');

create table location(
lid int not null AUTO_INCREMENT,
location varchar(20),
primary key(lid)
);

insert into location values(1,'Tampin');
insert into location values(2,'Rembau');
insert into location values(3,'Sungai Gadut');
insert into location values(4,'Senawang');
insert into location values(5,'Seremban');
insert into location values(6,'Tiroi');
insert into location values(7,'Labu');
insert into location values(8,'Nilai');
insert into location values(9,'Batang Besar');
insert into location values(10,'Bangi');
insert into location values(11,'UKM');
insert into location values(12,'Kajang');
insert into location values(13,'Serdang');
insert into location values(14,'Bandar Tasik Selatan');
insert into location values(15,'Salak Selatan');
insert into location values(16,'Seputeh');
insert into location values(17,'MidValley');
insert into location values(18,'KL Sentral');

create table booking(
id int auto_increment,
usernname varchar(50),
origin varchar(50),
date date,
time varchar(50),
numberoft int(50),
primary key(id)
);

insert into booking values(1,'jeff','kajang','2019-12-11','9:00','1');