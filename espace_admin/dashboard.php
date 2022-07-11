<?php

//pour protéger cet accès : cookies session avec condition
//si session pas déclarée 


session_start();
  if(!$_SESSION['mdp'] && isset($_COOKIE['pseudo'])){ // Si l'user n'est pas connecté

    header('location:connexion.php');

  }





?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">


    <title>Panneau d'administration</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item">Admin</span>
        </a></li>

        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>

        <li><a href="membres.php" id="members">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Membres verazo</span>
        </a></li>


        <li><a href="news.php" id="news">
          <i class="fas fa-comment"></i>
          <span class="nav-item">News</span>
        </a></li>


        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Jeux verazo</span>
        </a></li>
        
      </ul>
    </nav>
     
    <main id="list-users"></main>
    <main id="list-news"></main>
  </div>

  <script src="../assets/js/dashboard.js"></script>
</body>
</html>