<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation</title>
    <link rel="icon" type="image/png" href="img/pirate-zoom.png"/>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/presentation.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300" rel="stylesheet">

</head>
<body>
    <div id="Accueil" class="general">
        <header class="container-menu font-xbones">
            <div class="menu">
                <p>Verazo island</p>
            <!-- top du site / menu navbar / header -->
                <div class="menu-accueil"><a href="index.php">Accueil</a></div>
                <div class="menu-jeux"><a href="jeux.php">Jeux</a></div>
                <div class="menu-presentation"><a href="presentation.php">Présentation</a></div>
                <div class="menu-news"><a href="index.php #News">News</a></div>
                <div class="menu-classement"><a href="index.php #Classement">Classement</a></div>
                <div class="menu-contact"><a href="index.php #Contact">Conctact</a></div>
                <div class="menu-login"><a href="connexion.php" target="_blank">Login</a></div>
                

                <!--  ||||  BOUTON NAVBAR |||||| -->
                <div class="nav-mobile">
                    <img class="img-nav" src="./img/crane-de-pirate.png">
            
                    <div class="container-carte">
                    <a id="lienNav" class="accueil" href="index.php">accueil</a>
                    <a id="lienNav" class="jeu" href="">jeu</a>
                    <a id="lienNav" class="présentation" href="">présentation</a>
                    <a id="lienNav" class="news" href="index.php #News">news</a>
                    <a id="lienNav" class="login" href="connexion.php">login</a>
                    <a id="lienNav" class="classement" href="index.php #Classement">classement</a>
                    </div>
                    <div class="invisible"></div>
                </div>
            </div>
            
        </header>
        <div id="Accueil" class="image-accueil">
            <img class="image-accueil-pirate" src="./img/pirate.jpg">
        </div>
            <div class="presentation-haut">
                <p>
                    Qui sommes-nous ?
                </p>
            </div>
            <div class="presentation-body">
                <div class="presentation-bloc-texte">
                    <p class="presentation-texte">
                        Et olim licet otiosae sint tribus pacataeque centuriae et nulla suffragiorum certamina set Pompiliani redierit securitas temporis, per omnes tamen quotquot sunt partes terrarum, ut domina suscipitur et regina et ubique patrum reverenda cum auctoritate canities populique Romani nomen circumspectum et verecundum.
                    </p>
                </div>
                <div class="presentation-bloc-personne">
                    <!-- FAIRE GENERATION EN PHP / FOREACH -->
                    <div class="presentation-bloc-personne1">
                        <div class="presentation-personne-image">
                            <img src="./img/big.png">
                        </div>
                        <div class="presentation-personne-texte">
                            <p class="personne-texte">Je suis <span class="font-xbones">Enzo</span></p>
                        </div>
                    </div>
                    <div class="presentation-bloc-personne2">
                        <div class="presentation-personne-image">
                            <img src="./img/big.png">
                        </div>
                        <div class="presentation-personne-texte">
                            <p class="">Je suis <span class="font-xbones">Rayan</span></p>
                        </div>
                    </div>
                    <div class="presentation-bloc-personne3">
                        <div class="presentation-personne-image">
                            <img src="./img/big.png">
                        </div>
                        <div class="presentation-personne-texte">
                            <p class="">Je suis <span class="font-xbones">Véronique</span></p>
                        </div>
                    </div>
                    <!-- FIN PHP FOREACH -->
                </div>
            </div>
            
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