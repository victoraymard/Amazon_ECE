<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$Nom = $_POST["Nom"];
$Quantite =(int)$_POST["Quantite"];
$Description = $_POST["Description"];
$Categorie = $_POST["Categorie"];
$Prix = (float)$_POST["Prix"];
$Nom_Photo = $_POST['Nom_Photo'];
$Nom_Video = $_POST['Nom_Video'];

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $sql = "INSERT INTO Item(Nom, Description, Categorie, Prix, QuantiteTot, Nom_Video, Pseudo_Vendeur) VALUES('$Nom', '$Description', '$Categorie', '$Prix', '$Quantite', '$Nom_Video', '".$_SESSION['Pseudo_Vendeur']."')";
  mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

  $sql2 = "INSERT INTO Photos VALUES('images/$Nom_Photo', (SELECT MAX(ID_Item) FROM Item))";
  mysqli_query($db_handle, $sql2) or die (mysqli_error($db_handle));

  mysqli_close($db_handle);

  if($Categorie=="Livre")
  {
    header('Location: formulaire_livres.php');
    exit();
  }
  if($Categorie=="Vetement")
  {
    header('Location: formulaire_vetements.php');
    exit();
  }
  if($Categorie=="Musique")
  {
    header('Location: formulaire_musiques.php');
    exit();
  }
  if($Categorie=="Sports_Loisirs")
  {
    header('Location: vendeur_compte.php');
    exit();
  }
}
else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
