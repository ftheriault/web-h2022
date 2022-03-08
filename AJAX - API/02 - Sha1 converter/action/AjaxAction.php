<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = [];
            $result["data"] = sha1($_POST["chuck"]);   
            $result["original"] = $_POST["chuck"];

            return compact("result");
        }
    }