<?php
	session_start();

	function execute() {			
		if (!isset($_SESSION["posts"])) {
			$_SESSION["posts"] = [];
		}
		
		if (isset($_POST["text"])) {
			$post = [];
			$post["text"] = $_POST["text"];
			$post["x"] = $_POST["x"];
			$post["y"] = $_POST["y"];
			
			$_SESSION["posts"][] = $post;
		}		
		else if (isset($_GET["clear"])) {
			session_unset();
			session_destroy();
			session_start();
			$_SESSION["posts"] = [];
		}
		
		$memos = $_SESSION["posts"];
		
		return compact("memos");
	}

