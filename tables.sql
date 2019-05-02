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
	Civilite varchar(255) NOT NULL,
	DateNaissance Date NOT NULL,
	ID_Panier int(5) NOT NULL,
	FOREIGN KEY(ID_Panier) REFERENCES Panier(ID_Panier)
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

INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('Madame Bovary','Livre sur une chaudasse','Livre',12);
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('Harry Potter','collection des 7 livres','Livre',3);
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('On a pas toujours du caviar','Un livre exceptionnel que je vous recommande chaudement de lire','Livre',32);
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('Petit pas sur le sable mouillé','Livre que je dois lire','Livre',1);
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('T-shirt sympa','il peut aussi servir de callebar','Vetement',3);
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`) VALUES ('Pull pas beau','quand il fait froid en ete','Vetement',13);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/madame-bovary-381.jpg',1);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/on_a_pas_toujours_du_caviar.jpg',3);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/livres-HP.jpg',2);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/Deux-petits-pas-sur-le-sable-mouille.jpg',4);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/boxer-chien-boxer-t-shirt-degrade-homme.jpg',5);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/2477751_2.jpg',6);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/harryPot.jpg',2);


