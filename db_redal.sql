create database redal_intervention;
use redal_intervention;

create table materiel(
    inventaire int not null AUTO_INCREMENT primary key ,
    societe varchar(20),
    date_achat date,
    garentie varchar(10),
    duree_garentie varchar(20),
    num_type int ,
    agent_id int ,
    foreign key (num_type) references type(num_type),
    foreign key (agent_id) references agent(agent_id)
);

create table type(
    num_type int auto_increment primary key,
    type_m varchar(20)
);
create table agent(
    agent_id int not null auto_increment primary key ,
    nom_a varchar(30),
    prenom_a varchar(30),                                  
    identifient varchar(30) not null,                      
    mot_passe_a varchar(20) not null,                      
                                                            
    telephone_a varchar(20),
    asdresse_a varchar(100),
    departement_id int,
    foreign key (departement_id) references departement(departement_id)
    
);


create table departement(
    departement_id int not null auto_increment primary key,
    nom_dept varchar(30),
    lieu_dept varchar(40)
);

create table technicien(
    technicien_id int not null auto_increment primary key ,
    nom_t varchar(30),                                             
    prenom_t varchar(30),
    identifient_t varchar(30) not null,
    mot_passe_t varchar(20) not null ,
    telephone_t varchar(20),
    asdresse_t varchar(100)    
);

create table reclamation(
    num_reclamation int not null auto_increment primary key,
    date_reclamation date,
    type_probleme varchar(20),
    decription varchar(240),
    inventaire int,
    foreign key (inventaire) references materiel(inventaire)
);
create table intervenir(
    technicien_id int not null,
    num_reclamation int not null,
    date_intervention date,
    statu varchar(20),
    type_intervention varchar(20),
    resolution varchar(240),
    primary key (technicien_id,num_reclamation),
    foreign key (technicien_id) references technicien(technicien_id)
 
);

create table passe_redal(
   identifient varchar(30) not null,     Redal
   mot_passe   varchar(30) not null      redal_passe
);


insert into agent values(1,"Youssfi","Hamid","HamidY85","12478596","0612854795","Hay Errahma casa",1);

insert into departement values(3,"service d'éléctricité",'Rabat agdal');
insert into agent values(2,"Siram","Mehdi","Mehdi36siram","m145si","0647121452","Hay Nasser Fes",3);
insert into agent values(3,"Kessam","Yasser","Yasser90","125yass","0649856789","Lotissement skikina Rabat",2);
insert into agent values(4,"Naciri","Ghizlane","Ghizlan","Lovghiz14","068745987","Lotissent Essalam Nador",1);

insert into departement values(2,"service d'eau",'Rabat bab chellah');
insert into departement values(4,"service d'assainissement",'Témara');




