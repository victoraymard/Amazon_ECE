<?php

//Item selectionné
$id_Item = $_GET['idItem'];

//Variables provenant d'un formulaire (création d'un profil, mise en vente d'un item)
//isset(if-then-else)

//Variables communes à plusieurs TABLE
//Item + Vetement
$Nom = isset($_POST["Nom"])?$_POST["Nom"]:"";

//Musique + Livre
$Annee = isset($_POST["Annee"])?(int)$_POST["Annee"]:"";

//Contient + Fournit
$Quantite = isset($_POST["Quantite"])?(int)$_POST["Quantite"]:"";

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
define('DB_USER', 'root');
define('DB_PASS', '');

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
