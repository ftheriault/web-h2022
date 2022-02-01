<?php
	session_start();

	function execute() {
		if (empty($_SESSION["isConnected"])) {
			header("location:index.php");
			exit;
		}

		$cc = "4540 1233 5645 3453";
		
		return compact("cc");
	}