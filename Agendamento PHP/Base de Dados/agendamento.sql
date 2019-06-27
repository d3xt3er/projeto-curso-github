create database agendamento;
use agendamento;

-- TABELA AUDITORIO --
create table tb_auditorio(
cd_auditorio int not null,
nm_auditorio varchar(45),
constraint pk_auditorio
primary key(cd_auditorio)
);

-- TABELA PERIODO --
create table tb_periodo(
cd_periodo int not null,
cd_periodo_equipamentos int not null,
nm_periodo varchar(45),
ds_periodo varchar(150),
cd_auditorio int,
constraint pk_periodo
primary key(cd_periodo),
constraint fk_periodo_auditorio
foreign key(cd_auditorio)
references tb_auditorio(cd_auditorio)
);

-- TABELA USUARIO --
create table tb_usuario(
cd_usuario int not null,
nm_usuario varchar(70),
cd_periodo int,
constraint pk_usuario
primary key(cd_usuario),
constraint fk_usuario_periodo
foreign key(cd_periodo)
references tb_periodo(cd_periodo)
);

-- TABELA LABORATORIO --
create table tb_laboratorio(
cd_laboratorio int not null,
nm_laboratorio varchar(70),
ds_laboratorio varchar(70),
constraint pk_laboratorio
primary key(cd_laboratorio)
);

-- TABELA PERIODO DO LABORATORIO --
create table tb_periodo_laboratorio(
cd_laboratorio int,
cd_periodo int,
constraint fk_laboratorio
foreign key(cd_laboratorio)
references tb_laboratorio(cd_laboratorio),
constraint fk_periodo
foreign key(cd_periodo)
references tb_periodo(cd_periodo)
);

-- TABELA TIPO DO EQUIPAMENTO --
create table tb_tipo_equipamento(
cd_tipo int not null,
nm_tipo varchar(45),
constraint pk_tipo_equipamento
primary key(cd_tipo)
);

-- TABELA EQUIPAMENTOS --
create table tb_equipamentos(
cd_equipamentos int not null,
nm_equipamentos varchar(45),
cd_tipo int,
cd_periodo int,
constraint pk_equipamentos
primary key(cd_equipamentos),
constraint fk_tipo_equipamentos
foreign key(cd_tipo)
references tb_tipo_equipamento(cd_tipo)
);

-- TABELA PERIODO DO EQUIPAMENTO -- 	
create table tb_periodo_equipamentos(
cd_periodo int,
cd_equipamentos int,
constraint fk_periodo_e
foreign key(cd_periodo)
references tb_periodo(cd_periodo),
constraint fk_equipamentos
foreign key(cd_equipamentos)
references tb_equipamentos(cd_equipamentos)
);