<?php
	require_once("action/ContactAction.php");

	$action = new ContactAction();
	$data = $action->execute();

	$pageTitle = "Contactez-nous";
	require_once("partial/header.php");
?>
<div id="page-contact">
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
	</p>
	
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
	</p>
	
	<div>
		<a href="mailto:cvmaqua@cvm.qc.ca">cvmaqua@cvm.qc.ca</a>
	</div>
	
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
	</p>	
</div>
<?php
	require_once("partial/footer.php");