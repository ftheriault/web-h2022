<?php
	require_once("action/indexAction.php");

	$data = execute();
	// $data = un dictionnaire
	// ex: $data["username"]
	//     $data["message"]
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Vérification</title>
        <link href="css/global.css" rel="stylesheet"/>
    </head>
    <body>
		<div class="sectionAuthentification">
			<h1>
				Authentification nécessaire ( <?= $data["version"] ?> )
			</h1>
			<?php
				if ($data["hasConnectionError"]) {
					?>
					<div style="color:red;border:1px solid red">
						Connexion erronée !
					</div>
					<?php
				}
			?>
			<form action="" method="post">
				<div class="formLabel"><label for="courriel"> Courriel : </label></div>
				<div class="formInput"><input type="text" name="champCourriel" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel"><label for="pwd"> Mot de passe : </label> </div>
				<div class="formInput"><input type="password" name="champMotDePasse" /></div>
				<div class="formSeparator"></div>
				
				<div class="formLabel">&nbsp;</div>
				<div class="formInput"><input type="image" src="images/submit.png" /></div>
				<div class="formSeparator"></div>
			</form>
		</div>
    </body>
</html>