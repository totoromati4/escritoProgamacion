drop database escrito;
create database escrito;
use escrito;

create table tareas(
id int primary key auto_increment,
titulo varchar(50),
contenido varchar(200),
estado varchar(40),
autor varchar(70),
created_at timestamp,
updated_at timestamp,
deleted_at timestamp
);