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
    <title>Amazon ECE - ajout item</title>
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

                <h2>Formulaire d'insertion d'item</h2>

            </div>











            <div id="section_votreCompte">


                <div id="produit_retour">
                    <a href="vendeur_compte.php">Retour</a>
                    <!--<p>il faut pouvoir revenir à la page précédente, et donc savoir de laquelle il s'agit</p>-->
                </div>


                <table frame="box">

                    <tr>
                        <td colspan="2" align="left"><h1>Enregistrement de l'utilisateur</h1></td>
                    </tr>



                    <tr>
                        <td colspan="2" align="left"><p>Veuillez remplir le formulaire suivant pour vous inscrire sur notre site:</p> </td>
                    </tr>


                    <form> 


                        <tr>
                            <td>
                                <label> Nom : </label>
                            </td>
                            <td>
                                <input type="text" id="nom">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> description : </label>
                            </td>
                            <td>
                                <input type="text" id="description">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> quantité : </label>
                            </td>
                            <td>
                                <input type="text" id="quantite">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> prix unitaire : </label>
                            </td>
                            <td>
                                <input type="number" id="prix_unitaire">
                            </td>
                        </tr>



                        
                        <tr>
                            <td>
                                <label> photo(s) : </label>
                            </td>
                            <td>
                                <input type="file" name="photo_item" value="photo_item" id="photo_item">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> vidéo : </label>
                            </td>
                            <td>
                                <input type="file" name="video_item" value="video_item" id="video_item">
                            </td>
                        </tr>

                        


                        <tr>
                        <td colspan="2" align="right"><input type="button" value="valider" onclick="validation()"></td>
                        </tr>



                        
                    </form>
                    <br>
                </table>

                
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
