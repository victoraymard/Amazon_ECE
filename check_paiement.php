<?php

session_start();
//Redirection
//header('location: accueil.php');
//exit();

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire
//isset(if-then-else)
$NumCarte = $_POST["NumCarte"];
$NomCarte = $_POST["NomCarte"];
$DateCarte = $_POST["DateCarte"];
$Crypto = $_POST["Crypto"];


if($_SESSION['NumCarte'] == $NumCarte && $_SESSION['NomCarte'] == $NomCarte && $_SESSION['Crypto'] == $Crypto && $_SESSION['DateCarte'] == $DateCarte)
{
    //ouverture de la connexion avec la base de données Projet
    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

    //préparation de la requete
    $pdoStat = $objetPDO->prepare('UPDATE Acheteur SET Montant_Tot = 0');
    $_SESSION['Montant_Tot'] = 0;
    $deletePanier = $objetPDO->prepare('TRUNCATE TABLE Panier');

    //execution de la requete
    $executeIsOk = $pdoStat->execute();
    $executeIsOk2 = $deletePanier->execute();

    echo "<script language = \"javascript\"> alert('Paiement effectué avec succes ! Merci de votre achat.') </script>";
    echo "<script language = \"javascript\"> document.location.href = 'accueil.php'</script>";
}
else
    {
        echo "<script language = \"javascript\"> alert('Les données bancaires fournis ne sont pas valides.') </script>";
        //Redirection
        echo "<script language = \"javascript\"> document.location.href = 'paiement.php'</script>";
}
?>
