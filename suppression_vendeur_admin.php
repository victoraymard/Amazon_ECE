<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE Pseudo_Vendeur = \''.$_GET['Pseudo_Vendeur'].'\'');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$allItems = $pdoStat->fetchAll();



$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{

    foreach ($allItems as $item):

                    ///RECUPERATION INFORMATION ITEM
                    //ouverture de la connexion avec la base de données Projet
        $objetPDO6 = new PDO('mysql:host=localhost;dbname=Projet','root','');

                        //préparation de la requete
        $pdoStat6 = $objetPDO6->prepare('SELECT * FROM Item WHERE ID_Item='.$item["ID_Item"]);

                    //execution de la requete
        $executeIsOk6 = $pdoStat6->execute();

                    //recupération des resultats
        $itemSelect = $pdoStat6->fetchAll();

        $objetPDO2 = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
        $pdoStat2 = $objetPDO2->prepare('SELECT * FROM Panier WHERE ID_Item='.$item["ID_Item"]);

                    //execution de la requete
        $executeIsOk2 = $pdoStat2->execute();

                    //recupération des resultats
        $itemSelect2 = $pdoStat2->fetchAll();

        $database = "Projet";
        $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
        $db_found = mysqli_select_db($db_handle, $database);

        if($db_found)
        {
            $stock = $itemSelect[0]['Prix']*$itemSelect2[0]['Quantite_panier'];
            $sql = "UPDATE Acheteur SET Montant_Tot = (Montant_Tot- ".$stock.")";
            mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));

            $sql2 = "DELETE FROM Panier WHERE ID_Item = ".$item["ID_Item"];
            mysqli_query($db_handle, $sql2) or die (mysqli_error($db_handle));

            $sql4 = "DELETE FROM Photos WHERE ID_Item = ".$item["ID_Item"];
            mysqli_query($db_handle, $sql4) or die (mysqli_error($db_handle));

            $sql10 = "DELETE FROM Livre WHERE ID_Item = ".$item["ID_Item"];
            mysqli_query($db_handle, $sql10) or die (mysqli_error($db_handle));

            $sql20 = "DELETE FROM Musique WHERE ID_Item = ".$item["ID_Item"];
            mysqli_query($db_handle, $sql20) or die (mysqli_error($db_handle));

            $sql30 = "DELETE FROM Vetement WHERE ID_Item = ".$item["ID_Item"];
            mysqli_query($db_handle, $sql30) or die (mysqli_error($db_handle));


            $sql3 = "DELETE FROM Item WHERE Pseudo_Vendeur ='".$itemSelect[0]['Pseudo_Vendeur']."' AND ID_Item =".$item["ID_Item"];
            mysqli_query($db_handle, $sql3) or die (mysqli_error($db_handle));




        }
        else
        {
            mysqli_close($db_handle);
            echo "Database not found";
        }

    endforeach;

    $sql = "DELETE FROM Vendeur WHERE Pseudo_Vendeur = '".$_GET['Pseudo_Vendeur']."'";
    mysqli_query($db_handle, $sql) or die (mysqli_error($db_handle));
    mysqli_close($db_handle);

}
else
{
    mysqli_close($db_handle);
    echo "Database not found";
}

header('location: admin_compte.php');
exit();

?>
