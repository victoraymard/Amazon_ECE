<?php
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

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
    $sql = "SELECT * FROM Acheteur WHERE Mail = '$_SESSION[Mail]'";

    $result = mysqli_query($db_handle, $sql);

    if(mysqli_num_rows($result)!=0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($row['Mdp'] == $Mdp)
            {
                session_start();
                $_SESSION['Pseudo_Vendeur'] = $row['Pseudo_Vendeur'];
                $_SESSION['PhotoVendeur'] = $row['PhotoVendeur'];
                $_SESSION['ImageFond'] = $row['ImageFond'];

                mysqli_close($db_handle);
                header('Location: accueil.php');
                exit();
            }
            else
            {
                echo "Mot de passe incorrect" ;
            }
        }
        mysqli_free_result($result);
    }
    else
    {
        echo "Le pseudo saisie est errone ou n'existe pas !";
    }
}
else
{
    mysqli_close($db_handle);
    echo "Database not found";
}
?>
