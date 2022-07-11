<?php

//quand l'user tente de se connecter : verif si champs remplis. Si pas, msg d'erreur.
//Création nom admin+mdp
//htmlspecialchars : évite d'entrer du html brut dans les champs
//condition pour vérifier que saisi pareil que par defaut
//ajoût du cookie de session
//redirection vers page espace admin si tout ok

session_start();

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
        $pseudo_par_defaut = "verazo";
        $mdp_par_defaut = "verazo456";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut && $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp']= true;
            setcookie('pseudo', $pseudo_saisi, 86000);
            header('location: dashboard.php');

        }else{
            echo "Votre pseudo ou votre mot de passe est incorrect.";

        }

    }else{
        echo "Veuillez remplir tous les champs !";

    }




}











?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion Admin</title>
</head>
<body>

    <div class="container_form">
        <form action="" method="post">
            <div>
                <label for="pseudo">Ton pseudo</label>
                <input type="text" name="pseudo" id="pseudo">

            </div>

            <div>
                <label for="mdp">Ton mot de passe</label>
                <input type="password" name="mdp" id="mdp">

            </div>

            <div>
                <input type="submit" name="valider" value="Se connecter">

            </div>




        </form>

    </div>

    
</body>
</html>