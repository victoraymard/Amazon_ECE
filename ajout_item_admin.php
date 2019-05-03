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


    <link rel="icon" type="image/png" href="images/icone.png" alt="icone Amazon ECE">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <script type="text/javascript">
        function getfile(){
            document.getElementById('fileupload').click();
            document.getElementById('selectedfile').value=document.getElementById('fileupload').value
        }
    </script>
    <title>Amazon ECE - ajout item admin</title>
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




             <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images\item.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Super, un nouveau produit sur le site!</p>

                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Ajout item</h3>
                                <form action="inscription_vendeur.php" method="post">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom *" value="" name="Nom" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Description *" value="" name="Description"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Quantité *" value="" name="Quantite" />
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Prix unitaire *" value="" name="Prix" />
                                            </div>
                                            

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <select name="Categorie" required >
                                                    <option value="defaut">Sélectionner une catégorie</option>
                                                    <option value="categorie1">premiere catégorie</option>
                                                    <option value="categorie2">deuxieme catégorie</option>
                                                    <option value="categorie3">troisieme catégorie</option>
                                                    <option value="categorie4">quatrieme catégorie</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select name="Vendeur" required >
                                                    <option value="defaut">Sélectionner un vendeur</option>
                                                    <option value="vendeur1">premier vendeur</option>
                                                    <option value="vendeur2">deuxieme vendeur</option>
                                                    <option value="vendeur3">troisieme vendeur</option>
                                                    <option value="vendeur4">quatrieme vendeur</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="file" style="display:none" name="Nom_Photo" value="fileupload" id="fileupload"  accept="image/*"/>
                                                <input type="button" value="Choisir les photos de l'item" onclick="getfile()" multiple="" class="btn_selection" />                                            
                                            </div>

                                            <div class="form-group">
                                                <input type="file" style="display:none" name="Nom_Video" value="fileupload" id="fileupload"  accept="video/*"/>
                                                <input type="button" value="Choisir une vidéo de l'item" onclick="getfile()" class="btn_selection"/>                                            
                                            </div>




                                            <input type="submit" class="btnRegister"  value="Enregistrez le!"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






             <!--<div id="section_votreCompte">


                <div id="produit_retour">
                    <a href="vendeur_compte.php">Retour</a>
                    
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
                                Choix du vendeur:
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
