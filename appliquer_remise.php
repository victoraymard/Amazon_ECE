<?php

session_start();

$ID_Item = $_GET["idItem"];
$remise = $_POST["remise"];

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare("UPDATE `Item` SET `Remise` = ".$remise." WHERE `ID_Item` = ".$ID_Item);

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$allItems = $pdoStat->fetchAll();

//Redirection
header('location: vendeur_compte.php');
exit();



?>