<?php
session_start()
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





                <form> 


                    <tr>
                        <td>
                            <input type="checkbox" id="item_checkbox">

                        </td>
                        <td>
                            <label>
                                <div class="produit">
                                    <div class="produit_gauche">
                                        <a href="produit.php"><h3>nom du produit</h3></a>
                                        <a href="produit.php"><img src="images\apple1.jpg"></a>
                                    </div>

                                    <div class="produit_droite">
                                        <p>
                                            <h4>Description courte du produit</h4><br>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </label>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <input type="checkbox" id="item_checkbox">

                        </td>
                        <td>
                            <label>
                                <div class="produit">
                                    <div class="produit_gauche">
                                        <a href="produit.php"><h3>nom du produit</h3></a>
                                        <a href="produit.php"><img src="images\apple1.jpg"></a>
                                    </div>

                                    <div class="produit_droite">
                                        <p>
                                            <h4>Description courte du produit</h4><br>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </label>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <input type="checkbox" id="item_checkbox">

                        </td>
                        <td>
                            <label>
                                <div class="produit">
                                    <div class="produit_gauche">
                                        <a href="produit.php"><h3>nom du produit</h3></a>
                                        <a href="produit.php"><img src="images\apple1.jpg"></a>
                                    </div>

                                    <div class="produit_droite">
                                        <p>
                                            <h4>Description courte du produit</h4><br>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </label>
                        </td>
                    </tr>







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