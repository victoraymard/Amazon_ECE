<?php
session_start();

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Panier WHERE Mail = "'.$_SESSION['Mail'].'"');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$allItemsPanier = $pdoStat->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <title>Amazon ECE - Connexion acheteur</title>
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
        <!------------------------------------------------------------------------------------------------------->
        <!--code spécifique à la page-->

        <div id="corps_vendeur">
            <div id="vendeur_compte_gauche">
                
                <p>
                    Bienvenue dans votre panier.<br>Prêt à passer commande ?
                </p>
            </div>






            <div id="vendeur_droite">

                <div id="ajouter_un_item">
                    <a href="ajout_item_vendeur.php">ajouter un item</a>
                    <!--<p>il faut pouvoir revenir à la page précédente, et donc savoir de laquelle il s'agit</p>-->
                </div>

            

            <br>





               <table frame="box">

                <tr>
                    <td colspan="2" align="left"><h2>Mes items</h2></td>
                </tr>


                   <!----------------------------------PRODUIT--------------------------------------->

                <form>
                    <?php foreach ($allItemsPanier as $itemPanier): ?>

                    <?php
                    //ouverture de la connexion avec la base de données Projet
                    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

                    //préparation de la requete
                    $pdoStat = $objetPDO->prepare('SELECT * FROM Item WHERE ID_Item ='.$itemPanier['ID_Item']);

                    //execution de la requete
                    $executeIsOk = $pdoStat->execute();

                    //recupération des resultats
                    $itemSelect = $pdoStat->fetchAll();

                    ?>
                    <tr>
                        <td>
                            <input type="checkbox" id="item_checkbox">
                        </td>
                        <td>
                            <label>

                                    <div class="produit">
                                        <div class="produit_gauche">
                                            <a href="produit.php?idItem=<?=$itemSelect[0]['ID_Item']?>"><h3><?= $itemSelect[0]['Nom']?></h3></a>
                                            <a href="produit.php">
                                                <?php
                                                //preparation de la requette pour photos
                                                $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$itemSelect[0]['ID_Item']);

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
                                                <strong>Description courte du produit :</strong> <?= $itemSelect[0]['Description']?><br>
                                                <strong>Vendeur :</strong> <?= $itemSelect[0]['Pseudo_Vendeur']?><br>
                                            <h4>Prix : <?= $itemSelect[0]['Prix']?> </h4>
                                            </p>
                                        </div>
                                    </div>
                            </label>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                    <!------------------------------------------------------------------------------------------------------->

                    <tr>
                        <td colspan="2" align="left"><input type="button" value="passer commande" onclick="validation()"></td>
                    </tr>



                </form>
            </table>







            

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
