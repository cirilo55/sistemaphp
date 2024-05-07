create database sistemamvc
-- CREATED AT E UPDATE AT criar rotinas;
create table users (
	id INT PRIMARY KEY AUTO_INCREMENT,
  userName varchar(30),
  lastName varchar(30),
  userEmail varchar(30),
  password varchar(255),
  userType int,
  imagePath VARCHAR(255),
  createdAt datetime,
  updatedAt datetime
)

create table notifications(
   `id` INT PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(16),
  `description` varchar(255),
  `user_notification` INT NOT NULL,
   CONSTRAINT user_notification
   FOREIGN KEY (user_notification) REFERENCES users(id)
   ON DELETE CASCADE
)

create table mainConfig(
  	id int PRIMARY KEY AUTO_INCREMENT,
    mainColor varchar(10),
    mainPage varchar(30),
    createdAt datetime,
    updatedAt datetime 

)
create table systemModule(
   id int PRIMARY KEY AUTO_INCREMENT,
   moduleName varchar(30), 
   `order` int NOT NULL
)ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE moduleItem (
    id INT PRIMARY KEY AUTO_INCREMENT,
    itemName VARCHAR(30),
    idModulo INT NOT NULL,
    archorValue VARCHAR(30),
    CONSTRAINT fk_module
    FOREIGN KEY (idModulo) REFERENCES systemModule(id)
    ON DELETE CASCADE
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;


CREATE TABLE `query_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_date` datetime NOT NULL,
  `query_sql` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table clients(
   id INT PRIMARY KEY AUTO_INCREMENT,
  `clientName` varchar(30),
  createdAt datetime,
  updatedAt datetime
);

create table task (
  id int PRIMARY KEY AUTO_INCREMENT,
  `taskName` varchar(30),
  `description` description varchar(255);
  `limitDate` datetime,
  `status` INT,
  `description` description varchar(255);
  `user_task_responsible` int REFERENCES users(id),
  `user_task_owner` int REFERENCES users(id),
  createdAt datetime,
  updatedAt datetime
);
-- alter table task add column description varchar(255);
/*usertype = 1 (Admin) usetype = 2 (Padrão)*/
ALTER TABLE users
ALTER COLUMN id datatype;


INSERT INTO users (id,userName,lastName,userType,`password`) VALUES (1,'Admin','1234',0, '$2y$10$BWisgENvxN0w7ruaHLS.ruRH84f7slYOADvWWVEHRq1kuc4cQ13NK')
INSERT INTO users (id,userName,lastName,userType,`password`) VALUES (2,'CIRILO','1234',0, '$2y$10$BWisgENvxN0w7ruaHLS.ruRH84f7slYOADvWWVEHRq1kuc4cQ13NK')
INSERT INTO users (id,userName,lastName,userType,`password`) VALUES (3,'Cid','1234',0, '81dc9bdb52d04dc20036dbd8313ed055')

Insert into systemModule (id, moduleName, `order`) VALUES (1, 'Operacional', 1);
Insert into systemModule (id, moduleName, `order`) VALUES (2, 'Configurações', 9);
Insert into systemModule (id, moduleName, `order`) VALUES (3, 'Dashboards', 2);

INSERT INTO moduleItem (id, itemName, idModulo, archorValue) VALUES (1, 'Usuarios', 2 , 'users');
INSERT INTO moduleItem (id, itemName, idModulo, archorValue) VALUES (2, 'Tarefas', 1, 'tarefas') ;
INSERT INTO moduleItem (id, itemName, idModulo, archorValue) VALUES (3, 'Clientes', 1, 'clientes');
Insert into moduleItem (id, itemName, idModulo, archorValue) VALUES (4, 'Configurações Gerais', 2, 'config');

insert into  clients (id, clientName) VALUES (1, 'empresa n1')
insert into  clients (id, clientName) VALUES (2, 'empresa n2')

INSERT INTO mainConfig (id) VALUES (1)



