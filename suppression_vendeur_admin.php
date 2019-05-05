<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$Pseudo_Vendeur = $_GET['Pseudo_Vendeur'];

///RECUPERATION INFORMATION ITEM
//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare("DELETE FROM Vendeur WHERE Pseudo_Vendeur = '".$Pseudo_Vendeur."'");

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$itemSelect = $pdoStat->fetchAll();

header('location: admin_compte.php');
exit();

?>
