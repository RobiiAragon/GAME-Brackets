/*inserts de la tabla plataforma*/

INSERT into plataforma(codigo,nombre)
values
(null,'Nintendo Switch Online'),
(null,'Play Station Network'),
(null,'PC'),
(null,'Xbox Live');

/*insert de las tablas de generos*/
INSERT into generos(codigo,nombre,descripcion)
values
(null,'Battle Royale','Equipos de 4'),
(null,'Shooter','Equipos de 5'),
(null,'MOBA','Individual');
insert into juegos(codigo,nombre,generos)
values
(null,'Smash Bros',3),
(null,'Overwatch',2),
(null,'League of Legend',1),
(null,'Counter Strike',2);
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
