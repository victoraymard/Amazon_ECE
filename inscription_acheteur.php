<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Inscription d'un acheteur
$Mail = $_POST['Mail'];
$Mdp = $_POST['Mdp'];
$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Adresse = $_POST['Adresse'];
$Ville = $_POST['Ville'];
$CodePostal = (int)$_POST['CodePostal'];
$Pays = $_POST['Pays'];
$Tel = $_POST['Tel'];
$NumCarte = $_POST['NumCarte'];
$DateCarte = $_POST['DateCarte'];
$NomCarte = $_POST['NomCarte'];
$Crypto = (int)$_POST['Crypto'];
$Civilite = $_POST['Civilite'];
$DateNaissance = $_POST['DateNaissance'];

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);


if($db_found)
{
  $sql = "INSERT INTO Acheteur(Mail, Mdp, Nom, Prenom, Adresse, Ville, CodePostal, Pays, Tel, NumCarte, DateCarte, NomCarte, Crypto, Civilite, DateNaissance) VALUES('$Mail', '$Mdp', '$Nom', '$Prenom', '$Adresse', '$Ville', '$CodePostal', '$Pays', '$Tel', '$NumCarte', '$DateCarte', '$NomCarte',
  '$Crypto', '$Civilite', '$DateNaissance')";
  mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

  mysqli_close($db_handle);
  header ('location: accueil.php');
  exit();
}
else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
