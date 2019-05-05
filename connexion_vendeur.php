<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire
//isset(if-then-else)
$Pseudo_Vendeur = isset($_POST["Pseudo_Vendeur"])?$_POST["Pseudo_Vendeur"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $sql = "SELECT * FROM Vendeur WHERE Pseudo_Vendeur = '$Pseudo_Vendeur'";

  $result = mysqli_query($db_handle, $sql);

  if(mysqli_num_rows($result)!=0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      if($row['Mdp'] == $Mdp)
      {
        header('location: deconnexion.php');
        session_start();
        $_SESSION['Pseudo_Vendeur'] = $row['Pseudo_Vendeur'];
        $_SESSION['PhotoVendeur'] = $row['PhotoVendeur'];
        $_SESSION['ImageFond'] = $row['ImageFond'];
        $_SESSION['Nom'] = $row['Nom'];

        mysqli_close($db_handle);
        header('Location: vendeur_compte.php');
        exit();
      }
      else
      {
        mysqli_free_result($result);
        mysqli_close($db_handle);
        echo "<script language = \"javascript\"> alert('Mot de passe incorrect') </script>";
        echo "<script language = \"javascript\"> document.location.href = 'http://localhost/Projet/Amazon_ECE/vendeur_login.php'</script>";
      }
    }
  }
  else
  {
    mysqli_free_result($result);
        mysqli_close($db_handle);
        echo "<script language = \"javascript\"> alert('Pseudo erroné') </script>";
        echo "<script language = \"javascript\"> document.location.href = 'http://localhost/Projet/Amazon_ECE/vendeur_login.php'</script>";
  }
}
else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
