<?php
	session_start();

	function execute() {	
		if (!isset($_SESSION["posts"])) {
			$_SESSION["posts"] = array();
		}

		$memos = $_SESSION["posts"];
		
		return compact("memos");
	}

