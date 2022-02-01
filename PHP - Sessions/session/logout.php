<?php
    require_once("action/logoutAction.php");

    $data = execute();
    
	require_once("partial/header.php");

	?>
	
	Vous êtes déconnecté.
	
	<?php
	
	require_once("partial/footer.php");