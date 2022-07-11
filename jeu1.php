<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet verazo</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/jeu.css">
    <link rel="icon" type="image/png" href="img/pirate-zoom.png"/>
    <link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    
</head>
<body>
    <div class="fond" id="fond">
        
    </div>
     

    <div class="general">
        <header class="container-menu font-xbones">
 
         
            <div class="menu">
                <p>Verazo island</p>
            <!-- top du site / menu navbar / header -->
                <div class="menu-accueil"><a href="index.php">Accueil</a></div>
                <div class="menu-jeux"><a href="jeux.php">Jeux</a></div>
                <div class="menu-presentation"><a href="presentation.php">Présentation</a></div>
                <div class="menu-news"><a href="index.html #News">News</a></div>
                <div class="menu-classement"><a href="index.php #Classement">Classement</a></div>
                <div class="menu-login"><a href="login.php">Login</a></div>

                <!--  ||||  BOUTON NAVBAR |||||| -->
                 <div class="nav-mobile">
                    <img class="img-nav" src="./img/crane-de-pirate.png">
            
                    <div class="container-carte">
                    <a id="" class="accueil lienNav" href="index.php">accueil</a>
                    <a id="" class="jeu lienNav" href="jeux.php">jeu</a>
                    <a id="" class="présentation lienNav" href="presentation.php">présentation</a>
                    <a id="" class="news lienNav" href="index.php #News">news</a>
                    <a id="" class="classement lienNav" href="index.php #Classement">classement</a>
                    <a id="" class="news lienNav" href="index.php #Contact">contact</a>
                    <a id="" class="login lienNav" href="login.php">login</a>
                    </div>
                    <div class="invisible"></div>
                </div>
            </div>
            <div class="ecrans-jeu-contener">
                <img alt="croix close" class="croix" src="./img/close.png">
                <div class="ecrans-jeu">
                    
                </div>
            </div>
             

        </header>
        
 
        <!-- image d'accueil -->
        <div class="image-accueil">
            <img class="image-accueil-pirate" src="./img/test.jpg">
        </div>

        <div class="contener-mid-jeu">
            <div class="image-jeu">
                <img class="image-jeu1" src="./img/jeu1test.jpg">
            </div>
            <div class="contener-note">
                <i class="nes-icon is-large star is-empty" id="star-un" data-chiffre="un"></i>
                <i class="nes-icon is-large star is-empty" id="star-deux" data-chiffre="deux"></i>
                <i class="nes-icon is-large star is-empty" id="star-trois" data-chiffre="trois"></i>
                <i class="nes-icon is-large star is-empty" id="star-quatre" data-chiffre="quatre"></i>
                <i class="nes-icon is-large star is-empty" id="star-cinq" data-chiffre="cinq"></i>
            </div>
            <div class="contener-description-jeu">
                One dollar and eighty-seven cents. That was all. And sixty cents of it was in pennies. Pennies saved one and two at a time by bulldozing the grocer and the vegetable man and the butcher until one’s cheeks burned with the silent imputation of parsimony that such close dealing implied. One dollar and eighty-seven cents. And the next day would be Christmas...

            </div>
            <div class="bouton-jouer">
                <button id="bouton-jeu" class="bouton-jeu">start</button>
                 
            </div>
        </div>

        <!-- body corps de la page -->
        



 








    </div>

    <script src="./assets/js/note.js"></script>
    <script src="./assets/js/app.js"></script> 
    <script src="./assets/js/start.js"></script> 

</body>
</html>