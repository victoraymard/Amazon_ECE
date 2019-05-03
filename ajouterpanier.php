<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Item selectionné
$ID_Item = $_GET['idItem'];
$Quantite_Panier = isset($_POST["Quantite_Panier"])?$_POST["Quantite_Panier"]:"";

if($Quantite_Panier!="")
{
  //Si un utilisateur est co
  if($_SESSION['Mail']!="")
  {
    $database = "Projet";
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found)
    {
      $sql = "INSERT INTO Panier VALUES('".$_SESSION['Mail']."', '$ID_Item', '$Quantite_Panier')";
      mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

      mysqli_close($db_handle);
      header ('location: panier.php');
      exit();
    }
    else
    {
      mysqli_close($db_handle);
      echo "Database not found";
    }
  }
  else //Sinon, on l'envoie se  co
  {
    header('location: votre_compte.php');
    exit();
  }
}
else
{
  echo"Veuillez choisir la quantite souhaitee !";
}
?>
