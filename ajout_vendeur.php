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
    <title>Amazon ECE - ajout vendeur admin</title>
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

                <h2>Ajout d'un compte vendeur</h2>

            </div>





<a href=""></a>

            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images\admin.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Remplissez ce formulaire pour ajouter un vendeur</p>

                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Ajout d'un vendeur</h3>
                                <form action="inscription_vendeur.php" method="post">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nom" value="" name="Nom" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pseudo" value="" name="Pseudo_Vendeur"required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="******" value="" name="Mdp" required/>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" value="" name="Mail" required/>
                                            </div>

                                            <div class="form-group">
                                                <input type="file" style="display:none" name="PhotoVendeur" value="fileupload" id="fileupload"  accept="image/*"/>
                                                <input type="button" value="Choisir une photo de profile" onclick="getfile()" class="btn_selection"/>
                                            </div>

                                            <div class="form-group">
                                                <input type="file" style="display:none" name="ImageFond" value="fileupload" id="fileupload"  accept="image/*" />
                                                <input type="button" value="Choisir une photo de fond" onclick="getfile()"  class="btn_selection"/>
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



           

        </div>



        <div id="footer">
            <small>
                Droits d'auteur | Copyright &copy; 2019, Amazon ECE.
            </small>
        </div>
    </div>
</body>

</html>
