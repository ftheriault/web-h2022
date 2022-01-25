<?php
	// $_GET["info"] ou $_POST["info"] (si méthode = post)
	$showBox = false;

	if (!empty($_GET["info"]) && strlen($_GET["info"]) > 5) {
		$showBox = true;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			// !empty = variable existe, elle n'est pas nulle, elle n'est pas "", ni 0
			if ($showBox) {
				?>
				<div style="color:green;background-color:#999;border:1px solid black">
					Bravo!
				</div>
				<?php
			}
		?>
		<form action="04 - formulaire.php" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







