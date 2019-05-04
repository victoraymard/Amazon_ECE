<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$Titre = $_POST["Nom"];
$Compositeur = $_POST["Compositeur"];
$Annee = $_POST["Annee"];
$Album = $_POST["Album"];

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $sql = "INSERT INTO Musique(Titre, Compositeur, Annee, Album) VALUES('$Titre', '$Compositeur', '$Annee', '$Album')";
  mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

  $sql2 = "INSERT INTO Musique(ID_Item) SELECT max(ID_Item) FROM Item";
  mysqli_query($db_handle, $sql2) or die (mysqli_error($db_handle));

  mysqli_close($db_handle);
  header('Location: vendeur_compte.php');
  exit();
}

else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
