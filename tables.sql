CREATE TABLE Acheteur(
	Mail varchar(255) PRIMARY KEY,
	Mdp varchar(255) NOT NULL,
	Nom varchar(255) NOT NULL,
	Prenom varchar(255) NOT NULL,
	Adresse varchar(255) NOT NULL,
	Ville varchar(255) NOT NULL,
	CodePostal int(5) NOT NULL,
	Pays varchar(255) NOT NULL,
	Tel varchar(255) NOT NULL,
	NumCarte varchar(255) NOT NULL,
	DateCarte Date NOT NULL,
	NomCarte varchar(255) NOT NULL,
	Crypto int(3) NOT NULL,
	Civilite varchar(255) NOT NULL,
	DateNaissance Date NOT NULL,
	Montant_Tot int(3)
);

CREATE TABLE Vendeur(
	Pseudo_Vendeur varchar(255) PRIMARY KEY,
	Mail varchar(255) NOT NULL,
	Mdp varchar(255) NOT NULL,
	Nom varchar(255) NOT NULL,
	PhotoVendeur varchar(255) NOT NULL,
	ImageFond varchar(255) NOT NULL
);

CREATE TABLE Admin(
	Pseudo_Admin varchar(15) PRIMARY KEY,
	Mdp varchar(15) NOT NULL
);

CREATE TABLE Item(
	ID_Item int(5) PRIMARY KEY AUTO_INCREMENT,
	Nom varchar(255) NOT NULL,
	Description TEXT NOT NULL,
	Categorie varchar(255) NOT NULL,
	Prix float NOT NULL,
	QuantiteTot int(2),
	Nom_Video varchar(255),
	NombreVentes int(2),
	Remise int(2),
	Pseudo_Vendeur varchar(255) NOT NULL,
	FOREIGN KEY (Pseudo_Vendeur) REFERENCES Vendeur(Pseudo_Vendeur)
);

CREATE TABLE Livre(
	ID_Livre int(5) PRIMARY KEY AUTO_INCREMENT,
	ID_Item int(5) NOT NULL,
	Titre varchar(255) NOT NULL,
	Auteur varchar(255) NOT NULL,
	Annee int(4) NOT NULL,
	Editeur varchar(255) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);

CREATE TABLE Musique(
	ID_Musique int(5) PRIMARY KEY AUTO_INCREMENT,
	ID_Item int(5) NOT NULL,
	Titre varchar(255) NOT NULL,
	Compositeur varchar(255) NOT NULL,
	Annee int(4) NOT NULL,
	Album varchar(255),
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);

CREATE TABLE Vetement(
	ID_Vetement int(5) PRIMARY KEY AUTO_INCREMENT,
	ID_Item int(5) NOT NULL,
	Taille varchar(255) NOT NULL,
	Marque varchar(255) NOT NULL,
	Couleurs varchar(255) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);


CREATE TABLE Photos(
	Nom_Photo varchar(255) NOT NULL,
	ID_Item int(4) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item),
	PRIMARY KEY(Nom_Photo, ID_Item)
);

/*Un panier contient des items*/

CREATE TABLE Panier(
	Mail varchar(255) NOT NULL,
	ID_Item int(5) NOT NULL,
	Quantite_panier int(2) NOT NULL,
	FOREIGN KEY(Mail) REFERENCES Acheteur(Mail),
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item),
	PRIMARY KEY(Mail, ID_Item)
);


/*Saisie des données en dur comme les admins ou les tests*/

INSERT INTO Admin VALUES ('Cous', 'Cous');
INSERT INTO Acheteur VALUES ('thomas.lemercier7156@hotmail.com', 'bonjour', 'Lemercier', 'Thomas', '38 Avenue de la resistance', 'Paris', 93340, 'France', 0789714959, '1111', '2019-05-06', 'MR LEMERCIER', 111, 'Mr.', '1999-01-07', 0);
INSERT INTO Acheteur VALUES ('tom_atow@hotmail.fr', 'bonsoir', 'Devincre', 'Leonard', '17 Villa Seurat', 'Paris', 75014, 'France', 0666172538, '2222', '2019-05-06', 'MR DEVINCRE', 222, 'Mr.', '1998-03-13', 0);
INSERT INTO Vendeur VALUES ('Thomas', 'thomas.lemercier7156@hotmail.com', 'salut', 'Lemercier', 'images/Thomas.png', 'images/fond1.jpg');
INSERT INTO Vendeur VALUES ('Leo', 'thomas.lemercier7156@hotmail.com', 'aplus', 'Devincre', 'images/léonard.png', 'images/fond2.jpg');

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('Madame Bovary','Livre de Flaubert','Livre', 20, 15, 'Thomas', 10, 10);
INSERT INTO Livre(ID_Item, Titre, Auteur, Annee, Editeur) VALUES (1, 'Madame Bovary', 'Gustave FLaubert', 1857, 'Multiple');
INSERT INTO Photos VALUES ('images/madame-bovary-381.jpg', 1);

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('Bohemain Rhapsody','Musique Queen, ca dechire ! En vynil en plus !','Musique', 10, 35, 'Leo', 0, 45);
INSERT INTO Musique(ID_Item, Titre, Compositeur, Annee, Album) VALUES (2, 'Bohemain Rhapsody', 'Queen', 1975, 'A Night at the Opera');
INSERT INTO Photos VALUES ('images/vynil_queen.jpg',2);

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('Tee-shirt basique','Tee-shirt noir volcom','Vetement', 1, 20, 'Leo', 0, 0);
INSERT INTO Vetement(ID_Item, Taille, Marque, Couleurs) VALUES (3, 'Extra_small', 'Volcom', 'Noir');
INSERT INTO Photos VALUES ('images/TS_Volcom.jpg',3);

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('PlaySTation 6','Derniere console de Sony','Sports_Loisirs', 6, 500, 'Thomas', 20, 1);
INSERT INTO Photos VALUES ('images/ballon_CDM.jpg', 4);

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('Ballon de Foot','Ideal pour lacher Fifa de temps en temps','Sports_Loisirs', 8, 5, 'Leo', 5, 7);
INSERT INTO Photos VALUES ('PS6.jpg', 5);

INSERT INTO Item(Nom, Description, Categorie, QuantiteTot, Prix, Pseudo_Vendeur, Remise, NombreVentes) VALUES ('Harry Potter et le Prince de Sang-Mele','Livre HP, Tome 6','Livre', 2, 15, 'Thomas', 0, 9);
INSERT INTO Livre(ID_Item, Titre, Auteur, Annee, Editeur) VALUES (6, 'Harry Potter et le Prince de Sang-Mele', 'J-K Rowling', 2005, 'Bloomsbury Publishing');
INSERT INTO Photos VALUES ('images/HP.jpg', 6);




