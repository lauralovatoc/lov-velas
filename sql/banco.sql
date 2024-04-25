drop database if exists lov;
create database lov;
use lov;

create table tipo_usuario(
id_tipo_usuario int not null,
nome varchar(40),
primary key(id_tipo_usuario)
);

create table usuario(
nome varchar(40),
email varchar(40) not null,
senha varchar(40) not null,
id_tipo_usuario int, 
foreign key (id_tipo_usuario) references tipo_usuario(id_tipo_usuario),
primary key (email)
);

create table vela(
id_vela int auto_increment not null,
nome varchar(40),
descr varchar(60),
quantidade int,
valor float,
caminho_img varchar(100),
primary key (id_vela)
);

create table pedido(
id_pedido int auto_increment not null,
data_compra timestamp default current_timestamp,
valor_total Float,
email varchar(40),
foreign key(email) references usuario(email),
primary key (id_pedido)
);

create table vela_pedido(
id_vela int not null,
id_pedido int not null,
quantidade int not null,
foreign key (id_pedido) references pedido(id_pedido),
foreign key (id_vela) references vela(id_vela)
);
ALTER TABLE vela CHANGE descr descr varchar(200);

insert into tipo_usuario values (1, "Administrador");
insert into tipo_usuario values (2, "Usuário");
insert into usuario(nome,email,senha,id_tipo_usuario) values ("Laura Lovato","laura.lovato@gmail.com","Marinc77.",1);

insert into vela values (1,"Vela Salada de Frutas","Vela aromatizada com essência de salada de frutas.",70,60.00,"img/vela-salada-fruta.jpg");
insert into vela values (2,"Vela Blueberry","Vela aromatizada com essência de mirtilo.",95,55.00,"img/vela-blueberry.jpeg");
insert into vela values (3,"Vela Butter Waffles","Vela aromatizada com essência de waffles amentegados.",67,50.00,"img/vela-butter-waffles.jpeg");
insert into vela values (4,"Vela Birthday Cake","Vela aromatizada com essência de bolo de baunilha.",45,60.00,"img/vela-bday-cake.jpg");
insert into vela values (5,"Vela Raspberry","Vela aromatizada com essência de framboesa.",54,55.00,"img/vela-raspberry.jpg");
insert into vela values (6,"Vela Strwaberry Choco","Vela aromatizada com essência de morango e essência de chocolate.",39,60.00,"img/vela-strawberry-choco.jpeg");
insert into vela values (7,"Vela Bamboo Forest","Vela aromatizada com essência de bambu.",67,50.00,"img/vela-bamboo-forest.png");
insert into vela values (8,"Vela Teddy Bear","Vela aromatizada com essência de sorvete de baunilha, vem com um ursinho em cima.",57,70.00,"img/vela-teddy-bear.jpeg");
insert into vela values (9,"Vela Donut","Vela aromatizada com essência de donut.",54,70.00,"img/vela-donut.jpeg");
insert into vela values (10,"Vela Purple Teddy Bear","Vela aromatizada com essência de uva, vem com um ursinho em cima.",28,70.00,"img/vela-purple-teddy-bear.jpeg");
insert into vela values (11,"Vela Strwaberry Milkshake","Vela aromatizada com essência milkshake de morango.",78,50.00,"img/vela-strawberry-milkshake.png");
insert into vela values (12,"Vela Lavender","Vela aromatizada com essência de lavanda.",50,55.00,"img/vela-lavender.jpeg");
insert into vela values (13,"Vela Coffee","Vela aromatizada com essência de café.",49,55.00,"img/vela-coffee.jpeg");
insert into vela values (14,"Vela Cherry Blossom","Vela aromatizada com essência de cereja.",28,50.00,"img/vela-cherry-blossom.png");
insert into vela values (15,"Vela Choco","Vela aromatizada com essência de chocolate.",56,55.00,"img/vela-choco.png");
insert into vela values (16,"Vela Frutas Vermelhas","Vela aromatizada com essência de mirtilo e cereja.",50,55.00,"img/vela-frutas-vermelhas.png");
insert into vela values (17,"Vela Strawberry","Vela aromatizada com essência de morango.",49,55.00,"img/vela-strawberry.png");
insert into vela values (18,"Vela Duo Teddy Bear","Vela aromatizada com essência de baunilha e mirtilo, vem com dois ursinhos em cima.",35,70.00,"img/vela-duo-teddy-bear.jpeg");
insert into vela values (19,"Vela Margaret","Vela aromatizada com essência de maragarida.",37,55.00,"img/vela-margaret.jpeg");
insert into vela values (20,"Vela Ice Cream Sunday","Vela aromatizada com essência de sorvete.",62,70.00,"img/vela-ice-cream-sunday.jpeg");
