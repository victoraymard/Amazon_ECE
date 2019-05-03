<?php
session_start();

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE Categorie = \'Vetement\' ');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$vetements = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="boostrap\css\bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <title>Amazon ECE - Accueil</title>
</head>

<body>
    <div id="bloc_page">
        <!------------------------------------------------------------------------------->
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
                    <li><a id="categories" href="#">Catégories</a> <!--menu déroulant-->
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

        <!------------------------------------------------------------------------------->






        <div id= "corps">
            <div id="banniere">
                
                <img src="images\vetements.jpg">
                <h2>Nos vêtements</h2>
            </div>

            <!----------------------------LISTE PRODUITS START -------------------------------->
            <div id="section">

                <div class="liste_produits_categorie" id="liste_produits_categorie">


                    <h2>Découvrez nos produits !</h2>


                    <?php foreach ($vetements as $vetement): ?>


                        <div class="produit_categorie">
                            <div class="produit_gauche_categorie">
                                <?php
                                //preparation de la requette pour photos
                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$vetement['ID_Item']);

                                //execution de la requette pour photos
                                $photosIsOk = $photosReq->execute();

                                //recuperation des resultats pour photos
                                $photos = $photosReq->fetchAll();
                                ?>
                                    <a href="produit.php?idItem=<?=$vetement['ID_Item']?>">
                                        <img src=<?= $photos[0]['Nom_photo']?>>
                                    </a>
                            </div>

                            <div class="produit_droite_categorie">
                                <h3>
                                    <a href="produit.php?idItem=<?=$vetement['ID_Item']?>"><?= $vetement['Nom']?></a>
                                </h3>
                                <p>
                                <h4>Description courte du produit</h4><br>
                                <?= $vetement['Description']?>
                                </p>
                                <p>
                                    quantité : <?= $vetement['QuantiteTot']?>
                                </p>
                                <p>
                                    à partir de (prix le plus bas)
                                </p>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>


            </div>
        </div>

        <!----------------------------LISTE PRODUITS END -------------------------------->

        </div>


        <!------------------------------------------------------------------------------->
        <div id="footer">
            <small>
                Droits d'auteur | Copyright &copy; 2019, Amazon ECE.
            </small>
        </div>
    </div>
</body>

</html>
