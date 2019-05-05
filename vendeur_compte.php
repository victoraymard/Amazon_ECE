<?php
session_start();

//ouverture de la connexion avec la base de données Projet
$objetPDO = new PDO('mysql:host=localhost;dbname=Projet','root','');

//préparation de la requete
$pdoStat = $objetPDO->prepare("SELECT * FROM Item WHERE Pseudo_Vendeur = '".$_SESSION['Pseudo_Vendeur']."'");

//execution de la requete
$executeIsOk = $pdoStat->execute();

//recupération des resultats
$itemSelects = $pdoStat->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
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
  <link rel="stylesheet" type="text/css" href="vendeur_compte.css">
  <style type="text/css">
      img{object-fit: contain;}
      #vendeur_compte_gauche{background-image: url("<?=$_SESSION['ImageFond']?>");}
  </style>

  
  

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

      <form action="deconnexion.php">
        <button  type="submit" class="btn btn-danger" name="btn_connexion" action="deconnexion.php" >Déconnexion</button>
    </form>
      <!------------------------------------------------------------------------------------------------------->
      <section style="height: 150px;" class="jumbotron text-center">
        <h1 class="jumbotron-heading">Espace vendeur</h1>
    </section>
    <!--code spécifique à la page-->

    <div style="width: 80%; margin: auto;" id="corps_vendeur" class="text-center">
        <div style="flex:1;" id="vendeur_compte_gauche" >
            <img src="<?=$_SESSION['PhotoVendeur']?>">
            <br>
            <h1><?=$_SESSION['Pseudo_Vendeur']?></h1>
        </div>

        <div style="flex:1;" id="vendeur_droite content-wrapper row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div style="border-radius: 20px; margin-top: 15px;" class="card">
                <div class="card-body">
                  <h2 class="card-title">Table Items</h2>
                  <div class="table-responsive">
                    <table class="table table-striped ">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Catégorie.</th>
                          <th>Prix</th>
                          <th>Quantité</th>
                          <th>Remise en  %</th>
                          <th>Appliquer remise</th>
                          <th>Supprimer</th>

                      </tr>
                  </thead>
                  <tbody>


                  <?php foreach ($itemSelects as $itemSelect): ?>

                    <tr>
                      <td><?=$itemSelect['Nom']?></td>
                      <td><?=$itemSelect['Categorie']?></td>
                      <td><?=$itemSelect['Prix']?></td>
                      <td><?=$itemSelect['QuantiteTot']?></td>
                        <form action="appliquer_remise.php?idItem=<?=$itemSelect['ID_Item']?>" method="post">
                        <td><input type="number" name="remise" min="0" max="100" value="0" ></td>
                        <td><button>Aplliquer remise</button></td>
                        </form>
                        <td><a href="suppression_item.php?idItem=<?=$itemSelect['ID_Item']?>"><button>Supprimer item</button></a></td>
                    </tr>
                  <?php endforeach; ?>




              </tbody>
          </table>
      </div>
  </div>
</div>
</div>

</div>
<div  style="background-color: darkgrey;margin-top: 20px;color: #FFF;"id="ajouter_un_item_admin">
    <a href="ajout_item_vendeur.php">ajouter<br/>un item</a>
</div>
</div>
<!------------------------------------------------------------------------------------------------------->
<div id="footer"><small>Droits d'auteur | Copyright &copy; 2019, Amazon ECE.</small></div>
</div>

<script src="table_gestion/vendor.bundle.base.js"></script>
<script src="table_gestion/vendor.bundle.addons.js"></script>
<script src="table_gestion/off-canvas.js"></script>
<script src="table_gestion/misc.js"></script>
</body>
</html>
