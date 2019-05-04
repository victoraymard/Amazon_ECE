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
    <link rel="stylesheet" type="text/css" href="css/ventes_flash.css">
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
                <li><a href="panier.php">Panier</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
        <form action="deconnexion">
            <button type="submit" class="btn btn-danger" name="btn_connexion" action="deconnexion" >Déconnexion</button>
        </form>
    </header>



    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Amazon ECE : Le site de e-commerce</h1>
            <p class="lead text-muted mb-0">Trouvez les meilleurs articles aux prix les plus attractifs du marché</p>
        </div>
    </section>


    <!--<div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/apple1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/apple2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://dummyimage.com/855x365/1443ff/fff" alt="Third slide">
                        </div>
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
    </div>-->


    <!--------------------------------livres------------------------------------------------->
    <?php
                    //ouverture de la connexion avec la base de données Projet
    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
    $pdoStat = $objetPDO->prepare('SELECT * FROM Item  WHERE Categorie = \'Livre\' ');

                    //execution de la requete
    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
    $livres = $pdoStat->fetchAll();
    ?>
<h2 id="ancre_vêtements">Nos livres</h2>

    <div class="container container_ventes_flash">
       

            <div class="row mon_produit">
                <?php foreach ($livres as $livre): ?>
                <div class="col-md-3 col-sm-6">
                    
                    <div class="product-grid8">

                        <div class="product-image8">

                            <a href="produit.php?idItem=<?=$livre['ID_Item']?>">
                                <?php
                                        //preparation de la requette pour photos
                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$livre['ID_Item']);

                                        //execution de la requette pour photos
                                $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                $photos = $photosReq->fetchAll();

                                if ($photos[1]['Nom_photo']==""){
                                    $photos[1]['Nom_photo']="images/blanc.jpg";
                                }

                                ?>
                                <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>

                            </a>


                            <ul class="social">
                                <li><a href="produit.php?idItem=<?=$livre['ID_Item']?>" class="fa fa-search"></a></li>
                                <li><a href="produit.php?idItem=<?=$livre['ID_Item']?>"> <font size="3"><?= $livre['Prix']?>€</font></a></li>
                                <li><a href="" class="fa fa-shopping-cart"></a></li>
                            </ul>


                            <span class="product-discount-label">- <?= $livre['Remise']?>%</span>
                        </div>
                        <div class="product-content">
                            <div class="price"><?= $livre['Nom']?></div>
                            <span class="product-shipping"><?= $livre['Description']?></span>
                            <a class="all-deals" href="produit.php?idItem=<?=$livre['ID_Item']?>">More info <i class="fa fa-angle-right icon"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        <hr>


        <!-------------------------------livres----------------------------------------------------->

    <!--------------------------------musiques------------------------------------------------->
    <?php
                    //ouverture de la connexion avec la base de données Projet
    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
    $pdoStat = $objetPDO->prepare('SELECT * FROM Item  WHERE Categorie = \'Musique\' ');

                    //execution de la requete
    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
    $musiques = $pdoStat->fetchAll();
    ?>

<h2 id="ancre_vêtements">Nos musiques</h2>
    <div class="container container_ventes_flash">
       

            <div class="row mon_produit">
                <?php foreach ($musiques as $musique): ?>
                <div class="col-md-3 col-sm-6">
                    
                    <div class="product-grid8">

                        <div class="product-image8">

                            <a href="produit.php?idItem=<?=$musique['ID_Item']?>">
                                <?php
                                        //preparation de la requette pour photos
                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$musique['ID_Item']);

                                        //execution de la requette pour photos
                                $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                $photos = $photosReq->fetchAll();

                                if ($photos[1]['Nom_photo']==""){
                                    $photos[1]['Nom_photo']="images/blanc.jpg";
                                }

                                ?>
                                <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>

                            </a>


                            <ul class="social">
                                <li><a href="produit.php?idItem=<?=$musique['ID_Item']?>" class="fa fa-search"></a></li>
                                <li><a href="produit.php?idItem=<?=$musique['ID_Item']?>"> <font size="3"><?= $musique['Prix']?>€</font></a></li>
                                <li><a href="" class="fa fa-shopping-cart"></a></li>
                            </ul>


                            <span class="product-discount-label">- <?= $musique['Remise']?>%</span>
                        </div>
                        <div class="product-content">
                            <div class="price"><?= $musique['Nom']?></div>
                            <span class="product-shipping"><?= $musique['Description']?></span>
                            <a class="all-deals" href="produit.php?idItem=<?=$musique['ID_Item']?>">More info <i class="fa fa-angle-right icon"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        <hr>


        <!-------------------------------livres----------------------------------------------------->

         <!------------------------vêtements------------------------------------------------------->

<?php
                    //ouverture de la connexion avec la base de données Projet
    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
    $pdoStat = $objetPDO->prepare('SELECT * FROM Item  WHERE Categorie = \'Vetement\' ');

                    //execution de la requete
    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
    $vetements = $pdoStat->fetchAll();
    ?>

<h2 id="ancre_vêtements">Nos vetements
</h2>
    <div class="container container_ventes_flash">
       

            <div class="row mon_produit">
                <?php foreach ($vetements as $vetement): ?>
                <div class="col-md-3 col-sm-6">
                    
                    <div class="product-grid8">

                        <div class="product-image8">

                            <a href="produit.php?idItem=<?=$vetement['ID_Item']?>">
                                <?php
                                        //preparation de la requette pour photos
                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$vetement['ID_Item']);

                                        //execution de la requette pour photos
                                $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                $photos = $photosReq->fetchAll();

                                if ($photos[1]['Nom_photo']==""){
                                    $photos[1]['Nom_photo']="images/blanc.jpg";
                                }

                                ?>
                                <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>

                            </a>


                            <ul class="social">
                                <li><a href="produit.php?idItem=<?=$vetement['ID_Item']?>" class="fa fa-search"></a></li>
                                <li><a href="produit.php?idItem=<?=$vetement['ID_Item']?>"> <font size="3"><?= $vetement['Prix']?>€</font></a></li>
                                <li><a href="" class="fa fa-shopping-cart"></a></li>
                            </ul>


                            <span class="product-discount-label">- <?= $vetement['Remise']?>%</span>
                        </div>
                        <div class="product-content">
                            <div class="price"><?= $vetement['Nom']?></div>
                            <span class="product-shipping"><?= $vetement['Description']?></span>
                            <a class="all-deals" href="produit.php?idItem=<?=$vetement['ID_Item']?>">More info <i class="fa fa-angle-right icon"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        <hr>

            <!------------------------musiques------------------------------------------------------->




             <!------------------------vêtements------------------------------------------------------->
                    <?php
                    //ouverture de la connexion avec la base de données Projet
                    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
                    $pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE Categorie = \'Vetement\' ');

                    //execution de la requete
                    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
                    $vetements = $pdoStat->fetchAll();
                    ?>
                 <h2 id="ancre_vêtements">Nos vêtements</h2>

                 <div class="container container_ventes_flash">

                     <?php foreach ($vetements as $vetement): ?>

                      <div class="col-md-4 col-sm-6 mon_produit">
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="produit.php?idItem=<?=$vetement['ID_Item']?>">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$vetement['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        if ($photos[1]['Nom_photo']==""){
                                            $photos[1]['Nom_photo']="images/blanc.jpg";
                                        }

                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>
                                    </a>
                                    <ul class="social">
                                        <li><a href="produit.php?idItem=<?=$vetement['ID_Item']?>" class="fa fa-search"></a></li>
                                        <li><a href="produit.php?idItem=<?=$vetement['ID_Item']?>" <font size="3"><?= $vetement['Prix']?>€</font></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a>
                                    </ul>
                                    <span class="product-discount-label">- <?= $vetement['Remise']?>%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $vetement['Nom']?>
                                        <span>£ 10.00</span>
                                    </div>
                                    <span class="product-shipping"><?= $vetement['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $vetement['Nom']?></a></h3>
                                    <a class="all-deals" href="produit.php?idItem=<?=$vetement['ID_Item']?>">More info <i class="fa fa-angle-right icon"></i></a>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
                 </div>
            
            <hr>

            <!------------------------vêtements------------------------------------------------------->

             <!------------------------sports et loisirs------------------------------------------------------->

                    <?php
                    session_start();

                    //ouverture de la connexion avec la base de données Projet
                    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
                    $pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE Categorie = \'sports_loisirs\' ');

                    //execution de la requete
                    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
                    $sports_loisirs = $pdoStat->fetchAll();
                    ?>

                 <h2 id="ancre_sports_loisirs">Nos accessoires de sports et loisirs</h2>

                 <div class="container container_ventes_flash">


                     <?php foreach ($sports_loisirs as $sport_loisir): ?>


                      <div class="col-md-4 col-sm-6 mon_produit">
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="produit.php?idItem=<?=$sport_loisir['ID_Item']?>">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$sport_loisir['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        if ($photos[1]['Nom_photo']==""){
                                            $photos[1]['Nom_photo']="images/blanc.jpg";
                                        }

                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>
                                    </a>
                                    <ul class="social">
                                        <li><a href="produit.php?idItem=<?=$sport_loisir['ID_Item']?>" class="fa fa-search"></a></li>
                                        <li><a href="produit.php?idItem=<?=$sport_loisir['ID_Item']?>" <font size="3"><?= $sport_loisir['Prix']?>€</font></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                                    </ul>
                                    <span class="product-discount-label">- <?= $livre['Remise']?>%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $sport_loisir['Nom']?>
                                        <span>£ 10.00</span>
                                    </div>
                                    <span class="product-shipping"><?= $sport_loisir['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $sport_loisir['Nom']?></a></h3>
                                    <a class="all-deals" href="produit.php?idItem=<?=$sport_loisir['ID_Item']?>">More info <i class="fa fa-angle-right icon"></i></a>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
                </div>
            
            <hr>

            <!------------------------sports et loisirs------------------------------------------------------->























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
