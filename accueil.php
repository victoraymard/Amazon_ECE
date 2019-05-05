<?php
session_start();

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item ');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$allItems = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amazon ECE - Accueil</title>
    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="btn_danger.css">
    <style type="text/css">img{object-fit: contain;}</style>

    

</head>
<body>


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


        <nav class=" navbar-expand-md navbar-dark bg-dark">
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

  </header>
  <form action="deconnexion">
    <button  type="submit" class="btn btn-danger" name="btn_connexion" action="deconnexion" >Déconnexion</button>
</form>



<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Amazon ECE : Le site de e-commerce</h1>
        <p class="lead text-muted mb-0">Trouvez les meilleurs articles aux prix les plus attractifs du marché</p>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col">
            <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div  class="carousel-inner">
                    <!---------------------------------------->


                    <div  class="carousel-item active">
                        <img  class="d-block w-100" src="images\ventes_flash.jpg" style="border-radius:10px;">
                    </div>


                    <?php
                    $nbVentes = $objetPDO->prepare('SELECT * FROM Item WHERE NombreVentes>5');
                    $nbVentesIsOk = $nbVentes->execute();
                    $ventesFlashs = $nbVentes->fetchAll();

                    foreach ($ventesFlashs as $ventesFlash):

                        //preparation de la requette pour photos
                    $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item ='.$ventesFlash['ID_Item']);

                    //execution de la requette pour photos
                    $photosIsOk = $photosReq->execute();

                    //recuperation des resultats pour photos
                    $photos = $photosReq->fetchAll();
                    ?>

                        <div class="carousel-item text-center">
                            <img style="width="855" height="365" border-radius="10"" src=<?= $photos[0]['Nom_Photo']?>>
                        </div>
                    <?php endforeach; ?>
                    <!---------------------------------------->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-header bg-success text-white text-uppercase">
                    <i class="fa fa-heart"></i> Bienvenue sur notre site !
                </div>
                <img src="images\ned_flanders.png">


                <div class="card-body">
                    <p style="text-align: center; font-weight: bold;">Etes-vous prêt à découvrir nos produits ?</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star"></i> Nos produits
                </div>
                <div class="card-body">
                    <div class="row">

                        <!----------------------------------------------------------------------------------test----------->
                        <?php foreach ($allItems as $item): ?>
                            <div class="col-sm">
                                <div class="card text-center">
                                    <a href="produit.php?idItem=<?=$item['ID_Item']?>" >
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$item['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        ?>
                                        <img src=<?= $photos[0]['Nom_Photo']?> width="300" height="200">

                                    </a>
                                    <div class="card-body">

                                        <h4 class="card-title"><a href="produit.php?idItem=<?=$item['ID_Item']?>"><?= $item['Nom']?></a></h4>


                                        <p class="card-text"><?= $item['Description']?></p>
                                        <p class="card-text">Vendeur : <?= $item['Pseudo_Vendeur']?></p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="btn btn-primary btn-block"><?= $item['Prix']?> €</p>
                                            </div>
                                            <div class="col">
                                                <a href="produit.php?idItem=<?=$item['ID_Item']?>" class="btn btn-success btn-block">Plus de détails</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!--------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-12 copyright mt-2">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">Droits d'auteur | Copyright &copy; 2019, Amazon ECE.</p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
