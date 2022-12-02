create database proyecto;

drop database proyecto; /*esto solo borra la base de datos no tocar*/

create table plataforma(
codigo int(4) primary key auto_increment,
nombre varchar(40) not null
);




drop table plataforma /*esto borra la tabla de plataforma*/
drop table generos /*esto borra la tabla de generos*/

create table generos(
codigo int(4) primary key auto_increment,
nombre varchar(20) not null,
descripcion varchar(20) not null
);



/*foreign key pendiente en generos posible para la tabla juegos*/

create table juegos(
codigo int(5) primary key auto_increment,
nombre varchar(30) not null,
generos int(4) not null,
foreign key(generos) references generos(codigo)
);




create table juego_plataforma(
juegos int(5) not null,
plataforma int(4) not null,
foreign key(juegos) references juegos(codigo),
foreign key(plataforma) references plataforma(codigo),
primary key(juegos,plataforma)
);

create table nacionalidad(
codigo int(4) primary key auto_increment,
nacionalidad varchar(20) not null
);





create table jugadores(
codigo int(5) primary key auto_increment,
Nombres varchar(40) not null,
Apellidos varchar(40) not null,
Alias varchar(20) not null,
nacionalidad int(4) not null,
foreign key(nacionalidad) references nacionalidad(codigo)
);




create table juego_jugadores(
juegos int(5) not null,
jugadores int(5) not null,
foreign key(juegos) references juegos(codigo),
foreign key(jugadores) references jugadores(codigo),
primary key(juegos,jugadores)
);

ALTER TABLE jugadores 
ADD password VARCHAR(8) not null;


create table tipo_evento(
codigo int(7) primary key auto_increment,
descripcion varchar(100) not null
);

create table evento(
codigo int(5) primary key auto_increment,
nombre varchar(100) not null,
fecha date not null,
duracion varchar(40) not null,
tipo_evento int(7) not null,
foreign key(tipo_evento) references tipo_evento(codigo)
);

create table jugadores_evento(
jugadores int(5) not null,
evento int(5) not null,
foreign key(jugadores) references jugadores(codigo),
foreign key(evento) references evento(codigo),
primary key(jugadores,evento)
);

create table emparejamiento(
codigo int(5) primary key auto_increment,
posiciones varchar(3) not null,
puntaje int (5) not null,
juegos int(5) not null,
foreign key(juegos) references juegos(codigo)
);

create table jugadores_emparejamiento(
jugadores int(5) not null,
emparejamiento int(5) not null,
foreign key(jugadores) references jugadores(codigo),
foreign key(emparejamiento) references emparejamiento(codigo),
primary key(jugadores,emparejamiento) 
);


create table evento_emparejamiento(
evento int(5) not null,
emparejamiento int(5) not null,
foreign key(evento) references evento(codigo),
foreign key(emparejamiento) references emparejamiento(codigo),
primary key(evento,emparejamiento)
);

create table clasificacion(
codigo int(5) primary key auto_increment,
posicion varchar(15) not null
);

create table emparejamiento_clasificacion(
emparejamiento int(5) not null,
clasificacion int(5) not null,
foreign key(emparejamiento) references emparejamiento(codigo),
foreign key(clasificacion) references clasificacion(codigo),
primary key(emparejamiento,clasificacion)
);

/* triggers  */

/*

 Trigger 1. No se puede eliminar el juego de la tabla juegos

 La funcion de este trigger es que no se pueda eliminar
 el juego ya que esta es importante para la
 tabla `jugadores` y la funionalidad principal
 de la pagina.

*/

delimiter$$
 create trigger  notdelete
 before delete on juegos
 for each row 
 begin
   declare msg varchar(255);
     set msg =concat('no pudes eliminar los juegos');
     signal sqlstate '45000' set  message_text=msg;
 end$$
delimiter;

DELETE  FROM juegos where codigo = 1


/*

 Trigger 2. No se puede eliminar la `nacionalidad`

 La funcion de este trigger es que no se pueda eliminar
 la `nacionalidad` ya que esta es importante para la
 tabla `jugadores`.

*/

delimiter$$
 create trigger  notdeletenationality
 before delete on nacionalidad
 for each row 
 begin
   declare msg varchar(255);
     set msg =concat('no pudes eliminar la nacionalidad');
     signal sqlstate '45000' set  message_text=msg;
 end$$
delimiter;




alter table emparejamiento add COLUMN Alias varchar(20) not null;

/*vistas*/
create view jugadores_mexicanos as
select * from jugadores
WHERE jugadores.nacionalidad = 10;

select * from jugadores_mexicanos;

create view jugadores_estadounidenses as
select * from jugadores
WHERE jugadores.nacionalidad = 9;

select * from jugadores_estadounidenses;

create view jugadores_britanicos as
select * from jugadores
WHERE jugadores.nacionalidad = 8;

select * from jugadores_britanicos;

create view jugadores_coreanos as
select * from jugadores
WHERE jugadores.nacionalidad = 7;

select * from jugadores_coreanos;

create view jugadores_rusos as
select * from jugadores
WHERE jugadores.nacionalidad = 6;

select * from jugadores_rusos;

create view jugadores_japonese as
select * from jugadores
WHERE jugadores.nacionalidad = 5;

select * from jugadores_japonese;

create view jugadores_india as
select * from jugadores
WHERE jugadores.nacionalidad = 4;

select * from jugadores_india;

create view jugadores_china as
select * from jugadores
WHERE jugadores.nacionalidad = 3;

select * from jugadores_china;

create view jugadores_canadiences as
select * from jugadores
WHERE jugadores.nacionalidad = 2;

select * from jugadores_canadiences;

create view jugadores_brasilenos as
select * from jugadores
WHERE jugadores.nacionalidad = 1;

select * from jugadores_brasilenos;