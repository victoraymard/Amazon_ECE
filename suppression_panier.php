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
  $sql = "DELETE FROM Panier WHERE Mail ='".$_SESSION['Mail']."' AND ID_Item =".$ID_Item;
  $result = mysqli_query($db_handle, $sql);

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
