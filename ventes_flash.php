<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="boostrap\css\bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <title>Amazon ECE - Accueil</title>
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
                    <li><a href="cate.php" id="categories">Catégories</a> <!--menu déroulant-->
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


        </header><br>








        <div id= "corps">
            <div id="ventes_flash_ventesflash">


                <h2>
                    Découvrez nos meilleurs ventes !
                </h2>

                <p>
                    <a href="#ancre_livres">Livres</a>, 
                    <a href="#ancre_musiques">musiques</a>, 
                    <a href="#ancre_vêtements">vêtements</a>, 
                    <a href="#ancre_sports_loisirs">sports et loisirs</a>
                </p>


            </div>











            <div id="section">
                <div id="liste_produits_categorie">


                 <h2 id="ancre_livres">Nos livres</h2>


                 <!------------------------livres------------------------------------------------------->

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

                 <div class="container container_ventes_flash">

                     <?php foreach ($livres as $livre): ?>


                      <!--<div class="col-md-4 col-sm-6 mon_produit">-->
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="#">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$livre['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>

                                    </a>
                                    <ul class="social">
                                        <li><a href="" class="fa fa-search"></a></li>
                                        <li><a><font size="1">£ 10.00</font></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $livre['Nom']?>
                                        <span><font size="1">£ 10.00</font> </span>
                                    </div>
                                    <span class="product-shipping"><?= $livre['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $livre['Nom']?></a></h3>
                                    <a class="all-deals" href="">More info <i class="fa fa-angle-right icon"></i></a>
                                </div>
                            </div>
                        </div>


                     <?php endforeach; ?>

                </div>
            
            <hr>

            <!------------------------livres------------------------------------------------------->



           

            <!------------------------musiques------------------------------------------------------->

                    <?php
                    //ouverture de la connexion avec la base de données Projet
                    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
                    $pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE Categorie = \'Musique\' ');

                    //execution de la requete
                    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
                    $musiques = $pdoStat->fetchAll();
                    ?>

                 <h2 id="ancre_musiques">Nos musiques</h2>

                 <div class="container container_ventes_flash">


                     <?php foreach ($musiques as $musique): ?>


                      <!--<div class="col-md-4 col-sm-6 mon_produit">-->
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="#">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$musique['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>
                                    </a>
                                    <ul class="social">
                                        <li><a href="" class="fa fa-search"></a></li>
                                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $musique['Nom']?>
                                        <span>£ 10.00</span>
                                    </div>
                                    <span class="product-shipping"><?= $musique['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $musique['Nom']?></a></h3>
                                    <a class="all-deals" href="">More info <i class="fa fa-angle-right icon"></i></a>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
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

                      <!--<div class="col-md-4 col-sm-6 mon_produit">-->
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="#">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$vetement['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>
                                    </a>
                                    <ul class="social">
                                        <li><a href="" class="fa fa-search"></a></li>
                                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $vetement['Nom']?>
                                        <span>£ 10.00</span>
                                    </div>
                                    <span class="product-shipping"><?= $vetement['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $vetement['Nom']?></a></h3>
                                    <a class="all-deals" href="">More info <i class="fa fa-angle-right icon"></i></a>
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


                      <!--<div class="col-md-4 col-sm-6 mon_produit">-->
                        <div class="row mon_produit">
                            <div class="product-grid8">

                                <div class="product-image8">
                                    <a href="#">
                                        <?php
                                        //preparation de la requette pour photos
                                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$sport_loisir['ID_Item']);

                                        //execution de la requette pour photos
                                        $photosIsOk = $photosReq->execute();

                                        //recuperation des resultats pour photos
                                        $photos = $photosReq->fetchAll();
                                        ?>
                                        <img class="pic-1" src=<?= $photos[0]['Nom_photo']?>>
                                        <img class="pic-2" src=<?= $photos[1]['Nom_photo']?>>
                                    </a>
                                    <ul class="social">
                                        <li><a href="" class="fa fa-search"></a></li>
                                        <li><a href="" class="fa fa-shopping-bag"></a></li>
                                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                                    </ul>
                                    <span class="product-discount-label">-20%</span>
                                </div>
                                <div class="product-content">
                                    <div class="price"><?= $sport_loisir['Nom']?>
                                        <span>£ 10.00</span>
                                    </div>
                                    <span class="product-shipping"><?= $sport_loisir['Description']?></span>
                                    <h3 class="title"><a href="#"><?= $sport_loisir['Nom']?></a></h3>
                                    <a class="all-deals" href="">More info <i class="fa fa-angle-right icon"></i></a>
                                </div>
                            </div>
                        </div>
                     <?php endforeach; ?>
                </div>
            
            <hr>

            <!------------------------sports et loisirs------------------------------------------------------->
            </div>



            <!-------------------------------------fin produits------------------------------------------>
        </div>
    </div>
</div>

<div id="footer">
    <small>
        Droits d'auteur | Copyright &copy; 2019, Amazon ECE.
    </small>
</div>
</div>



</body>





</html>
