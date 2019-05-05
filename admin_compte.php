<?php
session_start();

//Pour pas que la page admin soit accesible par adresse
if(!isset($_SESSION['Pseudo_Admin']))
{
  header('location: accueil.php');
  exit();
}

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare('SELECT * FROM Item');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$allItems = $pdoStat->fetchAll();

//ouverture de la connexion avec la base de données Projet
$objetPDO2 = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat2 = $objetPDO2->prepare('SELECT * FROM Vendeur');

//execution de la requete
$executeIsOk2 = $pdoStat2->execute();

//recupération des resultats
$allVendeurs = $pdoStat2->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <link rel="stylesheet" href="table_gestion/materialdesignicons.min.css">
  <link rel="stylesheet" href="table_gestion/vendor.bundle.base.css">
  <link rel="stylesheet" href="table_gestion/vendor.bundle.addons.css">
  <link rel="stylesheet" href="table_gestion/style.css">



  <meta charset="utf-8" />
  <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style_register.css" />
  <link rel="stylesheet" type="text/css" href="btn_danger.css">
  <style type="text/css">
    img{object-fit: contain;}
    .jumbotron-heading a{color: darkred; font-weight: bold;}
    .jumbotron-heading a:hover{color: darkred; text-decoration: none;}

  </style>


  <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="myscript.js"></script>
  <title>Amazon ECE - Connexion acheteur</title>
</head>

<body>
  <div id="bloc_page" >

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

    <form action="deconnexion">
      <button  type="submit" class="btn btn-danger" name="btn_connexion" action="deconnexion" >Déconnexion</button>
    </form>
    <!------------------------------------------------------------------------------------------------------->
    <!--code spécifique à la page-->

    <section class="jumbotron text-center">
      <h1 class="jumbotron-heading"><a href="swagadmin_compte.php">Espace administrateur</a></h1>
    </section>

    <div class="row text-center">
      <div class="col-lg-6">
        <a href="ajout_item_admin.php"><button type="button" class="btn btn-outline-dark">ajouter un items</button></a>            
      </div>
      <div class="col-lg-6">
        <a href="ajout_vendeur.php"><button type="button" class="btn btn-outline-dark">ajouter un vendeur</button></a>
      </div>
    </div>

    


    <div style=" margin: auto;" class="main-panel">
      <div class="content-wrapper">
        <div class="row text-center">


          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Table Items</h4>
                <div class="table-responsive">
                  <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Catégorie.</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Vendeur</th>
                        <th>Supprimer</th>

                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($allItems as $allItem): ?>

                        <?php
                        //preparation de la requette pour photos
                        $photosReq = $objetPDO->prepare('SELECT * FROM Photos WHERE ID_Item = '.$allItem['ID_Item']);

                        //execution de la requette pour photos
                        $photosIsOk = $photosReq->execute();

                        //recuperation des resultats pour photos
                        $photo = $photosReq->fetchAll();
                        ?>


                      <tr>
                        <td class="py-1"><img src="<?=$photo[0][Nom_Photo]?>" alt="image" /></td>
                        <td><?=$allItem['Nom']?></td>
                        <td><?= $allItem['Categorie']?></td>
                        <td>8<?= $allItem['Prix']?>€</td>
                        <td><?= $allItem['QuantiteTot']?></td>
                        <td><?= $allItem['Pseudo_Vendeur']?></td>
                        <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>
                      </tr>
                    <?php endforeach; ?>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Table vendeurs</h4>
                <div class="table-responsive">
                  <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Pseudo</th>
                        <th>Nombre d'items</th>
                        <th>Progression</th>
                        <th>Nombres de ventes</th>
                        <th>Supprimer</th>

                      </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($allVendeurs as $allVendeur):

                        //ouverture de la connexion avec la base de données Projet
                        $objetPDO3 = new PDO('mysql:host=localhost;dbname=Projet','root','');

                        //préparation de la requete
                        $pdoStat3 = $objetPDO3->prepare("SELECT * FROM Item WHERE Pseudo_Vendeur = '".$allVendeur['Pseudo_Vendeur']."'");

                        //execution de la requete
                        $executeIsOk3 = $pdoStat3->execute();

                        //recupération des resultats
                        $itemsVendeurs = $pdoStat3->fetchAll();

                        $nbTotItems = 0;
                        $nbTotVendus = 0;

                        foreach ($itemsVendeurs as $itemsVendeur):
                            $nbTotItems = $nbTotItems + $itemsVendeur['QuantiteTot'];
                            $nbTotVendus = $nbTotVendus + $itemsVendeur['NombreVentes'];
                        endforeach;
                        ?>

                      <tr>
                        <td class="py-1"><img src="<?=$allVendeur['PhotoVendeur']?>" alt="image" /></td>
                        <td><?=$allVendeur['Nom']?></td>
                        <td><?=$nbTotItems?></td>
                        <td><div class="progress"><div class="progress-bar " role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div></td>
                        <td><?=$nbTotVendus?></td>
                        <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>
                      </tr>
                    <?php endforeach; ?>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>




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
  <script src="table_gestion/vendor.bundle.base.js"></script>
  <script src="table_gestion/vendor.bundle.addons.js"></script>
  <script src="table_gestion/off-canvas.js"></script>
  <script src="table_gestion/misc.js"></script>
</body>

</html>
