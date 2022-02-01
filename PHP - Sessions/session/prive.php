<?php
	require_once("action/priveAction.php");
	
	$data = execute();

	require_once("partial/header.php");

	?>
	
	Votre numéro de carte de crédit est : <?= $data["cc"] ?>
	
	<?php
	
	require_once("partial/footer.php");