<?php
	require_once("action/LoginAction.php");

	$action = new LoginAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

	<h1>Connexion</h1>

	<div class="login-form-frame">
		<form action="login.php" method="post">
			<?php
				if ($data["hasConnectionError"]) {
					?>
					<div class="error-div"><strong>Erreur : </strong>Connexion erronée</div>
					<?php
				}
			?>

			<div class="form-label">
				<label for="username">Nom d'usager : </label>
			</div>
			<div class="form-input">
				<input type="text" name="username" id="username" />
			</div>
			<div class="form-separator"></div>

			<div class="form-label">
				<label for="password">Mot de passe : </label>
			</div>
			<div class="form-input">
				<input type="password" name="pwd" id="password" />
			</div>
			<div class="form-separator"></div>

			<div class="form-label">
				&nbsp;
			</div>
			<div class="form-input">
				<button type="submit">Connexion</button>
			</div>
			<div class="form-separator"></div>
		</form>
	</div>
<?php
	require_once("partial/footer.php");
