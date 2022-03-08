<?php
	require_once("action/CommonAction.php");

	class AjaxAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$result = "";

			if (!empty($_POST["username"])) {
				if ($_POST["username"] === "ken" && $_POST["password"] == "AAAaaa111") {
					$result = rand(0, 10);
				}
				else {
					$result = "INVALID_USERNAME";
				}
			}
			else {
				$result = "EMPTY_USERNAME";
			}

			return compact("result");
		}
	}
