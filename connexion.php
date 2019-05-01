<?php
//Variables provenant d'un formulaire (création d'un profil, mise en vente d'un item)
//isset(if-then-else)

//Variables communes à plusieurs TABLE
//Acheteur + Vendeur
$Mail = isset($_POST["Mail"])?$_POST["Mail"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";

//Vendeur
$Pseudo_Vendeur = isset($_POST["Pseudo_Vendeur"])?$_POST["Pseudo_Vendeur"]:"";


//Admin
$Pseudo_Admin = isset($_POST["Pseudo_Admin"])?$_POST["Pseudo_Admin"]:"";


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
