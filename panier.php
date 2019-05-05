<?php
session_start();

if($_SESSION['Mail'])
{
//ouverture de la connexion avec la base de données Projet
    $objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
    $pdoStat = $objetPDO->prepare('SELECT * FROM Panier WHERE Mail = "'.$_SESSION['Mail'].'"');

//execution de la requete
    $executeIsOk = $pdoStat->execute();

//recupération des resultats
    $allItemsPanier = $pdoStat->fetchAll();
}
else
{
    header('location: votre_compte.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amazon ECE - panier</title>
    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
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
  <section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">VOTRE PANIER</h1>
    </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Nom du produit</th>
                            <th scope="col">Prix unitaire</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!------------------------------------------------------------------------------>

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




                                <td><a href="produit.php">
                                    <?php
                                                //preparation de la requette pour photos
                                    $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$itemSelect[0]['ID_Item']);

                                                //execution de la requette pour photos
                                    $photosIsOk = $photosReq->execute();

                                                //recuperation des resultats pour photos
                                    $photos = $photosReq->fetchAll();
                                    ?>


                                    <img src=<?= $photos[0]['Nom_Photo']?> width="300" height="200"></a></td>




                                    <td><a href="produit.php?idItem=<?=$itemSelect[0]['ID_Item']?>"><h3><?= $itemSelect[0]['Nom']?></h3></a></td>

                                    <td><?= $itemSelect[0]['Prix']?> €</td>
                                    <td class="text-center"><?= $itemPanier['Quantite_panier']?></td>
                                    <td class="text-right"><?= $itemSelect[0]['Prix']*$itemPanier['Quantite_panier']?> €</td>
                                    <td class="text-right"><a href="suppression_panier.php?idItem=<?=$itemSelect[0]['ID_Item']?>"><button class="btn btn-sm btn-danger">supprimer</button></a></td>
                                </tr>
                            <?php endforeach; ?>

                            <!------------------------------------------------------------------------------>
                                    <!--<tr>
                                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                        <td>Product Name Toto</td>
                                        <td>In stock</td>
                                        <td><input class="form-control" type="number" value="1" /></td>
                                        <td class="text-right">33,90 €</td>
                                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                                        <td>Product Name Titi</td>
                                        <td>In stock</td>
                                        <td><input class="form-control" type="number" value="1" /></td>
                                        <td class="text-right">70,00 €</td>
                                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                    </tr>-->
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <?php
                                        if ($_SESSION['Montant_Tot']==""){
                                            $_SESSION['Montant_Tot']=0;
                                        }
                                        ?>
                                        <td class="text-right"><?= $_SESSION['Montant_Tot']?> €</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping fee</td>
                                        <td class="text-right">6 €</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <?php
                                        $tot_shiping = $_SESSION['Montant_Tot'] + 6;
                                        ?>
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong><?= $tot_shiping?> €</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <a href="accueil.php"><button class="btn btn-block btn-light">Continuer votre shopping</button></a>
                            </div>
                            <div class="col-sm-12 col-md-6 text-right">
                                <a href="paiement.php?Montant_Tot=<?= $tot_shiping?>"><button class="btn btn-lg btn-block btn-success text-uppercase">Paiement</button></a>
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

