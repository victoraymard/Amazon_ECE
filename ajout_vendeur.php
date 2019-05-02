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











            <div id="section_votreCompte">


                <table frame="box">

                    <tr>
                        <td colspan="2" align="left"><h1>Enregistrement de l'utilisateur</h1></td>
                    </tr>



                    <tr>
                        <td colspan="2" align="left"><p>Veuillez remplir le formulaire suivant pour ajouter un vendeur:</p> </td>
                    </tr>


                    <form> 

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
                                <input type="text" id="nom">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Pseudo : </label>
                            </td>
                            <td>
                                <input type="text" id="pseudo">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Mail : </label>
                            </td>
                            <td>
                                <input type="email" id="mail">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Mot de passe : </label>
                            </td>
                            <td>
                                <input type="password" id="mdp">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Photo : </label>
                            </td>
                            <td>
                                <input type="file" name="fileupload" value="fileupload" id="fileupload">
                                <!-- peut être utile 

                                    <form action="myform.cgi">
                                        <input type="file" name="fileupload" value="fileupload" id="fileupload">
                                        <label for="fileupload"> Select a file to upload</label>
                                        <br><input type="image" src="/wp-content/uploads/sendform.png" alt="Submit" width="100">
                                    </form>
                                -->
                            </td>
                        </tr>
                        

                        <tr>
                            <td colspan="2" align="right"><a href="vendeur_compte.php"><input type="button" value="inscrire maintenant" onclick="validation()"></a></td>
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
