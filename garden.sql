DROP DATABASE IF EXISTS garden;
CREATE DATABASE garden;
USE garden;


CREATE TABLE login(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50),
    password VARCHAR(40)
    );

CREATE TABLE tb_treballador(
    id_treballador INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    cognoms VARCHAR(30),
    email VARCHAR(40),
    direccio VARCHAR(40),
    dni VARCHAR(30)
    );


CREATE TABLE tb_clients(
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    cognoms VARCHAR(30),
    email VARCHAR(40),
    direccio VARCHAR(40),
    dni VARCHAR(30),
    data_alta DATE
    );

CREATE TABLE tb_rols(
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    rol VARCHAR(50)
xº
);

CREATE TABLE tb_treball(
    id_treball INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    descripcio VARCHAR(50),
    data_inici DATE,
    data_final DATE,
    hores_dedicades INT,
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES tb_treballador(id_treballador)
    );

CREATE TABLE tb_presupost(
    id_presupost INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    descripcio VARCHAR(50),
    hores_dedicades INT,
    data_inicio DATE,
    data_final DATE,
    id_treballador INT,
    FOREIGN KEY (id_treballador) REFERENCES tb_treballador(id_treballador),
    id_client INT,
    FOREIGN KEY (id_client) REFERENCES tb_clients(id_client),
    import_total FLOAT
    );


    CREATE TABLE tb_producte(
    id_producte INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    descripcio VARCHAR(50),
    preu FLOAT
    );



CREATE TABLE tb_detall_presupost(
    id_detall_presupost INT PRIMARY KEY AUTO_INCREMENT,
    descripcio VARCHAR(70),
    id_producte INT,
    FOREIGN KEY (id_producte) REFERENCES tb_producte(id_producte),
    import FLOAT,
    id_presupost INT,
    FOREIGN KEY (id_presupost) REFERENCES tb_presupost(id_presupost)
    );



INSERT INTO login VALUES 
    (1,"admin@gmail.com","admin");
    



INSERT INTO tb_treballador VALUES 
    (1,"Pere","Prat","pprat@gmail.com","Carrer Antonio Machado 12-15","B-25642811"),
    (2,"Maria","Garcia","mgarci@gmail.com","Avinguda badajoz 32-33","B-8452514"),
    (3,"Josep","Blanxart","jblan@gmail.com","Avinguda Can Noguera 8-9","B-4156145"),
    (4,"Joan","Perez","jperez@gmail.com","Avinguda del Paral·lel","A-58485184"),
    (5,"Marta","Garcia","mgar@gmail.com","Carrer Melanquez 78","B-1561458"),
    (6,"Pere","Machado","pmach@gmail.com"," Carrer Vall d'Aran 96-98","B-8188178"),
    (7,"Maria","Noger","mnoger@gmail.com","Carrer Niertamen 48-51","B-2534532");




INSERT INTO tb_clients VALUES 
    (1,"Sandra","Malla","smalla@gmail.com","Carrer de la Pau 12-15","B-25642811","2019-01-01"),
    (2,"Paula","Garcia","pgarci@gmail.com","Avinguda badajoz 32-33","B-8452514","2019-01-01"),
    (3,"Josep","Cabeza","jcabeza@gmail.com","Avinguda Can Noguera 8-9","B-4156145","2019-01-01"),
    (4,"Arnau","Perez","aperez@gmail.com","Avinguda del Paral·lel","A-58485184","2019-01-01"),
    (5,"Marta","Lazo","mlazo@gmail.com","Carrer Melanquez 78","B-1561458","2019-01-01"),
    (6,"Adrian","Machado","amacha@gmail.com"," Carrer Vall d'Aran 96-98","B-8188178","2019-01-01"),
    (7,"Joel","Blanco","jblanco@gmail.com","Carrer Niertamen 48-51","B-2534532","2019-01-01");

INSERT INTO tb_rols VALUES /* Acabar*/
    (1,"Administrador"),
    (2,"Treballador");

INSERT INTO tb_treball VALUES 
    (1,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,1),
    (2,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,2),
    (3,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,3),
    (4,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,4),
    (5,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,5),
    (6,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,6),
    (7,"Plantar arbres","Plantar arbres en el jardí","2019-01-01","2019-01-01",8,7);

INSERT INTO tb_presupost VALUES 
    (1,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",1,1,100),
    (2,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",2,2,100),
    (3,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",3,3,100),
    (4,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",4,4,100),
    (5,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",5,5,100),
    (6,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",6,6,100),
    (7,"Plantar arbres","Plantar arbres en el jardí",8,"2019-01-01","2019-01-01",7,7,100);



INSERT INTO tb_producte VALUES 
    (1,"Plantar arbres","Plantar arbres en el jardí",100),
    (2,"Plantar arbres","Plantar arbres en el jardí",100),
    (3,"Plantar arbres","Plantar arbres en el jardí",100),
    (4,"Plantar arbres","Plantar arbres en el jardí",100),
    (5,"Plantar arbres","Plantar arbres en el jardí",100),
    (6,"Plantar arbres","Plantar arbres en el jardí",100),
    (7,"Plantar arbres","Plantar arbres en el jardí",100);



INSERT INTO tb_detall_presupost VALUES 
    (1,"Plantar arbres en el jardí",1,100,1),
    (2,"Plantar arbres en el jardí",2,100,2),
    (3,"Plantar arbres en el jardí",3,100,3),
    (4,"Plantar arbres en el jardí",4,100,4),
    (5,"Plantar arbres en el jardí",5,100,5),
    (6,"Plantar arbres en el jardí",6,100,6),
    (7,"Plantar arbres en el jardí",7,100,7);


