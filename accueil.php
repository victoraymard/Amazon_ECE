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
    <title>Amazon ECE - Accueil</title>
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
                <li><a href="panier.php">Panier</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>


    </header><br>








    <div id= "corps">
        <div id="ventes_flash">



            <div id="carrousel">
                <ul>
                    <!--livres-->
                    <li><img src="images/apple1.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple2.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple3.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple4.jpg" width="525" height="300" /></li>

                    <!--musiques-->
                    <li><img src="images/apple5.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple6.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple7.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple1.jpg" width="525" height="300" /></li>

                    <!--vêtements-->
                    <li><img src="images/apple2.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple3.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple4.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple5.jpg" width="525" height="300" /></li>

                    <!--sports et loisirs-->
                    <li><img src="images/apple6.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple7.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple.jpg" width="525" height="300" /></li>
                    <li><img src="images/apple6.jpg" width="525" height="300" /></li>
                </ul>
            </div>

            <div id="accroche">
                <div id="fleche">
                    <img src="images/fleche.png" alt="fleche Amazon ECE" />
                </div>

                <div id="message">
                    <p>
                        Découvrez nos<br/>meilleurs ventes !
                    </p>
                </div>
            </div>


        </div>











        <div id="section">
            <div id="liste_produits">


                <h2>Découvrez nos produits !</h2>




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

                <div class="produit">
                    <div class="produit_gauche">
                        <a href="produit.php"><h3>nom du produit</h3></a>
                        <a href="produit.php"><img src="images\apple6.jpg"></a>
                    </div>

                    <div class="produit_droite">
                        <p>
                        <h4>Description courte du produit</h4><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="produit">
                    <div class="produit_gauche">
                        <a href="produit.php"><h3>nom du produit</h3></a>
                        <a href="produit.php"><img src="images\apple5.jpg"></a>
                    </div>

                    <div class="produit_droite">
                        <p>
                        <h4>Description courte du produit</h4><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>

                <div class="produit">
                    <div class="produit_gauche">
                        <a href="produit.php"><h3>nom du produit</h3></a>
                        <a href="produit.php"><img src="images\apple4.jpg"></a>
                    </div>

                    <div class="produit_droite">
                        <p>
                        <h4>Description courte du produit</h4><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>









            </div>

            <div id="petit_message">

                <img src="images/bulle.png" alt="" id="fleche_bulle" />
                <p id="photo_sympa">
                    <img src="images/ned_flanders.png" alt="Photo sympa" />
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

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