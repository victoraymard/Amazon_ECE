<?php
session_start ();

// On détruit les variables de notre session
session_unset ();

session_destroy();

header ('location: accueil.php');
?>
