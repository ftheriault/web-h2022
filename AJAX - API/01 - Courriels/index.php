<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script>
				// En 3 temps,
				// D'abord le fetch, quand le retour est arrivé,
				// Faire le premier then, qui décode le JSON, quand c'est terminé
				// Faire le dernier then, qui fait notre logique finale

				// N'oubliez pas l'onget "Network" de Google Chrome, très pratique pour déboguer
				const checkEmails = () => {
					let formData = new FormData();
					formData.append("username", "ken"); // <input type="text" name="username" value="ken">
					formData.append("password", "AAAaaa111");

					fetch("ajax.php", {
						method : "POST", // Comme si on fait une balise <form method="post">
						body : formData
					})
					.then(response => response.json())
					.then(data => {
						document.querySelector("#contenantCourriels").innerHTML = data;
						console.log(data);
						setTimeout(checkEmails, 2000);
					})

					console.log("En premier");
				}	
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>
	
			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div> 
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="checkEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
