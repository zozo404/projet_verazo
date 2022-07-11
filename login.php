<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/connexion.css">
    <link rel="icon" type="image/png" href="img/pirate-zoom.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
	<title>Connexion Verazo</title>

</head>
<body class="h-screen overflow-hidden  font-mono general flex-col overflow-y-auto" id="Accueil">
		<header class="container-menu">
			<div class="menu font-xbones">
					<p class="my-5">Verazo island</p>
					<div class="menu-accueil"><a href="#Accueil">Accueil</a></div>
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
							<a id="" class="accueil lienNav" href="#Accueil">accueil</a>
							<a id="" class="jeu lienNav" href="jeux.php">jeu</a>
							<a id="" class="présentation lienNav" href="présentation.php">présentation</a>
							<a id="" class="news lienNav" href="index.php #News">news</a>
							<a id="" class="classement lienNav" href="index.php #Classement">classement</a>
							<a id="" class="contact lienNav" href="index.php #Contact">Contact</a>
							<a id="" class="login lienNav" href="login.php">login</a>
						</div>
						<div class="invisible"></div>
					</div>
			</div>
						
		</header>
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
						style="background-image: url('img/navire.png')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none font-bleu">
						<h3 class="pt-4 text-2xl text-center font-xbones">Identifiez-vous, matelOt !</h3>
						<p class="text-center">Pour poursuivre votre aventure !</p>
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0 w-full">
									<label class="block mb-2 text-sm font-bold text-gray-700 font-xbones" for="firstName">
										Nom de pirate
									</label>
									<input
										class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline font-xbones"
										id="firstName"
										type="text"
										placeholder="Nom de pirate"
									/>
								</div>
							</div>
							
							<div class="mb-4 md:flex md:justify-between">
								<div class="mb-4 md:mr-2 md:mb-0">
									<label class="block mb-2 text-sm font-bold text-gray-700 font-xbones" for="password">
										Mot de passe
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline font-xbones"
										id="password"
										type="password"
										placeholder="******************"
									/>
									<p class="text-xs italic text-red-500 font-xbones hidden">Mettez votre mot de passe.</p>
								</div>
								<div class="md:ml-2">
									<label class="block mb-2 text-sm font-bold text-gray-700 font-xbones" for="c_password">
										Confirmez mot de passe
									</label>
									<input
										class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline font-xbones"
										id="c_password"
										type="password"
										placeholder="******************"
									/>
								</div>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-40 px-4 py-2 font-bold text-white bg-cyan-300 color-black rounded-full hover:bg-cyan-400 focus:outline-none focus:shadow-outline font-xbones register-spacing text-black"
									type="button"
								>
									C'est parti !
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="#"
								>
									Mot de passe oublié ?
								</a>
							</div>
							<div class="text-center">
								<a
									class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
									href="inscription.php"
								>
									Pas de compte ? Inscris toi !
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<!-- partie footer  -->
	<footer class="footer-general">
                <div class="footer-div-haut">
                	<div class="footer-div-haut"></div>
                    <p class="copyright mb-3 text-black">&copy; Projet Verazo</p>
                </div>
                <hr>
                <div class="footer-div-bas">
                    <img src="./img/logo insta.png" alt="logo insta">
                    <img src="./img/twitter.png" alt="logo twitter">
                </div>
	</footer>
</body>
</html>
