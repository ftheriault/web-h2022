<?php
	function hasher($mot, $salt = "asdf") {
		$result = "";

		$result = sha1($mot . $salt);

		return $result;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<?= hasher("John") ?>
	</body>
</html>







