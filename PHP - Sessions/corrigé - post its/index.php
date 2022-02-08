<?php
	require_once("action/indexAction.php");

	$data = execute();

	require_once("partial/header.php");
?>

		<div style="position:relative;">
			<form action="index.php" method="post">
				<div>
					Qu'avez-vous en tête : <input type="text" name="text" value="" /> x : <input type="text" name="x" value="<?= rand(0, 600) ?>" style="width:50px" /> y : <input type="text" name="y" value="<?= rand(50, 250) ?>" style="width:50px" />
					<input type="submit" value="Ajouter" style="margin-top:30px;" />
				</div>
				<a href="consulter.php">Consulter</a> | <a href="index.php?clear=true">Supprimer</a>
			</form>
			
			<div class="container">
				<?php
					if (sizeof($data["memos"]) > 0) {
						foreach ($data["memos"] as $post) {
							?>
							<div class="post-it" style="top:<?= $post["y"] ?>px;left:<?= $post["x"] ?>px"><?= $post["text"] ?></div>
							<?php
						}
					}	
				?>
			</div>
		</div>
	<?php
	require_once("partial/footer.php");