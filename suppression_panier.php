<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$ID_Item = $_GET['idItem'];

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $result = $itemSelect[0]['QuantiteTot']-$Quantite_Panier;
  $sql2 = "UPDATE `Item` SET `QuantiteTot`= ". $result ." WHERE `ID_Item` = ".$ID_Item;
  mysqli_query($db_handle, $sql2) or die (mysqli_error($db_handle));

  $sql = "DELETE FROM Panier WHERE Mail ='".$_SESSION['Mail']."' AND ID_Item =".$ID_Item;
  $sql2 = "UPDATE Acheteur SET Montant_Tot = 0";
  $result = mysqli_query($db_handle, $sql);
  $result2 = mysqli_query($db_handle, $sql2);

  $_SESSION['Montant_Tot'] = 0;

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
