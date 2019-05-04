<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

//Variables provenant d'un formulaire
//isset(if-then-else)
$Mail = isset($_POST["Mail"])?$_POST["Mail"]:"";
$Mdp = isset($_POST["Mdp"])?$_POST["Mdp"]:"";

$database = "Projet";
$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
$db_found = mysqli_select_db($db_handle, $database);

if($db_found)
{
  $sql = "SELECT * FROM Acheteur WHERE Mail = '$Mail'";

  $result = mysqli_query($db_handle, $sql);

  if(mysqli_num_rows($result)!=0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      if($row['Mdp'] == $Mdp)
      {
        header('location: deconnexion.php');
        session_start();
        $_SESSION['Mail'] = $row['Mail'];
        $_SESSION['Prenom'] = $row['Prenom'];
        $_SESSION['Adresse'] = $row['Adresse'];
        $_SESSION['Ville'] = $row['Ville'];
        $_SESSION['CodePostal'] = $row['CodePostal'];
        $_SESSION['Pays'] = $row['Pays'];
        $_SESSION['Tel'] = $row['Tel'];
        $_SESSION['NumCarte'] = $row['NumCarte'];
        $_SESSION['DateCarte'] = $row['DateCarte'];
        $_SESSION['NomCarte'] = $row['NomCarte'];
        $_SESSION['Crypto'] = $row['Crypto'];
        $_SESSION['Montant_Tot'] = $row['Montant_Tot'];

        mysqli_close($db_handle);
        header('Location: accueil.php');
        exit();
      }
      else
      {
        mysqli_free_result($result);
        mysqli_close($db_handle);
        echo "<script language = \"javascript\"> alert('Mot de passe incorrect') </script>";
        echo "<script language = \"javascript\"> document.location.href = 'http://localhost/Projet/Amazon_ECE/votre_compte.php'</script>";
      }
    }
  }
  else
  {
    mysqli_free_result($result);
    mysqli_close($db_handle);
    echo "<script language = \"javascript\"> alert('Adresse mail erronée') </script>";
    echo "<script language = \"javascript\"> document.location.href = 'http://localhost/Projet/Amazon_ECE/votre_compte.php'</script>";
  }
}
else
{
  mysqli_close($db_handle);
  echo "Database not found";
}
?>
