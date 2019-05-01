<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire
//isset(if-then-else)
$Pseudo_Vendeur = isset($_POST["Pseudo_Vendeur"])?$_POST["Pseudo_Vendeur"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";

if($Pseudo_Vendeur!="" && $Mdp!="")
{
  $database = "Projet";
  $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
  $db_found = mysqli_select_db($db_handle, $database);

  if($db_found)
  {
    $sql = "SELECT * FROM Vendeur WHERE Pseudo_Vendeur = $Pseudo_Vendeur";

    if(($result = mysqli_query($db_handle, $sql))
    {
      while($row = mysqli_fetch_assoc($result))
      {
        if($row['Mdp'] == $Mdp)
        {
          session_start();
          $_SESSION['Pseudo_Vendeur'] = $row['Pseudo_Vendeur']
          $_SESSION['PhotoVendeur'] = $row['PhotoVendeur']
          $_SESSION['ImageFond'] = $row['ImageFond']
          header('Location: accueil_connecte.php');
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
      echo "Le pseudo saisie est errone ou n'existe pas !"
    }
  }
  else
  {
    echo "Database not found";
  }
}
else
{
  echo "Veuillez saisir un pseudo et un mot de passe !"
}

mysqli_close($db_handle);
?>