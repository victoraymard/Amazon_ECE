<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire (création d'un profil)
//isset(if-then-else)
$Mail = isset($_POST["Mail"])?$_POST["Mail"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";
$Nom = isset($_POST["Nom"])?$_POST["Nom"]:"";
$Pseudo_Vendeur = isset($_POST["Pseudo_Vendeur"])?$_POST["Pseudo_Vendeur"]:"";
$PhotoVendeur = isset($_POST["PhotoVendeur"])?$_POST["PhotoVendeur"]:"";
$ImageFond = isset($_POST["ImageFond"])?$_POST["ImageFond"]:"";

//Pas de formulaire d'admin, ils sont en durs, sinon tout le monde peut être admin qq part ...

//Inscription d'un vendeur
if($Mail!=""&&$Mdp!=""&&$Nom!=""&&$Pseudo_Vendeur!=""&&$PhotoVendeur!=""&&$ImageFond!="")
{
  $database = "Projet";
  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

  if($db_found)
  {
    $sql = "INSERT INTO Vendeur(Pseudo_Vendeur, Mail, Mdp, Nom, PhotoVendeur, ImageFond) VALUES('$Pseudo_Vendeur', '$Mail', '$Mdp', '$Nom', '$PhotoVendeur',
    '$ImageFond')";
    mysqli_query($db_handle, $sql);
    header ('location: accueil.php');
    exit();
  }
  else
  {
    echo "Database not found";
  }
}
else
{
  echo "Veuillez remplir tous les champs, ils sont tous obligatoire pour votre inscription en tant que vendeur !"
}

mysqli_close($db_handle);
?>
