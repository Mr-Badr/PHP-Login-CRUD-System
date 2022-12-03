create database tp;
use tp;
create table utilisateur(id int primary key AUTO_INCREMENT, nom varchar(30), prenom varchar(30),
adress varchar(30),telephone int, email varchar(30), pwd varchar(30), privilege varchar(30) );
create table produits (num int primary key AUTO_INCREMENT , designation varchar(30), prix_unitaire float, 
quantite int , addedby int , updatedby int, constraint fk1 foreign key(addedby) references utilisateur(id)
, constraint fk2 foreign key(updatedby) references utilisateur(id) );

