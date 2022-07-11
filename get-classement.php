<?php
require 'connexion.php';

$requete_classement = $connexion->prepare("SELECT * FROM `classement` as c INNER JOIN users as u ON u.id_users = c.fk_id_users INNER JOIN jeux as j ON j.id_jeux = c.fk_id_jeux;");
$requete_classement->execute();
$value_classement = $requete_classement->fetchAll(PDO::FETCH_ASSOC);