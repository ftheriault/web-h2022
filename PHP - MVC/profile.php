<?php
	require_once("action/ProfileAction.php");

	$action = new ProfileAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>
	<h1>Ceci est une page privée</h1>

	<p>Sur cette page, vous pourrez modifier votre profil (mot de passe, etc)</p>


<?php
	require_once("partial/footer.php");
