<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="style.css" />
    
    <link rel="stylesheet" href="style_register.css" />
    <style type="text/css">img{object-fit: contain;}</style>


    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <script type="text/javascript">
        function getfile(){
            document.getElementById('fileupload').click();
            document.getElementById('selectedfile').value=document.getElementById('fileupload').value
        }
    </script>
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








      <div id= "corps">
        <div class="jumbotron text-center">

            <h2>Espace client</h2>

        </div>

        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="images\user.png" alt=""/>
                    <h3>Ravis de vous revoir</h3>
                    <p>Nous nous sentions perdu sans vous</p>
                    <a href="votre_compte_creation.php"><input type="submit" name="" value="Enregistrez-vous!"/><br/></a>

                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Connexion acheteur</h3>
                            <form action="connexion_acheteur.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email *" value="" name="Mail" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Mot de passe *" value="" name="Mdp" required/>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <input type="submit" class="btnRegister"  value="Connectez-vous!"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           <!-- <div id="section_votreCompte">


                <table frame="box">

                    <tr>
                        <td colspan="2" align="left"><h1>Formulaire de connexion</h1></td>
                    </tr>



                    <tr>
                        <td colspan="2" align="left"><p>Veuillez remplir le formulaire suivant pour vous connecter sur notre site:</p> </td>
                    </tr>

                    <form action="connexion_acheteur.php" method="post">
                        <tr>
                            <td>
                                <label> Mail: </label>
                            </td>
                            <td>
                                <input type="text" name="Mail" required>
                            </td>
                        </tr>



                        <tr>
                            <td>
                                <label> Mot de passe: </label>
                            </td>
                            <td>
                                <input type="password" name="Mdp" required>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2" align="right"><input type="submit" value="Se connecter"></td>
                        </tr>


                    </form>
                    <br>
                </table>

                <br><br>
                <a href="votre_compte_creation.php">Toujours pas de compte chez nous ?</a>


            </div>-->

        </div>



        <div id="footer">
            <small>
                Droits d'auteur | Copyright &copy; 2019, Amazon ECE.
            </small>
        </div>
    </div>
</body>

</html>
