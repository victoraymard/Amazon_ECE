<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style_register.css" />


    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <script type="text/javascript">
        function getfile(){
            document.getElementById('fileupload').click();
            document.getElementById('selectedfile').value=document.getElementById('fileupload').value
        }
    </script>


    <title>Amazon ECE - paiement</title>
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








      <div id= "corps">
        <div class="jumbotron text-center">
            <h2>création d'un compte vendeur</h2>
        </div>



        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="images\money.png" alt=""/>
                    <h3>Bienvenue</h3>
                    <p>Veuillez saisir vos informations de paiement pour effectuer la transaction</p>
                </div>

                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Paiement de la commande</h3>
                            <form action="check_paiement.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="int" class="form-control" placeholder="Numero de carte" value="" name="NumCarte" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom du titulaire de la carte" value="" name="NomCarte"required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Date d'expiration de la carte" value="" name="DateCarte" required/>
                                        </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="Type_carte" required placeholder="Sélectionner votre majeure" required>
                                                <option value="reponseParDefault">Sélectionner une réponse</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="American Express">American Express</option>
                                                <option value="Paypal">Paypal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="int" class="form-control" placeholder="Cryptogramme de la carte" value="" name="Crypto" required/>
                                        </div>


                                        <p><font size="2" >Nous ne transmettrons pas vos informations bancaires à des tiers</font></p>


                                        <input type="submit" class="btnRegister"  value="Payer <?=$_GET['Montant_Tot']?> €"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
