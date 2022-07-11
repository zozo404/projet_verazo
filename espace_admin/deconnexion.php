<?php

//pour logout, stocker session dans un array
//Détruction cookie session avec redirection à la page connexion

session_start();
$_SESSION = array();
// unset($_COOKIE['pseudo']);
setcookie('pseudo', '', -1);
session_destroy();
header('location:connexion.php');


?>