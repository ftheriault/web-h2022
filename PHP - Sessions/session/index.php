<?php
	require_once("action/indexAction.php");
	
	$data = execute();

	require_once("partial/header.php");

	if (!empty($data["email"])) {
		?>
		<p>Bonjour, <b><?= $data["email"] ?></b> !</p>
		<p>Vous pouvez avoir accès à vos données personnelles en cliquant <a href="prive.php">ici</a>.</p>
		<?php
	}
	else {
		if ($data["connectionError"]) {
			?>
			<div class="error-message">
				<strong>Erreur : </strong> Courriel/mot de passe invalide.
			</div>
			<?php
		}
		?>
		<form action="index.php" method="post">
			<div class="form-label">Courriel : </div>
			<div class="form-input"><input type="email" name="courriel" /></div>
			<div class="form-separator"></div>
			
			<div class="form-label">Mot de passe : </div>
			<div class="form-input"><input type="password" name="motDePasse" /></div>
			<div class="form-separator"></div>
			
			<div class="form-label">&nbsp;</div>
			<div class="form-input"><button>Envoyer</button></div>
			<div class="form-separator"></div>
		</form>
		<?php
	}
	
	require_once("partial/footer.php");