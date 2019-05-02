<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="boostrap\css\bootstrap.css" />
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
            <div id="ventes_flash_ventesflash">


                <h2>
                    Découvrez nos meilleurs ventes !
                </h2>

                <p>
                    <a href="#ancre_livres">Livres</a>, 
                    <a href="#ancre_musiques">musiques</a>, 
                    <a href="#ancre_vêtements">vêtements</a>, 
                    <a href="#ancre_sports_loisirs">sports et loisirs</a>
                </p>


            </div>











            <div id="section">
                <div id="liste_produits_categorie">
                    

                   <h2 id="ancre_livres">Nos livres</h2>



                    <!------------------------liste des produits------------------------------------------------------->
                    <div class="produit_categorie">
                        <div class="produit_gauche_categorie">
                            
                            <img src="images\notre_dame.jpg">
                        </div>

                        <div class="produit_droite_categorie">
                            <h3>nom du produit</h3>
                            <p>
                                <h4>Description courte du produit</h4><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                                quantité
                            </p>
                            <p>
                                à partir de (prix le plus bas)
                            </p>
                        </div>      
                    </div>


                    <h2 id="ancre_musiques">Nos musiques</h2>
                    <div class="produit_categorie">
                        <div class="produit_gauche_categorie">
                            
                            <img src="images\notre_dame.jpg">
                        </div>

                        <div class="produit_droite_categorie">
                            <h3>nom du produit</h3>
                            <p>
                                <h4>Description courte du produit</h4><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                                quantité
                            </p>
                            <p>
                                à partir de (prix le plus bas)
                            </p>
                        </div>      
                    </div>

                    <h2 id="ancre_vêtements">Nos vêtements</h2>
                    <div class="produit_categorie">
                        <div class="produit_gauche_categorie">
                            
                            <img src="images\notre_dame.jpg">
                        </div>

                        <div class="produit_droite_categorie">
                            <h3>nom du produit</h3>
                            <p>
                                <h4>Description courte du produit</h4><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                                quantité
                            </p>
                            <p>
                                à partir de (prix le plus bas)
                            </p>
                        </div>      
                    </div>

                    <h2 id="ancre_sports_loisirs">Nos accessoires de sports et loisirs</h2>
                    <div class="produit_categorie">
                        <div class="produit_gauche_categorie">
                            
                            <img src="images\notre_dame.jpg">
                        </div>

                        <div class="produit_droite_categorie">
                            <h3>nom du produit</h3>
                            <p>
                                <h4>Description courte du produit</h4><br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <p>
                                quantité
                            </p>
                            <p>
                                à partir de (prix le plus bas)
                            </p>
                        </div>      
                    </div>



                    
                    
                    <!-------------------------------------fin produits------------------------------------------>
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