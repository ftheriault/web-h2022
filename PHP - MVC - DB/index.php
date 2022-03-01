<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

	<h1>Fortement recommandé avant les gros cours de Web III</h1>

	<div>
		phpx = vue d'une page Web<br>
		phpc = contrôleur/action de la page Web
	</div>

	<p>Depuis 1999 !</p>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</p>
	<p>Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.</p>
	<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.</p>

<?php
	require_once("partial/footer.php");
