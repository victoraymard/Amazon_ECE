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
    $deletePanier = $objetPDO->prepare("DELETE FROM Panier WHERE Mail = '".$_SESSION['Mail']."'");

    //execution de la requete
    $executeIsOk = $pdoStat->execute();
    $executeIsOk2 = $deletePanier->execute();

    //Envoie de mail qui fonctionne si on peut se connecter au serveur mail
    ini_set("SMTP", "smtp.free.fr");
    ini_set("smpt_port", "25");
    mail($_SESSION['Mail'], "Confirmation de votre achat", "Nous vous confirmons la reception de votre achat !", "tom_atow@hotmail.fr");

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
