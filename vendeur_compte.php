<?php
session_start();
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
  <style type="text/css">
  img{object-fit: contain;}
  #ajouter_un_item_admin > a{color: white;}
  #ajouter_un_item_admin > a:hover{text-decoration: none; color: white; }
  #ajouter_un_item_admin:hover{box-shadow: 10px 5px 5px black;}
  #vendeur_compte_gauche img{height: 300px;width: 300px;object-fit:contain;}
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

      <form action="deconnexion">
        <button  type="submit" class="btn btn-danger" name="btn_connexion" action="deconnexion" >Déconnexion</button>
    </form>
      <!------------------------------------------------------------------------------------------------------->
      <section style="height: 150px;" class="jumbotron text-center">
        <h1 class="jumbotron-heading">Espace vendeur</h1>
    </section>
    <!--code spécifique à la page-->

    <div style="width: 80%; margin: auto;" id="corps_vendeur" class="text-center">
        <div style="flex:1;" id="vendeur_compte_gauche">
            <img src="images\vendeur.jpg">
            <br>
            <h1>Nom vendeur</h1>
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
                          <th>Photo</th>
                          <th>Nom</th>
                          <th>Catégorie.</th>
                          <th>Prix</th>
                          <th>Quantité</th>
                          <th>Supprimer</th>

                      </tr>
                  </thead>
                  <tbody>


                    <tr>
                      <td class="py-1"><img src="table_gestion/pic-1.png" alt="image" /></td>
                      <td>Mme Bovarie</td>
                      <td>Livre</td>
                      <td>8€</td>
                      <td>12</td>
                      <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>

                  </tr>


                  <tr>
                      <td class="py-1"><img src="table_gestion/pic-1.png" alt="image" /></td>
                      <td>Mme Bovarie</td>
                      <td>Livre</td>
                      <td>8€</td>
                      <td>12</td>
                      <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>

                  </tr>

                  <tr>
                      <td class="py-1"><img src="table_gestion/pic-1.png" alt="image" /></td>
                      <td>Mme Bovarie</td>
                      <td>Livre</td>
                      <td>8€</td>
                      <td>12</td>
                      <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>

                  </tr>

                  <tr>
                      <td class="py-1"><img src="table_gestion/pic-1.png" alt="image" /></td>
                      <td>Mme Bovarie</td>
                      <td>Livre</td>
                      <td>8€</td>
                      <td>12</td>
                      <td><input style="background-color: darkred;" type="button" name="nom du produit"></td>

                  </tr>





              </tbody>
          </table>
      </div>
  </div>
</div>
</div>

</div>
<div  style="background-color: #424558;margin-top: 20px;" id="ajouter_un_item_admin">
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
