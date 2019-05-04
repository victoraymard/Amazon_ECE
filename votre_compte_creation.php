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
    <title>Amazon ECE - création compte client</title>
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

                <h2>création d'un compte client</h2>

            </div>






            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images\user.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Plus que 30 secondes et vous pourrez enfin commander cette magnifique paire de palmes qui vous fait de l'oeil depuis des mois!</p>

                        <a href="votre_compte.php"><input type="submit" name="" value="Connectez-vous!"/><br/></a>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Enregistrement acheteur</h3>
                                <form action="inscription_acheteur.php" method="post">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h4>Informations personnelles</h4>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom *" value="" name="Nom" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Prénom *" value="" name="Prenom" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="Date de naissance *" value="" name="DateNaissance" required/>
                                            </div>


                                            <div class="form-group">
                                                <select name="Civilite" required placeholder="Sélectionner votre vendeur">
                                                    <option value="">Sélectionner une réponse</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mme">Mme</option>
                                                    <option value="Mlle">Mlle</option>
                                                    <option value="Autre">Autre</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email *" value="" name="Mail" required/>
                                            </div>



                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Mot de passe *" value="" name="Mdp" required/>
                                            </div>


                                            <div class="form-group">
                                                <h4>Informations de livraison</h4>
                                            </div>


                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Adresse *" value="" name="Adresse" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Code postal *" value="" name="CodePostal" required length="5" />
                                            </div>



                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ville *" value="" name="Ville" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pays *" value="" name="Pays" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Numéro de téléphone *" value="" name="Telephone" length="10" required/>
                                            </div>









                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                <h4>Informations de paiement</h4>
                                            </div>


                                            <div class="form-group">
                                                <select name="TypeDeCarte:" required>
                                                    <option value="reponseParDefault">Sélectionner une réponse</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="American Express">American Express</option>
                                                    <option value="Paypal">Paypal</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Numéro de carte *" value="" name="NumCarte" length="16" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom sur la carte *" value="" name="NomCarte" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Cryptogramme *" value="" name="Crypto" lenghth="3" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="Date d'expiration *" value="" name="DateCarte" required/>
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


                    <form action="inscription_acheteur.php" method="post">

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
                                <input type="text" id="nom" name="Nom" placeholder="Nom" required>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Prénom : </label>
                            </td>
                            <td>
                                <input type="text" id="prenom" name="Prenom" placeholder="Prenom" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Date de naissance : </label>
                            </td>
                            <td>
                                <input type="date" id="datenaissance" name="DateNaissance" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Civilite : </label>
                            </td>
                            <td>
                                <select name="Civilite" required placeholder="Sélectionner votre vendeur">
                                    <option value="">Sélectionner une réponse</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mme">Mme</option>
                                    <option value="Mlle">Mlle</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Mail : </label>
                            </td>
                            <td>
                                <input type="email" id="mail" name="Mail" placeholder="BonneNote@ing4.oklm" required>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <label> Mot de passe: </label>
                            </td>
                            <td>
                                <input type="password" id="mdp" name="Mdp" placeholder="******" required>
                            </td>
                        </tr>



                        <tr>
                            <td>
                                <h3>Informations de livraison</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label> Adresse : </label>
                            </td>
                            <td>
                                <input type="text" id="adresse" name="Adresse" placeholder="67 rue delapiscine" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Code postal : </label>
                            </td>
                            <td>
                                <input type="number" maxlength="5" id="code_postal" name="CodePostal" placeholder="97419" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Ville : </label>
                            </td>
                            <td>
                                <input type="text" id="ville" name="Ville" placeholder="Paris" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Pays : </label>
                            </td>
                            <td>
                                <input type="text" id="pays" name="Pays" placeholder="France" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Telephone : </label>
                            </td>
                            <td>
                                <input type="number" maxlength="10" id="tel" name="Tel" placeholder="0666060606" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h3>Informations de paiement</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Quel est votre moyen de paiement ?:
                            </td>

                            <td>
                                <select name="aboutUs:" required placeholder="Sélectionner votre majeure" >
                                    <option value="reponseParDefault">Sélectionner une réponse</option>
                                    <option value="Visa">Visa</option>
                                    <option value="MasterCard">MasterCard</option>
                                    <option value="American Express">American Express</option>
                                    <option value="Paypal">Paypal</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Numéro de carte : </label>
                            </td>
                            <td>
                                <input type="number" maxlength="16" name="NumCarte" placeholder="************4572" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Nom sur la carte : </label>
                            </td>
                            <td>
                                <input type="text" id="nom_carte" name="NomCarte" placeholder="Mme Piscine" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Cryptogramme : </label>
                            </td>
                            <td>
                                <input type="number" maxlength="3" id="crypto" name="Crypto" placeholder="666" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label> Date de d'expiration : </label>
                            </td>
                            <td>
                                <input type="date" id="datecarte" name="DateCarte" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p><font size="2" >Nous ne transmettrons pas vos informations à des tiers</font></p>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" align="right"><input type="submit" value="S'inscrire"></td>
                        </tr>
                    </form>
                    <br>
                </table>

                <br><br>
                <a href="votre_compte.php">Déjà client ?</a>

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
