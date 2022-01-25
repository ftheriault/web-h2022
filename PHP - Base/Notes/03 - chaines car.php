<?php
	$mot = "Lorem ipsum sin dolori";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les chaînes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Mot : <?= $mot ?> </h1>
		<div>Longueur : <?= strlen($mot) ?> </div>
		<div>Position orem : <?= strpos($mot, "orem") ?> </div>
		<div>Remplacer : <?= str_replace("rem", "gique", $mot) ?> </div>
		<div>Substring : <?= substr($mot, 1, 4) ?> </div>
	</body>
</html>







