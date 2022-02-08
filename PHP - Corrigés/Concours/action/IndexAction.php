<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $successMessage = "";
            $errorMessage = "";

            if (!empty($_POST["name"])) {
                if (empty($_SESSION["alreadyParticipated"])) {
                    StatsDAO::save($_POST["name"], $_POST["type"]);
                    $_SESSION["alreadyParticipated"] = true;
                    $successMessage = "Inscription complétée";
                }
                else {
                    $errorMessage = "Vous êtes déjà inscrit au concours";
                }
            }

            return compact("successMessage", "errorMessage");
        }
    }