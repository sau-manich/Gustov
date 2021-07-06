/*
CREAMOS LA BASE DE DATOS gustov
*/
DROP DATABASE IF EXISTS gustov;
CREATE DATABASE gustov;
USE gustov;

/* ============================== CREAMOS LA TABLA usuario ======================================*/

create table usuario
(
	id_usuario int not null auto_increment primary key,
	usuario varchar(50),
	email varchar(255),
	contrasena varchar(60),
	rol bool
);
/*
Insertamos datos a la tabla usuario
*/
insert into usuario(id_usuario,usuario,email,contrasena,rol) value (null,"Administrador","admin@gmail.com","admin",1);
insert into usuario(id_usuario,usuario,email,contrasena,rol) value (null,"Usuario","user@gmail.com","user",2);



/* ============================== CREAMOS LA TABLA menu ======================================*/

create table menu
(
	id_menu int not null auto_increment primary key,
	nombre varchar(50),
	precio int,
	ingredientePrincipal varchar(50),
	ingredienteSecundario varchar(50),
	ingredienteComplemento varchar(50),
	estado bool
);
/*
Insertamos datos a la tabla menu
*/
insert into menu(id_menu,nombre,precio,ingredientePrincipal,ingredienteSecundario,ingredienteComplemento,estado) value (null,"Charke", 110, "Carne de llama", "Mote", "Quesillo",1);
insert into menu(id_menu,nombre,precio,ingredientePrincipal,ingredienteSecundario,ingredienteComplemento,estado) value (null,"Picante de pollo", 50, "Pollo criollo", "Jigote de verduras picante", "Tunta",1);
insert into menu(id_menu,nombre,precio,ingredientePrincipal,ingredienteSecundario,ingredienteComplemento,estado) value (null,"Pique a lo macho", 60, "Salchica roja picante", "Carne de res", "Huevo y papa",1);



/* ============================== CREAMOS LA TABLA cliente ======================================*/

create table cliente
(
	id_cliente int not null auto_increment primary key,
	nombreCompleto varchar(50),
	telefono int,
	descripcion varchar(50),
	ci varchar(60)
);
/*
Insertamos datos a la tabla cliente
*/
insert into cliente(id_cliente,nombreCompleto,telefono,descripcion,ci) value (null,"Oscar Quisbert",65498732,"Joven con lentes, siempre sonrriendo","1111111111");
insert into cliente(id_cliente,nombreCompleto,telefono,descripcion,ci) value (null,"Hector Copa",65498732,"Joven con motosicleta, talves delivery","22222222222");


/* ============================== CREAMOS LA TABLA venta ======================================*/

create table venta
(
	id_venta int not null auto_increment primary key,
	id_usuario int null,
	id_cliente int null,
	precioTotal float,
  	foreign key (id_usuario) references usuario(id_usuario),
  	foreign key (id_cliente) references cliente(id_cliente)
);

/*
Insertamos datos a la tabla venta
*/
insert into venta(id_venta,id_usuario,id_cliente,precioTotal) value (null,1,1,110);


/* ============================== CREAMOS LA TABLA ventaMenu ======================================*/

create table ventaMenu
(
	id_ventaMenu int not null auto_increment primary key,
	id_menu int,
	id_venta int,
	cantidad int,
	subTotal float,
  	foreign key (id_menu) references menu(id_menu),
  	foreign key (id_venta) references venta(id_venta)
);

/*
Insertamos datos a la tabla ventaMenu
*/
insert into ventaMenu(id_ventaMenu,id_menu,id_venta,cantidad,subTotal) value (null,1,1,1,110);
