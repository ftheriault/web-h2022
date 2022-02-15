<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	$pageTitle = "Accueil";
	require_once("partial/header.php");
?>
<div id="page-index">
	<img src="images/water-drop.png" alt= ""/>
	<?= $data["text"] ?>
</div>
<?php
	require_once("partial/footer.php");