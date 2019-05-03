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
    <title>Amazon ECE - création compte vendeur</title>
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
            <div id="ventes_flash">
                <h2>création d'un compte vendeur</h2>
            </div>



            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images\money.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Vous êtes à seulement 30 secondes de pouvoir vendre votre premier article!</p>

                        <input type="submit" name="" value="Connectez-vous!"/><br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Enregistrement vendeur</h3>
                                <form action="inscription_vendeur.php" method="post">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom *" value="" name="Nom" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pseudo *" value="" name="Pseudo_Vendeur"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Mot de passe *" value="" name="Mdp" />
                                            </div>
                                            <!--<div class="form-group">
                                                <input type="password" class="form-control"  placeholder="Confirmez votre mot de passe *" value="" name="Mdp"/>
                                            </div>-->

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" name="Mail" />
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="PhotoVendeur" value="fileupload" id="fileupload">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="ImageFond" value="fileupload" id="fileupload">
                                            </div>
                                            <p><font size="2" >Nous ne transmettrons pas vos informations à des tiers</font></p>


                                            <input type="submit" class="btnRegister"  value="Enregistrez-vous!"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>























            <!--<div id="section_votreCompte">


                <table frame="box">

                    <tr>
                        <td colspan="2" align="left"><h1>Enregistrement de l'utilisateur</h1></td>
                    </tr>



                    <tr>
                        <td colspan="2" align="left"><p>Veuillez remplir le formulaire suivant pour vous inscrire sur notre site:</p> </td>
                    </tr>


                    <form action="inscription_vendeur.php" method="post">

                        <tr>
                            <td>
                                <h3>Informations personnelles</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Nom : </label>
                            </td>
                            <td>
                                <input type="text" id="nom" name="Nom">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Pseudo : </label>
                            </td>
                            <td>
                                <input type="text" id="pseudo" name="Pseudo_Vendeur">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Mail : </label>
                            </td>
                            <td>
                                <input type="email" id="mail" name="Mail">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Mot de passe : </label>
                            </td>
                            <td>
                                <input type="password" id="mdp" name="Mdp">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Photo : </label>
                            </td>
                            <td>
                                <input type="file" name="PhotoVendeur" value="fileupload" id="fileupload">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Image de Fond: </label>
                            </td>
                            <td>
                                <input type="file" name="ImageFond" value="fileupload" id="fileupload">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p><font size="2" >Nous ne transmettrons pas vos informations à des tiers</font></p>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="right"><input type="submit" value="S'inscrire"></a></td>
                        </tr>



                    </form>
                    <br>
                </table>

                <br><br>
                <a href="vendeur.php">Déjà membre ?</a>

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
