<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$ID_Item = $_GET['idItem'];

///RECUPERATION INFORMATION ITEM
//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE ID_Item='.$ID_Item);

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$itemSelect = $pdoStat->fetchAll();

$objetPDO2 = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat2 = $objetPDO2->prepare('SELECT * FROM Panier WHERE ID_Item='.$ID_Item);

//execution de la requete
$executeIsOk2 = $pdoStat2->execute();

//recupération des resultats
$itemSelect2 = $pdoStat2->fetchAll();

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $stock = $itemSelect2[0]['Quantite_panier'];
  $sql = "UPDATE Item SET QuantiteTot = QuantiteTot+ ".$stock." WHERE Pseudo_Vendeur = '".$itemSelect[0]['Pseudo_Vendeur']."'";
  mysqli_query($db_handle, $sql) or die (mysql_error($db_handle));

  $stock = $itemSelect[0]['Prix']*$itemSelect2[0]['Quantite_panier'];
  $sql2 = "UPDATE Acheteur SET Montant_Tot = (Montant_Tot- ".$stock.") WHERE Mail = '".$_SESSION['Mail']."'";
  mysqli_query($db_handle, $sql2) or die (mysqli_error($db_handle));

  $sql3 = "DELETE FROM Panier WHERE Mail ='".$_SESSION['Mail']."' AND ID_Item =".$ID_Item;
  mysqli_query($db_handle, $sql3) or die (mysqli_error($db_handle));

  $_SESSION['Montant_Tot'] = $_SESSION['Montant_Tot']-($itemSelect[0]['Prix']*$itemSelect2[0]['Quantite_panier']);

  mysqli_close($db_handle);
  header('location: panier.php');
  exit();


}
else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
