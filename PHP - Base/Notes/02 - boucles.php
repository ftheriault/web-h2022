<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 10; $i++) {
				?>
				<div>
					<input type="radio" name="<?= $i ?>"> <?= $i ?> hey!
				</div>
				<?php
			}

			$j = 10;

			while ($j > 0) {
				$j--;
				echo $j;
			}

			$tab = []; // array();
			$tab[] = "Hello"; // Si les crochets sont collés sur la variable, c'est un push
			$tab[] = "World";

			// phpr = inverse de phpt
			foreach ($tab as $element) {
				?>
				<div>
					<?= $element ?>
				</div>
				<?php
			}

			var_dump($tab);
		?>
	</body>
</html>







