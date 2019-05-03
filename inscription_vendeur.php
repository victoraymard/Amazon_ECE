<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Pas de formulaire d'admin, ils sont en durs, sinon tout le monde peut être admin qq part ...

//Inscription d'un vendeur
$Mail = $_POST["Mail"];
$Mdp = $_POST["Mdp"];
$Nom = $_POST["Nom"];
$Pseudo_Vendeur = $_POST["Pseudo_Vendeur"];
$PhotoVendeur = $_POST["PhotoVendeur"];
$ImageFond = $_POST["ImageFond"];

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $sql = "INSERT INTO Vendeur(Pseudo_Vendeur, Mail, Mdp, Nom, PhotoVendeur, ImageFond) VALUES('$Pseudo_Vendeur', '$Mail', '$Mdp', '$Nom',
  'images/$PhotoVendeur', 'images/$ImageFond')";
  mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

  mysqli_close($db_handle);
  header ('location: accueil.php');
  exit();
}
else
{
  echo "Database not found";
}
?>
