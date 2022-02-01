<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/global.css" />
	</head>
	<body>
		<div id="container">
			<header>
				<a href="index.php">Accueil</a> - 
				<?php
					if (!empty($_SESSION["isConnected"])) {
						?>
						<a href="prive.php">Privé</a> - 
						<a href="logout.php">Déconnexion</a>						
						<?php
					}
				?>
			</header>