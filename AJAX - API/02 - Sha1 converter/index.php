<?php 
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();	
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Sha1</title>
        <link href="css/global.css" rel="stylesheet" />
        <script src="js/javascript.js"></script>
        <meta charset="utf-8"/>
    </head>
    <body>
		<div class="sectionKey"></div>
		<div class="sectionAuthentification">
			<h1>
				Sha1 Converter
			</h1>

			<div class="formLabel"><label for="texte"> Texte : </label></div>
			<div class="formInput"><input type="text" name="texte" id="texte" /></div>
			<div class="formSeparator"></div>

			<div id="result">
			</div>
		</div>
    </body>
</html>