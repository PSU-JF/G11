/*--crear la base de datos*/
/*create database Sevicol_v1;*/
 
/*--crear tablas de la base de datos
--tabla vigilante*/
create table vigilante(

    cod_vi int auto_increment,
    nom_vi varchar(30) not null,
    tel_vi varchar(30) not null,
    ndi_vi varchar(30) not null,
    rh_vi varchar(5) not null,
    genero_vi varchar(10) not null,
    fcod_pt int,
    fcod_turn int,
    PRIMARY KEY(cod_vi)
)auto_increment=1;

/*--tabla usuario*/
create table usuario(
    cod_usu int auto_increment,
    nom_usu varchar(50) not null,
    tel_usu varchar(30) not null,
    nid_usu varchar(30) not null,
    objeto varchar(100) not null,
    razon varchar(100) not null,
    primary key(cod_usu)
)auto_increment=1;
/*--tabla turnos*/
create table turnos(
    cod_turn int auto_increment,
    nom_turn varchar(30) not null,
    hora varchar(30) not null,
    primary key(cod_turn)
)auto_increment=1;

/*--tabla puesto de trabajo*/
create table puesto_de_trabajo(
    cod_pt int auto_increment,
    nom_pt varchar(50) not null,
    tel_pt varchar(30) not null,
    dir_pt varchar(100) not null,
    nom_mat varchar(100),
    primary key(cod_pt)
)auto_increment=1;

/*--tabla minuta*/
create table minuta
(
    cod_min int auto_increment,
    hora_entrada varchar(100)not null,
    hora_salida varchar(100) not null,
    fecha_min varchar(100) not null, 
    fcod_usu int,
    fcod_pt int,
    fcod_vi int,
    primary key(cod_min)
)auto_increment=1;


/*--relaciones*/
/*alter table ta_debil add constraint nom_relacion
foreign key (nom_fk ta_debil)references ta_fuerte(nom_pk);*/
/*-- vigiliante adquiere puesto de trabajo*/
alter table vigilante add constraint adquiere
foreign key (fcod_turn)references turnos(cod_turn);
/*--minuta-anexa-usuario*/
alter table minuta add constraint anexa
foreign key (fcod_usu)references usuario(cod_usu);
/*--minuta-gana-puesto de trabajo*/
alter table minuta add constraint gana
foreign key (fcod_pt)references puesto_de_trabajo(cod_pt);
/*--minuta-obtiene-vigilante*/
alter table minuta add constraint obtiene
foreign key (fcod_vi)references vigilante(cod_vi);
/*--puesto de trabajo -tiene- vigilante*/
alter table vigilante add constraint tiene
foreign key (fcod_pt)references puesto_de_trabajo(cod_pt);
/*puesto de trabajo -consigue observaciones*/
alter table observacion add constraint consigue
foreign key (fcod_pt)references puesto_de_trabajo(cod_pt);
/*--insertar datos en tablas fuertes o independientes*/
/*--datos usuario*/
insert into usuario(nom_usu,tel_usu,nid_usu,objeto,razon)
values("Carlos Arturo","3111111111","01111111111","Ninguno","Vengo a hablar coordinadora de bachiller"),("Jose Miguel","3222222222","02222222222","Maletin con papeles de matricula","Vengo a matricular a mis hijos en el colegio");
/*--datos turnos*/
insert into turnos(nom_turn,hora)
values("Diurno","5:45-17:45"),("Nocturno","17:45-5:45");
/*  --datos puesto de trabajo*/
insert into puesto_de_trabajo(nom_pt,tel_pt,dir_pt,nom_mat)
values("Julio Florez","305 792 3922","Cra. 68b #94-12, Bogotá","radio,linterna,tomfa, portatomfa,pito,lllaves,sistema de alarmas,celular corporativo"),("Santa Rosa","300 207 2701","Calle 102A 70 40 Bogotá - Colombia","radio,linterna,tomfa,portatomfa,pito,sistemas de alarmas,boton de alarmas,celular corporativo,llaves");
/* --tablas debiles o dependientes */
/* --datos vigilante */
INSERT INTO vigilante(nom_vi,tel_vi,ndi_vi,rh_vi,genero_vi,fcod_pt,fcod_turn)
VALUES ("Daniel Juez","3123456789","1111111111","O+","Masculino",1,1),("Laura Barrera","2123456789","2222222222","B+","Femenino",2,2);
/* datos minuta */
INSERT INTO minuta(hora_entrada,hora_salida,fecha_min,fcod_usu,fcod_pt,fcod_vi) 
VALUES ("12:10","14:45","04/10/2020",1,1,2),("13:12","16:37","10/01/2021",2,2,1);

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
/*observaciones*/
create table observacion(
    cod_ob int auto_increment,
    fecha_ob varchar(50) not null,
    hora varchar(50) not null,
    asunto varchar(50) not null,
    observacion varchar(10000) not null,
    fcod_pt int,
    primary key(cod_ob)
)auto_increment=1 ;

insert into observacion(cod_ob,fecha_ob,hora,asunto,observacion,fcod_pt)
    values(1,"6/09/2022","12:38","Estudiante Leccionado","Un Estudiante tuvo un accidente alas horas del descanso de bachiller el cual se cayo por las escleras y toca remitirlos para el hospital de cafam ya que la situacion se complico.",1);