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

<div id="corps_produit">
    <div id="page_produit_gauche">
        <div id="produit_retour">
            <a href="accueil.php">Retour</a>
            <!--<p>il faut pouvoir revenir à la page précédente, et donc savoir de laquelle il s'agit</p>-->
        </div>

        <div id="produit_images">
            <div id="produit_images_gauche">
                liste d'images + video

                <a href="#"><img src="images\apple1.jpg"></a>
                <a href="#"><img src="images\apple1.jpg"></a>
                <a href="#"><img src="images\apple1.jpg"></a>
            </div>

            <div id="produit_images_droite">
                image principale
                <img src="images\apple1.jpg">
            </div>
            
        </div>
        
    </div>




    <div id="page_produit_droite">
        <table id="table_produit_gauche">
             <tr>
                        <td colspan="2" align="left"><h2>nom du produit</h2></td>
                    </tr>



                    <tr>
                        <td colspan="2" align="left">
                            <p><h3>description</h3><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </td>
                    </tr>
        </table>

            <table id="table_produit_droite">


                    <form> 

                        <tr>
                            <td>
                                Choisissez votre vendeur:
                            </td>

                            <td>
                                <select name="aboutUs:" required placeholder="Sélectionner votre vendeur" >
                                    <option value="vendeur_null">Sélectionner une réponse</option>
                                    <option value="vendeur1">vendeur1</option>
                                    <option value="vendeur2">vendeur2</option>
                                    <option value="vendeur3">vendeur3</option>
                                    <option value="vendeur4">vendeur4</option>
                                </select>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Quantité : </label>
                            </td>
                            <td>
                                <input type="number" maxlength="16">
                            </td>
                        </tr>

                        

                        <tr>
                            <td>
                                <label> Prix unitaire : </label>
                            </td>
                            <td>
                                <output type="text"> 3€</output>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2" align="right"><input type="button" value="inscrire maintenant" onclick="validation()"></td>
                        </tr>


                        
                    </form>
                    <br>
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