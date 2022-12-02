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

insert into juegos(codigo,nombre,generos)
values
(null,'Smash Bros',3),
(null,'Overwatch',2),
(null,'League of Legend',1),
(null,'Counter Strike',2);


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

insert into nacionalidad(codigo,nacionalidad)
values
(null,'Brasil'),
(null,'Canada'),
(null,'China'),
(null,'India'),
(null,'Japon'),
(null,'Rusia'),
(null,'Korea del Sur'),
(null,'Reino Unido'),
(null,'Estados Unidos'),
(null,'Mexico')



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


/*entrega final de proyecto

1.Portada

*/




insert into jugadores(Nombres,Apellidos,Alias,nacionalidad,password)
values ('Luka','Perkovic','Perkz',2,'kullolok'),
('Jesus','Navarez','Jelty',3,'kullolok'),
('Tyler','Blevins','Ninja',4,'kullolok'),
('Angel','Miranda','envidiaN',5,'kullolok'),
('Jack','Ashton','Ashtye',10,'kullolok'),
('Finn','Andersen','Karrigan',8,'kullolok'),
('Marcelo','David','coldzera',6,'kullolok'),
('Jarod','Quesada','Azilys',7,'kullolok'),
('Frank','Oskam','Globin',8,'kullolok'),
('Ibai','Llanos','Ibai',9,'kullolok'),
('David','Carnovas','TheGref',1,'kullolok'),
('Raul','Alvarez','AuronPlay',2,'kullolok'),
('Kyle','Giersdorf','Bugha',3,'kullolok'),
('Manuel','Fernandez','LOLITOFDEZ',4,'kullolok'),
('Oleksandr','Kostyliev','s1mple',5,'kullolok'),
('Aitor','Fernandez','soker',10,'kullolok'),
('Alejandro','Quejo','mopoz',6,'kullolok'),
('Nicolai','Reedtz','Dev1ce',7,'kullolok'),
('Epitacio','Pessoa','Taco',8,'kullolok'),
('Juan','Ruiz','Juanca',9,'kullolok'),
('Zakaria','Kakayannis','Doberman',1,'kullolok'),
('Joao','Caetano','destructor',2,'kullolok'),
('Samir','Khoualed','DonkeyKong',3,'kullolok'),
('Enrique','Kasas','Asassins',4,'kullolok'),
('Kim','Jong-in','Pray',5,'kullolok'),
('Gwak','Bo-seong','BDD',10,'kullolok'),
('Han','Wang-ho','peanut',6,'kullolok'),
('Elias','Lipp','Upset',7,'kullolok'),
('Oskar','Boderek','Selfmade',8,'kullolok'),
('Steven','Liv','Hans-sama',9,'kullolok'),
('kilian','Pita','Zidane10',1,'kullolok'),
('Javier','Romero','Lion',2,'kullolok'),
('Andoni','Payo','Andoni',3,'kullolok'),
('Jaime','Alverez','Gravesen',4,'kullolok'),
('Robert','Huang','Blader',5,'kullolok'),
('Kadircan','Mum','Kadir',10,'kullolok'),
('Lukas','Kilmer','Santorin',6,'kullolok'),
('Shin','Tae-min','HiRit',7,'kullolok'),
('Oliver','Ryppa','HaRat',8,'kullolok'),
('ibrahim','Allami','Fudge',9,'kullolok'),
('Moon','Woo-chan','Cuzz',1,'kullolok'),
('Norman','Kaiser','Kaisser',2,'kullolok'),
('Barney','Morris','Alphari',3,'kullolok'),
('Jesper','Svenning','Zven',4,'kullolok'),
('Matias','Orzag','Carzzy',5,'kullolok'),
('Marek','Brazda','Humanoid',10,'kullolok'),
('Jo','Yong-in','CoreJJ',6,'kullolok'),
('Irfan','Berk','Armut',7,'kullolok'),
('Park','Jin-seong','Teddy',8,'kullolok'),
('Kim','Chang-dong','canna',9,'kullolok'),
('Mertai','Seros','Mersa',10,'kullolok'),
('Matus','Jakub','Neon',1,'kullolok'),
('Stev','Chen','Reeker',2,'kullolok'),
('Targanas','Cravve','Raff',3,'kullolok'),
('Vincent','Berrie','Vetheo',4,'kullolok'),
('Serkan','Altigan','xKenzuke',5,'kullolok'),
('Nokolay','Akatov','Zanzarah',10,'kullolok'),
('Jacob','Lion','Jake',6,'kullolok'),
('Park','Jun-young','Profit',7,'kullolok'),
('Dante','MCfly','DOC',9,'kullolok'),
('Lee','Sang-hyeok','faker',1,'kullolok');


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