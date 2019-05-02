<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire (création d'un profil)
//isset(if-then-else)
$Mail = isset($_POST["Mail"])?$_POST["Mail"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";
$Nom = isset($_POST["Nom"])?$_POST["Nom"]:"";
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

//Inscription d'un acheteur
if($Mail!=""&&$Mdp!=""&&$Nom!=""&&$Prenom!=""&&$Adresse!=""&&$Ville!=""&&$CodePostal!=""&&$Pays!=""&&$Tel!=""&&$NumCarte!=""&&$DateCarte!=""&&$NomCarte!=""
  &&$Crypto!=""&&$Civilite!=""&&$DateNaissance!="")
{
  $database = "Projet";
  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);


  if($db_found)
  {
    $sql = "INSERT INTO Panier(Montant_tot) VALUES(NULL)";
    mysqli_query($db_handle, $sql);
    $sql = "INSERT INTO Acheteur(Mail, Mdp, Nom, Prenom, Adresse, Ville, CodePostal, Pays, Tel, NumCarte, DateCarte, NomCarte, Crypto, Civilite, DateNaissance) VALUES('$Mail', '$Mdp', '$Nom', '$Prenom', '$Adresse', '$Ville', '$CodePostal', '$Pays, '$Tel', '$NumCarte', '$DateCarte', '$NomCarte',
    '$Crypto', '$Civilite', '$DateNaissance')";
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
  echo "Veuillez aisir toutes les informations demandees svp !"
}

mysqli_close($db_handle);
?>
