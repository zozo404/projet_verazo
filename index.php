<?php
require 'mail.php';
require 'connexion.php';
require 'get-classement.php';

$requete = $connexion->prepare("SELECT * FROM news");
$requete->execute();
$value = $requete->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Accueil-Projet verazo</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="./assets/js/app.js"></script>
    <link rel="icon" type="image/png" href="img/pirate-zoom.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
</head>
<body>
    <div id="Accueil" class="general">
            <!-- top du site / menu navbar / header ||||||||||||-->
        <header class="container-menu">
            <div class="menu font-xbones">
                <p>Verazo island</p>
                <div class="menu-accueil"><a href="#Accueil">Accueil</a></div>
                <div class="menu-jeux"><a href="jeux.php">Jeux</a></div>
                <div class="menu-presentation"><a href="presentation.php">Présentation</a></div>
                <div class="menu-news"><a href="#News">News</a></div>
                <div class="menu-classement"><a href="#Classement">Classement</a></div>
                <div class="menu-contact"><a href="#Contact">Conctact</a></div>
                <div class="menu-login"><a href="login.php" target="_blank">Login</a></div>

                <!--  ||||  BOUTON NAVBAR |||||| -->
                <div class="nav-mobile">
                    <img class="img-nav" src="./img/crane-de-pirate.png">
            
                    <div class="container-carte">
                    <a id="" class="accueil lienNav" href="#Accueil">accueil</a>
                    <a id="" class="jeu lienNav" href="jeux.php">jeu</a>
                    <a id="" class="présentation lienNav" href="présentation.php">présentation</a>
                    <a id="" class="news lienNav" href="#News">news</a>
                    <a id="" class="classement lienNav" href="#Classement">classement</a>
                    <a id="" class="contact lienNav" href="#Contact">Contact</a>
                    <a id="" class="login lienNav" href="login.php">login</a>
                    </div>
                    <div class="invisible"></div>
                </div>
            </div>
            
        </header>
            <!-- FIN top du site / menu navbar / header ||||||||||||-->
        
        <!-- image d'accueil -->
        <div id="Accueil" class="image-accueil">
            <img class="image-accueil-pirate" src="./img/pirate.jpg">
        </div>

        <!-- body corps de la page -->
        
            <div class="container-body">
                 <!-- FAIRE GENERATION EN PHP / FOREACH -->
                <div class="container-body-haut">
                    <div class="container-jeu-texte">
                        <p>Suspendisse potenti. Nullam ut ligula id arcu porttitor cursus ut ut metus. Sed finibus feugiat leo sed malesuada. Proin a imperdiet augue, vel rhoncus diam. In turpis enim, ornare in eleifend eget, lobortis et lorem. Duis at dolor tellus. Etiam vestibulum lacus in mauris aliquam aliquet.</p>
                    </div>
                    <div class="container-jeu-image">
                        <img src="./img/pirate_serpent.png" class="image-jeu">
                    </div>
                </div>
                <hr>
                <div class="container-body-milieu">
                    <div class="container-jeu-texte">
                        <p>Suspendisse potenti. Nullam ut ligula id arcu porttitor cursus ut ut metus. Sed finibus feugiat leo sed malesuada. Proin a imperdiet augue, vel rhoncus diam. In turpis enim, ornare in eleifend eget, lobortis et lorem. Duis at dolor tellus. Etiam vestibulum lacus in mauris aliquam aliquet.</p>
                    </div>
                    <div class="container-jeu-image">
                        <img src="./img/puissance4.png" class="image-jeu">
                    </div>
                </div>
                <hr>
                <div class="container-body-bas">
                    <div class="container-jeu-texte">
                        <p>Suspendisse potenti. Nullam ut ligula id arcu porttitor cursus ut ut metus. Sed finibus feugiat leo sed malesuada. Proin a imperdiet augue, vel rhoncus diam. In turpis enim, ornare in eleifend eget, lobortis et lorem. Duis at dolor tellus. Etiam vestibulum lacus in mauris aliquam aliquet.</p>
                    </div>
                    <div class="container-jeu-image">
                        <img src="./img/luffy5.jpg" class="image-jeu">
                    </div>
                </div>



                 <!-- FIN GENERATION EN PHP / FOREACH -->
            </div>
            <hr id="News">

            <!-- NEWS + Classement -->
            <div class="bottom_container margin-news">
                <h1 class="font-xbones">News</h1>
                

                <div class="nc_container">

                    <section class="nc_news">

                    <?php 
                        foreach($value as $send):
                    ?>
                        <div class="nc_blocnews">
                            
                            <div class="nc_bloctitle">
                            <h2><?php echo $send["titre_news"]?></h2>
                            </div>

                            <div class="nc_bloctxt">
                                <p class="nc_text"><?php echo $send["contenu_news"]?></p>
                            </div>

                        </div>
                    <?php
                    endforeach;
                    ?>
                    </section>
                    <hr id="Classement">


            <!-- !!!!!!!!!!!! -->
                        

                    <section class="nc-classement margin-classement">
                        <h1 class="titre-classement font-xbones">Classement</h1>

                        <?php
                        foreach($value_classement as $send):
                        ?>
                        <div class="classement classement-premier">
                            <div class="div-joueur">
                                <p class="nom-joueur"><?php echo $send['nom_users']?></p>
                                <img alt="avatar du joueur" src="<?=$send['avatar_users']?>">
                                <p class="pseudo-joueur">@<?php echo $send['pseudo_users']?></p>
                            </div>
                            <div class="div-numero">
                                <p class="font-xbones"><b><?php echo $send['position_classement']?></b></p>
                            </div>
                            <div class="div-or">
                                <p><b><?php echo $send['or_users']?></b><br> pièces d'or</p>
                            </div>
                            <div class="div-jeux">
                                <a href="">
                                    <img src="<?=$send['image_jeu']?>">
                                </a>
                            </div>
                        </div>
                        <?php
                        endforeach;
                        ?>
                        
                        


                    </section>


                </div>


            </div>
            <hr>

            <!-- partie contact formulaire  -->
            <div id="Contact" class="footer_container">



                <div class="footer_blocdroit">

                    <div class="footer_titrebloc1">
                        <h1 class="footer_blocform">Contact</h1>
                    </div>
                
                        

                    <div class="footer_formbloc">

                    <!-- formulaire email -->
                    
                        <form class="footer_formulaire" method="post" action="mail.php" id="form1">

                            <div class="formpart">
                                <input class="form_champ form-contact ubuntu-bold" type="text" placeholder="Votre nom" id="name" type="text" name="name" required>
                            </div>


                            <div class="formpart ">
                                <input class="form_champ form-contact ubuntu-bold" type="text"  placeholder="Votre email" id="email" type="email" name="email" required>
                            </div>
                            <div class="user-box">
                                <input class="form_champ form-contact ubuntu-bold" minlength="5" type="text" name="objet" id="objet" required placeholder="Objet">
                            </div>

                            <div class="formpart">
                                <textarea class="form_txt ubuntu-bold"  placeholder="Votre message"  required id="formText" name="formText"></textarea>
                            </div>

                            <div class="formpart" id="form_btn">
                                <input class=" font-xbones form_champ form-champ-btn btn-validation" type="submit" name="submit" value="Envoyer" id="sub" class="form_bouton" style="background-color:#827FFE;color:whitesmoke">
                            </div>
                        
                        </form>
                        

                    </div>



                </div>


            </div>

            <!-- partie footer  -->
            <footer class="footer-general">
                <div class="footer-div-haut">
                <div class="footer-div-haut"></div>
                    <p class="copyright">&copy; Projet Verazo</p>
                </div>
                <hr>
                <div class="footer-div-bas">
                    <img src="./img/logo insta.png" alt="logo insta">
                    <img src="./img/twitter.png" alt="logo twitter">
                </div>
            </footer>


        



    </div>


</body>
</html>