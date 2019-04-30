<?php
//Variables provenant d'un formulaire (création d'un profil, mise en vente d'un item)
//isset(if-then-else)

//Variables communes à plusieurs TABLE
//Acheteur + Vendeur + Admin + Item + Vetement
$Mail = isset($_POST["Mail"])?$_POST["Mail"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";
$Nom = isset($_POST["Nom"])?$_POST["Nom"]:"";

//Musique + Livre
$Annee = isset($_POST["Annee"])?(int)$_POST["Annee"]:"";

//Contient + Fournit
$Quantite = isset($_POST["Quantite"])?(int)$_POST["Quantite"]:"";

//Formulaire d'acheteur
$Prenom = isset($_POST["Prenom"])?$_POST["Prenom"]:"";
$Adresse = isset($_POST["Adresse"])?$_POST["Adresse"]:"";
$Ville = isset($_POST["Ville"])?$_POST["Ville"]:"";
$CodePostal = isset($_POST["CodePostal"])?(int)$_POST["CodePostal"]:"";
$Pays = isset($_POST["Pays"])?$_POST["Pays"]:"";
$Tel = isset($_POST["Tel"])?(int)$_POST["Tel"]:"";
$NumCarte = isset($_POST["NumCarte"])?(int)$_POST["NumCarte"]:"";
$DateCarte = isset($_POST["DateCarte"])?$_POST["DateCarte"]:"";
$NomCarte = isset($_POST["NomCarte"])?$_POST["NomCarte"]:"";
$Crypto = isset($_POST["Crypto"])?(int)$_POST["Crypto"]:"";
$Civilite = isset($_POST["Civilite"])?$_POST["Civilite"]:"";
$DateNaissance = isset($_POST["DateNaissance"])?$_POST["DateNaissance"]:"";

//Formulaire de vendeur
$Pseudo_Vendeur = isset($_POST["Pseudo_Vendeur"])?$_POST["Pseudo_Vendeur"]:"";
$PhotoVendeur = isset($_POST["PhotoVendeur"])?$_POST["PhotoVendeur"]:"";
$ImageFond = isset($_POST["ImageFond"])?$_POST["ImageFond"]:"";
//A voir vu qu'on peut mettre plusieurs photos
$Nom_Photo = isset($_POST["Nom_Photo"])?$_POST["Nom_Photo"]:"";

//Pas de formulaire d'admin, ils sont en durs, sinon tout le monde peut être admin qq part ...

//Mise en vente d'un item
$Description = isset($_POST["Description"])?$_POST["Description"]:"";
$Categorie = isset($_POST["Categorie"])?$_POST["Categorie"]:"";
$Nom_Video = isset($_POST["Nom_Video"])?$_POST["Nom_Video"]:"";
$Prix = isset($_POST["Prix"])?(float)$_POST["Prix"]:"";

//Mise en vente d'un item de categorie Livre
$Auteur = isset($_POST["Auteur"])?$_POST["Auteur"]:"";
$Editeur = isset($_POST["Editeur"])?$_POST["Editeur"]:"";

//Mise en vente d'un item de categorie Musique
$Compositeur = isset($_POST["Compositeur"])?$_POST["Compositeur"]:"";
$Album = isset($_POST["Album"])?$_POST["Album"]:"";

//Mise en vente d'un item categorie Vetement
$Taille = isset($_POST["Taille"])?$_POST["Taille"]:"";
$Marque = isset($_POST["Marque"])?$_POST["Marque"]:"";
$Couleurs = isset($_POST["Couleurs"])?$_POST["Couleurs"]:"";
$Type = isset($_POST["Type"])?$_POST["Type"]:"";

define('DB_SERVER', 'localhost');
define('DB_USER', 'Cous');
define('DB_PASS', 'Cous');

//Identifier le nom de la base
$database = "Projet";

//conecter l'utilisateur dans BDD
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

//Afficher tout
if($db_found){

}
} else{ echo "Database not found";}

mysqli_close($db_handle);
?>
