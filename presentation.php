<?php
require 'connexion.php';

$requete = $connexion->prepare("SELECT * FROM admin");
$requete->execute();
$value = $requete->fetchAll(PDO::FETCH_ASSOC);


?>
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
                <div class="menu-login"><a href="login.php" target="_blank">Login</a></div>
                

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
                        Nous sommes tous les 3 en formations de dévelopeur web et web mobile chez Osengo et, nous avons réunis nos compétences afin de réaliser ce site. Vous pouvez jouer à 3 jeux en rapports avec les pirates, essayer de devenir meilleur que Gol D. Roger.
                    </p>
                </div>
                <div class="presentation-bloc-personne">
                    <!-- FAIRE GENERATION EN PHP / FOREACH -->
                    <?php 
                        foreach($value as $send):
                    ?>
                    <div class="presentation-bloc-personne" style="display: flex; flex-direction:column;">
                        <div class="presentation-personne-image">
                            <img src="<?=$send['avatar_admin']?>" alt="avatar de <?php echo $send['nom_admin']?>">
                        </div>
                        
                        <div class="presentation-personne-texte">
                            <p class="personne-texte">Je suis <span class="font-xbones"><?php echo $send["nom_admin"]?></span></p>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
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
                    <a href="https://www.instagram.com/?hl=fr">
                        <img src="./img/logo insta.png" alt="logo insta">
                    </a>
                    <a href="https://twitter.com/?lang=fr">
                        <img src="./img/twitter.png" alt="logo twitter">
                    </a>
                </div>
            </footer>


    </div>
</body>
</html>