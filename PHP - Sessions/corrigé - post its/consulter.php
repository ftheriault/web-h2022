<?php
	require_once("action/consulterAction.php");

	$data = execute();

	require_once("partial/header.php");
	?>
	
	<div>
		<h1>Les mémos...</h1>
		<ul>
			<?php
				foreach ($data["memos"] as $memo) {
					?>
					<li style="list-style-position:inside;margin-left:10px;"><?= $memo["text"] ?></li>
					<?php
				}
			?>
		</ul>
		<a href="index.php">Retour</a>
	</div>
	
	<?php
	require_once("partial/footer.php");