<?php
	session_start();

	function execute() {
		$email = null;
		$connectionError = false;
		
		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {
				$_SESSION["isConnected"] = true;
				$email = $_POST["courriel"];
			}
			else {
				$connectionError = true;
			}
		}
		
		return compact("email", "connectionError");
	}