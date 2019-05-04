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
	Type varchar(255) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
);


CREATE TABLE Photos(
	Nom_Photo varchar(255) PRIMARY KEY,
	ID_Item int(4) NOT NULL,
	FOREIGN KEY(ID_Item) REFERENCES Item(ID_Item)
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

INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Madame Bovary','Livre sur une chaudasse','Livre',12, 15, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Harry Potter','collection des 7 livres','Livre',3, 30, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('On a pas toujours du caviar','Un livre exceptionnel que je vous recommande chaudement de lire','Livre',32,12, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Petit pas sur le sable mouillé','Livre que je dois lire','Livre',1,8, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('T-shirt sympa','il peut aussi servir de callebar','Vetement',3,25, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Pull pas beau','quand il fait froid en ete','Vetement',13,40, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Vynil Pink Floyd','Another brick in the wall','Musique',5,20, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Vynil Queen','A night at the opera','Musique',12,19, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Disque Beatles','Sgt. Peters lonely band','Musique',24,9, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Ballon coupe du monde','Tres sympa','Sports_loisirs',24,39, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('Matuidi','Pour le ramener à la maison','Sports_loisirs',1,999, 'Francis');
INSERT INTO `Item`(`Nom`, `Description`, `Categorie`, `QuantiteTot`, `Prix`, Pseudo_Vendeur) VALUES ('PS6','On est  dans le turfu','Sports_loisirs',1,2999, 'Francis');
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/madame-bovary-381.jpg',1);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/on_a_pas_toujours_du_caviar.jpg',3);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/livres-HP.jpg',2);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/Deux-petits-pas-sur-le-sable-mouille.jpg',4);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/boxer-chien-boxer-t-shirt-degrade-homme.jpg',5);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/2477751_2.jpg',6);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/harryPot.jpg',2);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/beatles_disques.jpg',9);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/vynil_queen.jpg',8);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/pink-floyd-the-wall.jpg',7);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/ballon_CDM.jpg',10);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/matuidi.jpg',11);
INSERT INTO `Photos`(`Nom_photo`, `ID_Item`) VALUES ('images/PS6.jpg',12);
INSERT INTO Admin VALUES ('Cous', 'Cous');


