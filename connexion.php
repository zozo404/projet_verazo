<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'projet_verazo';

    try{
        $connexion = new PDO ("mysql:host=localhost;dbname=$dbname;port=3306;charset=utf8", $username,"");        
    }
    catch(PDOException $e){
        echo "ERROR: ".$e->getMessage()."<br>";
        
    }