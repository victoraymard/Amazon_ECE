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
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
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


    </header><br>








    <div id= "corps">
        <div id="ventes_flash">

            <div id="carrousel">
                <ul>
                    <?php
                    //preparation de la requette pour photos
                    $photosReq = $objetPDO->prepare('SELECT * FROM Photos');

                    //execution de la requette pour photos
                    $photosIsOk = $photosReq->execute();

                    //recuperation des resultats pour photos
                    $photos = $photosReq->fetchAll();
                    ?>

                    <?php foreach ($photos as $photo): ?>

                        <img src=<?= $photo['Nom_photo']?> width="525" height="300" >

                    <?php endforeach; ?>
                </ul>
            </div>

            <div id="accroche">
                <div id="fleche">
                    <img src="images/fleche.png" alt="fleche Amazon ECE" />
                </div>

                <div id="message">
                    <p>
                        Découvrez nos<br/>meilleurs ventes !
                    </p>
                </div>
            </div>


        </div>






        <div id="section">
            <div id="liste_produits">


                <h2>Découvrez nos produits !</h2>



                <?php foreach ($allItems as $item): ?>
                    <div class="produit">
                        <div class="produit_gauche">
                            <a href="produit.php?idItem=<?=$item['ID_Item']?>"><h3><?= $item['Nom']?></h3></a>
                            <a href="produit.php?idItem=<?=$item['ID_Item']?>" >
                                <?php
                                //preparation de la requette pour photos
                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$item['ID_Item']);

                                //execution de la requette pour photos
                                $photosIsOk = $photosReq->execute();

                                //recuperation des resultats pour photos
                                $photos = $photosReq->fetchAll();
                                ?>


                                <img src=<?= $photos[0]['Nom_photo']?>>

                            </a>
                        </div>

                        <div class="produit_droite">
                            <p>
                                <br><br>
                                <strong>Description courte du produit :</strong> <?= $item['Description']?><br>
                                Vendeur : <?= $item['Pseudo_Vendeur']?><br>
                                <strong>Prix : <?= $item['Prix']?> </strong><br>
                                Quantité : <?= $item[0]['QuantiteTot']?>
                            </p>
                        </div>
                    </div>


                <?php endforeach; ?>
            </div>
            <div id="petit_message">

                <img src="images/bulle.png" alt="" id="fleche_bulle" />
                <p id="photo_sympa">
                    <img src="images/ned_flanders.png" alt="Photo sympa" />
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

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
