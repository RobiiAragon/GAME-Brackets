create database proyecto;

drop database proyecto; /*esto solo borra la base de datos no tocar*/

create table plataforma(
codigo int(4) primary key auto_increment,
nombre varchar(40) not null
);

/*inserts de la tabla plataforma*/

INSERT into plataforma(codigo,nombre)
values
(null,'Nintendo Switch Online'),
(null,'Play Station Network'),
(null,'PC'),
(null,'Xbox Live');


drop table plataforma /*esto borra la tabla de plataforma*/
drop table generos /*esto borra la tabla de generos*/

create table generos(
codigo int(4) primary key auto_increment,
nombre varchar(20) not null,
descripcion varchar(20) not null
);

/*insert de las tablas de generos*/
INSERT into generos(codigo,nombre,descripcion)
values
(null,'Battle Royale','Equipos de 4'),
(null,'Shooter','Equipos de 5'),
(null,'MOBA','Individual');

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

/*inserts de la tabla de juegos*/
insert into juegos(codigo,nombre,plataforma,generos)
values ('null','Smash Bros',1,3)
/**/

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



