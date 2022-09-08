create table Inicio
(
    Pcod int unsigned not null auto_increment,
    usuario varchar(25) not null,
    clave varchar (25) not null,
    email varchar (30) not null, 
    primary key(Pcod),
    Unique key Pcod(Pcod)
) auto_increment=1 collate=utf8_unicode_ci charset=utf8;


insert into Inicio(usuario,clave,email)
    values ("Sevicol020","1234567890","sevicol@gmail.com"),
        ("ZonaPro","ZONAXD16","ZONA@gmail.com");

select * from Inicio; 



SELECT * FROM Inicio WHERE usuario='Sevicol020' AND clave='1234567890';