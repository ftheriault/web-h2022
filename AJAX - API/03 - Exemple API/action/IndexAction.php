<?php
	require_once("action/CommonAction.php");

	class IndexAction extends CommonAction {
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
			
		}

		protected function executeAction() {
			$json = "";
			$result = "";
			
			if (!empty($_GET["num"])) {
				$json = file_get_contents("https://anapioficeandfire.com/api/characters/" . $_GET["num"]);
				$result = json_decode($json);
			}
			
			return compact("result", "json");
		}
	}


	
	
	
	
	
	