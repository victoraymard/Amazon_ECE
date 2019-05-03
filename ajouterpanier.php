<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Item selectionné
$ID_Item = $_GET['idItem'];
$Quantite_Panier = isset($_POST["Quantite_Panier"])?$_POST["Quantite_Panier"]:"";


///RECUPERATION INFORMATION ITEM
//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE ID_Item='.$ID_Item);

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$itemSelect = $pdoStat->fetchAll();


///RECUPERATION INFORMATION ACHETEUR
//ouverture de la connexion avec la base de données Projet
$objetPDO2 = new PDO('mysql:host=localhost;dbname=Projet','root','');
//préparation de la requete
$pdoStat2 = $objetPDO2->prepare('SELECT * FROM Acheteur WHERE Mail= \''.$_SESSION['Mail'].'\'');
//execution de la requete
$executeIsOk2 = $pdoStat2->execute();
//recupération des resultats
$acheteurSelect = $pdoStat2->fetchAll();

  //Si un utilisateur est co
if($_SESSION['Mail']!="")
{
  $database = "Projet";
  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

  if($db_found)
  {
    $result = $itemSelect[0]['QuantiteTot']-$Quantite_Panier;
    $sql = "INSERT INTO Panier VALUES('".$_SESSION['Mail']."', '$ID_Item', '$Quantite_Panier')";
    $updateQuantiteTot = "UPDATE `Item` SET `QuantiteTot`= ". $result ." WHERE `ID_Item` = ".$ID_Item;
    mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));
    mysqli_query($db_handle, $updateQuantiteTot) or die (mysqli_error($db_handle));

    $nouveauMontantTot = $itemSelect[0]['Prix'] + $acheteurSelect[0]['Montant_Tot'];
    $_SESSION['Montant_Tot'] = $nouveauMontantTot;


    $changementMontantTotal = "UPDATE `Acheteur` SET `Montant_Tot`= $nouveauMontantTot  WHERE Mail = '".$_SESSION['Mail']."'";
    mysqli_query($db_handle, $changementMontantTotal) or die (mysqli_error($db_handle));

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
?>
