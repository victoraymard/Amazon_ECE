<?php
session_start();

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE ID_Item='.$_GET['idItem']);

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$itemSelect = $pdoStat->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_register.css" />
    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <title>Amazon ECE - Produit</title>
</head>

<body>
    <div id="bloc_page">

        <header>

            <div id="logo">
                <a href ="accueil.php"><img src="images/icone.png" alt="Logo Amazon ECE" /></a>
            </div>

            <h1 id="titre_principal">
                <a href ="accueil.php">Amazon ECE</a>
            </h1>


            <div id="langue">
                <a href="accueil.php"><img src="images/france.png" alt="langue française" /></a>
                <a href="#"><img src="images/ru.png" alt="langue anglaise" /></a>
            </div>

            <nav>
                <ul>
                    <li><a href="#" id="categories">Catégories</a> <!--menu déroulant-->
                        <ul class="submenu">
                            <li><a href="livres.php">Livres</a></li>
                            <li><a href="musiques.php">Musiques</a></li>
                            <li><a href="vetements.php">Vêtements</a></li>
                            <li><a href="sports_loisirs.php">Sports et loisirs</a></li>
                        </ul>
                    </li>

                    <li><a href="ventes_flash.php">Ventes flash</a></li>
                    <li><a href="votre_compte.php">Votre compte</a></li>
                    <li><a href="vendeur.php">Vendre</a></li>
                    <li class="overlay-image"><a href="panier.php">
                        <div class="normal">
                          <div class="text">Panier</div>
                      </div>
                      <div class="hover">
                          <img class="image" src="images\icone_panier.png" alt="Alt text hover" />
                          <div class="text">Panier</div>
                      </div>
                  </a></li>
                  <li><a href="admin.php">Admin</a></li>
              </ul>
          </nav>
      </header><br>
      <!------------------------------------------------------------------------------------------------------->
      <section class="jumbotron text-center">
            <h1 class="jumbotron-heading">Votre produit</h1>
            <p class="lead text-muted mb-0">Voici toutes les informations dont vous avez besoin</p>
    </section>
    <!--code spécifique à la page-->
    <div style="width: 80%; margin: auto;" id="corps_produit">
        <div id="page_produit_gauche">
            <div id="produit_images">
                <div id="produit_images_gauche">

                    <?php
                //preparation de la requette pour photos
                    $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$itemSelect[0]['ID_Item']);

                //execution de la requette pour photos
                    $photosIsOk = $photosReq->execute();

                //recuperation des resultats pour photos
                    $photos = $photosReq->fetchAll();
                    ?>

                    <?php foreach ($photos as $photo): ?>

                        <img src=<?= $photo['Nom_Photo']?>width="300" height="200">

                    <?php endforeach; ?>

                </div>

                <div id="produit_images_droite">
                    <img src=<?= $photos[0]['Nom_Photo']?>width="300" height="200">
                </div>

            </div>

        </div>

        




        <div id="page_produit_droite">
            <table id="table_produit_gauche">
               <tr>
                   <td colspan="2" align="left"><h2><?= $itemSelect[0]['Nom']?></h2></td>
               </tr>



               <tr>
                <td colspan="2" align="left">
                    <p>Description : <?= $itemSelect[0]['Description']?></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    Quantité : <?= $itemSelect[0]['QuantiteTot']?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="left">
                    <br>
                    <strong>Prix : <?= $itemSelect[0]['Prix']?></strong>
                </td>
            </tr>
        </table>

        <table id="table_produit_droite">


            <form action="ajouterpanier.php?idItem=<?=$itemSelect[0]['ID_Item']?>" method="post">
                <tr>
                    <td>
                        Votre vendeur:
                    </td>
                    <td>
                        <?= $itemSelect[0]['Pseudo_Vendeur']?>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label> Quantité : </label>
                    </td>
                    <td>
                        <input type="number" max=<?= $itemSelect[0]['QuantiteTot']?> min="0" name="Quantite_Panier" placeholder="Quantité" required>
                    </td>
                </tr>



                <tr>
                    <td>
                        <label> Prix unitaire : </label>
                    </td>
                    <td>
                        <output type="text"><?= $itemSelect[0]['Prix']?></output>
                    </td>
                </tr>


                <tr>
                    <td colspan="2" align="right"><input type="submit" value="Ajouter au panier"></td>
                </tr>



            </form>
            <br>
        </table>















    </div>
</div>
</div>


<!------------------------------------------------------------------------------------------------------->
<div id="footer">
    <small>
        Droits d'auteur | Copyright &copy; 2019, Amazon ECE.
    </small>
</div>
</div>
</body>

</html>
