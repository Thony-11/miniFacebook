Create database facebook;
USE facebook;

Create Table Membres(
        idMembres INTEGER,
        Email VARCHAR(50),
        Mdp  VARCHAR(50),
        Nom VARCHAR(20),
        DateNaissance DATE,
        PRIMARY KEY(idMembres)
);

Create Table Amis(
        idMembres1 INTEGER,
        idMembres2 INTEGER,
        Email VARCHAR(50),
        DateHeureDemande DATE,
        DateHeureAcceptation DATE,
        PRIMARY KEY(idMembres1)
);

Create Table Publications(
        idPublications INTEGER,
        DateHeurePublication DATE,
        TextePublication TEXT,
        TypeAffichage VARCHAR(10),
        PRIMARY KEY(idPublications)
);

Create Table Commentaires(
        idCommentaires INTEGER,
        DateHeureCommentaire DATE,
        TexteCommentaire TEXT,
        idPublications INTEGER,
        PRIMARY KEY(idCommentaires)
);

Insert into Membres values ("1","antonio@gmail.com","thony","Thony","2000-02-26");
Insert into Membres values ("2","ryanoh@gmail.com","nonoh","nono00","2012-07-02");
Insert into Membres values ("3","riantsoa@gmail.com","nanantso","nana11","2013-01-30");
Insert into Membres values ("4","lucifer@gmail.com","lucifer","luci22","2001-05-06");
Insert into Membres values ("5","fano@gmail.com","fano12","fa33","2002-03-04");
