<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/ContentDAO.php");

    class AdminIndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
        }

        protected function executeAction() {
            $savedSuccessfully = false;
            
            if (!empty($_POST["text"])) {
                ContentDAO::setIndexText($_POST["text"]);
                $savedSuccessfully = true;
            }

            $indexText = ContentDAO::getIndexText();
            
            return compact("indexText", "savedSuccessfully");
        }
    }