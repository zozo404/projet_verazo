<?php
session_start();
if(!$_SESSION['mdp']){
    
  echo json_encode([
    'error' => true,
    'message' => 'Vous n\'avez pas accès à ces données'
  ]);

  }

////////////////////////////


require '../connect_bdd.php';

////////////////////////////////////////////

  $requete = $connexion->prepare("SELECT * FROM users");

  $requete ->execute();

  $users = $requete->fetchAll(PDO::FETCH_ASSOC);

  echo json_encode($users);
  die;
