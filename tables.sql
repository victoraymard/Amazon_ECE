CREATE TABLE Acheteur(
	Mail varchar(255) PRIMARY KEY,
	Mdp varchar(255) NOT NULL,
	Nom varchar(255) NOT NULL,
	Prenom varchar(255) NOT NULL,
	Adresse varchar(255) NOT NULL,
	Ville varchar(255) NOT NULL,
	CodePostal int(5) NOT NULL,
	Pays varchar(255) NOT NULL,
	Tel int(10) NOT NULL,
	NumCarte int(16) NOT NULL,
	DateCarte Date NOT NULL,
	NomCarte varchar(255) NOT NULL,
	Crypto int(3) NOT NULL,
	ID_Panier int(5) NOT NULL AUTO_INCREMENT,
	Civilite varchar(255) NOT NULL,
	DateNaissance Date NOT NULL,
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
	QuantiteTot int(2),
	Nom_Video varchar(255),
	NombreVentes int(2),
	Remise int(2)
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
	Nom varchar(255) NOT NULL,
	Taille varchar(255) NOT NULL,
	Marque varchar(255) NOT NULL,
	Couleurs varchar(255) NOT NULL,
	Type varchar(255) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);

CREATE TABLE Panier(
	ID_Panier int(5) PRIMARY KEY AUTO_INCREMENT,
	Montant_tot int(3)
);

CREATE TABLE Photos(
	Nom_photo varchar(255) PRIMARY KEY,
	ID_Item int(4) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);

/*Un panier contient des items*/

CREATE TABLE Contient(
	ID_Panier int(5) NOT NULL,
	ID_Item int(5) NOT NULL,
	Quantite int(2) NOT NULL,
	FOREIGN KEY(ID_Panier) REFERENCES Panier(ID_Panier),
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item),
	PRIMARY KEY(ID_Panier, ID_Item)
);

/* Un vendeur fournit (met à disposition) des items*/

CREATE TABLE Fournit(
	Pseudo_Vendeur varchar(15) NOT NULL,
	ID_Item int(5) NOT NULL,
	Quantite int(2) NOT NULL,
	Prix float(4) NOT NULL,
	FOREIGN KEY(Pseudo_Vendeur) REFERENCES Vendeur(Pseudo_Vendeur),
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item),
	PRIMARY KEY(Pseudo_Vendeur, ID_Item)
);

/*Saisie des données en dur comme les admins ou les tests*/

INSERT INTO Admin VALUES('Cous', 'Cous'), ('Cous2', 'Cous2'), ('Cous3', 'Cous3');
INSERT INTO Vendeur VALUES('Francisdu68', 'francis@gmail.com', 'Francispower', 'Francis', 'Francis.jpg', 'FondFrancis.jpg');
INSERT INTO Acheteur VALUES('thomas.lemercier7156@hotmail.com', 'Bonjour', 'Lemercier', 'Thomas', '38 Avenue de la resistance', 'Le Raincy', 93340,
	'France', 0789714959, 4567835467531209, '2020-06-01', 'MR LEMERCIER THOMAS', 320, 1, 'Mr.', '1999-01-07');
INSERT INTO Item(Nom, Description, Categorie) VALUES('Madame Bovary', 'Livre sur une chaudasse', 'Livre');
--Test marche pas
INSERT INTO Livre(ID_Item, Titre, Auteur, Annee, Editeur) VALUES(SELECT Item.ID_Item FROM Item WHERE Item.ID_Item=ID_Livre,
	SELECT Item.Nom FROM Item WHERE Item.ID_Item=ID_Livre, 'Gustave Flaubert', 1857, 'Indefini');
